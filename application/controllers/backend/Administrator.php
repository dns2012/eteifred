<?php 
class Administrator extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelAdministrator");
    }

    public function index() {
        $data["page"] = "admin";
        $data['admin'] = $this->ModelAdministrator->getAll();
        $this->load->view("backend/administrator/index", $data);
    }

    public function form($id=0) {
        $data["page"] = "admin";
        $data["id"] = $id;
        if(!empty($id)) {
            $data["admin"] = $this->ModelAdministrator->getById($id);
            if(empty($data["admin"])) {
                redirect("admin/user");
            }
        }
        $this->load->view("backend/administrator/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if(!empty($_FILES['image']['name'])){
            $time = time();
            $image_name =  $time.$_FILES['image']['name'];
            $config['upload_path'] 		= $this->config->item('uploadAdminBackend');
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
            $config['file_name'] 		= $image_name;
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
        }else{
            $image_name = $post['image'];
        }
        if($id == 0) {
            $checkEmail = $this->ModelAdministrator->getByEmail($post["email"]);
            if(!empty($checkEmail)) {
                $this->session->set_flashdata("warning", "Email already registered");
                redirect("admin/user/form/0");
            } else {
                $array = array(
                    "name"  =>  $post["name"],
                    "email" =>  $post["email"],
                    "password" => password_hash($post["password"], PASSWORD_DEFAULT),
                    "image" => $image_name,
                    "description" => $post["description"],
                    "role" => $post["role"],
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                );
                $this->ModelAdministrator->add($array);
            }
        } else {
            $array = array(
                "name"  =>  $post["name"],
                "email" =>  $post["email"],
                "image" => $image_name,
                "description" => $post["description"],
                "role" => $post["role"],
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelAdministrator->update($array, $id);
        }
        redirect("admin/user");
    }

    public function delete($id=0) {
        $this->ModelAdministrator->delete($id);
        redirect("admin/user");
    }

    public function formSelf($id=0) {
        $data["page"] = "admin";
        $data["id"] = $id;
        if(!empty($id)) {
            if($this->session->userdata("userId") != $id) {
                redirect("admin/dashboard");
            } else {
                $data["admin"] = $this->ModelAdministrator->getById($id);
                if(empty($data["admin"])) {
                    redirect("admin/dashboard");
                }
            }
        }
        $this->load->view("backend/administrator/formSelf", $data);
    }

    public function formSelfAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if(!empty($_FILES['image']['name'])){
            $time = time();
            $image_name =  $time.$_FILES['image']['name'];
            $config['upload_path'] 		= $this->config->item('uploadAdminBackend');
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
            $config['file_name'] 		= $image_name;
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
        }else{
            $image_name = $post['image'];
        }
        $array = array(
            "name"  =>  $post["name"],
            "email" =>  $post["email"],
            "image" => $image_name,
            "description" => $post["description"],
            "updated_at" => date("Y-m-d H:i:s")
        );
        $this->ModelAdministrator->update($array, $id);
        $arraySession = array(
            "name"      =>  $post["name"],
            "email"     =>  $post["email"],
            "image"     =>  $image_name,
        );
        $this->session->set_userdata($arraySession);
        redirect($_SERVER['HTTP_REFERER']);
    }
}

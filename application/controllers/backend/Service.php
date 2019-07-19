<?php 
class Service extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelService");
    }

    public function index() {
        $data["page"] = "service";
        $data["service"] = $this->ModelService->getAll();
        $this->load->view("backend/service/index", $data);
    }

    public function form($id=0) {
        $data["page"] = "service";
        $data["id"] = $id;
        if(!empty($id)) {
            $data["service"] = $this->ModelService->getById($id);
            if(empty($data["service"])) {
                redirect("admin/service");
            }
        }
        $this->load->view("backend/service/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if(!empty($_FILES['image']['name'])){
            $time = time();
            $image_name =  $time.$_FILES['image']['name'];
            $config['upload_path'] 		= $this->config->item('uploadServiceBackend');
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
            $config['file_name'] 		= $image_name;
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
        }else{
            $image_name = $post['image'];
        }
        if($id == 0) {
            $array = array(
                "name"  =>  $post["name"],
                "description" =>  $post["description"],
                "image" => $image_name,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelService->add($array);
        } else {
            $array = array(
                "name"  =>  $post["name"],
                "description" =>  $post["description"],
                "image" => $image_name,
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelService->update($array, $id);
        }
        redirect("admin/service");
    }

    public function delete($id=0) {
        $this->ModelService->delete($id);
        redirect("admin/service");
    }
}

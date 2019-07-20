<?php 
class Product extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelProduct");
    }

    public function index() {
        $data["page"] = "product";
        $data["product"] = $this->ModelProduct->getAll();
        $this->load->view("backend/product/index", $data);
    }

    public function form($id=0) {
        $data["page"] = "product";
        $data["id"] = $id;
        if(!empty($id)) {
            $data["product"] = $this->ModelProduct->getById($id);
            if(empty($data["product"])) {
                redirect("admin/product");
            }
        }
        $this->load->view("backend/product/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if(!empty($_FILES['image']['name'])){
            $time = time();
            $image_name =  $time.str_replace(' ', '', $_FILES['image']['name']);
            $config['upload_path'] 		= $this->config->item('uploadProductBackend');
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
            $this->ModelProduct->add($array);
        } else {
            $array = array(
                "name"  =>  $post["name"],
                "description" =>  $post["description"],
                "image" => $image_name,
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelProduct->update($array, $id);
        }
        redirect("admin/product");
    }

    public function delete($id=0) {
        $this->ModelProduct->delete($id);
        redirect("admin/product");
    }
}

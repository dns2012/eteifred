<?php 
class Category extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelCategory");
    }

    public function index() {
        $data["page"] = "category";
        $data["category"] = $this->ModelCategory->getAll();
        $this->load->view("backend/category/index", $data);
    }

    public function form($id=0) {
        $data["page"] = "category";
        $data["id"] = $id;
        if(!empty($id)) {
            $data["category"] = $this->ModelCategory->getById($id);
            if(empty($data["category"])) {
                redirect("admin/category");
            }
        }
        $this->load->view("backend/category/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if($id == 0) {
            $array = array(
                "name"  =>  $post["name"],
                "description" =>  $post["description"],
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelCategory->add($array);
        } else {
            $array = array(
                "name"  =>  $post["name"],
                "description" =>  $post["description"],
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelCategory->update($array, $id);
        }
        redirect("admin/category");
    }

    public function delete($id=0) {
        $this->ModelCategory->delete($id);
        redirect("admin/category");
    }
}

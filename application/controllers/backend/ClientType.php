<?php 
class ClientType extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelClientType");
    }

    public function index() {
        $data["page"] = "client-type";
        $data["client_type"] = $this->ModelClientType->getAll();
        $this->load->view("backend/client_type/index", $data);
    }

    public function form($id=0) {
        $data["page"] = "client-type";
        $data["id"] = $id;
        if(!empty($id)) {
            $data["client_type"] = $this->ModelClientType->getById($id);
            if(empty($data["client_type"])) {
                redirect("admin/client-type");
            }
        }
        $this->load->view("backend/client_type/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if($id == 0) {
            $array = array(
                "code"  =>  $post["code"],
                "name"  =>  $post["name"],
                "description" =>  $post["description"],
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelClientType->add($array);
        } else {
            $array = array(
                "code"  =>  $post["code"],
                "name"  =>  $post["name"],
                "description" =>  $post["description"],
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelClientType->update($array, $id);
        }
        redirect("admin/client-type");
    }

    public function delete($id=0) {
        $this->ModelClientType->delete($id);
        redirect("admin/client-type");
    }
}

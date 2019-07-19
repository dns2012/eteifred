<?php 
class About extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelAbout");
    }

    public function form($id=0) {
        $data["page"] = "about";
        $data["id"] = $id;
        $data["about"] = $this->ModelAbout->getById($id);
        if(empty($data["about"])) {
            redirect("admin/about/form/0");
        }
        $this->load->view("backend/about/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        $array = array(
            "about"  =>  $post["about"],
            "updated_at" => date("Y-m-d H:i:s")
        );
        $this->ModelAbout->update($array, $id);
        redirect("admin/about/form/0");
    }
}

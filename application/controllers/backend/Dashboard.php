<?php 
class Dashboard extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
    }

    public function index() {
        $data["page"] = "dashboard";
        $this->load->view("backend/dashboard/index", $data);
    }
}

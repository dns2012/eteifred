<?php 
class Contact extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelMessage");
    }

    public function index() {
        $data["page"] = "contact";
        $data["banner"] = $this->ModelBanner->getAll();
        $data["information"] = $this->ModelInformation->getById(0);
        $this->load->view("frontend/contact/index", $data);
    }

    public function formAction() {
        $post = $this->security->xss_clean($this->input->post());
        $array = array(
            "name" => $post["name"],
            "email" => $post["email"],
            "phone" => $post["phone"],
            "location" => $post["location"],
            "message" => $post["message"],
            "created_at" => date("Y-m-d H:i:s")
        );
        $this->ModelMessage->add($array);
        redirect("contact/thanks");
    }

    public function thanks() {
        $data["page"] = "contact";
        $data["banner"] = $this->ModelBanner->getAll();
        $data["information"] = $this->ModelInformation->getById(0);
        $this->load->view("frontend/contact/thanks", $data);
    }
}

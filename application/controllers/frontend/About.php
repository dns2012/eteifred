<?php 
class About extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelAbout");
    }

    public function index() {
        $data["page"] = "about";
        $data["banner"] = $this->ModelBanner->getAll();
        $data["information"] = $this->ModelInformation->getById(0);
        $data["about"] = $this->ModelAbout->getById(0);
        $this->load->view("frontend/about/index", $data);
    }
}

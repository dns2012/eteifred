<?php 
class Service extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelService");
        $this->load->model("ModelServiceScheme");
    }

    public function index() {
        $data["page"] = "service";
        $data["banner"] = $this->ModelBanner->getAll();
        $data["information"] = $this->ModelInformation->getById(0);
        $data["service"] = $this->ModelService->getAll();
        $data["scheme"] = $this->ModelServiceScheme->getById(0);
        $this->load->view("frontend/service/index", $data);
    }
}

<?php 
class Product extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelProduct");
    }

    public function index() {
        $data["page"] = "product";
        $data["banner"] = $this->ModelBanner->getAll();
        $data["information"] = $this->ModelInformation->getById(0);
        $data["product"] = $this->ModelProduct->getAll();
        $this->load->view("frontend/product/index", $data);
    }

    public function detail($id=0,$slug=0) {
        $data["page"] = "product";
        $data["banner"] = $this->ModelBanner->getAll();
        $data["information"] = $this->ModelInformation->getById(0);
        $data["product"] = $this->ModelProduct->getById($id);
        $data["another"] = $this->ModelProduct->getExcept($id,3);
        $this->load->view("frontend/product/detail", $data);
    }

}

<?php 
class Product extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelProduct");
        $this->load->model("ModelCategory");
    }

    public function index() {
        $data["page"] = "product";
        $data["banner"] = $this->ModelBanner->getAll();
        $data["information"] = $this->ModelInformation->getById(0);
        $data["product"] = $this->ModelProduct->getAll();
        $this->load->view("frontend/product/index", $data);
    }
    
    public function category($id=0,$slug=0) {
        $data["page"] = "product";
        $data["banner"] = $this->ModelBanner->getAll();
        $data["information"] = $this->ModelInformation->getById(0);
        $data["product"] = $this->ModelProduct->getByCategory($id);
        $data["category"] = $this->ModelCategory->getById($id);
        $this->load->view("frontend/product/category", $data);
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

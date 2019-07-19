<?php 
class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelAbout");
        $this->load->model("ModelProduct");
        $this->load->model("ModelGallery");
        $this->load->model("ModelTestimonial");
    }

    public function index() {
        $data["page"] = "home";
        $data["banner"] = $this->ModelBanner->getAll();
        $data["about"] = $this->ModelAbout->getById(0);
        $data["product"] = $this->ModelProduct->getAll();
        $data["galleryAll"] = $this->ModelGallery->getAllLimit();
        $data["galleryImage"] = $this->ModelGallery->getByType(1,4);
        $data["galleryVideo"] = $this->ModelGallery->getByType(2,4);
        $data["testimonial"] = $this->ModelTestimonial->getAll();
        $data["information"] = $this->ModelInformation->getById(0);
        $this->load->view("frontend/home/index", $data);
    }
}

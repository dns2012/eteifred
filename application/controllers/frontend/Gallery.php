<?php 
class Gallery extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelGallery");
    }

    public function index() {
        $data["page"] = "gallery";
        $data["banner"] = $this->ModelBanner->getAll();
        $data["information"] = $this->ModelInformation->getById(0);
        $data["galleryAll"] = $this->ModelGallery->getAllLimit();
        $data["galleryImage"] = $this->ModelGallery->getByType(1,1000);
        $data["galleryVideo"] = $this->ModelGallery->getByType(2,1000);
        $this->load->view("frontend/gallery/index", $data);
    }
}

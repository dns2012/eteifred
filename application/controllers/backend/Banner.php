<?php 
class Banner extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelBanner");
    }

    public function index() {
        $data["page"] = "banner";
        $data["banner"] = $this->ModelBanner->getAll();
        $this->load->view("backend/banner/index", $data);
    }

    public function form($id=0) {
        $data["page"] = "banner";
        $data["id"] = $id;
        if(!empty($id)) {
            $data["banner"] = $this->ModelBanner->getById($id);
            if(empty($data["banner"])) {
                redirect("admin/banner");
            }
        }
        $this->load->view("backend/banner/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if(!empty($_FILES['image']['name'])){
            $time = time();
            $image_name =  $time.$_FILES['image']['name'];
            $config['upload_path'] 		= $this->config->item('uploadBannerBackend');
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
            $config['file_name'] 		= $image_name;
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
        }else{
            $image_name = $post['image'];
        }
        if($id == 0) {
            $array = array(
                "title"  =>  $post["title"],
                "description" =>  $post["description"],
                "image" => $image_name,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelBanner->add($array);
        } else {
            $array = array(
                "title"  =>  $post["title"],
                "description" =>  $post["description"],
                "image" => $image_name,
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelBanner->update($array, $id);
        }
        redirect("admin/banner");
    }

    public function delete($id=0) {
        $this->ModelBanner->delete($id);
        redirect("admin/banner");
    }
}

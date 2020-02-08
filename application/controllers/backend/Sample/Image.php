<?php 
class Image extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelGallery");
    }

    public function index() {
        $data["page"] = "image";
        $data["gallery"] = $this->ModelGallery->getByType(1);
        $this->load->view("backend/image/index", $data);
    }

    public function form($id=0) {
        $data["page"] = "image";
        $data["id"] = $id;
        if(!empty($id)) {
            $data["gallery"] = $this->ModelGallery->getById($id);
            if(empty($data["gallery"])) {
                redirect("admin/gallery/image");
            }
        }
        $this->load->view("backend/image/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if(!empty($_FILES['image']['name'])){
            $time = time();
            $image_name =  $time.str_replace(' ', '', $_FILES['image']['name']);
            $config['upload_path'] 		= $this->config->item('uploadGalleryBackend');
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
            $config['file_name'] 		= $image_name;
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
        }else{
            $image_name = $post['image'];
        }
        if($id == 0) {
            $array = array(
                "type"  =>  1,
                "object" =>  $image_name,
                "caption" => $post["caption"],
                "thumbnail" => "",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelGallery->add($array);
        } else {
            $array = array(
                "object" =>  $image_name,
                "caption" => $post["caption"],
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelGallery->update($array, $id);
        }
        redirect("admin/gallery/image");
    }

    public function delete($id=0) {
        $this->ModelGallery->delete($id);
        redirect("admin/gallery/image");
    }
}

<?php 
class Video extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelGallery");
    }

    public function index() {
        $data["page"] = "video";
        $data["gallery"] = $this->ModelGallery->getByType(2);
        $this->load->view("backend/video/index", $data);
    }

    public function form($id=0) {
        $data["page"] = "video";
        $data["id"] = $id;
        if(!empty($id)) {
            $data["gallery"] = $this->ModelGallery->getById($id);
            if(empty($data["gallery"])) {
                redirect("admin/gallery/video");
            }
        }
        $this->load->view("backend/video/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if(!empty($_FILES['object']['name'])){
            $time = time();
            $object_name =  $time.str_replace(' ', '', $_FILES['object']['name']);
            $config['upload_path'] 		= $this->config->item('uploadGalleryBackend');
            $config['allowed_types'] 	= 'mp4|mkv|3gp|avi|mpg|webm|wmv';
            $config['file_name'] 		= $object_name;
            $this->upload->initialize($config);
            $this->upload->do_upload('object');
        }else{
            $object_name = $post['object'];
        }
        if(!empty($_FILES['image']['name'])){
            $time = time();
            $image_name =  $time.str_replace(' ', '', $_FILES['image']['name']);
            $config['upload_path'] 		= $this->config->item('uploadGalleryBackend');
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
            $config['file_name'] 		= $image_name;
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
        }else{
            if(!empty($post['image'])) {
                $image_name = $post['image'];
            } else {
                $image_name = '';
            }
            
        }
        if($id == 0) {
            $array = array(
                "type"  =>  2,
                "object" =>  $object_name,
                "thumbnail" => $image_name,
                "caption" => $post["caption"],
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelGallery->add($array);
        } else {
            $array = array(
                "object" =>  $object_name,
                "thumbnail" => $image_name,
                "caption" => $post["caption"],
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelGallery->update($array, $id);
        }
        redirect("admin/gallery/video");
    }

    public function delete($id=0) {
        $this->ModelGallery->delete($id);
        redirect("admin/gallery/video");
    }
}

<?php 
class Testimonial extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelTestimonial");
    }

    public function index() {
        $data["page"] = "testimonial";
        $data["testimonial"] = $this->ModelTestimonial->getAll();
        $this->load->view("backend/testimonial/index", $data);
    }

    public function form($id=0) {
        $data["page"] = "testimonial";
        $data["id"] = $id;
        if(!empty($id)) {
            $data["testimonial"] = $this->ModelTestimonial->getById($id);
            if(empty($data["testimonial"])) {
                redirect("admin/testimonial");
            }
        }
        $this->load->view("backend/testimonial/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if(!empty($_FILES['image']['name'])){
            $time = time();
            $image_name =  $time.str_replace(' ', '', $_FILES['image']['name']);
            $config['upload_path'] 		= $this->config->item('uploadTestimonialBackend');
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
            $config['file_name'] 		= $image_name;
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
        }else{
            $image_name = $post['image'];
        }
        if($id == 0) {
            $array = array(
                "name"  =>  $post["name"],
                "profession" =>  $post["profession"],
                "testimonial" =>  $post["testimonial"],
                "image" => $image_name,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelTestimonial->add($array);
        } else {
            $array = array(
                "name"  =>  $post["name"],
                "profession" =>  $post["profession"],
                "testimonial" =>  $post["testimonial"],
                "image" => $image_name,
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelTestimonial->update($array, $id);
        }
        redirect("admin/testimonial");
    }

    public function delete($id=0) {
        $this->ModelTestimonial->delete($id);
        redirect("admin/testimonial");
    }
}

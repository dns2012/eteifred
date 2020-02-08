<?php 
class Tyre extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelTyre");
        $this->load->model("ModelTyreBrand");
    }

    public function index() {
        $data["page"] = "tyre";
        $data["tyre"] = $this->ModelTyre->getAll();
        $this->load->view("backend/tyre/index", $data);
    }

    public function form($id=0) {
        $data["page"] = "tyre";
        $data["id"] = $id;
        $data["tyre_brand"] = $this->ModelTyreBrand->getAll();
        if(!empty($id)) {
            $data["tyre"] = $this->ModelTyre->getById($id);
            if(empty($data["tyre"])) {
                redirect("admin/tyre");
            }
        }
        $this->load->view("backend/tyre/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());

        if(!empty($_FILES['image']['name'])){
            $time = time();
            $image_name =  $time.str_replace(' ', '-', $_FILES['image']['name']);
            $config['upload_path'] 		= $this->config->item('uploadTyreBackend');
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
            $config['file_name'] 		= $image_name;
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
        }else{
            $image_name = $post['image'];
        }

        if($id == 0) {
            $this->form_validation->set_rules('serial', 'Serial', 'is_unique[tyre.serial]');
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('warning', validation_errors());
                redirect($_SERVER['HTTP_REFERER']);
            }

            $this->ModelTyre->add([
                "project_id"  =>  3,
                "serial"  =>  $post["serial"],
                "specification" =>  $post["specification"],
                "status" =>  $post["status"],
                "type" =>  $post["type"],
                "tyre_brand_id" =>  $post["tyre_brand_id"],
                "production_date" =>  $post["production_date"],
                "size" =>  $post["size"],
                "pattern" =>  $post["pattern"],
                "image" =>  $this->config->item('cdnTyreBackend').$image_name,
                "total_hour" =>  $post["total_hour"],
                "total_distance" =>  $post["total_distance"],
                "shipping_date" =>  $post["shipping_date"],
                "received_date" =>  $post["received_date"],
                "first_installed_date" =>  $post["first_installed_date"],
            ]);
        } else {
            $this->ModelTyre->update([
                "project_id"  =>  3,
                "serial"  =>  $post["serial"],
                "specification" =>  $post["specification"],
                "status" =>  $post["status"],
                "type" =>  $post["type"],
                "tyre_brand_id" =>  $post["tyre_brand_id"],
                "production_date" =>  $post["production_date"],
                "size" =>  $post["size"],
                "pattern" =>  $post["pattern"],
                "image" =>  $image_name,
                "total_hour" =>  $post["total_hour"],
                "total_distance" =>  $post["total_distance"],
                "shipping_date" =>  $post["shipping_date"],
                "received_date" =>  $post["received_date"],
                "first_installed_date" =>  $post["first_installed_date"],
                "updated_at" => date("Y-m-d H:i:s")
            ], $id);
        }
        redirect("admin/tyre");
    }

    public function delete($id=0) {
        $this->ModelTyre->delete($id);
        redirect("admin/tyre");
    }
}

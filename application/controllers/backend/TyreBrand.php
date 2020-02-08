<?php 
class TyreBrand extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelTyreBrand");
    }

    public function index() {
        $data["page"] = "tyre-brand";
        $data["tyre_brand"] = $this->ModelTyreBrand->getAll();
        $this->load->view("backend/tyre_brand/index", $data);
    }

    public function form($id=0) {
        $data["page"] = "tyre-brand";
        $data["id"] = $id;
        if(!empty($id)) {
            $data["tyre_brand"] = $this->ModelTyreBrand->getById($id);
            if(empty($data["tyre_brand"])) {
                redirect("admin/tyre-brand");
            }
        }
        $data["client_type"] = $this->ModelTyreBrand->getAll();
        $this->load->view("backend/tyre_brand/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if($id == 0) {

            $this->form_validation->set_rules('code', 'Code', 'is_unique[tyre_brand.code]');
            $this->form_validation->set_rules('identifier', 'Identifier', 'is_unique[tyre_brand.identifier]');
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('warning', validation_errors());
                redirect($_SERVER['HTTP_REFERER']);
            }

            $this->ModelTyreBrand->add([
                "code"  =>  $post["code"],
                "name"  =>  $post["name"],
                "identifier"  =>  $post["identifier"],
                "description" =>  $post["description"],
            ]);
        } else {
            $this->ModelTyreBrand->update([
                "code"  =>  $post["code"],
                "name"  =>  $post["name"],
                "identifier"  =>  $post["identifier"],
                "description" =>  $post["description"],
                "updated_at" => date("Y-m-d H:i:s")
            ], $id);
        }
        redirect("admin/tyre-brand");
    }

    public function delete($id=0) {
        $this->ModelTyreBrand->delete($id);
        redirect("admin/tyre-brand");
    }
}

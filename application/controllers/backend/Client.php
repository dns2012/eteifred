<?php 
class Client extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelClient");
        $this->load->model("ModelClientType");

        $this->load->library('form_validation');
    }

    public function index() {
        $data["page"] = "client";
        $data["client"] = $this->ModelClient->getAll();
        $this->load->view("backend/client/index", $data);
    }

    public function form($id=0) {
        $data["page"] = "client";
        $data["id"] = $id;
        if(!empty($id)) {
            $data["client"] = $this->ModelClient->getById($id);
            if(empty($data["client"])) {
                redirect("admin/client");
            }
        }
        $data["client_type"] = $this->ModelClientType->getAll();
        $this->load->view("backend/client/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if($id == 0) {
            $this->form_validation->set_rules('code', 'Code', 'is_unique[client.code]');
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('warning', validation_errors());
                redirect($_SERVER['HTTP_REFERER']);
            }

            $array = array(
                "code"  =>  $post["code"],
                "name"  =>  $post["name"],
                "client_type_id" =>  $post["client_type_id"],
                "country" => $post["country"],
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelClient->add($array);
        } else {
            $array = array(
                "code"  =>  $post["code"],
                "name"  =>  $post["name"],
                "client_type_id" =>  $post["client_type_id"],
                "country" => $post["country"],
                "updated_at" => date("Y-m-d H:i:s")
            );
            $this->ModelClient->update($array, $id);
        }
        redirect("admin/client");
    }

    public function delete($id=0) {
        $this->ModelClient->delete($id);
        redirect("admin/client");
    }
}

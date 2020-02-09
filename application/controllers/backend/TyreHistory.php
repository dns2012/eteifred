<?php 
class TyreHistory extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelTyre");
        $this->load->model("ModelTyreHistory");
    }

    public function index() {
        $data["page"] = "tyre-history";
        $data["tyre_history"] = $this->ModelTyreHistory->getAll();
        $data["tyre"] = $this->ModelTyre->getAll();
        $this->load->view("backend/tyre_history/index", $data);
    }

    public function listDetail($id=0) {
        $data["page"] = "tyre-history";
        $data["tyre_history"] = $this->ModelTyreHistory->getListHistoryByTyreId($id);
        $data["tyre"] = $this->ModelTyre->getAll();
        $this->load->view("backend/tyre_history/list_history", $data);
    }

    public function form($id=0) {
        $data["page"] = "tyre-history";
        $data["id"] = $id;
        if(!empty($id)) {
            $data["tyre_history"] = $this->ModelTyreHistory->getById($id);
            if(empty($data["tyre_history"])) {
                redirect("admin/tyre-history");
            }
        }
        $data["client_type"] = $this->ModelTyreHistory->getAll();
        $this->load->view("backend/tyre_history/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if($id == 0) {

            $this->form_validation->set_rules('code', 'Code', 'is_unique[tyre_history.code]');
            $this->form_validation->set_rules('identifier', 'Identifier', 'is_unique[tyre_history.identifier]');
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('warning', validation_errors());
                redirect($_SERVER['HTTP_REFERER']);
            }

            $this->ModelTyreHistory->add([
                "code"  =>  $post["code"],
                "name"  =>  $post["name"],
                "identifier"  =>  $post["identifier"],
                "description" =>  $post["description"],
            ]);
        } else {
            $this->ModelTyreHistory->update([
                "code"  =>  $post["code"],
                "name"  =>  $post["name"],
                "identifier"  =>  $post["identifier"],
                "description" =>  $post["description"],
                "updated_at" => date("Y-m-d H:i:s")
            ], $id);
        }
        redirect("admin/tyre-history");
    }

    public function delete($id=0) {
        $this->ModelTyreHistory->delete($id);
        redirect("admin/tyre-history");
    }
}

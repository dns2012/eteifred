<?php 
class Information extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelInformation");
    }

    public function form($id=0) {
        $data["page"] = "information";
        $data["id"] = $id;
        $data["information"] = $this->ModelInformation->getById($id);
        if(empty($data["information"])) {
            redirect("admin/information/form/0");
        }
        $this->load->view("backend/information/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        $array = array(
            "tagline"  =>  $post["tagline"],
            "facebook" => $post["facebook"],
            "twitter" => $post["twitter"],
            "gplus" => $post["gplus"],
            "instagram" => $post["instagram"],
            "phone_one" => $post["phone_one"],
            "phone_two" => $post["phone_two"],
            "fax" => $post["fax"],
            "email" => $post["email"],
            "maps" => $post["maps"],
            "updated_at" => date("Y-m-d H:i:s")
        );
        $this->ModelInformation->update($array, $id);
        redirect("admin/information/form/0");
    }
}

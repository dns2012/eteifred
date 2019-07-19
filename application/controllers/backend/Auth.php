<?php 
class Auth extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("ModelAdministrator");
    }

    public function index() {
        $this->load->view("backend/auth/index");
    }

    public function login() {
        $post = $this->security->xss_clean($this->input->post());
        $checkEmail = $this->ModelAdministrator->getByEmail($post["email"]);
        if(!empty($checkEmail)) {
            if (password_verify($post["password"], $checkEmail->password)) {
                $arraySession = array(
                    "userId"    =>  $checkEmail->id,
                    "name"      =>  $checkEmail->name,
                    "email"     =>  $checkEmail->email,
                    "image"     =>  $checkEmail->image,
                    "role"      =>  $checkEmail->role
                );
                $this->session->set_userdata($arraySession);
                redirect("admin/dashboard");
            } else {
                $this->session->set_flashdata("warning", "Wrong password");
                redirect("admin");
            }
        } else {
            $this->session->set_flashdata("warning", "Email not registered");
            redirect("admin");
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect("admin");
    }
}

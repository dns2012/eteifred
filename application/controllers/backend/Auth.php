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
        $check_email = $this->ModelAdministrator->getByUsername($post["username"]);
        
        if(! empty($check_email)) {
            $password = md5($post['password']);

            if ($password == $check_email->password) {
                $this->session->set_userdata([
                    "userId"    =>  $check_email->id,
                    "name"      =>  $check_email->display_name,
                    "username"     =>  $check_email->username
                ]);
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

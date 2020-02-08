<?php 
class About extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelAbout");
    }

    public function form($id=0) {
        $data["page"] = "about";
        $data["id"] = $id;
        $data["about"] = $this->ModelAbout->getById($id);
        if(empty($data["about"])) {
            redirect("admin/about/form/0");
        }
        $this->load->view("backend/about/form", $data);
    }

    public function formAction($id=0) {
        $post = $this->security->xss_clean($this->input->post());
        if(!empty($_FILES['item_one_image']['name'])){
            $time = time();
            $item_one_image =  $time.str_replace(' ', '', $_FILES['item_one_image']['name']);
            $config['upload_path'] 		= $this->config->item('uploadAboutBackend');
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
            $config['file_name'] 		= $item_one_image;
            $this->upload->initialize($config);
            $this->upload->do_upload('item_one_image');
        }else{
            $item_one_image = $post['item_one_image'];
        }
        if(!empty($_FILES['item_two_image']['name'])){
            $time = time();
            $item_two_image =  $time.str_replace(' ', '', $_FILES['item_two_image']['name']);
            $config['upload_path'] 		= $this->config->item('uploadAboutBackend');
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
            $config['file_name'] 		= $item_two_image;
            $this->upload->initialize($config);
            $this->upload->do_upload('item_two_image');
        }else{
            $item_two_image = $post['item_two_image'];
        }
        if(!empty($_FILES['item_three_image']['name'])){
            $time = time();
            $item_three_image =  $time.str_replace(' ', '', $_FILES['item_three_image']['name']);
            $config['upload_path'] 		= $this->config->item('uploadAboutBackend');
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
            $config['file_name'] 		= $item_three_image;
            $this->upload->initialize($config);
            $this->upload->do_upload('item_three_image');
        }else{
            $item_three_image = $post['item_three_image'];
        }
        if(!empty($_FILES['item_four_image']['name'])){
            $time = time();
            $item_four_image =  $time.str_replace(' ', '', $_FILES['item_four_image']['name']);
            $config['upload_path'] 		= $this->config->item('uploadAboutBackend');
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
            $config['file_name'] 		= $item_four_image;
            $this->upload->initialize($config);
            $this->upload->do_upload('item_four_image');
        }else{
            $item_four_image = $post['item_four_image'];
        }
        $array = array(
            "about"  =>  $post["about"],
            "item_one_title" => $post["item_one_title"],
            "item_one_number" => $post["item_one_number"],
            "item_one_image" => $item_one_image,
            "item_two_title" => $post["item_two_title"],
            "item_two_number" => $post["item_two_number"],
            "item_two_image" => $item_two_image,
            "item_three_title" => $post["item_three_title"],
            "item_three_number" => $post["item_three_number"],
            "item_three_image" => $item_three_image,
            "item_four_title" => $post["item_four_title"],
            "item_four_number" => $post["item_four_number"],
            "item_four_image" => $item_four_image,
            "updated_at" => date("Y-m-d H:i:s")
        );
        $this->ModelAbout->update($array, $id);
        redirect("admin/about/form/0");
    }
}

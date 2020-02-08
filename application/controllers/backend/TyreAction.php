<?php 
class TyreAction extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata("userId"))) {
            $this->session->set_flashdata("warning", "You must login first");
            redirect("admin");
        }
        $this->load->model("ModelProject");
        $this->load->model("ModelProjectVehicle");
        $this->load->model("ModelTyre");
        $this->load->model("ModelTyreHistory");
    }

    public function index() {
        $data["page"] = "tyre-action";
        $data["project"] = $this->ModelProject->getAll();
        $this->load->view("backend/tyre_action/index", $data);
    }

    public function actionPage() {
        $data["tyre"] = $this->ModelTyre->getById($this->input->post('tyre_id'));
        $data["project_vehicle"] = $this->ModelProjectVehicle->getByProject($this->input->post('project_id'));
        $this->load->view('backend/tyre_action/action', $data);
    }

    public function actionForm() {
        $post = $this->security->xss_clean($this->input->post());
        if ($post['status'] == 'New' || $post['status'] == 'Free') {
            $this->ModelTyre->update([
                'status' => 'Installed',
                'updated_at' => date('Y-m-d H:i:s')
            ], $post['tyre']);

            $this->ModelTyreHistory->add([
                'tyre_id' => $post['tyre'],
                'project_vehicle_id' => $post['project_vehicle'],
                'installed_date' => date('Y-m-d H:i:s'),
                'removal_date' => null,
                'position' => $post['position'],
                'description' => $post['description'],
                'distance_start_value' => $post['distance_start_value'],
                'distance_end_value' => null,
            ]);
        } else {
            if($post['status'] == 'Installed') {
                $arrayTire = [
                    'status' => 'Removed',
                    'updated_at' => date('Y-m-d H:i:s')
                ];

                $arrayTireHistory = [
                    'removal_date' => date('Y-m-d H:i:s'),
                    'description' => $post['description'],
                    'distance_end_value' => $post['distance_end_value'],
                    'updated_at' => date('Y-m-d H:i:s')
                ];
            } elseif($post['status'] == 'Removed') {
                $arrayTire = [
                    'status' => 'Repair',
                    'updated_at' => date('Y-m-d H:i:s')
                ];

                $arrayTireHistory = [
                    'repair_date' => date('Y-m-d H:i:s'),
                    'description' => $post['description'],
                    'updated_at' => date('Y-m-d H:i:s')
                ];
            } elseif($post['status'] == 'Repair') {
                $arrayTire = [
                    'status' => 'Free',
                    'updated_at' => date('Y-m-d H:i:s')
                ];

                $arrayTireHistory = [
                    'repair_finish_date' => date('Y-m-d H:i:s'),
                    'description' => $post['description'],
                    'updated_at' => date('Y-m-d H:i:s')
                ];
            }

            $this->ModelTyre->update($arrayTire, $post['tyre']);

            $this->ModelTyreHistory->update($arrayTireHistory, $post['id']);
        }
    }
}

<?php 
class ModelTyreHistory extends CI_Model {
    protected $table = "tyre_history";

    function getAll() {
        $this->db->select('tyre_history.*, tyre.serial, tyre.status, project.name as project_name,
        project_vehicle.name as project_vehicle_name, vehicle.type as vehicle_type,
        vehicle_brand.name as vehicle_name');
        $this->db->join('tyre', 'tyre.id = tyre_history.tyre_id', 'left');
        $this->db->join('project_vehicle', 'project_vehicle.id = tyre_history.project_vehicle_id', 'left');
        $this->db->join('project', 'project.id = project_vehicle.project_id', 'left');
        $this->db->join('vehicle', 'vehicle.id = project_vehicle.vehicle_id', 'left');
        $this->db->join('vehicle_brand', 'vehicle_brand.id = vehicle.vehicle_brand_id', 'left');
        $this->db->order_by('tyre_history.updated_at', 'DESC');
        return $this->db->get($this->table)->result();
    }

    function getById($id=0) {
        $this->db->where('id', $id);
        return $this->db->get($this->table)->row();
    }

    function add($data) {
        return $this->db->insert($this->table, $data);
    }

    function update($data, $id) {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    function delete($id=0) {
        $this->db->where("id", $id);
        $this->db->delete($this->table);
    }

    function getByEmail($email=0) {
        $this->db->where('email', $email);
        return $this->db->get($this->table)->row();
    }

    function getExcept($id=0, $limit=0) {
        $this->db->where('id !=', $id);
        $this->db->limit($limit);
        return $this->db->get($this->table)->result();
    }
}

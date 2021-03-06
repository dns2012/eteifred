<?php 
class ModelTyre extends CI_Model {
    protected $table = "tyre";

    function getAll() {
        return $this->db->get($this->table)->result();
    }

    function getById($id=0) {
        $this->db->select('tyre.*, tyre_history.description, tyre_history.position,
        tyre_history.distance_start_value, tyre_history.distance_end_value,
        tyre_history.id as tyre_history_id');
        $this->db->join('tyre_history', 'tyre_history.tyre_id = tyre.id', 'left');
        $this->db->where('tyre.id', $id);
        $this->db->order_by('tyre_history.created_at', 'DESC');
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

    function getByProject($id=0) {
        $this->db->select('tyre.*, tyre_brand.name as tyre_brand');
        $this->db->join('tyre_brand', 'tyre_brand.id = tyre.tyre_brand_id');
        $this->db->where('project_id', $id);
        return $this->db->get($this->table)->result_array();
    }
}

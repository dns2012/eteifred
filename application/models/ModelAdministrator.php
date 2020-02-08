<?php 
class ModelAdministrator extends CI_Model {
    protected $table = "admin";

    function getAll() {
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

    function getByUsername($email=0) {
        $this->db->where('username', $email);
        return $this->db->get($this->table)->row();
    }
    
}

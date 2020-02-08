<?php 
class ModelGallery extends CI_Model {
    protected $table = "gallery";

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

    function getByEmail($email=0) {
        $this->db->where('email', $email);
        return $this->db->get($this->table)->row();
    }

    function getByType($type=0, $limit=100) {
        $this->db->where('type', $type);
        $this->db->limit($limit);
        return $this->db->get($this->table)->result();
    }

    function getAllLimit() {
        $this->db->limit(4);
        return $this->db->get($this->table)->result();
    }
}

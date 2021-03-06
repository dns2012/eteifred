<?php 
class ModelProduct extends CI_Model {
    protected $table = "product";

    function getAll() {
        $this->db->select("product.*, category.name as category");
        $this->db->join("category", "category.id = product.category_id", "LEFT");
        return $this->db->get($this->table)->result();
    }

    function getById($id=0) {
        $this->db->select("product.*, category.name as category");
        $this->db->join("category", "category.id = product.category_id", "LEFT");
        $this->db->where('product.id', $id);
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

    function getByCategory($id=0) {
        $this->db->select("product.*, category.name as category");
        $this->db->join("category", "category.id = product.category_id", "LEFT");
        $this->db->where('product.category_id', $id);
        return $this->db->get($this->table)->result();
    }
}

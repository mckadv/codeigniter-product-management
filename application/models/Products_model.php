<?php

class Products_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function getProduct($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('products');
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }    
    
    public function getProducts()
    {
        $this->db->order_by('id', 'asc');
        $query = $this->db->select('*')->get('products');
        return $query->result();
    }
    
    public function addProduct($post)
    {
        if (!$this->db->insert('products', array(
                'name' => $post['name'],
                'reference' => $post['reference'],
                'price' => $post['price'],
                'weight' => $data['weight'],
                'categories' => $post['categories'],
                'stock' => $post['stock']
            ))) {
            log_message('error', print_r($this->db->error(), true));
        }
        return $this->db->insert_id();
    }
    
    public function updProduct($post){
        $this->db->where('id', $post['id']);
        if (!$this->db->update('products', array(
                'name' => $post['name'],
                'reference' => $post['reference'],
                'price' => $post['price'],
                'weight' => $data['weight'],
                'categories' => $post['categories'],
                'stock' => $post['stock']
                ))) {
            log_message('error', print_r($this->db->error(), true));
        }
        return true;
    }
    
    public function delProduct($id)
    {
        $this->db->where('id', $id);
        if (!$this->db->delete('products')) {
            log_message('error', print_r($this->db->error(), true));
        }
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories057_model extends CI_Model {

    public function create()
    {
        $data = array(
            'category_name_057' => $this->input->post('name_057'),
            'description_057' => $this->input->post('desc_057')
        );
        $this->db->insert('categories057', $data);
    }

    public function read()
    {
        $query = $this->db->get('categories057');
        return $query->result();
    }

    public function read_by($id)
    {
        $this->db->where('category_id_057',$id); 
        $query = $this->db->get('categories057');
        return $query->row();
    }
    public function update($id)
    {
        $data = array(
            'category_name_057' => $this->input->post('name_057'),
            'description_057' => $this->input->post('desc_057')
        );
        $this->db->where('category_id_057',$id);
        $this->db->update('categories057', $data);
    }
    public function delete($id)
    {
        $this->db->where('category_id_057', $id); // Perbaikan: menambahkan tanda kutip yang tepat di sekitar $id
        $this->db->delete('categories057');
    }
    

    }
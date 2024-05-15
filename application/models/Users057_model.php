<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users057_model extends CI_Model
{

    public function create()
    {
        $data = array(
            'username_057' => $this->input->post('username_057'),
            'password_057' => password_hash($this->input->post('usertype_057'), PASSWORD_DEFAULT),
            'usertype_057' => $this->input->post('usertype_057'),
            'fullname_057' => $this->input->post('fullname_057')
        );
        $this->db->insert('users057', $data);
    }

    public function read()
    {
        // $this->db->where('sold_057', 0);
        $query = $this->db->get('users057');
        return $query->result();
    }

    public function read_by($id)
    {
        $this->db->where('userid_057', $id);
        $query = $this->db->get('users057');
        return $query->row();
    }
    public function update($id)
    {
        $data = array(
            'username_057' => $this->input->post('username_057'),
            'usertype_057' => $this->input->post('usertype_057'),
            'fullname_057' => $this->input->post('fullname_057')
        );
        $this->db->where('userid_057', $id);
        $this->db->update('users057', $data);
    }
    public function delete($id)
    {
        $this->db->where('userid_057', $id); // Perbaikan: menambahkan tanda kutip yang tepat di sekitar $id
        $this->db->delete('users057');
    }

    public function resetpass()
    {
        $this->db->set("password_057", password_hash($this->session->userdata("usertype"), PASSWORD_DEFAULT));
        $this->db->where("username_057", $this->session->userdata("username"));
        return $this->db->update("users057");
    }
}

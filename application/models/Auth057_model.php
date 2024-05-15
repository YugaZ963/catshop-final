<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth057_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getuser($username)
    {
        $query = $this->db->where("username_057", $username);
        return $this->db->get("users057")->row();
    }

    public function changepass()
    {
        $this->db->set("password_057", password_hash($this->input->post("new_password"), PASSWORD_DEFAULT));
        $this->db->where("username_057", $this->session->userdata("username"));
        return $this->db->update("users057");
    }
    public function changephoto($photo)
    {
        if ($this->session->userdata('photo') !== 'default.png') {
            unlink('./uploads/users/' . $this->session->userdata('photo')); // menghapus foto yang lama
        }
        $this->db->set('photo_057', $photo);
        $this->db->where('username_057', $this->session->userdata('username'));
        return $this->db->update('users057');
    }
}

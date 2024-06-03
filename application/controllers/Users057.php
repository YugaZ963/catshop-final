<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users057 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // jika tidak ada sesseion username, arahkan ke form login
        if (!$this->session->userdata('username')) redirect('auth057/login');
        // jika tipe user bukan Manager , arahkan ke home
        // if ($this->session->userdata('usertype') != 'Manager') redirect('welcome');
        // muat model Auth057_model dan Users057_model
        $this->load->model("Auth057_model");
        $this->load->model('Users057_model');
    }

    public function index()
    {
        // ambil data didalam Users057_model function read 
        $data['users'] = $this->Users057_model->read();
        // muat tampilan user list
        $this->load->view('users/user_list_057', $data);
    }

    public function add()
    {
        // jika tombol submit di klik 
        if ($this->input->post('submit') && $this->validation('user')) {
            // muat Users057_model
            $this->load->model('Users057_model');
            // Panggil fungsi create pada Users057_model untuk membuat user
            $this->Users057_model->create();
            // jika ada baris_terpengaruh (ada tambah data) di database, lakukan ini
            if ($this->db->affected_rows() > 0) {
                // set flashdata untuk menampilkan pesan
                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            User Succesfully Added!
        </div>');
            } else {
                // set flashdata untuk menampilkan pesan
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            User add Failed!
        </div>');
            }
            // Arahkan ke controller users057 index
            redirect('users057/index');
        }
        // muat tampilan form user
        $this->load->view('users/user_form_057');
    }
    public function edit($id)
    {
        // Jika ada input POST, jika tombol submit di klik
        if ($this->input->post('submit')) {
            // Perbarui data kucing
            $this->Users057_model->update($id);
            // jika ada baris_terpengaruh (ada ubah data) di database, lakukan ini
            if ($this->db->affected_rows() > 0) {
                // set flashdata untuk menampilkan pesan
                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            Cat Succesfully Updated!
        </div>');
            } else {
                // set flashdata untuk menampilkan pesan
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            User update Failed!
        </div>');
            }
            // Arahkan pengguna ke controller users057 fungsi utama
            redirect('users057');
        }

        // Ambil data kucing berdasarkan ID
        $data['user'] = $this->Users057_model->read_by($id);
        // Tampilkan formulir untuk mengedit data kucing
        $this->load->view('users/user_form_057', $data);
    }

    public function delete($id)
    {
        // panggil fungsi delete pada model dengan parameter id data yang mau di hapus
        $this->Users057_model->delete($id);
        // jika ada baris_terpengaruh (ada hapus data) di database, lakukan ini
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            User Succesfully Deleted!
        </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            User delete Failed!
        </div>');
        }
        // Arahkan pengguna ke controller users057 fungsi utama
        redirect('users057');
    }

    public function resetpass()
    {
        // isi var change dengan fungsi get user untuk mengambil  username dari session
        $change = $this->Auth057_model->getuser($this->session->userdata('username'));

        // jika fungsi reset pass dipanggil, reset pass. lakukan ini
        if ($this->Users057_model->resetpass())
            // set flashdata untuk menampilkan pesan berhasil reset password
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            Password Succesfully Reset!
        </div>');
        else
            // set flashdata untuk menampilkan pesan gagal
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Reset Password Failed!
        </div>');

        // Arahkan pengguna ke controller users057 fungsi utama
        redirect('users057');
    }

    private function validation($type)
    {
        // Memuat library form_validation.
        $this->load->library('form_validation');
        // Jika tipe validasi adalah 'login', lakukan validasi untuk username dan password.
        if ($type == 'user') {
            $this->form_validation->set_rules('username_057', 'Username', 'required');
            $this->form_validation->set_rules('usertype_057', 'User Type', 'required');
            $this->form_validation->set_rules('fullname_057', 'Full Name', 'required');
        }

        // Menjalankan proses validasi dan mengembalikan hasilnya.
        if ($this->form_validation->run()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

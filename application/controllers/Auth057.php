<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth057 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Memuat model Auth057_model untuk digunakan dalam controller ini.
        $this->load->model('Auth057_model');
    }
    public function login()
    {
        // Jika metode request adalah POST dan validasi berhasil, lanjutkan proses login.
        if ($this->input->post('login') && $this->validation('login')) {
            // Mendapatkan data pengguna berdasarkan username yang dimasukkan.
            $login = $this->Auth057_model->getuser($this->input->post('username'));
            // Jika pengguna ditemukan, lanjutkan verifikasi kata sandi.
            if ($login != NULL) {
                // Verifikasi kata sandi menggunakan password_verify().
                if (password_verify($this->input->post('password'), $login->password_057)) {
                    // Jika verifikasi berhasil, set session pengguna dan arahkan ke halaman selamat datang.
                    // Buat session dengan nama userdata dan isi nilai-nya
                    $data = array(
                        'username' => $login->username_057,
                        'usertype' => $login->usertype_057,
                        'fullname' => $login->fullname_057,
                        'photo' => $login->photo_057
                    );
                    // untuk mengeset session pada saat login
                    $this->session->set_userdata($data);
                    // Arahkan pengguna ke controller utama categories
                    redirect('welcome');
                }
            }
            // untuk mengeset flashdata untuk tampilan pesan
            $this->session->set_flashdata('message', '<p style="color:red;font-style: italic;">Iinvalid Username or Password!</p>');
        }
        // memuat tampilan form login
        $this->load->view('auth057/form_login_057');
    }
    public function logout()
    {
        // Menghapus semua data sesi pengguna dan mengarahkan ke halaman login.
        $this->session->sess_destroy();
        // memuat tampilan login
        redirect('auth057/login');
    }
    public function changepass()
    {
        // Memeriksa apakah pengguna sudah login, jika tidak, arahkan ke halaman login.
        if (!$this->session->userdata('username')) redirect('auth057/login');
        // Jika metode request adalah POST dan validasi berhasil, lanjutkan proses perubahan kata sandi.
        if ($this->input->post('change') && $this->validation('changepass')) {
            // Mendapatkan data pengguna berdasarkan username yang diambil dari sesi.
            $change = $this->Auth057_model->getuser($this->session->userdata('username'));
            // Verifikasi kata sandi lama dengan password_verify().
            if (password_verify($this->input->post('old_password'), $change->password_057)) {
                // Jika verifikasi berhasil, perbarui kata sandi dan set pesan flash untuk tampilkan sukses.
                if ($this->Auth057_model->changepass())
                    $this->session->set_flashdata('message', '<p style="color:green;font-style: italic;">Password Successfully changed!</p>');
                // set pesan flash untuk tampilkan gagal.
                else
                    $this->session->set_flashdata('message', '<p style="color:red;font-style: italic;">Change Password Failed!</p>');
            } else {
                // Jika verifikasi gagal, set pesan flash untuk tampilkan kesalahan.
                $this->session->set_flashdata('message', '<p style="color:red;font-style: italic;">Wrong Old Password!</p>');
            }
        }
        // memuat tampilan form ubah password
        $this->load->view('auth057/form_password_057');
    }

    public function changephoto()
    {
        // Memeriksa apakah pengguna sudah login, jika tidak, arahkan ke halaman login.
        if (!$this->session->userdata('username')) redirect('auth057/login');
        $data['error'] = '';
        // Jika metode request adalah POST / klik button upload
        if ($this->input->post('upload')) {
            if ($this->upload()) { // jika sukses upload
                $this->Auth057_model->changephoto($this->upload->data('file_name')); // ubah data foto di database
                $this->session->set_userdata('photo', $this->upload->data('file_name')); // ubah session photo
                $this->session->set_flashdata('message', '<p style="color:green;font-style: italic;">Photo Successfully Changed!</p>');
            } else $data['error'] = $this->upload->display_errors(); // menampilkan tampilan error upload
        }
        // memuat  view untuk form upload foto
        $this->load->view('auth057/change_photo_057', $data);
    }

    private  function upload()
    {
        // Konfigurasi untuk proses upload foto pengguna.
        $config['upload_path'] = './uploads/users/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        // Memuat library upload dan mengatur konfigurasi.
        $this->load->library('upload', $config);
        // Melakukan proses upload.
        return $this->upload->do_upload('photo');
    }

    private function validation($type)
    {
        // Memuat library form_validation.
        $this->load->library('form_validation');
        // Jika tipe validasi adalah 'login', lakukan validasi untuk username dan password.
        if ($type == 'login') {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'User Password', 'required');
        } else {
            // Jika tipe validasi bukan 'login', lakukan validasi untuk new_password.
            $this->form_validation->set_rules('new_password', 'User New Password', 'required');
        }

        // Menjalankan proses validasi dan mengembalikan hasilnya.
        if ($this->form_validation->run()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories057 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct(); // Call the parent constructor (CI_Controller)
        // Check if user is logged in and redirect if not (using session)
        if (!$this->session->userdata('username')) redirect('auth057/login');
        // Check if user type is 'Manager' and redirect if not
        // if ($this->session->userdata('usertype') != 'Manager') redirect('welcome');
        // Load the Categories057_model model
        $this->load->model('Categories057_model');
    }

    public function index()
    {
        // Mengambil data kategori dari model Categories057_model
        $data['categories'] = $this->Categories057_model->read();
        // Memuat tampilan untuk daftar kategori
        $this->load->view('categories/categories_list_057', $data);
    }

    public function add()
    {
        // Jika ada input POST / klik  tombol submit
        if ($this->input->post('submit' && $this->validation('category'))) {
            // Memuat model Categories057_model
            $this->load->model('Categories057_model');
            // Membuat kategori baru
            $this->Categories057_model->create();
            // Arahkan pengguna ke halaman indeks / Redirect back to index page
            redirect('categories057/index');
        }
        // Memuat tampilan untuk form kategori
        $this->load->view('categories/categories_form_057');
    }
    public function edit($id)
    {
        // Jika ada input POST / klik  tombol submit
        if ($this->input->post('submit')) {
            // Perbarui data kucing
            $this->Categories057_model->update($id);
            // Arahkan pengguna ke halaman Controller Categories
            redirect('categories057');
        }

        // Ambil data kucing berdasarkan ID
        $data['category'] = $this->Categories057_model->read_by($id);
        // Tampilkan formulir untuk mengedit data kucing
        $this->load->view('categories/categories_form_057', $data);
    }

    public function delete($id)
    {
        // Menghapus data kategori berdasarkan ID
        $this->Categories057_model->delete($id);
        // Arahkan pengguna ke controller utama categories
        redirect('categories057');
    }

    private function validation($type)
    {
        // Memuat library form_validation.
        $this->load->library('form_validation');
        // Jika tipe validasi adalah 'login', lakukan validasi untuk username dan password.
        if ($type == 'category') {
            $this->form_validation->set_rules('name_057', 'Category Name', 'required');
            $this->form_validation->set_rules('desc_057', 'Category Description', 'required');
        }

        // Menjalankan proses validasi dan mengembalikan hasilnya.
        if ($this->form_validation->run()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

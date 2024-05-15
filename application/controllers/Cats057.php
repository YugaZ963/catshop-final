<?php
defined('BASEPATH') or exit('No direct script access allowed');
// This line checks if BASEPATH constant is defined (security measure)

class Cats057 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct(); // Call the parent constructor (CI_Controller)
        // Check if user is logged in and redirect if not (using session)
        if (!$this->session->userdata('username')) redirect('auth057/login');
        // Check if user type is 'Manager' and redirect if not
        if ($this->session->userdata('usertype') != 'Manager') redirect('welcome');
        // Load the Cats057_model and Categories057_model models
        $this->load->model('Cats057_model');
        $this->load->model('Categories057_model');
    }

    public function index()
    {
        // Load the pagination library
        $this->load->library('pagination');

        // Configure pagination settings
        $config['base_url'] = site_url('cats057/index'); // Set base URL for pagination links
        $config['total_rows'] = $this->db->count_all('cats057'); // Get total number of cats
        $config['per_page'] = 5; // Set number of cats per page

        // Initialize pagination
        $this->pagination->initialize($config);

        // Get current page and limit based on pagination
        $limit = $config['per_page'];
        $start = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

        // Set data for view
        $data['i'] = $start + 1; // Starting number for cat list
        $data['cats'] = $this->Cats057_model->read($limit, $start); // Get cats for current page
        // Load the cat list view (cats/cat_list_057) and pass data
        $this->load->view('cats/cat_list_057', $data);
    }

    public function add()
    {
        // Check if form is submitted
        if ($this->input->post('submit')) {
            // Load the Cats057_model model again (redundant, can be in constructor)
            $this->load->model('cats057_model');
            // Create a new cat using the model's create() function
            $this->cats057_model->create();
            // Check if cat was added successfully (affected rows)
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            Cat Succesfully Added!
        </div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Cat add Failed! 
        </div>');
            }

            // Arahkan pengguna ke halaman indeks / Redirect back to index page after adding cat
            redirect('cats057/index');
        }
        // Get categories for the add form
        $data['category'] = $this->Categories057_model->read();
        // Load the cat add form view (cats/cat_form_057) and pass categories
        $this->load->view('cats/cat_form_057', $data);
    }
    public function edit($id)
    {
        // Jika ada input POST / Check if form is submitted
        if ($this->input->post('submit')) {
            // Perbarui data kucing / Update cat data using the model's update() function
            $this->Cats057_model->update($id);
            // Check if cat was updated successfully (affected rows)
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            Cat Succesfully Updated!
        </div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Cat update Failed!
        </div>');
            }
            // Arahkan pengguna ke halaman indeks / Redirect back to index page after updating cat
            redirect('cats057');
        }

        $data['category'] = $this->Categories057_model->read();
        // Ambil data kucing berdasarkan ID
        $data['cat'] = $this->Cats057_model->read_by($id);
        // Tampilkan formulir untuk mengedit data kucing
        $this->load->view('cats/cat_form_057', $data);
    }

    public function delete($id)
    {

        $this->Cats057_model->delete($id); // Calls the delete() function in the Cats057_model to delete the cat with the specified $id.
        // Checks if any rows were affected by the delete operation (i.e., if the cat was deleted successfully).
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Cat Succesfully Deleted!
        </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
            Cat delete Failed!
        </div>');
        }
        redirect('cats057');
    }
    public function changephoto($id)
    {
        // Memeriksa apakah pengguna sudah login, jika tidak, arahkan ke halaman login.
        if (!$this->session->userdata('username')) redirect('auth057/login');
        $data['error'] = '';
        $idCat = $id;
        // Jika metode request adalah POST / klik button upload
        if ($this->input->post('upload')) {
            if ($this->upload()) { // jika sukses upload
                $this->Cats057_model->changephoto($this->upload->data('file_name'), $id); // ubah data foto di database
                // $this->session->set_userdata('photo', $this->upload->data('file_name')); // ubah session photo
                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            Photo Succesfully Changed!
        </div>');
            } else $data['error'] = $this->upload->display_errors(); // menampilkan tampilan error upload
        }
        // memuat  view untuk form upload foto
        $data['photo'] = $this->Cats057_model->get_cat_photo($idCat);
        $this->load->view('cats/change_photo_057', $data);
    }

    private  function upload()
    {
        // Konfigurasi untuk proses upload foto pengguna.
        $config['upload_path'] = './uploads/cats/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        // Memuat library upload dan mengatur konfigurasi.
        $this->load->library('upload', $config);
        // Melakukan proses upload.
        return $this->upload->do_upload('photo');
    }

    public function sale($id)
    {
        // Checks if the form is submitted (submit button clicked).
        if ($this->input->post('submit')) {
            $this->Cats057_model->sale($id); // Menandai kucing sebagai terjual. / Calls the sale() function in the Cats057_model to handle marking the cat with $id as sold.
            // Memeriksa apakah cat berhasil dijual.
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            Cat Succesfully Sold!
        </div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Cat sale Failed!
        </div>');
            }
            redirect('cats057');
        }
        // Retrieves the cat data with the specified $id using the read_by() function in the model and stores it in the $data array for the view.
        $data['cat'] = $this->Cats057_model->read_by($id);
        // Tampilkan formulir untuk mengedit data kucing 
        // Loads the cat sale form view (cats/cat_sale_057) and passes the retrieved cat data ($data) to the view.
        $this->load->view('cats/cat_sale_057', $data);
    }

    public function sales()
    {
        // Mengambil data penjualan dari model Cats057_model. / Retrieves a list of sold cats using the sales() function in the model and stores it in the $data array for the view.
        $data['sales'] = $this->Cats057_model->sales();
        // Memuat tampilan untuk daftar penjualan kucing. / Loads the sale list view (cats/sale_list_057) and passes the list of sold cats ($data) to the view.
        $this->load->view('cats/sale_list_057', $data);
    }
}

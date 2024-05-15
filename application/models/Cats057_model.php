<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cats057_model extends CI_Model
{

    public function create()
    {
        // buat data  yang akan diinput ke database
        $data = array(
            'name_057' => $this->input->post('name_057'), // input field nama
            'type_057' => $this->input->post('type_057'), // input field tipe
            'gender_057' => $this->input->post('gender_057'), // input field gender
            'age_057' => $this->input->post('age_057'), // input field usia
            'price_057' => $this->input->post('price_057') // input field harga
        );
        //  simpan ke database dengan method insert dari ci
        $this->db->insert('cats057', $data); // parameter pertama tabel, kedua adalah data yang akan disimpan
    }

    public function read($limit, $start)
    {
        // $this->db->where('sold_057', 0);
        // Mengatur batas dan mulai untuk pengambilan data dari database.
        $this->db->limit($limit, $start);
        // Membuat query untuk mengambil data dari tabel 'cats057'.
        $query = $this->db->get('cats057'); // parameternya adalah tabel yang dituju
        // Mengembalikan hasil query dalam bentuk array dari objek.
        return $query->result();
        // Method result() digunakan untuk mengembalikan hasil query dalam bentuk array objek untuk setiap baris data yang cocok dengan kriteria query.
    }

    public function read_by($id)
    {
        // mencari id yang dituju
        $this->db->where('id_057', $id); // parameter pertama adalah kolom di database, sedangkan parameter kedua adalah id yang dituju 
        // var query di isi data di tabel cats057
        $query = $this->db->get('cats057');
        // mengembalikan data dalam bentuk row sesuai id
        return $query->row();
    }
    public function update($id)
    {
        // buat data yang akan diinput ke database
        $data = array(
            'name_057' => $this->input->post('name_057'),
            'type_057' => $this->input->post('type_057'),
            'gender_057' => $this->input->post('gender_057'),
            'age_057' => $this->input->post('age_057'),
            'price_057' => $this->input->post('price_057')
        );
        // mencari id yang dituju
        $this->db->where('id_057', $id);
        // ubah data sesuai yang sudah di isi
        $this->db->update('cats057', $data);
    }
    public function delete($id)
    {
        $this->db->where('id_057', $id); // Perbaikan: menambahkan tanda kutip yang tepat di sekitar $id
        $this->db->delete('cats057');
    }

    // Function to retrieve user photo by ID (example)
    public function get_cat_photo($id)
    {
        $this->db->select('photo_057');
        // metode untuk memilih kolom photo_057 dari tabel database.
        $this->db->where('id_057', $id);
        // metode untuk menetapkan kriteria pencarian berdasarkan id kucing yang diberikan.
        $query = $this->db->get('cats057');
        // metode untuk mengeksekusi query dan mengambil data dari tabel database cats057 sesuai dengan kriteria yang ditetapkan sebelumnya.
        $result = $query->row();
        // metode untuk mengambil hasil query dalam bentuk satu baris data.
        return (isset($result)) ? $result->photo_057 : NULL;
        // ekspresi kondisional yang mengembalikan foto kucing jika hasil query tidak kosong ($result di-set), dan NULL jika tidak ada hasil (kucing tidak ditemukan).
    }

    public function changephoto($photo, $id)
    {
        // 1. Get current photo (assuming a function to retrieve by ID)
        $current_photo = $this->get_cat_photo($id);

        // 2. Check if current photo exists and remove if needed
        if ($current_photo !== NULL && $current_photo !== 'default.png') {
            unlink('./uploads/cats/' . $current_photo);
        } // menghapus foto yang lama
        $this->db->set('photo_057', $photo);
        $this->db->where('id_057 ', $id);
        return $this->db->update('cats057');
    }


    public function validation()
    {
        // muat library form validasi
        $this->load->library('form validation');

        // Menetapkan aturan validasi untuk setiap field dalam formulir.
        $this->form_validation->set_rules('name_057', 'Cat Name', 'required');
        $this->form_validation->set_rules('type_057', 'Cat Type', 'required');
        $this->form_validation->set_rules('gender_057', 'Cat Gender', 'required');
        $this->form_validation->set_rules('age_057', 'Age', "required|numeric");
        $this->form_validation->set_rules('price_057', 'Age', "required|numeric");
        // Menetapkan pesan kesalahan kustom untuk aturan 'required'.
        $this->form_validation->set_message('required', '%s is required. Please fill it out.');
        // Menetapkan penanda kesalahan kustom untuk digunakan dalam menampilkan pesan kesalahan.
        $this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");

        // Menjalankan proses validasi dan mengembalikan hasilnya.
        if ($this->form_validation->run()) {
            return true; // Jika validasi berhasil, kembalikan true.
        } else {
            return false; // Jika validasi gagal, kembalikan false.
        }
    }

    public function sale($id)
    {
        // buat data yang akan diinput ke database
        $data = array(
            'customer_name_057' => $this->input->post('customer_name_057'),
            'customer_address_057' => $this->input->post('customer_address_057'),
            'customer_phone_057' => $this->input->post('customer_phone_057'),
            'cat_id_057' => $id
        );

        // tambah data, simpan data ke database
        $this->db->insert('catsales057', $data);

        // ubah isi kolom sold_057 jadi 1
        $this->db->set('sold_057', '1');
        // cari cat id sesuai dengan yang dipilih
        $this->db->where('id_057', $id);
        // lakukan eksekusi update
        $this->db->update('cats057');
    }

    public function sales()
    {
        // $this->db->join('cats057','cat057.id_057.catsales057.cat_id_057');
        //  ambil semua data dari tabel catsales057
        $query = $this->db->get('catsales057');
        // mengembalikan
        return $query->result();
    }
}

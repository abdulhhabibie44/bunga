<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct() //MEMPERSIAPKAN
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('mdl_produk');
        $this->load->library('form_validation');
        $this->load->database();
        // if ($this->session->userdata('masuk') == FALSE) {
        //     redirect('Admin/Login', 'refresh');
        // }
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $paket['array'] = $this->mdl_produk->ambildata();
        $this->load->view('produk', $paket);
    }

    public function tambahdata()
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'trim|required');
        // $this->form_validation->set_rules('kategori_produk', 'Kategori Porudk', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
        // $value['id_kategori'] = $this->input->post('id_kategori');


        if ($this->form_validation->run() == FALSE) {
            $data['msg_error'] = "Silahkan isi semua kolom";
            $this->load->view('vtambah_produk', $data);
        } else {
            $send['id_produk'] = '';
            $send['id_kategori'] = $this->input->post('kategori_produk');
            $send['nama_produk'] = $this->input->post('nama_produk');
            $send['harga_produk'] = $this->input->post('harga');
            $send['deskripsi_produk'] = $this->input->post('deskripsi');
            // $send['id_kategori'] = $this->input->post('id_kategori');

            if ($_FILES["nama_foto"]["name"] != "") {
                $config['upload_path']          = './upload/produk/';
                $config['allowed_types']        = 'jpg|JPG|jpeg|JPEG|png|PNG';
                $config['max_size']             = 5000;
                $config['file_name'] = "Produk_" . "_" . time();
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('nama_foto')) {

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('msg', $error);

                    $data = $this->upload->data();
                    $send['nama_foto'] = $data['file_name'];

                    $kembalian['jumlah'] = $this->mdl_produk->tambahdata($send);

                    $kembalian['array'] = $this->mdl_produk->ambildata();

                    $this->load->view('produk', $kembalian);
                    $this->session->set_flashdata('msg', 'Data berhasil ditambahkan');
                    redirect('Produk');
                } else {

                    $kembalian['jumlah'] = $this->mdl_produk->tambahdata($send);

                    $kembalian['array'] = $this->mdl_produk->ambildata();

                    $this->load->view('produk', $kembalian);
                    $this->session->set_flashdata('msg', 'Data berhasil ditambahkan');
                    redirect('Produk');
                }
            }
        }
    }

    public function do_delete($id)
    {
        $where = array('id_kategori' => $id);
        $this->mdl_kategori->delete_data($where, 'tb_kategori_produk');
        $this->session->set_flashdata('msg_delete', 'Data berhasil dihapus');
        redirect('Kategori');
    }

    public function edit($id_update)
    {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $indexrow['data'] = $this->mdl_kategori->ambildata2($id_update);
            $this->load->view('vedit_kategori', $indexrow);
        } else {
            $send['id_kategori'] = $this->input->post('id_kategori');
            $send['nama_kategori'] = $this->input->post('nama_kategori');
            $kembalian['jumlah'] = $this->mdl_kategori->update($send);
            $this->session->set_flashdata('msg_update', 'Data Berhasil diupdate');
            redirect('Kategori');
        }
    }
}

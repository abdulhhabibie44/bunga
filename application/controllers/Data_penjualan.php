<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_penjualan extends CI_Controller
{
    public function __construct() //MEMPERSIAPKAN
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('mdl_transaksi');
        $this->load->library('form_validation');
        $this->load->database();
        if ($this->session->userdata('masuk') == FALSE) {
            redirect('Login', 'refresh');
        }
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
        $paket['array'] = $this->mdl_transaksi->ambildata();
        $this->load->view('transaksi', $paket);
    }


    public function do_delete($id)
    {
        $where = array('id_kategori' => $id);
        $this->mdl_kategori->delete_data($where, 'tb_kategori_produk');
        $this->session->set_flashdata('msg_delete', 'Data berhasil dihapus');
        redirect('Kategori');
    }

    public function detail($id_update)
    {
        $indexrow['data'] = $this->mdl_transaksi->ambildata2($id_update);
        $this->load->view('detail_transaksi', $indexrow);
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

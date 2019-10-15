<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
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

	public function proses($idProduk)
	{
        $data['idProduk'] = $idProduk;
		$this->load->view('front/formTransaksi',$data);
	}

	public function transaksi()
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
            $send['id_transaksi'] = '';
            // $send['id_pesan'] = '';
            // $send['id_validasi'] = '';
            $send['nama_pemesan'] = $this->input->post('nama_pemesan');
            $send['tujuan_pengiriman'] = $this->input->post('tujuan_pengiriman');
            $send['id_produk'] = $this->input->post('id_produk');
            $send['jumlah'] = $this->input->post('jumlah');
            // $send['id_kategori'] = $this->input->post('id_kategori');

            // if ($_FILES["nama_foto"]["name"] != "") {
            //     $config['upload_path']          = './upload/produk/';
            //     $config['allowed_types']        = 'jpg|JPG|jpeg|JPEG|png|PNG';
            //     $config['max_size']             = 5000;
            //     $config['file_name'] = "Produk_" . "_" . time();
            //     // $config['max_width']            = 1024;
            //     // $config['max_height']           = 768;

            //     $this->load->library('upload', $config);

            //     if ($this->upload->do_upload('nama_foto')) {

            //         $error = array('error' => $this->upload->display_errors());
            //         $this->session->set_flashdata('msg', $error);

            //         $data = $this->upload->data();
            //         $send['nama_foto'] = $data['file_name'];

                    $kembalian['jumlah'] = $this->mdl_produk->tambahTransaksi($send);

            //         $kembalian['array'] = $this->mdl_produk->ambildata();

            //         $this->load->view('produk', $kembalian);
            //         $this->session->set_flashdata('msg', 'Data berhasil ditambahkan');
            //         redirect('Produk');
                // } else {

                    // $kembalian['jumlah'] = $this->mdl_produk->tambahdata($send);

                    // $kembalian['array'] = $this->mdl_produk->ambildata();

                    // $this->load->view('produk', $kembalian);
                    $this->session->set_flashdata('msg', 'Transaksi berhasil');
                    redirect('Produk');
                // }
            // }
        }
	}
}

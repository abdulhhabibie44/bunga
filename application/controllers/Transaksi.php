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
        $this->session->set_userdata('produk',$idProduk);        
        $data['idProduk'] = $idProduk;
		$this->load->view('front/formTransaksi',$data);
	}

	public function transaksi($idProduk)
	{
        // $revisi_ukm=$this->session->userdata('ses_ukm');
        $this->form_validation->set_rules('nama_pemesan', 'Nama Produk', 'trim|required');
        $this->form_validation->set_rules('tujuan_pengiriman', 'Harga', 'trim|required');
        $this->form_validation->set_rules('jumlah', 'Deskripsi', 'trim|required');
        $this->form_validation->set_rules('cp', 'Deskripsi', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $data['idProduk'] = $idProduk;
            $this->load->view('front/formTransaksi', $data);
        } else {
            $send['id_transaksi'] = '';
            // $send['tgl_pesan'] = '';
            // $send['tgl_validasi'] = '';
            $send['cp'] = $this->input->post('cp');
            $send['nama_pemesan'] = $this->input->post('nama_pemesan');
            $send['tujuan'] = $this->input->post('tujuan_pengiriman');
            $send['id_produk_1'] = $this->input->post('id_produk');
            $send['jml_produk_1'] = $this->input->post('jumlah');
            $send['status_validasi'] = "BELUM";
            // $send['id_kategori'] = $this->input->post('id_kategori');

            if ($_FILES["bukti_transfer"]["name"] != "") {
                $config['upload_path']          = './upload/bukti/';
                $config['allowed_types']        = 'jpg|JPG|jpeg|JPEG|png|PNG';
                $config['max_size']             = 5000;
                $config['file_name'] = "Bukti_" . "_" . time();
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('bukti_transfer')) {

                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('msg', $error);

                    $data = $this->upload->data();
                    $send['bukti_tf'] = $data['file_name'];


                    $kembalian['jumlah'] = $this->mdl_produk->tambahTransaksi($send);

                    // $kembalian['array'] = $this->mdl_produk->ambildata();
                    // $this->load->view('produk', $kembalian);

                    $this->session->set_flashdata('msg', 'Data berhasil');
                    redirect('Produk_user');
                } else {
                    $datas['idProduk'] = $idProduk;
                    // $kembalian['jumlah'] = $this->mdl_produk->tambahdata($send);

                    // $kembalian['array'] = $this->mdl_produk->ambildata();

                    $this->session->set_flashdata('msg', 'Transaksi berhasil');
                    // redirect('Produk_user');
                    $this->load->view('front/formTransaksi', $datas);
                }
            }
        }
	}
}

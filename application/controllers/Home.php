<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function index()
	{
        $paket['array'] = $this->mdl_produk->ambildata();				
		$this->load->view('front/home',$paket);
	}
}

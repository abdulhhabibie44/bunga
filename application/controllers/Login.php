<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct() //MEMPERSIAPKAN
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('mdl_login');
        $this->load->library('form_validation');
        $this->load->database();
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

        $this->load->view('login');
    }

    public function aksi_login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->mdl_login->auth_admin($username, $password);
        // $cek_sie = $this->db->get('tb_jobdesk')->result(_array);
        // $cek_utype = $this->Login->ambildata();

        if ($cek->num_rows() > 0) {
            $data = $cek->row_array();

            $this->session->set_userdata('masuk', TRUE);
            $this->session->set_userdata('ses_nama', $data['nama']);
            redirect(base_url("Welcome"));
        } else {
            $this->session->set_flashdata('msg', 'Username / Passowrd Salah');
            $this->load->view('login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}

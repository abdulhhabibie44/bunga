<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mdl_login extends CI_Model
{

    public function auth_admin($username, $password)
    {
        $query = $this->db->query("SELECT * FROM tb_user where username='$username' AND password='$password' AND id_akses=1");
        return $query;
    }

    /* End of file Login.php */
    /* Location: ./application/models/Login.php */
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mdl_produk extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function ambildata()
    {
        $query = $this->db->query("SELECT * FROM tb_produk");
        return $query->result_array();
    }

    public function ambildata2($id_update)
    {
        $query = $this->db->query("SELECT * FROM tb_produk where id_produk = $id_update");
        return $query->result_array();
    }

    public function tambahdata($paket)
    {
        $this->db->insert('tb_produk', $paket);
        return $this->db->affected_rows();
    }
    public function tambahTransaksi($paket)
    {
        $this->db->insert('transaksi', $paket);
        return $this->db->affected_rows();
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function modelupdate($send)
    {
        $sql = "UPDATE tb_bidang SET id_ukm = ?, id_periode = ?, nama_bidang = ?, ketua_bidang = ?, sekretaris_bidang = ? WHERE id_bidang = ?";
        $query = $this->db->query($sql, array($send['id_ukm'], $send['id_periode'], $send['nama_bidang'], $send['nm_ketua_bidang'], $send['nm_sekretaris_bidang'], $send['id_bidang']));
    }
}

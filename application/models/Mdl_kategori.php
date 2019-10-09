<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mdl_kategori extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function ambildata()
	{
		$query = $this->db->query("SELECT * FROM tb_kategori_produk");
		return $query->result_array();
	}
	public function ambildata2($id_update)
	{
		$query = $this->db->query("SELECT * FROM tb_kategori_produk where id_kategori = $id_update");
		return $query->result_array();
	}

	public function tambahdata($paket)
	{
		$this->db->insert('tb_kategori_produk', $paket);
		return $this->db->affected_rows();
	}
	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function update($send)
	{
		$sql = "UPDATE tb_kategori_produk SET nama_kategori = ? WHERE id_kategori = ?";
		$query = $this->db->query($sql, array($send['nama_kategori'], $send['id_kategori']));
	}
}

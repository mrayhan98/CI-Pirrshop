<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pirrshop extends CI_Model {
	// DAFTAR MEMBER
	public function daftar($data)
	{
		$this->db->insert('users',$data);
	}
	// ADD CONTACT US
	public function add_contact($data)
	{
		$this->db->insert('contact',$data);
	}
	// GET PRODUK DARI DATABASE
	public function getProduct()
	{
		return $this->db->get('produk');
	}
	// CARI PRODUK DARI SEARCH
	public function cari($keyword)
	{
		$this->db->like('nama',$keyword);
		return $this->db->get('produk')->result();
	}
	// GET DATA PRODUK
	public function dataProduk()
	{
		$this->db->order_by('nama','asc');
		$data = $this->db->get('produk');
		return $data->result_array();
	}
	// INSERT DATA BARANG KE TABEL PRODUK
	public function add_brg($data)
	{
		$this->db->insert('produk',$data);
	}
	// DELETE DATA BARANG DARI TABEL PRODUK
	public function delProduct($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('produk');
	}
	// GET DATA PROFIL USER
  	public function getData($username){
		$this->db->where('username',$username);
		$user = $this->db->get('users');
		return $user->row_array();
	}
	// GET DATA USERE
	public function getAkun()
	{
		$data_akun = $this->db->get('users');
		return $data_akun->result_array();
	}
	// UPDATE PROFIL USER
	public function updatedata($data,$username){
		$this->db->where('username',$username);
		$this->db->update('users',$data);
	}
}
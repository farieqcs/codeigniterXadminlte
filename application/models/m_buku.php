<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_buku extends CI_Model {
	public function get_all_buku(){
		
		// $query = $this->db->order_by('kode_buku','DESC')->get('buku');
		
		$this->db->select('b.kode_buku, b.judul, b.harga_beli, b.harga_jual, b.stok,nama_rak');
		$this->db->from('buku as b');
		$this->db->join('rak', 'rak.id_rak = b.id_rak');
		$query = $this->db->get();
		
		return $query->result();
		
	}
	public function get_rak(){
		
		$this->db->select('id_rak, nama_rak');
		$this->db->from('rak');
		$query = $this->db->get();
		
		return $query->result();
		
	}
	
	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function edit_data($where,$table){
		$this->db->get_where($table, $where);
	}
}
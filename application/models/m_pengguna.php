<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pengguna extends CI_Model {
	
	public function get_all_pengguna(){
		
		// $query = $this->db->order_by('kode_buku','DESC')->get('buku');
		
		$this->db->select('id, username, level');
		$this->db->from('pengguna');
		$query = $this->db->get();
		
		return $query->result();
		
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller {

	public function __construct (){
		
		parent ::__construct();
		$this->load->model('m_buku');
		$this->load->helper('form');
		
	}
	
	public function arsip()
	{
		$data = array(
			'title' => 'Data Buku',
			'data_buku' => $this->m_buku->get_all_buku(),		
			'data_rak' => $this->m_buku->get_rak()			
		);
		$this->load->view('buku/arsip',$data);
	}
	
	public function tambahbuku(){
		
		$kode_buku = $this->input->post('kode_buku');
		$judul = $this->input->post('judul');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');
		$rak = $this->input->post('rak');
		
		$data = array(
			'kode_buku' => $kode_buku,
			'judul' => $judul,
			'harga_beli' => $harga_beli,
			'harga_jual' => $harga_jual,
			'id_rak' => $rak,
		);
		
		$this->m_buku->input_data($data, 'buku');
		redirect('buku/arsip');
		
	}
	public function hapus($kode_buku){
		
		$where = array('kode_buku' => $kode_buku);
		$this->m_buku->hapus_data($where, 'buku');
		redirect('buku/arsip');		
		
	}
	public function edit($kode_buku){
		
		$where = array('kode_buku' => $kode_buku);
		$data['buku'] = $this->m_buku->edit_data($where, 'buku')->result();
		
		$this->load->view('buku/edit',$data);	
		
	}
}

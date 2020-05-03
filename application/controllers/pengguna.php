<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct (){
		
		parent ::__construct();
		$this->load->model('m_pengguna');
		
	}
	
	public function index()
	{
		$data = array(
			'title' => 'Data Pengguna',
			'data_pengguna' => $this->m_pengguna->get_all_pengguna(),			
		);
		$this->load->view('pengguna/arsip',$data);
	}
	
	public function tambahbuku(){
		
		$username = $this->input->post('username');
		$level = $this->input->post('level');
		$pasword = $this->input->post('password');
		
		$data = array(
			'username' => $username,
			'level' => $level,
			'pasword' => $pasword,
		);
		
		$this->m_pengguna->input_data($data, 'pengguna');
		redirect('pengguna');
		
	}
}

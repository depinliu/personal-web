<?php

class Tentang extends CI_Controller{
	public function index()
	{
		$data['judul'] = 'Tentang';
		$this->load->view('templates/header', $data);
		$this->load->view('tentang/index');
		$this->load->view('templates/footer');
	}
}
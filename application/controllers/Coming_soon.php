<?php

class Coming_soon extends CI_Controller{
	public function index()
	{
		$data['judul'] = 'Coming Soon';
		$this->load->view('templates/header', $data);
		$this->load->view('coming_soon/index');
		$this->load->view('templates/footer');
	}
}
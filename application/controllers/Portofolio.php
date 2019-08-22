<?php

class Portofolio extends CI_Controller{

	public function web()
	{
		$data['judul'] = 'Portofolio Web';
		$this->load->view('templates/header', $data);
		$this->load->view('portofolio/web');
		$this->load->view('templates/footer');
	}

	public function desain()
	{
		$data['judul'] = 'Portofolio Desain Grafis';
		$this->load->view('templates/header', $data);
		$this->load->view('portofolio/desain');
		$this->load->view('templates/footer');
	}


}
<?php

class Backend_devin extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pesan');
	}

	public function index()
	{
		$data['judul'] = "Pesan";
		$data['pesan'] = $this->Model_pesan->getAllPesan();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('backend_devin/index');
		$this->load->view('templates/admin/footer');
	}

}
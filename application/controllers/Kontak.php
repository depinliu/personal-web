<?php

class Kontak extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pesan');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Kontak';
		$this->form_validation->set_rules('nama_lengkap','Nama','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('pesan','Pesan', 'required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('kontak/index');
			$this->load->view('templates/footer');
		}else{
			$this->Model_pesan->kirimPesan();
			$this->session->set_flashdata('flash', 'terkirim');
            redirect('kontak');
		}
		
	}

}
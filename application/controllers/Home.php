<?php 

class Home extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','download'));
	}

	public function index()
	{
		$data['judul'] = 'Beranda';
		$this->load->view('templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}

	public function download_cv()
	{
		force_download('assets/cv/CV_Devin.pdf', NULL);
	}


}

 ?>
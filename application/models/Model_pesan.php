<?php

class Model_pesan extends CI_Model{

	public function getAllPesan()
	{
		$query = $this->db->get('kontak');
		return $query->result_array();
	}

	public function kirimPesan()
	{
		$data = [
			"nama_lengkap" => $this->input->post('nama_lengkap', true),
			"email" => $this->input->post('email', true),
			"pesan" => $this->input->post('pesan', true)
		];
		$this->db->insert('kontak', $data);
	}

}
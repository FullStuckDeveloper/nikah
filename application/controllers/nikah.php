<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nikah extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('modelNikah');
	}

	function index()
	{
		$data = array(
			'title' => "Bismillahirrahmanirrahim - Anden & Aji",
		);

		$this->load->view('layout/header', $data);
		$this->load->view('nikah/index');
		$this->load->view('layout/footer');
	}

	function swiper()
	{
		$data = array(
			'title' => "Bismillahirrahmanirrahim - Anden & Aji",
			'data_ucapan' => $this->modelNikah->list_ucapan(),
		);

		$this->load->view('nikah/swiper', $data);
	}

	function acara()
	{
		$data = array(
			'title' => "Acara - Anden & Aji",
		);

		$this->load->view('layout/header', $data);
		$this->load->view('nikah/acara');
		$this->load->view('layout/footer');
	}

	function ucapan()
	{
		$data = array(
			'title' => "Doa & Harapan - Anden & Aji",
			'data_ucapan' => $this->modelNikah->list_ucapan(),
		);

		$this->load->view('layout/header', $data);
		$this->load->view('nikah/ucapan');
		$this->load->view('layout/footer');
	}


	function list_ucapan()
	{
		$data = array(
			'title' => "List Ucapan - Anden & Aji",
			'data_ucapan' => $this->modelNikah->list_ucapan(),
		);

		$this->load->view('layout/header', $data);
		$this->load->view('nikah/list_ucapan');
		$this->load->view('layout/footer');
	}

	function lokasi()
	{
		$data = array(
			'title' => "Lokasi - Anden & Aji",
		);

		$this->load->view('layout/header', $data);
		$this->load->view('nikah/lokasi');
		$this->load->view('layout/footer');
	}

	function galeri()
	{
		$data = array(
			'title' => "Galeri - Anden & Aji",
		);

		$this->load->view('layout/header', $data);
		$this->load->view('nikah/galeri');
		$this->load->view('layout/footer');
	}

	function buat_ucapan()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'ucapan' => $this->input->post('ucapan'),
			'created_at' => date('Y-m-d H:i:s'),
		);

		$this->modelNikah->insertData('tbl_doadanharapan', $data);
		redirect('nikah/swiper#ucapan');
	}
}

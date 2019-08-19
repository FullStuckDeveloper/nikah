<?php
 	defined('BASEPATH') OR exit('No direct script access allowed');

	class Nikah extends CI_Controller {

		function __construct(){
			parent::__construct();

			$this->load->model('modelNikah');

		}

		function index(){		
			$data = array(
				'title' => "Bismillah - Nikah Cuy!",
			);

			$this->load->view('layout/header', $data);	
      		$this->load->view('nikah/index');
      		$this->load->view('layout/footer');
		}

		function acara(){		
			$data = array(
				'title' => "Acara - Nikah Cuy!",
			);

			$this->load->view('layout/header', $data);	
      		$this->load->view('nikah/acara');
      		$this->load->view('layout/footer');
		}

		function ucapan(){		
			$data = array(
				'title' => "Doa & Harapan - Nikah Cuy!",
				'data_ucapan' => $this->modelNikah->list_ucapan(),
			);

			$this->load->view('layout/header', $data);	
      		$this->load->view('nikah/ucapan');
      		$this->load->view('layout/footer');
		}


		function list_ucapan(){		
			$data = array(
				'title' => "List Ucapan - Nikah Cuy!",
				'data_ucapan' => $this->modelNikah->list_ucapan(),
			);

			$this->load->view('layout/header', $data);	
      		$this->load->view('nikah/list_ucapan');
      		$this->load->view('layout/footer');
		}

		function lokasi(){		
			$data = array(
				'title' => "Lokasi - Nikah Cuy!",
			);

			$this->load->view('layout/header', $data);	
      		$this->load->view('nikah/lokasi');
      		$this->load->view('layout/footer');
		}

		function galeri(){		
			$data = array(
				'title' => "Galeri - Nikah Cuy!",
			);

			$this->load->view('layout/header', $data);	
      		$this->load->view('nikah/galeri');
      		$this->load->view('layout/footer');
		}

		function buat_ucapan(){
			$data=array(
				'nama'=>$this->input->post('nama'),
				'ucapan'=>$this->input->post('ucapan'),
				'created_at'=>date('Y-m-d H:i:s'),
			);

			$this->modelNikah->insertData('tbl_doadanharapan', $data);
			redirect('nikah/ucapan');

		}
	}
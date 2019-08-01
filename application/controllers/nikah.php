<?php
 	defined('BASEPATH') OR exit('No direct script access allowed');

	class Nikah extends CI_Controller {

		function __construct(){
			parent::__construct();

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
				'title' => "Lokasi - Nikah Cuy!",
			);

			$this->load->view('layout/header', $data);	
      		$this->load->view('nikah/lokasi');
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
	}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("moviesModel");
	}

	public function index()
	{
		$data['movies'] = $this->moviesModel->getMovies();
		$data['id'] = $this->session->userdata('id');
		$data['nama'] = $this->session->userdata('nama');

		$this->load->view('template/header');
		$this->load->view('home',$data);
		$this->load->view('template/footer');
	}
}

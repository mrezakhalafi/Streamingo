<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("moviesModel");
		$this->checkLogin();
	}

	public function index()
	{
		$id = $this->input->get('id');
		if($id==null){
			$data['error']=0;
			$this->load->view('template/header');
			$this->session->set_flashdata('movie_error','Error');
			$this->load->view('error',$data);
			$this->load->view('template/footer');
		}else{
			$data['movie'] = $this->moviesModel->getMovieById($id);
			if($data['movie']!=null){
				$this->load->view('template/header');
				$this->load->view('movie',$data);
				$this->load->view('template/footer');
			}else{
				$data['error']=1;
				$this->load->view('template/header');
				$this->session->set_flashdata('movie_error','Error');
				$this->load->view('error',$data);
				$this->load->view('template/footer');
			}
		}
	}

	private function checkLogin(){
		$login = $this->session->userdata('id');
		if($login == null){
			redirect('');
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model("authModel");
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->authModel->login($email);

		if($user){
			if(password_verify($password, $user['password'])){
				$data = [
					'id' => $user['id'],
					'nama' => $user['nama'],
					'email' => $user['email']
				];
				$this->session->set_userdata($data);
				redirect('');
			}else{
				$this->session->set_flashdata('password_error','<div class="text-danger">Password salah.</div>');
				redirect('');
			}
		}else{
			$this->session->set_flashdata('email_error','<div class="text-danger">Email tidak ditemukan.</div>');
			redirect('');
			}
	}

	public function logout(){
		session_destroy();
		redirect('');
	}
}

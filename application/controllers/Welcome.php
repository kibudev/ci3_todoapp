<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data["errorLogin"] = false;
		$this->load->view('login', $data);
	}

	public function login(){
		$this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

    if($this->form_validation->run() == FALSE){
      // Failed
      $this->index();
    }else{
      // Ok
      $user = $this->model->validate_credentials($this->input->post('email'), $this->input->post('password'));

			if($user){
				// Session data
				$data = array(
					'id' => $user->id,
					'email' => $user->email,
					'logged-in' => true
				);
				$this->session->set_userdata($data);
				// Redirect
				redirect('app');
			}else{
				$data["errorLogin"] = true;
				$this->load->view('login', $data);
				//redirect('welcome');
			}
    }
	}
}

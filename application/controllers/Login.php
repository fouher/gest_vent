<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        
		parent:: __construct();
		      
        $this->load->model('Employe_model', 'employe_model');

    }

	public function index()
	{
		$this->load->view('login/login');
	}

	public function login(){
		if($this->input->post()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if($this->employe_model->isExist($username, $password)){
			   $user = $this->employe_model->getByNameANdPassword($username, $password);
			   $this->session->set_userdata('username', $username);
			   $this->session->set_flashdata('nom_employe', $user->nom);
			   $this->session->set_flashdata('user_id', $username);
			   $this->session->set_userdata('logged_in', TRUE);
			   $this->session->set_userdata('access_level', $user->role);
			   redirect("Home");
		   }else{
			   $this->session->set_flashdata('error', 'Wrong Access Code');
			   redirect("Login");
		   }
	   }
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		$this->session->set_flashdata('deconnexion', 'Deconnected');
		redirect("Login");
	}
	
}

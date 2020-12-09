<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {

	public function __construct() {
        
		parent:: __construct();
		      
        $this->load->model('Categorie_model', 'categorie_model');

    }
	
	public function index()
	{

		$data=array();
		$data['categories']=$this->categorie_model->getAll();

		$this->load->view('layout/header');
		$this->load->view('categorie/liste', $data);
		$this->load->view('layout/footer');
	}
}

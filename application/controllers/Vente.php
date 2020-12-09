<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vente extends CI_Controller {

	public function __construct() {
        
		parent:: __construct();
		      
		$this->load->model('Vente_model', 'vente_model');
		$this->load->model('Client_model', 'client_model');
		$this->load->model('Produit_model', 'produit_model');

    }
	
	public function index()
	{
		$data=array();
		$data['ventes']=$this->vente_model->getAll();

		$this->load->view('layout/header');
		$this->load->view('vente/liste', $data);
		$this->load->view('layout/footer');
	}

	public function vue_ajout()
	{
		$data=array();
		$data['clients']= $this->client_model->getAll();
		$data['produits']= json_encode($this->produit_model->getAll());
		
		$this->load->view('layout/header');
		$this->load->view('vente/vue_ajout', $data);
		$this->load->view('layout/footer');
	}

	public function vue_facture()
	{
		$data=array();
		$data['clients']= $this->client_model->getAll();
		$data['produits']= json_encode($this->produit_model->getAll());
		
		$this->load->view('layout/header');
		$this->load->view('vente/vue_ajout', $data);
		$this->load->view('layout/footer');
	}

	public function add()
	{

		$data = array();
		$prouit_quatite_prix = array();
		
		if($this->input->post()){
			$nbr_produit=$this->input->post('num_input');
			$client_id=$this->input->post('client');
			
			for($i=0; $i < $nbr_produit; $i++){
				$prouit_quatite_prix = 
			}
      		$client_id=$this->input->post('client');
      		$client_id=$this->input->post('client');
 
		
			// On lance une requête
			$data["info_km"]=$this->kilometrage->kilometrage_filter($date_d,$date_f);

			$this->load->view('layout/header');
			$this->load->view('vente/vue_ajout', $data);
			$this->load->view('layout/footer');
		
    }else{
      redirect("vente/vue_ajout");	
	}
	
		$data=array();
		$data['clients']= $this->client_model->getAll();
		$data['produits']= json_encode($this->produit_model->getAll());
		
		$this->load->view('layout/header');
		$this->load->view('vente/vue_ajout', $data);
		$this->load->view('layout/footer');
	}
}

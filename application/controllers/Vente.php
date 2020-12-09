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
		$produit_quatite_prix = array();
		
		if($this->input->post()){
			$nbr_produit=$this->input->post('num_input');
			$client_id=$this->input->post('client');
			
			for($i=0; $i < $nbr_produit; $i++){
				$produit_quatite_prix = array($this->input->post('produit'.$i), $this->input->post('quantite'.$i));

				$produit_id=$this->input->post('produit'.$i);
				$quantite=$this->input->post('quantite'.$i);

				$data['idproduit'] = $produit_id;
				$data['date_creation'] = date('Y-m-d H:i:s');
				$data['quantite_vendu'] = $quantite;
				$data['idclient'] = $client_id;
				$data['idemploye'] = 1;
				$data['deleted'] = 0;
				
				$sql_query = $this->vente_model->add($data);

			}
 

			if($sql_query){
				$this->session->set_flashdata('success', 'successful sales record  ');
				}else{
				$this->session->set_flashdata('error', 'Une erreur est survenue, veuillez réessayer à nouveau');
			}

			redirect("Vente"); 
		
    }else{
      redirect("vente/vue_ajout");	
	}
	
	}
}

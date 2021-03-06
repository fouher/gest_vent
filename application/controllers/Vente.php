<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vente extends CI_Controller {

	public function __construct() {
        
		parent:: __construct();
		      
		$this->load->model('Vente_model', 'vente_model');
		$this->load->model('Client_model', 'client_model');
		$this->load->model('Produit_model', 'produit_model');
        $this->load->model('Categorie_model', 'categorie_model');

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
		$this->load->view('vente/vue_fature', $data);
		$this->load->view('layout/footer');
	}

	public function add()
	{

		$data = array();
		$data_insert = array();
		$produit_quatite_prix = array();
		$current_date = date('Y-m-d');
		
		if($this->input->post()){
			$nbr_produit=$this->input->post('num_input');
			$client_id=$this->input->post('client');
			
			for($i=0; $i < $nbr_produit; $i++){
 
				$prouit_quatite_prix = '';
 
				$produit_quatite_prix = array($this->input->post('produit'.$i), $this->input->post('quantite'.$i));

				$produit_id=$this->input->post('produit'.$i);
				$quantite=$this->input->post('quantite'.$i);
				$prix=$this->input->post('prix'.$i);

				$data_insert['idproduit'] = $this->input->post('produit'.$i);
				$data_insert['date_creation'] = $current_date;
				$data_insert['quantite_vendu'] = $this->input->post('quantite'.$i);
				$data_insert['idclient'] = $client_id;
				$data_insert['idemploye'] = $this->session->user_id;
				$data_insert['prix_vente_v'] = $prix;
				$data_insert['deleted'] = 0;

				$sql_query = $this->vente_model->add($data_insert);
				if($sql_query){
					$quantite_db = $this->produit_model->getById($produit_id)->quantite;
					$current_quantite = $quantite_db - $quantite;
					if($current_quantite >= 0){
						$this->produit_model->updateQuantity($produit_id, $current_quantite);
					}
				}
 
			}

			$data['ventes'] = $this->vente_model->getByDateAndCustomer($current_date, $client_id );
			$data['client'] = $this->client_model->getById($client_id);
			$data['date_d'] = $current_date;
 

		/*	if($sql_query){
				$this->session->set_flashdata('success', 'successful sales record  ');
				}else{
				$this->session->set_flashdata('error', 'Une erreur est survenue, veuillez réessayer à nouveau');
			} 

			redirect("Vente"); */

		$this->load->view('layout/header');
		$this->load->view('vente/vue_facture', $data);
		$this->load->view('layout/footer'); 
		
    }else{
      redirect("vente/vue_ajout");	
	}
	
	}

	public function report1()
	{
		$data=array();
		$data['ventes']=$this->vente_model->getAll();
		
		$this->load->view('layout/header');
		$this->load->view('vente/vue_report', $data);
		$this->load->view('layout/footer');
	}

	public function report()
	{
		$data=array();

		if($this->input->post()){
			$start_d = $this->input->post('start_d');
			$end_d = $this->input->post('end_d');

			$this->session->set_userdata('fdate', $start_d);
			$this->session->set_userdata('ldate', $end_d);
			$data['ventes']=$this->vente_model->getDateFiltre($start_d, $end_d);
			$data['categorie'] = $this->categorie_model->getAll();
		
			$this->load->view('layout/header');
			$this->load->view('vente/vue_report', $data);
			$this->load->view('layout/footer');
		}else{
			$this->session->unset_userdata('fdate');
			$this->session->unset_userdata('ldate');
			$start = date("Y-m-d", strtotime("first day of this month"));
			$end = date("Y-m-d");
			
			$data['ventes']=$this->vente_model->getDateFiltre($start, $end);
			$data['categorie'] = $this->categorie_model->getAll();
			
			$this->load->view('layout/header');
			$this->load->view('vente/vue_report', $data);
			$this->load->view('layout/footer');
		}
	}

	public function reportCategorie()
	{
		$data=array();

		if($this->input->post()){
			$start_d = $this->input->post('start_d');
			$end_d = $this->input->post('end_d');
			$categorie = $this->input->post('idcategorie');

			$this->session->set_userdata('fdate', $start_d);
			$this->session->set_userdata('ldate', $end_d);
			$data['ventes']=$this->vente_model->getByDateAndCategorieFiltre($start_d, $end_d, $categorie);
			$data['categorie'] = $this->categorie_model->getAll();
			
		
			$this->load->view('layout/header');
			$this->load->view('vente/vue_report_categorie', $data);
			$this->load->view('layout/footer');
		}else{
			$this->session->unset_userdata('fdate');
			$this->session->unset_userdata('ldate');
			$start = date("Y-m-d", strtotime("first day of this month"));
			$end = date("Y-m-d");
			
			$data['ventes']=$this->vente_model->getDateFiltre($start, $end);
			$data['categorie'] = $this->categorie_model->getAll();
			
			$this->load->view('layout/header');
			$this->load->view('vente/vue_report_categorie', $data);
			$this->load->view('layout/footer');
		}
	}

	public function reportProduct()
	{
		$data=array();

		if($this->input->post()){
			$start_d = $this->input->post('start_d');
			$end_d = $this->input->post('end_d');
			$produit = $this->input->post('idproduit');

			$this->session->set_userdata('fdate', $start_d);
			$this->session->set_userdata('ldate', $end_d);
			$data['ventes']=$this->vente_model->getByDateAndProduitFiltre($start_d, $end_d, $produit);
			$data['produits'] = $this->produit_model->getAll();
			
		
			$this->load->view('layout/header');
			$this->load->view('vente/vue_report_product', $data);
			$this->load->view('layout/footer');
		}else{
			$this->session->unset_userdata('fdate');
			$this->session->unset_userdata('ldate');
			$start = date("Y-m-d", strtotime("first day of this month"));
			$end = date("Y-m-d");
			
			$data['ventes']=$this->vente_model->getDateFiltre($start, $end);
			$data['produits'] = $this->produit_model->getAll();
			
			$this->load->view('layout/header');
			$this->load->view('vente/vue_report_product', $data);
			$this->load->view('layout/footer');
		}
	}
}

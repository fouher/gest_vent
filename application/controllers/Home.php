<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//Chargement du modèle
		$this->load->model('Client_model', 'client_model');
		$this->load->model('Employe_model', 'employe_model');
		$this->load->model('Produit_model', 'produit_model');
		$this->load->model('Vente_model', 'vente_model');
		$this->load->model('Categorie_model', 'categorie_model');
	}

	public function index()
	{
        $startDate = date('Y-m-d', strtotime('first day of this month'));
		$endDate = date('Y-m-d', strtotime('last day of this month'));
        
		if($this->input->post()){
		$startDate = $this->input->post('fdate');
		$endDate = $this->input->post('ldate');
		}
            $data=array();
            $data['totalProduit']=$this->produit_model->getTotalProduit();
			$data['totalClient']=$this->client_model->getTotalClient();
			$data['totalEmploye']=$this->employe_model->getTotalEmploye();
            $data['totalVenteByDate']=$this->vente_model->getNbreVenteByDate($startDate, $endDate);
        
        
     
			$this->load->view('layout/header.php');
			$this->load->view('layout/home.php', $data);
			$this->load->view('layout/footer.php'); 
	}
}
 

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit extends CI_Controller {

	public function __construct() {
        
		parent:: __construct();
		      
        $this->load->model('Produit_model', 'produit_model');
        $this->load->model('Categorie_model', 'categorie_model');

    }
	
	public function index()
	{

        $data=array();
		$data['produit'] = $this->produit_model->getAll();
        $data['categorie'] = $this->categorie_model->getAll();

		$this->load->view('layout/header');
		$this->load->view('produit/liste', $data);
		$this->load->view('layout/footer');
	}
    
    	public function page_ajout(){
			$data['categorie'] = $this->categorie_model->getAll();
			
			$this->load->view('layout/header.php');
			$this->load->view('produit/add', $data);
			$this->load->view('layout/footer.php');
	}
    
    	public function ajout_produit()
	{
			if($this->input->post()){
 
				$data['code'] = $this->input->post('code');
				$data['nom'] = $this->input->post('nom');
                $data['description'] = $this->input->post('description');
				$data['idcategorie'] = $this->input->post('idcategorie');
                $data['quantite'] = $this->input->post('quantite');
				$data['seuil'] = $this->input->post('seuil');
				$data['prix_achat'] = $this->input->post('prix_achat');
                $data['prix_vente'] = $this->input->post('prix_vente');
				$data['deleted'] = 0;
				if(!$this->produit_model->exist_produit_with_code($this->input->post('code'))){
					$sql_query=$this->produit_model->add($data);

					if($sql_query){
					$this->session->set_flashdata('success', 'New product add sucessfuly  ');
					}else{
					$this->session->set_flashdata('error', 'an error ocured please check and try aigain');
					}
					redirect("Produit");
				}else{
					$this->session->set_flashdata('error', 'un site avec ce code existe déjà');
					redirect("Produit");
				}	
			}else{
				redirect("Produit");
			}
	}
}

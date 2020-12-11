<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit extends CI_Controller {

	public function __construct() {
        
		parent:: __construct();
		      
        $this->load->model('Produit_model', 'produit_model');
        $this->load->model('Categorie_model', 'categorie_model');
        $this->load->model('Client_model', 'client_model');

    }
	
	public function index()
	{

        $data=array();
		$data['produit'] = $this->produit_model->getAll();
       // $data['categorie'] = $this->categorie_model->getAll();
		$data['categories']=$this->categorie_model->getAll();

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
    
    
    	public function update_product(){
			if($this->input->post()){
				$id = $this->input->post('id');
				$code = $this->input->post('code');
				$nom = $this->input->post('nom');
				$description = $this->input->post('description');
				$idcategorie = $this->input->post('idcategorie');
				$quantite = $this->input->post('quantite');
                $seuil = $this->input->post('seuil');
                $prix_achat = $this->input->post('prix_achat');
                $prix_vente = $this->input->post('prix_vente');
                
				$sql_query = $this->produit_model->edit_produit($id, $code,$nom, $description,$idcategorie,$quantite,$seuil,$prix_achat,$prix_vente );
				if($sql_query){
					$this->session->set_flashdata('success', 'Products update successfuly');
				}else{
					$this->session->set_flashdata('error', 'an error occured please check and try aigain');
				}
			}
			redirect('Produit');
	}
    
    public function page_modification($id){
			$data = array();
			if ($id == null) {
				redirect('produit');
			} else {                
				$data['categorie'] = $this->categorie_model->getAll();
				$data['produit'] = $this->produit_model->getlistproduitandcategoriebyidsite($id);
				
				$this->load->view('layout/header.php');
				$this->load->view('produit/update_produit.php', $data);
				$this->load->view('layout/footer.php');
			}
	}
    
    public function delete_produit($id)
	{
			$sql_query=$this->produit_model->deleteProduitById($id);
			if($sql_query){
				$this->session->set_flashdata('success', 'product deleted');
				redirect("Produit");

			}else{
				$this->session->set_flashdata('error', 'an erro occured please try aigain');
				echo var_dump($sql_query);
			}
	}
	
}

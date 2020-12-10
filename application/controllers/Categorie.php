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

	public function page_add_category(){
		$this->load->view('layout/header');
		$this->load->view('categorie/add');
		$this->load->view('layout/footer');
	
}

public function add_categorie()
{
		if($this->input->post()){

			$nom= $this->input->post('nom');
		    $description= $this->input->post('description');
			
			if(!$this->categorie_model->exists_categorie($nom,$description)){
			$sql_query=$this->categorie_model->add($nom,$description);

			if($sql_query){
				$this->session->set_flashdata('successCategorie', 'New category add with success');
			}else{
				$this->session->set_flashdata('errorCategorie', 'An error occurred during backup');
			}
			redirect("Categorie");
		}else{
			$this->session->set_flashdata('errorRegion', 'this category already exists ');
			redirect("Categorie");
		}	
	}else{
		redirect("Categorie");
	}
}



public function page_modification($id){
		$data = array();
		if ($id == null) {
			redirect('Categorie');
		} else {
			$data['categorie'] = $this->categorie_model->getById($id);

			$this->load->view('layout/header.php');
			$this->load->view('categorie/update_categorie.php', $data);
			$this->load->view('layout/footer.php');
		}
}


public function update(){
	$sql_query = "";
		if($this->input->post()){
			$id = $this->input->post('id');
			$nom = $this->input->post('nom');
			$description = $this->input->post('description');

			$sql_query=$this->categorie_model->edit($id , $nom, $description);
			if($sql_query){
				$this->session->set_flashdata('successCategorie', 'catogory update successfully');
			}else{
				$this->session->set_flashdata('errorCategory', 'Error please verifie and try aigain');
			}
			redirect('Categorie');
		}
	
}


	public function delete($id){
			if ($id == null) {
				redirect('Categorie');
			} else {
				$this->categorie_model->delete($id);
				redirect('Categorie');
			}
	} 
}

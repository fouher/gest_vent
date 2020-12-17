<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employe extends CI_Controller {

	public function __construct() {
        
		parent:: __construct();
		      
        $this->load->model('Employe_model', 'employe_model');

    }
	
	 

		public function index()
	{

		$data=array();
		$data['employes']=$this->employe_model->getAll();

		$this->load->view('layout/header');
		$this->load->view('employe/liste', $data);
		$this->load->view('layout/footer');
	}

    
	 public function page_ajout(){
			
			$this->load->view('layout/header.php');
			$this->load->view('employe/add');
			$this->load->view('layout/footer.php');
	}
    
    	public function ajout_client()
	{
			if($this->input->post()){
  
				$data['nom'] = $this->input->post('nom');
                $data['username'] = $this->input->post('username');
                $data['telephone'] = $this->input->post('telephone');
                $data['quartier'] = $this->input->post('quartier');
				$data['password'] = $this->input->post('password');
				$data['sexe'] = $this->input->post('sexe');
				$data['role'] = $this->input->post('role');
				$data['deleted'] = 0;
				if(!$this->employe_model->exist_with_username($this->input->post('username'))){
					$sql_query=$this->employe_model->add($data);

					if($sql_query){
					$this->session->set_flashdata('success', 'New Employe add sucessfuly  ');
					}else{
					$this->session->set_flashdata('error', 'an error ocured please check and try aigain');
					}
					redirect("Employe");
				}else{
					$this->session->set_flashdata('error', 'Employe with this username already exist, please retry');
					redirect("Employe");
				}	
			}else{
				redirect("Employe");
			}
	}
	
    	public function update_client(){
			if($this->input->post()){
				$id = $this->input->post('id');
				$nom = $this->input->post('nom');
				$description = $this->input->post('description');
				$telephone = $this->input->post('telephone');
				$quartier = $this->input->post('quartier');
                $cni = $this->input->post('cni');
                
                
				$sql_query = $this->client_model->edit_client($id, $nom, $description, $telephone, $quartier, $cni);
				if($sql_query){
					$this->session->set_flashdata('success', 'Customer update successfuly');
				}else{
					$this->session->set_flashdata('error', 'an error occured please check and try aigain');
				}
			}
			redirect('Employe');
	}
    
    public function page_modification($id){
			$data = array();
			if ($id == null) {
				redirect('Employe');
			} else {                
				 
				$data['Employes'] = $this->client_model->getById($id);
                
				$this->load->view('layout/header.php');
				$this->load->view('employe/update.php', $data);
				$this->load->view('layout/footer.php');
			}
	}
    


}
 

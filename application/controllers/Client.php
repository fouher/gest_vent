<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct() {
        
		parent:: __construct();
		      
        $this->load->model('Client_model', 'client_model');

    }
	
	 

		public function index()
	{

		$data=array();
		$data['clients']=$this->client_model->getAll();

		$this->load->view('layout/header');
		$this->load->view('client/liste', $data);
		$this->load->view('layout/footer');
	}

    
	 public function page_ajout(){
			$data['client'] = $this->client_model->getAll();
			
			$this->load->view('layout/header.php');
			$this->load->view('client/add', $data);
			$this->load->view('layout/footer.php');
	}
    
    	public function ajout_client()
	{
			if($this->input->post()){
  
				$data['nom'] = $this->input->post('nom');
                $data['description'] = $this->input->post('description');
                $data['telephone'] = $this->input->post('telephone');
                $data['quartier'] = $this->input->post('quartier');
				$data['cni'] = $this->input->post('cni');
				$data['deleted'] = 0;
				if(!$this->client_model->exist_client_with_cni($this->input->post('cni'))){
					$sql_query=$this->client_model->add($data);

					if($sql_query){
					$this->session->set_flashdata('success', 'New Customers add sucessfuly  ');
					}else{
					$this->session->set_flashdata('error', 'an error ocured please check and try aigain');
					}
					redirect("Client");
				}else{
					$this->session->set_flashdata('error', 'un site avec ce code existe déjà');
					redirect("Client");
				}	
			}else{
				redirect("Client");
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
			redirect('Client');
	}
    
    public function page_modification($id){
			$data = array();
			if ($id == null) {
				redirect('Client');
			} else {                
				 
				$data['clients'] = $this->client_model->getById($id);
                
				$this->load->view('layout/header.php');
				$this->load->view('client/client_update.php', $data);
				$this->load->view('layout/footer.php');
			}
	}
    


}
 

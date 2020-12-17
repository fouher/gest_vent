<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PdfController extends CI_Controller {

	public function __construct() {
        
		parent:: __construct();
		      
		$this->load->model('Vente_model', 'vente_model');
		$this->load->model('Client_model', 'client_model');
		$this->load->model('Produit_model', 'produit_model');
        $this->load->model('Categorie_model', 'categorie_model');

    }

	/**
    * Get Download PDF File
    *
    * @return Response
   */
   function facture($client_id=1){
	$this->load->library('pdf');
	$data = array();
	$current_date = date('Y-m-d');
	$data['ventes'] = $this->vente_model->getByDateAndCustomer($current_date, $client_id );
	$data['client'] = $this->client_model->getById($client_id);
	$data['date_d'] = $current_date;

	
  	$this->pdf->load_view('pdf/vue_facture', $data);
  	$this->pdf->render();


  	$this->pdf->stream("invoice.pdf");
   }

/*
   function test($client_id=1){

	$data = array();
	$current_date = date('Y-m-d');
	$data['ventes'] = $this->vente_model->getByDateAndCustomer($current_date, $client_id );
	$data['client'] = $this->client_model->getById($client_id);
	$data['date_d'] = $current_date;

	$this->load->view('pdf/vue_facture', $data);
   }

   function mypdf($client_id=1){

	$data = array();
	$current_date = date('Y-m-d');
	$data['ventes'] = $this->vente_model->getByDateAndCustomer($current_date, $client_id );
	$data['client'] = $this->client_model->getById($client_id);
	$data['date_d'] = $current_date;

	$this->load->library('pdf');


  	$this->pdf->load_view('pdf/vue_facture2', $data);
  	$this->pdf->render();


  	$this->pdf->stream("facture.pdf");
   } */
}

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vente_model extends CI_Model
{
	protected $table = 'vente';
	protected $table_employe = 'employe';
	protected $table_client = 'client';
	protected $table_produit = 'produit';
	
	public function getAll()
	{
		return $this->db->select('vente.id, vente.quantite_vendu, vente.idclient, vente.idproduit, vente.idemploye, vente.prix_vente_v,
		 vente.date_creation, produit.nom as nom_produit, produit.prix_vente, client.nom as nom_client, employe.nom as nom_employe')
		->from($this->table)
		->join($this->table_client, $this->table_client.'.id = '.$this->table.'.idclient')
		->join($this->table_employe, $this->table_employe.'.id = '.$this->table.'.idemploye')
		->join($this->table_produit, $this->table_produit.'.id = '.$this->table.'.idproduit')
		//->where('date_infraction >=',$date_d)
		//->where('date_infraction <=',$date_f)
		//->where('.id_user_vehicle',$id)
		->order_by($this->table.'.id', 'desc')
		->get()
		->result();
		/* return $this->db->select('*')
					->from($this->table)
					->where('deleted', 0)
					->get() 
					->result(); */
	}	

	public function add($data)
	{
		return $this->db->insert($this->table, $data);	
	}

	public function getById($id)
	{
		return $this->db->select('*')
					->from($this->table)
					->join($this->table_client, $this->table_client.'.id = '.$this->table.'.idclient')
					->join($this->table_employe, $this->table_employe.'.id = '.$this->table.'.idemploye')
					->join($this->table_produit, $this->table_produit.'.id = '.$this->table.'.idproduit')
					//->where('date_infraction >=',$date_d)
					//->where('date_infraction <=',$date_f)
					->where($this->table.'.id',$id)
					->order_by($this->table.'.id', 'desc')
					->get()
					->result();
	}
	
	public function delete($id)
    {
        $this->db->set('deleted', true)
            ->where('id', $id)
            ->update($this->table);
	}	

	public function getByDateAndCustomer($date_d, $clientId)
	{
		return $this->db->select('vente.id, vente.quantite_vendu, vente.idclient, vente.idproduit, vente.idemploye, vente.date_creation, vente.prix_vente_v, produit.nom as nom_produit,
		 produit.prix_vente, client.nom as nom_client, employe.nom as nom_employe')
		->from($this->table)
		->join($this->table_client, $this->table_client.'.id = '.$this->table.'.idclient')
		->join($this->table_employe, $this->table_employe.'.id = '.$this->table.'.idemploye')
		->join($this->table_produit, $this->table_produit.'.id = '.$this->table.'.idproduit')
		->where('date_creation >=',$date_d)
		->where('idclient =',$clientId)
		//->where('.id_user_vehicle',$id)
		->order_by($this->table.'.id', 'desc')
		->get()
		->result();
	}

	public function getDateFiltre($start, $end)
	{
		return $this->db->select('vente.id, vente.quantite_vendu, vente.idclient, vente.idproduit, vente.idemploye, vente.date_creation, vente.prix_vente_v, produit.nom as nom_produit,
		 produit.prix_vente, client.nom as nom_client, employe.nom as nom_employe')
		->from($this->table)
		->join($this->table_client, $this->table_client.'.id = '.$this->table.'.idclient')
		->join($this->table_employe, $this->table_employe.'.id = '.$this->table.'.idemploye')
		->join($this->table_produit, $this->table_produit.'.id = '.$this->table.'.idproduit')
		->where('date_creation >=',$start)
		->where('date_creation <=',$end)
		->order_by($this->table.'.id', 'desc')
		->get()
		->result();
	}

	public function getByDateAndCategorieFiltre($start, $end, $categorie)
	{
		return $this->db->select('vente.id, vente.quantite_vendu, vente.idclient, vente.idproduit, vente.idemploye, vente.date_creation, vente.prix_vente_v, produit.nom as nom_produit,
		 produit.prix_vente, client.nom as nom_client, employe.nom as nom_employe')
		->from($this->table)
		->join($this->table_client, $this->table_client.'.id = '.$this->table.'.idclient')
		->join($this->table_employe, $this->table_employe.'.id = '.$this->table.'.idemploye')
		->join($this->table_produit, $this->table_produit.'.id = '.$this->table.'.idproduit')
		->where('date_creation >=',$start)
		->where('date_creation <=',$end)
		->where('idcategorie =',$categorie)
		->order_by($this->table.'.id', 'desc')
		->get()
		->result();
	}

	public function getByDateAndProduitFiltre($start, $end, $produit)
	{
		return $this->db->select('vente.id, vente.quantite_vendu, vente.idclient, vente.idproduit, vente.idemploye, vente.date_creation, vente.prix_vente_v, produit.nom as nom_produit,
		 produit.prix_vente, client.nom as nom_client, employe.nom as nom_employe')
		->from($this->table)
		->join($this->table_client, $this->table_client.'.id = '.$this->table.'.idclient')
		->join($this->table_employe, $this->table_employe.'.id = '.$this->table.'.idemploye')
		->join($this->table_produit, $this->table_produit.'.id = '.$this->table.'.idproduit')
		->where('date_creation >=',$start)
		->where('date_creation <=',$end)
		->where($this->table_produit.'.id =',$produit)
		->order_by($this->table.'.id', 'desc')
		->get()
		->result();
	}

}

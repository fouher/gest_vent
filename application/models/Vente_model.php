<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vente_model extends CI_Model
{
	protected $table = 'vente';
	protected $table_employe = 'employe';
	protected $table_client = 'client';
	protected $table_produit = 'produit';
	
	public function getAll()
	{
		return $this->db->select('vente.id, vente.quantite_vendu, vente.idclient, vente.idproduit, vente.idemploye, vente.date_creation, produit.nom as nom_produit,
		 produit.prix_vente, client.nom as nom_client, employe.nom as nom_employe')
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

}

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produit_model extends CI_Model
{
	protected $table = 'produit';
	
	public function getAll()
	{
		return $this->db->select('*')
					->from($this->table)
					->where('deleted', 0)
					->get()
					->result();
	}	
    
    
    public function getlistproduitandcategorie()
	{
	   return  $this->db->select('vente_db.produit.id,vente_db.categorie.nom, vente_db.produit.nom, code')
		  ->from($this->table)
		  ->join('vente_db.categorie', 'vente_db.categorie.id = vente_db.produit.idcategorie')
       
		  -> get()
		  ->result();
	}
    
    
     public function getlistproduitandcategoriebyidsite($id)
	{
	   return  $this->db->select('*')
		  ->from($this->table)
		  ->join('vente_db.categorie', 'vente_db.categorie.id  = vente_db.produit.idcategorie')
          ->where('vente_db.produit.deleted', 0)
          ->where('vente_db.produit.id', $id)
		  -> get()
		  ->row();
	}

    
    public function add($data){
        $insert_data['code'] = $data['code'];
		$insert_data['nom'] = $data['nom'];
		$insert_data['description'] = $data['description'];
		$insert_data['idcategorie'] = $data['idcategorie'];
        $insert_data['quantite'] = $data['quantite'];
		$insert_data['seuil'] = $data['seuil'];
		$insert_data['prix_achat'] = $data['prix_achat'];
        $insert_data['prix_vente'] = $data['prix_vente'];
 
		return $this->db->insert($this->table, $insert_data);
    }
	 
   public function deleteProduitById($id)
    {
        $data = array(
			'deleted' => 1,
		 );
		return $this->db->where('id', $id)
					->update($this->table, $data); 
	}
    
   public function exist_produit_with_code($code){
       return $this->db->select('*')
                    ->from($this->table)
                    ->where('code',$code)
                    ->get()
                    ->row();
   }

    public function edit_produit($id, $code,$nom, $description,$idcategorie,$quantite,$seuil,$prix_achat,$prix_vente )
    {
       return $this->db->set('code', $code)
            ->set('nom', $nom)
            ->set('description', $description)
            ->set('idcategorie', $idcategorie)
            ->set('quantite', $quantite)
            ->set('seuil', $seuil)
            ->set('prix_achat', $prix_achat)
            ->set('prix_vente', $prix_vente)
            ->where('id', $id)
            ->update($this->table);
	}
}

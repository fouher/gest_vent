<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorie_model extends CI_Model
{
	protected $table = 'categorie';
	
	public function getAll()
	{
		return $this->db->select('*')
					->from($this->table)
					->where('deleted', 0)
					->get()
					->result();
	}	

	public function getById($id)
	{
		return $this->db->select('*')
					->from($this->table)
					->where('id', $id)
					->where('deleted', false)
					->get()
					->result();
	}

	public function add($nom , $description)
	{
		return $this->db->set('nom', $nom)
            ->set('description', $description)
            ->set('deleted', false)
            ->insert($this->table);
	}
 
	public function edit($id, $nom, $description)
    {
       return $this->db->set('nom', $nom)
            ->set('description', $description)
            ->where('id', $id)
            ->update($this->table);
	}
	
	public function deleteCategorieById($id)
    {
         {
        $data = array(
			'deleted' => 1,
		 );
		return $this->db->where('id', $id)
					->update($this->table, $data); 
	}
    
    }


    public function exists_categorie($nom, $description)
    {
        $result =  $this->db->select('*')
        ->from($this->table)
        ->where('nom', $nom)
        ->where('deleted', false)
        ->or_where('description', $description)
        ->get()
        ->row();
        return  $result !== null? true  : false;
    }
	
}

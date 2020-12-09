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

	public function add($nom,$description)
	{
		$today = date("Y-m-d H:i:s");
        $data = array(
            'nom' => $nom,
            'description' => $description,
            'is_deleted' => false
        );
        return $this->db->insert($this->table, $data);
	}

	public function edit($id, $nom, $description)
    {
       return $this->db->set('nom', $nom)
            ->set('description', $description)
            ->where('id', $id)
            ->update($this->table);
	}
	
	public function delete($id)
    {
        $this->db->set('deleted', true)
            ->where('id', $id)
            ->update($this->table);
	}	

}

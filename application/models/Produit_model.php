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

	public function getById($id)
	{
		return $this->db->select('*')
					->from($this->table)
					->where('id', $id)
					->where('deleted', false)
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

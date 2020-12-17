<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employe_model extends CI_Model
{
	protected $table = 'employe';
	
	public function getAll()
	{
		return $this->db->select('*')
					->from($this->table)
					->where('deleted', 0)
					->get()
					->result();
	}	

	public function getByNameANdPassword($username, $password)
    {
        return $this->db
            ->get_where($this->table, array('username' => $username, 'password' => $password, 'deleted' => false))
            ->row();
	}
	
	public function isExist($username, $password)
    {
        return $this->getByNameANdPassword($username, $password) !== null? true  : false;
	}
	
	public function exist_with_username($username){
		return $this->db->select('*')
					 ->from($this->table)
					 ->where('username',$username)
					 ->get()
					 ->row();
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

	public function add($data)
	{
		return $this->db->insert($this->table, $data);	
	}
  
	public function edit($id, $nom, $username, $password, $telephone, $quartier, $sexe, $role)
		{
		return $this->db->set('nom', $nom)
				->set('username', $username)
				->set('sexe', $sexe)
				->set('role', $role)
				->set('telephone', $telephone)
				->set('quartier', $quartier)
				->set('password', $password)
				->where('id', $id)
				->update($this->table);
			
		}
	
	public function delete($id)
    {
        $this->db->set('deleted', true)
            ->where('id', $id)
            ->update($this->table);
	}
    
    public function getTotalEmploye(){
        return $this->db->select('count(id) as total_employe')
					->from($this->table)
					->where('deleted', 0)
					->get()
					->row();
    
    }

}

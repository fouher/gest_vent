<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_model extends CI_Model
{
	protected $table = 'client';
	
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
    
    
     public function add($data){
		$insert_data['nom'] = $data['nom'];
		$insert_data['description'] = $data['description'];
		$insert_data['telephone'] = $data['telephone'];
        $insert_data['quartier'] = $data['quartier'];
		$insert_data['cni'] = $data['cni'];
 
		return $this->db->insert($this->table, $insert_data);
    }
    
    
    
	 public function exist_client_with_cni($cni){
       return $this->db->select('*')
                    ->from($this->table)
                    ->where('cni',$cni)
                    ->get()
                    ->row();
   }

  
        public function edit_client($id,$nom,$description,$telephone,$quartier,$cni)
    {
       return $this->db->set('nom', $nom)
            ->set('description', $description)
            ->set('telephone', $telephone)
            ->set('quartier', $quartier)
            ->set('cni', $cni)
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

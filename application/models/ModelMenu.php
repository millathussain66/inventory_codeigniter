<?php
class ModelMenu extends CI_Model
{

	public function myJoin()
	{

		// $this->db->order_by("id", "DESC");
		// $query = $this->db->get("models");
		// return $query->result();

		$query = $this->db->select('*');
		$query = $this->db->from('brand');
		$query = $this->db->join('models','models.brand_id = brand.id');
		$query = $this->db->get();
		return $query->result();

		
	}


	public function select_brand($data){
    
		$this->db->where('id', $data);
		return $this->db->get('brand')->result_array()[0];
		 
	  }


	public function insertModels($data)
	{

		$query = $this->db->query('SELECT brand_name FROM brand LIMIT 1');
		$query->row();


	
		return $this->db->insert('models', $data);
	
	
	}





	public function editModels($id)
	{


		$query = $this->db->get_where('models', ['id' => $id]);
		return $query->row();

	}




	
}

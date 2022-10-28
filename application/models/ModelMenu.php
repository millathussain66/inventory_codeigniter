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




	
}

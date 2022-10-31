<?php
class ItemsModel extends CI_Model
{


	public function myJoinItems()
	{
		$query = $this->db->select('*');
		$query = $this->db->from('brand');
		$query = $this->db->join('items', 'items.brand_id = brand.id');
		$query = $this->db->get();
		return $query->result();
	}

	public function modelJoin()
	{
		$query = $this->db->select('*');
		$query = $this->db->from('models');
		$query = $this->db->join('items', 'items.brand_id = models.id');
		$query = $this->db->get();
		return $query->result();
	}

     


}

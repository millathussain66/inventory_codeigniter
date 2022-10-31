<?php
class ItemsModel extends CI_Model
{


	public function getallItems()
	{
		$this->db->order_by("id", "DESC");
		$query = $this->db->get("items");
		return $query->result();
		
	}



	public function form_brand()
	{
		$this->db->order_by("id", "DESC");
		$query = $this->db->get("brand");
		return $query->result();
	}

	public function form_model()
	{
		$this->db->order_by("id", "DESC");
		$query = $this->db->get("models");
		return $query->result();
	}


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
		$query = $this->db->join('items', 'items.models_id = models.id');
		$query = $this->db->get();
		return $query->result();
	}


	public function insertItem($data)
	{
		return $this->db->insert('items', $data);
	}




	public function deleteItems($id)
	{
		return $this->db->delete('items', ['id' => $id]);
	}





     


}

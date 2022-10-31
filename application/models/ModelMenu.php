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


	public function insertModels($data)
	{
		return $this->db->insert('models', $data);
	}

	public function editModels($id)
	{
		$query = $this->db->get_where('models', ['id' => $id]);
		return $query->row();

	}

	// Update
	public function modelUpdate($data , $id)
	{
		return $this->db->update('models', $data,['id' => $id]);

	}



	public function deleteModel($id)
	{
		return $this->db->delete('models', ['id' => $id]);
	}


	public function getmodelName()
	{

		  $arr=[];

		    	$query = $this->db->get('models');

				foreach ($query->result() as $row)
				{
				 $arr[$row->id] =  $row->name;
				
				}

			return $arr;


		
	}





	
}

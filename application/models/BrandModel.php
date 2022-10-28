<?php
class BrandModel extends CI_Model
{


	public function getBrand()
	{
		// $query = $this->db->query('SELECT * FROM brand');
		// Get Data From Database
		$query = $this->db->get("brand");
		return $query->result();
	}

	public function insertBrand($data)
	{
		return $this->db->insert('brand', $data);
	}

	public function editBrand($id)
	{
		$query = $this->db->get_where('brand', ['id' => $id]);
		return $query->row();

	}

	

}

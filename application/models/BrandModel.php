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

}

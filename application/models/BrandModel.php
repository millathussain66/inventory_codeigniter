<?php
class BrandModel extends CI_Model
{


	public function getBrand()

	{
		$this->db->order_by("id", "DESC");

		$query = $this->db->get("brand");
		
		return $query->result();
		// $query = $this->db->query('SELECT * FROM brand');
		// Get Data From Database
		// $query = $this->db->get("brand");
		// return $query->result();
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

	public function updateBrand($data,$id)
	{
	  return $this->db->update('brand', $data,['id' => $id]);

	}
	public function deleteBrand($id)
	{
		return $this->db->delete('brand', ['id' => $id]);
	}


	public function getbrandName()
	{

		
		  $arr=[];

		    	$query = $this->db->get('brand');

				foreach ($query->result() as $row)
				{
				 $arr[$row->id] =  $row->brand_name;
				
				}

			return $arr;


		
	}

	

}

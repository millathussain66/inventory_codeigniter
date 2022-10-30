<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ModelController extends CI_Controller
{


	public function index()
	{


		// $this->load->model('BrandModel');
		// $data['model'] =  $this->BrandModel->getbrandName();


		$this->load->model('ModelMenu');
		$data['model'] = $this->ModelMenu->myJoin();
		$this->load->view('include/header');
		$this->load->view('model', $data);
		$this->load->view('include/footer');
	}




	public function store()
	{

		
		$this->load->model('BrandModel');
		$data['model'] =  $this->BrandModel->getbrandName();

		$data = [

			'brand_id'		     => $this->input->post('brand_name'),
			'name'				 => $this->input->post('name'),
			'entry_date' 		 => $this->input->post('entry_date'),

		];


		echo "<pre>";
		print_r($data);
		echo "</pre>";
		
		$this->load->model('ModelMenu');
		$this->ModelMenu->insertModels($data);


		redirect(base_url('model'));

	}

	public function edite($id)
	{
		$this->load->model('BrandModel');
		$data['model'] =  $this->BrandModel->getbrandName();

		$this->load->model('ModelMenu');

		$data['edit'] = $this->ModelMenu->editModels($id);


		$this->load->view('include/header');

		$this->load->view('model_edt', $data);

		$this->load->view('include/footer');
	}





	public function update($id)
	{

		$this->load->model('BrandModel');
		$data['model'] =  $this->BrandModel->getbrandName();

		$data = [

			'brand_id'		     => $this->input->post('brand_name'),
			'name'				 => $this->input->post('name'),
			'entry_date' 		 => $this->input->post('entry_date'),

		];


	
		$this->load->model('ModelMenu');

		$this->ModelMenu->modelUpdate($data,$id);

		redirect(base_url('model'));




	}










	public function delete($id)
	{

		$this->load->model('ModelMenu');
		$this->ModelMenu->deleteModel($id);
		redirect(base_url('model'));
		
	}
}

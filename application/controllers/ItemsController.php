<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ItemsController extends CI_Controller
{

	public function index()
	{

		// Brand All Items
		$this->load->model('ItemsModel');
		$data['brand'] = $this->ItemsModel->form_brand();
		// Brand All Items
		// Brand All Items
		$this->load->model('ItemsModel');
		$data['model'] = $this->ItemsModel->form_model();
		// Brand All Items

		$this->load->model('ItemsModel');
		$data['getAllData'] = $this->ItemsModel->getallItems();
		// Brand All Items



		$this->load->view('include/header');

		$this->load->view('items',$data);

		$this->load->view('include/footer');
	}

	public function store()
	{

		// $this->load->model('BrandModel');
		// $data['model'] =  $this->BrandModel->getbrandName();

		// $this->load->model('ModelMenu');
		// $data['brand'] =  $this->ModelMenu->getmodelName();

		$data = [

			'brand_id'		     => $this->input->post('brand_name'),
			'models_id'		     => $this->input->post('name'),
			'item'				 => $this->input->post('items'),
			'entry_date' 		 => $this->input->post('entry_date'),

		];

		$this->load->model('ItemsModel');
		$this->ItemsModel->insertItem($data);


		redirect(base_url('items'));
		
	}



	public function delete($id)
	{

		$this->load->model('ItemsModel');
		$this->ItemsModel->deleteItems($id);
		redirect(base_url('items'));
		
	}



}





?>

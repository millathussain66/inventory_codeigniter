<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ItemsController extends CI_Controller
{

	public function index()
	{
		$this->load->model('ItemsModel');
		$data['items'] = $this->ItemsModel->myJoinItems();

		$this->load->model('ItemsModel');
		$data['model_item'] = $this->ItemsModel->modelJoin();
	
		$this->load->view('include/header');

		$this->load->view('items',$data);

		$this->load->view('include/footer');

	}

	public function store()
	{


		$this->load->model('BrandModel');
		$data['model'] =  $this->BrandModel->getbrandName();
		
		$this->load->model('ModelMenu');
		$data['model_menu'] =  $this->ModelMenu->getmodelName();

		$data = [

			'models_id'		     => $this->input->post('name'),

			'brand_id'		     => $this->input->post('brand_name'),

			

			'item'				 => $this->input->post('item'),
			'entry_date' 		 => $this->input->post('entry_date'),

		];

		$this->load->model('ItemsModel');
		$this->ItemsModel->insertItems($data);
		redirect(base_url('items'));
	}





	// Delete Options
	public function delete($id)
	{


		$this->load->model('ItemsModel');
		$this->ItemsModel->deleteItems($id);
		redirect(base_url('items'));
		
	}




}





?>

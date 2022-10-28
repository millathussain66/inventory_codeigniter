<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BrandController extends CI_Controller
{

	public function index()
	{
		$this->load->model('BrandModel');

		$data['brand'] = $this->BrandModel->getBrand();


		$this->load->view('include/header');

		$this->load->view('brand', $data);

		$this->load->view('include/footer');
	}

	public function store()
	{


		$data = [

			'name' => $this->input->post('name'),
			'entry_date' => $this->input->post('entry_date'),
		];

		$this->load->model('BrandModel');

		$this->BrandModel->insertBrand($data);
		redirect(base_url('brand'));
	}

	public function edit($id)
	{
		$this->load->model('BrandModel');

    	$data['edit'] = $this->BrandModel->editBrand($id);


		$this->load->view('include/header');

		$this->load->view('edite', $data);

		$this->load->view('include/footer');
	}
}

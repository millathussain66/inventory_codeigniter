<?php 

defined('BASEPATH') or exit('No direct script access allowed');

	class ModelController extends CI_Controller
	{


		public function index()
		{
			$this->load->model('ModelMenu');
			$data['model'] = $this->ModelMenu->myJoin();
			$this->load->view('include/header');
		   $this->load->view('model',$data);
		   $this->load->view('include/footer');
		}


		public function select_brand($id){
			$data = $this->brand_name->select_brand($id);
			echo json_encode($data);
		}


		public function store()
		{

	

			$data = [
				'brand_name' 		 => $this->input->post('brand_name'),
				'name'				 => $this->input->post('name'),
				'entry_date' 		 => $this->input->post('entry_date'),
			];

				// print_r($data);	
			$this->load->model('ModelMenu');

			$this->ModelMenu->insertModels($data);

		

			redirect(base_url('model'));
		}

		public function edite($id)
		{

	


		$this->load->model('ModelMenu');

    	$data['edit'] = $this->ModelMenu->editModels($id);


		$this->load->view('include/header');

		$this->load->view('model_edt',$data);

		$this->load->view('include/footer');
			
		}











	}

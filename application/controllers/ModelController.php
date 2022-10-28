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
	}
?>

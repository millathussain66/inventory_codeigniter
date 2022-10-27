<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BrandController extends CI_Controller {

   public function index()
   {


		$this->load->model('BrandModel');

		$data['brand'] = $this->BrandModel->getBrand();


	   $this->load->view('include/header');

		$this->load->view('brand',$data);

	   $this->load->view('include/footer');

     }
	}

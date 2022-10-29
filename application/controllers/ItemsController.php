<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ItemsController extends CI_Controller
{

	public function index()
	{
		
		$this->load->view('include/header');

		$this->load->view('items');

		$this->load->view('include/footer');

		
	}



}





?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// inventory Project For Job 

$route['brand'] 			= 'BrandController/index';
$route['brand/add'] 		= 'BrandController/store';
$route['brand/edit/(:any)'] = 'BrandController/edit/$1';




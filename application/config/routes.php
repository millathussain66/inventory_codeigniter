<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// inventory Project For Job 

// brand all Routs 
$route['brand'] 				= 'BrandController/index';
$route['brand/add'] 			= 'BrandController/store';
$route['brand/edit/(:any)'] 	= 'BrandController/edit/$1';
$route['brand/update/(:any)']	= 'BrandController/update/$1';
$route['brand/delete/(:any)'] 	= 'BrandController/delete/$1';


// END brand all Routs 
$route['model'] 			    = 'ModelController/index';
$route['model/add'] 			= 'ModelController/store';
$route['model/edite/(:any)'] 			= 'ModelController/edite/$1';


// Model Routs Here ;


$route['items'] 				= 'ItemsController/index';







// END Model Routs Here ;







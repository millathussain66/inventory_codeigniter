<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




// Inventory Project's 


// brand all routs 
$route['brand'] 				= 'BrandController/index';
$route['brand/add'] 			= 'BrandController/store';
$route['brand/edit/(:any)'] 	= 'BrandController/edit/$1';
$route['brand/update/(:any)']	= 'BrandController/update/$1';
$route['brand/delete/(:any)'] 	= 'BrandController/delete/$1';

// model all routs
$route['model'] 			    = 'ModelController/index';
$route['model/add'] 			= 'ModelController/store';
$route['model/edite/(:any)'] 	= 'ModelController/edite/$1';
$route['model/update/(:any)']	= 'ModelController/update/$1';
$route['model/delete/(:any)']	= 'ModelController/delete/$1';

// model all routs
$route['items'] 				= 'ItemsController/index';
$route['items/add'] 			= 'ItemsController/store';
$route['items/edite/(:any)'] 	= 'ItemsController/edite/$1';
$route['items/update/(:any)']	= 'ItemsController/update/$1';
$route['items/delete/(:any)']	= 'ItemsController/delete/$1';



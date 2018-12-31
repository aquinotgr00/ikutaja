<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Ikutaja';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(:any)'] = 'Ikutaja/$1';
$route['(:any)'] = 'About/$1';
$route['(:any)'] = 'Informasi/$1';
$route['(:any)'] = 'Pages/$1';
$route['(:any)'] = 'Utama/$1';

/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8
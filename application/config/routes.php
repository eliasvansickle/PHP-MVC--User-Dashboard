<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['show_user/(:num)'] = '/users/show_user/$1';
$route['edit_user/(:num)'] = '/users/edit_user/$1';
$route['remove/(:num)'] = '/users/remove/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//end of routes.php
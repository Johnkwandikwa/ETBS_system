<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['schedule']='schedule/index';
$route['default_controller'] = 'pages/view';

$route['users/registration']='users/registration';
$route['(:any)']='pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

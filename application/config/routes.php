<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['kegiatan'] = 'kegiatan';
$route['struktur'] = 'struktur';


$route['register'] = 'signup/signuppage';
$route['prosesregister'] = 'signup/register';

$route['login'] = 'login';


/** AJAX  **/
$route['ajax/cekuser'] = 'ajax/cekusername';
$route['ajax/cekemail'] = 'ajax/cekemail';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['kegiatan'] = 'kegiatan';
$route['struktur'] = 'struktur';

/*Admin*/
$route['loginadmin'] = 'loginadmin';

$route['admin/home'] = 'home2';
$route['admin/kegiatan'] = 'kegiatan2';
$route['admin/struktur'] = 'struktur2';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

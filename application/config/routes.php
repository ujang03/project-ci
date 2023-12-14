<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//routing controller ADMIN
$route['admin'] = 'Admin/index';
$route['admin/user'] = 'AdminUser/index';
$route['admin/user/store'] = 'AdminUser/store';
$route['admin/barang'] = 'AdminBarang/index';
$route['admin/barang/store'] = 'AdminBarang/store';
$route['admin/jenisbarang'] = 'JenisBarang/index';
$route['admin/jenisbarang/store'] = 'JenisBarang/store';
$route['admin/checkpinjam'] = 'CheckPinjam/index';
$route['admin/checkpinjam/approve/(:num)'] = 'CheckPinjam/approve/$1';
$route['admin/checkpinjam/return/(:num)'] = 'CheckPinjam/return/$1';
$route['admin/checkpinjam/disapprove/(:num)'] = 'CheckPinjam/disapprove/$1';
$route['admin/checkpinjam/reject/(:num)'] = 'CheckPinjam/reject/$1';
$route['admin/checkpinjam/store'] = 'Checkpinjam/store';
$route['admin/report'] = 'Report/index';


//routing controller USER
$route['user'] = 'User/index';
$route['user/formpinjam'] = 'FormPinjam/index';
$route['user/formkembali'] = 'FormKembali/index';
$route['user/report'] = 'ReportPinjam/index';
$route['user/formpinjam/save'] = 'FormPinjam/store';
$route['user/formpinjam/print/(:num)'] = 'FormPinjam/print/$1';

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'backend/auth/index';
$route['admin/logout'] = 'backend/auth/logout';
$route['admin/login'] = 'backend/auth/login';
$route['admin/dashboard'] = 'backend/dashboard/index';
$route['admin/user'] = 'backend/administrator/index';
$route['admin/user/form/(:num)'] = 'backend/administrator/form/$1';
$route['admin/user/form/action/(:num)'] = 'backend/administrator/formAction/$1';
$route['admin/user/delete/(:num)'] = 'backend/administrator/delete/$1';
$route['admin/self/(:num)'] = 'backend/administrator/formSelf/$1';
$route['admin/self/action/(:num)'] = 'backend/administrator/formSelfAction/$1';
$route['admin/banner'] = 'backend/banner/index';
$route['admin/banner/form/(:num)'] = 'backend/banner/form/$1';
$route['admin/banner/form/action/(:num)'] = 'backend/banner/formAction/$1';
$route['admin/banner/delete/(:num)'] = 'backend/banner/delete/$1';
$route['admin/about/form/(:num)'] = 'backend/about/form/$1';
$route['admin/about/form/action/(:num)'] = 'backend/about/formAction/$1';
$route['admin/product'] = 'backend/product/index';
$route['admin/product/form/(:num)'] = 'backend/product/form/$1';
$route['admin/product/form/action/(:num)'] = 'backend/product/formAction/$1';
$route['admin/product/delete/(:num)'] = 'backend/product/delete/$1';
$route['admin/service'] = 'backend/service/index';
$route['admin/service/form/(:num)'] = 'backend/service/form/$1';
$route['admin/service/form/action/(:num)'] = 'backend/service/formAction/$1';
$route['admin/service/delete/(:num)'] = 'backend/service/delete/$1';
$route['admin/testimonial'] = 'backend/testimonial/index';
$route['admin/testimonial/form/(:num)'] = 'backend/testimonial/form/$1';
$route['admin/testimonial/form/action/(:num)'] = 'backend/testimonial/formAction/$1';
$route['admin/testimonial/delete/(:num)'] = 'backend/testimonial/delete/$1';
$route['admin/information/form/(:num)'] = 'backend/information/form/$1';
$route['admin/information/form/action/(:num)'] = 'backend/information/formAction/$1';
$route['admin/gallery/image'] = 'backend/image/index';
$route['admin/gallery/image/form/(:num)'] = 'backend/image/form/$1';
$route['admin/gallery/image/form/action/(:num)'] = 'backend/image/formAction/$1';
$route['admin/gallery/image/delete/(:num)'] = 'backend/image/delete/$1';
$route['admin/gallery/video'] = 'backend/video/index';
$route['admin/gallery/video/form/(:num)'] = 'backend/video/form/$1';
$route['admin/gallery/video/form/action/(:num)'] = 'backend/video/formAction/$1';
$route['admin/gallery/video/delete/(:num)'] = 'backend/video/delete/$1';

$route['home'] = 'frontend/home/index';
$route['about'] = 'frontend/about/index';
$route['product'] = 'frontend/product/index';
$route['product/detail/(:num)/(:any)'] = 'frontend/product/detail/$1/$2';
$route['gallery'] = 'frontend/gallery/index';
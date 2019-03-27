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
$route['default_controller'] = 'home';
$route['admin'] = 'admin/login';
$route['pickup'] = 'pickup/login';
$route['office_work'] = 'office_work/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about-us'] = 'cms/index/about-us';
$route['why-us'] = 'cms/index/why-us';
$route['faq'] = 'cms/index/faq';
$route['career'] = 'form/index/career';
$route['terms-conditions'] = 'cms/index/terms-conditions';
$route['blogs/(:any)'] = 'blog_listing/blist/$1';
$route['blogs/(:any)/(:any)'] = 'blog_listing/blist/$1/$2';
$route['blog-details/(:any)'] = 'blog_listing/details/$1';
$route['thank-you'] = "cms/success";
$route['about_us'] = 'home/about_us';
$route['tours_transfers'] = 'home/tours';
$route['holiday'] = 'home/holiday';
$route['activities'] = 'home/holiday_activites';
$route['holiday/(:any)'] = 'home/holiday';
$route['holiday/cat/(:any)'] = 'home/holiday_cat';
$route['home'] = 'home';
$route['holiday/cat/(:any)/(:any)'] = 'home/holiday_cat';
$route['packages_details/(:any)'] = 'home/holiday_package';
$route['activity_details/(:any)'] = 'home/holiday_activity_package';
$route['groups_incentives'] = 'home/groups';
$route['deals'] = 'home/deals';
$route['contact_us'] = 'home/contact_us';

//$route['blogs/$1/$2'] = 'blog_listing/blist/0';

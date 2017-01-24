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

/* Employee Controller */
$route['employee']['POST'] = 'employee/add';
$route['employee/(:num)']['GET'] = 'employee/getById/$1';
$route['employee/fetch']['GET'] = 'employee/fetch';
$route['employee/update/(:num)']['PUT '] = 'employee/update';

/* Customer Controller */
$route['customer']['POST'] = 'customer/add';
$route['customer/(:num)']['GET'] = 'customer/getById/$1';
$route['customer/fetch']['GET'] = 'customer/fetch';
$route['customer/update/(:num)']['PUT '] = 'customer/update';

/* Branch Controller */
$route['branch']['POST'] = 'branch/add';
$route['branch/(:num)']['GET'] = 'branch/getById/$1';
$route['branch/fetch']['GET'] = 'branch/fetch';
$route['branch/update/(:num)']['PUT '] = 'branch/update';

/* Log Controller */
$route['log']['POST'] = 'log/add';
$route['log/(:num)']['GET'] = 'log/getById/$1';
$route['log/fetch']['GET'] = 'log/fetch';
$route['log/update/(:num)']['PUT '] = 'log/update';

/* Transaction Controller */
$route['transaction']['POST'] = 'transaction/add';
$route['transaction/(:num)']['GET'] = 'transaction/getById/$1';
$route['transaction/fetch']['GET'] = 'transaction/fetch';
$route['transaction/update/(:num)']['PUT '] = 'transaction/update';

/* View Controller */
$route['employee/signup'] = 'viewController/signup';
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "backend/admin/index";
$route['404_override'] = '';

$route['panel'] = "backend/admin/index";
$route['login'] = "backend/login/index";
$route['loginproc'] = "backend/login/process";
$route['logout'] = "backend/admin/logout";

$route['cmanagement'] = "backend/admin/manageClient";
$route['cmanagement/addnewclient'] = "backend/admin/manageClient";
$route['cmanagement/editclient'] = "backend/admin/manageClient";
$route['addclient'] = "backend/dbprocessing/addNewClient";
$route['delclient'] = "backend/dbprocessing/deleteClient";
$route['editclient'] = "backend/dbprocessing/editClient";

$route['cdmanagement'] = "backend/admin/manageClientData";
$route['cdmanagement/addnewheader'] = "backend/admin/manageClientData";
$route['cdmanagement/editheader'] = "backend/admin/manageClientData";
$route['addheader'] = "backend/dbprocessing/addNewHeader";
$route['delheader'] = "backend/dbprocessing/deleteHeader";
$route['editheader'] = "backend/dbprocessing/editHeader";

$route['amanagement'] = "backend/admin/manageAdmin";
$route['amanagement/addnewadmin'] = "backend/admin/manageAdmin";
$route['amanagement/editadmin'] = "backend/admin/manageAdmin";
$route['addadmin'] = "backend/dbprocessing/addNewAdmin";
$route['deladmin'] = "backend/dbprocessing/deleteAdmin";
$route['editadmin'] = "backend/dbprocessing/editAdmin";

$route['cpassword'] = "backend/admin/changePassword";
$route['changepass'] = "backend/dbprocessing/changePass";


/* End of file routes.php */
/* Location: ./application/config/routes.php */

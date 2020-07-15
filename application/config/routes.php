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
$route['default_controller'] = 'Login_ctrl';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['check_login']="login_ctrl/check_login";
$route['general']="Home/general";
$route['logout']="login_ctrl/logout";
$route['departments']="Home/departments";
$route['delete_dept']="Home/delete_dept";
$route['add_client']="Home/add_client";
$route['adduser']="Client_ctrl/adduser";
$route['client_signup']="client_ctrl/client_signup";
$route['signin']="client_ctrl/signin";
$route['client_login']="client_ctrl/client_login";
$route['cl_login']="client_ctrl/cl_login";
$route['client_dashboard']='Client_ctrl/client_dashboard';
$route['form']="Upload/form";
$route['client_logout']='login_ctrl/client_logout';
$route['client_logo']="upload_logo/form";
$route['fetch_logo']="upload_logo/fetch_logo";
$route['client_journey']="Home/client_journey";
$route['add_journey']="client_ctrl/add_journey";
$route['update_journey']="client_ctrl/update_journey";
$route['client_gallery']="gallery_ctrl/client_gallery";
$route['delete_pic']="gallery_ctrl/delete_pic";
$route['delete_event']="client_ctrl/delete_event";
$route['view_about'] = "client_ctrl/view_about";
$route['about_personal']="client_ctrl/about_personal";
$route['about_political']="client_ctrl/about_political";
$route['about_social']="client_ctrl/about_social";
$route['my_profile']="client_ctrl/my_profile";
$route['update_user']='client_ctrl/update_user';
$route['manage_users']="Home/manage_users";
$route['edit_user']="Home/edit_user";
$route['edit_update_user']="Home/edit_update_user";
$route['become_volunteer']="client_ctrl/become_volunteer";
$route['add_volunteer']="client_ctrl/add_volunteer";
$route['get_client_data']="API/get_client_data";
$route['add_volunteer_api']="API/add_volunteer";
$route['client_gallery_api']="API/client_gallery";



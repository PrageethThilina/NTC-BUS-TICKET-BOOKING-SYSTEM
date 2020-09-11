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

//passenger routes
$route['index']    = 'Welcome';
$route['Passenger/login']    = 'Passenger_Login/login';
$route['Passenger/register']    = 'Passenger_Login/register';
$route['Passenger/Dashboard']    = 'Passenger_Dashboard/dashboard';
$route['Passenger/current_bookings']    = 'Passenger_Dashboard/current_bookings';
$route['Passenger/find_buses']    = 'Passenger_Dashboard/find_buses';
$route['Passenger/mail_box']    = 'Passenger_Dashboard/passenger_mail_box';
$route['Passenger/online_pay']    = 'Passenger_Dashboard/passenger_online_pay';
$route['Passenger/previous_bookings']    = 'Passenger_Dashboard/passenger_previous_booking';
$route['Passenger/profile']    = 'Passenger_Dashboard/passenger_profile';
$route['Passenger/profile_settings']    = 'Passenger_Dashboard/passenger_profile_setting';
$route['Passenger/select_payment']    = 'Passenger_Dashboard/passenger_select_payment';
$route['Passenger/view_available_buses']    = 'Passenger_Dashboard/passenger_view_available_buses';
$route['Passenger/view_bus_seats']    = 'Passenger_Dashboard/passenger_view_bus_seats';
$route['Passenger/password_recovery']    = 'Passenger_Dashboard/passenger_password_recovery';















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
$route['Passenger/login']    = 'Passenger_Controllers/Passenger_Login/load_passenger_login_view';
$route['Passenger/logout']    = 'Passenger_Controllers/Passenger_Login/Logout';
$route['Passenger/register']    = 'Passenger_Controllers/Passenger_Login/load_passenger_register_view';
$route['Passenger/Dashboard']    = 'Passenger_Controllers/Passenger_Dashboard/load_passenger_dashboard_view';
$route['Passenger/current_bookings']    = 'Passenger_Controllers/Passenger_Dashboard/current_bookings';
$route['Passenger/find_buses']    = 'Passenger_Controllers/Passenger_Dashboard/find_buses';
$route['Passenger/mail_box']    = 'Passenger_Controllers/Passenger_Dashboard/passenger_mail_box';
$route['Passenger/online_pay']    = 'Passenger_Controllers/Passenger_Dashboard/passenger_online_pay';
$route['Passenger/previous_bookings']    = 'Passenger_Controllers/Passenger_Dashboard/passenger_previous_booking';
$route['Passenger/profile']    = 'Passenger_Controllers/Passenger_Dashboard/passenger_profile';
$route['Passenger/profile_settings']    = 'Passenger_Controllers/Passenger_Dashboard/passenger_profile_setting';
$route['Passenger/select_payment']    = 'Passenger_Controllers/Passenger_Dashboard/passenger_select_payment';
$route['Passenger/view_available_buses']    = 'Passenger_Controllers/Passenger_Dashboard/passenger_view_available_buses';
$route['Passenger/view_bus_seats']    = 'Passenger_Controllers/Passenger_Dashboard/passenger_view_bus_seats';
$route['Passenger/password_recovery']    = 'Passenger_Controllers/Passenger_Dashboard/passenger_password_recovery';


// //transporter routes 
// $route['transporter/dashboard']    = 'transporter_dashboard/dashboard/dashboard';






// //ntc routes
// $route['Serviceprovider/login']    = 'ntc_controllers/ntc_login/login';

// $route['Ntc/dashboard']    = 'ntc_controllers/ntc_dashboard/dashboard';

// $route['Ntc/profile']    = 'ntc_controllers/ntc_dashboard/profile';
// $route['Ntc/profile_setting']    = 'ntc_controllers/ntc_dashboard/profile_setting';
// $route['Ntc/password_recovery']    = 'ntc_controllers/ntc_dashboard/password_recovery';
// $route['Ntc/mailbox']    = 'ntc_controllers/ntc_dashboard/mailbox';

// $route['depotadmin_lookup']    = 'ntc_controllers/ntc_dashboard/depotadmin_lookup';
// $route['depotadmin_creation']    = 'ntc_controllers/ntc_dashboard/depotadmin_creation';
// $$route['transporter_lookup']    = 'ntc_controllers/ntc_dashboard/transporter_lookup';
// $route['transporter_creation']    = 'ntc_controllers/ntc_dashboard/transporter_creation';
// $route['driver_lookup']    = 'ntc_controllers/ntc_dashboard/driver_lookup';
// $route['driver_creation']    = 'ntc_controllers/ntc_dashboard/driver_creation';
// $route['passenger_lookup']    = 'ntc_controllers/ntc_dashboard/passenger_lookup';

// $route['route_lookup']    = 'ntc_controllers/ntc_dashboard/route_lookup';
// $route['route_creation']    = 'ntc_controllers/ntc_dashboard/route_creation';
// $route['rate_lookup']    = 'ntc_controllers/ntc_dashboard/rate_lookup';



// //depot routes

// //$route['Serviceprovider/login']    = 'depot_controllers/depot_login/login';

// $route['Depot/dashboard']    = 'depot_controllers/depot_dashboard/dashboard';

// $route['Depot/profile']    = 'depot_controllers/depot_dashboard/profile';
// $route['Depot/profile_setting']    = 'depot_controllers/depot_dashboard/profile_setting';
// $route['Depot/password_recovery']    = 'depot_controllers/depot_dashboard/password_recovery';
// $route['Depot/mailbox']    = 'depot_controllers/depot_dashboard/mailbox';

// $route['depotadmin_lookup']    = 'depot_controllers/depot_dashboard/depotadmin_lookup';
// $route['depotadmin_creation']    = 'depot_controllers/depot_dashboard/depotadmin_creation';
// $$route['transporter_lookup']    = 'depot_controllers/depot_dashboard/transporter_lookup';
// $route['transporter_creation']    = 'depot_controllers/depot_dashboard/transporter_creation';
// $route['driver_lookup']    = 'depot_controllers/depot_dashboard/driver_lookup';
// $route['driver_creation']    = 'depot_controllers/depot_dashboard/driver_creation';
// $route['passenger_lookup']    = 'depot_controllers/depot_dashboard/passenger_lookup';

// $route['route_lookup']    = 'depot_controllers/depot_dashboard/route_lookup';
// $route['route_creation']    = 'depot_controllers/depot_dashboard/route_creation';
// $route['rate_lookup']    = 'depot_controllers/depot_dashboard/rate_lookup';











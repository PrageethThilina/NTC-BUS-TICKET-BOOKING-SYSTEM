<!-- Depot Admin dashboard controller-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class depot_dashboard extends CI_Controller {

    public function dashboard()
	{
		$this->load->view('depot_views/depot_dashboard.php');
    }
    
    // Profile
    public function profile()
	{
		$this->load->view('depot_views/depot_profile.php');
    }
    public function profile_setting()
	{
		$this->load->view('depot_views/depot_profile_setting.php');
    }
    public function password_recovery()
	{
		$this->load->view('depot_views/depot_password_recovery.php');
    }
    public function mailbox()
	{
		$this->load->view('depot_views/depot_mailbox.php');
    }

    // Users
	// Transporters
	public function transporter_lookup()
	{
		$this->load->view('depot_views/transporter_lookup.php');
    }
    public function transporter_creation()
	{
		$this->load->view('depot_views/transporter_creation.php');
    }

	// Drivers
	public function driver_lookup()
	{
		$this->load->view('transporter_views/driver_lookup.php');
    }
    public function driver_creation()
	{
		$this->load->view('transporter_views/driver_creation.php');
    }

	// Passengers
	public function passenger_lookup()
	{
		$this->load->view('passenger_views/passenger_lookup.php');
    }
    public function depotadmin_creation()
	{
		$this->load->view('passenger_views/passenger_creation.php');
    }

    // Routes
	public function route_lookup()
	{
		$this->load->view('depot_views/route_lookup.php');
    }
    public function depotadmin_creation()
	{
		$this->load->view('depot_views/route_creation.php');
    }

    // Rates
	public function rate_lookup()
	{
		$this->load->view('depot_views/rate_lookup.php');
    }

}

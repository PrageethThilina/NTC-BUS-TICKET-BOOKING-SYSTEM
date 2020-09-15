<!-- NTC dashboard controller-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ntc_Dashboard extends CI_Controller {

    public function dashboard()
	{
		$this->load->view('ntc_views/ntc_dashboard.php');
    }
    
    // Profile
    public function profile()
	{
		$this->load->view('ntc_views/ntc_profile.php');
    }
    public function profile_setting()
	{
		$this->load->view('ntc_views/ntc_profile_setting.php');
    }
    public function password_recovery()
	{
		$this->load->view('ntc_views/ntc_password_recovery.php');
    }
    public function mailbox()
	{
		$this->load->view('ntc_views/ntc_mailbox.php');
    }

    // Users
	// Depot admin
	public function depotadmin_lookup()
	{
		$this->load->view('ntc_views/depotadmin_lookup.php');
    }
    public function depotadmin_creation()
	{
		$this->load->view('ntc_views/depotadmin_creation.php');
    }

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
    

    // Routes
	public function route_lookup()
	{
		$this->load->view('depot_views/route_lookup.php');
    }
    public function route_creation()
	{
		$this->load->view('depot_views/route_creation.php');
    }

    // Rates
	public function rate_lookup()
	{
		$this->load->view('depot_views/rate_lookup.php');
    }

}

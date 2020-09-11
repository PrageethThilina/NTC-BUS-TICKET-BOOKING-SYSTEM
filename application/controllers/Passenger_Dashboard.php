<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passenger_Dashboard extends CI_Controller {

    public function dashboard()
	{
		$this->load->view('passenger_views/passenger_dashboard.php');
    }
    public function current_bookings()
	{
		$this->load->view('passenger_views/passenger_current_booking.php');
    }
    public function find_buses()
	{
		$this->load->view('passenger_views/passenger_find_buses.php');
    }
    public function passenger_mail_box()
	{
		$this->load->view('passenger_views/passenger_mailbox.php');
    }
    public function passenger_online_pay()
	{
		$this->load->view('passenger_views/passenger_online_pay.php');
    }
    public function passenger_previous_booking()
	{
		$this->load->view('passenger_views/passenger_previous_booking.php');
    }
    public function passenger_profile()
	{
		$this->load->view('passenger_views/passenger_profile.php');
    }
    public function passenger_profile_setting()
	{
		$this->load->view('passenger_views/passenger_profile_setting.php');
    }
    public function passenger_select_payment()
	{
		$this->load->view('passenger_views/passenger_select_payment_option.php');
    }
    public function passenger_view_available_buses()
	{
		$this->load->view('passenger_views/passenger_view_available_buses.php');
    }
    public function passenger_view_bus_seats()
	{
		$this->load->view('passenger_views/passenger_view_bus_seats.php');
    }
    public function passenger_password_recovery()
	{
		$this->load->view('passenger_views/password_recovery.php');
    }

}

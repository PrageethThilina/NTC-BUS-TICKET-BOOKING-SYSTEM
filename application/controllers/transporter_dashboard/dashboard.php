<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		// $this->load->library('form_validation');
		// $this->load->library('session');
		// $this->load->library('Permission');

		// $this->load->model('Login_model');
  //       $this->load->model('Group_and_permission_model');

		// if ($this->Login_model->is_logged_in() == FALSE)
		// {
		// 	redirect('../Lockscreen');
		// }
	}
	

	public function dashboard()
	{
        $data[''] = '';

		$this->load->view('transporter_dashboard/dashboard', $data);
           
	}

	 public function access_denied()
    {
    	$this->load->view('access_denied');
    }

    public function bus()
    {
    	$this->load->view('transporter_dashboard/bus_master_lookup_view');
    }

    public function bus_view_create()
    {
    	$this->load->view('transporter_dashboard/bus_view_create');
    }

    public function driver()
    {
    	$this->load->view('transporter_dashboard/driver_master_lookup_view');
    }

    public function driver_view_create()
    {
    	$this->load->view('transporter_dashboard/driver_view_create');
    }

    public function booking()
    {
    	$this->load->view('transporter_dashboard/booking_master_lookup');
    }

    public function report()
    {
    	$this->load->view('transporter_dashboard/report_lookup');
    }

	
}

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

	
}

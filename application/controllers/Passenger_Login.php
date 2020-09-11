<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passenger_Login extends CI_Controller {

	public function login()
	{
		$this->load->view('passenger_login.php');
    }
    public function register()
	{
		$this->load->view('passenger_register.php');
    }

}

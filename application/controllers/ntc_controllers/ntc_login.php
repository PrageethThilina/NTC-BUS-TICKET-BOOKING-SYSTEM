<!-- NTC login controller-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ntc_login extends CI_Controller {

	public function login()
	{
		$this->load->view('login.php');
    }
    

}
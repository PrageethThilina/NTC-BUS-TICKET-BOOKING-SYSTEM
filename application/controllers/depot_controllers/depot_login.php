<!-- Depot Admin login controller-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class depot_login extends CI_Controller {

	public function login()
	{
		$this->load->view('login.php');
    }
    

}
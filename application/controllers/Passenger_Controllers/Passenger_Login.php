<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passenger_Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('passenger_models/passenger_login_model','Psg_log_Model');
		$this->load->library('form_validation');
		$this->load->library('mailjet');
	}

	public function load_passenger_login_view()
	{
		$this->load->view('passenger_login.php');
	}

	public function load_passenger_register_view()
	{
		$this->load->view('passenger_register.php');

	}

	public function lockscreen()
	{
		$this->load->view('passenger_lockscreen.php');
	}	
	
	public function login()
    {
		$this->form_validation->set_rules('ntc_psg_username', 'Username', 'required|min_length[5]|max_length[12]',
		array(
			'required'      => 'You have not provided username.',
		));
		$this->form_validation->set_rules('ntc_psg_password', 'Password', 'required|min_length[5]|max_length[15]');
		

        if($this->form_validation->run()){
            $ntc_psg_username = $this->input->post('ntc_psg_username');
			$ntc_psg_password = $this->input->post('ntc_psg_password');
			
			$result = $this->Psg_log_Model->can_login($ntc_psg_username,$ntc_psg_password);

            if($result)
            {
                if($result->ntc_psg_id == 0)
                {
                    $arr = array('status' => '0', 'error' => 'NTC System is temporarily unavailable due to maintenance');
                    echo json_encode($arr);
                    return false;
                }
                $SessionArray =  array(
					'ntc_psg_id' => $result->ntc_psg_id,
					'ntc_psg_username' => $result->ntc_psg_username,
					'ntc_psg_fname' => $result->ntc_psg_fname,
					'ntc_psg_lname' => $result->ntc_psg_lname,
					'ntc_psg_nic' => $result->ntc_psg_nic,
					'ntc_psg_avatar' => $result->ntc_psg_avatar,
					'ntc_psg_email' => $result->ntc_psg_email,
					'ntc_psg_phone' => $result->ntc_psg_phone,
					'ntc_psg_address' => $result->ntc_psg_address,
					'ntc_psg_registered_at' => $result->ntc_psg_registered_at,
					'logged_in' => TRUE,
                );

                $this->session->set_userdata($SessionArray);

                $arr = array('status' => '1', 'success' => 'Login Successfully');
                echo json_encode($arr);
                return true;
            }
            else
            {
                $arr = array('status' => '0', 'error' => 'Invalid Username and Password');
                echo json_encode($arr);
                return false;
            }
        }
        else
        {
            $arr = array('status' => '0', 'error' => 'Login failed');
            echo json_encode($arr);
            return false;
        }
    }
    public function register()
	{
		$this->form_validation->set_rules('ntc_psg_fname', 'First Name', 'required');
		$this->form_validation->set_rules('ntc_psg_lname', 'Last Name', 'required');
		$this->form_validation->set_rules('ntc_psg_username', 'Username', 'trim|required|is_unique[ntc_passengers.ntc_psg_username]|min_length[5]|max_length[12]',
		array(
			'required'      => 'You have not provided username.',
			'is_unique'     => 'This username already exists.'
		));
		$this->form_validation->set_rules('ntc_psg_email', 'Email', 'required|valid_email|is_unique[ntc_passengers.ntc_psg_email]',
		array(
			'required'      => 'You have not provided Email.',
			'is_unique'     => 'This Email already exists.'
		));
		$this->form_validation->set_rules('ntc_psg_password', 'Password', 'trim|required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('ntc_psg_cpassword', 'Confirm Password', 'trim|required|matches[ntc_psg_password]');		

		if ($this->form_validation->run() == FALSE)
        {
            echo json_encode(array("msg"=>validation_errors(),"status"=>3));
            die();
        }
        else
        {
			echo json_encode($this->Psg_log_Model->save_passenger());

		}

	}

	function fetch_passenger_details()
	{
		echo json_encode($this->Psg_log_Model->fetch_passenger_details());
	}

	public function Logout(){

		$this->load->library('session');
		$this->session->sess_destroy();	
		redirect(base_url().'Passenger/login');
	
	}

	public function update_passenger_details(){

		$this->form_validation->set_rules('ntc_psg_fname', 'First Name', 'required');
		$this->form_validation->set_rules('ntc_psg_lname', 'Last Name', 'required');
		$this->form_validation->set_rules('ntc_psg_username', 'Username', 'min_length[5]|max_length[12]',
		array(
			'required'      => 'You have not provided username.',
		));
		$this->form_validation->set_rules('ntc_psg_email', 'Email', 'valid_email');
		$this->form_validation->set_rules('ntc_psg_address', 'Address');
		$this->form_validation->set_rules("ntc_psg_phone", "Mobile Number", 'numeric|min_length[10]|max_length[10]');
		$this->form_validation->set_rules("ntc_psg_nic", "NIC", 'min_length[10]|max_length[11]');

		
        if ($this->form_validation->run() == FALSE)
        {
            echo json_encode(array("msg"=>validation_errors(),"status"=>3));
	        die();
        }
        else
        {
            echo json_encode($this->Psg_log_Model->update_passenger_profile());
		}
		

	}

}
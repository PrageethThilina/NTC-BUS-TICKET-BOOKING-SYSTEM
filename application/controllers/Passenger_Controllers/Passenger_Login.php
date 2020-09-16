<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passenger_Login extends CI_Controller {

	public function load_passenger_login_view()
	{
		$this->load->view('passenger_login.php');
	}
	public function load_passenger_register_view()
	{
		$this->load->view('passenger_register.php');
	}
	public function login()
	{
		$this->form_validation->set_rules('ntc_psg_username', 'Username', 'required|min_length[5]|max_length[12]',
		array(
			'required'      => 'You have not provided username.',
		));
		$this->form_validation->set_rules('ntc_psg_password', 'Password', 'required|min_length[5]|max_length[15]');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('passenger_login');
			//redirect(base_url().'Passenger/login');
		}
		else
		{
			$this->load->model('passenger_models/passenger_login_model','Psg_log_Model');
			$result = $this->Psg_log_Model->login_passenger();

			if ($result != false){
				$passenger_data = array(
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
						'logged_in' => TRUE
				);
				
				$this->session->set_userdata($passenger_data);
				$this->session->set_flashdata('login_success_msg', 'Login Successful....');
				//$this->load->view('passenger_views/passenger_dashboard');
				redirect(base_url().'Passenger/Dashboard');
			}
			else{
				$this->session->set_flashdata('login_errmsg', 'Wrong credentials');
				$this->load->view('passenger_login');
				//redirect(base_url().'Passenger/login');
			}
		}
    }
    public function register()
	{
		$this->form_validation->set_rules('ntc_psg_fname', 'First Name', 'required');
		$this->form_validation->set_rules('ntc_psg_lname', 'Last Name', 'required');
		$this->form_validation->set_rules('ntc_psg_username', 'Username', 'trim|required|min_length[5]|max_length[12]',
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
			//redirect(base_url().'Passenger/register');
			$this->load->view('passenger_register');
		}
		else
		{
				$this->load->model('passenger_models/passenger_login_model','Psg_reg_Model');
				$response = $this->Psg_reg_Model->save_passenger();

				if ($response){
					$this->session->set_flashdata('success_msg','Registration Successful.. Please Login');
					$this->load->view('passenger_login');
					//redirect(base_url().'Passenger/login');
				}
				else{
					$this->session->set_flashdata('error_msg','Something went Wrong..!!!');
					$this->load->view('passenger_register');
					//redirect(base_url().'Passenger/register');
				}
		}

	}
	public function Logout(){
		$this->session->unset_userdata('ntc_psg_id');
		$this->session->unset_userdata('ntc_psg_username');
		$this->session->unset_userdata('ntc_psg_fname');
		$this->session->unset_userdata('ntc_psg_lname');
		$this->session->unset_userdata('ntc_psg_nic');
		$this->session->unset_userdata('ntc_psg_avatar');
		$this->session->unset_userdata('ntc_psg_email');
		$this->session->unset_userdata('ntc_psg_phone');
		$this->session->unset_userdata('ntc_psg_address');
		$this->session->unset_userdata('ntc_psg_registered_at');
		$this->session->unset_userdata('logged_in');
		redirect(base_url().'Passenger/login');	
	}

}
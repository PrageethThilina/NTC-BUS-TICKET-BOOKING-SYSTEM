<!-- NTC login controller-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ntc_Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ntc_Login_Model');
      //  $this->load->library('Permission');
	}

	public function login()
	{
		$this->load->view('login.php');
    
    /*    public function home_page()
	{
		$this->load->view('home');
	}
	function logout(){			
			$this->load->library('session');
			$this->session->sess_destroy();
			redirect('../','refresh');

	}
    */
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run()){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('admin_model/Ntc_Login_model');

            $result = $this->Ntc_Login_model->can_login($username,$password);

            if($result)
            {
                if($result->ntc_usr_status == 0)
                {
                    $arr = array('status' => '0', 'error' => 'Temporarily unavailable due to maintenance');
                    echo json_encode($arr);
                    return false;
                }
                $SessionArray =  array(
                    'user_id'		=> $result->ssm_usr_id,
                    'package'  		=> $result->ntc_usr_package,
                    'user_name'    => $result->ntc_usr_user_name,
                    'password'        => $result->ntc_usr_password,
                    'status'        => $result->ntc_status,
                    'telephone'     => $result->ntc_usr_tel,
                    'email'         => $result->ntc_usr_email,                    
                    'from_date'     => $result->ntc_usr_created_at,
                    'to_date'   	=> $result->ntc_usr_created_by,
                    'user_id'       => $result->ntc_stf_user_id,
                    'is_ntc_admin'    	=> $result->ntc_usr_is_ntc_admin,
                    'is_super_admin'        => $result->ntc_usr_is_super_admin,
                    'user_avatar'        => $result->ntc_usr_user_avatar,                    
                    'is_loggedIn'   =>  true,
                );

                $this->session->set_userdata($SessionArray);

					// print_r($this->session->userdata());
					// die();
                $this->permission->create_access_file($result->ntc_ug_id,$result->ntc_ug_id,$result->ntc_usr_user_id,$result->ntc_usr_is_supper_admin);

                $arr = array('status' => '1', 'success' => 'Login Successfully');
                echo json_encode($arr);
                return true;
            }
            else
            {
//  				$this->form_validation->set_message('check_login', 'Invalid Username and Password');
                $arr = array('status' => '0', 'error' => 'Invalid User name and Password');
                echo json_encode($arr);
                return false;
            }
        }
        else
        {
//		    redirect(base_url() . 'Login');
            $arr = array('status' => '0', 'error' => 'Login failed');
            echo json_encode($arr);
            return false;
        }

    }

}












	
	
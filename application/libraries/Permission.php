<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission {

	var $CI;
	
	function __construct()
	{

        $this->CI =& get_instance();
	}

	// public function check_permission($page_type='')
	// {
	// 	$obj = new Permission_models;

	// 	$ed = $obj->check_permission($page_type);
	// 	if($ed->$page_type !=1){
	// 		return false;
	// 	}else{
	// 		return true;
	// 	}

	// }

	public function check_session()
    {
        if($this->CI->uri->rsegment(1) == $this->CI->config->item('ignore_session')){
            return true;
        }

        if(date('Y-m-d') > date('Y-m-d',strtotime($this->CI->config->item('end_date'))))
        {
            $arr = array('status' => '0', 'error' => 'System is currently on lock down. Please contact your administrator.');
            echo json_encode($arr);
            return false;
        }

        if($this->CI->session->userdata('is_loggedIn') == 1 ){
            return true;
        }else{
            return false;
        }
	}

	public function check_admin()
	{
		if ($this->CI->session->userdata('is_admin')==1){
		    return true;
        }
	}


	public function check_rights()
	{

		if(in_array($this->CI->uri->rsegment(1), $this->CI->config->item('ignore_access')))
			return true;
		else
		{
			$this->CI->load->driver('cache');
			$r = $this->CI->cache->file->get($this->CI->session->userdata('user_id'));
            if (empty($r))
            {
                $user_group_id      = $this->CI->session->userdata('user_group_id');
                $user_id            = $this->CI->session->userdata('staff_id');
                $user_name          = $this->CI->session->userdata('user_id');
                $ssm_u_admin_status = $this->CI->session->userdata('is_admin');

                $this->create_access_file($user_group_id,$user_group_id, $user_name, $ssm_u_admin_status);
            }

            $r = $this->CI->cache->file->get($this->CI->session->userdata('user_id'));

            // print_r($this->CI->uri->rsegment(1) . $this->CI->uri->rsegment(2));
            // die();

            if(isset($r[$this->CI->uri->rsegment(1) . $this->CI->uri->rsegment(2)])){
				return true;
            }
			else{
				return false;
			}
		}
	}

	public function create_access_file($group,$user,$username,$super_admin = 0)
	{
		if(!$super_admin)
		{
			$this->CI->db->select('ssm_uaf_identifier, ssm_uar_status');
			$this->CI->db->where('ssm_uaa_status',1);
			$this->CI->db->where('ssm_uar_type','G');
			$this->CI->db->where('ssm_uar_status',1);
			$this->CI->db->where('ssm_uar_reference',$group);
			$b = $this->CI->db->get('access_rights_view')->result_array();

			$g = array();
			foreach($b as $e)
				$g[] = $e['ssm_uaf_identifier'];

			// $this->CI->db->select('ssm_uaf_identifier, ssm_uar_status');
			// $this->CI->db->where('ssm_uar_type','U');
			// $this->CI->db->where('ssm_uaa_status',1);
			// $this->CI->db->where('ssm_uar_reference',$user);
			// $u = $this->CI->db->get('access_rights_view')->result_array();
		}
		else
		{
			$this->CI->db->select('ssm_uaf_identifier');
			$this->CI->db->join('ssm_user_access_functions','ssm_user_access_functions.ssm_uaa_id = ssm_user_access_actions.ssm_uaa_id');
			// $this->CI->db->where('FTS_UAA_BypassSuperAdmin',1);
			$t = $this->CI->db->get('ssm_user_access_actions')->result_array();
			
			$g = array();
			foreach($t as $e)
				$g[] = $e['ssm_uaf_identifier'];
		}

		// if(!empty($u))
		if(!empty($b))
		{
			$a = array();
			$r = array();
			// foreach($u as $e)
			foreach($b as $e)
			{
				if($e['ssm_uar_status'] == 1)
					$a[] = $e['ssm_uaf_identifier'];
				else
					$r[] = $e['ssm_uaf_identifier'];
			}

			$g = array_unique(array_merge($g,$a));
			if(!empty($r))
				$g = array_diff($g, $r);
		}
		$ar = array();
		foreach($g as $e)
			$ar[$e] = 1;

		$this->CI->load->driver('cache');
		$this->CI->cache->file->save($username,$ar,172800);
		return true;
	}

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class passenger_login_model extends CI_model {
    
    function save_passenger(){

        $psg_data = array(
            'ntc_psg_fname' => $this->input->post('ntc_psg_fname', TRUE),
            'ntc_psg_lname' => $this->input->post('ntc_psg_lname', TRUE),
            'ntc_psg_username' => $this->input->post('ntc_psg_username', TRUE),
            'ntc_psg_email' => $this->input->post('ntc_psg_email', TRUE),
            'ntc_psg_password' => sha1($this->input->post('ntc_psg_password', TRUE)),
            'ntc_psg_registered_at' => date('Y-m-d H:i:s',now())     
        );
         return $this->db->insert('ntc_passengers',$psg_data);
    }
    
    function login_passenger(){

        $ntc_psg_username = $this->input->post('ntc_psg_username');
        $ntc_psg_password = sha1($this->input->post('ntc_psg_password'));

        $this->db->where('ntc_psg_username',$ntc_psg_username);
        $this->db->where('ntc_psg_password',$ntc_psg_password);

        $respond = $this->db->get('ntc_passengers');

        if($respond->num_rows()==1){
            return $respond->row(0);
         }
         else{
             return false;
         }

    }

    function save_company_profile()
	{

		if($_POST['update_id'] == 'true')
		{
			$data =array();

			$data['ssm_com_name']      = $_POST['company_name_txt'];
			$data['ssm_com_address']   = $_POST['company_add_txt'];
			$data['ssm_com_tel1']      = $_POST['company_tel_1_txt'];
			$data['ssm_com_tel2']      = $_POST['company_tel_2_txt'];
			$data['ssm_com_email']     = $_POST['company_email_txt'];
			$data['ssm_com_web']       = $_POST['company_web_txt'];

			if(!empty($_FILES))
			{
				$_FILES["logo_pic"]["name"]     = $_FILES["logo_pic"]["name"];
				$_FILES["logo_pic"]["type"]     = $_FILES["logo_pic"]["type"];
				$_FILES["logo_pic"]["tmp_name"] = $_FILES["logo_pic"]["tmp_name"];
				$_FILES["logo_pic"]["error"]    = $_FILES["logo_pic"]["error"];
				$_FILES["logo_pic"]["size"]     = $_FILES["logo_pic"]["size"];

				$fileTmpLoc = $_FILES["logo_pic"]["tmp_name"];
				$targetPath = 'uploads/company_logo/';
				$fn         = 'logo_pic-' .sha1($_FILES['logo_pic']['name']).'.jpg';
				$targetFile = $targetPath. $fn;

				if(move_uploaded_file($fileTmpLoc, $targetFile))
				{
					$data['ssm_com_logo'] = $targetFile;
				}
				else
				{
					echo "move_uploaded_file function failed";
					return false;
				}

			}
			$this->db->where('ssm_com_id',$_POST['update_id']);
			$this->db->update('ssm_company',$data);

            // ENTRY DATA
            if(!empty($_POST['functions_entries']))
            {
                $this->db->where('ssm_company_account_details.ssm_com_id', $_POST['update_id']);
                $this->db->delete('ssm_company_account_details');

                $functions_entries = (array)json_decode($_POST['functions_entries'], true);
                $acc_data            = array();
                $acc_count           = 0;

                if(!empty($functions_entries))
                {                      
                        foreach ($functions_entries as $e)
                        {
                            $entry = (array)$e;

                            $acc_data[$acc_count]['ssm_com_id']                = $_POST['update_id'];                            
                            $acc_data[$acc_count]['ssm_com_acc_bank']          = $entry['bank_name'];
                            $acc_data[$acc_count]['ssm_com_acc_bank_branch']   = $entry['branch_name'];
                            $acc_data[$acc_count]['ssm_com_acc_name']          = $entry['acc_name'];
                            $acc_data[$acc_count]['ssm_com_acc_num']           = $entry['acc_no'];
                            // $acc_data[$acc_count]['ssm_com_acc_status']        = (array_key_exists('save_mode', $_POST) ? 1 : 0);
                            $acc_data[$acc_count]['ssm_com_acc_status']         = $entry['save_mode'];
                            $acc_count++;
                        }
                        
                        $this->db->insert_batch('ssm_company_account_details', $acc_data);
                }
            }			

			if($this->db->trans_status() === true)
			{
				$this->db->trans_commit();
				return array('msg' => 'Company Profile Update Successfully', 'status' =>'1' );
			}
			else
			{
				$this->db->trans_rollback();
				return array('msg'=> 'Company Profile Update Failed', 'status'=>'0');
			}			
		}
	}

}
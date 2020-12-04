<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class passenger_login_model extends CI_model {
    
    public function __construct()
	{
		parent::__construct();
    }
    
    function save_passenger(){

        $data=array();

            $data['ntc_psg_fname'] = $_POST['ntc_psg_fname'];
            $data['ntc_psg_lname'] = $_POST['ntc_psg_lname'];
            $data['ntc_psg_username'] = $_POST['ntc_psg_username'];
            $data['ntc_psg_email'] = $_POST['ntc_psg_email'];
            $data['ntc_psg_password'] = sha1($_POST['ntc_psg_password']);
            $data['ntc_psg_registered_at'] = date('Y-m-d H:i:s',now());  

        $this->db->insert('ntc_passengers',$data);

        if($this->db->trans_status() === TRUE)
        {
            $this->db->trans_commit();
            return array('msg' => 'Passenger Creation Saved Successfully', 'status' => '1');
        }
        else
        {
            $this->db->trans_rollback();

            return array('msg' => 'Passenger Creation Save Failed', 'status' => '0');
        }
        
    }
    
    function can_login($ntc_psg_username, $ntc_psg_password)
    {
        $this->db->select('*');
        $this->db->where('ntc_psg_username', $ntc_psg_username);
        $this->db->where('ntc_psg_password', sha1($ntc_psg_password));

        $query = $this->db->get('ntc_passengers');			

        if($query->num_rows() > 0)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }

    function fetch_passenger_details()
    {
                $this->db->select('
                    ntc_psg_id,  
                    ntc_psg_fname,
                    ntc_psg_lname,
                    ntc_psg_username,
                    ntc_psg_email,
                    ntc_psg_nic,
                    ntc_psg_phone,
                    ntc_psg_address,
                    ntc_psg_avatar,
                    ntc_psg_registered_at,
                ');

                $this->db->where('ntc_psg_id', $this->session->userdata('ntc_psg_id'));
                $data['profile_details'] = $this->db->get('ntc_passengers')->row_array();
                return $data;
    }    

    function update_passenger_profile()
    {
            $this->db->trans_strict(1);
            $this->db->trans_start();

            $data=array();

                $data['ntc_psg_fname'] = $_POST['ntc_psg_fname'];
                $data['ntc_psg_lname']  = $_POST['ntc_psg_lname'];
                $data['ntc_psg_username']    = $_POST['ntc_psg_username'];
                $data['ntc_psg_email']        = $_POST['ntc_psg_email'];
                $data['ntc_psg_nic']      = $_POST['ntc_psg_nic'];
                $data['ntc_psg_phone']      = $_POST['ntc_psg_phone'];
                $data['ntc_psg_address']      = $_POST['ntc_psg_address'];
                $data['ntc_psg_updated_at'] = date('Y-m-d H:i:s',now());

                $session = $this->session->userdata();
                $this->db->where('ntc_psg_id', $session['ntc_psg_id']);
                $this->db->update('ntc_passengers', $data); 

                if (!empty($_FILES)) 
                {
                    $_FILES["profile_pic"]["size"]     = $_FILES["profile_pic"]["size"];

                    $fileTmpLoc = $_FILES["profile_pic"]["tmp_name"];
                    $targetPath = 'uploads/psg_profile/';
                    $fn         = 'profile_pic-' .sha1($_FILES['profile_pic']['name']).'.jpg';
                    $targetFile = $targetPath. $fn;

                    if(move_uploaded_file($fileTmpLoc,$targetFile))
                    {    
                         $data['ntc_psg_avatar'] = $targetFile;
                    } 
                    else 
                    {
                        echo "move_uploaded_file function failed";
                        return false;
                    }                     
                } 

                $session = $this->session->userdata();
                $this->db->where('ntc_psg_id', $session['ntc_psg_id']);
                $this->db->update('ntc_passengers', $data);            
                if($this->db->trans_status() === TRUE)

                {
                    $this->db->trans_commit();
                    return array('msg' => 'Profile Updated Successfully', 'status' => '1');
                }
                                                                                                               
    }
}

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

    function update_passenger(){
        
    }
}

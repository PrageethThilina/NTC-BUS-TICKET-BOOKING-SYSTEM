<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class passenger_login_model extends CI_model {
    
    function save_passenger(){

        $psg_data = array(
            'ntc_psg_fname' => $this->input->post('ntc_psg_fname', TRUE),
            'ntc_psg_lname' => $this->input->post('ntc_psg_lname', TRUE),
            'ntc_psg_username' => $this->input->post('ntc_psg_username', TRUE),
            'ntc_psg_email' => $this->input->post('ntc_psg_email', TRUE),
            'ntc_psg_password' => password_hash($this->input->post('ntc_psg_password', TRUE),PASSWORD_DEFAULT),
            'ntc_psg_registered_at' => date('Y-m-d H:i:s',now())     
        );
         return $this->db->insert('ntc_passengers',$psg_data);
    }
    
    function login_passenger(){

        $ntc_psg_username = $this->input->post('ntc_psg_username');
        $ntc_psg_password = password_verify($this->input->post('ntc_psg_password'),PASSWORD_DEFAULT);

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
}
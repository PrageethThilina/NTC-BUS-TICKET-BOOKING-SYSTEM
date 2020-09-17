<!-- NTC login model-->
<?php 
   class Ntc_Login_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->database();

      } 


      function can_login($username, $password){
         $this->db->select('*');
         $this->db->where('ntc_usr_username', $username);
         $this->db->where('ntc_usr_password', sha1($password));

         $query = $this->db->get('ntc_users');       

         if($query->num_rows() > 0)
         {
            return $query->row();
         }
         else
         {
            return false;
         }
      } 
   
      
   
      
   } 
?> 



    





          
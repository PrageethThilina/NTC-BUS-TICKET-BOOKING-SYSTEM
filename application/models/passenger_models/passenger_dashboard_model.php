<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class passenger_dashboard_model extends CI_model {

    function __construct()
    {
      parent::__construct();
      $this->load->library('Pdf');

    }
    
    function get_locations(){

        $this->db->select('*');
        $this->db->order_by('ntc_location_name', 'asc');
        $data = $this->db->get('ntc_locations')->result_array();
        return $data; 
    
    }

    function fetch_available_buses($ntc_bus_start_location,$ntc_bus_end_location,$ntc_bus_type)
    {
        $this->db->select('
        ntc_bus_id,
        ntc_dpt_id,
        ntc_bus_type,
        ntc_bus_number,
        ntc_bus_brand,
        ntc_bus_seat_total,
        ntc_bus_start_location,
        ntc_bus_end_location,
        ntc_bus_start_time,
        ntc_bus_end_time,
        ');   
        $this->db->where('ntc_bus_start_location', $ntc_bus_start_location);
        $this->db->where('ntc_bus_end_location', $ntc_bus_end_location);
        $this->db->where('ntc_bus_type', $ntc_bus_type);
        $data['available_buses'] = $this->db->get('ntc_buses')->result_array();

        return $data;
 
    }

    function fetch_passenger_current_booking_details()
	{ 

            $psg_id = $_POST['ntc_psg_id'];
            $current_date_time = date('Y-m-d h:i:s', now());

            $this->db->select('
            ntc_psg_seat_booking_tbl.ntc_psg_id,
            ntc_psg_seat_booking_tbl.ntc_bus_id,
            ntc_psg_seat_booking_tbl.ntc_psg_name,
            ntc_psg_seat_booking_tbl.ntc_psg_phone,
            ntc_psg_seat_booking_tbl.ntc_psg_email,
            ntc_passengers.ntc_psg_address,
            ntc_psg_seat_booking_tbl.ntc_bus_seats,
            ntc_psg_seat_booking_tbl.ntc_bus_start_location,
            ntc_psg_seat_booking_tbl.ntc_bus_end_location,
            ntc_psg_seat_booking_tbl.ntc_bus_booking_date,
            ntc_buses.ntc_bus_start_time,
            ntc_buses.ntc_bus_end_time,
            CONCAT(ntc_psg_seat_booking_tbl.ntc_bus_booking_date, " " , ntc_buses.ntc_bus_start_time) AS "booking_date_time",
            ntc_psg_seat_booking_tbl.ntc_bus_booking_status,
            ntc_psg_seat_booking_tbl.ntc_bus_booking_cost,
            ntc_buses.ntc_bus_type,
            ntc_buses.ntc_bus_number,
            ntc_bus_booking_id');

            $this->db->where('ntc_psg_seat_booking_tbl.ntc_psg_id', $psg_id);
            $this->db->order_by('ntc_psg_seat_booking_tbl.ntc_bus_booking_date', 'asc');
            $this->db->where('CONCAT(ntc_psg_seat_booking_tbl.ntc_bus_booking_date, " " , ntc_buses.ntc_bus_start_time) >', $current_date_time);
            $this->db->join('ntc_buses', 'ntc_buses.ntc_bus_id = ntc_psg_seat_booking_tbl.ntc_bus_id');
            $this->db->join('ntc_passengers', 'ntc_passengers.ntc_psg_id = ntc_psg_seat_booking_tbl.ntc_psg_id');
		    $data['booking_details'] = $this->db->get('ntc_psg_seat_booking_tbl')->result_array();

            return $data;
            
		
    }
    
    function fetch_passenger_previous_bookings()
    {

            $current_date_time = date('Y-m-d h:i:s', now());

			$psg_id = $_POST['ntc_psg_id'];

            $this->db->select('
            ntc_bus_booking_id,
            ntc_psg_seat_booking_tbl.ntc_psg_id,
            ntc_psg_seat_booking_tbl.ntc_bus_id,
            ntc_psg_seat_booking_tbl.ntc_psg_name,
            ntc_psg_seat_booking_tbl.ntc_psg_phone,
            ntc_psg_seat_booking_tbl.ntc_psg_email,
            ntc_passengers.ntc_psg_address,
            ntc_psg_seat_booking_tbl.ntc_bus_seats,
            ntc_psg_seat_booking_tbl.ntc_bus_start_location,
            ntc_psg_seat_booking_tbl.ntc_bus_end_location,
            ntc_psg_seat_booking_tbl.ntc_bus_booking_date,
            ntc_buses.ntc_bus_start_time,
            ntc_buses.ntc_bus_end_time,
            CONCAT(ntc_psg_seat_booking_tbl.ntc_bus_booking_date, " " , ntc_buses.ntc_bus_start_time) AS "booking_date_time",
            ntc_psg_seat_booking_tbl.ntc_bus_booking_status,
            ntc_psg_seat_booking_tbl.ntc_bus_booking_cost,
            ntc_buses.ntc_bus_type,
            ntc_buses.ntc_bus_number,
            ');

            $this->db->where('ntc_psg_seat_booking_tbl.ntc_psg_id', $psg_id);
            $this->db->order_by('ntc_psg_seat_booking_tbl.ntc_bus_booking_date', 'desc');
            $this->db->where('CONCAT(ntc_psg_seat_booking_tbl.ntc_bus_booking_date, " " , ntc_buses.ntc_bus_start_time) <', $current_date_time);
            $this->db->join('ntc_buses', 'ntc_buses.ntc_bus_id = ntc_psg_seat_booking_tbl.ntc_bus_id');
            $this->db->join('ntc_passengers', 'ntc_passengers.ntc_psg_id = ntc_psg_seat_booking_tbl.ntc_psg_id');
            $data['booking_details'] = $this->db->get('ntc_psg_seat_booking_tbl')->result_array();

            return $data;
        
    }

	function fetch_bus_details()
	{
        if($_POST['bus_details_id'] !== 'false')
        {
                $bus_details_id = $_POST['bus_details_id'];
    
                $this->db->select('
                ntc_bus_id,
                ntc_bus_start_location,
                ntc_bus_end_location,
                ntc_bus_seat_col_1,
                ntc_bus_seat_col_2,
                ntc_bus_seat_col_3,
                ntc_bus_seat_col_4,
                ntc_bus_seat_col_5,
                ntc_bus_seat_back,
                ntc_bus_seat_total,
                ');
                $this->db->where('ntc_bus_id', $bus_details_id);
                $data['bus_details'] = $this->db->get('ntc_buses')->row_array();
        }
        return $data;
        
    }

    function delete_passenger_current_booking()
	{
        if($_POST['update_id'] !== 'false')
        {
                $ntc_bus_booking_id = $_POST['update_id'];
                $this->db->where('ntc_bus_booking_id', $ntc_bus_booking_id);
                $this->db->delete('ntc_psg_seat_booking_tbl');
        }
        
    }

    function fetch_passenger_total_bookings()
	{ 

			$psg_id = $_POST['ntc_psg_id'];

            $this->db->where('ntc_psg_id', $psg_id);
            $this->db->from('ntc_psg_seat_booking_tbl');
		    $result = $this->db->count_all_results();

		    return $result;
		
    }

    function fetch_passenger_total_payments()
	{ 

			$psg_id = $_POST['ntc_psg_id'];
            $this->db->select_sum('ntc_bus_booking_cost');
            $this->db->where('ntc_psg_id', $psg_id);
            $this->db->from('ntc_psg_seat_booking_tbl');
            $query = $this->db->get();
            $data = $query->row()->ntc_bus_booking_cost;

		    return $data;
		
    }

    function fetch_passenger_bookings_permonth()
	{ 

            $psg_id = $_POST['ntc_psg_id'];
            
            $this->db->select('MONTH(ntc_bus_booking_date) AS MONTH, COUNT(*) AS COUNT');
            $this->db->where('ntc_psg_id', $psg_id);
            $this->db->where('YEAR(ntc_bus_booking_date) = YEAR(NOW())');
            $this->db->group_by('MONTH(ntc_bus_booking_date)');

            $data['passenger_bookings_per_month'] = $this->db->get('ntc_psg_seat_booking_tbl')->result_array();

		    return $data;
		
    }

    function fetch_passenger_recent_bookings()
	{ 

            $psg_id = $_POST['ntc_psg_id'];
            $current_date_time = date('Y-m-d h:i:s', now());
            
            $this->db->select('ntc_bus_booking_id,
            ntc_psg_seat_booking_tbl.ntc_bus_seats,
            ntc_psg_seat_booking_tbl.ntc_bus_start_location,
            ntc_psg_seat_booking_tbl.ntc_bus_end_location,
            ntc_psg_seat_booking_tbl.ntc_bus_booking_date,
            ntc_psg_seat_booking_tbl.ntc_bus_booking_cost,
            ntc_buses.ntc_bus_type,
            ntc_buses.ntc_bus_number,
            CONCAT(ntc_psg_seat_booking_tbl.ntc_bus_booking_date, " " , ntc_buses.ntc_bus_start_time) AS "booking_date_time",
            ');
            $this->db->order_by('ntc_bus_booking_id', 'desc');
            $this->db->limit('5');
            $this->db->where('ntc_psg_id', $psg_id);
            $this->db->where('CONCAT(ntc_psg_seat_booking_tbl.ntc_bus_booking_date, " " , ntc_buses.ntc_bus_start_time) <', $current_date_time);
            $this->db->join('ntc_buses', 'ntc_buses.ntc_bus_id = ntc_psg_seat_booking_tbl.ntc_bus_id');

            $data['passenger_recent_bookings'] = $this->db->get('ntc_psg_seat_booking_tbl')->result_array();

		    return $data;
		
    }

    function save_seat_booking(){
                               
        $data=array();

            $data['ntc_psg_id'] = $_POST['ntc_psg_id'];
            $data['ntc_bus_id'] = $_POST['ntc_current_bus_id'];
            $data['ntc_bus_seats'] = $_POST['ntc_bus_seats'];
            $data['ntc_bus_booking_cost'] = $_POST['ntc_bus_booking_cost'];
            $data['ntc_bus_start_location'] = $_POST['ntc_bus_start_location_id'];
            $data['ntc_bus_end_location'] = $_POST['ntc_bus_end_location_id'];
            $data['ntc_psg_name'] = $_POST['ntc_psg_name'];
            $data['ntc_psg_email'] = $_POST['ntc_psg_email'];
            $data['ntc_psg_phone'] = $_POST['ntc_psg_phone'];
            $data['ntc_bus_booking_date'] = $_POST['ntc_bus_booking_date']; 
            $data['ntc_bus_booking_status'] = 'Pending';
            
        $this->db->insert('ntc_psg_seat_booking_tbl', $data);

        $from_email = "prageeththilina7@gmail.com";
        $to_email = "prageeththilina7@gmail.com";
        $message = '
        <html>
        <head>
        <title>Thank you for Successfully Reserved a Seat</title>
        </head>
        <body>
        <table>
        <tr>
        <th >Date</th><td>'.$_POST['ntc_bus_booking_date'].'</td>
        </tr>
        <tr>
        <th style="text-align:left">Start Location</th><td>'.$_POST['ntc_bus_start_location_id'].'</td>
        </tr>
        <tr>
        <th style="text-align:left">Seat Number</th><td>'.$_POST['ntc_bus_seats'].'</td>
        </tr>
        <tr>
        <th style="text-align:left">Ticket Price</th><td>Rs.'.$_POST['ntc_bus_booking_cost'].'</td>
        </tr>
        </table><br><br>
        <h5 align="center">Have a Safe Journey...!!!</h5>
        </body>
        </html>';

        $this->email->from($from_email);
        $this->email->to($to_email);
        $this->email->subject('NTC SRI LANKA - Successfully Reserved The Seat');
        $this->email->set_mailtype('html');
        $this->email->message($message);
        $this->email->send();
      
        if($this->db->trans_status() === TRUE)
        {

            $this->db->trans_commit();
            return array('msg' => 'Seat Booking Successfully, Check your Email', 'status' => '1');

        }
        else
        {
            $this->db->trans_rollback();
            return array('msg' => 'Seat Booking Failed', 'status' => '0');
        }
        
    }

    function fetch_booked_seats()
    {

            $bus_id = $_POST['bus_id'];
            $booking_date = $_POST['booking_date'];

            $this->db->select('
            ntc_psg_seat_booking_tbl.ntc_bus_seats,
            ');

            $this->db->where('ntc_psg_seat_booking_tbl.ntc_bus_id', $bus_id);
            $this->db->where('ntc_psg_seat_booking_tbl.ntc_bus_booking_date', $booking_date);
            $this->db->join('ntc_buses', 'ntc_buses.ntc_bus_id = ntc_psg_seat_booking_tbl.ntc_bus_id');
            $data = $this->db->get('ntc_psg_seat_booking_tbl')->result_array();

            return $data;
        
    }

    function fetch_journey_cost()
    {
          
            $ntc_rts_from = $_POST['ntc_bus_start_location'];
            $ntc_rts_to = $_POST['ntc_bus_end_location'];

            $this->db->select('
            ntc_rts_amount,
            ');

            $this->db->where('ntc_rts_from', $ntc_rts_from);
            $this->db->where('ntc_rts_to', $ntc_rts_to);
            $data['journey_cost'] = $this->db->get('ntc_rates')->row_array();

            return $data;
        
    }

    function fetch_bus_feedbacks()
    {
          
            $ntc_bus_id = $_POST['ntc_bus_id'];

            $this->db->select('
            ntc_passengers.ntc_psg_fname,
            ntc_passengers.ntc_psg_lname,
            ntc_passengers.ntc_psg_avatar,
            ntc_bus_feedbacks.ntc_bus_fdb_subject,
            ntc_bus_feedbacks.ntc_bus_fdb_description,
            ntc_bus_feedbacks.ntc_bus_fdb_datentime,
            ');

            $this->db->where('ntc_bus_id', $ntc_bus_id);
            $this->db->join('ntc_passengers', 'ntc_passengers.ntc_psg_id = ntc_bus_feedbacks.ntc_psg_id');
            $data['bus_feedbacks'] = $this->db->get('ntc_bus_feedbacks')->result_array();

            return $data;
        
    }

    function save_bus_feedbacks(){
                               
        $data=array();
            $data['ntc_psg_id'] = $_POST['ntc_psg_id'];
            $data['ntc_bus_id'] = $_POST['ntc_current_bus_id'];
            $data['ntc_bus_fdb_subject'] = $_POST['ntc_bus_fdb_subject'];
            $data['ntc_bus_fdb_description'] = $_POST['ntc_bus_fdb_description'];
            $data['ntc_bus_fdb_datentime'] = date('Y-m-d', now());
            
        $this->db->insert('ntc_bus_feedbacks',$data);

        if($this->db->trans_status() === TRUE)
        {
            $this->db->trans_commit();
            return array('msg' => 'Feedback Saved Successfully', 'status' => '1');
        }
        else
        {
            $this->db->trans_rollback();

            return array('msg' => 'Feedback Saving Failed', 'status' => '0');
        }
        
    }

    function bus_ticket_print()
    {

        $booking_id  = $this->uri->segment(4);
        
        $this->db->select('
        ntc_bus_booking_id,
        ntc_psg_seat_booking_tbl.ntc_psg_id,
        ntc_psg_seat_booking_tbl.ntc_bus_id,
        ntc_psg_seat_booking_tbl.ntc_psg_name,
        ntc_psg_seat_booking_tbl.ntc_psg_phone,
        ntc_psg_seat_booking_tbl.ntc_psg_email,
        ntc_passengers.ntc_psg_address,
        ntc_psg_seat_booking_tbl.ntc_bus_seats,
        ntc_psg_seat_booking_tbl.ntc_bus_start_location,
        ntc_psg_seat_booking_tbl.ntc_bus_end_location,
        ntc_psg_seat_booking_tbl.ntc_bus_booking_date,
        ntc_buses.ntc_bus_start_time,
        ntc_buses.ntc_bus_end_time,
        CONCAT(ntc_psg_seat_booking_tbl.ntc_bus_booking_date, " " , ntc_buses.ntc_bus_start_time) AS "booking_date_time",
        ntc_psg_seat_booking_tbl.ntc_bus_booking_status,
        ntc_psg_seat_booking_tbl.ntc_bus_booking_cost,
        ntc_buses.ntc_bus_type,
        ntc_buses.ntc_bus_number,
        ');

        $this->db->where('ntc_psg_seat_booking_tbl.ntc_bus_booking_id', $booking_id);
        $this->db->join('ntc_buses', 'ntc_buses.ntc_bus_id = ntc_psg_seat_booking_tbl.ntc_bus_id');
        $this->db->join('ntc_passengers', 'ntc_passengers.ntc_psg_id = ntc_psg_seat_booking_tbl.ntc_psg_id');
        $data['ticket_data'] = $this->db->get('ntc_psg_seat_booking_tbl')->row_array();

        $this->load->view('passenger_views/print_ticket.php', $data); 


    }
    
}
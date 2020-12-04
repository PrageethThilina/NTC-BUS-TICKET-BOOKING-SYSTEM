<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passenger_Dashboard extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

        $this->load->model('passenger_models/passenger_dashboard_model','Psg_Dash_Model');   
        $this->load->library('form_validation');
        $this->load->library('Pdf');
	}

    public function load_passenger_dashboard_view()
	{
		  $this->load->view('passenger_views/passenger_dashboard.php');
    }
    public function current_bookings()
	{
		  $this->load->view('passenger_views/passenger_current_booking.php');
    }
    public function find_buses()
	{
		  $this->load->view('passenger_views/passenger_find_buses.php');
    }
    public function passenger_mail_box()
	{
		  $this->load->view('passenger_views/passenger_mailbox.php');
    }
    public function passenger_online_pay()
	{
		  $this->load->view('passenger_views/passenger_online_pay.php');
    }
    public function passenger_previous_booking()
	{
		  $this->load->view('passenger_views/passenger_previous_booking.php');
    }
    public function passenger_profile()
	{
		  $this->load->view('passenger_views/passenger_profile.php');
    }
    public function passenger_profile_setting()
	{
		  $this->load->view('passenger_views/passenger_profile_setting.php');
    }
    public function passenger_select_payment()
	  {
		  $this->load->view('passenger_views/passenger_select_payment_option.php');
    }
    public function passenger_view_available_buses()
	{
		  $this->load->view('passenger_views/passenger_view_available_buses.php');
    }
    public function passenger_view_bus_seats()
	{
      $this->load->model('passenger_models/passenger_dashboard_model','Psg_Dash_Model');        
      echo json_encode($this->Psg_Dash_Model->fetch_bus_details()); 
    }
    public function passenger_password_recovery()
	{
	  	$this->load->view('passenger_views/password_recovery.php');
    }
    public function fetch_locations()
	{
      $this->load->model('passenger_models/passenger_dashboard_model','Psg_Dash_Model');      
      echo json_encode($this->Psg_Dash_Model->get_locations());     
    }
    public function fetch_available_buses()
	{
      $ntc_bus_start_location = $this->input->post('ntc_bus_start_location');
      $ntc_bus_end_location = $this->input->post('ntc_bus_end_location');
      $ntc_bus_type = $this->input->post('ntc_bus_type');
      
      echo json_encode($this->Psg_Dash_Model->fetch_available_buses($ntc_bus_start_location,$ntc_bus_end_location,$ntc_bus_type));  

    }  

    function fetch_passenger_current_booking_details()
    {
        echo json_encode($this->Psg_Dash_Model->fetch_passenger_current_booking_details());   
    }

    function fetch_passenger_previous_bookings()
    {
        echo json_encode($this->Psg_Dash_Model->fetch_passenger_previous_bookings());   
    }

    function delete_passenger_current_booking()
    {
        echo json_encode($this->Psg_Dash_Model->delete_passenger_current_booking());   
    }

    function fetch_passenger_total_bookings()
    {
        echo json_encode($this->Psg_Dash_Model->fetch_passenger_total_bookings());   
    }

    function fetch_passenger_total_payments()
    {
        $this->load->model('passenger_models/passenger_dashboard_model','Psg_Dash_Model');   
        echo json_encode($this->Psg_Dash_Model->fetch_passenger_total_payments());   
    }

    function fetch_passenger_bookings_permonth()
    {
        echo json_encode($this->Psg_Dash_Model->fetch_passenger_bookings_permonth());   
    }

    function fetch_passenger_recent_bookings()
    {
        echo json_encode($this->Psg_Dash_Model->fetch_passenger_recent_bookings());   
    }

    function save_seat_booking()
    {

		$this->form_validation->set_rules('ntc_psg_email', 'Email is', 'required|valid_email',
		array(
			'required'      => 'You have not provided Email.',
		));
		$this->form_validation->set_rules("ntc_psg_phone", "Mobile Number is", 'numeric|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('ntc_bus_seats', 'Seat Selection', 'required');
        $this->form_validation->set_rules('ntc_psg_name', 'Name Should be', 'required');
        $this->form_validation->set_rules('ntc_bus_booking_date', 'Please Select journey Date when search buses', 'required');												

		if ($this->form_validation->run() == FALSE)
        {
            echo json_encode(array("msg"=>validation_errors(),"status"=>3));
            die();
        }
        else
        {
            echo json_encode($this->Psg_Dash_Model->save_seat_booking());  

		}
        
    }

    function fetch_booked_seats()
    {
        echo json_encode($this->Psg_Dash_Model->fetch_booked_seats());   
    }

    function fetch_journey_cost()
    {
        echo json_encode($this->Psg_Dash_Model->fetch_journey_cost());   
    }

    function fetch_bus_feedbacks()
    {
        echo json_encode($this->Psg_Dash_Model->fetch_bus_feedbacks());   
    }

    function save_bus_feedbacks()
    {
        $this->form_validation->set_rules('ntc_bus_fdb_subject', 'Should be', 'required');

		if ($this->form_validation->run() == FALSE)
        {
            echo json_encode(array("msg"=>validation_errors(),"status"=>3));
            die();
        }
        else
        {
            echo json_encode($this->Psg_Dash_Model->save_bus_feedbacks());  
        } 
    }

    function bus_ticket_print()
	{
		echo json_encode($this->Psg_Dash_Model->bus_ticket_print());
    }
    
    // function bus_ticket_print($id)
    // {
    //     $data = $this->Psg_Dash_Model->bus_ticket_print($id);
    //     $this->load->view('passenger_views/print_ticket.php', $data, true);

    //     // create new PDF document
    //     $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    //     // set document information
    //     $pdf->SetCreator(PDF_CREATOR);
    //     $pdf->SetAuthor('NTC SRI LANKA');
    //     $pdf->SetTitle('NTC BUS TICKET');
    //     $pdf->SetSubject('BUS TICKET');
    //     $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    //     //Disable footer
    //     $pdf->SetPrintFooter(false);

    //     // set default header data
    //     $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

    //     // set header and footer fonts
    //     $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    //     $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    //     // set default monospaced font
    //     $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    //     // set margins
    //     $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    //     $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    //     $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    //     // set auto page breaks
    //     $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    //     // set image scale factor
    //     $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    //     // set some language-dependent strings (optional)
    //     if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    //         require_once(dirname(__FILE__).'/lang/eng.php');
    //         $pdf->setLanguageArray($l);
    //     }

    //     // ---------------------------------------------------------

    //     // set font
    //     $pdf->SetFont('dejavusans', '', 10);

    //     // add a page
    //     $pdf->AddPage();

    //     // create some HTML content
    //     $html = '<table><thead><tr><td style="border: 1px solid #C0C0C0;" width="98%" align="center" colspan="8"><b> Item</b></td></tr><tr class="font-9"><td style="border: 1px solid #C0C0C0;" align="center" width="2%" ></td><td style="border: 1px solid #C0C0C0;" width="12%" align="center"><b> Name </b></td><td style="border: 1px solid #C0C0C0;" width="6%" align="center"><b> Code </b></td><td style="border: 1px solid #C0C0C0;" width="13%" align="center"><b> Category Name </b></td><td style="border: 1px solid #C0C0C0;" width="16%" align="center"><b> Sub Category Name </b></td><td style="border: 1px solid #C0C0C0;" width="8%" align="center"><b> Quantity </b></td><td style="border: 1px solid #C0C0C0;" width="11%" align="center"><b>  Unit Price </b></td><td style="border: 1px solid #C0C0C0;" width="14%" align="center"><b> Total Price </b></td><td style="border: 1px solid #C0C0C0;" width="16%" align="center"><b> Accepted Quantity </b></td></tr></thead>   </table>';

    //     // output the HTML content
    //     $pdf->writeHTML($html, true, false, true, false, '');

    //     // reset pointer to the last page
    //     $pdf->lastPage();

    //     // ------------------------------------------------------

    //     //Close and output PDF document
    //     ob_clean();
    //     $pdf->Output('BUS_TICKET.pdf', 'I');
    //     end_ob_clean();


    //     //============================================================+
    //     // END OF FILE
    //     //============================================================+
    // }

}
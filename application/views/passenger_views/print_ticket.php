<html>

<head>
    <style>
    </style>
</head>

<body>

    <?php

        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, array(100,100), true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('NTC SRI LANKA');
        $pdf->SetTitle('NTC BUS TICKET');
        $pdf->SetSubject('BUS TICKET');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        //Disable footer
        $pdf->SetPrintFooter(false);

        // set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
            require_once(dirname(__FILE__).'/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------

        // set font
        $pdf->SetFont('dejavusans', '', 10);

        // add a page
        $pdf->AddPage();

        // create some HTML content
        $html = '
        <table style="width: 600px;" cellpadding="0" cellspacing="0">
            <tr>
            <th colspan="2" style ="height:20px;text-align:right;width:250px"><h4>'. $ticket_data['ntc_bus_booking_date'].'</h4></th>
            </tr>
            <tr>
            <th colspan="2" style ="height:20px;text-align:right;width:250px"><h4>'. $ticket_data['ntc_bus_start_time'].'</h4></th>
            </tr>
            <tr>
            <td style ="text-align:left;width:120px;">Name</td>
            <td style ="text-align:left;">: '. $ticket_data['ntc_psg_name'].'</td>
            </tr>
            <tr>
            <td style ="text-align:left;width:120px;">From</td>
            <td style ="text-align:left;">: '. $ticket_data['ntc_bus_start_location'].'</td>
            </tr>
            <tr>
            <td style ="text-align:left;">To</td>
            <td style ="text-align:left;">: '. $ticket_data['ntc_bus_end_location'].'</td>
            </tr>
            <tr>
            <td style ="text-align:left;">Bus Type</td>
            <td style ="text-align:left;">: '. $ticket_data['ntc_bus_type'].'</td>
            </tr>
            <tr>
            <td style ="text-align:left;">Bus Number</td>
            <td style ="text-align:left;">: '. $ticket_data['ntc_bus_number'].'</td>
            </tr>
            <tr>
            <td style ="height:30px;text-align:left;">Seat Number</td>
            <td style ="text-align:left;">: '. $ticket_data['ntc_bus_seats'].'</td>
            </tr>
            <tr>
            <th colspan="2" style ="width:250px;height:20px;text-align:right;"><h3>Ticket Price   : Rs. '. $ticket_data['ntc_bus_booking_cost'].'</h3></th>
            </tr>
            <hr>
        </table>';

        // output the HTML content
        $pdf->writeHTML($html);

        // reset pointer to the last page
        $pdf->lastPage();

        // ------------------------------------------------------

        //Close and output PDF document
        ob_clean();
        $pdf->Output('BUS_TICKET.pdf', 'I');
        end_ob_clean();

        ?>
</body>

</html>
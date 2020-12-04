<link href="<?php echo asset_url();?>plugins/jquery-seat-chart/jquery.seat-charts.css" rel="stylesheet"
    type="text/css" />
<link href="<?php echo asset_url();?>assets/css/components/custom-carousel.css" rel="stylesheet" type="text/css" />

<style>
.layout-px-spacing {
    min-height: calc(100vh - 96px) !important;
}

.star-icon {
    font-size: 30px;
    color: rgb(173, 114, 3);
    margin-right: 10px;
    outline-color: 1px solid black;
}

.star-icon1 {
    font-size: 20px;
    color: rgb(173, 114, 3);
    margin-right: 5px;
    outline-color: 1px solid black;
}

.breadcrumb-item {
    background: rgb(175, 187, 187);
    font-size: 40px;
    color: black;
    width: 100%;
    margin-bottom: 30px;
}

.available_buses_div {
    margin-top: 30px;
    display: none;
    margin-bottom: 30px;
}

#select_bus_seats_div {
    display: none;
}

.booking-details h2 {
    font-size: 17px;
}

.booking-details h3 {
    font-size: 14px;
}

div.seatCharts-cell {
    color: #182C4E;
    height: 25px;
    width: 25px;
    line-height: 25px;

}

div.seatCharts-seat {
    color: #FFFFFF;
    cursor: pointer;
}

div.seatCharts-row {
    height: 35px;
}

div.seatCharts-seat.available {
    background-color: #B9DEA0;

}

div.seatCharts-seat.focused {
    background-color: rgb(226, 206, 31);
}

div.seatCharts-seat.selected {
    background-color: rgb(82, 247, 247);
}

div.seatCharts-seat.unavailable {
    background-color: red;
    cursor: not-allowed;
}

div.seatCharts-legend {
    padding-left: 0px;
}

ul.seatCharts-legendList {
    padding-left: 0px;
}

span.seatCharts-legendDescription {
    margin-left: 5px;
    line-height: 30px;
}

#selected-seats {
    max-height: 90px;
    overflow-y: scroll;
    overflow-x: none;
    width: 170px;
}
</style>
<div id="find_bus_div">
    <div class="col-md-12 col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="">FROM</label>
                        <select class="form-control selectpicker" data-live-search="true" data-size="10"
                            id="ntc_bus_start_location" name="ntc_bus_start_location" title="Choose Location.."
                            required>
                            <option selected data-hidden="true"></option>
                            <?php echo $start_locations['start_locations'] ?>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">TO</label>
                        <select class="form-control selectpicker" data-live-search="true" data-size="10"
                            id="ntc_bus_end_location" name="ntc_bus_end_location" required title="Choose Location..">
                            <option selected data-hidden="true"></option>
                            <option><?php echo $end_locations['end_locations'] ?></option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">BUS TYPE</label>
                        <select class="selectpicker form-control" name="ntc_bus_type" id="ntc_bus_type" required
                            title="Choose Bus Type..">
                            <option selected data-hidden="true"></option>
                            <option value="Normal">Normal</option>
                            <option value="Highway">Highway</option>
                            <option value="AC">AC</option>
                            <option value="Semi Luxury">Semi Luxury</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">JOURNEY DATE</label>
                        <input id="ntc_bus_booking_date_id" name="ntc_bus_booking_date_id" required
                            class="form-control flatpickr flatpickr-input active" type="text"
                            placeholder="Select Date..">
                    </div>
                    <div class="col-md-3 mx-auto" style="padding-top: 30px;margin-left:40px;">
                        <button onclick="fetchAvailableBusDetails()" class="btn btn-primary"
                            style="width: 100%;">Search</button>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mx-auto bus_img_div">
        <img src="<?php echo asset_url();?>assets/img/bus2.png" class="img img-fluid" width="400px" height="400px"
            alt="">
    </div>

    <!-- show available buses div -->
    <div class="available_buses_div">
        <h2 class="bg-warning text-dark" style="padding:8px"><span id="bus_start_location_breadcumb_id">Colombo</span> -
            <span id="bus_end_location_breadcumb_id">Thangalla</span> | <span id="bus_type_breadcumb_id">Highway</span>
            | <span id="ntc_bus_booking_date_breadcumb_id">2020-10-10</span>
        </h2>
        <div class="available_buses">

            <div class="available_buses_data">

            </div>

        </div>

        <!--view feedabck Modal -->
        <div class="modal fade" id="view_feedback_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="margin-right: 30px;">Bus Feedbacks
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="psg_bus_feedbacks_div">
                            <div class="row bus_feedbacks">

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                            Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- select bus seats div -->

<div id="select_bus_seats_div">
    <div class="row">
        <div id="flFormsGrid" class="col-lg-5 mx-auto layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <h3 class="text-center">Select Seat and Fill Form</h3>
                    <h6 class="front-indicator bg-success text-dark text-center">Front</h6>

                    <div id="seat-map" style="margin-left:20%"></div>

                </div>
            </div>
        </div>
        <div id="flFormsGrid" class="col-lg-5 mx-auto layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <form role="form" id="save_seat_booking"
                        action="<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/save_seat_booking'); ?>">
                        <div id="error">
                            <?php
                                if(!empty($this->session->flashdata('er')))
                                echo '<div class="alert animated fadeInDown alert-danger"><strong>Save Failed ! </strong><p>'. $this->session->flashdata('er') .'</p></div>';
                                if(!empty($this->session->flashdata('s')))
                                echo '<div class="alert animated fadeInDown alert-success"><strong>Seat Booked Successfully !</strong><p>'. $this->session->flashdata('s') .'</p></div>';
                            ?>
                        </div>
                        <input type="hidden" id="ntc_current_bus_id" name="ntc_current_bus_id" class="form-control"
                            required>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="">Seat Number</label>
                                <input type="text" id="ntc_bus_seats" name="ntc_bus_seats" class="form-control"
                                    placeholder="Seat Number" readonly required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Total (Rs.)</label>
                                <input type="text" class="form-control" id="ntc_bus_booking_cost"
                                    name="ntc_bus_booking_cost" placeholder="Rs. 0" readonly required>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="">Boarding Place</label>
                                <input type="text" class="form-control" id="ntc_bus_start_location_id"
                                    name="ntc_bus_start_location_id" readonly required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Destination Place</label>
                                <input type="text" class="form-control" id="ntc_bus_end_location_id"
                                    name="ntc_bus_end_location_id" readonly required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Journey Date</label>
                            <input id="ntc_bus_booking_date" name="ntc_bus_booking_date" class="form-control" readonly
                                required type="text">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Passenger name</label>
                            <input type="text" class="form-control" id="ntc_psg_name" name="ntc_psg_name"
                                value="<?php echo $this->session->userdata('ntc_psg_fname'). " " .  $this->session->userdata('ntc_psg_lname'); ?>"
                                readonly required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="ntc_psg_email" name="ntc_psg_email"
                                value="<?php echo $this->session->userdata('ntc_psg_email'); ?>" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Phone Number</label>
                            <input type="tel" class="form-control" id="ntc_psg_phone" name="ntc_psg_phone"
                                value="<?php echo $this->session->userdata('ntc_psg_phone'); ?>" required>
                        </div>
                        <button class="btn btn-success mt-3" type="submit">Confirm Booking and Continue to Pay</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mx-auto layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <div id="legend"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo asset_url(); ?>plugins/jquery-seat-chart/jquery.seat-charts.min.js"></script>

<script>
$(document).ready(function() {

    $('.selectpicker').selectpicker();
    $("#ntc_bus_booking_date_id").flatpickr({
        dateFormat: "Y-m-d",
        minDate: "today",
    });

    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Passenger/get-start-locations'); ?>',
        dataType: 'json',
        error: function() {
            alert('An Error Occurred. Please Try Again Later!')
        },
        success: function(data) {
            $('#ntc_bus_start_location').empty();
            $('#ntc_bus_start_location').selectpicker('val', data['data']);

            if (!$.isEmptyObject(data)) {
                $.each(data, function(i, o) {
                    $('#ntc_bus_start_location').append('<option>' + o[
                        'ntc_location_name'] + '</option>');
                });
            }

            $('#ntc_bus_start_location').selectpicker('refresh');
        }
    });

    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Passenger/get-start-locations'); ?>',
        dataType: 'json',
        error: function() {
            alert('An Error Occurred. Please Try Again Later!')
        },
        success: function(data) {
            $('#ntc_bus_end_location').empty();
            $('#ntc_bus_end_location').selectpicker('val', data['data']);


            if (!$.isEmptyObject(data)) {
                $.each(data, function(i, o) {
                    $('#ntc_bus_end_location').append('<option>' + o[
                        'ntc_location_name'] + '</option>');
                });
            }
            $('#ntc_bus_end_location').selectpicker('refresh');

        }
    });

    //save booking function
    $("form#save_seat_booking").submit(function(e) {

        var ntc_psg_id = <?php echo $this->session->userdata('ntc_psg_id'); ?>;
        var ntc_current_bus_id = $("#ntc_current_bus_id").val();
        var ntc_bus_seats = $("#ntc_bus_seats").val();
        var ntc_bus_booking_cost = $("#ntc_bus_booking_cost").val();
        var ntc_bus_start_location_id = $("#ntc_bus_start_location_id").val();
        var ntc_bus_end_location_id = $("#ntc_bus_end_location_id").val();
        var ntc_bus_booking_date = $("#ntc_bus_booking_date").val();
        var ntc_psg_name = $("#ntc_psg_name").val();
        var ntc_psg_email = $("#ntc_psg_email").val();
        var ntc_psg_phone = $("#ntc_psg_phone").val();

        $.ajax({
            type: "POST",
            url: $('form#save_seat_booking').attr('action'),
            data: {
                'ntc_psg_id': ntc_psg_id,
                'ntc_current_bus_id': ntc_current_bus_id,
                'ntc_bus_seats': ntc_bus_seats,
                'ntc_bus_booking_cost': ntc_bus_booking_cost,
                'ntc_bus_start_location_id': ntc_bus_start_location_id,
                'ntc_bus_end_location_id': ntc_bus_end_location_id,
                'ntc_bus_booking_date': ntc_bus_booking_date,
                'ntc_psg_name': ntc_psg_name,
                'ntc_psg_email': ntc_psg_email,
                'ntc_psg_phone': ntc_psg_phone,
            },
            dataType: 'json',
            error: function() {
                alert('An Error Occured. Please Try Again Later!')
            },
            success: function(data) {

                if (data['status'] == 3) {
                    $("#error").html(
                        '<div class="alert alert-danger animated fadeInDown"><strong> ' +
                        data[
                            'msg'] + '  </strong></div>');
                    $('input[name=ntc_bus_seats]').val(' ');
                    $('input[name=ntc_bus_booking_cost]').val(' ');

                } else if (data['status'] == 0) {
                    $("#error").html(
                        '<div class="alert alert-danger animated fadeInDown"><strong> Seat Booking failed! </strong></div>'
                    );

                    $('input[name=ntc_bus_seats]').val(' ');
                    $('input[name=ntc_bus_booking_cost]').val(' ');

                } else if (data['status'] == 1) {
                    $("#error").html(
                        '<div class="alert alert-success animated fadeInDown"><strong>Seat Booking Successful ! </strong></div>'
                    );
                    $('input[name=ntc_bus_seats]').val(' ');
                    $('input[name=ntc_bus_booking_cost]').val(' ');
                    swal({
                        timer: 2000,
                        padding: '2em',
                        onOpen: function() {
                            swal.showLoading()
                        }
                    }).then(function(result) {
                        if (result.dismiss === swal.DismissReason.timer) {
                            fetchPage('Passenger/current_bookings')
                        }
                    })

                }
            }
        });
        e.preventDefault();
    });
});

// display available buses
function fetchAvailableBusDetails() {

    $('.available_buses_data').hide();

    var ntc_bus_start_location = $("#ntc_bus_start_location").val();
    var ntc_bus_end_location = $("#ntc_bus_end_location").val();
    var ntc_bus_type = $("#ntc_bus_type").val();
    var ntc_bus_booking_date_id = $("#ntc_bus_booking_date_id").val();

    $("#bus_start_location_breadcumb_id").html(ntc_bus_start_location);
    $("#bus_end_location_breadcumb_id").html(ntc_bus_end_location);
    $("#bus_type_breadcumb_id").html(ntc_bus_type);
    $("#ntc_bus_booking_date_breadcumb_id").html(ntc_bus_booking_date_id);

    var ntc_bus_booking_date_save_id = $("#ntc_bus_booking_date_id").val();
    $("#ntc_bus_booking_date").val(ntc_bus_booking_date_save_id);

    if (ntc_bus_start_location == '') {
        swal({
            title: 'ERROR !',
            text: 'Please Select the Journey Start Location...',
            timer: 2000,
            padding: '2em',
            onOpen: function() {
                swal.showLoading()
            }
        })
    } else if (ntc_bus_end_location == '') {
        swal({
            title: 'ERROR !',
            text: 'Please Select the Journey Destination Location...',
            timer: 2000,
            padding: '2em',
            onOpen: function() {
                swal.showLoading()
            }
        })
    } else if (ntc_bus_type == '') {
        swal({
            title: 'ERROR !',
            text: 'Please Select the Journey Type.',
            timer: 2000,
            padding: '2em',
            onOpen: function() {
                swal.showLoading()
            }
        })
    } else if (ntc_bus_booking_date_id == '') {
        swal({
            title: 'ERROR !',
            text: 'Please Select the Journey Date.',
            timer: 2000,
            padding: '2em',
            onOpen: function() {
                swal.showLoading()
            }
        })
    } else {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/fetch_available_buses');?>',
            data: {
                'ntc_bus_start_location': ntc_bus_start_location,
                'ntc_bus_end_location': ntc_bus_end_location,
                'ntc_bus_type': ntc_bus_type,
            },
            dataType: 'json',
            error: function() {
                alert('An Error Occurred. Please Try Again Later!')
            },
            success: function(data) {

                var available_buses_data = data['available_buses'];

                if (!$.isEmptyObject(available_buses_data)) {

                    $('.available_buses_div').show();
                    $('.bus_img_div').hide();

                    $.each(available_buses_data, function() {

                        var html =
                            '<div class="available_buses_data statbox widget box box-shadow" style="margin-bottom:20px"><div class="card component-card_4" style="width: 100%;margin-bottom: 20px;"><div class="card-body"><div class="user-info"><div class="row"><div class="col-md-8"><table><tbody><tr><th style="font-weight:bold">Bus Type</th><td style="padding-left: 40px;">' +
                            this.ntc_bus_type +
                            '</td></tr><tr><th style="font-weight:bold">Bus Type</th><td style="padding-left: 40px;">' +
                            this.ntc_bus_number +
                            '</td></tr><tr><th style="font-weight:bold">Bus Start Location</th><td style="padding-left: 40px;">' +
                            this
                            .ntc_bus_start_location +
                            '</td></tr><tr><th style="font-weight:bold">Bus End Location</th><td style="padding-left: 40px;">' +
                            this
                            .ntc_bus_end_location +
                            '</td></tr><tr><th style="font-weight:bold">Bus Start Time</th><td style="padding-left: 40px;">' +
                            this
                            .ntc_bus_start_time +
                            '</td></tr><tr><th style="font-weight:bold">Bus End Time</th><td style="padding-left: 40px;">' +
                            this
                            .ntc_bus_end_time +
                            '</td></tr></tbody></table></div><div class="col-md-4"><h6 style="font-weight:bold">Total Seats :' +
                            ' ' + this.ntc_bus_seat_total +
                            '</h6><br><br><button class="btn btn-warning" onclick="fetchBusDetails(' +
                            this.ntc_bus_id +
                            ')">View Seats</button><a class="btn btn-success" onclick="fetch_bus_feedbacks(' +
                            this.ntc_bus_id +
                            ')">View Feedbacks</a></div></div></div></div></div></div>';

                        $('.available_buses').append(html);

                    })

                } else {
                    swal({
                        title: 'There are no buses available !',
                        text: 'Try Again Later.',
                        timer: 2000,
                        padding: '2em',
                        onOpen: function() {
                            swal.showLoading()
                        }
                    })
                }

            }

        });
    }

}

// get the selected bus details
function fetchBusDetails(id) {

    $('#find_bus_div').hide();
    $('#select_bus_seats_div').show();
    bus_details_id = id;
    var booking_date = $("#ntc_bus_booking_date_id").val();


    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/passenger_view_bus_seats'); ?>',
        data: {
            'bus_details_id': bus_details_id,
            'booking_date': booking_date
        },
        dataType: 'json',
        error: function() {
            alert('An Error Occurred. Please Try Again Later!')
        },
        success: function(data) {

            if (!$.isEmptyObject(data)) {
                $('#ntc_current_bus_id').val(data['bus_details']['ntc_bus_id']);
                $('#ntc_bus_start_location_id').val(data['bus_details']['ntc_bus_start_location']);
                $('#ntc_bus_end_location_id').val(data['bus_details']['ntc_bus_end_location']);

                // seat chart draw here
                var $cart = $('#ntc_bus_seats');
                var $counter = $('#counter');
                var $total = $('#ntc_bus_booking_cost');
                var total_seat_count = parseInt(data['bus_details']['ntc_bus_seat_total'])

                getBookedSeats(id, booking_date);

                function getSeatCharts() {

                    if (total_seat_count == 59) {
                        return [
                            "e[1,1]e[2,2]_e[3,3]e[4,4]e[5,5]",
                            "e[6,6]e[7,7]_e[8,8]e[9,9]e[10,10]",
                            "e[11,11]e[12,12]_e[13,13]e[14,14]e[15,15]",
                            "e[16,16]e[17,17]_e[18,18]e[19,19]e[20,20]",
                            "e[21,21]e[22,22]_e[23,23]e[24,24]e[25,25]",
                            "e[26,26]e[27,27]_e[28,28]e[29,29]e[30,30]",
                            "e[31,31]e[32,32]_e[33,33]e[34,34]e[35,35]",
                            "e[36,36]e[37,37]_e[38,38]e[39,39]e[40,40]",
                            "e[41,41]e[42,42]_e[43,43]e[44,44]e[45,45]",
                            "e[46,46]e[47,47]_e[48,48]e[49,49]e[50,50]",
                            "___e[51,51]e[52,52]e[53,53]",
                            "e[54,54]e[55,55]e[56,56]e[57,57]e[58,58]e[59,59]",
                        ]
                    } else if (total_seat_count == 52) {
                        return [
                            "e[1,1]e[2,2]_e[3,3]e[4,4]e[5,5]",
                            "e[6,6]e[7,7]_e[8,8]e[9,9]e[10,10]",
                            "e[11,11]e[12,12]_e[13,13]e[14,14]e[15,15]",
                            "e[16,16]e[17,17]_e[18,18]e[19,19]e[20,20]",
                            "e[21,21]e[22,22]_e[23,23]e[24,24]e[25,25]",
                            "e[26,26]e[27,27]_e[28,28]e[29,29]e[30,30]",
                            "e[31,31]e[32,32]_e[33,33]e[34,34]e[35,35]",
                            "e[36,36]e[37,37]_e[38,38]e[39,39]e[40,40]",
                            "___e[41,41]e[42,42]e[43,43]",
                            "___e[44,44]e[45,45]e[46,46]",
                            "e[47,47]e[48,48]e[49,49]e[50,50]e[51,51]e[52,52]",
                        ]
                    } else if (total_seat_count == 54) {
                        return [
                            "e[1,1]e[2,2]_e[3,3]e[4,4]e[5,5]",
                            "e[6,6]e[7,7]_e[8,8]e[9,9]e[10,10]",
                            "e[11,11]e[12,12]_e[13,13]e[14,14]e[15,15]",
                            "e[16,16]e[17,17]_e[18,18]e[19,19]e[20,20]",
                            "e[21,21]e[22,22]_e[23,23]e[24,24]e[25,25]",
                            "e[26,26]e[27,27]_e[28,28]e[29,29]e[30,30]",
                            "e[31,31]e[32,32]_e[33,33]e[34,34]e[35,35]",
                            "e[36,36]e[37,37]_e[38,38]e[39,39]e[40,40]",
                            "e[41,41]e[42,42]_e[43,43]e[44,44]e[45,45]",
                            "___e[46,46]e[47,47]e[48,48]",
                            "e[49,49]e[50,50]e[51,51]e[52,52]e[53,53]e[54,54]",
                        ]
                    } else if (total_seat_count == 41) {
                        return [
                            "e[1,1]____",
                            "e[2,2]e[3,3]__e[4,4]e[5,5]",
                            "e[6,6]e[7,7]__e[8,8]e[9,9]",
                            "e[10,10]e[11,11]__e[12,12]e[13,13]",
                            "e[14,14]e[15,15]__e[16,16]e[17,17]",
                            "e[18,18]e[19,19]__e[20,20]e[21,21]",
                            "e[22,22]e[23,23]__e[24,24]e[25,25]",
                            "e[26,26]e[27,27]__e[28,28]e[29,29]",
                            "e[30,30]e[31,31]__e[32,32]e[33,33]",
                            "____e[34,34]e[35,35]",
                            "e[36,36]e[37,37]e[38,38]e[39,39]e[40,40]e[41,41]",
                        ]
                    }

                }

                var ntc_bus_start_location = $("#ntc_bus_start_location").val();
                var ntc_bus_end_location = $("#ntc_bus_end_location").val();

                function getJourneyCost(callback) {

                    var amount = 0;

                    $.ajax({
                        type: 'POST',
                        async: false,
                        url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/fetch_journey_cost');?>',
                        data: {
                            'ntc_bus_start_location': ntc_bus_start_location,
                            'ntc_bus_end_location': ntc_bus_end_location,
                        },
                        dataType: 'json',
                        error: function() {
                            alert('An Error Occurred. Please Try Again Later!')
                        },
                        success: function(data) {

                            amount = data['journey_cost']['ntc_rts_amount']

                        }
                    })

                    return amount;

                }

                var seat_map_id = getSeatCharts();
                var journey_cost = getJourneyCost();

                var sc = $('#seat-map').seatCharts({

                    map: seat_map_id,
                    seats: {

                        e: {
                            price: journey_cost,
                        }

                    },
                    naming: {

                        top: false,
                        getId: function(character, row, column) {
                            return row + '_' + column;
                        },
                        getLabel: function(character, row, column) {
                            return column;
                        }

                    },
                    legend: {
                        node: $('#legend'),
                        items: [
                            ['e', 'available', 'Available'],
                            ['e', 'unavailable', 'Booked']
                        ]
                    },
                    click: function() {

                        if (this.status() == 'available') {
                            //let's create a new <li> which we'll add to the cart items
                            var maxSeats = 1;
                            var ms = sc.find('selected').length;
                            if (ms < maxSeats) {

                                $cart.val(this.settings.label);
                                $total.val(this.data().price);

                                return 'selected';
                            }

                            swal({
                                title: 'You can only select ' + maxSeats + ' ' +
                                    'seats at a time Click the seat to remove booking',
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Ok',
                                padding: '2em'
                            })

                            return 'available';


                        } else if (this.status() == 'selected') {

                            $('input[name=ntc_bus_seats]').val(' ');

                            $('input[name=ntc_bus_booking_cost]').val(' ');

                            //seat has been vacated
                            return 'available';
                        } else if (this.status() == 'unavailable') {
                            //seat has been already booked
                            return 'unavailable';
                        } else {
                            return this.style();
                        }
                    },
                    focus: function() {

                        if (this.status() == 'available') {
                            return 'focused';
                        } else {
                            return this.style();
                        }
                    },
                    blur: function() {
                        return this.status();
                    },

                });

                //this will handle "cancel" link clicks
                $('#selected-seats').on('click', '.cancel-cart-item', function() {
                    //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
                    sc.get($(this).parents('li:first').data('seatId')).click();
                });

                //let's pretend some seats have already been booked

                function getBookedSeats(bus_id, booking_date) {

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/fetch_booked_seats');?>',
                        data: {
                            'bus_id': bus_id,
                            'booking_date': booking_date,
                        },
                        dataType: 'json',
                        error: function() {
                            alert('An Error Occurred. Please Try Again Later!')
                        },
                        success: function(data) {

                            var total_booked_seat = data;

                            $.each(total_booked_seat, function() {

                                sc.get(this.ntc_bus_seats).status('unavailable');

                            });

                        }

                    });
                }
            }
        }
    });
}

function fetch_bus_feedbacks(ntc_bus_id) {


    var html = "";
    $('.bus_feedbacks').hide();

    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/fetch_bus_feedbacks');?>',
        data: {
            'ntc_bus_id': ntc_bus_id,
        },
        dataType: 'json',
        error: function() {
            alert('An Error Occurred. Please Try Again Later!')
        },
        success: function(data) {

            var bus_feedbacks = data['bus_feedbacks'];

            if (!$.isEmptyObject(bus_feedbacks)) {

                $('#view_feedback_modal').modal('show');

                $.each(bus_feedbacks, function() {

                    html +=
                        '<div class="row bus_feedbacks statbox widget box box-shadow" style="margin-bottom:10px;margin-left:10px;margin-right:10px;"><div class="col card" style="padding-top:10px"><div class="row"><div class="col" style="display: flex;"><img src="' +
                        '<?php echo base_url();?>' + this.ntc_psg_avatar +
                        '" style="width:50px;height:50px;border-radius:50%;" /><h6 class="" style="margin-right: 30px;"><span>' +
                        this.ntc_psg_fname + '</span><span>' + ' ' + this.ntc_psg_lname +
                        '</span><span style="margin-left:80px;">' + this.ntc_bus_fdb_datentime +
                        '</span></h6></div></div><br><div class="row"><div class="col"><p style="font-weight:bold;">' +
                        this
                        .ntc_bus_fdb_subject + '</p><p>' + this.ntc_bus_fdb_description +
                        '</p></div></div></div></div>';


                });

                $('.psg_bus_feedbacks_div').append(html);
                console.log(html);

            } else {

                swal({
                    title: 'There are no Feedbacks !',
                    text: 'Give us your feedbacks.',
                    timer: 2000,
                    padding: '2em',
                    onOpen: function() {
                        swal.showLoading()
                    }
                });
            }

        }

    });
}

function bus_ticket_print() {

    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/bus_ticket_print');?>',

    });
}
</script>
<style>
#current_time {
    font-weight: bold;
}

.form-control {
    height: 30px;
    width: 200px;
}
</style>

<div class="card component-card_4" style="margin-bottom:20px;padding:10px;">

    <h1 class="text-center" id="current_time"></h1>

</div>

<div class="current_bookings">

    <div class="current_booking_data">

    </div>

</div>

<script>
$(document).ready(function()

    {
        startTime();

        var ntc_psg_id = <?php echo $this->session->userdata('ntc_psg_id'); ?>;

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/fetch_passenger_current_booking_details');?>',
            data: {
                'ntc_psg_id': ntc_psg_id
            },
            dataType: 'json',
            error: function() {
                alert('An Error Occurred. Please Try Again Later!')
            },
            success: function(data) {

                var current_booking_data = data['booking_details'];

                if (!$.isEmptyObject(current_booking_data)) {

                    $.each(current_booking_data, function() {

                        var html =
                            '<div class="current_booking_data statbox widget box box-shadow" style="margin-bottom:20px"><div class="card component-card_4" style="width: 100%;"><div class="card-body"><div class="user-info"><h4 class="card-user_name" style="font-weight: bold;margin-bottom: 30px;"><span id="ntc_bus_start_location">' +
                            this.ntc_bus_start_location + ' ' +
                            '</span>-<span id="ntc_bus_end_location">' + ' ' + this
                            .ntc_bus_end_location +
                            '</span><span id="ntc_bus_booking_date" style="margin-left:20px;">' +
                            this.ntc_bus_booking_date +
                            '</span></h4><div class="row"><div class="col-md-7"><table><tbody><tr><th>Bus Type</th><td style="padding-left: 40px;" id="ntc_bus_type">' +
                            this.ntc_bus_type +
                            '</td></tr><tr><th>Bus Number</th><td style="padding-left: 40px;" id="ntc_bus_number">' +
                            this.ntc_bus_number +
                            '</td></tr><tr><th>Start Time</th><td style="padding-left: 40px;" id="ntc_bus_start_time">' +
                            this.ntc_bus_start_time +
                            '</td></tr><tr><th>End Time</th><td style="padding-left: 40px;" id="ntc_bus_end_time">' +
                            this.ntc_bus_end_time +
                            '</td></tr><tr><th>Seat Number</th><td style="padding-left: 40px;" id="ntc_bus_seats">' +
                            this.ntc_bus_seats +
                            '</td></tr></tbody></table></div><div class="col-md-5"><div class="wrapper"><h2 style="font-weight: bold;">Total :<span id="ntc_bus_booking_cost"style="font-weight: bold;font-size:30px;margin-left:20px;">' +
                            'Rs.' + ' ' +
                            this.ntc_bus_booking_cost +
                            '</span></h2></div><br><br><button class="btn btn-danger" onclick="psgcancelBooking(' +
                            this.ntc_bus_booking_id +
                            ')">Cancel Booking</button><button class="btn btn-warning" onclick="printTicket(' +
                            this.ntc_bus_booking_id +
                            ')">Print The Ticket</button></div></div><hr style="border: 1px solid black;"><h6 style="font-weight: bold;color: red;font-style: italic;">If you want to cancel the booking do it before 2 hours</h6></div></div></div></div>';

                        $('.current_bookings').append(html);

                    })

                } else {
                    swal({
                        title: 'You dont have any current bookings !',
                        text: 'Go to Bus Seat booking Page.',
                        timer: 2000,
                        padding: '2em',
                        onOpen: function() {
                            swal.showLoading()
                        }
                    }).then(function(result) {
                        if (result.dismiss === swal.DismissReason.timer) {
                            window.location.href = "Dashboard";
                        }
                    })
                }

            }

        });

    });

function startTime() {
    var today = new Date();
    var y = today.getFullYear();
    var mnth = today.getMonth() + 1;
    var d = today.getDate();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);

    var current_date_time = y + "-" + mnth + "-" + d + " " + h + ":" + m + ":" + s;
    document.getElementById('current_time').innerHTML = current_date_time;
    var t = setTimeout(startTime, 500);

    return current_date_time;
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    };

    return i;
}

function psgcancelBooking($update_id) {

    swal({
        title: 'Are you sure want cancel the Booking?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        padding: '2em'
    }).then(function(result) {
        if (result.value) {

            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/delete_passenger_current_booking'); ?>',
                data: {
                    'update_id': $update_id,
                },
                dataType: 'json',
                error: function() {
                    alert('An Error Occurred. Please Try Again Later!')
                },
                success: function(data) {
                    swal(
                        'Deleted!',
                        'Successfully cancel the booking !.',
                        'success'
                    )
                    window.location.href = "Dashboard";
                }
            });
        }
    })

}

function printTicket(booking_id) {

    window.open('<?php echo site_url("Passenger_Controllers/Passenger_Dashboard/bus_ticket_print/'+booking_id+'" )?>', '_blank');

}

</script>
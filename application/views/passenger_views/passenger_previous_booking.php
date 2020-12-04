<style>
.layout-px-spacing {
    min-height: calc(100vh - 96px) !important;
}

.star-icon {
    font-size: 30px;
    color: rgb(173, 114, 3);
    border: 1px solid black;
    margin-right: 10px;
    outline-color: 1px solid black;
}
</style>

<body>

    <div class="previous_bookings">

        <div class="previous_booking_data">

        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="bus_feedback_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="height: 400px;overflow-y: auto;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rate Bus Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form role="form" id="rate_bus_service_form"
                    action="<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/save_bus_feedbacks'); ?>">
                    <div class="modal-body">
                        <div id="error">
                            <?php
                                        if(!empty($this->session->flashdata('er')))
                                            echo '<div class="alert animated fadeInDown alert-danger"><strong>Save Failed ! </strong><p>'. $this->session->flashdata('er') .'</p></div>';
                                        if(!empty($this->session->flashdata('s')))
                                            echo '<div class="alert animated fadeInDown alert-success"><strong>Save Successful ! </strong><p>'. $this->session->flashdata('s') .'</p></div>';
                                    ?>
                        </div>
                        <div class="form-row form-group mb-4">
                            <label for="inputAddress">Select Your Rate Type</label>
                            <select id="bus_feedback_subject" class="form-control selectpicker">
                                <option selected="">Choose...</option>
                                <option>Highly Recommend</option>
                                <option>Recommend</option>
                                <option>Fair</option>
                                <option>Not Recommend</option>
                            </select>
                        </div>
                        <div class="form-row form-group mb-4">
                            <label for="inputAddress">Rate Description</label>
                            <textarea id="bus_feedback_description" class="form-control" row="4"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {

        $('.selectpicker').selectpicker();

        var ntc_psg_id = <?php echo $this->session->userdata('ntc_psg_id'); ?>;

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/fetch_passenger_previous_bookings');?>',
            data: {
                'ntc_psg_id': ntc_psg_id
            },
            dataType: 'json',
            error: function() {
                alert('An Error Occurred. Please Try Again Later!')
            },
            success: function(data) {

                var previous_booking_data = data['booking_details'];

                if (!$.isEmptyObject(previous_booking_data)) {

                    $.each(previous_booking_data, function() {

                        var html =
                            '<div class="previous_booking_data statbox widget box box-shadow" style="margin-bottom:20px"><div class="card component-card_4" style="width: 100%;"><div class="card-body"><div class="user-info"><h4 class="card-user_name" style="font-weight: bold;margin-bottom: 30px;">' +
                            this.ntc_bus_start_location + ' ' + '-' + ' ' + this
                            .ntc_bus_end_location +
                            ' ' + this.ntc_bus_booking_date +
                            '</h4><div class="row"><div class="col-md-8"><table><tbody><tr><th>Bus Type</th><td style="padding-left: 40px;">' +
                            this.ntc_bus_type +
                            '</td></tr><tr><th>Bus Number</th><td style="padding-left: 40px;">' +
                            this.ntc_bus_number +
                            '</td></tr><tr><th>Seat Number</th><td style="padding-left: 40px;">' +
                            this.ntc_bus_seats +
                            '</td></tr></tbody></table></div><div class="col-md-4"><h4 style="font-weight: bold;">Total Rs.' +
                            ' ' + this.ntc_bus_booking_cost +
                            '</h4><br><br><a class="btn btn-warning" id="rate_service_modal" onclick="rate_service_function(' +
                            this.ntc_bus_id +
                            ')">Rate Service</a></div></div></div></div></div></div>';

                        $('.previous_bookings').append(html);

                    })

                } else {
                    swal({
                        title: 'You dont have any Previous bookings !',
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

    function rate_service_function(id) {

        $('#bus_feedback_modal').modal('show');

        $("form#rate_bus_service_form").submit(function(e) {

            var ntc_psg_id = <?php echo $this->session->userdata('ntc_psg_id'); ?>;
            var bus_feedback_subject = $("#bus_feedback_subject").val();
            var bus_feedback_description = $("#bus_feedback_description").val();

            $.ajax({
                type: "POST",
                url: $('form#rate_bus_service_form').attr('action'),
                data: {
                    'ntc_bus_fdb_subject': bus_feedback_subject,
                    'ntc_bus_fdb_description': bus_feedback_description,
                    'ntc_current_bus_id': id,
                    'ntc_psg_id': ntc_psg_id,

                },
                dataType: 'json',
                error: function() {
                    alert('An Error Occured. Please Try Again Later!')
                },
                success: function(data) {

                    if (data['status'] == 3) {
                        $("#error").html(
                            '<div class="alert alert-danger animated fadeInDown"><strong> ' +
                            data['msg'] + '  </strong></div>');
                    } else if (data['status'] == 0) {
                        $("#error").html(
                            '<div class="alert alert-danger animated fadeInDown"><strong>Feedback Saving Failed! </strong></div>'
                        );
                    } else if (data['status'] == 1) {
                        $("#error").html(
                            '<div class="alert alert-success animated fadeInDown"><strong>Feedback Saved Successfully! </strong></div>'
                        );
                    }
                }
            });
            e.preventDefault();
        });

    }
    </script>

</body>
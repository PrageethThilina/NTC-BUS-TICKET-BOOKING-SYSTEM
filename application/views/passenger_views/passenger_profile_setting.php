<style>
input.hidden {
    position: absolute;
    left: -9999px;
}

#profile_img_btn {
    cursor: pointer;

    width: 100px;
    height: 100px;
    border: 2px solid #03b1ce;
}

.tital {
    font-size: 16px;
    font-weight: 500;
}

.bot-border {
    border-bottom: 1px #f8f8f8 solid;
    margin: 5px 0 5px 0
}

.help-inline{
    color: red;
}
</style>

<div class="account-settings-container layout-top-spacing">
    <form method="POST" class="form-horizontal" role="form" id="update_passenger_profile"
        name="update_passenger_profile">

        <div id="error">
            <?php
                    if(!empty($this->session->flashdata('er')))
                        echo '<div class="alert animated fadeInDown alert-danger"><strong>Update Failed ! </strong><p>'. $this->session->flashdata('er') .'</p></div>';
                    if(!empty($this->session->flashdata('s')))
                        echo '<div class="alert animated fadeInDown alert-success"><strong>Update Successful ! </strong><p>'. $this->session->flashdata('s') .'</p></div>';
                ?>
        </div>

        <div class="account-content">
            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">


                        <div class="info">
                            <h4 class="">Edit My Profile Details</h4>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-xl-2 col-lg-2 col-md-3">
                                    <div class="" id="profile_preview">
                                        <img alt="User Pic" width="100px" height="100px"
                                            src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg"
                                            class="img img-circle img-fluid" type="button" data-toggle="modal"
                                            id="profile_img_btn" data-target="#profile_upload_modal" >
                                        <?php $session = $this->session->userdata(); ?>
                                        <div class="row" id="profile_preview">
                                            <img src="<?php echo asset_url();?>assets/img/user1.png"
                                                class="img img-circle img-fluid" alt="profile" style="border-radious:50%">
                                        </div>
                                    </div>
                                    <p style="color:green;font-size:10px;margin-left:15px">change profile image</p>
                                </div>
                                <div class="col-lg-10 mx-auto ">
                                    <div class="row">
                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                            <div class="form card" style="padding: 20px;">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="ntc_psg_id">First Name</label>
                                                            <input type="text" class="form-control mb-4"
                                                                id="ntc_psg_fname" name="ntc_psg_fname">
                                                            <h6 class="form_validation_error text-center">
                                                                <?php echo form_error('ntc_psg_fname') ?></h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="lName">Last Name</label>
                                                            <input type="text" class="form-control mb-4"
                                                                id="ntc_psg_lname" name="ntc_psg_lname">
                                                            <h6 class="form_validation_error text-center">
                                                                <?php echo form_error('ntc_psg_lname') ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Username</label>
                                                            <input type="text" class="form-control mb-4"
                                                                id="ntc_psg_username" name="ntc_psg_username">
                                                            <h6 class="form_validation_error text-center">
                                                                <?php echo form_error('ntc_psg_username') ?></h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="nic">NIC</label>
                                                            <input type="text" class="form-control mb-4"
                                                                id="ntc_psg_nic" name="ntc_psg_nic">
                                                            <h6 class="form_validation_error text-center">
                                                                <?php echo form_error('ntc_psg_nic') ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="text" class="form-control mb-4"
                                                                id="ntc_psg_email" name="ntc_psg_email">
                                                            <h6 class="form_validation_error text-center">
                                                                <?php echo form_error('ntc_psg_email') ?></h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="phone">Phone Number</label>
                                                            <input type="text" class="form-control mb-4"
                                                                id="ntc_psg_phone" name="ntc_psg_phone">
                                                            <h6 class="form_validation_error text-center">
                                                                <?php echo form_error('ntc_psg_phone') ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control mb-4" id="ntc_psg_address"
                                                        name="ntc_psg_address">
                                                    <h6 class="form_validation_error text-center">
                                                        <?php echo form_error('ntc_psg_address') ?></h6>
                                                </div>
                                                <a id="save_btn" class="btn btn-success" style="width:50%" onclick="updatePassengerProfile();"><i class="fa fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- profile pic upload modal -->
<div class="modal inmodal fade" id="profile_upload_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Profile Photo</h4>
                <small>Drag and Drop your Image into the box</small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="/" class="dropzone dz-clickable" method="POST" enctype="multipart/form-data"
                        id="profile_logo_upload_form" style="width: 50%;">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- END MAIN CONTAINER -->

<script>
$(document).ready(function() {

    //fetch profile details
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Passenger_Controllers/Passenger_Login/fetch_passenger_details'); ?>',
        dataType: 'json',
        error: function() {
            alert('An Error Occurred. Please Try Again Later!')
        },
        success: function(data) {

            $('#ntc_psg_fname').val(data['profile_details']['ntc_psg_fname']);
            $('#ntc_psg_lname').val(data['profile_details']['ntc_psg_lname']);
            $('#ntc_psg_username').val(data['profile_details']['ntc_psg_username']);
            $('#ntc_psg_email').val(data['profile_details']['ntc_psg_email']);
            $('#ntc_psg_nic').val(data['profile_details']['ntc_psg_nic']);
            $('#ntc_psg_phone').val(data['profile_details']['ntc_psg_phone']);
            $('#ntc_psg_address').val(data['profile_details']['ntc_psg_address']);
            if (data['profile_details']['ntc_psg_avatar'] != '' && data['profile_details'][
                    'ntc_psg_avatar'
                ] != null) {
                $('#profile_img_btn').hide();
                var image_preview = '';

                image_preview = '<div class="col-sm-8 uploaded_images"><img src="' +
                    '<?php echo base_url();?>' + data[
                        'profile_details']['ntc_psg_avatar'] +
                    '" class="profile_logo_img" style="border-radious:50%" type="button" data-toggle="modal" id="profile_img_btn" data-target="#profile_upload_modal"></br></div>';
                $('#profile_preview').html(image_preview);
            } else {
                $('.uploaded_images').remove();
                $('#profile_img_btn').show();
            }

        }
    });

    //profile image click function
    $(function() {
        $('#profile-image1').on('click', function() {
            $('#profile-image-upload').click();
        });
    });

    //dropzone initialization
    Dropzone.autoDiscover = false;

    myDropzone_pic = new Dropzone("#profile_logo_upload_form", {
        url: '/file',
        acceptedFiles: "image/png,image/jpg,image/jpeg",
        autoProcessQueue: false,
        maxFilesize: 20, // MB
        addRemoveLinks: true,

        // The setting up of the dropzone
        accept: function(file, done) {
            done();
        },
        init: function() {
            myDropzone_pic = this;

            this.on("success", function(file, responseText) {
                console.log("Upload Complete");
            });

            this.on("thumbnail", function(file, dataUrl) {
                var file_name = file.name.replace(/\./g, 'QWERTY');
                file_name = file_name.replace(/\ /g, 'QWERTY');


                var profile_preview = '';
                profile_preview = '<img alt="image" id = "' + file_name +
                    '" class="profile_logo_img img img-fluid img-circle" src="<?php echo asset_url();?>assets/img/user1.jpg" height="auto" width="100%" style="border-radious:50%" data-toggle="modal" data-target="#profile_upload_modal"/>';
                console.log(profile_preview)

                $('#profile_preview').html(profile_preview);
                $('.profile_logo_img').attr('src', dataUrl);

            });
            this.on("removedfile", function(file, responseText) {
                var file_name = file.name.replace(/\./g, 'QWERTY');
                file_name = file_name.replace(/\ /g, 'QWERTY');
                $("#" + file_name).remove();
            });
        }
    });

    // User Details VALIDATIONS
    $('#update_passenger_profile').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        live: 'enabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            ntc_psg_fname: {
                validators: {
                    notEmpty: {
                        message: 'First Name is required.'
                    }
                }
            },
            ntc_psg_lname: {
                validators: {
                    notEmpty: {
                        message: 'Last Name is required.'
                    }
                }
            },
            ntc_psg_username: {
                validators: {
                    notEmpty: {
                        message: 'Username is required.'
                    }
                }
            },
            ntc_psg_address: {
                validators: {
                    notEmpty: {
                        message: 'Address is required.'
                    }
                }
            },
            ntc_psg_phone: {
                validators: {
                    stringLength: {
                        message: 'Telephone No should contain 10 values.',
                        max: 10,
                        min: 10
                    },
                    digits: {
                        message: 'Telephone No should contain only Numeric values.'
                    },
                    notEmpty: {
                        message: 'Telephone No is required.'
                    }
                }
            },
            ntc_psg_nic: {
                validators: {
                    stringLength: {
                        message: 'NIC should contain 10 or 11 values.',
                        max: 11,
                        min: 10
                    },
                    notEmpty: {
                        message: 'Telephone No is required.'
                    }
                }
            },
            ntc_psg_email: {
                validators: {
                    notEmpty: {
                        message: 'Email is required.'
                    },
                    emailAddress: {
                        message: 'Emaiil Address is not valid.'
                    }
                }
            },
        }
    }).on('success.form.fv', function(e) {
        e.preventDefault();

        myDropzone_pic.options.autoProcessQueue = true;

        var formData = new FormData($('#update_passenger_profile')[0]);

        if (myDropzone_pic.getQueuedFiles().length > 0) {
            myDropzone_pic.processQueue();

            var profile_pics = $('#profile_logo_upload_form').get(0).dropzone.getAcceptedFiles();

            if (!$.isEmptyObject(profile_pics)) {
                profile_logo_img = true;
            }

            formData.append('profile_pic', profile_pics[0]);
        }

        if ($('#update_passenger_profile').data('formValidation').isValid()) {

            $.ajax({
                type: "POST",
                url: '<?php echo base_url('Passenger_Controllers/Passenger_Login/update_passenger_details'); ?>',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                async: false,
                error: function() {
                    alert('An Error Occured. Please Try Again Later!')
                },
                success: function(data) {

                    if (data['status'] == 3) {
                        $("#error").html(
                            '<div class="alert alert-danger animated fadeInDown"><strong> ' +
                            data['msg'] + '  </strong></div>');
                    } else if (data['status'] == 1) {
                        $("#error").html(
                            '<div class="alert alert-success animated fadeInDown"><strong> Updated Successfully! </strong></div>'
                        );
                        window.location.href = "Dashboard";
                    }
                }
            });
        }

    });
});

function updatePassengerProfile() {
    $('#update_passenger_profile').data('formValidation').validate();
}
</script>
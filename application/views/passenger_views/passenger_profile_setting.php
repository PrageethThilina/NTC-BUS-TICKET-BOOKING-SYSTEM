<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>plugins/dropify/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>assets/css/users/account-setting.css"
        rel="stylesheet">

    <style>
    .success_flash_msg {
        width: 100%;
        background: green;
        color: white;
    }

    .err_flash_msg {
        width: 100%;
        background: red;
        color: white;
    }

    .validation_msg {
        color: red;
    }
    </style>
</head>

<body>
    <!-- check whether logged in -->
    <?php
    if (!($this->session->userdata('logged_in'))) {

        redirect(base_url() . 'Passenger/login');

    }
?>

    <div class="account-settings-container layout-top-spacing">

        <div class="account-content">
            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">

                    <?php echo form_open('Passenger_Controllers/Passenger_Login/update_passenger_details'); ?>                   

                            <div class="info">
                                <h6 class="">Profile Details</h6>
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-3">
                                        <div class="upload mt-3 pr-md-3">
                                            <input type="file" id="input-file-max-fs" name="ntc_psg_avatar" class="dropify"
                                                data-default-file="<?php echo asset_url(); ?>assets/img/user2.png"
                                                data-max-file-size="2M" />
                                        </div>
                                    </div>
                                    <div class="col-lg-10 mx-auto">
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                <div class="form">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="ntc_psg_id">First Name</label>
                                                                <input type="text" class="form-control mb-4"
                                                                    id="ntc_psg_id" name="ntc_psg_id"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_id'); ?>">
                                                                <input type="text" class="form-control mb-4"
                                                                    id="fullName" name="ntc_psg_fname"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_fname'); ?>">
                                                                    <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_fname') ?></h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="lName">Last Name</label>
                                                                <input type="text" class="form-control mb-4" id="lname" name="ntc_psg_lname"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_lname'); ?>">
                                                                    <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_lname') ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="fullName">Username</label>
                                                                <input type="text" class="form-control mb-4"
                                                                    id="username" name="ntc_psg_username"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_username'); ?>">
                                                                    <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_username') ?></h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="nic">NIC</label>
                                                                <input type="text" class="form-control mb-4" id="nic" name="ntc_psg_nic"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_nic'); ?>">
                                                                    <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_nic') ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="text" class="form-control mb-4" id="email" name="ntc_psg_email"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_email'); ?>">
                                                                    <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_email') ?></h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="phone">Phone Number</label>
                                                                <input type="text" class="form-control mb-4" id="phone" name="ntc_psg_phone"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_phone'); ?>">
                                                                    <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_phone') ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" class="form-control mb-4" id="address" name="ntc_psg_address"
                                                            value="<?php echo $this->session->userdata('ntc_psg_address'); ?>">
                                                            <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_address') ?></h6>
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
        </div>

  

                <!-- <button id="multiple-reset" class="btn btn-warning" onclick="clearformvalues()">Reset All</button> -->
                <!-- <div class="blockui-growl-message">
                    <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                </div> -->
                <button type="submit"  class="btn btn-primary">Save Changes</button>

        
        <?php echo form_close(); ?>

    </div>

    <!-- END MAIN CONTAINER -->
    <?php $this->load->view("common/footer");?>
    <script src="<?php echo asset_url(); ?>plugins/dropify/dropify.min.js"></script>
    <script src="<?php echo asset_url(); ?>plugins/blockui/jquery.blockUI.min.js"></script>
    <script src="<?php echo asset_url(); ?>assets/js/users/account-settings.js"></script>
</body>

</html>
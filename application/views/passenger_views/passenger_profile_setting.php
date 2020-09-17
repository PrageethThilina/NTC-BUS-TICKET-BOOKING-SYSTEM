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

        .validation_msg{
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

                        <?php echo "<h6 class='validation_msg'>" . validation_errors(). "</h6>" ?>
                        <?php echo form_open_multipart('Passenger_Controllers/Passenger_Login/edit_Passenger');?>
                        <?php if ($this->session->flashdata('success_msg'))
                            {
                                echo "<h4 class='text-center success_flash_msg'>".$this->session->flashdata('success_msg')."</h4>";
                            } 
                        ?>
                        <?php if ($this->session->flashdata('error_msg'))
                            {
                                echo "<h4 class='text-center err_flash_msg'>".$this->session->flashdata('error_msg')."</h4>";
                            } 
                        ?>

                        <form id="general-info" class="section general-info">

                            <div class="info">
                                <h6 class="">Profile Details</h6>
                                <div class="row">
                                    <div class="col-lg-11 mx-auto">
                                        <div class="row">
                                            <div class="col-xl-2 col-lg-12 col-md-4">
                                                <div class="upload mt-4 pr-md-4">
                                                    <input type="file" id="input-file-max-fs" class="dropify"
                                                        data-default-file="<?php echo asset_url(); ?>assets/img/user2.png"
                                                        data-max-file-size="2M" />
                                                </div>
                                            </div>
                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                <div class="form">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="fname">First Name</label>
                                                                <input type="text" class="form-control mb-4"
                                                                    id="fullName"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_fname'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="lName">Last Name</label>
                                                                <input type="text" class="form-control mb-4" id="lname"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_lname'); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="fullName">Username</label>
                                                                <input type="text" class="form-control mb-4"
                                                                    id="username"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_username'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="nic">NIC</label>
                                                                <input type="text" class="form-control mb-4" id="nic"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_nic'); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="text" class="form-control mb-4" id="email"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_email'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="phone">Phone Number</label>
                                                                <input type="text" class="form-control mb-4" id="phone"
                                                                    value="<?php echo $this->session->userdata('ntc_psg_phone'); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" class="form-control mb-4" id="address"
                                                            value="<?php echo $this->session->userdata('ntc_psg_address'); ?>">
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

        <div class="account-settings-footer">

            <div class="as-footer-container">

                <button id="multiple-reset" class="btn btn-warning" onclick="clearformvalues()">Reset All</button>
                <div class="blockui-growl-message">
                    <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                </div>
                <button type="submit" id="multiple-messages" class="btn btn-primary">Save Changes</button>

            </div>

        </div>
        </form>
    </div>

    <!-- END MAIN CONTAINER -->
    <?php $this->load->view("common/footer");?>
    <script src="<?php echo asset_url(); ?>plugins/dropify/dropify.min.js"></script>
    <script src="<?php echo asset_url(); ?>plugins/blockui/jquery.blockUI.min.js"></script>
    <script src="<?php echo asset_url(); ?>assets/js/users/account-settings.js"></script>
</body>

</html>
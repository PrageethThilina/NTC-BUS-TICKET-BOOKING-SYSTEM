<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Passenger Register</title>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link rel="icon" type="image/x-icon" href="<?php echo asset_url();?>assets/img/favicon.ico" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo asset_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--Begin fontawesome css-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <!-- End fontawesome css -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/authentication/form-2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/forms/switches.css">

</head>

<style>

</style>

<body class="form" action method="POST">

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <h1 class="">Register</h1>
                        <p class="signup-link register">Already have an account? <a
                                href="<?php echo base_url('Passenger/login') ?>">Log
                                in</a></p>

                        <?php if ($this->session->flashdata('success_msg'))
                            {
                                echo "<h6 class='alert alert-success text-center animated fadeInDown success_flash_msg'>".$this->session->flashdata('success_msg')."<a class='close' data-dismiss='alert' href='<?php echo base_url('Passenger/login') ?>'>"."</h6>";
                            } 
                        ?>
                        <?php if ($this->session->flashdata('error_msg'))
                            {
                                echo "<h6 class='alert alert-danger text-center animated fadeInDown err_flash_msg'>".$this->session->flashdata('error_msg')."</h6>";
                            } 
                        ?>

                        <?php echo form_open('Passenger/sign-up'); ?>

                        <form class="text-left">
                            <div class="form">

                                <div class="input-group">
                                    <div id="username-field" class="field-wrapper input"
                                        style="width: 47%;margin-right: 20px;">
                                        <label for="username" style="float:left;">FIRST NAME</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <input id="ntc_psg_fname" name="ntc_psg_fname" type="text" class="form-control"
                                            placeholder="First name">
                                            <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_fname') ?></h6>
                                    </div>
                                    <div id="username-field" class="field-wrapper input" style="width: 47%;">
                                        <label for="username" style="float:left;">LAST NAME</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <input id="ntc_psg_lname" name="ntc_psg_lname" type="text" class="form-control"
                                            placeholder="Last Name">
                                            <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_lname') ?></h6>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <div id="username-field" class="field-wrapper input"
                                        style="width: 47%;margin-right: 20px;">
                                        <label for="username" style="float:left;">USERNAME</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <input id="ntc_psg_username" name="ntc_psg_username" type="text"
                                            class="form-control" placeholder="Username">
                                            <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_username') ?></h6>
                                    </div>
                                    <div id="email-field" class="field-wrapper input" style="width: 47%;">
                                        <label for="email" style="float:left;">EMAIL</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-at-sign register">
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                        </svg>
                                        <input id="ntc_psg_email" name="ntc_psg_email" type="email" value=""
                                            class="form-control" placeholder="Email">
                                            <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_email') ?></h6>
                                    </div>
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">PASSWORD</label>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="ntc_psg_password" name="ntc_psg_password" type="password"
                                        class="form-control" placeholder="Password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_password') ?></h6>
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">CONFIRM PASSWORD</label>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="ntc_psg_cpassword" name="ntc_psg_cpassword" type="password"
                                        class="form-control" placeholder="Confirm Password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <h6 class="form_validation_error text-center"><?php echo form_error('ntc_psg_cpassword') ?></h6>
                                </div>

                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Sign
                                            Up</button>
                                    </div>
                                </div>

                            </div>
                        </form>

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <!-- Main js files -->
    <script src="<?php echo asset_url();?>assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo asset_url();?>bootstrap/js/popper.min.js"></script>
    <script src="<?php echo asset_url();?>bootstrap/js/bootstrap.js"></script>
    <!-- Main js files -->
    <script src="<?php echo asset_url();?>assets/js/authentication/form-2.js"></script>
    <script>

        setTimeout(function () { 
        $('.success_flash_msg').fadeOut('normal');

        }, 3000);

        setTimeout(function () {         
        $('.err_flash_msg').fadeOut('normal'); 
        
        }, 3000);

    </script>

</body>

</html>
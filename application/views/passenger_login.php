<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Passenger Login</title>
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
body {
    background-image: url("../../theme/assets/img/img3.2.jpg");
    background-size: cover;
    background-repeat: no-repeat;
}
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
</style>

<body class="form">

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content" style="height: 500px;">

                        <h1 class="">Sign In</h1>
                        <p class="">Log in to your account to continue.</p>

                        <?php if ($this->session->flashdata('login_success_msg'))
                            {
                                echo "<h4 class='text-center success_flash_msg'>".$this->session->flashdata('login_success_msg')."</h4>";
                            } 
                        ?>
                        <?php if ($this->session->flashdata('login_errmsg'))
                            {
                                echo "<h4 class='text-center err_flash_msg'>".$this->session->flashdata('login_errmsg')."</h4>";
                            } 
                        ?>

                        <?php echo validation_errors(); ?>
                        <?php echo form_open('Passenger_Controllers/Passenger_Login/login'); ?>

                        <form class="text-left">
                            <div class="form">

                                <div  class="field-wrapper input mb-2">
                                    <label style="float:left;">USERNAME</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="ntc_psg_username" name="ntc_psg_username" type="text" class="form-control"
                                        placeholder="Username">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">PASSWORD</label>
                                        <a href="<?php echo base_url('Passenger/password_recovery') ?>"
                                            class="forgot-pass-link">Forgot Password?</a>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="ntc_psg_password" name="ntc_psg_password" type="password" class="form-control"
                                        placeholder="Password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" style="width: 100%;">Sign In</button>
                                    </div>
                                </div>

                                <p class="signup-link">Not registered ? <a
                                        href="<?php echo base_url('Passenger/register') ?>">Create an account</a></p>
                            </div>
                        </form>

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


</body>

</html>
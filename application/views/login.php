<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Passenger Login</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <?php $this->load->view("common/header"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/authentication/form-2.css">

</head>
<style>
body {
    background-image: url("../../theme/assets/img/img3.2.jpg");
    background-size: cover;
    background-repeat: no-repeat;
}
</style>

<!-- Login for service providers-->

<body class="form">

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content" style="height: 420px;border-color:steelblue; border-width: 2px;">

                        <h1 class="" style="color: steelblue;"><strong>Sign In</strong></h1>

                        <form class="text-left" role="form" action="<?php echo base_url('#'); ?>" id="loginform">

                            <div id="error">
                                <?php
                            if(!empty($this->session->flashdata('er')))
                                echo '<div class="alert alert-danger"><strong>Login Failed ! </strong><p>'. $this->session->flashdata('er') .'</p></div>';
                            if(!empty($this->session->flashdata('s')))
                                echo '<div class="alert alert-success"><strong>Log Out Successful ! </strong><p>'. $this->session->flashdata('s') .'</p></div>';
                        ?>
                            </div>

                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username"></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="username" type="text" class="form-control"
                                        placeholder="Username">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password"></label>
                                        <a href="password_recovery.html" class="forgot-pass-link"><br></a>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" class="form-control"
                                        placeholder="Password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <br><br>
                                    <a href="password_recovery.html" class="forgot-pass-link">Forgot Password?</a>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" style="width: 100%;">Sign
                                            In</button>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <?php $this->load->view("common/footer"); ?>


</body>

</html>
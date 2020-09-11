<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>pay with card</title>

    <?php $this->load->view("passenger_views/passenger_header"); ?>        
    <?php $this->load->view("passenger_views/passenger_sidenav"); ?>  

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php $this->load->view("common/header"); ?>  

    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/plugins.css">
    <link href="<?php echo asset_url();?>plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>plugins/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>plugins/sweetalerts/promise-polyfill.js">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>plugins/sweetalerts/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>plugins/sweetalerts/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/components/custom-sweetalert.css">
    <style>

        .layout-px-spacing {
            min-height: calc(100vh - 96px) !important;
        }

    </style>


</head>

<body class="sidebar-noneoverflow">

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing" style="margin-top: 40px;">

                <div class="card component-card_4" style="width: 100%;">
                    <div class="card-body">
                        <div class="user-info">
                            <div class="row">
                                <div id="flFormsGrid" class="col-lg-8 mx-auto layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-content widget-content-area">
                                            <h4 class="card-user_name" style="font-weight: bold;margin-bottom: 30px;">
                                                Amount : Rs. 420</h4>
                                            <form>
                                                <div class="form-row mb-4">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Name On Card</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="prageeth thilina">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Card Number</label>
                                                        <input type="text" class="form-control" id="inputPassword4"
                                                            placeholder="eg: 12345678910">
                                                    </div>
                                                </div>
                                                <p style="margin-bottom: 20px">Card Expiry Date</p>
                                                <div class="form-row mb-4">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4">Year</label>
                                                        <select id="inputState" class="form-control selectpicker">
                                                            <option selected="">Choose...</option>
                                                            <option>2020</option>
                                                            <option>2021</option>
                                                            <option>2022</option>
                                                            <option>2023</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4">Month</label>
                                                        <select id="inputState" class="form-control selectpicker">
                                                            <option selected="">Choose...</option>
                                                            <option>January</option>
                                                            <option>February</option>
                                                            <option>March</option>
                                                            <option>April</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4">CVC</label>
                                                        <input type="text" class="form-control" placeholder="823">
                                                    </div>
                                                </div>
                                                <h5 style="margin-bottom: 20px">Enter your Email and Phone number to
                                                    Send your Invoice</h5>
                                                <div class="form-row mb-4">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Phone Number</label>
                                                        <input type="tel" class="form-control" placeholder="0716925322">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Email</label>
                                                        <input type="email" class="form-control" id="inputPassword4"
                                                            placeholder="user@gmail.com">
                                                    </div>
                                                </div>

                                                <div class="widget-content widget-content-area">
                                                    <button class="btn btn-success mt-3 " style="width: 50%;">Confirm
                                                        Pay</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="index.html">NTC Sri Lanka</a>, All rights
                        reserved.</p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <?php $this->load->view("common/footer"); ?>
    <script src="<?php echo asset_url();?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo asset_url();?>assets/js/app.js"></script>
    <script src="<?php echo asset_url();?>assets/js/custom.js"></script>
    <script src="<?php echo asset_url();?>plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="<?php echo asset_url();?>plugins/sweetalerts/custom-sweetalert.js"></script>
    <script src="<?php echo asset_url();?>plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>


</body>

</html>
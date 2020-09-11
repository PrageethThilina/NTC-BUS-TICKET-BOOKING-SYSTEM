<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>View Bus Seats</title>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <?php $this->load->view("passenger_views/passenger_header"); ?>        
    <?php $this->load->view("passenger_views/passenger_sidenav"); ?>  

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php $this->load->view("common/header"); ?>
    
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/elements/custom-pagination.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/elements/miscellaneous.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/elements/breadcrumb.css">

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>

        .layout-px-spacing {
            min-height: calc(100vh - 96px) !important;
        }

        th,
        td {
            font-size: 28px;
            text-align: center;
        }

        .td1 {
            color: rgb(255, 255, 255);
            background: rgb(4, 95, 19);
        }

        .td2 {
            color: rgb(255, 255, 255);
            background: rgb(228, 32, 32);
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="sidebar-noneoverflow">

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing" style="margin-top: 40px;">

                <div class="row">
                    <div id="flFormsGrid" class="col-lg-8 mx-auto layout-spacing">
                        <div class="card component-card_4" style="width: 100%;margin-bottom: 20px;">
                            <div class="card-body">
                                <h3 class="text-center">Select Seat and Fill Form</h3>
                                <div class="row">
                                    <div class="col mx-auto">
                                      <img src="assets/img/seat.PNG" class="img img-fluid" width="500px" height="400px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div id="flFormsGrid" class="col-lg-8 mx-auto layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <form>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Seats</label>
                                            <input type="text" class="form-control" placeholder="12" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Total</label>
                                            <input type="text" class="form-control" id="inputPassword4"
                                                placeholder="Rs. 480" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Boarding Place</label>
                                            <input type="text" class="form-control" placeholder="Colombo" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Destination Place</label>
                                            <input type="text" class="form-control" id="inputPassword4"
                                                placeholder="Thangalla" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="inputAddress">Passenger name</label>
                                        <input type="text" class="form-control" placeholder="Prageeth Thilina">
                                    </div>
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
                                    <a class="btn btn-success mt-3" href="<?php echo base_url('Passenger/select_payment') ?>">Continue to Pay</a>
                                </form>
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
    <script src="<?php echo asset_url();?>plugins/highlight/highlight.pack.js"></script>
    <script src="<?php echo asset_url();?>assets/js/scrollspyNav.js"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>

</body>

</html>
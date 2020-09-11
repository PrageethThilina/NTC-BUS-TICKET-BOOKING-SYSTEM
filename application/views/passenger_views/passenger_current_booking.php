<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Current Booking Details</title>


    <?php $this->load->view("passenger_views/passenger_header"); ?>        
    <?php $this->load->view("passenger_views/passenger_sidenav"); ?>  

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php $this->load->view("common/header"); ?>  
          
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/plugins.css">
    <link href="<?php echo asset_url();?>assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>custom-flatpickr.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->      

    <style>

        .layout-px-spacing {
            min-height: calc(100vh - 96px) !important;
        }

    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="sidebar-noneoverflow">

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing" style="margin-top: 40px;">

                <div class="card component-card_4" style="width: 100%;">
                    <div class="card-body">
                        <div class="user-info">
                            <h4 class="card-user_name" style="font-weight: bold;margin-bottom: 30px;">Colombo -
                                Thangalla 2020-09-02 ( Siriwardhana Super Line )</h4>
                            <div class="row">
                                <div class="col-md-8">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Bus Type</th>
                                                <td style="padding-left: 40px;">Semi Luxury</td>
                                            </tr>
                                            <tr>
                                                <th>Bus Number</th>
                                                <td style="padding-left: 40px;">N/A 8867</td>
                                            </tr>
                                            <tr>
                                                <th>Route Number</th>
                                                <td style="padding-left: 40px;">02</td>
                                            </tr>
                                            <tr>
                                                <th>Seat Number</th>
                                                <td style="padding-left: 40px;">12</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <h6>LKR 320.00</h6><br>
                                    <h4 style="font-weight: bold;">Total LKR 320.00</h4><br><br>
                                    <button class="btn btn-danger">Cancel Booking</button>
                                </div>
                            </div>
                            <hr style="border: 1px solid black;">
                            <h6 style="font-weight: bold;color: red;font-style: italic;">If you want to cancel the
                                booking do it before 2 hours</h6>
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
    <script src="<?php echo asset_url();?>plugins/flatpickr/flatpickr.js"></script>
    <script src="<?php echo asset_url();?>assets/js/dashboard/dash_1.js"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->

</body>

</html>
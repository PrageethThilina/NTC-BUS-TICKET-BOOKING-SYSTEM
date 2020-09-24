<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Select Payment Option</title>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/forms/theme-checkbox-radio.css">

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

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
                                                <th>Bording Place</th>
                                                <td style="padding-left: 40px;">Colombo</td>
                                            </tr>
                                            <tr>
                                                <th>Destination</th>
                                                <td style="padding-left: 40px;">Thangalla</td>
                                            </tr>
                                            <tr>
                                                <th>Seat Number</th>
                                                <td style="padding-left: 40px;">12</td>
                                            </tr>
                                            <tr>
                                                <th>Passenger Name</th>
                                                <td style="padding-left: 40px;">Prageeth Thilina</td>
                                            </tr>
                                            <tr>
                                                <th>Contact Number</th>
                                                <td style="padding-left: 40px;">0716926323</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td style="padding-left: 40px;">user@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                                <td style="padding-left: 40px;font-weight: bold;font-size: 25px;">Rs 420
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/img/bus.jpeg" width="300px" height="300px" class="img img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <h3 class="text-center" style="margin-top: 20px;margin-bottom: 20px;">Select Payment Method</h3>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td style="width: 200px;" class="text-center"><label for="male">Genie/Card</label></td>
                                                <td style="width: 200px;" class="text-center"><label for="male">EZ Cash</label></td>
                                                <td style="width: 200px;" class="text-center"><label for="male">On Arrival</label></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;" class="text-center"><input type="radio" id="genie" name="payment" value="Genie/Card"></td>
                                                <td style="width: 200px;" class="text-center"><input type="radio" id="ezcash" name="payment"  value="EZ Cash"></td>
                                                <td style="width: 200px;" class="text-center"><input type="radio" id="onarrival" name="payment" value="On Arrival"></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;font-size: 40px;" class="text-center"><i class="fa fa-money"></i></td>
                                                <td style="width: 200px;font-size: 40px;" class="text-center"><i class="fa fa-money"></i></td>
                                                <td style="width: 200px;font-size: 40px;" class="text-center"><i class="fa fa-male"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-md-8">
                                    <a href="" class="btn btn-dark">Back</a>
                                   <a href="<?php echo base_url() ?>Passenger/online_pay" class="btn btn-success">Confirm and Pay</a>
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
    <script src="<?php echo asset_url();?>assets/js/app.js"></script>
    <script src="<?php echo asset_url();?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo asset_url();?>assets/js/custom.js"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>

</body>

</html>
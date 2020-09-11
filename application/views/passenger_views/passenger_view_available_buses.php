<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Available Buses Details</title>
 
    <?php $this->load->view("passenger_views/passenger_header"); ?>        
    <?php $this->load->view("passenger_views/passenger_sidenav"); ?>  

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php $this->load->view("common/header"); ?>
    
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/elements/custom-pagination.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/elements/miscellaneous.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/elements/breadcrumb.css">


    <style>

        .layout-px-spacing {
            min-height: calc(100vh - 96px) !important;
        }

        .star-icon {
            font-size: 30px;
            color: rgb(173, 114, 3);
            margin-right: 10px;
            outline-color: 1px solid black;
        }

        .star-icon1 {
            font-size: 20px;
            color: rgb(173, 114, 3);
            margin-right: 5px;
            outline-color: 1px solid black;
        }

        .breadcrumb-item {
            background: rgb(175, 187, 187);
            font-size: 40px;
            color: black;
            width: 100%;
            margin-bottom: 30px;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="sidebar-noneoverflow">

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing" style="margin-top: 40px;">

                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a>Colombo - Thangalla | 02/09/2020</a></li>
                    </ol>
                </nav>

                <br>

                <div class="btn-group form-row" role="group" aria-label="Basic example" style="float: left;margin-bottom: 20px;">
                    <p style="margin-right: 20px;">Sort By : </p>
                    <button type="button" class="btn btn-light-default" style="margin-right: 20px;">All</button>
                    <button type="button" class="btn btn-light-default" style="margin-right: 20px;">Seat Availability</button>
                    <button type="button" class="btn btn-light-default" style="margin-right: 20px;">Depature</button>
                </div>

                <div class="card component-card_4" style="width: 100%;margin-bottom: 20px;">
                    <div class="card-body">
                        <div class="user-info">
                            <div class="form-row">
                                <h4 class="card-user_name"
                                    style="font-weight: bold;margin-bottom: 30px;margin-right: 20px;">Colombo -
                                    Thangalla 2020-09-02 ( Siriwardhana Super Line )</h4>
                                <i class="fa fa-star star-icon"></i>
                                <i class="fa fa-star star-icon"></i>
                                <i class="fa fa-star star-icon"></i>
                                <i class="fa fa-star star-icon"></i>
                                <i class="fa fa-star star-icon"></i>
                            </div>
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
                                        </tbody>
                                    </table>
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-4">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Colombo</th>
                                                        <th style="padding-left: 40px;">Thangalla</th>
                                                    </tr>
                                                    <tr>
                                                        <td>6.00 p.m</td>
                                                        <td style="padding-left: 40px;">9.00 p.m</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03 Sept</td>
                                                        <td style="padding-left: 40px;">03 Sept</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="progressBarAnimated" class="col-lg-12 layout-spacing">
                                                <div class="">
                                                    <div class="widget-content widget-content-area">
                                                        <div class="progress br-30">
                                                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated"
                                                                role="progressbar" style="width: 10%" aria-valuenow="50"
                                                                aria-valuemin="50" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h6>Closing Date : 03 Sept 2020</h6><br>
                                    <h6>Available Seats : 16/48</h6><br>
                                    <h4 style="font-weight: bold;">Total LKR 320.00</h4><br><br>
                                    <a class="btn btn-warning" href="<?php echo base_url('Passenger/view_bus_seats') ?>">View Seats</a>
                                    <a class="btn btn-success" data-toggle="modal" data-target="#exampleModal">View
                                        Feedbacks</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card component-card_4" style="width: 100%;margin-bottom: 20px;">
                    <div class="card-body">
                        <div class="user-info">
                            <div class="form-row">
                                <h4 class="card-user_name"
                                    style="font-weight: bold;margin-bottom: 30px;margin-right: 20px;">Colombo -
                                    Thangalla 2020-09-02 ( Chandimal Super Line )</h4>
                                <i class="fa fa-star star-icon"></i>
                                <i class="fa fa-star star-icon"></i>
                                <i class="fa fa-star star-icon"></i>
                                <i class="fa fa-star star-icon"></i>
                                <i class="fa fa-star star-icon"></i>
                            </div>

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
                                                <td style="padding-left: 40px;">N/A 8821</td>
                                            </tr>
                                            <tr>
                                                <th>Route Number</th>
                                                <td style="padding-left: 40px;">02</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-4">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Colombo</th>
                                                        <th style="padding-left: 40px;">Thangalla</th>
                                                    </tr>
                                                    <tr>
                                                        <td>7.00 p.m</td>
                                                        <td style="padding-left: 40px;">10.00 p.m</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03 Sept</td>
                                                        <td style="padding-left: 40px;">03 Sept</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="progressBarAnimated" class="col-lg-12 layout-spacing">
                                                <div class="">
                                                    <div class="widget-content widget-content-area">
                                                        <div class="progress br-30">
                                                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated"
                                                                role="progressbar" style="width: 10%" aria-valuenow="50"
                                                                aria-valuemin="50" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h6>Closing Date : 03 Sept 2020</h6><br>
                                    <h6>Available Seats : 12/48</h6><br>
                                    <h4 style="font-weight: bold;">Total LKR 320.00</h4><br><br>
                                    <a class="btn btn-warning" href="<?php echo base_url('Passenger/view_bus_seats') ?>">View Seats</a>
                                    <a class="btn btn-success" data-toggle="modal" data-target="#exampleModal">View
                                        Feedbacks</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card component-card_4" style="width: 100%;margin-bottom: 20px;">
                    <div class="card-body">
                        <div class="user-info">
                            <div class="form-row">
                                <h4 class="card-user_name"
                                    style="font-weight: bold;margin-bottom: 30px;margin-right: 20px;">Colombo -
                                    Thangalla 2020-09-02 ( Sigiri Super Line )</h4>
                                <i class="fa fa-star star-icon"></i>
                                <i class="fa fa-star star-icon"></i>
                                <i class="fa fa-star star-icon"></i>
                                <i class="fa fa-star star-icon"></i>
                                <i class="fa fa-star star-icon"></i>
                            </div>

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
                                        </tbody>
                                    </table>
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-4">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Colombo</th>
                                                        <th style="padding-left: 40px;">Thangalla</th>
                                                    </tr>
                                                    <tr>
                                                        <td>8.00 p.m</td>
                                                        <td style="padding-left: 40px;">11.00 p.m</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03 Sept</td>
                                                        <td style="padding-left: 40px;">03 Sept</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="progressBarAnimated" class="col-lg-12 layout-spacing">
                                                <div class="">
                                                    <div class="widget-content widget-content-area">
                                                        <div class="progress br-30">
                                                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated"
                                                                role="progressbar" style="width: 10%" aria-valuenow="50"
                                                                aria-valuemin="50" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h6>Closing Date : 03 Sept 2020</h6><br>
                                    <h6>Available Seats : 0/48</h6><br>
                                    <h4 style="font-weight: bold;">Total LKR 320.00</h4><br><br>
                                    <a class="btn btn-danger" href="<?php echo base_url('Passenger/view_bus_seats') ?>">Not Available</a>
                                    <a class="btn btn-success" data-toggle="modal" data-target="#exampleModal">View
                                        Feedbacks</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" style="height: auto;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="margin-right: 30px;">Siriwardana
                                    Super Line</h5>
                                <div class="form-row">
                                    <i class="fa fa-star star-icon"></i>
                                    <i class="fa fa-star star-icon"></i>
                                    <i class="fa fa-star star-icon"></i>
                                    <i class="fa fa-star star-icon"></i>
                                    <i class="fa fa-star star-icon"></i>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

                            </div>
                            <div class="modal-body">
                                <div class="row ">
                                    <div class="col card">
                                        <div class="row">
                                            <div class="col" style="display: flex;">
                                                <h5 class="" style="margin-right: 30px;">Prageeth Thilina</h5>
                                                <i class="fa fa-star star-icon1"></i>
                                                <i class="fa fa-star star-icon1"></i>
                                                <i class="fa fa-star star-icon1"></i>
                                                <i class="fa fa-star star-icon1"></i>
                                                <i class="fa fa-star star-icon1"></i>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <p>Highly Recomend Service</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col card">
                                        <div class="row">
                                            <div class="col" style="display: flex;">
                                                <h5 class="" style="margin-right: 30px;">Sakun Pushpitha</h5>
                                                <i class="fa fa-star star-icon1"></i>
                                                <i class="fa fa-star star-icon1"></i>
                                                <i class="fa fa-star star-icon1"></i>
                                                <i class="fa fa-star star-icon1"></i>
                                                <i class="fa fa-star star-icon1"></i>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <p>Highly Recomend Service</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col card">
                                        <div class="row">
                                            <div class="col" style="display: flex;">
                                                <h5 class="" style="margin-right: 30px;">Menushi Lakshika</h5>
                                                <i class="fa fa-star star-icon1"></i>
                                                <i class="fa fa-star star-icon1"></i>
                                                <i class="fa fa-star star-icon1"></i>
                                                <i class="fa fa-star star-icon1"></i>
                                                <i class="fa fa-star star-icon1"></i>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <p>Highly Recomend Service</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                    Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="paginating-container pagination-solid" style="margin-top: 20px;float: right;">
                    <ul class="pagination">
                        <li class="prev"><a href="javascript:void(0);">Prev</a></li>
                        <li><a href="javascript:void(0);">1</a></li>
                        <li class="active"><a href="javascript:void(0);">1</a></li>
                        <li><a href="javascript:void(0);">3</a></li>
                        <li class="next"><a href="javascript:void(0);">Next</a></li>
                    </ul>
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
    <script src="<?php echo asset_url();?>plugins/highlight/highlight.pack.js"></script>
    <script src="<?php echo asset_url();?>assets/js/scrollspyNav.js"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
</body>

</html>
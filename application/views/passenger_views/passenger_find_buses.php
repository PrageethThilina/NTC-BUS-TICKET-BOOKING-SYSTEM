<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Find Buses</title>

    <?php $this->load->view("passenger_views/passenger_header"); ?>        
    <?php $this->load->view("passenger_views/passenger_sidenav"); ?>  

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php $this->load->view("common/header"); ?>  
          
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/plugins.css">
    <link href="<?php echo asset_url();?>assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>custom-flatpickr.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>plugins/noUiSlider/nouislider.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>plugins/bootstrap-range-Slider/bootstrap-slider.css" rel="stylesheet" type="text/css" />
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
            <div class="layout-px-spacing">

                <div class="col-md-6 mx-auto" style="margin-bottom:24px;margin-top: 20px;">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row text-center">
                                <div class="col-md-6 mx-auto">
                                    <img alt="avatar" src="<?php echo asset_url();?>assets/img/bus.jpeg" style="margin-top: 10px;" width="150px"
                                        height="150px" class="img img-fluid" />
                                </div>
                            </div>

                            <h4 class="text-center" style="margin-top: 20px;">Find Buses</h4>
                            <hr>

                        </div>
                        <div class="widget-content widget-content-area">
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">FROM</label>
                                        <select id="inputState" class="form-control selectpicker">
                                            <option selected="">Choose...</option>
                                            <option>Colombo</option>
                                            <option>Galle</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">TO</label>
                                        <select id="inputState" class="form-control selectpicker">
                                            <option selected="">Choose...</option>
                                            <option>Colombo</option>
                                            <option>Galle</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">DATE</label>
                                        <input id="basicFlatpickr" value="2019-09-04"
                                            class="form-control flatpickr flatpickr-input active" type="text"
                                            placeholder="Select Date..">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">BUS TYPE</label>
                                        <select id="inputState" class="form-control selectpicker">
                                            <option selected="">Choose...</option>
                                            <option>Normal</option>
                                            <option>Highway</option>
                                            <option>AC</option>
                                            <option>Semi Luxury</option>
                                        </select>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('Passenger/view_available_buses') ?>" class="btn btn-primary btn-lg"
                                    style="width: 40%;">Search </a>
                            </form>
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
    <?php $this->load->view("common/footer"); ?>
    <script src="<?php echo asset_url();?>plugins/flatpickr/flatpickr.js"></script>
    <script src="<?php echo asset_url();?>plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?php echo asset_url();?>plugins/noUiSlider/nouislider.min.js"></script>
    <script src="<?php echo asset_url();?>plugins/flatpickr/custom-flatpickr.js"></script>
    <script src="<?php echo asset_url();?>plugins/noUiSlider/custom-nouiSlider.js"></script>
    <script src="<?php echo asset_url();?>plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js"></script>
    <script src="<?php echo asset_url();?>assets/js/custom.js"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
</body>

</html>
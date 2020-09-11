<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <?php $this->load->view("common/header"); ?>        
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/plugins.css">

</head>  
<body>

    
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

<div class="overlay"></div>
<div class="cs-overlay"></div>
<div class="search-overlay"></div>

<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">


    <nav id="sidebar">

        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="<?php echo asset_url();?>assets/img/user1.jpg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="passenger_dashboard.html" class="nav-link"> Prageeth </a>
            </li>
            <li class="nav-item toggle-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-left sidebarCollapse">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </li>
        </ul>

        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu active">
                <a href="<?php echo base_url('Passenger/Dashboard') ?>" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span> Dashboard</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-airplay">
                            <path
                                d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                            </path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                        <span> Seat Bookings</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="submenu" data-parent="#accordionExample">
                    <li>
                        <a href="<?php echo base_url('Passenger/find_buses') ?>"> Find Buses </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Passenger/passenger_current_bookings') ?>"> Current Booking Details </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Passenger/previous_bookings') ?>"> Previous Booking Details </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>

</div>
<!--  END SIDEBAR  -->

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <?php $this->load->view("common/footer"); ?>
    <script src="<?php echo asset_url();?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo asset_url();?>assets/js/app.js"></script>
    <script src="<?php echo asset_url();?>assets/js/custom.js"></script>  
    <script src="<?php echo asset_url();?>assets/js/dashboard/dash_1.js"></script>  
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
</body>
</html>
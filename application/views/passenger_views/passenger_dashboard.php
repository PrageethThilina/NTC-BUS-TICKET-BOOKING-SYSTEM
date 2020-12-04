<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Passenger Dashboard</title>

    <?php $this->load->view("common/header"); ?>

    <style>
    .layout-px-spacing {
        min-height: calc(100vh - 96px) !important;
        margin-top: 20px;
    }

    .widget-content-area {
        border-radius: 6px;
        margin-bottom: 10px;
    }

    .daterangepicker.dropdown-menu {
        z-index: 1059;
    }

    .navbar .navbar-item.navbar-dropdown {
        margin-left: auto;
    }

    .dashboard-menu-item-hover {
        cursor: pointer;
    }
    </style>

</head>

<body class="sidebar-noneoverflow">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!-- check whether logged in -->
    <?php
        if (!($this->session->userdata('logged_in'))){

            redirect(base_url().'Passenger/login');

        }
    ?>

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <ul class="navbar-item flex-row navbar-dropdown">
                <!-- messages     -->
                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-circle">
                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>
                        </svg><span class="badge badge-primary"></span>
                    </a>
                </li>
                <!-- notification -->
                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg><span class="badge badge-success"></span>
                    </a>
                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="dashboard-menu-item-hover" onclick="fetchPage('Passenger/profile')"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg> My Profile</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dashboard-menu-item-hover"
                                    onclick="fetchPage('Passenger/profile_settings')"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg> Edit Profile</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="<?php echo base_url('Passenger/lockscreen') ?>"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg> Lock Screen</a>
                            </div>
                            <div class="dropdown-item">
                                <a href="<?php echo base_url('Passenger/logout') ?>"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg> Sign Out</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

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
                        <a href="<?php echo base_url('Passenger/Dashboard') ?>">
                            <div id="profile_preview_dashboard">
                                <img src="<?php echo asset_url();?>assets/img/user1.png" class="img img-fluid"
                                    alt="profile">
                            </div>
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="<?php echo base_url('Passenger/Dashboard') ?>" class="nav-link">
                            <?php echo $this->session->userdata('ntc_psg_fname'); ?> </a>
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
                        <a href="<?php echo base_url('Passenger/Dashboard') ?>" aria-expanded="true"
                            class="dropdown-toggle dashboard-menu-item-hover">
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
                        <a onclick="fetchPage('Passenger/find_buses')" aria-expanded="true"
                            class="dropdown-toggle dashboard-menu-item-hover">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-airplay">
                                    <path
                                        d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                    </path>
                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                </svg>
                                <span>Find Buses</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a onclick="fetchPage('Passenger/current_bookings')" aria-expanded="true"
                            class="dropdown-toggle dashboard-menu-item-hover">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-airplay">
                                    <path
                                        d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                    </path>
                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                </svg>
                                <span>Current Booking Details</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a onclick="fetchPage('Passenger/previous_bookings')" aria-expanded="true"
                            class="dropdown-toggle dashboard-menu-item-hover">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-airplay">
                                    <path
                                        d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                    </path>
                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                </svg>
                                <span>Previous Booking
                                    Details</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content ">
            <div class="layout-px-spacing ajax_main_content">
                <div class="row layout-top-spacing">
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6>Statistics</h6>
                                <div class="wrapper">
                                    <h3 class="text-center text-danger" style="font-weight:bold;">My total Bookings</h3>
                                    <h3 class="value text-center" style="font-weight:bold;" id="psg_total_bookings">
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6>Statistics</h6>
                                <div class="wrapper">
                                    <h3 class="text-center text-danger" style="font-weight:bold;">My total Payments</h3>
                                    <h3 class="value text-center" style="font-weight:bold;">Rs. <span
                                            style="font-weight:bold;" id="psg_total_payments"></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget-four">
                            <div>
                                <h6 style="font-weight:bold;margin-bottom:20px">Payments</h6>
                            </div>
                            <div class="widget-content">
                                <div class="vistorsBrowser">
                                    <div style="margin-bottom:20px">
                                        <div class="w-browser-details">
                                            <div class="w-browser-info">
                                                <h6>Card Payment</h6>
                                                <p class="browser-count">Rs. 1000</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="margin-bottom:20px">
                                        <div class="w-browser-details">

                                            <div class="w-browser-info">
                                                <h6>Easy Cash</h6>
                                                <p class="browser-count">Rs. 1200</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="">
                                        <div class="w-browser-details">

                                            <div class="w-browser-info">
                                                <h6>On Arrival</h6>
                                                <p class="browser-count">Rs. 1000</p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-three">
                            <div class="widget-heading">
                                <div class="">
                                    <h5 class="">Bookings Per Month</h5>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div id="bookingper_month_chart"></div>
                            </div>
                        </div>
                    </div>

                    <!-- recent bookings -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-activity-three">

                            <div class="widget-heading">
                                <h5 class="">Recent Bookings</h5>
                            </div>

                            <div class="widget-content">

                                <div class="mt-container mx-auto">

                                    <div class="timeline-line">

                                        <div class="item-timeline timeline-new">

                                            <div class="latest_bookings_container">

                                                <div class="latest_bookings"></div>

                                            </div>
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

    <?php $this->load->view("common/footer"); ?>

    <script>
    $(document).ready(function() {

        var ntc_psg_id = <?php echo $this->session->userdata('ntc_psg_id'); ?>;

        //fetch profile details
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Passenger_Controllers/Passenger_Login/fetch_passenger_details'); ?>',
            dataType: 'json',
            error: function() {
                alert('An Error Occurred. Please Try Again Later!')
            },
            success: function(data) {

                $('#ntc_psg_fname').val(data['profile_details']['ntc_psg_fname']);
                $('#ntc_psg_lname').val(data['profile_details']['ntc_psg_lname']);
                $('#ntc_psg_username').val(data['profile_details']['ntc_psg_username']);
                $('#ntc_psg_email').val(data['profile_details']['ntc_psg_email']);
                $('#ntc_psg_nic').val(data['profile_details']['ntc_psg_nic']);
                $('#ntc_psg_phone').val(data['profile_details']['ntc_psg_phone']);
                $('#ntc_psg_address').val(data['profile_details']['ntc_psg_address']);
                $('#ntc_psg_registered_at').val(data['profile_details']['ntc_psg_registered_at']);
                if (data['profile_details']['ntc_psg_avatar'] != '' && data['profile_details'][
                        'ntc_psg_avatar'
                    ] != null) {
                    var image_preview_dashboard = '';

                    image_preview_dashboard = '<div class="col-sm-10"><img src="' +
                        '<?php echo base_url();?>' + data[
                            'profile_details']['ntc_psg_avatar'] +
                        '" class="img img-responsive" style="width:50px; height:50px;"></br></div>';

                    $('#profile_preview_dashboard').html(image_preview_dashboard);
                }

            }
        });

        //count of total bookings by passenger
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/fetch_passenger_total_bookings'); ?>',
            data: {
                'ntc_psg_id': ntc_psg_id
            },
            dataType: 'json',
            error: function() {
                alert('An Error Occurred. Please Try Again Later!')
            },
            success: function(data) {

                $('#psg_total_bookings').html(data);

            }
        });

        //total Payments by passenger
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/fetch_passenger_total_payments'); ?>',
            data: {
                'ntc_psg_id': ntc_psg_id
            },
            dataType: 'json',
            error: function() {
                alert('An Error Occurred. Please Try Again Later!')
            },
            success: function(data) {

                $('#psg_total_payments').html(data);

            }
        });

        //count of bookings per month
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/fetch_passenger_bookings_permonth'); ?>',
            data: {
                'ntc_psg_id': ntc_psg_id
            },
            dataType: 'json',
            error: function() {
                alert('An Error Occurred. Please Try Again Later!')
            },
            success: function(data) {

                var labels = data['passenger_bookings_per_month'].map(function(e) {
                    return e.MONTH;
                })

                var dataarr = data['passenger_bookings_per_month'].map(function(e) {
                    return e.COUNT;
                })

                // bookings per month chart
                var sCol = {

                    chart: {
                        height: 350,
                        type: 'bar',
                        toolbar: {
                            show: false,
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '20%',
                            endingShape: 'rounded'
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 0,
                        colors: ['transparent']
                    },
                    series: [{
                        name: 'Bookings',
                        data: dataarr
                    }],
                    xaxis: {
                        categories: labels,
                        title: {
                            text: 'Month'
                        }
                    },
                    yaxis: {
                        title: {
                            text: 'Count'
                        }
                    },
                    fill: {
                        opacity: 1

                    },
                    tooltip: {
                        y: {
                            formatter: function(val) {
                                return val
                            }
                        }
                    }
                }

                var chart = new ApexCharts(
                    document.querySelector("#bookingper_month_chart"),
                    sCol
                );

                chart.render();

            }
        });

        //recent 5 bookings by passenger
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Passenger_Controllers/Passenger_Dashboard/fetch_passenger_recent_bookings'); ?>',
            data: {
                'ntc_psg_id': ntc_psg_id
            },
            dataType: 'json',
            error: function() {
                alert('An Error Occurred. Please Try Again Later!')
            },
            success: function(data) {

                var latest_bookings = data['passenger_recent_bookings'];

                $.each(latest_bookings, function() {

                    var html =
                        '<div class="latest_bookings"><div class="t-dot"><div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div></div><div class="t-content"><div class="t-uppercontent"><h5>' +
                        this.ntc_bus_start_location + ' ' + '-' + ' ' + this
                        .ntc_bus_end_location +
                        '</h5><span class="" style="margin-left:40px">' + this
                        .ntc_bus_booking_date + '</span></div><p><span>' + this
                        .ntc_bus_type + ' ' + '</span><span>' + this.ntc_bus_number +
                        '</span><span>' + ' ' + +this.ntc_bus_seats + ' ' +
                        '</span><span>' + 'Rs.' + this
                        .ntc_bus_booking_cost + '</span></p></div></div>';

                    $('.latest_bookings_container').append(html);

                })
            }
        });

    });
    </script>

</body>

</html>
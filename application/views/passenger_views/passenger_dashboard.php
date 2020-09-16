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

    .dashboard-menu-item-hover{
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

            <ul class="navbar-item flex-row">
                <li class="nav-item align-self-center page-heading">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>Passenger Dashboard</h3>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-item flex-row navbar-dropdown">
                <!-- Language -->
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown  custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><img
                                src="<?php echo asset_url();?>assets/img/ca.png" class="flag-width"
                                alt="flag"><span>English</span> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-img-value="de" data-value="Sinhala"
                                href="javascript:void(0);"><img src="<?php echo asset_url();?>assets/img/de.png"
                                    class="flag-width" alt="flag">
                                Sinhala</a>
                            <a class="dropdown-item" data-img-value="jp" data-value="Tamil"
                                href="javascript:void(0);"><img src="<?php echo asset_url();?>assets/img/jp.png"
                                    class="flag-width" alt="flag">
                                Tamil</a>
                            <a class="dropdown-item" data-img-value="ca" data-value="English"
                                href="javascript:void(0);"><img src="<?php echo asset_url();?>assets/img/ca.png"
                                    class="flag-width" alt="flag">
                                English</a>
                        </div>
                    </div>
                </li>
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
                    <div class="dropdown-menu p-0 position-absolute" aria-labelledby="messageDropdown">
                        <div class="">
                        </div>
                    </div>
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
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">
                        </div>
                    </div>
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
                                <a class="dashboard-menu-item-hover" id="profile_id"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg> My Profile</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dashboard-menu-item-hover" id="profile_setting_id"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg> Edit Profile</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="dashboard-menu-item-hover" id="mail_box_id"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-inbox">
                                        <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                        <path
                                            d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                        </path>
                                    </svg> Inbox</a>
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
                        <a href="index.html">
                            <img src="<?php echo asset_url();?>assets/img/user1.jpg" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="<?php echo base_url('Passenger/Dashboard') ?>" class="nav-link"> <?php echo $this->session->userdata('ntc_psg_fname'); ?> </a>
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
                                <a class="dashboard-menu-item-hover" id="find_bus_id"> Find Buses </a>
                            </li>
                            <li>
                                <a class="dashboard-menu-item-hover" id="current_booking_id"> Current Booking Details
                                </a>
                            </li>
                            <li>
                                <a class="dashboard-menu-item-hover" id="previous_booking_id"> Previous Booking
                                    Details </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content ">
            <div class="layout-px-spacing ajax_main_content" >
                <div class="row layout-top-spacing">
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="">Statistics</h6>
                            </div>
                            <div class="w-chart">
                                <div class="w-chart-section">
                                    <div class="w-detail">
                                        <p class="w-title">Total Page Visits</p>
                                        <p class="w-stats">26</p>
                                    </div>
                                    <div class="w-chart-render-one">
                                        <div id="total-users"></div>
                                    </div>
                                </div>

                                <div class="w-chart-section">
                                    <div class="w-detail">
                                        <p class="w-title">Total Bookings</p>
                                        <p class="w-stats">15</p>
                                    </div>
                                    <div class="w-chart-render-one">
                                        <div id="paid-visits"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-card-four">
                            <div class="widget-content">
                                <div class="w-content">
                                    <div class="w-info">
                                        <h6 class="value">Rs. 5500</h6>
                                        <p class="">Total Payments</p>
                                    </div>
                                    <div class="">
                                        <div class="">
                                            <i class="fa fa-money text-center" style="font-size: 70px;"></i>
                                        </div>
                                    </div>
                                    <br><br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-card-four">
                            <div class="widget-content">
                                <div class="w-content">
                                    <div class="form-row">
                                        <p class="" style="font-size: 15px;font-weight: bold;margin-right: 10px;">Card
                                            Payments</p>
                                        <h6 class="" style="font-size: 18px;font-weight: bold;color: blue;">Rs. 2300
                                        </h6>
                                    </div>
                                </div>
                                <div class="w-content">
                                    <div class="form-row">
                                        <p class="" style="font-size: 15px;font-weight: bold;margin-right: 10px;">EZ
                                            Cash Payments</p>
                                        <h6 class="" style="font-size: 18px;font-weight: bold;color: blue;">Rs. 1500
                                        </h6>
                                    </div>
                                </div>
                                <div class="w-content">
                                    <div class="form-row">
                                        <p class="" style="font-size: 15px;font-weight: bold;margin-right: 10px;">On
                                            Arrival Payments</p>
                                        <h6 class="" style="font-size: 18px;font-weight: bold;color: blue;">Rs. 2700
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-three">
                            <div class="widget-heading">
                                <div class="">
                                    <h5 class="">Bookings Per Month</h5>
                                </div>

                                <div class="dropdown  custom-dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="uniqueVisitors"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="uniqueVisitors">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">
                                <div id="uniqueVisits"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-activity-three">

                            <div class="widget-heading">
                                <h5 class="">Recent Bookings</h5>
                            </div>

                            <div class="widget-content">

                                <div class="mt-container mx-auto">
                                    <div class="timeline-line">

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Colombo - Thangalla</h5>
                                                    <span class="">27 Apr, 2020</span>
                                                </div>
                                                <p>Siriwardana Super Line Seat 13</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Colombo - Badulla</h5>
                                                    <span class="">28 Mar, 2020</span>
                                                </div>
                                                <p>Chandimal Super Line Seat 16</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Colombo - Thangalla</h5>
                                                    <span class="">01 Feb, 2020</span>
                                                </div>
                                                <p>Siriwardana Super Line Seat 11</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Colombo - Galle</h5>
                                                    <span class="">10 Jan, 2020</span>
                                                </div>
                                                <p>Siriwardana Super Line Seat 13</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Colombo - Matara</h5>
                                                    <span class="">06 Jan, 2020</span>
                                                </div>
                                                <p>Siriwardana Super Line Seat 13</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <div class="calendar-upper-section">
                                    <div class="row">
                                        <div class="col-md-8 col-12">
                                            <div class="labels">
                                                <p class="label label-primary">Work</p>
                                                <p class="label label-warning">Travel</p>
                                                <p class="label label-success">Personal</p>
                                                <p class="label label-danger">Important</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <form action="javascript:void(0);"
                                                class="form-horizontal mt-md-0 mt-3 text-md-right text-center">
                                                <button id="myBtn" class="btn btn-primary"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-calendar mr-2">
                                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                                    </svg> Add Event</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>

                    <!-- The Modal -->
                    <div id="addEventsModal" class="modal animated fadeIn">

                        <div class="modal-dialog modal-dialog-centered">

                            <!-- Modal content -->
                            <div class="modal-content">

                                <div class="modal-body">

                                    <span class="close">&times;</span>

                                    <div class="add-edit-event-box">
                                        <div class="add-edit-event-content">
                                            <h5 class="add-event-title modal-title">Add Events</h5>
                                            <h5 class="edit-event-title modal-title">Edit Events</h5>

                                            <form class="">

                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <label for="start-date" class="">Event Title:</label>
                                                        <div class="d-flex event-title">
                                                            <input id="write-e" type="text" placeholder="Enter Title"
                                                                class="form-control" name="task">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <div class="form-group start-date">
                                                            <label for="start-date" class="">From:</label>
                                                            <div class="d-flex">
                                                                <input id="start-date" placeholder="Start Date"
                                                                    class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <div class="form-group end-date">
                                                            <label for="end-date" class="">To:</label>
                                                            <div class="d-flex">
                                                                <input id="end-date" placeholder="End Date" type="text"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="start-date" class="">Event Description:</label>
                                                        <div class="d-flex event-description">
                                                            <textarea id="taskdescription"
                                                                placeholder="Enter Description" rows="3"
                                                                class="form-control" name="taskdescription"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="event-badge">
                                                            <p class="">Badge:</p>

                                                            <div class="d-sm-flex d-block">
                                                                <div class="n-chk">
                                                                    <label class="new-control new-radio radio-primary">
                                                                        <input type="radio" class="new-control-input"
                                                                            name="marker" value="bg-primary">
                                                                        <span class="new-control-indicator"></span>Work
                                                                    </label>
                                                                </div>

                                                                <div class="n-chk">
                                                                    <label class="new-control new-radio radio-warning">
                                                                        <input type="radio" class="new-control-input"
                                                                            name="marker" value="bg-warning">
                                                                        <span
                                                                            class="new-control-indicator"></span>Travel
                                                                    </label>
                                                                </div>

                                                                <div class="n-chk">
                                                                    <label class="new-control new-radio radio-success">
                                                                        <input type="radio" class="new-control-input"
                                                                            name="marker" value="bg-success">
                                                                        <span
                                                                            class="new-control-indicator"></span>Personal
                                                                    </label>
                                                                </div>

                                                                <div class="n-chk">
                                                                    <label class="new-control new-radio radio-danger">
                                                                        <input type="radio" class="new-control-input"
                                                                            name="marker" value="bg-danger">
                                                                        <span
                                                                            class="new-control-indicator"></span>Important
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button id="discard" class="btn" data-dismiss="modal">Discard</button>
                                    <button id="add-e" class="btn">Add Task</button>
                                    <button id="edit-event" class="btn">Save</button>
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
        $('#find_bus_id').click(function() {
            $('.ajax_main_content').load("<?php echo base_url('Passenger/find_buses') ?>");
        });
        $('#current_booking_id').click(function() {
            $('.ajax_main_content').load("<?php echo base_url('Passenger/current_bookings') ?>");
        });
        $('#previous_booking_id').click(function() {
            $('.ajax_main_content').load("<?php echo base_url('Passenger/previous_bookings') ?>");
        });
        $('#mail_box_id').click(function() {
            $('.ajax_main_content').load("<?php echo base_url('Passenger/mail_box') ?>");
        });
        $('#profile_id').click(function() {
            $('.ajax_main_content').load("<?php echo base_url('Passenger/profile') ?>");
        });
        $('#profile_setting_id').click(function() {
            $('.ajax_main_content').load("<?php echo base_url('Passenger/profile_settings') ?>");
        });
        
    </script>
    
</body>

</html>
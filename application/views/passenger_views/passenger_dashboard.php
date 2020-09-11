<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Passenger Dashboard</title>


    <?php $this->load->view("passenger_views/passenger_header"); ?>
    <?php $this->load->view("passenger_views/passenger_sidenav"); ?>

    <?php $this->load->view("common/header"); ?>

    <link href="<?php echo asset_url();?>plugins/apex/apexcharts.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>plugins/fullcalendar/custom-fullcalendar.advance.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo asset_url();?>plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css" />

    <style>

    .layout-px-spacing {
        min-height: calc(100vh - 96px) !important;
    }

    .widget-content-area {
        border-radius: 6px;
        margin-bottom: 10px;
    }

    .daterangepicker.dropdown-menu {
        z-index: 1059;
    }
    </style>

</head>

<body class="sidebar-noneoverflow">

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

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
                                    <h6 class="" style="font-size: 18px;font-weight: bold;color: blue;">Rs. 2300</h6>
                                </div>
                            </div>
                            <div class="w-content">
                                <div class="form-row">
                                    <p class="" style="font-size: 15px;font-weight: bold;margin-right: 10px;">EZ
                                        Cash Payments</p>
                                    <h6 class="" style="font-size: 18px;font-weight: bold;color: blue;">Rs. 1500</h6>
                                </div>
                            </div>
                            <div class="w-content">
                                <div class="form-row">
                                    <p class="" style="font-size: 15px;font-weight: bold;margin-right: 10px;">On
                                        Arrival Payments</p>
                                    <h6 class="" style="font-size: 18px;font-weight: bold;color: blue;">Rs. 2700</h6>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-more-horizontal">
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
                                            <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check">
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
                                            <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check">
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
                                            <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check">
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
                                            <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check">
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
                                            <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check">
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
                                                        <textarea id="taskdescription" placeholder="Enter Description"
                                                            rows="3" class="form-control"
                                                            name="taskdescription"></textarea>
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
                                                                    <span class="new-control-indicator"></span>Travel
                                                                </label>
                                                            </div>

                                                            <div class="n-chk">
                                                                <label class="new-control new-radio radio-success">
                                                                    <input type="radio" class="new-control-input"
                                                                        name="marker" value="bg-success">
                                                                    <span class="new-control-indicator"></span>Personal
                                                                </label>
                                                            </div>

                                                            <div class="n-chk">
                                                                <label class="new-control new-radio radio-danger">
                                                                    <input type="radio" class="new-control-input"
                                                                        name="marker" value="bg-danger">
                                                                    <span class="new-control-indicator"></span>Important
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
    <script src="<?php echo asset_url();?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo asset_url();?>assets/js/app.js"></script>

    <script src="<?php echo asset_url();?>assets/js/custom.js"></script>
    <script src="<?php echo asset_url();?>plugins/fullcalendar/moment.min.js"></script>
    <script src="<?php echo asset_url();?>plugins/flatpickr/flatpickr.js"></script>
    <script src="<?php echo asset_url();?>plugins/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo asset_url();?>plugins/fullcalendar/custom-fullcalendar.advance.js"></script>
    <script src="<?php echo asset_url();?>plugins/apex/apexcharts.min.js"></script>
    <script src="<?php echo asset_url();?>assets/js/dashboard/dash_1.js"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
</body>

</html>
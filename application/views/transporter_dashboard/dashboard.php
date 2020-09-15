<?php $this->load->view("common/transporter_dashboard/trns_header"); ?>

<?php $this->load->view('common/transporter_dashboard/top-nav'); ?>

<?php $this->load->view('common/transporter_dashboard/left_navigation'); ?>

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
	                <!-- CONTENT AREA -->
                <div class="header-container" style="margin-top: 30px">
                    <h4>Monthly Snapshot</h4>

                    <div class="row" style="margin-top:20px; margin-left: -38px">
                        <div class="col-md-4">  
                             <div class="card component-card_1">
                                <div class="card-body" style="text-align: center;">
                                    <h4 class="card-title">coming soon</h4>
                                    <p class="card-text">Bookings</p>
                                </div>
                            </div>
                     </div>

                        <div class="col-md-4">      
                            <div class="card component-card_1" >
                                <div class="card-body" style="text-align: center;">
                                    <h4 class="card-title">coming soon</h4>
                                    <p class="card-text">Active Buses</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">      
                            <div class="card component-card_1" >
                                <div class="card-body" style="text-align: center;">
                                    <h4 class="card-title">coming soon</h4>
                                    <p class="card-text">Revenue (Rs.)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="analytics">

                    <div class="header-container" style="margin-top: 30px">
                        <h4>Analytics</h4>
                    </div>
                    
                    <div class="row" style="margin-left: 20px; margin-top:20px">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget-two">
                            <div class="widget-content">
                                <div class="w-numeric-value">
                                    <div class="w-content">
                                        <span class="w-value">Daily sales</span>
                                        <span class="w-numeric-title">Go to columns for details.</span>
                                    </div>
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                    </div>
                                </div>
                                <div class="w-chart">
                                    <div id="daily-sales">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget-three">
                            <div class="widget-heading">
                                <h5 class="">Summary</h5>
                            </div>
                            <div class="widget-content">

                                <div class="order-summary">

                                    <div class="summary-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                        </div>
                                        <div class="w-summary-details">
                                            
                                            <div class="w-summary-info">
                                                <h6>Income</h6>
                                                <p class="summary-count">$92,600</p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="summary-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                                        </div>
                                        <div class="w-summary-details">
                                            
                                            <div class="w-summary-info">
                                                <h6>Profit</h6>
                                                <p class="summary-count">$37,515</p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="summary-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                        </div>
                                        <div class="w-summary-details">
                                            
                                            <div class="w-summary-info">
                                                <h6>Expenses</h6>
                                                <p class="summary-count">$55,085</p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget-one widget">
                            <div class="widget-content">
                                <div class="topic">
                                    <h5 style="color: black">Statistics</h5>
                                </div>

                                
                              
                            </div>
                        </div>
                    </div>
                </div>

                </div>

                <div class="review">
                    <div class="header-container" style="margin-top: 30px">
                        <h4>Recent Reviews</h4>
                    </div>

                    <div class="row" style="margin-left: 15px">
                        <div class="col-md-6">
                             <div class="card-body">
                                <div class="user-profile" style="margin-top: 10px">
                                    <img src="assets/img/90x90.jpg" class="" alt="...">
                                </div>

                                <div class="user-info" style="margin-top: 5px">
                                    <h5 class="card-user_name">Dilshan Sulakshana</h5>
                                    <div class="card-star_rating">
                                       <span class="badge badge-primary">4.5</span>
                                    </div>
                                    <p class="card-text" style="margin-top: 5px"> Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                             <div class="card-body">
                                <div class="user-profile"  style="margin-top: 10px">
                                    <img src="assets/img/90x90.jpg" class="" alt="...">
                                </div>

                                <div class="user-info" style="margin-top: 5px">
                                    <h5 class="card-user_name">Laalitha Indrajith</h5>
                                    <div class="card-star_rating">
                                       <span class="badge badge-primary">5.0</span>
                                    </div>
                                    <p class="card-text" style="margin-top: 5px"> Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies. </p>
                                </div>
                            </div>
                        </div>                                             
                     </div>   
                </div>


            </div>

               


                <!-- CONTENT AREA -->


    </div>



<?php $this->load->view('common/transporter_dashboard/trns_footer');?>

    

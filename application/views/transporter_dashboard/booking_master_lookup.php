
        <!--  BEGIN CONTENT AREA  -->
        <div id="booking-content" class="booking-main-content">
           
             <div class="header-container" style="margin-top: 30px">
                <h4>Bookings</h4>
            </div>

            <!-- start of the filteration code  -->
            <!-- <div class="filter-header" style="margin-left: 20px; margin-top: 20px">
                <h6>Filter</h6>
            </div>
            <div class="row">
                    <div class="col-md-3" style="margin-left: 10px">
                        <label for="inputEmail4">From</label>
                        <input type="date" class="form-control" id="" placeholder="">
                    </div>
                 
                    <div class="col-md-3">
                        <label for="inputEmail4">To</label>
                        <input type="date" class="form-control" id="" placeholder="">
                    </div>


                    <div class="col-md-2">
                        <label for="inputEmail4">Start Location</label>
                        <input type="text" class="form-control" id="" placeholder="Start">
                    </div>

                    <div class="col-md-2">
                        <label for="inputEmail4">End Location</label>
                        <input type="text" class="form-control" id="" placeholder="End">
                    </div>

                    <div class="col-md-1" style="margin-top: 35px">
                        <button class="btn btn-primary mb-2">Filter</button>
                    </div>
 
            </div> -->
            <!-- end of the filteration code -->
            
 

            <div class="layout-px-spacing">
                
                <div class="row layout-top-spacing" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <div id="html5-extension_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row"><div class="col-md-12">
                                        <div class="row"><div class="col-md-6">
                                            <div class="dt-buttons">      
                                                <button class="dt-button buttons-copy buttons-html5 btn" tabindex="0" aria-controls="html5-extension">
                                                    <span>Copy</span>
                                                </button> 
                                                <button class="dt-button buttons-csv buttons-html5 btn" tabindex="0" aria-controls="html5-extension">
                                                    <span>CSV</span>
                                                </button> 
                                                <button class="dt-button buttons-excel buttons-html5 btn" tabindex="0" aria-controls="html5-extension">
                                                    <span>Excel</span>
                                                </button> 
                                                <button class="dt-button buttons-print btn" tabindex="0" aria-controls="html5-extension">
                                                    <span>Print</span>
                                                </button> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="html5-extension_filter" class="dataTables_filter">
                                                <label>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                                    <input type="search" class="form-control" placeholder="Search..." aria-controls="html5-extension">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <table id="html5-extension" class="table table-hover non-hover dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="html5-extension_info">
                                    <thead style="text-align: center;">
                                        <tr>
                                            <th>Reference Number</th>
                                            <th>Customer Name</th>
                                            <th>Contact Number</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Start Location</th>
                                            <th>End Location</th>
                                            <th>Bus Number</th>
                                            <th>Bus Model</th>
                                            <th>Bus Type</th>
                                            <th>Price (Rs.)</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody style="text-align: center;">
                                        
                                        <tr>
                                            <td>ITA-2020820-100</td>
                                            <td>Sakun Rathnayaka</td>
                                            <td>0719425366</td>
                                            <td>20-08-2020</td>
                                            <td>07:30</td>
                                            <td>Kadawatha</td>
                                            <td>Aluthgama</td>
                                            <td>NA-2024</td>
                                            <td>Rosa</td>
                                            <td>Highway</td>
                                            <td>300</td>
                                            <td>
                                                <span class="shadow badge badge-primary">OK</span>
                                            </td>
                                        </tr>                                       
                                                                    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
               


                <!-- CONTENT AREA -->



<?php $this->load->view('common/transporter_dashboard/trns_footer');?>

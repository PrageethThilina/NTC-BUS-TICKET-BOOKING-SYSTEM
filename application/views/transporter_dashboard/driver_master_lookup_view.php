
<div id="driver-content" class="driver-main-content">          
            <div class="header-container" style="margin-top: 30px">
                <h4>Drivers</h4>
            </div>

            <div class="breadcumb-home" style="margin-left: 30px">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Drivers</a></li>
                    </ol>
                </nav>
            </div> 

            <div class="layout-px-spacing">
                
                <div class="row layout-top-spacing" id="cancel-row">

                    <div class="add" style="margin-left: 970px">
                         <a onclick="fetchPage('transporter/dashboard/drivers/driver_view_create/new',true);return false;">
                            <button class="btn btn-success mb-2">Add</button></a>
                    </div>
                
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
                                        <tr >
                                            <th>Avatar</th>
                                            <th>Driver Name</th>
                                            <th>Date Of Birth</th>
                                            <th>Contact Number</th>
                                            <th>Address</th>
                                            <th>NIC</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody style="text-align: center;">
                                        
                                        <tr>
                                            <td>
                                                <img src="<?php echo asset_url();?>assets/img/90x90.jpg" alt="avatar">
                                            </td>
                                            <td>Kamal Nishantha</td>
                                            <td>21-08-1990</td>
                                            <td>0718459887</td>
                                            <td>Galle Road, Bentota.</td>
                                            <td>9058748745</td>
                                            <td>
                                                <span class="shadow badge badge-primary">Active</span>
                                            </td>
                                           
                                            <td>
                                                <button class="btn btn-outline-primary">
                                                    <a href="">Edit</a>
                                                </button>
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

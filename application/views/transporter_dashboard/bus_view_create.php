
      <!--  BEGIN CONTENT AREA  -->
        <div id="addbus-content" class="addbus-main-content">
           
             <div class="header-container" style="margin-top: 30px">
                <h4>Add Buses</h4>
            </div>
            <div class="breadcumb-home" style="margin-left: 30px">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="" onclick="fetchPage('transporter/dashboard/buses',true);return false;">Buses</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Add</li>
                    </ol>
                </nav>
            </div> 

             <div class="func-btn widget-content " style="float: right; margin-right: 15px">
                         <button class="btn btn-primary top-right mb-2">Save</button>
                         <a onclick="fetchPage('transporter/dashboard/buses',true);return false;">
                            <button class="btn btn-success mb-2">Lookup</button></a>
                         <a href="addbus.html"><button class="btn btn-warning mb-2">Reset</button></a>
             </div>

             <div class="buscreation" style="margin-top: 45px; margin-left: 32px">
                 <h5>Bus Creation</h5>
             </div>

             <hr>

             <div class="add-form">
                <form action="">
                    <div class="row">
                      <div class="form-header col-md-6">
                          <h6 style="margin-left: 16px">Basic Information</h6>
                      </div>

                    <div class="form-header col-md-6">
                          <h6>Route Information</h6>
                    </div>
                    </div>
                     <div class="form-row col-mb-2" style="margin-left: 10px; margin-right: 10px">
                        <div class="form-group col-md-2">
                            <label for="inputEmail4">Bus Number</label>
                            <input type="text" class="form-control" id="" placeholder="NA-2024">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Bus Type</label>

                            <select class="selectpicker" data-live-search="true">
                                <option>Highway</option>
                                <option>Normal</option>
                                <option>Semi Luxuary</option>
                                <option>AirConditioned</option>
                            </select>
            
                        </div>

                        <div class="form-group col-md-1">
                            
                        </div>


                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Depot Name</label>
                            <select class="selectpicker" data-live-search="true">
                                <option>Kadawatha</option>
                                <option>Colombo Fort</option>
                                <option>Kandy</option>
                                <option>Galle</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Route Name</label>
                            <select class="selectpicker" data-live-search="true">
                                <option>Kandy - Colombo</option>
                                <option>Kadawatha - Galle</option>
                                <option>Kandy - Galle</option>
                            </select>
                        </div>                    

                    </div>

                     <div class="form-row col-mb-2" style="margin-left: 10px; margin-right: 10px">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Bus Model</label>
                             <select class="selectpicker" data-live-search="true">
                                <option>Rosa</option>
                                <option>Leyland</option>
                                <option>TATA</option>
                                <option>Colombo Rider</option>
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label>Status</label>
                            <br>
                            <label class="switch s-success mr-2">

                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                             </label>
                          
                        </div>

                        <div class="form-group col-md-1">
                            
                        </div>


                        <div class="form-group col-md-6">
                            <label>Add time slots</label>
                            <table id="range-search" class="display table table-hover" style="width:400px; height: 170px; display: block; overflow-y: auto; white-space: nowrap;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">
                                              <a href="">
                                                <button class="btn btn-success">
                                                   Add
                                                </button>
                                              </a>
                                            </td>
                                        </tr>

                                         <tr>
                                            <td>01</td>                                            
                                            <td>09:00</td>
                                            <td>10:00</td>
                                            <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 table-cancel"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                        </tr>

                                        <tr>
                                            <td>01</td>                                            
                                            <td>09:00</td>
                                            <td>10:00</td>
                                            <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 table-cancel"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                        </tr>

                                        <tr>
                                            <td>01</td>                                            
                                            <td>09:00</td>
                                            <td>10:00</td>
                                            <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 table-cancel"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                        </tr>

                                        <tr>
                                            <td>01</td>                                            
                                            <td>09:00</td>
                                            <td>10:00</td>
                                            <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 table-cancel"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                        </tr>

                                        <tr>
                                            <td>01</td>                                            
                                            <td>09:00</td>
                                            <td>10:00</td>
                                            <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 table-cancel"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                        </div>


                    </div> 

                    <div class="form-row col-mb-2" style="margin-left: 10px; margin-right: 10px">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Vehicle Chasis Number</label>
                            <input type="text" class="form-control" id="" placeholder=" ">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Username</label>
                            <input type="text" class="form-control" id="" placeholder="Enter a username">
                        </div>
                    </div>                  
                    <div class="form-row col-mb-2" style="margin-left: 10px; margin-right: 10px">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Vehicle Registration Number</label>
                            <input type="text" class="form-control" id="" placeholder=" ">
                        </div>

                         <div class="form-group col-md-6">
                            <label for="inputEmail4">Password</label>
                            <input type="password" class="form-control" id="" placeholder="Enter a password">
                        </div>
                    </div>
                    
                <div class="row">
                      <div class="form-header col-md-6">
                          <h6 style="margin-left: 16px">Seat Information</h6>
                      </div>

                    <div class="form-header col-md-6">
                          <h6>Preview</h6>
                    </div>

                </div>

                    <div class="form-row col-mb-2" style="margin-left: 10px; margin-right: 10px">
                        <div class="form-group col-md-3" style="margin-left: 15px">
                            <label for="inputEmail4">Number of seats in the left</label>
                        </div>

                         <div class="form-group col-md-1">
                            <input type="number" class="form-control" id="" placeholder="">
                        </div>

                        <div class="form-group col-md-8">

                        </div>
                    </div>

                    <div class="form-row col-mb-2" style="margin-left: 10px; margin-right: 10px">
                        <div class="form-group col-md-3" style="margin-left: 15px">
                            <label for="inputEmail4">Number of seats in the right</label>
                        </div>

                         <div class="form-group col-md-1">
                            <input type="number" class="form-control" id="" placeholder="">
                        </div>

                        <div class="form-group col-md-8">
        
                        </div>
                    </div>

                    <div class="form-row col-mb-2" style="margin-left: 10px; margin-right: 10px">
                        <div class="form-group col-md-3" style="margin-left: 15px">
                            <label for="inputEmail4">Number of seats in the back</label>
                        </div>

                         <div class="form-group col-md-1">
                            <input type="number" class="form-control" id="" placeholder="">
                        </div>

                        <div class="form-group col-md-8">
        
                        </div>
                    </div>

                    <div class="form-row col-mb-2" style="margin-left: 10px; margin-right: 10px">
                        <div class="form-group col-md-3" style="margin-left: 15px">
                            <label for="inputEmail4">Number of rows</label>
                        </div>

                         <div class="form-group col-md-1">
                            <input type="number" class="form-control" id="" placeholder="">
                        </div>

                        <div class="form-group col-md-8">
        
                        </div>
                    </div>

                    <div class="form-row col-mb-2" style="margin-left: 10px; margin-right: 10px">
                        <div class="form-group col-md-4" style="margin-left: 15px">
                            <a href=""><button class="btn btn-primary mb-2">Generate</button></a>
                        </div>

                        <div class="form-group col-md-8">
        
                        </div>
                    </div>

                     <div class="row">
                      <div class="form-header col-md-6">
                          <h6 style="margin-left: 16px">Documents</h6>
                      </div>
                    </div>

                    <div class="form-row col-mb-4" style="margin-left: 10px; margin-right: 10px">
                        <div class="form-group col-md-3" style="margin-left: 15px">
                            <label for="inputEmail4">Insuarance Certificate</label>
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                <label class="custom-file-container__custom-file" >
                                    <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                                <div class="custom-file-container__image-preview"></div>
                            </div>
                        </div>

                        <div class="form-group col-md-3" style="margin-left: 15px">
                            <label for="inputEmail4">License</label>
                            <div class="custom-file-container" data-upload-id="mySecondImage">
                                <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                <label class="custom-file-container__custom-file" >
                                    <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control">
                                        Choose File...
                                        <span class="custom-file-container__custom-file__custom-file-control__button"> Browse </span>
                                    </span>
                                </label>
                                <div class="custom-file-container__image-preview"></div>
                            </div>
                        </div>

                        <div class="form-group col-md-3" style="margin-left: 15px">
                            <label for="inputEmail4">Route Permit</label>
                            <div class="custom-file-container" data-upload-id="myThirdImage">
                                <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                <label class="custom-file-container__custom-file" >
                                    <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control">
                                        Choose File...
                                        <span class="custom-file-container__custom-file__custom-file-control__button"> Browse </span>
                                    </span>
                                </label>
                                <div class="custom-file-container__image-preview"></div>
                            </div>
                        </div>

                    </div>





                </form>
             </div>


                <!-- CONTENT AREA -->
            </div>


            <div class="footer-wrapper">


            </div>
        <!--  END CONTENT AREA  -->

<?php $this->load->view('common/transporter_dashboard/trns_footer');?>



        <!--  BEGIN CONTENT AREA  -->
        <div id="adddriver-content" class="adddriver-main-content">
           
             <div class="header-container" style="margin-top: 30px">
                <h4>Add Drivers</h4>
            </div>
            <div class="breadcumb-home" style="margin-left: 30px">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          <a href="" onclick="fetchPage('transporter/dashboard/drivers',true);return false;">Drivers</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Add</li>
                    </ol>
                </nav>
            </div> 

             <div class="func-btn widget-content " style="float: right; margin-right: 15px">
                         <button class="btn btn-primary top-right mb-2">Save</button>
                         <a onclick="fetchPage('transporter/dashboard/drivers',true);return false;">
                          <button class="btn btn-success mb-2">Lookup</button></a>
                         <a href=""><button class="btn btn-warning mb-2">Reset</button></a>
             </div>

             <div class="driver-creation" style="margin-top: 45px; margin-left: 32px">
                 <h5>Driver Creation</h5>
             </div>

             <div class="add-form">
                 <form action="">
                    <div class="row">
                      <div class="form-header col-md-6">
                          <h6 style="margin-left: 20px; margin-top: 20px">Basic Information</h6>
                      </div>

                     <div class="form-header col-md-6">
                          <h6 style="margin-left: 20px; margin-top: 20px">Documents</h6>
                      </div>
                    </div>

             <div class="row">
                      <div class="col-md-6" style="margin-left: 10px">

                        <div class="form-group">
                            <label for="inputEmail4">Driver Name</label>
                            <input type="text" class="form-control" id="" placeholder="Enter Name">
                        </div>

                     <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Date of birth</label>
                            <input type="date" class="form-control" id="" placeholder="">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Contact Number</label>
                            <input type="text" class="form-control" id="" placeholder="Enter Phone Number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="inputEmail4">NIC</label>
                            <input type="text" class="form-control" id="" placeholder="Enter NIC">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <br>
                            <label class="switch s-success mr-2">

                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                             </label>
                        </div>
                     </div>
                        <div class="form-group">
                            <label for="inputEmail4">Address</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Address"></textarea>
                        </div>                  
                    </div>

                    <div class="col-md-5" style="margin-left: 10px">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="inputEmail4">Driver License</label>
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

                            <div class="col-md-6">
                                <label for="inputEmail4">Avatar</label>
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
                    </div>
                </div>
            </div>
                                     
                 </form>
             </div>

        </div>

        <!--  END CONTENT AREA  -->
<?php $this->load->view('common/transporter_dashboard/trns_footer');?>


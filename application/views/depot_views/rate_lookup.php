<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Rate Lookup</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
     <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?php echo asset_url();?>https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <?php $this->load->view("common/header"); ?>

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>plugins/bootstrap-select/bootstrap-select.min.css">
    <!--  END CUSTOM STYLE FILE  -->

    <!-- BEGIN GLOBAL MANDATORY STYLES --> 
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/plugins.css">
    <!-- END GLOBAL MANDATORY STYLES -->

    

     <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
     <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>plugins/table/datatable/datatables.css">
     <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>plugins/table/datatable/custom_dt_html5.css">
     <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>plugins/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
</head>


<body>

    <?php $this->load->view("common/navigation"); ?>  

    <!--Rate Lookup view-->    
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <!---->
                        <div class="col">
                            <h3 class="d-inline-block">Rate Lookup</h3>
                            <!--Add Rate Modal Button-->
                            <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addrateModal" style="float: right;">Add Rate</button>

                            <nav class="breadcrumb-one" aria-label="breadcrumb">
                                <ol class="breadcrumb" style="width: 100%;">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Rates</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Rate Lookup</li>
                                </ol>
                            </nav>
                        </div>
                       
                        <div class="table-responsive mb-4 mt-4">
                            <table id="list_rate_table" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Route Code</th>
                                        <th>Route Name</th>
                                        <th>Bus Type</th>
                                        <th>Total Fee (Rs.)</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        
            <!-- Start Modal -->
            <div class="modal fade" id="addrateModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Rate Creation</h5>
                           <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <svg> ... </svg>
                            -->
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Route Code</label>
                                <select class="form-control basic selectpicker">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                               
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput2">Route Name</label>
                                <select class="form-control basic selectpicker">
                                    <option>Colombo-Kandy</option>
                                    <option>Colombo-Matara</option>
                                    <option>Colombo-Badulla</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput3">Bus Type</label>
                                <select class="form-control basic selectpicker">
                                    <option>Highway</option>                                    
                                    <option>Semi-Luxury</option>
                                    <option>Normal</option>
                                    <option>A/C</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput4">Total Fee (Rs.) </label>
                                <input type="text" class="form-control" id="exampleFormControlInput4" value="300.00">
                            </div> 

                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                Discard</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Modal-->

        </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">NTC Sri Lanka</a>, All rights reserved.</p>
                </div>              
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <script></script>

    <?php $this->load->view("common/footer"); ?>

    <script>
        $('#list_rate_table').DataTable({
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn' },
                    { extend: 'csv', className: 'btn' },
                    { extend: 'excel', className: 'btn' },
                    { extend: 'print', className: 'btn' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>

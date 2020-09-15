<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Transporter lookup</title>
    <link rel="icon" type="image/x-icon" href="<?php echo asset_url();?>assets/img/favicon.ico" />
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?php echo asset_url();?>https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <?php $this->load->view("common/header"); ?>

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

        <!--Transporter Lookup view-->    
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            
                            <div class="col">
                                <h3 class="d-inline-block">Transporter Lookup</h3>
                                <button type="button" class="btn btn-success mb-2" style="float: right;"><a href="transporter_creation.html">Add Transporter</a></button>


                                <nav class="breadcrumb-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb" style="width: 100%;">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Transporter Lookup</li>
                                    </ol>
                                </nav>        
                            </div>
                            
                            <!--Data table view-->
                            <div class="table-responsive mb-4 mt-4">
                                <table id="list_transporter_table" class="table table-hover non-hover" style="width:100%">
                                    <thead>                        <tr>

                                            <th>User Name</th>
                                            <th>Name (Transporter)</th>
                                            <th>Number of Buses</th>   
                                            <th>Contact Number</th>
                                            <th>Email Address</th>
                                            <th>Status</th>
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

                </div>
                <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
     

    <script></script>

    <?php $this->load->view("common/footer"); ?>

     <script>
        $('#list_transporter_table').DataTable( {
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
        } );
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
    </body>

</html>


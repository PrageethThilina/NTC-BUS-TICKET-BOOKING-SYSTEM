<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Transporter Creation</title>
    <link rel="icon" type="image/x-icon" href="<?php echo asset_url();?>assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?php echo asset_url();?>https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo asset_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <?php $this->load->view("common/header"); ?>

   
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>assets/css/forms/switches.css">

</head>
<body>
        <?php $this->load->view("common/navigation"); ?>

        <!--Transporter creation view-->    
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <!---->
                            <div class="col">
                                <h3 class="d-inline-block">Transporter Creation</h3>
                                <button type="button" class="btn btn-dark mb-2" style="float: right;"><i
                                        class="fa fa-retweet"></i> Reset</button>
                                <button type="button" class="btn btn-info mb-2" style="float: right;"><i
                                        class="fa fa-eye"></i> Lookup</button>
                                <button type="button" class="btn btn-primary mb-2" style="float: right;"><i
                                        class="fa fa-save"></i> Save</button>


                                <nav class="breadcrumb-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb" style="width: 100%;">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Transporter</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Transporter Creation</li>
                                    </ol>
                                </nav>
                            </div>
                            <!---->
                            <div class="container">

                                <form>
                                    <h5>Transporter Information</h5>
                                    <hr>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">

                                            <div class="form-group">
                                                <label for="inputroutecode">Name</label>
                                                <input type="text" class="form-control" id="inputname"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword4">Contact Number</label>
                                                <input type="tel" class="form-control" id="inputPassword4"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputroutecode">Email Address</label>
                                                <input type="text" class="form-control" id="inputroutecode"
                                                    placeholder="">
                                            </div>

                                        </div>


                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="inputroutecode"> User Name</label>
                                                <input type="text" class="form-control" id="inputname"
                                                    placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword4">Password</label>
                                                <input type="tel" class="form-control" id="inputPassword4"
                                                    placeholder="">
                                            </div>

                                            <br><br>
                                            
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Active Status :</label>
                                                <label class="switch s-icons s-outline  s-outline-dark  mb-4 mr-2"
                                                    style="float: right;">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>

                                            </div>
                                        </div>
                                    </div>

                                </form>




                            </div>
                        </div>
                    </div>

                </div>

                

            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All
                        rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></p>
                </div>
            </div> <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">NTC Sri Lanka</a>, All rights reserved.</p>
                    </div>              
                </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->



    

    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="plugins/table/datatable/button-ext/jszip.min.js"></script>
    <script src="plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script>
        //Add body div id to here '#html5-extension'
        $('#').DataTable({
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
    <?php $this->load->view("common/footer"); ?>

</body>

</html>
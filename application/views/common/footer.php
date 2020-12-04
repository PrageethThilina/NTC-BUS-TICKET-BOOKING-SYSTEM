<!-- Main js files -->
<script src="<?php echo asset_url();?>assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="<?php echo asset_url();?>bootstrap/js/popper.min.js"></script>
<script src="<?php echo asset_url();?>bootstrap/js/bootstrap.js"></script>
<!-- Main js files -->

<script src="<?php echo asset_url();?>assets/js/loader.js"></script>
<script src="<?php echo asset_url();?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo asset_url();?>assets/js/app.js"></script>
<script src="<?php echo asset_url();?>assets/js/custom.js"></script>
<script src="<?php echo asset_url();?>plugins/fullcalendar/moment.min.js"></script>
<script src="<?php echo asset_url();?>plugins/flatpickr/flatpickr.js"></script>
<script src="<?php echo asset_url();?>plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="<?php echo asset_url();?>plugins/fullcalendar/custom-fullcalendar.advance.js"></script>
<script src="<?php echo asset_url();?>plugins/apex/apexcharts.min.js"></script>
<script src="<?php echo asset_url();?>assets/js/dashboard/dash_1.js"></script>
<script src="<?php echo asset_url();?>plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo asset_url();?>plugins/noUiSlider/nouislider.min.js"></script>
<script src="<?php echo asset_url();?>plugins/flatpickr/custom-flatpickr.js"></script>
<script src="<?php echo asset_url();?>plugins/noUiSlider/custom-nouiSlider.js"></script>
<script src="<?php echo asset_url();?>plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js"></script>
<script src="<?php echo asset_url();?>plugins/highlight/highlight.pack.js"></script>
<script src="<?php echo asset_url();?>plugins/sweetalerts/sweetalert2.min.js"></script>
<script src="<?php echo asset_url();?>plugins/sweetalerts/custom-sweetalert.js"></script>
<script src="<?php echo asset_url();?>plugins/sweetalerts/promise-polyfill.js"></script>
<script src="<?php echo asset_url();?>assets/js/ie11fix/fn.fix-padStart.js"></script>
<script src="<?php echo asset_url();?>plugins/editors/quill/quill.js"></script>
<script src="<?php echo asset_url();?>plugins/notification/snackbar/snackbar.min.js"></script>
<script src="<?php echo asset_url();?>assets/js/apps/custom-mailbox.js"></script>
<script src="<?php echo asset_url();?>plugins/toastr/toastr.min.js"></script>
<script src="<?php echo asset_url();?>plugins/table/datatable/datatables.js"></script>
<script src="<?php echo asset_url(); ?>plugins/dropzone/dropzone.js"></script>
<script src="<?php echo asset_url();?>plugins/bootstrapValidator/formValidation.min.js"></script>
<script src="<?php echo asset_url();?>plugins/bootstrapValidator/framework/bootstrap.min.js"></script>
<script src="<?php echo asset_url(); ?>plugins/idle-timer/idle-timer.min.js"></script>


<script>

    $(document).ready(function()
    {
        // Set idle time
        $(document).idleTimer(900000); // SYSTME WILL LOCK IDELE AFTER 15 MIN

    }); // end of the doc.ready

    $(document).on("idle.idleTimer", function(event, elem, obj)
    {
        window.location.href = "<?php echo base_url('Passenger/lockscreen') ?>";        
    });

     //SHOW TOASTER NOTIFICATIONS
    function load_toaster(status,title,msg)
    {
        switch (status)
        {
            case 's':toastr.success(msg,title);
            break;
            case 'w':toastr.warning(msg,title);
            break;
            case 'i':toastr.info(msg,title);
            break;
            case 'e':toastr.error(msg,title);
        }
    }

    // OVERRIDE THE DEFAULT ALERT
    (function(proxied)
    {
        window.alert = function() 
        {
            $('#page-load-spinner').css("display", "none");
            $('#page-load-spinner').toggleClass('sk-loading');
            // Using Proxy Design Pattern to override the default alert
            return swal({
                title   : "Error Occured !",
                text    : "<hr><h3>Please Check your Data</h3><p>If your data is correct and this message still apears please try <b>reloading</b> the Page, If the problem still persists please contact system administrator.</p><hr><h3>Thank You</h3>",
                type    : "error",
                showCancelButton    : false,
                confirmButtonColor  : "#DD6B55",
                confirmButtonText   : "OK",
                closeOnConfirm      : true,
                closeOnCancel       : false,
                html    : true
            });
          }
    })(window.alert);      

    $(document).ready(function() {
        App.init();
    });

    function fetchPage(ajax_url,e)
    {
        $.ajax(
        {
            type     : 'get',
            url      : '<?php echo base_url()?>' + ajax_url,
            dataType : 'html',
            async    : false,
            success  : function(ajax_html)
            {
                $('.ajax_main_content').empty().append(ajax_html);
                $('html,body').animate({scrollTop: 0}, 'slow');
                if(e != undefined)
                {
                    $('.nav-second-level li').removeClass('active');
                    $(e).parent().addClass('active');
                }

            },
            error : function(){alert('Cannot find the page you requested. Please Try Again')}
        });
    }

</script>


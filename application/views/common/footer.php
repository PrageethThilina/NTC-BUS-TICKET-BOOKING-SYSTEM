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


<script>
$(document).ready(function() {
    App.init();
});

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
</script>


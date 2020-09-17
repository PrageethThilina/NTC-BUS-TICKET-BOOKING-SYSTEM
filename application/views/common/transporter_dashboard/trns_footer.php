    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo asset_url();?>assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo asset_url();?>bootstrap/js/popper.min.js"></script>
    <script src="<?php echo asset_url();?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo asset_url();?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo asset_url();?>assets/js/scrollspyNav.js"></script>
    <script src="<?php echo asset_url();?>assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?php echo asset_url();?>assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN DASHBOARD PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo asset_url();?>plugins/apex/apexcharts.min.js"></script>
    <script src="<?php echo asset_url();?>assets/js/dashboard/dash_1.js"></script>
    <script src="<?php echo asset_url();?>assets/js/dashboard/dash_2.js"></script>
    <!-- BEGIN DASHBOARD PLUGINS/CUSTOM SCRIPTS -->


    <!-- BEGIN CREATE BUS PLUGINS -->
    <script src="<?php echo asset_url();?>plugins/notification/snackbar/snackbar.min.js"></script>
    <script src="<?php echo asset_url();?>assets/js/components/notification/custom-snackbar.js"></script>
    <script src="<?php echo asset_url();?>plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?php echo asset_url();?>plugins/file-upload/file-upload-with-preview.min.js"></script>
    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
        //third upload
        var thirdUpload = new FileUploadWithPreview('myThirdImage')
    </script>
    <!-- END CREATE BUS PLUGINS -->

    <!-- BEGIN REPORTS SCRIPTS -->

    <!-- END REPORTS SCRIPTS -->

    <script type="text/javascript">
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

	</body>
</html>



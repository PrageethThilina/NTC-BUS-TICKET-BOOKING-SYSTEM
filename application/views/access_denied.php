<?php $this->load->view("common/header"); ?>
  <div class="error404 text-center"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mr-auto mt-5 text-md-left text-center">
                <a href="index.html" class="ml-md-5">
                    <img alt="image-404" src="<?php echo asset_url();?>assets/img/90x90.jpg" class="theme-logo">
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid error-content">
        <div class="">
            <h1 class="error-number">404</h1>
            <p class="mini-text">Access Denied!</p>
            <p class="error-text mb-4 mt-1">You do not have the required privileges to perform this action. Please contact your system administrator for more information.</p>
            <a href="index.html" class="btn btn-primary mt-5">Go Back</a>
        </div>
    </div>  
  </div>

<?php $this->load->view('common/footer');?>

<!-- check whether logged in -->
<?php
    if (!($this->session->userdata('logged_in'))){

            redirect(base_url().'Passenger/login');

    }
?>

<!-- CONTENT AREA -->

<div class="row layout-spacing">

    <!-- Content -->
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 layout-top-spacing mx-auto">

        <div class="user-profile layout-spacing">
            <div class="widget-content widget-content-area">
                <div class="d-flex justify-content-between">
                    <h3 class="">Profile Details</h3>
                    <a onclick="fetchPage('Passenger/profile_settings')" class="mt-2 edit-profile"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-edit-3">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg></a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 mx-auto" style="margin-bottom: 40px;">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div id="profile_preview" style="margin-bottom: 20px;">
                                <img alt="User Pic"
                                    src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg"
                                    type="button" data-toggle="modal" style="border-radious:50%"
                                    id="profile_img_btn">
                                <div id="profile_preview">
                                    <img src="<?php echo asset_url();?>assets/img/user1.png" style="border-radious:50%" class="img img-fluid"
                                        alt="profile">
                                </div>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <h4><span id="ntc_psg_fname" class="text-center"
                                        style="margin-right: 5px;color:blue;"></span><span class="text-center"
                                        style="color:blue;" id="ntc_psg_lname"></span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-info-list">
                    <div class="">
                        <ul class="contacts-block list-unstyled">
                            <li class="contacts-block__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg><span id="ntc_psg_nic"></span>
                            </li>
                            <li class="contacts-block__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg><span id="ntc_psg_address"></span>
                            </li>
                            <li class="contacts-block__item" style="width: 400px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-mail">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg><span id="ntc_psg_email"></span>
                            </li>
                            <li class="contacts-block__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-phone">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg><span id="ntc_psg_phone"></span>
                            </li>
                            <li class="contacts-block__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-calendar">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg><span id="ntc_psg_registered_at"></span>
                            </li>
                            <li class="contacts-block__item">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <div class="social-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-facebook">
                                                <path
                                                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                </path>
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="social-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-twitter">
                                                <path
                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                </path>
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="social-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-linkedin">
                                                <path
                                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                </path>
                                                <rect x="2" y="9" width="4" height="12"></rect>
                                                <circle cx="4" cy="4" r="2"></circle>
                                            </svg>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="<?php echo asset_url(); ?>plugins/dropify/dropify.min.js"></script>
<script src="<?php echo asset_url(); ?>plugins/blockui/jquery.blockUI.min.js"></script>
<script src="<?php echo asset_url(); ?>assets/js/users/account-settings.js"></script>
<script>
$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Passenger_Controllers/Passenger_Login/fetch_passenger_details'); ?>',
        dataType: 'json',
        error: function() {
            alert('An Error Occurred. Please Try Again Later!')
        },
        success: function(data) {

            $('#ntc_psg_fname').html(data['profile_details']['ntc_psg_fname']);
            $('#ntc_psg_lname').html(data['profile_details']['ntc_psg_lname']);
            $('#ntc_psg_username').html(data['profile_details']['ntc_psg_username']);
            $('#ntc_psg_email').html(data['profile_details']['ntc_psg_email']);
            $('#ntc_psg_nic').html(data['profile_details']['ntc_psg_nic']);
            $('#ntc_psg_phone').html(data['profile_details']['ntc_psg_phone']);
            $('#ntc_psg_address').html(data['profile_details']['ntc_psg_address']);
            $('#ntc_psg_registered_at').html(data['profile_details']['ntc_psg_registered_at']);
            if (data['profile_details']['ntc_psg_avatar'] != '' && data['profile_details'][
                    'ntc_psg_avatar'
                ] != null) {
                $('#profile_img_btn').hide();
                var image_preview = '';

                image_preview = '<div class="col-sm-8 uploaded_images"><img src="' +
                    '<?php echo base_url();?>' + data[
                        'profile_details']['ntc_psg_avatar'] +
                    '" class="profile_logo_img" style="width:150px; height:150px;border-radious:50%" type="button" data-toggle="modal" id="profile_img_btn" data-target="#profile_upload_modal"></br></div>';

                $('#profile_preview').html(image_preview);
            } else {
                $('.uploaded_images').remove();
                $('#profile_img_btn').show();
            }

        }
    });
});
</script>
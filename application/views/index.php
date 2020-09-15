<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NTC Sri Lanka</title>


    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?php echo asset_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo asset_url();?>assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset_url();?>assets/css/homepage_custom_style.css" rel="stylesheet" type="text/css">


</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top justify-content-between">

        <a class="navbar-brand" href="<?php echo base_url() ?>index">
            <img src="<?php echo asset_url();?>assets/img/logo.jpg" width="30" height="30">
            NTC Sri Lanka
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Services <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Partners <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Payment Options <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- carousal -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="4000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 500px">
                <img class="d-block w-100" src="<?php echo asset_url();?>assets/img/img3.1.jpg" alt="First slide"
                    style="height:500px">
                <div class="carousel-caption d-none d-sm-block">
                    <h3>To Develop an Effective Transportation Network!</h3>
                    <h5>Ensure a quality, cost effective and safe integrated transport system and services that will
                        provide for
                        the socio-economic development across the country and the different mobility requirements of
                        every
                        individual and corporate citizen of Sri Lanka.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo asset_url();?>assets/img/img3.2.jpg" alt="Second slide"
                    style="height:500px">
                <div class="carousel-caption d-none d-sm-block">
                    <h3>To Develop an Effective Transportation Network!</h3>
                    <h5>Ensure a quality, cost effective and safe integrated transport system and services that will
                        provide for
                        the socio-economic development across the country and the different mobility requirements of
                        every
                        individual and corporate citizen of Sri Lanka.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo asset_url();?>assets/img/img3.1.jpg" alt="Third slide"
                    style="height:500px">
                <div class="carousel-caption d-none d-sm-block">
                    <h3>To Develop an Effective Transportation Network!</h3>
                    <h5>Ensure a quality, cost effective and safe integrated transport system and services that will
                        provide for
                        the socio-economic development across the country and the different mobility requirements of
                        every
                        individual and corporate citizen of Sri Lanka.</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container container1">
        <div class="row">
            <div class="col-md-8">
                <h3 class="text-center">Facilities</h3>
                <hr>
                <div class="row">
                    <div class="col-md-4" style="margin-right: 60px;">
                        <div class="card component-card_1">
                            <div class="card-body">
                                <div>
                                    <i class="fa fa-bus" style="margin-left: 40%;font-size: 50px;"></i>
                                </div>
                                <h5 class="card-title">All Travel Partners in one Platform</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-right: 60px;">
                        <div class="card component-card_1">
                            <div class="card-body">
                                <div>
                                    <i class="fa fa-calendar" style="margin-left: 40%;font-size: 50px;"></i>
                                </div>
                                <h5 class="card-title">100% successfull live bookings</h5>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-4" style="margin-right: 60px;">
                        <div class="card component-card_1">
                            <div class="card-body">
                                <div>
                                    <i class="fa fa-shield" style="margin-left: 40%;font-size: 50px;"></i>
                                </div>
                                <h5 class="card-title">Payment Security</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-right: 60px;">
                        <div class="card component-card_1">
                            <div class="card-body">
                                <div>
                                    <i class="fa fa-clock-o" style="margin-left: 40%;font-size: 50px;"></i>
                                </div>
                                <h5 class="card-title">24hrs Customer care</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card component-card_1" style="border: 1px solid rgb(87, 25, 25);">
                    <div class="card-header" style="background: rgb(148, 41, 41);color: white;">
                        Quick Contact
                    </div>
                    <div class="card-body">
                        <i class="fa fa-phone" style="display: flex;margin-right: 20px;"><span
                                style="margin-left: 20px;">
                                <h6>Public Complaints 1955</h6>
                            </span></i>
                        <i class="fa fa-phone" style="display: flex;margin-right: 20px;"><span
                                style="margin-left: 20px;">
                                <h6>Colombo Private Bus Stand 0112333232</h6>
                            </span></i>
                        <i class="fa fa-phone" style="display: flex;margin-right: 20px;"><span
                                style="margin-left: 20px;">
                                <h6>General Line 0112587372</h6>
                            </span></i>

            <a class="btn btn-primary" href="<?php echo base_url() ?>Passenger/login">Online Seat Booking</a>
            <a class="btn btn-primary" href="<?php echo base_url() ?>Serviceprovider/login">Service Provider</a>


                        <div>
                            <i class="fa fa-phone" style="font-size: 50px;">1919 Ask</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="col">
                <h3 class="text-center" style="margin-bottom: 30px;">Partnered Bus Service Providers</h3>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-2">
                        <img src="<?php echo asset_url();?>assets/img/s1.png" width="100px" height="100px" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo asset_url();?>assets/img/s2.png" width="100px" height="100px" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo asset_url();?>assets/img/s3.png" width="100px" height="100px" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo asset_url();?>assets/img/s4.png" width="100px" height="100px" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo asset_url();?>assets/img/s5.png" width="100px" height="100px" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo asset_url();?>assets/img/s6.png" width="100px" height="100px" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="<?php echo asset_url();?>assets/img/s7.png" width="100px" height="100px" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo asset_url();?>assets/img/s8.png" width="100px" height="100px" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo asset_url();?>assets/img/s9.png" width="100px" height="100px" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo asset_url();?>assets/img/s10.png" width="100px" height="100px" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo asset_url();?>assets/img/s11.png" width="100px" height="100px" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo asset_url();?>assets/img/s12.png" width="100px" height="100px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer links-->
    <footer class="page-footer font-small unique-color-dark">
        <div class="container text-center text-md-left mt-5">
            <div class="row mt-3" data-aos="fade-right">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">National Transport Commission</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Ensure a quality, cost effective and safe integrated transport system and services that will
                        provide for
                        the socio-economic development across the country and the different mobility requirements of
                        every
                        individual and corporate citizen of Sri Lanka.</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a routerLink="/register-blood-campaign">Gami Sariya</a>
                    </p>
                    <p>
                        <a routerLink="/anual-reports">Sisu Sariya</a>
                    </p>
                    <p>
                        <a routerLink="/who-can-donate-blood">Nisi Sariya</a>
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a routerLink="/donor-login">Online Seat Reservation</a>
                    </p>
                    <p>
                        <a routerLink="/who-can-donate-blood">Time Table</a>
                    </p>
                    <p>
                        <a routerLink="/donee-login">Public Complaints</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i>National
                        Transport Commision
                        No 241
                        Park Road
                        Colombo 05
                        Sri Lanka.
                    </p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i>info@ntc.gov.lk
                    </p>
                    <p>
                        <i class="fa fa-phone mr-3"></i>+94 011-2587372
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer links-->

    <!-- footer -->
    <section class="foot">
        <div class="container-fluid">
            <h3 class="contact-topic">Contact Us</h3>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 20px;" data-aos="flip-left">
                    <div class="">
                        <p class="p1 text-center">Give Us Feedback</p>
                        <form method="post" name="sentMessage" id="contactForm">
                            <div class="form-group">
                                <label class="contact-p1">Full Name:</label>
                                <input type="text" class="form-control" name="name" id="name" required
                                    style="background-color: transparent;">
                            </div>
                            <div class="form-group">
                                <label class="contact-p1">Phone Number:</label>
                                <input type="tel" class="form-control" name="phone" id="phone" required
                                    style="background-color: transparent;">
                            </div>
                            <div class="form-group">
                                <label class="contact-p1">Email Address:</label>
                                <input type="email" class="form-control" name="email" id="email" required
                                    style="background-color: transparent;">
                            </div>
                            <input type="submit" name="sub" value="Send Now" class="btn btn-primary">
                        </form>
                    </div>
                    <div>
                        <ul class="list-unstyled list-inline text-center">
                            <li class="list-inline-item"><a href="https://www.facebook.com/"
                                    class="btn-floating btn-gplus mx-1"> <i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/"
                                    class="btn-floating btn-gplus mx-1"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://plus.google.com/u/0/"
                                    class="btn-floating btn-gplus mx-1"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6" data-aos="flip-right" style="padding-left: 50px;">
                    <p class="contact-para"><strong class="contact-strong">Phone :</strong><span
                            style="margin-left: 65px;">General : +94
                            011-2587372<br>
                        </span></p><br>
                    <p class="contact-para"><strong class="contact-strong">Email : </strong><a
                            href="mailto:name@example.com"><span
                                style="color:#fff;margin-left: 65px;">info@ntc.gov.lk</span></a></p>
                    <p class="contact-para"><strong class="contact-strong">Address : </strong><span
                            class="abcde">National
                            Transport Commision<br>
                            No 241<br>Park Road<br>Colombo 05<br>Sri Lanka.</span></p>
                    <iframe class="map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0023754648614!2d79.87196531415117!3d6.890317520703314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bd2d1727b53%3A0x4f93a7a5b4f30892!2sNational%20Transport%20Commission!5e0!3m2!1sen!2slk!4v1598938842841!5m2!1sen!2slk"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="footer-copyright text-center py-3 copy">
            <p>Copyright © 2020 NTC - Sri Lanka. All Rights Reserved <a href="index.html">National Transport
                    Commision</a> </p>
        </div>
    </section>

<!-- Main js files -->
<script src="<?php echo asset_url();?>assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="<?php echo asset_url();?>bootstrap/js/popper.min.js"></script>
<script src="<?php echo asset_url();?>bootstrap/js/bootstrap.js"></script>
<!-- Main js files -->


</body>

</html>
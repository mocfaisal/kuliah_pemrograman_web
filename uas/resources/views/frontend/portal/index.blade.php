<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="{{ asset('assets/frontend') }}/portal/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/portal/css/grid.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/portal/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/portal/css/search.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/portal/css/owl-carousel.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/portal/css/rd-mailform.css"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/portal/css/touch-touch.css"/>

    <link href='//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic'
    rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/portal/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/portal/css/material-icons.css">


    <script src="{{ asset('assets/frontend') }}/portal/js/jquery.js"></script>
    <script src="{{ asset('assets/frontend') }}/portal/js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
        <html class="lt-ie9">
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
                <img src="{{ asset('assets/frontend') }}/portal/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
            </a>
        </div>
        <script src="js/html5shiv.js"></script>
        <![endif]-->

        <script src='{{ asset('assets/frontend') }}/portal/js/device.min.js'></script>
    </head>

    <body>

        <div class="page text-center text-md-left bg-default-variant-1">
            <!--========================================================
                HEADER
                =========================================================-->
                <header class="bg-primary-variant-1">
                    <section>
                        <div id="stuck_container" class="stuck_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 inset-1">
                                        <div class="brand">
                                            <h1 class="brand_name text-sm-left">
                                                <a href="#">{{ config('app.name') }}</a>
                                            </h1>
                                        </div>
                                        <ul class="inline-list pull-sm-right">
                                            <li><a href="#" class="icon icon-sm icon-default fa-facebook"></a></li>
                                            <li><a href="#" class="icon icon-sm icon-default fa-linkedin"></a></li>
                                            <li><a href="#" class="icon icon-sm icon-default fa-skype"></a></li>
                                        </ul>
                                    </div>
                                <div class="col-md-1 col-sm-1 inset-1 pull-sm-right">
                                    <a href="{{route('auth.login')}}" class="icon icon-sm icon-default fa fa-sign-in" title="Login">
                                       </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <section class="relative well-1">
                    <div class="container absolute">
                        <div class="owl-carousel text-sm-left">
                            <div class="item">
                                <div class="col-sm-7">
                                    <div class="offset-1 inset-2 bg-primary-variant-2">
                                        <h2 class="offset-2">For all your pharmaceutical needs</h2>

                                        <h3 class="offset-2 inset-3">Special prices for our online buyers</h3>
                                        <a href="#" class="btn btn-md btn-secondary">
                                            <span class="btn_body">Click here</span>
                                            <span class="btn_overlay">Learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-7">
                                        <div class="offset-1 inset-2 bg-primary-variant-2">
                                            <h2 class="offset-2">Your reliable online pharmacy</h2>

                                            <h3 class="offset-2 inset-3">Only best quality medications</h3>
                                            <a href="#" class="btn btn-md btn-secondary">
                                                <span class="btn_body">Click here</span>
                                                <span class="btn_overlay">Learn more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-sm-7">
                                            <div class="offset-1 inset-2 bg-primary-variant-2">
                                                <h2 class="offset-2">Offering compounded medications</h2>

                                                <h3 class="offset-2 inset-3">Ask our pharmacist for advice</h3>
                                                <a href="#" class="btn btn-md btn-secondary">
                                                    <span class="btn_body">Click here</span>
                                                    <span class="btn_overlay">Learn more</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </header>
                        <!--========================================================
                            CONTENT
                            =========================================================-->
                            <main>
                                <section class="relative well-2 bg-default">
                                    <div class="container absolute-md-variant-1">
                                        <div class="row">
                                            <div class="col-md-5 pull-md-right wow fadeInRight">
                                                <div class="img-wrapper">
                                                    <a class="thumb" data-gallery="1" href="{{ asset('assets/frontend') }}/portal/images/page1_img01_original.jpg">
                                                        <img src="{{ asset('assets/frontend') }}/portal/images/page1_img01.jpg" alt=""/>
                                                        <span class="thumb_overlay"></span>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="col-md-7 pull-md-left inset-4">
                                                <h4>Our mission</h4>

                                                <p>It is our duty and responsibility to acquire knowledge and training with
                                                    regarding health and medication and to dedicate these achievements to the betterment of
                                                    everyone’s health and life regardless of the diversity of identity and origin.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </section>

                                <section class="relative well-3">
                                    <div class="container absolute-md-variant-2">
                                        <div class="row flow-offset-1">
                                            <div class="col-md-5 wow fadeInLeft">
                                                <a class="thumb" data-gallery="2" href="{{ asset('assets/frontend') }}/portal/images/page1_img02_original.jpg">
                                                    <img src="{{ asset('assets/frontend') }}/portal/images/page1_img02.jpg" alt=""/>
                                                    <span class="thumb_overlay"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-7 inset-5">
                                                <h4>Insurance and<br class="br-lg-visible">
                                                    prescription savings</h4>

                                                    <p>Pharmacy accepts a wide variety of insurance plans and offers discount programs that may help
                                                        you save money on your medications
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section class="relative bg-primary-variant-1-md-max overflow-hidden">
                                        <div class="container relative well-4 inset-6 bg-wrap">
                                            <h4 class="text-lg-left">Our services</h4>
                                            <div class="col-md-11 offset-7">
                                                <div class="row bg-variants">
                                                    <div class="col-md-4 bg-primary-variant-2 inset-7">
                                                        <h6>Health information</h6>
                                                        <p>We have the online and in-store educational resources and money-saving programs you need
                                                            to take control of your family's health.</p>
                                                        </div>

                                                        <div class="col-md-4 bg-primary-variant-3 inset-7">
                                                            <h6>Speak with a pharmacist</h6>
                                                            <p>Do you have questions about your medications? Get convenient access to answers online via
                                                                phone, email or online chat.</p>
                                                            </div>

                                                            <div class="col-md-4 bg-primary-variant-4 inset-7">
                                                                <h6>Learn about drug disposal</h6>
                                                                <p>Find out how to properly dispose of unused medicines according to the Food and Drug
                                                                    Administration (FDA).</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </section>

                                                <section class="well-5">
                                                    <div class="container">
                                                        <div class="row flow-offset-1">
                                                            <div class="col-md-5 pull-md-right offset-4 wow fadeInRight">
                                                                <a class="thumb" data-gallery="3" href="{{ asset('assets/frontend') }}/portal/images/page1_img03_original.jpg">
                                                                    <img src="{{ asset('assets/frontend') }}/portal/images/page1_img03.jpg" alt=""/>
                                                                    <span class="thumb_overlay"></span>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-offset-1 col-md-5 pull-md-left inset-8">
                                                                <h4>Learn more about our pharmacists</h4>
                                                                <p>All Pharmacy pharmacists are here to answer your questions, provide advice, and recommend the
                                                                    right prescription and OTC products for your condition
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="text-center text-lg-left bg-primary-variant-1-md-max">
                                                    <div class="container well-6 relative bg-wrap">
                                                        <div class="row flow-offset-1">
                                                            <div class="col-lg-6">
                                                                <h5 class="inset-9">Join the newsletter and stay up to date with us</h5>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <!-- RD Mailform -->
                                                                <form class='rd-mailform' method="post" action="bat/rd-mailform.php">
                                                                    <!-- RD Mailform Type -->
                                                                    <input type="hidden" name="form-type" value="subscribe"/>
                                                                    <!-- END RD Mailform Type -->
                                                                    <fieldset>
                                                                        <label data-add-placeholder class="label-type-2 pull-sm-left">
                                                                            <input type="text"
                                                                            name="email"
                                                                            placeholder="Your e-mail"
                                                                            data-constraints="@NotEmpty @Email"/>
                                                                        </label>

                                                                        <div class="mfControls btn-group">
                                                                            <button class="btn btn-md-variant-2 btn-secondary offset-6" type="submit">Subscribe
                                                                            </button>
                                                                        </div>

                                                                        <div class="mfInfo"></div>
                                                                    </fieldset>
                                                                </form>
                                                                <!-- END RD Mailform -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                            </main>

                                            <!--========================================================
                                                FOOTER
                                                =========================================================-->
                                                <footer class="bg-footer">
                                                    <div class="container">
                                                        <div class="row">

                                                            <div class="col-md-6 well-7 inset-10 pull-md-right">
                                                                <h4>Contacts</h4>
                                                                <!-- RD Mailform -->
                                                                <form class='rd-mailform' method="post" action="bat/rd-mailform.php">
                                                                    <!-- RD Mailform Type -->
                                                                    <input type="hidden" name="form-type" value="contact"/>
                                                                    <!-- END RD Mailform Type -->
                                                                    <fieldset>

                                                                        <label data-add-placeholder>
                                                                            <input type="text"
                                                                            name="name"
                                                                            placeholder="Name"
                                                                            data-constraints="@NotEmpty @LettersOnly"/>
                                                                        </label>

                                                                        <label data-add-placeholder>
                                                                            <input type="text"
                                                                            name="email"
                                                                            placeholder="E-mail"
                                                                            data-constraints="@NotEmpty @Email"/>
                                                                        </label>

                                                                        <label data-add-placeholder>
                                                                            <textarea name="message" placeholder="Message"
                                                                            data-constraints="@NotEmpty"></textarea>
                                                                        </label>

                                                                        <div class="mfControls btn-group">
                                                                            <button class="btn btn-md-variant-3 btn-secondary" type="submit">Send</button>
                                                                        </div>

                                                                        <div class="mfInfo"></div>
                                                                    </fieldset>
                                                                </form>
                                                                <!-- END RD Mailform -->
                                                            </div>

                                                            <div class="col-md-6 well-7 pull-md-left">
                                                                <div class="brand">
                                                                    <h1 class="brand_name">
                                                                        <a href="./">Pharmacy</a>
                                                                    </h1>
                                                                </div>
                                                                <address>
                                                                    9870 St Mary Place,<br class="br-lg-visible">
                                                                    London, DC 45 Fr 45.
                                                                </address>
                                                                <dl>
                                                                    <dt>E-mail:</dt>
                                                                    <dd><a href='mailto:#'>mail@demolink.org</a></dd>
                                                                </dl>
                                                                <dl class="contact-info">
                                                                    <dt>Tel:</dt>
                                                                    <dd><a href='callto:#'>800-2345-6789</a></dd>
                                                                </dl>
                                                                <ul class="inline-list">
                                                                    <li><a href="#" class="icon icon-sm icon-default fa-facebook"></a></li>
                                                                    <li><a href="#" class="icon icon-sm icon-default fa-linkedin"></a></li>
                                                                    <li><a href="#" class="icon icon-sm icon-default fa-skype"></a></li>
                                                                </ul>
                                                                <p>
                                                                    &copy; <span id="copyright-year"></span>
                                                                    All Rights Reserved.
                                                                </p>

                                                                <!-- {%FOOTER_LINK} -->
                                                            </div>

                                                        </div>
                                                    </div>

                                                </footer>
                                            </div>

                                            <script>
                                             var assets_basePath = "{{ asset('assets/frontend') }}/portal/";
                                            </script>

                                            <script src="{{ asset('assets/frontend') }}/portal/js/script.js"></script>

                                            <!-- Coded by Iceberg -->

                                        </body>
                                        </html>

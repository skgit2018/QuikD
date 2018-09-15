<!DOCTYPE html>
<!--[if IE 8]> 
<html lang="en" class="ie8">
   <![endif]-->
   <!--[if IE 9]> 
   <html lang="en" class="ie9">
      <![endif]-->
      <!--[if !IE]><!--> 
      <html lang="en">
         <!--<![endif]-->
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/feature_header_v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:39:25 GMT -->
         <head>
            <title>Quikdrivers</title>
            <!-- Meta -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <!-- Favicon -->
            <link rel="shortcut icon" href="favicon.ico">
            <!-- Web Fonts -->
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
            <!-- CSS Global Compulsory -->
            <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <!-- CSS Header and Footer -->
            <link rel="stylesheet" href="assets/css/headers/header-v1.css">
            <link rel="stylesheet" href="assets/css/footers/footer-v1.css">
            <!-- CSS Implementing Plugins -->
            <link rel="stylesheet" href="assets/plugins/animate.css">
            <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
            <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css">
            <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
            <link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
            <!-- CSS Theme -->
            <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
            <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
            <!-- CSS Customization -->
            <link rel="stylesheet" href="assets/css/custom.css">
            <!--CSS PageStyle-->
            <link rel="stylesheet" href="assets/css/pages/page_log_reg_v4.css">
         </head>
         <body>
            <div class="wrapper">
               <!--=== Header v1 ===-->
               @include('inc.menu')
               <hr>
               <!--=== End Header v1 ===-->
               <section id="sign">
                  <!--=== Content Part ===-->
                  <div class="container-fluid">
                     <div class="row equal-height-columns">
                        <div class="col-md-6 col-sm-6 hidden-xs image-block equal-height-column">
                           <img src="assets/img/bg/img6.jpg">
                        </div>
                        <div class="col-md-6 col-sm-6 form-block equal-height-column">
                        @include('inc.messages')
                           <div class="reg-block">
                            
                           {!! Form::open(['url' => '/signup/create', 'method' =>'POST']) !!}
                              <h2 class="margin-bottom-30">Create new account</h2>
                              <div class="input-group margin-bottom-20">
                                 <span class="input-group-addon rounded-left"><i class="icon-pencil color-green"></i></span>
                                 <input type="text" class="form-control rounded-right"pattern="[a-z]{1,15}" name="reg_name" placeholder=" Name" required>
                              </div>
                              <div class="input-group margin-bottom-20">
                                 <span class="input-group-addon rounded-left"><i class="icon-envelope color-green"></i></span>
                                 <input type="email" class="form-control rounded-right" pattern=".+@gmail.com" size="30" required name="reg_email"placeholder="Your email">
                              </div>
                              <div class="input-group margin-bottom-30">
                                 <span class="input-group-addon rounded-left"><i class="icon-lock color-green"></i></span>
                                 <input type="password" class="form-control rounded-right" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required name="reg_password" placeholder="Password">
                              </div>
                              <div class="input-group margin-bottom-30">
                                 <span class="input-group-addon rounded-left"><i class="icon-lock color-green"></i></span>
                                 <input type="password" class="form-control rounded-right"name="reg_cpassword"  placeholder=" Confirm Password">
                              </div>
                              <div class="input-group margin-bottom-30">
                                 <span class="input-group-addon rounded-left"><i class=" icon-screen-smartphone color-green"></i></span>
                                 <input type="Mobile Number" pattern="[6789][0-9]{9}" class="form-control rounded-right"name="reg_mobile" placeholder=" Mobile Number">
                              </div>
                              <div class="up">
                                 <h4>Sign up As</h4>
                              </div>
                              <div class="inline-group">
                                    <ul>
                                         <li> <label class="radio"><input type="radio" name="reg_account_type" value="driver" checked><i class="rounded-x"></i>Driver</label></li>
                                         <li class="ra"> <label class="radio"><input type="radio" name="reg_account_type" value="user"><i class="rounded-x"></i>User</label></li>
                                    </ul>
                                      </div>
                           <div class="checkbox margin-bottom-30">
                              <label>
                              <input type="checkbox"> I agree to the <a href="">terms &amp; conditions</a>
                              </label>
                           </div>
                           <button type="submit" class="btn-u btn-block rounded">Sign Up</button>
                        </div>
                     </div>
                     {!! Form::close() !!}
                  </div>
            </div>
            <!--/container-->
            <!--=== End Content Part ===-->
            </section>
            <hr>
        @include('inc.footer')
            </div>
            <!--/wrapper-->
            <!-- JS Global Compulsory -->
            <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
            <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
            <!-- JS Implementing Plugins -->
            <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
            <script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
            <script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
            <script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
            <script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
            <!--Slider JS -->
            <script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
            <script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
            <script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
            <script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
            <!-- JS Customization -->
            <script type="text/javascript" src="assets/js/custom.js"></script>
            <!-- JS Page Level -->
            <script type="text/javascript" src="assets/js/app.js"></script>
            <script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script>
            <script type="text/javascript" src="assets/js/plugins/parallax-slider.js"></script>
            <script type="text/javascript">
               jQuery(document).ready(function() {
                   App.init();
                OwlCarousel.initOwlCarousel();
                ParallaxSlider.initParallaxSlider();
                   
               });
            </script>
            <!--[if lt IE 9]>
            <script src="assets/plugins/respond.js"></script>
            <script src="assets/plugins/html5shiv.js"></script>
            <script src="assets/plugins/placeholder-IE-fixes.js"></script>
            <![endif]-->
         </body>
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/feature_header_v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:39:25 GMT -->
      </html>
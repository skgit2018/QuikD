

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
            <link rel="stylesheet" href="assets/plugins/brand-buttons/brand-buttons.css">
            <!-- CSS Page-->
            <link rel="stylesheet" href="assets/css/pages/page_log_reg_v4.css">
            <link rel="stylesheet" href="assets/css/theme-colors/blue.css">
            <!-- CSS Theme -->
            <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
            <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
            <!-- CSS Customization -->
            <link rel="stylesheet" href="assets/css/custom.css">
         </head>
         <body>
            <div class="wrapper">
               <!--=== Header v1 ===-->
               @include('inc.menu')
                  <!-- End Navbar -->
               </div>
               <section id="login-form">
                  <div class="container-fluid">
                     <div class="row equal-height-columns">
                        <div class="col-md-6 col-sm-6 hidden-xs image-block equal-height-column">
                           <img src="assets/img/bg/img11.jpg" >
                        </div>
                        <div class="col-md-6 col-sm-6 form-block equal-height-column">
                           
                           <h2 class="margin-bottom-30">Login To Your Account</h2>
                           @include('inc.messages')

                           {!! Form::open(['url' => '/signin/user', 'method' => 'post']) !!}
                              <div class="login-block">
                                 <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon rounded-left"><i class="icon-envelope color-blue"></i></span>
                                    <input type="text" class="form-control rounded-right"name="email" placeholder="Email / Mobile">
                                 </div>
                                 <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon rounded-left"><i class="icon-lock color-blue"></i></span>
                                    <input type="password" name="password" class="form-control rounded-right" placeholder="Password">
                                 </div>
                                 <div class="checkbox">
                                    <ul class="list-inline">
                                       <li>
                                          <label>
                                          <input type="checkbox"> Remember me
                                          </label>
                                       </li>
                                       <li class="pull-right">
                                          <a href="#">Forgot password?</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="row margin-bottom-70">
                                    <div class="col-md-12">
                                       <button type="submit" name="login" class="btn-u btn-u-blue btn-block rounded">Sign In</button>
                                    </div>
                                 </div>
                                 <div class="social-login text-center">
                                    <div class="or rounded-x">Or</div>
                                    <ul class="list-inline margin-bottom-20">
                                       <li>
                                          <button class="btn rounded btn-lg btn-facebook">
                                          <i class="fa fa-facebook"></i> Facebook Sign in
                                          </button>
                                       </li>
                                       <li>
                                          <button class="btn rounded btn-lg btn-twitter">
                                          <i class="fa fa-twitter"></i> Twitter Sign in
                                          </button>
                                       </li>
                                    </ul>
                                    <p>Don't have an account? <a href='/signup'>Create New</a></p>
                                 </div>
                              </div>
                              {!! Form::close() !!}
                        </div>
                     </div>
                  </div>
                  <!--/container-->
                  <!--=== End Content Part ===-->
               </section>
              @include('inc.footer')
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
            <script src="assets/js/custom.js"></script>t>
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
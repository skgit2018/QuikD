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
            <link rel="stylesheet" href="assets/css/pages/page_log_reg_v2.css">
         </head>
         <body>
            <div class="wrapper">
               <!--=== Header v1 ===-->
             <!--=== Header v1 ===-->
             <?php echo $__env->make('inc.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
               <hr>
               <!--=== End Header v1 ===-->

               <section id="otp">

   <!--=== Content Part ===-->
   <div class="container">
      <!--Reg Block-->
      <div class="reg-block">
          <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <form action="/checkotp" method="post">
         <div class="reg-block-header">
            <h2>Verify with OTP</h2>
           
            <p>Enter the 4 digit OTP sent on your Mobile Number</p>
         </div>

        
         <div class="fieldblk">
          <div class="field ">
              <div class="placeholder">Enter OTP</div>
              <input id="otp" name="check_otp" onkeydown="allowNumbersOnly(event)" maxlength="5" class="loginfldtxt" type="text">
            
              
          </div>
      </div>
      <p  class="num">Didn′t receive the OTP?<span class="re"> Resend OTP</span></p>
         <hr>

        

         <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <button type="submit" class="btn-u btn-blocksss">Proceed</button>
            </div>
         </div>
         </form>
      </div>
      <!--End Reg Block-->
   </div><!--/container-->
   <!--=== End Content Part ===-->
   </section>
               <hr>
            <section id="main-foot">
               <!--=== Footer v1 ===-->
               <div id="footer-v1" class="footer-v1">
                  <div class="footer">
                     <div class="container">
                        <div class="row">
                           <!-- About -->
                           <div class="col-md-3 md-margin-bottom-40">
                              <a href="index-2.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>
                              <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                              <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
                           </div>
                           <!-- End About -->
                           <!-- Latest -->
                           <div class="col-md-3 md-margin-bottom-40">
                              <div class="posts">
                                 <div class="headline">
                                    <h2>Latest Posts</h2>
                                 </div>
                                 <ul class="list-unstyled latest-list">
                                    <li>
                                       <a href="#">Incredible content</a>
                                       <small>May 8, 2014</small>
                                    </li>
                                    <li>
                                       <a href="#">Best shoots</a>
                                       <small>June 23, 2014</small>
                                    </li>
                                    <li>
                                       <a href="#">New Terms and Conditions</a>
                                       <small>September 15, 2014</small>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- End Latest -->
                           <!-- Link List -->
                           <div class="col-md-3 md-margin-bottom-40">
                              <div class="headline">
                                 <h2>Useful Links</h2>
                              </div>
                              <ul class="list-unstyled link-list">
                                 <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                                 <li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
                                 <li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                                 <li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
                                 <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                              </ul>
                           </div>
                           <!-- End Link List -->
                           <!-- Address -->
                           <div class="col-md-3 map-img md-margin-bottom-40">
                              <div class="headline">
                                 <h2>Contact Us</h2>
                              </div>
                              <address class="md-margin-bottom-40">
                                 25, Lorem Lis Street, Orange <br />
                                 California, US <br />
                                 Phone: 800 123 3456 <br />
                                 Fax: 800 123 3456 <br />
                                 Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                              </address>
                           </div>
                           <!-- End Address -->
                        </div>
                     </div>
                  </div>
                  <!--/footer-->
                  <div class="copyright">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <p>
                                 2015 &copy; All Rights Reserved.
                                 <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                              </p>
                           </div>
                           <!-- Social Links -->
                           <div class="col-md-6">
                              <ul class="footer-socials list-inline">
                                 <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                    <i class="fa fa-skype"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                    <i class="fa fa-pinterest"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End Social Links -->
                        </div>
                     </div>
                  </div>
                  <!--/copyright-->
               </div>
               <!--=== End Footer v1 ===-->
           

                  
               </section>
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
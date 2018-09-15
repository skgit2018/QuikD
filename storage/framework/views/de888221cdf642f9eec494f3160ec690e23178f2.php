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
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700&amp;subset=cyrillic,latin">
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
           
            <!-- CSS Theme -->
            <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
            <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
            <!-- CSS Customization -->
            <link rel="stylesheet" href="assets/css/custom.css">
         </head>
         <body>
            <div class="wrapper">
               <!--=== Header v1 ===-->
               <?php echo $__env->make('inc.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>               </div>
               <!--=== End Header v1 ===-->
               <section id="booking-form">
               <div class="container-fluid">
      <div class="row equal-height-columns">
        

         <div class="col-md-6 col-sm-6 form-block equal-height-column">
            
              
            <h1 class="margin-bottom-30">SEARCH A DRIVER</h1>
            <form action="#">
               <div class="login-block">
                  <span>From</span>
                  <div class="input-group margin-bottom-20">
                     <span class="input-group-addon rounded-left"> <i class="fa fa-map-marker"></i></span>
                     <input type="text" class="form-control rounded-right" placeholder="Select Destination">
                  </div>
                  <div class="headline"><h2 class="heading-sm">Payment Method</h2></div>

                  <section class="margin">
                          <div class="inline-group">
                            <div class="headline"><h2 class="heading-sm">Time Duration</h2></div>
                           <label class="radio"><input type="radio" name="radio-inline" checked><i class="rounded-x"></i>3HR</label>
                           <label class="radio"><input type="radio" name="radio-inline"><i class="rounded-x"></i>6HR</label>
                           <label class="radio"><input type="radio" name="radio-inline"><i class="rounded-x"></i>12HR</label>
                           <label class="radio"><input type="radio" name="radio-inline"><i class="rounded-x"></i>24HR</label>
                           
                        </div>
                     </section>
                  <br>
                 
                  <div class="headline"><h2 class="heading-sm">Payment Method</h2></div>
                  <div class="row brand-page margin-bottom-40">
                  <div class="col-sm-6 col-md-4">
                     <button class="btn btn-block btn-bitcoin">
                        Cash
                     </button>
                  </div>
                  <div class="col-sm-6 col-md-4">
                     <button class="btn btn-block btn-cloudapp">
                        NETBANKING
                     </button>
                  </div>
                  <div class="col-sm-6 col-md-4">
                     <button class="btn btn-block btn-creativecommons">
                        DEBIT/CREDIT CARD
                     </button>
                  </div>
               </div>
               <div class="headline"><h2 class="heading-sm">Select Car</h2>
                  <input type="text" class="form-control rounded-right" placeholder="Select your Car">
                         <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h2 class="heading-sm">Select Car</h2> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">BMW</a></li>
            <li><a href="#">Dodge Viper</a></li>
            <li><a href="#">Cadillac</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Ferrari</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"> Audi</a></li>
          </ul>
        </li>-->
        </div>
                      
                    

              
               </div>
               <span class="black"><button class="btn-u btn-u-dark" type="button">Book Now</button></span>
            </form>

         </div>
          <div class="col-md-6 col-sm-6 hidden-xs image-block equal-height-column">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.7075492876015!2d78.5306753144394!3d17.42581698805559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb996344a6fff9%3A0x6e0daad0531ea482!2sTarnaka!5e0!3m2!1sen!2sin!4v1536643876793" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
      </div>
   </div><!--/container-->
               </section>
               <br/>
               <?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>           
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
            <script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
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
           <script src="assets/js/app.js"></script>
   <script>
      jQuery(document).ready(function() {
         App.init();
         StyleSwitcher.initStyleSwitcher();
      });
   </script>
   <script>
      $(".forms-wrapper").backstretch([
         "assets/img/bg/6.jpg",
         "assets/img/bg/5.jpg",
         "assets/img/bg/7.jpg",
         ], {
            fade: 1000,
            duration: 7000
         });
   </script>
            <!--[if lt IE 9]>
            <script src="assets/plugins/respond.js"></script>
            <script src="assets/plugins/html5shiv.js"></script>
            <script src="assets/plugins/placeholder-IE-fixes.js"></script>
            <![endif]-->
         </body>
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/feature_header_v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:39:25 GMT -->
      </html>z
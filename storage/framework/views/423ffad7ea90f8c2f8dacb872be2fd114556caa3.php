<?php 

if(!Session::has('userdata')){
        
    echo "<script>";
    echo "location.replace('/login');";
    echo "</script>";
}

$sess_id = Session::get('userdata')['id'];
?>


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
            <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
            <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
            <!-- CSS Theme -->
            <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
            <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
            <!-- CSS Customization -->
            <link rel="stylesheet" href="assets/css/custom.css">
         </head>
         <body>
            <div class="wrapper">
               <!--=== Header v1 ===-->
               <?php echo $__env->make('inc.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
               <hr>

                <section id="driverpool">
                  <div class="Driver">
                     <div id="sky-form" class="sky-form">
                     <?php echo Form::open(['url' => '/driver/pool', 'method' =>'post ']); ?>

                        <header>Driver Pool</header>
                        <input type="hidden" name="reg_user_id" value="<?php echo $sess_id;?>" />
                        <fieldset>
                           <div class="row">
                              <section class="">
                                 <span>Driver Location
                                 <sup style="color:red;">*</sup>
                                 </span>
                                 <label class="input">
                                 <i class="icon-prepend fa fa-map-marker"></i>
                                 <input type="text" name="reg_driver_name" placeholder=" Enter Driver Location">
                                 </label>
                              </section>
                              <section class="change">
                                 <div class="inline-group">
                                    <div class="headline">
                                       <h2 class="heading-sm">Availability Time in pool</h2>
                                    </div>
                                    <label class="radio"><input type="radio" name="reg_driver_time" value="3HR" checked><i class="rounded-x"></i>3HR</label>
                                    <label class="radio"><input type="radio" name="reg_driver_time" value="6HR"><i class="rounded-x"></i>6HR</label>
                                    <label class="radio"><input type="radio" name="reg_driver_time" value="12HR"><i class="rounded-x"></i>12HR</label>
                                    <label class="radio"><input type="radio" name="reg_driver_time" value="24HR"><i class="rounded-x"></i>24HR</label>
                                       <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <h4 class="panel-title">
                                       <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Four">
                                       Add Extra Time
                                       </a>
                                    </h4>
                                 </div>
                                 <div id="collapse-Four" class="panel-collapse collapse">
                                    <div class="panel-body">
                                      Charge per hour (<small>1hr=100</small>)
                                          <label class="inputs">
                                    <input type="text" name="reg_driver_extime" placeholder="Enter Extra Time">
                                       </label>
                                       <span class="small"><button class="btn-u btn-u-dark" type="button">Submit</button></span>
                                      
                                    </div>
                                 </div>
                              </div>
                                 </div>
                                 
                              </section>
                           
                              <section>
                                 <div class="inline-group">
                                    <div class="headline">
                                       <h2 class="heading-sm">Select Cars</h2>
                                    </div>
                                    <label class="checkbox"><input type="checkbox" name="reg_driver_car" value="Audi" checked><i class="square-x"></i>Audi</label>
                                    <label class="checkbox"><input type="checkbox" name="reg_driver_car" value="BMW"><i class="square-x"></i>BMW</label>
                                    <label class="checkbox"><input type="checkbox" name="reg_driver_car" value="Aston Martin"><i class="square-x"></i> Aston Martin</label>
                                    <label class="checkbox"><input type="checkbox" name="reg_driver_car" value="Cadillac"><i class="square-x"></i>Cadillac</label>
                                    <label class="checkbox"><input type="checkbox" name="reg_driver_car" value="Chevrolet"><i class="square-x"></i>Chevrolet</label>
                                    <label class="checkbox"><input type="checkbox" name="reg_driver_car" value="Mercedes"><i class="square-x"></i>Mercedes</label>
                                    <label class="checkbox"><input type="checkbox" name="reg_driver_car" value="Nissan"><i class="square-x"></i>Nissan</label>
                                    <label class="checkbox"><input type="checkbox" name="reg_driver_car" value="Rolls-Royce"><i class="square-x"></i>Rolls-Royce</label>
                                 </div>
                              </section>
                              <section>
                                 <div class="inline-group">
                                    <div class="headline">
                                       <h2 class="heading-sm">Payment Accepts</h2>
                                    </div>
                                    <label class="checkbox"><input type="checkbox" name="reg_driver_payment" value="Cash" checked><i class="square-x"></i>Cash</label>
                                    <label class="checkbox"><input type="checkbox" name="reg_driver_payment" value="Net Banking" ><i class="square-x"></i>Net Banking</label>
                                    <label class="checkbox"><input type="checkbox" name="reg_driver_payment" value="Debit Card"><i class="square-x"></i>Debit Card</label>
                                    <label class="checkbox"><input type="checkbox" name="reg_driver_payment" value="Credit Card"><i class="square-x"></i>Credit Card</label>
                                 </div>
                              </section>
                               <button type="submit" class="btn-u">Continue</button>
                               <?php echo Form::close(); ?>

                           </div>
                        </fieldset>
                     </div>
                  </div>
               </section>
              <hr>
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
            <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
            <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
            <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
            <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
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
            <script type="text/javascript" src="assets/js/forms/order.js"></script>
            <script type="text/javascript" src="assets/js/forms/review.js"></script>
            <script type="text/javascript" src="assets/js/forms/checkout.js"></script>
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
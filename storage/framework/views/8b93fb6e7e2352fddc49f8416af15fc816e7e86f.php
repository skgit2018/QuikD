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
               <?php echo $__env->make('inc.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <br/>
            <section id="Driver-verification-check">
               <div class="container">
                  <div id="sky-form" class="sky-form">
                  <?php echo Form::open(['url' => '/driververification/info', 'method' =>'post ']); ?>

                     <header>Driver Verification Information</header>
                     <input type="hidden" name="reg_user_id" value="<?php echo $sess_id;?>" />
                     <fieldset>
                        <div class="row">
                           <section class="col col-6">
                              <span>First Name
                              <sup style="color:red;">*</sup>
                              </span>
                              <label class="input">
                              <i class="icon-prepend fa fa-user"></i>
                              <input type="text" name="reg_driver_firstname" pattern="[a-z]{1,15}" placeholder="First name" required>
                              </label>
                           </section>
                           <section class="col col-6">
                              <span>Last Name
                              <sup style="color:red;">*</sup>
                              </span>
                              <label class="input">
                              <i class="icon-prepend fa fa-user"></i>
                              <input type="text" name="reg_driver_lastname" pattern="[a-z]{1,15}" placeholder="Last name" required>
                              </label>
                           </section>
                        </div>
                        <div class="row">
                          
                           <section class="col col-6">
                              <span>Gender
                              </span>
                              <div class="inline-group">
                                 <label class="radio"><input type="radio" name="reg_driver_gender"value="Male" checked><i class="rounded-x"></i>Male</label>
                                 <label class="radio"><input type="radio" name="reg_driver_gender"value="Female"><i class="rounded-x"></i>Female</label>
                                 <label class="radio"><input type="radio" name="reg_driver_gender"value="Other"><i class="rounded-x"></i>Other</label>
                              </div>
                           </section>
                        </div>
                     </fieldset>
                     <fieldset>
                        <section class="">
                           <span>Address
                           <sup style="color:red;">*</sup>
                           </span>
                           <label class="textarea">
                           <textarea rows="1" name="reg_driver_address" placeholder=" Enter Address" required></textarea>
                           </label>
                        </section>
                        <section class="">
                           <span>Street
                           </span>
                           <label class="input">
                           <input type="text" name="reg_driver_street" placeholder=" Enter Street" required>
                           </label>
                        </section>
                        <section class="">
                           <span>location
                           <sup style="color:red;">*</sup>
                           </span>
                           <label class="input">
                           <input type="text" name="reg_driver_location" placeholder=" Enter Location" required>
                           </label>
                        </section>
                        <div class="row">
                           <section class="col col-4">
                              <span>City
                              <sup style="color:red;">*</sup>
                              </span>
                              <label class="input">
                              <input type="text" name="reg_driver_city" placeholder="City" required>
                              </label>
                           </section>
                           <section class="col col-4">
                              <span>State
                              <sup style="color:red;">*</sup>
                              </span>
                              <label class="select">
                                 <select name="reg_driver_state">
                                    <option value="State">State</option>
                                    <option value="Hyderabad">Telangana</option>
                                    <option value="Secundarabad">Andhra Pradesh</option>
                                    <option value="Kamareddy">Haryana</option>
                                    <option value="Warangal">Tamil Nadu</option>
                                    <option value="Warangal">Tripura</option>
                                    <option value="Warangal">Uttar Pradesh</option>
                                    <option value="Warangal">Kerala</option>
                                    <option value="Warangal">Karnataka</option>
                                    <option value="Warangal">Maharashtra</option>
                                    <option value="Warangal">West Bengal</option>
                                    <option value="Warangal">Delhi</option>
                                 
                                 </select>
                                 <i></i>
                              </label>
                           </section>
                           <section class="col col-4">
                              <span>Pin Code
                              </span>
                              <label class="input">
                              <input type="text" name="reg_driver_pincode" placeholder="Pin code">
                              </label>
                           </section>
                        </div>
                     </fieldset>
                   
               </div>
                  <br/>
                  <div id="sky-form" class="sky-form">
                  
                 
                     <header>Identity Verification</header>
                     <fieldset>
                        <section class="">
                           <span>Experience
                           <sup style="color:red;">*</sup>
                           </span>
                           <label class="input">
                           <input type="text" name="reg_driver_experience" placeholder="Driver Experience" required>
                           </label>
                        </section>
                        <section class="">
                           <span>Adhar Card no
                           <sup style="color:red;">*</sup>
                           </span>
                           <label class="input">
                           <input type="text" name="reg_driver_aadhar_card" placeholder="Adhar Card Number" required>
                           </label>
                        </section>
                        <section class="">
                           <span>Driving License no
                           <sup style="color:red;">*</sup>
                           </span>
                           <label class="input">
                           <input type="text" name="reg_driver_license" placeholder="Driving License Number" required>
                           </label>
                        </section>
                        <section class="">
                           <span>Pan Card No
                           <sup style="color:red;">*</sup>
                           </span>
                           <label class="input">
                           <input type="text" name="reg_driver_pancard" placeholder="PAN Card Number" required>
                           </label>
                        </section>
                     </fieldset>
                     
                  </div>
                  <br/>
                  <div id="sky-form" class="sky-form">
                 
                     <header>Bank Account details</header>
                     <fieldset>
                        <section class="">
                           <span>Account Holder
                           <sup style="color:red;">*</sup>
                           </span>
                           <label class="input">
                           <input type="text" name="reg_driver_bank_account_holder" placeholder="Bank_Account_Holder" required>
                           </label>
                        </section>
                        <section class="">
                           <span>Acconut no
                           <sup style="color:red;">*</sup>
                           </span>
                           <label class="input">
                           <input type="text" name="reg_driver_bank_account_no" placeholder="Bank_Account_no" required>
                           </label>
                        </section>
                        <section class="">
                           <span>Bank Name
                           <sup style="color:red;">*</sup>
                           </span>
                           <label class="input">
                           <input type="text" name="reg_driver_bank_name" placeholder="Bank_name" required>
                           </label>
                        </section>
                        <section class="">
                           <span>Branch
                           <sup style="color:red;">*</sup>
                           </span>
                           <label class="input">
                           <input type="text" name="reg_driver_bank_branch" placeholder="Bank_Account_Branch" required>
                           </label>
                        </section>
                        <section class="">
                           <span>Location
                           <sup style="color:red;">*</sup>
                           </span>
                           <label class="input">
                           <input type="text" name="reg_driver_bank_location" placeholder="Bank_Location" required>
                           </label>
                        </section>
                        <section class="">
                           <span>IFSC Code
                           <sup style="color:red;">*</sup>
                           </span>
                           <label class="input">
                           <input type="text" name="reg_driver_bank_ifsc_code" placeholder="Bank_IFSC_Code" required>
                           </label>
                        </section>
                     </fieldset>
                     
                  
                  <br/>
                  <footer class="bt">
                     <button type="submit" class="btn-u">Continue</button> 
                  </footer>
                  <?php echo Form::close(); ?>

               </div>
            </section>
            <br/>
         <?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>         </div>
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
            <?php //} ?>
      

               
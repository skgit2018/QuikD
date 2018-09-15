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
            <link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	        <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	        <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
            <!-- CSS Page-->
            <link rel="stylesheet" href="assets/css/pages/page_log_reg_v4.css">
            <link rel="stylesheet" href="assets/css/pages/page_clients.css">
            <link rel="stylesheet" href="assets/css/pages/profile.css">
            
            <!-- CSS Theme -->
            <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
            <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
            <!-- CSS Customization -->
            <link rel="stylesheet" href="assets/css/custom.css">
         </head>
         <body>
            <div class="wrapper">
       @include('inc.menu')
<section id="qdm">
<div class="breadcrumbs-v1">
			<div class="container">
				<span>Quikdrivers</span>
				<h1>Search Results</h1>
			</div>
		</div>
		<!--=== End Breadcrumbs v1 ===-->
	</section>

	<section id="posts">
		<div class="container content">
			<div class="row">
				<div class="col-md-9">
        <?php if(Session::has('search')){                
             $searchdata = Session::get('search');            
             foreach($searchdata as $sdata){

                 $driver_fname = $sdata->reg_driver_firstname;
                 $driver_lname = $sdata->reg_driver_lastname;
                 $driver_name = $driver_fname . " ". $driver_lname;
                 $driver_gender = $sdata->reg_driver_gender;
                 $driver_addr = $sdata->reg_driver_address;
                 $driver_street = $sdata->reg_driver_street;
                 $driver_loc = $sdata->reg_driver_location;
                 $driver_city = $sdata->reg_driver_city;
                 $driver_state = $sdata->reg_driver_state;
                 $driver_exp = $sdata->reg_driver_experience;

           
           ?>

					<div class="headline"><h2>Driver Profile</h2></div>

					<!-- Clients Block-->
					<div class="row clients-page">
						<div class="col-md-2">
							<img src="assets/img/clients2/baderbrau.png" class="img-responsive hover-effect" alt="" />
						</div>
						<div class="col-md-10">
							<h3>Driver Name</h3>
							<ul class="list-inline">
								<li><i class="fa fa-map-marker color-green"></i> USA</li>
								<li><i class="fa fa-globe color-green"></i> <a class="linked" href="#">http://www.example.com</a></li>
								<li><i class="fa fa-briefcase color-green"></i> Web Design &amp; Development</li>
							</ul>
						<div id="profile" class="profile-edit tab-pane fade in active">
									<h2 class="heading-md">Driver Details.</h2>
									
									<br>
									<dl class="dl-horizontal">
										<dt class="st"><strong>Your name </strong></dt>
										<dd>
											Edward Rooster
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Your ID </strong></dt>
										<dd>
											FKJ-032440
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Company name </strong></dt>
										<dd>
											Htmlstream
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Primary Email Address </strong></dt>
										<dd>
											edward-rooster@gmail.com
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Phone Number </strong></dt>
										<dd>
											(304) 33-2867-499
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Office Number </strong></dt>
										<dd>
											(304) 44-9810-296
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Address </strong></dt>
										<dd>
											California, US
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
									</dl>
									<!--<button type="button" class="btn-u btn-u-default">Cancel</button>
									<button type="button" class="btn-u">Save Changes</button>-->
             <?php }}?>
								</div>

						</div>
					</div>
					<!-- End Clients Block-->

			

			
				

					<!-- Pagination -->
					<div class="text-center md-margin-bottom-30">
						<ul class="pagination">
							<li><a href="#">«</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li class="active"><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">»</a></li>
						</ul>
					</div>
					<!-- End Pagination -->
				</div><!--/col-md-9-->

				<div class="col-md-3">
					<!-- Our Services -->
					<div class="who margin-bottom-30">
						<div class="headline"><h2>Our Services</h2></div>
						<p>At vero eos et accusamus et iusto odio dign issimos ducimus qui blanditiis iusto.</p>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-desktop"></i>Vivamus imperdiet condimentum</a></li>
							<li><a href="#"><i class="fa fa-bullhorn"></i>Anim pariatur cliche squid</a></li>
							<li><a href="#"><i class="fa fa-globe"></i>Eget placerat felis consectetur</a></li>
							<li><a href="#"><i class="fa fa-group"></i>Condimentum diam eget placerat</a></li>
						</ul>
					</div>

					<!-- About Us -->
					<div class="headline"><h2>About Us</h2></div>
					<div class="margin-bottom-30">
						<p>At vero eos et acc usamus et iusto odio dign issimos ducimus atque corrupti quos.</p>
						<p>dolores etrerum facilis est etenim a feugiat cupiditate non quos. <a class="linked color-green" href="#">Read more</a></p>
					</div>

					<!-- Contact Us -->
					<div class="who margin-bottom-30">
						<div class="headline"><h2>Contact Us</h2></div>
						<p>Vero facilis est etenim a feugiat cupiditate non quos etrerum facilis.</p>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-home"></i>5B amus ED554, New York, US</a></li>
							<li><a href="#"><i class="fa fa-envelope-o"></i>infp@example.com</a></li>
							<li><a href="#"><i class="fa fa-phone"></i>1(222) 5x86 x97x</a></li>
							<li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
						</ul>
					</div>
				</div><!--/col-md-3-->
			</div><!--/row-->
		</div><!--/container-->
		<!--=== End Content Part ===-->
	</section>

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
            <script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	        <script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	        <script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	        <script type="text/javascript" src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
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
            <script type="text/javascript" src="assets/js/forms/reg.js"></script>
	        <script type="text/javascript" src="assets/js/forms/checkout.js"></script>
	        <script type="text/javascript" src="assets/js/plugins/datepicker.js"></script>
	        <script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
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
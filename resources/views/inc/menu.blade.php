<?php 
if (Session::has('userdata')) {

      $sess_id = Session::get('userdata')['id'];
      $sess_uname = Session::get('userdata')['name'];
      $sess_account_type = Session::get('userdata')['account_type'];
      $sess_email = Session::get('userdata')['email'];    
}
?>

<!--=== Header v1 ===-->
<div class="header-v1">
               <!-- Topbar -->
               <div class="topbar-v1">
                  <div class="container">
                     <div class="row">
                        <div class="navbar-header" style="margin-top: -10px;">
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="fa fa-bars"></span>
                           </button>
                           <a class="navbar-brand" href="/">
                           <img id="logo-header" src="assets/img/logo1-default.png" alt="Logo">
                           </a>
                        </div>
                        <!--=== Search Block Version 2 ===-->
                        <div class="search-block-v2">
                           <div class="col-md-4">
                              <div class="input-group"style="margin-top: 8px;" >
                                 <input type="text" class="form-control" placeholder="Tell us your location ...">
                                 <span class="input-group-btn">
                                 <button class="btn-u" type="button"><i class="fa fa-search"></i></button>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <!--/container-->
                        <!--=== End Search Block Version 2 ===-->
                        <div class="col-md-6">
                           <ul class="list-inline top-v1-data" style="margin-top: 8px;">
                              <li><a href="#">Ride</a></li>
                              <li><a href="#">Drive</a></li>
                              <li><a href="#">Help</a></li>
                              
                              @if(Session::has('userdata'))
                              <li>Welcome {{$sess_uname}} ({{$sess_account_type}})</li>
                              <li><a href="/logout">Logout</a></li>
                              @else
                              <li><a href="/login">Sign In</a></li>
                              <li><a href="/signup"><button class="btn-u btn-u-dark" type="button">Ride With Driver</button></a></li>
                              @endif

                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Topbar -->
               <!-- Navbar -->
               <div class="navbar navbar-default mega-menu" role="navigation">
                  <div class="container">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <!--<div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        	<span class="sr-only">Toggle navigation</span>
                        	<span class="fa fa-bars"></span>
                        </button>
                        <a class="navbar-brand" href="index-2.html">
                        	<img id="logo-header" src="assets/img/logo1-default.png" alt="Logo">
                        </a>
                        </div>-->
                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                           <!-- Home -->
                           <li>
                              <a href="/" class="dropdown-toggle">
                              <span class="item">
                              <i class="fa fa-home"></i>
                              &nbsp;Home
                              </span>
                              </a>
                           </li>
                           <!-- End Home -->
                           <!-- Pages -->
                           <li>
                              <a href="" class="dropdown-toggle">
                              <span class="item">
                              <i class="fa fa-exclamation-circle"></i>
                              &nbsp;About
                              </span>
                              </a>
                           </li>
                           <!-- End Pages -->
                           <!-- Blog -->
                           <li>
                              <a href="" class="dropdown-toggle">
                              <span class="item">
                              <i class="fa fa-dot-circle-o"></i>
                              &nbsp;Our Services
                              </span>
                              </a>
                           </li>
                           <!-- End Blog -->
                           <!-- Portfolio -->
                           <li>
                              <a href="" class="dropdown-toggle">
                              <span class="item">
                              <i class="fa fa-car"></i>
                              &nbsp;Our Vechicles
                              </span>
                              </a>
                           </li>
                           <!-- End Portfolio -->
                           <!-- Features -->
                           <li>
                              <a href="" class="dropdown-toggle">
                              <span class="item">
                              <i class="fa fa-gift"></i>
                              &nbsp;Packages
                              </span>
                              </a>
                           </li>
                           <!-- End Features -->
                           <!-- Shortcodes -->
                           <li>
                              <a href="" class="dropdown-toggle">
                              <span class="item">
                              <i class="fa fa-map-marker"></i>
                              &nbsp;Contact
                              </span>
                              </a>
                           </li>
                           <!-- End Shortcodes -->
                           <li>
                              <button class="btn-u btn-u-yellow" type="button">Become a Driver</button>
                              <!--<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                 <button class="btn-u btn-u-yellow" type="button">Became a Driver</button>
                                 </a>-->
                           </li>
                        </ul>
                     </div>
                     <!--/navbar-collapse-->
                  </div>
               </div>
               <!-- End Navbar -->
            </div>
            <!--=== End Header v1 ===-->
<!doctype html>
<html lang="en-US">
<head>

  <title>Magic Graphics Design</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="HandheldFriendly" content="true">
  <meta name="author" content="bslthemes" />

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue%3Aital%2Cwght%400%2C100%3B0%2C200%3B0%2C300%3B0%2C400%3B0%2C500%3B0%2C600%3B0%2C700%3B0%2C800%3B0%2C900%3B1%2C100%3B1%2C200%3B1%2C300%3B1%2C400%3B1%2C500%3B1%2C600%3B1%2C700%3B1%2C800%3B1%2C900&#038;display=swap" type="text/css" media="all" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

  <!-- CSS STYLES -->
  <link rel="stylesheet" href="assets/css/vendors/bootstrap.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/vendors/magnific-popup.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/vendors/splitting.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/vendors/swiper.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/vendors/animate.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/vendors/jquery.pagepiling.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body>

	<!-- Page -->
	<div class="onovo-page footer--fixed">

		<!-- Preloader -->
		<div class="preloader">
			<div class="preloader__spinner">
				<span class="preloader__double-bounce"></span>
				<span class="preloader__double-bounce preloader__double-bounce--delay"></span>
			</div>
		</div>

		
		<!-- Header -->
		<header class="onovo-header header--white">
			<div class="header--builder">
				<div class="container">
					<div class="row">
						<div class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-3 align-self-center">

							<!-- Logo -->
							<div class="onovo-logo-image" style="max-width: 70px">
								<a href="{{ route('home') }}">
									<img src="assets/images/logo-black.png" alt="Onovo" />
									<img class="logo--white" src="assets/images/logo-main2.png" alt="Onovo" />
								</a>
							</div>

						</div>
						<div class="col-8 col-xs-8 col-sm-8 col-md-4 col-lg-6 align-self-center align-center m-align-right">

							<!-- Menu Horizontal -->
							<div class="onovo-menu-horizontal">
								<ul class="onovo-menu-nav">
									<li class="dropdown-link current-menu-item">
										<a class="onovo-lnk lnk--active onovo-dropdown-toggle" href="{{ route('home') }}">Home</a>										
									</li>
									<li class="dropdown-link menu-item-has-children">
										<a class="onovo-lnk lnk--active onovo-dropdown-toggle" href="about-us.html">About</a>
										<i class="icon fas fa-chevron-down"></i>
										<ul class="sub-menu">
											<li>
												<a class="onovo-lnk lnk--active" href="{{ route('about') }}">About Us</a>
											</li>
											{{-- <li>
												<a class="onovo-lnk lnk--active" href="team.html">Team</a>
											</li> --}}
											<li>
												<a class="onovo-lnk lnk--active" href="{{ route('services') }}">Services</a>
											</li>
											<li>
												<a class="onovo-lnk lnk--active" href="{{ route('packages') }}">Pricing Plans</a>
											</li>
										</ul>
									</li>
									<li class="dropdown-link">
										<a class="onovo-lnk lnk--active onovo-dropdown-toggle" href="{{ route('projects') }}">Projects</a>
									</li>
									<li>
										<a class="onovo-lnk lnk--active" href="{{ route('contact') }}">Contact Us</a>
									</li>
								</ul>
							</div>

							<!-- Menu Hamburger -->
							<a href="#" class="onovo-menu-btn" style="display: none;"><span></span></a>
							<div class="onovo-menu-popup align-left">
								<div class="onovo-menu-overlay"></div>
								<div class="onovo-menu-overlay-after"></div>
								<div class="onovo-menu-container onovo--noscroll">
									<div class="container">
										<div class="onovo-menu">
											<ul class="onovo-menu-nav">
												<li class="dropdown-link current-menu-item">
													<a class="onovo-lnk lnk--active onovo-dropdown-toggle" href="{{ route('home') }}">Home</a>
												</li>
												<li class="dropdown-link menu-item-has-children">
													<a class="onovo-lnk lnk--active onovo-dropdown-toggle" href="{{ route('about') }}">About</a>
													<i class="icon fas fa-chevron-down"></i>
													<ul class="sub-menu">
														<li>
															<a class="onovo-lnk lnk--active" href="{{ route('about') }}">About Us</a>
														</li>
														<li>
															<a class="onovo-lnk lnk--active" href="{{ route('services') }}">Services</a>
														</li>
														<li>
															<a class="onovo-lnk lnk--active" href="{{ route('packages') }}">Pricing Plans</a>
														</li>
													</ul>
												</li>
												<li class="dropdown-link ">
													<a class="onovo-lnk lnk--active onovo-dropdown-toggle" href="{{ route('projects') }}">Projects</a>
												</li>
												<li>
													<a class="onovo-lnk lnk--active" href="{{ route('contact') }}">Contact Us</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-3 align-self-center align-right hide-on-mobile-extra">

							<!-- Button -->
							<a class="onovo-btn onovo-hover-btn btn--active" href="{{ route('contact') }}">
								<span> Start a Project </span>
							</a>

						</div>
					</div>
				</div>
			</div>
		</header>

		@yield('wrapper')

		<!-- Footer -->
		<footer class="onovo-footer footer--dark">
			<div class="footer--default">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">

							<!-- Description -->
							<div class="onovo-text onovo-text-white">
								<h5>Information</h5>
								<p style="opacity: 0.6;">From the moment our company was founded, we have helped our clients find exceptional solutions <strong>for their businesses</strong>. </p>
							</div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 offset-lg-1">

							<!-- Description -->
							<div class="onovo-text onovo-text-white">
								<h5>Get in Touch</h5>
								<p style="opacity: 0.6;">Baird House, 15-17 St Cross St <br />London EC1N 8UW </p>
								<p style="opacity: 0.6;">
									<a href="tel:+10204302973" class="onovo-lnk lnk--white" target="_blank">+ 1 (020) 430 2973</a><br>
									<a href="mailto:username@domain.com" class="onovo-lnk lnk--white" target="_blank">username@domain.com</a>
								</p>
							</div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">

							<!-- Gallery items -->
							<div class="row">

								<!--gallery item-->
								<div class="col-4 col-xs-6 col-sm-6 col-md-4 col-lg-4">
									<figure class="gallery-item">
										<a href='assets/images/post5.jpg'>
											<img src="assets/images/post5-1024x683.jpg" alt="" />
										</a>
									</figure>
								</div>

								<!--gallery item-->
								<div class="col-4 col-xs-6 col-sm-6 col-md-4 col-lg-4">
									<figure class="gallery-item">
										<a href='assets/images/post4.jpg'>
											<img src="assets/images/post4-1024x683.jpg" alt="" />
										</a>
									</figure>
								</div>

								<!--gallery item-->
								<div class="col-4 col-xs-6 col-sm-6 col-md-4 col-lg-4">
									<figure class="gallery-item">
										<a href='assets/images/post3.jpg'>
											<img src="assets/images/post3-1024x683.jpg" alt="" />
										</a>
									</figure>
								</div>

								<!--gallery item-->
								<div class="col-4 col-xs-6 col-sm-6 col-md-4 col-lg-4">
									<figure class="gallery-item">
										<a href='assets/images/post4.jpg'>
											<img src="assets/images/post4-1024x683.jpg" alt="" />
										</a>
									</figure>
								</div>

								<!--gallery item-->
								<div class="col-4 col-xs-6 col-sm-6 col-md-4 col-lg-4">
									<figure class="gallery-item">
										<a href='assets/images/post1.jpg'>
											<img src="assets/images/post1-1024x683.jpg" alt="" />
										</a>
									</figure>
								</div>

								<!--gallery item-->
								<div class="col-4 col-xs-6 col-sm-6 col-md-4 col-lg-4">
									<figure class="gallery-item">
										<a href='assets/images/post6.jpg'>
											<img src="assets/images/post6-1024x683.jpg" alt="" />
										</a>
									</figure>
								</div>

							</div>

						</div>
					</div>

					<div class="separator"></div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 align-self-center">

							<!-- Copyright -->
							<div class="copyright onovo-text-white">
								© 2023 All rights reserved by 
								<a href="{{ route('home') }}">
									Magic Graphics Design 
								</a>
							</div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 align-right">

							<!-- Social-->
							<div class="onovo-social-1 onovo-social-active">
								<ul>
									<li>
										<a class="onovo-social-link onovo-hover-2" href="http://twitter.com" title="Twitter" target="_blank">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="onovo-social-link onovo-hover-2" href="http://linkedin.com" title="LinkedIn" target="_blank">
											<i class="fab fa-linkedin-in"></i>
										</a>
									</li>
									<li>
										<a class="onovo-social-link onovo-hover-2" href="http://dribbble.com" title="Dribbble" target="_blank">
											<i class="fab fa-behance"></i>
										</a>
									</li>
								</ul>
							</div>

						</div>
					</div>

				</div>
			</div>
		</footer>

	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script src="assets/js/swiper.js"></script>
	<script src="assets/js/splitting.js"></script>
	<script src="assets/js/scroll-out.js"></script>
	<script src="assets/js/jquery.pagepiling.js"></script>
	<script src="assets/js/jquery.easy_number_animate.js"></script>
	<script src="assets/js/magnific-popup.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/isotope.pkgd.js"></script>
	<script src="assets/js/common.js"></script>

	@yield('scripts')

</body>
</html>

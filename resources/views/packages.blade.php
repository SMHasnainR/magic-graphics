@extends('layouts.main')

@section('wrapper')
	
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Onovo Intro -->
			<section class="onovo-section onovo-intro intro--black">
				<div class="container">
					<h1 class="onovo-title-1  onovo-text-white">
						<span> Pricing Plans </span>
						<span class="onovo-sep word">
							<i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
						</span>
					</h1>
					<div class="onovo-subtitle-2  onovo-text-white">
						<span> It helps you choose prices to maximise. </span>
					</div>
					<div class="onovo-breadcrums">
						<ul>
							<li>
								<a href="index.html">Home </a>
							</li>
							<li class="current">
								<span>Pricing Plans</span>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<!-- Onovo Pricing -->
			<section class="onovo-section gap-top-140 gap-bottom-140">
				<div class="container">

					<!-- Pricing items -->
					<div class="row gap-row">

						@foreach ($packages as $key => $package)
							<!--pricing item-->
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="onovo-pricing">
									<div class="onovo-pricing-item">
										<div class="title">
											<div class="name">
												<span> {{ $package['name'] }} </span>
											</div>
											{{-- <div class="subname">
												<span> 3 Months </span>
											</div> --}}
											<div class="price row">
												<span class="col-1">
													$
												</span>
												<span class="col-10 text-center">  
													{{ $package['price'] }} 
												</span>
											</div>
										</div>
										<div class="desc">
											<div class="pricing--overlay onovo-hover-3 onovo-hover-black"></div>
											<div class="image onovo-text-white">
												<i aria-hidden="true" class="fas fa-rocket"></i>
											</div>
											<div class="list">
												<div>
													<ul>
														@foreach ($package['features'] as $feature)
															<li>
																<i class="far fa-check-square"></i>{{ $feature }}
															</li>
														@endforeach
													</ul>
												</div>
											</div>
											@if ($package['id'] == 6)
												<a class="onovo-btn onovo-hover-btn btn--border btn--full btn--color" href="{{ route('contact') }}">
													<span> Contact Us </span>
												</a>
											@else
												<a class="onovo-btn onovo-hover-btn btn--border btn--full btn--color" href="{{ route('plan-request',['plan' => $package['id']]) }}">
													<span> Purchase Now </span>
												</a>
											@endif
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>

				</div>
			</section>

			<!-- Onovo CTA -->
			<section class="onovo-section gap-top-140 gap-bottom-140" style="background-image: url(assets/images/cta-bg-1.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

							<!-- Heading -->
							<div class="onovo-heading gap-bottom-40 onovo-text-white">
								<div class="onovo-subtitle-1">
									<span> Get in Touch </span>
								</div>
								<h2 class="onovo-title-2">
									<span> Send Us Your <br>
										<strong>Bright Ideas</strong>
									</span>
								</h2>
							</div>

							<!-- Text -->
							<div class="onovo-cta-text">
								<a href="mailto:infoname@domain.com" target="_blank">infoname@domain.com</a>
								<p>36 East 8th Street, New York, <br />NY 10003, United States. </p>
							</div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

							<!-- Social -->
							<div class="onovo-cta-social">
								<div class="image" style="">
									<div class="cta-img-circle img-circle--1"></div>
									<div class="cta-img-circle img-circle--2"></div>
									<div class="cta-img-circle img-circle--3"></div>
								</div>
								<div class="desc">
									<ul>
										<li>
											<a class="onovo-btn btn--white btn--large btn--icon onovo-hover-btn" href="http://facebook.com" target="_blank">
												<i aria-hidden="true" class="fab fa-facebook-f"></i>
												<span> Facebook </span>
											</a>
										</li>
										<li>
											<a class="onovo-btn btn--white btn--large btn--icon onovo-hover-btn" href="http://instagram.com" target="_blank">
												<i aria-hidden="true" class="fab fa-instagram"></i>
												<span> Instagram </span>
											</a>
										</li>
										<li>
											<a class="onovo-btn btn--white btn--large btn--icon onovo-hover-btn" href="http://twitter.com" target="_blank">
												<i aria-hidden="true" class="fab fa-twitter"></i>
												<span> Twitter </span>
											</a>
										</li>
										<li>
											<a class="onovo-btn btn--white btn--large btn--icon onovo-hover-btn" href="http://linkedin.com" target="_blank">
												<i aria-hidden="true" class="fab fa-linkedin-in"></i>
												<span> LinkedIn </span>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<!-- Onovo Brands -->
			<section class="onovo-section gap-top-140">
				<div class="container">

					<!-- Heading -->
					<div class="onovo-heading gap-bottom-40">
						<div class="onovo-subtitle-1">
							<span> Fantastic and Premium Clients </span>
						</div>
						<h2 class="onovo-title-2">
							<span> We Have Had the Pleasure of <br>Working with Some Clients </span>
						</h2>
					</div>

					<!-- Brands items -->
					<div class="row gap-row">

						<!--brand item-->
						<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
							<div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
								<a target="_blank" href="http://google.com">
									<span class="image">
										<img decoding="async" src="assets/images/brand1.png" width="285" height="200" alt="Visit Website" />
									</span>
									<span class="label onovo-white-black"> Visit Website </span>
								</a>
							</div>
						</div>

						<!--brand item-->
						<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
							<div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
								<a target="_blank" href="http://google.com">
									<span class="image">
										<img decoding="async" src="assets/images/brand2.png" width="285" height="200" alt="Visit Website" />
									</span>
									<span class="label onovo-white-black"> Visit Website </span>
								</a>
							</div>
						</div>

						<!--brand item-->
						<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
							<div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
								<a target="_blank" href="http://google.com">
									<span class="image">
										<img decoding="async" src="assets/images/brand3.png" width="285" height="200" alt="Visit Website" />
									</span>
									<span class="label onovo-white-black"> Visit Website </span>
								</a>
							</div>
						</div>

						<!--brand item-->
						<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
							<div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
								<a target="_blank" href="http://google.com">
									<span class="image">
										<img decoding="async" src="assets/images/brand4.png" width="285" height="200" alt="Visit Website" />
									</span>
									<span class="label onovo-white-black"> Visit Website </span>
								</a>
							</div>
						</div>

						<!--brand item-->
						<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
							<div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
								<a target="_blank" href="http://google.com">
									<span class="image">
										<img decoding="async" src="assets/images/brand5.png" width="285" height="200" alt="Visit Website" />
									</span>
									<span class="label onovo-white-black"> Visit Website </span>
								</a>
							</div>
						</div>

						<!--brand item-->
						<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
							<div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
								<a target="_blank" href="http://google.com">
									<span class="image">
										<img decoding="async" src="assets/images/brand6.png" width="285" height="200" alt="Visit Website" />
									</span>
									<span class="label onovo-white-black"> Visit Website </span>
								</a>
							</div>
						</div>

						<!--brand item-->
						<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
							<div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
								<a target="_blank" href="http://google.com">
									<span class="image">
										<img decoding="async" src="assets/images/brand7.png" width="285" height="200" alt="Visit Website" />
									</span>
									<span class="label onovo-white-black"> Visit Website </span>
								</a>
							</div>
						</div>

						<!--brand item-->
						<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3">
							<div class="onovo-brands onovo-hover-3 onovo-hover-label" data-onovo-overlay data-onovo-scroll>
								<a target="_blank" href="http://google.com">
									<span class="image">
										<img decoding="async" src="assets/images/brand2.png" width="285" height="200" alt="Visit Website" />
									</span>
									<span class="label onovo-white-black"> Visit Website </span>
								</a>
							</div>
						</div>
						
					</div>

				</div>
			</section>

		</div>

@endsection

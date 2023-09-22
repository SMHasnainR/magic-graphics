@extends('layouts.main')

@section('wrapper')
    
		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Onovo Intro -->
			<section class="onovo-section onovo-intro intro--black">
				<div class="container">
					<h1 class="onovo-title-1  onovo-text-white">
						<span> Request A Plan </span>
						<span class="onovo-sep word">
							<i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
						</span>
					</h1>
					<div class="onovo-subtitle-2  onovo-text-white">
						<span> Have ideas for your business? Let’s build something awesome together. </span>
					</div>
					<div class="onovo-breadcrums">
						<ul>
							<li>
								<a href="index.html">Home </a>
							</li>
							<li class="current">
								<span>Contact Us</span>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<!-- Onovo Contact Info -->
			<section class="onovo-section gap-top-140">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">

							<!-- Heading -->
							<div class="onovo-text gap-bottom-40">
								<h4>Request a Plan</h4>
								Then let us know about it and we can see what we can do to help
							</div>

							<!-- Form -->
							<div class="onovo-form">
								<form id="" class="cform" action="{{ route('plan-request') }}" method="post">
									@csrf
									<input type="text" name="package_id" value="{{ $planRequestedId }}" hidden>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<p>
												<input placeholder="Full Name" type="text" name="name" />
											</p>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<p>
												<input placeholder="Email Address" type="email" name="email" />
											</p>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<p>
												<input placeholder="Phone Number" type="tel" name="phone_no" />
											</p>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<p>
												<textarea placeholder="Message" name="message"></textarea>
											</p>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<p>
												<button type="submit" class="onovo-btn onovo-hover-btn">
													<span>Send Message</span>
												</button>
											</p>
										</div>
									</div>
								</form>
								<div class="alert-success" style="display: none;"><h5>Thanks, your message is sent successfully.</h5></div>
							</div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">

							<div class="d-flex justify-content-center my-3">
								<h3>
									Package Details
								</h3>
							</div>
							<!-- Contact Info -->
							<div class="onovo-contact-info onovo-text-white">
								<ul>
									<li>
										<h5 class="text-secondary">									
											{{ $package['name'] }}
										</h5>
										<div> <h6 class="d-inline"> ${{$package['price']}}</h6>/ per month</div>
									</li>
									<li>
										<h5>Features</h5>
										<ul>
											@foreach ($package['features'] as $feature)
												<li>
													{{$feature}}	
												</li>
											@endforeach
										</ul>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</section>

			<!-- Onovo Faq -->
			<section class="onovo-section gap-top-140">
				<div class="container">

					<!-- Heading -->
					<div class="onovo-heading align-center gap-bottom-40">
						<div class="onovo-subtitle-1">
							<span> Client’s FAQ </span>
						</div>
						<h2 class="onovo-title-2">
							<span> Solving Business Problems <br>is An Everyday </span>
						</h2>
					</div>

					<!-- Faq items -->
					<div class="onovo-faq-items">

						<!--faq item-->
						<div class="onovo-faq-item onovo-collapse-item">
							<h5 class="title onovo-collapse-btn">
								<span> Secure Management and Workforce? </span>
								<i class="arrow"></i>
							</h5>
							<div class="onovo-text" style="display: none;">
								<div>
									<p>Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class apten sociosqu a ds Etiam ante ex fermentum litora aorquper conuauris ine odi. Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class apten sociosqu a ds Et iam ante ex fermentum litora aorquper conuauris ine odi.</p>
									<ul>
										<li>Lorem ipsum dolor sit amet, consectet</li>
										<li>Duis sed odio sit amet nibh vulputate cursus</li>
										<li>Duis sed odio sit amet nibh vulputate</li>
									</ul>
								</div>
							</div>
						</div>

						<!--faq item-->
						<div class="onovo-faq-item onovo-collapse-item">
							<h5 class="title onovo-collapse-btn">
								<span> Logistics Workforce on Track? </span>
								<i class="arrow"></i>
							</h5>
							<div class="onovo-text" style="display: none;">
								<div>
									<p>Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class apten sociosqu a ds Etiam ante ex fermentum litora aorquper conuauris ine odi. Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class apten sociosqu a ds Et iam ante ex fermentum litora aorquper conuauris ine odi.</p>
									<ul>
										<li>Lorem ipsum dolor sit amet, consectet</li>
										<li>Duis sed odio sit amet nibh vulputate cursus</li>
										<li>Duis sed odio sit amet nibh vulputate</li>
									</ul>
								</div>
							</div>
						</div>

						<!--faq item-->
						<div class="onovo-faq-item onovo-collapse-item">
							<h5 class="title onovo-collapse-btn">
								<span> Online Courses &amp; Certification? </span>
								<i class="arrow"></i>
							</h5>
							<div class="onovo-text" style="display: none;">
								<div>
									<p>Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class apten sociosqu a ds Etiam ante ex fermentum litora aorquper conuauris ine odi. Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class apten sociosqu a ds Et iam ante ex fermentum litora aorquper conuauris ine odi.</p>
									<ul>
										<li>Lorem ipsum dolor sit amet, consectet</li>
										<li>Duis sed odio sit amet nibh vulputate cursus</li>
										<li>Duis sed odio sit amet nibh vulputate</li>
									</ul>
								</div>
							</div>
						</div>

						<!--faq item-->
						<div class="onovo-faq-item onovo-collapse-item">
							<h5 class="title onovo-collapse-btn">
								<span> Figures and data representative of an organization's? </span>
								<i class="arrow"></i>
							</h5>
							<div class="onovo-text" style="display: none;">
								<div>
									<p>Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class apten sociosqu a ds Etiam ante ex fermentum litora aorquper conuauris ine odi. Duis sed odio sit amet nibh vulputate cursus a sit tellus a odio tincdunt ilm auctor Class apten sociosqu a ds Et iam ante ex fermentum litora aorquper conuauris ine odi.</p>
									<ul>
										<li>Lorem ipsum dolor sit amet, consectet</li>
										<li>Duis sed odio sit amet nibh vulputate cursus</li>
										<li>Duis sed odio sit amet nibh vulputate</li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>

		</div>

@endsection

@section('scripts')
	<script>
		// console.log('sdfdsdsfsdf')
		// alert('jdsfsd');		
		$(document).ready(function(){
			$('#cform').on('submit', function(e){
				console.log('cform'); 
				e.preventDefault();
				
			});
		});
	</script>
@endsection
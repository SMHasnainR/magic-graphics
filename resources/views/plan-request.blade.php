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

							@if(session('success'))
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									{{ session('success') }}
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							@endif
														<!-- Form -->
							<div class="onovo-form">
								<form id="" class="cform" action="{{ route('plan-request') }}" method="post">
									@csrf
									<input required type="text" name="package_id" value="{{ $planRequestedId }}" hidden>
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

										@if ($planRequestedId == 1)
											<div class="my-3 features">
												<h5>
													Features
												</h5>
												
												<p>
													<label for="creatives" class="d-inline px-2">
															Upto to <input required id="creatives" name="features[creatives]" type="number" class="input-mini"> creatives per month
													</label>
												</p>
												
												<p>
													<input required id="graphicDesigners" name="features[graphicDesigners]" type="number" class="input-mini">
													<label for="graphicDesigners" class="d-inline px-2">
														dedicated graphic designer
													</label>
												</p>
												
												<p>
													<input required id="motionGraphicDesigner" name="features[motionGraphicDesigner]" type="number" class="input-mini">
													<label for="motionGraphicDesigner" class="d-inline px-2">
														dedicated motion/graphic designer
													</label>
												</p>
												<p>
													<input required id="videos" name="features[videos]" type="number" class="input-mini">
													<label for="videos" class="d-inline px-2">
															videos upto 
															<input required id="mins" name="features[mins]" type="number" class="input-mini">
															mins each
													</label>
												</p>
												
												<p>
													<input required id="revisions" name="features[revisions]" type="number" class="input-mini">
													<label for="revisions" class="d-inline px-2">
															Revisions
													</label>
												</p>

												<p>
													<input required id="brands" name="features[brands]" type="number" class="input-mini">
													<label for="brands" class="d-inline px-2">
														brands
													</label>
												</p>
												
											</div>
										@endif

										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<p class="d-flex justify-content-end">
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
@extends('layouts.main')

@section('wrapper')
    {{-- assets/images/1000_F_499563985_5epEZtgJYmAgVpxrcXrw8EyIjJM9ukmt.jpg --}}

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Onovo Hero -->
        <section class="onovo-section onovo-hero hero--two">

            <!-- Hero swiper -->
            <div class="swiper-container js-hero-slider" data-loop="true" data-autoplay="6000">
                <div class="swiper-wrapper">

                    <!--slide-->
                    <div class="swiper-slide" data-swiper-autoplay>
                        <div class="onovo-hero-slide-item">
                            <div class="image" data-dimg="https://webnetpk.com/filemanager/photos/1/60af69a8c451e.png"
                                data-mimg="https://webnetpk.com/filemanager/photos/1/60af69a8c451e.png">
                                <div class="ovrl" style="opacity: 0.95;"></div>
                            </div>
                            <div class="container">
                                <div class="titles">
                                    <h1 class="title onovo-text-white">
                                        <span data-splitting> Ultimate Graphics <br />At a Fixed Price </span>
                                    </h1>
                                    <div class="text">
                                        <div class="subtitle onovo-text-white subtitle--left">
                                            <div data-splitting> We're your dedicated team of creative designers, committed to delivering endless graphic solutions within your budget." </div>
                                        </div>
                                        <div class="onovo-bts">
                                            <a class="onovo-btn btn--border btn--white btn--color onovo-hover-btn"
                                                href="{{ route('about') }}">
                                                <i class="arrow">
                                                    <span></span>
                                                </i>
                                                <span> Learn More </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--slide-->
                    <div class="swiper-slide" data-swiper-autoplay>
                        <div class="onovo-hero-slide-item">
                            <div class="image video">
                                <video autoplay muted loop playsinline>
                                    <source src="assets/images/video-digital1.mp4" type="video/mp4">
                                </video>
                                <div class="ovrl" style="opacity: 0.95;"></div>
                            </div>
                            <div class="container">
                                <div class="titles">
                                    <h1 class="title onovo-text-white">
                                        <span data-splitting> Technology &amp; Mobile <br />App Development </span>
                                    </h1>
                                    <div class="text">
                                        <div class="subtitle onovo-text-white subtitle--left">
                                            <div data-splitting> We build readymade websites, mobile apps <br>and elaborate
                                                online business services. </div>
                                        </div>
                                        <div class="onovo-bts">
                                            <a class="onovo-btn btn--border btn--white btn--color onovo-hover-btn"
                                                href="projects.html">
                                                <i class="arrow">
                                                    <span></span>
                                                </i>
                                                <span> View Projects </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--slide-->
                    <div class="swiper-slide" data-swiper-autoplay>
                        <div class="onovo-hero-slide-item">
                            <div class="image" data-dimg="assets/images/posts4.jpg" data-mimg="assets/images/posts4.jpg">
                                <div class="ovrl" style="opacity: 0.95;"></div>
                            </div>
                            <div class="container">
                                <div class="titles">
                                    <h1 class="title onovo-text-white">
                                        <span data-splitting> Modern 3D Animation <br />Product Design </span>
                                    </h1>
                                    <div class="text">
                                        <div class="subtitle onovo-text-white subtitle--left">
                                            <div data-splitting> We build readymade websites, mobile apps, and elaborate
                                                online business services. </div>
                                        </div>
                                        <div class="onovo-bts">
                                            <a class="onovo-btn btn--border btn--white btn--color onovo-hover-btn"
                                                href="services.html">
                                                <i class="arrow">
                                                    <span></span>
                                                </i>
                                                <span> Our Services </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--navs-->
                <div class="onovo-navs js-hero-slider-navs">
                    <div class="onovo-prev js-hero-slider-prev nav--white onovo-hover-2">
                        <i></i>
                    </div>
                    <div class="onovo-paginations-container pag--white">
                        <div class="onovo-paginations js-hero-pagination"></div>
                    </div>
                    <div class="onovo-next js-hero-slider-next nav--white onovo-hover-2">
                        <i></i>
                    </div>
                </div>

            </div>

        </section>

        <!-- Onovo Services -->
        <section class="onovo-section gap-top-140 gap-bottom-140">
            <div class="container">

                <!-- Heading -->
                <div class="onovo-heading gap-bottom-40 align-center">
                    <div class="onovo-subtitle-1">
                        <span> Welcome to Onovo </span>
                    </div>
                    <h2 class="onovo-title-2">
                        <span> Digital Creative Agency <br />with Breaking Ideas </span>
                    </h2>
                </div>

                <!-- Description -->
                <div class="row gap-bottom-60">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3 align-center">
                        <div class="onovo-text">
                            <p>From the moment our company was founded, we have helped our clients find <strong>exceptional
                                    solutions for their businesses</strong>, creating memorable brands and digital products.
                                Our expertise grows with each year. </p>
                            <p><img src="assets/images/signature.png" alt="" /></p>
                        </div>
                    </div>
                </div>

                <!-- Services items -->
                <div class="row gap-row">

                    <!--service item-->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="onovo-service-item">
                            <div class="image">
                                <a href="service-detail.html">
                                    <img src="assets/images/serv-icon4.png" alt="Brand Creation" />
                                </a>
                            </div>
                            <div class="onovo-service-item-inner onovo-hover-3 onovo-hover-black">
                                <h5 class="title">
                                    <a href="service-detail.html">
                                        <span data-splitting data-onovo-scroll> Brand Creation </span>
                                    </a>
                                </h5>
                                <div class="list">
                                    <ul>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Brand Strategy </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Visual Identity </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Naming </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Toolkits </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Guidelines </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--service item-->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="onovo-service-item">
                            <div class="image">
                                <a href="service-detail.html">
                                    <img src="assets/images/serv-icon5.png" alt="Web Campaigns" />
                                </a>
                            </div>
                            <div class="onovo-service-item-inner onovo-hover-3 onovo-hover-black">
                                <h5 class="title">
                                    <a href="service-detail.html">
                                        <span data-splitting data-onovo-scroll> Web Campaigns </span>
                                    </a>
                                </h5>
                                <div class="list">
                                    <ul>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Creative Strategy </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Creative Direction </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Concepts </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Copywriting </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Social Media </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--service item-->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="onovo-service-item">
                            <div class="image">
                                <a href="service-detail.html">
                                    <img src="assets/images/serv-icon6.png" alt="UX / UI Design" />
                                </a>
                            </div>
                            <div class="onovo-service-item-inner onovo-hover-3 onovo-hover-black">
                                <h5 class="title">
                                    <a href="service-detail.html">
                                        <span data-splitting data-onovo-scroll> UX / UI Design </span>
                                    </a>
                                </h5>
                                <div class="list">
                                    <ul>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Native and Web Apps </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Campaign / Brand Sites </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Machine Learning / AI </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Brand Design </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="onovo-lnk" href="service-detail.html">
                                                <span data-splitting data-onovo-scroll> Product Animation Design </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Onovo Projects -->
        <section class="onovo-section gap-top-140 gap-bottom-140">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

                        <!-- Heading -->
                        <div class="onovo-heading gap-bottom-40">
                            <div class="onovo-subtitle-1">
                                <span> Featured Projects </span>
                            </div>
                            <h2 class="onovo-title-2">
                                <span> Take a Look at Some <br>of Our Work </span>
                            </h2>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 align-right hide-on-mobile">

                        <!-- Button -->
                        <a class="onovo-btn onovo-hover-btn" href="projects.html">
                            <i class="arrow">
                                <span></span>
                            </i>
                            <span> All Projects </span>
                        </a>

                    </div>
                </div>

                <!-- Projects Side -->
                <div class="onovo-portfolio portfolio--side">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">

                            <!-- Filter projects-->
                            <div class="onovo-filter-container">
                                <div class="onovo-filter js-onovo-filter">
                                    <ul>
                                        <li>
                                            <button class="onovo-filter-item item--active" type="button"
                                                data-filter="*">
                                                <span class="onovo-lnk" data-splitting data-onovo-scroll>All
                                                    Projects</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="onovo-filter-item" type="button" data-filter=".marketing">
                                                <span class="onovo-lnk" data-splitting data-onovo-scroll>Marketing</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="onovo-filter-item" type="button" data-filter=".interactive">
                                                <span class="onovo-lnk" data-splitting data-onovo-scroll>Interactive</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="onovo-filter-item" type="button" data-filter=".design">
                                                <span class="onovo-lnk" data-splitting data-onovo-scroll>Design</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="onovo-filter-item" type="button" data-filter=".branding">
                                                <span class="onovo-lnk" data-splitting data-onovo-scroll>Branding</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

                            <!--Projects items-->
                            <div class="row onovo-portfolio-items">

                                <!--project item-->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col branding ">
                                    <div class="onovo-portfolio-item">
                                        <div class="image" data-onovo-overlay data-onovo-scroll>
                                            <a href="project-detail.html" class="onovo-hover-3">
                                                <img src="assets/images/project-n01-3-1080x800.jpg"
                                                    alt="Museums Art Concept" />
                                            </a>
                                        </div>
                                        <div class="desc">
                                            <h5 class="title">
                                                <a class="onovo-lnk" href="project-detail.html">
                                                    <span data-splitting data-onovo-scroll>Museums Art Concept</span>
                                                </a>
                                            </h5>
                                            <div class="text">
                                                <div data-splitting data-onovo-scroll>
                                                    <span>branding <em>,</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--project item-->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col interactive ">
                                    <div class="onovo-portfolio-item">
                                        <div class="image" data-onovo-overlay data-onovo-scroll>
                                            <a href="project-detail.html" class="onovo-hover-3">
                                                <img src="assets/images/project-3-1080x800.jpg"
                                                    alt="Flower Store Mobile App" />
                                            </a>
                                        </div>
                                        <div class="desc">
                                            <h5 class="title">
                                                <a class="onovo-lnk" href="project-detail.html">
                                                    <span data-splitting data-onovo-scroll>Flower Store Mobile App</span>
                                                </a>
                                            </h5>
                                            <div class="text">
                                                <div data-splitting data-onovo-scroll>
                                                    <span>interactive <em>,</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--project item-->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col design ">
                                    <div class="onovo-portfolio-item">
                                        <div class="image" data-onovo-overlay data-onovo-scroll>
                                            <a href="project-detail.html" class="onovo-hover-3">
                                                <img src="assets/images/project-4-1080x800.jpg"
                                                    alt="Business Card Logo" />
                                            </a>
                                        </div>
                                        <div class="desc">
                                            <h5 class="title">
                                                <a class="onovo-lnk" href="project-detail.html">
                                                    <span data-splitting data-onovo-scroll>Business Card Logo</span>
                                                </a>
                                            </h5>
                                            <div class="text">
                                                <div data-splitting data-onovo-scroll>
                                                    <span>design <em>,</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--project item-->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col marketing ">
                                    <div class="onovo-portfolio-item">
                                        <div class="image" data-onovo-overlay data-onovo-scroll>
                                            <a href="project-detail.html" class="onovo-hover-3">
                                                <img src="assets/images/project-2-2-1080x800.jpg"
                                                    alt="Market Economy Graphics" />
                                            </a>
                                        </div>
                                        <div class="desc">
                                            <h5 class="title">
                                                <a class="onovo-lnk" href="project-detail.html">
                                                    <span data-splitting data-onovo-scroll>Market Economy Graphics</span>
                                                </a>
                                            </h5>
                                            <div class="text">
                                                <div data-splitting data-onovo-scroll>
                                                    <span>marketing <em>,</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--project item-->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col design ">
                                    <div class="onovo-portfolio-item">
                                        <div class="image" data-onovo-overlay data-onovo-scroll>
                                            <a href="project-detail.html" class="onovo-hover-3">
                                                <img src="assets/images/project-2-1080x800.jpg"
                                                    alt="Headphones 3D Rendering" />
                                            </a>
                                        </div>
                                        <div class="desc">
                                            <h5 class="title">
                                                <a class="onovo-lnk" href="project-detail.html">
                                                    <span data-splitting data-onovo-scroll>Headphones 3D Rendering</span>
                                                </a>
                                            </h5>
                                            <div class="text">
                                                <div data-splitting data-onovo-scroll>
                                                    <span>design <em>,</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--project item-->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col branding ">
                                    <div class="onovo-portfolio-item">
                                        <div class="image" data-onovo-overlay data-onovo-scroll>
                                            <a href="project-detail.html" class="onovo-hover-3">
                                                <img src="assets/images/project-1-1080x800.jpg"
                                                    alt="Circle Cardboard Concept" />
                                            </a>
                                        </div>
                                        <div class="desc">
                                            <h5 class="title">
                                                <a class="onovo-lnk" href="project-detail.html">
                                                    <span data-splitting data-onovo-scroll>Circle Cardboard Concept</span>
                                                </a>
                                            </h5>
                                            <div class="text">
                                                <div data-splitting data-onovo-scroll>
                                                    <span>branding <em>,</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--project item-->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col interactive ">
                                    <div class="onovo-portfolio-item">
                                        <div class="image" data-onovo-overlay data-onovo-scroll>
                                            <a href="project-detail.html" class="onovo-hover-3">
                                                <img src="assets/images/project-8-1080x800.jpg"
                                                    alt="Daily Weather Mobile App" />
                                            </a>
                                        </div>
                                        <div class="desc">
                                            <h5 class="title">
                                                <a class="onovo-lnk" href="project-detail.html">
                                                    <span data-splitting data-onovo-scroll>Daily Weather Mobile App</span>
                                                </a>
                                            </h5>
                                            <div class="text">
                                                <div data-splitting data-onovo-scroll>
                                                    <span>interactive <em>,</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--project item-->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 onovo-portfolio-col marketing ">
                                    <div class="onovo-portfolio-item">
                                        <div class="image" data-onovo-overlay data-onovo-scroll>
                                            <a href="project-detail.html" class="onovo-hover-3">
                                                <img src="assets/images/project-5-1080x800.jpg"
                                                    alt="Colorful Ice Cream Ornament" />
                                            </a>
                                        </div>
                                        <div class="desc">
                                            <h5 class="title">
                                                <a class="onovo-lnk" href="project-detail.html">
                                                    <span data-splitting data-onovo-scroll>Colorful Ice Cream
                                                        Ornament</span>
                                                </a>
                                            </h5>
                                            <div class="text">
                                                <div data-splitting data-onovo-scroll>
                                                    <span>marketing <em>,</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Button -->
                            <div class="align-center hide-on-desktop">
                                <a class="onovo-btn onovo-hover-btn" href="projects.html">
                                    <i class="arrow">
                                        <span></span>
                                    </i>
                                    <span> View All Projects </span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- Onovo Team -->
        <section class="onovo-section gap-top-140 gap-bottom-140">
            <div class="container">

                <!-- Team items -->
                <div class="row gap-row align-center">

                    <!-- Heading -->
                    <div class="col-xs-12 col-sm-12 col-md-11 col-lg-5">
                        <div class="onovo-heading align-left">
                            <div class="onovo-subtitle-1">
                                <span> Meet Our Company Family </span>
                            </div>
                            <h2 class="onovo-title-2">
                                <span> Our Team is The Difference. <br>Our Chemistry is The Spark. </span>
                            </h2>
                        </div>
                    </div>

                    <!--team item-->
                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>

                    <!--team item-->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="onovo-team-two">
                            <div class="onovo-team-two-item">
                                <div class="image onovo-hover-3 onovo-hover-black-30" data-onovo-overlay data-onovo-scroll>
                                    <a href="team-detail.html">
                                        <img src="assets/images/team-2-1000x1357.jpg" alt="Thomas Jackki" />
                                    </a>
                                    <div class="onovo-social-2">
                                        <ul>
                                            <li>
                                                <a class="onovo-social-link onovo-hover-2" href="facebook.com"
                                                    title="Facebook" target="_blank">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="onovo-social-link onovo-hover-2" href="linkedin.com"
                                                    title="LinkedIn" target="_blank">
                                                    <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h5 class="title">
                                        <a href="team-detail.html" class="onovo-lnk">
                                            <span data-splitting data-onovo-scroll> Thomas Jackki </span>
                                        </a>
                                    </h5>
                                    <div class="onovo-subtitle-1">
                                        <span data-splitting data-onovo-scroll> UI &amp; UX Designer </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--team item-->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="onovo-team-two">
                            <div class="onovo-team-two-item">
                                <div class="image onovo-hover-3 onovo-hover-black-30" data-onovo-overlay data-onovo-scroll>
                                    <a href="team-detail.html">
                                        <img src="assets/images/team-6-1000x1357.jpg" alt="Melanie Robinson" />
                                    </a>
                                    <div class="onovo-social-2">
                                        <ul>
                                            <li>
                                                <a class="onovo-social-link onovo-hover-2" href="facebook.com"
                                                    title="Facebook" target="_blank">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="onovo-social-link onovo-hover-2" href="linkedin.com"
                                                    title="LinkedIn" target="_blank">
                                                    <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h5 class="title">
                                        <a href="team-detail.html" class="onovo-lnk">
                                            <span data-splitting data-onovo-scroll> Melanie Robinson </span>
                                        </a>
                                    </h5>
                                    <div class="onovo-subtitle-1">
                                        <span data-splitting data-onovo-scroll> Seo &amp; Marketing </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--team item-->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="onovo-team-two">
                            <div class="onovo-team-two-item">
                                <div class="image onovo-hover-3 onovo-hover-black-30" data-onovo-overlay data-onovo-scroll>
                                    <a href="team-detail.html">
                                        <img src="assets/images/team-1-1000x1357.jpg" alt="Steven Morrison" />
                                    </a>
                                    <div class="onovo-social-2">
                                        <ul>
                                            <li>
                                                <a class="onovo-social-link onovo-hover-2" href="facebook.com"
                                                    title="Facebook" target="_blank">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="onovo-social-link onovo-hover-2" href="linkedin.com"
                                                    title="LinkedIn" target="_blank">
                                                    <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h5 class="title">
                                        <a href="team-detail.html" class="onovo-lnk">
                                            <span data-splitting data-onovo-scroll> Steven Morrison </span>
                                        </a>
                                    </h5>
                                    <div class="onovo-subtitle-1">
                                        <span data-splitting data-onovo-scroll> Web Designer </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--team item-->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="onovo-team-two">
                            <div class="onovo-team-two-item">
                                <div class="image onovo-hover-3 onovo-hover-black-30" data-onovo-overlay data-onovo-scroll>
                                    <a href="team-detail.html">
                                        <img src="assets/images/team-4-1000x1357.jpg" alt="Alexander Bravo" />
                                    </a>
                                    <div class="onovo-social-2">
                                        <ul>
                                            <li>
                                                <a class="onovo-social-link onovo-hover-2" href="facebook.com"
                                                    title="Facebook" target="_blank">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="onovo-social-link onovo-hover-2" href="linkedin.com"
                                                    title="LinkedIn" target="_blank">
                                                    <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h5 class="title">
                                        <a href="team-detail.html" class="onovo-lnk">
                                            <span data-splitting data-onovo-scroll> Alexander Bravo </span>
                                        </a>
                                    </h5>
                                    <div class="onovo-subtitle-1">
                                        <span data-splitting data-onovo-scroll> Full-Stack Developer </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--team item-->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="onovo-team-two">
                            <div class="onovo-team-two-item">
                                <div class="image onovo-hover-3 onovo-hover-black-30" data-onovo-overlay data-onovo-scroll>
                                    <a href="team-detail.html">
                                        <img src="assets/images/team-7-1-1000x1357.jpg" alt="Charlotte Johnson" />
                                    </a>
                                    <div class="onovo-social-2">
                                        <ul>
                                            <li>
                                                <a class="onovo-social-link onovo-hover-2" href="facebook.com"
                                                    title="Facebook" target="_blank">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="onovo-social-link onovo-hover-2" href="linkedin.com"
                                                    title="LinkedIn" target="_blank">
                                                    <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h5 class="title">
                                        <a href="team-detail.html" class="onovo-lnk">
                                            <span data-splitting data-onovo-scroll> Charlotte Johnson </span>
                                        </a>
                                    </h5>
                                    <div class="onovo-subtitle-1">
                                        <span data-splitting data-onovo-scroll> Seo &amp; Copywriter </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 align-center align-self-center">
                        <a class="onovo-btn-circle onovo-hover-2" href="team.html">
                            <i class="arrow">
                                <span></span>
                            </i>
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <!-- Onovo Reviews -->
        <section class="onovo-section gap-bottom-140">
            <div class="container">

                <!-- Reviews -->
                <div class="onovo-reviews gap-140" style="background-color: #000;">
                    <div
                        style="background-image: url(assets/images/testi-bg.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover; position: absolute; left: 0; top: 0; width: 100%; height: 100%; opacity: 0.24;">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <!-- Reviews swiper -->
                            <div class="onovo-reviews-carousel reviews--full onovo-text-white align-center">
                                <div class="swiper-container js-reviews-carousel" data-loop="false" data-autoplay="6000">
                                    <div class="swiper-wrapper">

                                        <!--slide-->
                                        <div class="swiper-slide onovo-reviews-item" data-swiper-autoplay>
                                            <div class="text">
                                                <div data-splitting>
                                                    <p>“ Their high level of customer service complemented their technical
                                                        expertise. They were responsive, supportive, and communicative.
                                                        Their dedication to the project was impressive. ”</p>
                                                </div>
                                            </div>
                                            <h5 class="title">
                                                <span data-splitting> Thomas Smith </span>
                                            </h5>
                                            <div class="subtitle">
                                                <span data-splitting> Customer Support </span>
                                            </div>
                                            <div class="onovo-stars stars--small">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>

                                        <!--slide-->
                                        <div class="swiper-slide onovo-reviews-item" data-swiper-autoplay>
                                            <div class="text">
                                                <div data-splitting>
                                                    <p>“ Their high level of customer service complemented their technical
                                                        expertise. They were responsive, supportive, and communicative.
                                                        Their dedication to the project was impressive. ”</p>
                                                </div>
                                            </div>
                                            <h5 class="title">
                                                <span data-splitting> Mike Cameron </span>
                                            </h5>
                                            <div class="subtitle">
                                                <span data-splitting> Code Quality </span>
                                            </div>
                                            <div class="onovo-stars stars--small">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>

                                        <!--slide-->
                                        <div class="swiper-slide onovo-reviews-item" data-swiper-autoplay>
                                            <div class="text">
                                                <div data-splitting>
                                                    <p>“ Their high level of customer service complemented their technical
                                                        expertise. They were responsive, supportive, and communicative.
                                                        Their dedication to the project was impressive. ”</p>
                                                </div>
                                            </div>
                                            <h5 class="title">
                                                <span data-splitting> Jessica Brown </span>
                                            </h5>
                                            <div class="subtitle">
                                                <span data-splitting> Design Quality </span>
                                            </div>
                                            <div class="onovo-stars stars--small">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!--navs-->
                                <div class="js-reviews-carousel-navs">
                                    <div class="onovo-prev js-reviews-carousel-prev onovo-hover-2 nav--white">
                                        <i></i>
                                    </div>
                                    <div class="onovo-next js-reviews-carousel-next onovo-hover-2 nav--white">
                                        <i></i>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Onovo CTA-2 -->
        <section class="onovo-section gap-top-140 gap-bottom-140">
            <div class="container"
                style="background-image: url(assets/images/bg_map.jpg); background-position: 65% 0%; background-repeat: no-repeat; background-size: contain;">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 align-self-center gap-bottom-40">

                        <!-- Heading -->
                        <div class="onovo-heading gap-bottom-40">
                            <div class="onovo-subtitle-1">
                                <span> Have ideas for your business? </span>
                            </div>
                            <h2 class="onovo-title-2">
                                <span> Let's make your <br>brand brilliant </span>
                            </h2>
                        </div>

                        <!-- Text -->
                        <div class="onovo-cta-2-text">
                            <p>Then let us know about it and we can see what we can do to help. Fill in this very quick
                                enquiry.</p>
                            <p><a href="tel:+02078523587">+ (020) 7852 3587</a></p>
                        </div>

                        <!-- Social-->
                        <div class="onovo-social-1">
                            <ul>
                                <li>
                                    <a class="onovo-social-link onovo-hover-2" href="http://twitter.com" title="Twitter"
                                        target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="onovo-social-link onovo-hover-2" href="http://linkedin.com"
                                        title="LinkedIn" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="onovo-social-link onovo-hover-2" href="http://dribbble.com"
                                        title="Dribbble" target="_blank">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 offset-lg-1">

                        <!-- Onovo Form -->
                        <div class="onovo-form-box onovo-text-white">
                            <h5>Send Us A Message</h5>
                            <p>Feel some love, to see what we can do...t!</p>
                            <form id="cform" class="cform" method="post">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <p>
                                            <input size="40" placeholder="Full Name" type="text"
                                                name="name" />
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <p>
                                            <input size="40" placeholder="Email Address" type="email"
                                                name="email" />
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <p>
                                            <input size="40" placeholder="Phone" type="tel" name="tel" />
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <p>
                                            <textarea cols="40" rows="10" placeholder="Message" name="message"></textarea>
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <p>
                                            <button type="submit" class="onovo-btn onovo-hover-btn btn--active">
                                                <span>Send Message</span>
                                            </button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Onovo Brands -->
        <section class="onovo-section">
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
                                    <img decoding="async" src="assets/images/brand1.png" width="285" height="200"
                                        alt="Visit Website" />
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
                                    <img decoding="async" src="assets/images/brand2.png" width="285" height="200"
                                        alt="Visit Website" />
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
                                    <img decoding="async" src="assets/images/brand3.png" width="285" height="200"
                                        alt="Visit Website" />
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
                                    <img decoding="async" src="assets/images/brand4.png" width="285" height="200"
                                        alt="Visit Website" />
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
                                    <img decoding="async" src="assets/images/brand5.png" width="285" height="200"
                                        alt="Visit Website" />
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
                                    <img decoding="async" src="assets/images/brand6.png" width="285" height="200"
                                        alt="Visit Website" />
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
                                    <img decoding="async" src="assets/images/brand7.png" width="285" height="200"
                                        alt="Visit Website" />
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
                                    <img decoding="async" src="assets/images/brand2.png" width="285" height="200"
                                        alt="Visit Website" />
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

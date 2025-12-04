@extends('layouts.frontend')
@section('title')
    Buy Home Security | Affordable Smart Protection for Your Home
@endsection
@section('content')

<style>
    .pb-50
 {
    padding-bottom: 20px;
}
</style>
    <header class="p-relative">

    <!-- Toast Notification -->
    <div class="toast show align-items-center border-0 p-relative" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="d-flexs">
            <div class="toast-body p-0">
                <div class="header-notification-area black-bg pt-15 pb-15">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="notification-text text-center">
                                    <p class="m-0"><b>Limited Time Offer:</b> Talk To Our Security Experts & Get
                                        3 Months Free Monitoring Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Close button removed intentionally -->
        </div>
    </div>

    <!-- Desktop Header -->
    <div class="tp-header-area header-area-space p-relative pt-20 pb-50 d-none d-xl-block"
        data-background="/frontend/my_img/header-bg.webp"
        style="background-image: url('/frontend/my_img/header-bg.webp');">
        <div class="container">
            <div class="row align-items-center">

                <!-- Logo -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                    <div class="logo">
                        <a href="/home"><img src="/frontend/my_img/logo/logo-1.png" alt="Logo"
                                style="max-width: 65%; !important"></a>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="col-xl-9">
                    <div class="tp-contact-wapper d-flex justify-content-end">

                        <!-- Call now section -->
                        <div class="tp-header-contact d-none d-xl-block pr-0">
                            <div class="tp-header-contact-icon d-flex align-items-center">
                                <div>
                                    <a href="#" style="cursor: pointer;"><i class="fas fa-phone-alt"></i></a>
                                </div>
                                <div class="tp-header-icon-info">
                                    <label>Call Now</label>
                                    <a href="tel:+15715195912" style="cursor: pointer;">+1 (571) 519-5912</a>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Toggle -->
                        
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Desktop Menu -->

    <!-- Mobile Header -->
    <div class="tp-header-2-mobile-area d-block d-xl-none"
        data-background="https://wp.aqlova.com/sectox/wp-content/themes/sectox/assets/img/bg/header-bg.jpg"
        style="background-image: url('https://wp.aqlova.com/sectox/wp-content/themes/sectox/assets/img/bg/header-bg.jpg');">

        <div class="container">
            <div class="row align-items-center">

                <!-- Logo -->
                <div class="col-6">
                    <div class="logo logo-white">
                        <a href="/"><img src="/frontend/my_img/logo/logo-1.png" alt="logo"></a>
                    </div>
                </div>

                <!-- Call Button & Menu -->
                <div class="col-6 d-flex justify-content-end align-items-center">

                    <div class="contact__btn me-2 mt-2">
                        <a class="tp-btn" href="tel:+15715195912"
                            style="display:inline-block; text-align:center; font-size:14px; padding:6px 10px; line-height:2.2; min-width:110px; height:40px; background:#fff; color:#5292a4; border-radius:5px; border:1px solid #5292a4;">
                            <div style="display:flex; flex-direction:column; align-items:center; line-height:1.2;">
                                <span style="font-weight:600; font-size:11px;">Call Now</span>
                                <span style="font-size:10px;">+1 (571) 519-5912</span>
                            </div>
                        </a>
                    </div>

                    <a href="/contact" class="tp-btn-simelar ml-20 d-none d-md-block">Get In Touch</a>

                   

                </div>

            </div>
        </div>
    </div>

</header>
    <div class="tp-slider-area">
        <div class="slider-active slider-arrow-style">
            <div class="tp-slider-item tp-slider-height tp-slider-overlay-2 d-flex align-items-center"
                data-background="/frontend/my_img/slider/banner-1.webp">
                <img src="/frontend/my_img/slider/banner-1.webp" alt="Banner image 1" style="display: none;" />
                <div class="container">
                    <div class="row justify-content-xxl-end">
                        <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-12">
                            <div class="tp-slider-content tp-slider-content-two ">
                                <span class="tp-slider-sub-title p-0">Solid solution for your home & office</span>
                                <h1 class="tp-slider-title">Advanced Security Solutions For Every Space</h1>
                                <p>Next-gen protection designed for every environment.
                                    Engineered to adapt, built to defend—wherever you need it.</p>
                                <div class="tp-slide-btn-box mt-45">
                                    <div class="slider-btn mr-30">
                                        <a href="tel:+15715195912" class="tp-btn-white"><i class="fas fa-phone-alt"></i>
                                            +1 (571) 519-5912</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-slider-item tp-slider-height tp-slider-overlay-2 d-flex align-items-center"
                data-background="/frontend/my_img/slider/banner-2.webp">
                <img src="/frontend/my_img/slider/banner-2.webp" alt="Banner image 2" style="display: none;" />
                <div class="container">
                    <div class="row justify-content-xl-end">
                        <div class="col-xxl-6 col-xl-7 col-lg-8 ">
                            <div class="tp-slider-content tp-slider-content-two">
                                <span class="tp-slider-sub-title">Smart Security, Smarter Living</span>
                                <h2 class="tp-slider-title">Innovative Technology at Your Fingertips</h2>
                                <p>Control your home security remotely with our smart accessories designed for convenience
                                    and safety. Stay connected, stay safe.</p>
                                <div class="tp-slide-btn-box mt-45">
                                    <div class="slider-btn mr-30">
                                        <a href="tel:+15715195912" class="tp-btn-white"><i class="fas fa-phone-alt"></i>
                                            +1 (571) 519-5912</a>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-about-area pt-80 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="tp-about-wrapper tp-about-wrapper-2 pt-40 mb-40 pr-40">
                        <div class="tp-section-box tp-section-box-2  p-relative">
                            <span class="tp-section-subtitle right d-inline-block">Trusted Security Benefits</span>
                            <h2 class="tp-section-title mb-15">
                                When You Need Better Security Installation
                            </h2>
                            <p>Get help from a caring and knowledgeable professional. Let us know what we can do to make
                                your life easier
                            </p>
                        </div>
                        <hr class="mt-30 mb-30">
                        <div class="tp-about-fea-item">
                            <ul>
                                <li><i class="fal fa-check"></i> Video Surveillance</li>
                                <li><i class="fal fa-check"></i> Integrated Security Systems</li>
                                <li><i class="fal fa-check"></i> Real-Time Security Support</li>
                                <li><i class="fal fa-check"></i> Comprehensive Security Plans</li>
                                <li><i class="fal fa-check"></i> Burglary Sensor Detection</li>
                                <li><i class="fal fa-check"></i> 24/7 Alarm Monitoring</li>
                            </ul>
                        </div>
                        <div class="tp-about-fea-signature d-flex align-items-center mt-25">
                            <div class="sig-btn mr-30 mb-10">
                                <a class="tp-btn-border" href="tel:+15715195912"> <i class="fas fa-phone-alt"></i> Call To
                                    Security Expert
                                    <i class="fal fa-long-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="tp-about-wapper2 pl-10">
                        <img src="/frontend/my_img/about-bg.webp" alt="About-US">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-area grey-bg pt-80 pb-30">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <div class="tp-section-box tp-section-box-2 p-relative mb-45">
                        <span class="tp-section-subtitle d-inline-block pre mb-10"> What We Provide</span>
                        <h2 class="tp-section-title">
                            We Provide Awesome Expert Security Services
                        </h2>
                        <p>At Buy Home Security, we offer expert security solutions tailored to protect what matters most.
                            With advanced technology and professional care, we ensure your safety and peace of mind.”
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="tpsvbox mb-30">
                        <div class="tpsvbox__thumb">
                            <div class="fix"><a href="#0"><img src="/frontend/my_img/wwp-1.webp" alt="Private Security"></a>
                            </div>
                            <div class="tpsvbox__icon">
                               <a href="#0"> <i class="fas fa-shield-alt"></i></a>
                            </div>
                        </div>
                        <div class="tpsvbox__content text-center">
                            <div class="tpsvbox__big-text">
                                <h2>01</h2>
                            </div>
                            <h3 class="tpsvbox__title">Private Security</h3>
                            <p class="m-0">Delivering high-quality security systems and the latest technology to keep you safe and secure.
                            </p></br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tpsvbox mb-30">
                        <div class="tpsvbox__thumb">
                            <div class="fix"><a href="#0"><img src="/frontend/my_img/bank.png" alt="Banking Sector"></a>
                            </div>
                            <div class="tpsvbox__icon">
                                <a href="#0"><i class="fas fa-university"></i></a>
                            </div>
                        </div>
                        <div class="tpsvbox__content text-center">
                            <div class="tpsvbox__big-text">
                                <h2>02</h2>
                            </div>
                            <h3 class="tpsvbox__title">Banking Sector</h3>
                            <p class="m-0">Protect your financial assets with advanced banking security solutions.
Stay ahead of fraud with real-time monitoring and threat detection.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tpsvbox mb-30">
                        <div class="tpsvbox__thumb">
                            <div class="fix"><a href="#0"><img src="/frontend/my_img/education.png"
                                        alt="Education Institute"></a></div>
                            <div class="tpsvbox__icon">
                                <a href="#0"><i class="flaticon-school"></i></a>
                            </div>
                        </div>
                        <div class="tpsvbox__content text-center">
                            <div class="tpsvbox__big-text">
                                <h2>03</h2>
                            </div>
                            <h3 class="tpsvbox__title">Education Institute
                            </h3>
                            <p class="m-0">Empower your institution with next-gen security systems.
Monitor, manage, and safeguard your campus - anytime, anywhere.
                            </p></br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-details-area pt-80 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="team-info-main pt-0 pl-45">
                        <div class="team-details-info">
                            <h5>15 Years of Excellence in Security Solutions
                            </h5>
                            <p>With over 15 years of expertise in the field, we have been committed to delivering the best
                                in security and automation solutions. Buy Home Security has consistently ranked among the top
                                100 security companies in the nation by SDM Magazine, a testament to our dedication to
                                quality and innovation.
                                <br>
                                <br>
                                We focus on providing tailored solutions that meet the unique needs of our customers,
                                offering a perfect blend of advanced technology and user-friendly designs.

                            </p>
                        </div>
                        <div class="sig-btn mr-30 mb-10">
                            <a class="tp-btn-border" href="tel:+15715195912"> <i class="fas fa-phone-alt"></i> Talk To
                                Security Expert
                                <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="team-member">
                        <img src="/frontend/my_img/h1.webp" alt="15 Years of Excellence">
                    </div>
                </div>
                <hr class="mt-50 mb-50">
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="team-member">
                        <img src="/frontend/my_img/why_choose.png" alt="Why Choose Buy Home Security">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="team-info-main pt-0 pl-45">
                        <div class="team-details-info">
                            <h5>Why Choose Buy Home Security
                            </h5>
                            <p class="mb-1">Choose us for expert solutions, reliable service, and unmatched dedication to
                                your security
                                and convenience needs. Your safety is our priority
                            </p></br>
                        </div>
                        <div class="tp-ab-4-list">
                            <div class="tp-about-fea-item">
                                <ul>
                                    <li><i class="fal fa-check"></i> Easy to set up and use (professional installation
                                        available)</li>
                                    <li><i class="fal fa-check"></i> System with reliable 24/7 professional monitoring
                                    </li>
                                    <li><i class="fal fa-check"></i>Ethernet connection with cellular backup so you’re
                                        always connected</li>
                                    <li><i class="fal fa-check"></i>Faster emergency dispatch and fewer false alarms</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sig-btn mr-30 mb-10">
                            <a class="tp-btn-border" href="tel:+15715195912"> <i class="fas fa-phone-alt"></i> Call Now
                                To Speak With Expert
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-area pt-80 pb-30">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="tp-section-box tp-section-box-2 p-relative mb-45">
                  <span class="tp-section-subtitle d-inline-block right mb-10">testimonials</span>
                  <h2 class="tp-section-title">
                     User Feedbacks
                  </h2>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="tp-test-arrow text-end mb-45"></div>
            </div>
         </div>
         <div class="tp-testimonial-active tp-testimonial-white slider-space-30">
            <div class="testi-item-list">
               <div class="tp-testimonial-item text-center">
                  <div class="testi-img p-relative">
                     <img src="/frontend/assets/img/testimonial/test1.png" alt="User-1">
                     <i class="fal fa-quote-right quote-style"></i>
                  </div>
                  <h4 class="testi-text">“I’ve tried other services before, but nothing compares to this. The team was professional, the
                            system is easy to use, and the peace of mind is priceless. Definitely a 5-star experience.”</h4>
                  <div class="testi-meta">
                     <h5 class="reviewer-name">James Carter</h5>
                  </div>
               </div>
            </div>
            <div class="testi-item-list">
               <div class="tp-testimonial-item text-center">
                  <div class="testi-img p-relative">
                     <img src="/frontend/assets/img/testimonial/test2.png" alt="User-2">
                     <i class="fal fa-quote-right quote-style"></i>
                  </div>
                  <h4 class="testi-text">“The installation was fast, and now I feel
                            much safer at home. I highly recommend them to anyone looking for reliable home monitoring. Service was top-notch.”</h4>
                  </br>
                  <div class="testi-meta">
                     <h5 class="reviewer-name">Limbon N. Nelson</h5>
                  </div>
               </div>
            </div>
            <div class="testi-item-list">
               <div class="tp-testimonial-item text-center">
                  <div class="testi-img p-relative">
                     <img src="/frontend/assets/img/testimonial/test3.png" alt="User-3">
                     <i class="fal fa-quote-right quote-style"></i>
                  </div>
                  <h4 class="testi-text">“They made the entire process easy from start to finish. The service is reliable, and the peace
                            of mind it brings is worth every penny Great service, quick response times, and friendly
                            support.”</h4>
                  <div class="testi-meta">
                     <h5 class="reviewer-name">William Harris</h5>
                  </div>
               </div>
            </div>
            <div class="testi-item-list">
               <div class="tp-testimonial-item text-center">
                  <div class="testi-img p-relative">
                     <img src="/frontend/my_img/person-1.jpg" alt="User-4">
                     <i class="fal fa-quote-right quote-style"></i>
                  </div>
                  <h4 class="testi-text">“Reliable, easy to use, and gives me peace of mind knowing my home is protected 24/7. Highly recommend, Great protection and easy control from my phone.”</h4>
                   </br>
                  <div class="testi-meta">
                     <h5 class="reviewer-name">David Thompson</h5>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <style>
    .testi-text {
    font-size: 18px !important;
    color: var(--tp-common-black);
    font-weight: unset !important;
    line-height: 1.4 !important;
    margin-bottom: 15px !important;
}
   </style>
   
   
   
   <div class="tp-support-area pt-70 pb-30 p-relative" data-background="/frontend/my_img/support-bg.webp">
       <img src="/frontend/my_img/support-bg.webp" alt="Get support" style="display: none;" />
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10  m-auto">
                    <div class="tpsupport__overlay-content text-center">

                        <div class="tp-section-box tp-section-box-2 white-text p-relative mb-45 text-center">
                            <span class="tp-section-subtitle d-inline-block pre" style="font-size:32px; margin-bottom: 25px;">Get support</span>
                            <!-- <h2 class="tp-section-title">
                                Request A Quote
                            </h2> -->
                            <p class="m-0">
                                Please complete the form below, to request a quote, and we’ll be in touch. Or you can call
                                us and our specialists will provide the necessary help!
                    
                            </p>

                        </div>

                    </div>

                    <div class="tpsupport-wrapper d-flex justify-content-center">
    
    <!-- Button 1: Call Now -->
    <div class="tpsupport-ovr-button me-3"> <!-- 'me-3' adds right spacing -->
        <a class="tp-btn" href="tel:+15715195912">
            <i class="fas fa-phone-alt"></i> Call Now To Speak With Expert <i class="fal fa-angle-right"></i>
        </a>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>

<style>
    .tp-btn {
    display: inline-block;
    font-size: 15px;
    font-weight: 700;
    color: var(--tp-common-white);
    background: var(--tp-theme-1);
    height: 60px;
    line-height: 60px;
    text-align: center;
    padding: 0 14px;
    position: relative;
    z-index: 1;
    overflow: hidden;
}
</style>

    
    <div class="tp-feature-area pt-75 pb-30">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-12">
                    <div class="tp-section-box tp-section-box-2 p-relative mb-45">
                        <span class="tp-section-subtitle d-inline-block pre mb-10">features</span>
                        <h2 class="tp-section-title">
                            Core Level Features
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row  align-items-start justify-content-center">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="tp-fea-item p-relative mb-30">
                        <div class="tp-fea-icon d-flex">
                            <i class="flaticon-shield"></i>
                            <div class="fea-big-text">
                                <span>01</span>
                            </div>
                        </div>
                        <div class="tp-fea-content pt-40">
                            <h5>Smart Home System</h5>
                            <p class="m-0">Control your home security effortlessly with smart, connected technology.</p>
                        </div>
                    </div>
                    <div class="tp-fea-item p-relative mb-30">
                        <div class="tp-fea-icon d-flex">
                            <i class="flaticon-hacker"></i>
                            <div class="fea-big-text">
                                <span>02</span>
                            </div>
                        </div>
                        <div class="tp-fea-content pt-40">
                            <h5>Hacker Security</h5>
                            <p class="m-0">Protect your home network from cyber threats with advanced hacker defense.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 justify-content-center p-relative d-none d-xl-flex">
                    <div class="tp-fea-big-img p-relative">
                        <img src="/frontend/my_img/camera.webp" alt="camera">
                        <div class="tp-fea-plus-icon ">
                            <a href="#0"><i class="fal fa-plus"></i></a>
                            {{-- <div class="fea-plus-icon-text">
                                <h4 class="m-0">Video analytics systems with <br>
                                    smart cctv</h4>
                            </div> --}}
                        </div>
                        <div class="tp-fea-plus-icon2">
                            <a href="#0"><i class="fal fa-plus"></i></a>
                            {{-- <div class="fea-plus-icon-text2">
                                <h4 class="m-0">Video analytics systems with <br>
                                    smart cctv</h4>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="tp-fea-item p-relative mb-30">
                        <div class="tp-fea-icon d-flex">
                            <i class="flaticon-cctv-11"></i>
                            <div class="fea-big-text">
                                <span>03</span>
                            </div>
                        </div>
                        <div class="tp-fea-content pt-40">
                            <h5>Camera System</h5>
                            <p class="m-0">Keep an eye on what matters with high-definition security cameras.</p>
                        </div>
                    </div>
                    <div class="tp-fea-item p-relative mb-30">
                        <div class="tp-fea-icon d-flex">
                            <i class="flaticon-shield-1"></i>
                            <div class="fea-big-text">
                                <span>04</span>
                            </div>
                        </div>
                        <div class="tp-fea-content pt-40">
                            <h5>CCTV & Screening</h5>
                            <p class="m-0">Comprehensive CCTV and screening solutions for round-the-clock surveillance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="tp-footer-counter-area theme-bg pt-25">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-6 col-md-6 text-lg-start">
                        <div class="tp-counter-logo">
                            <a href="/home">
                                <img src="/frontend/my_img/logo/logo-1.png" alt="Logo"
                                    style="max-width: 86% !important; margin-bottom: 12px;">
                            </a>
                        </div>
                    </div>

                <div class="col-xl-3 col-lg-6 col-md-6 text-md-right">
                    <div class="footer-counter-content d-md-flex align-items-center mb-30">
                        <h2>820</h2>
                        <div class="counter-text">
                            <h3>Happy Users <br>
                                Around The World</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-counter-content d-md-flex align-items-center mb-30">
                        <h2>120</h2>
                        <div class="counter-text">
                            <h3>Projects <br>
                                Already Done</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-counter-content d-md-flex align-items-center mb-30">
                        <h2>20 <i class="fas fa-plus"></i></h2>
                        <div class="counter-text">
                            <h3>Get Rewards <br>
                                From Other Story</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.25); margin: 0;">
    <div class="copyright-area theme-bg pt-20 pb-20">
        <div class="container">
            <div class="row">

                <div class="col-xl-7 col-lg-7 text-lg-start col-12 text-center">
                    <div class="copyright-text">
                        <p>Copyright © 2025 Buy Home Security. All Rights Reserved.</p>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5 text-lg-end col-12 text-center">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="/privacy_policy">Privacy Policy</a></li>
                            <li><a href="/terms_and_condition">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

       <div class="modal fade" id="securityModal" tabindex="-1" aria-labelledby="securityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content custom-modal text-center">
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                style="position: absolute; top: 15px; right: 15px;">
            </button>
            <div class="mb-3">
                <img src="/frontend/my_img/logo/logo-2.png" alt="Logo" class="modal-logo">
            </div>
            <h4 class="fw-bold modal-title-text" id="securityModalLabel">Talk To Security Experts</h4>
            <p class="modal-subtext">Get 3 Months Free Monitoring Services</p>
            <div style="text-align: center; margin-top: 5px;">
                <a class="tp-btn"
                   href="tel:+15715195912"
                   style="display: inline-block; padding: 1px 39px; font-size: 19px; width: auto; min-width: 80px;">
                    <i class="fas fa-phone-alt"></i> Call Now
                </a>
            </div>
        </div>
    </div>
</div>

<a href="tel:+15715195912" class="call-floating-btn" title="Call Now">
        <i class="fas fa-phone-alt"></i>
    </a>
@endsection

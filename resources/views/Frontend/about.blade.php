@extends('layouts.frontend')
@section('title')
    About Us | Buy Home Security
@endsection
@section('content')
    <section class="breadcrumb__area include-bg pt-150 pb-150" data-background="/frontend/my_img/bredcrum/1.webp">
        <img src="/frontend/my_img/bredcrum/1.webp" alt="bredcrum img" style="display: none;" />
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list">
                            <span><a href="/">Home</a></span>
                            <span class="dvdr"><i class="flaticon-arrow-right"></i></span>
                            <span>About</span>
                        </div>
                        <h3 class="breadcrumb__title">About Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="tp-about-area pt-80 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="ab-wrapper-4 p-relative">
                        <div class="ab-right-img">
                            <img src="/frontend/my_img/about_1.webp" alt="About US">
                        </div>
                        <div class="tp-ab-left-meta">
                            <h3>Good Experience <br> In Last</h3>
                            <h4>15</h4>
                            <h5>Years</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="tp-about-info-wrapper pl-50 " >
                        <div class="tp-section-box tp-section-box-2  p-relative">
                            <span class="tp-section-subtitle right d-inline-block">About Us</span>
                            <h2 class="tp-section-title mb-15">
                                15 Years of Excellence in Security Solutions
                            </h2>
                        </div>
                        <hr class="mt-25 mb-30">
                        <div class="tp-ab-meta">
                            <div class="about-meta-img d-flex">
                                <div class="tp-ab-meta-text pl-30">
                                    <p>With over 15 years of expertise in the field, we have been committed to delivering
                                        the best in security and automation solutions. Buy Home Security has consistently ranked
                                        among the top 100 security companies in the nation by SDM Magazine, a testament to
                                        our dedication to quality and innovation.
                                    </p>
                                    <p>We focus on providing tailored solutions that meet the unique needs of our customers,
                                        offering a perfect blend of advanced technology and user-friendly designs. Whether
                                        you need to secure your home, business, or industrial property, we’re here to make
                                        your life safer and simpler.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <style>
                            .tp-about-fea-item {
                                display: inline-block;
                                padding-bottom: 0px !important;
                            }
                        </style>

                        <div class="tp-ab-4-list">
                            <div class="row ">
                                <div class="col-md-6 tp-about-fea-item">
                                    <ul class="tp-about-fea-item">
                                        <li><i class="fal fa-check"></i>Arm/Disarm your home security system</li>
                                        <li><i class="fal fa-check"></i> Access from anywhere</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 tp-about-fea-item">
                                    <ul class="tp-about-fea-item">
                                        <li><i class="fal fa-check"></i> View security alerts / notification</li>
                                        <li><i class="fal fa-check"></i> Live Video monitoring </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                         <a class="tp-btn-border" href="tel:+18558321250">
                         <i class="fas fa-phone-alt"></i> Protect Your Home Today
                         </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-process-area grey-bg pt-75 pb-30 ">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-12">
                    <div class="tp-section-box tp-section-box-2 p-relative mb-45">
                        <span class="tp-section-subtitle d-inline-block pre mb-10">Services</span>
                        <h2 class="tp-section-title">
                            What We Provide
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row counter-row">
                <div class=" col-xxl-3 col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="tpprocess-hm-4 p-relative">
                        <div class="process-content"></div>
                        <span class="flaticon-secure"><i class="flaticon-secure"></i></span>
                        <div class="tp-process-contnt-4">
                            <h6>Smart Systems</h6>
                            <p class="m-0">Control your home security anytime, anywhere with intelligent smart systems.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-xxl-3 col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="tpprocess-hm-4 p-relative">
                        <div class="process-content"></div>
                        <span class="flaticon-secure"><i class="flaticon-security-camera"></i></span>
                        <div class="tp-process-contnt-4">
                            <h6>Video Intercoms</h6>
                            <p class="m-0">See, speak, and secure your doorstep with crystal-clear video intercoms.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-xxl-3 col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="tpprocess-hm-4 p-relative">
                        <div class="process-content"></div>
                        <span class="flaticon-secure"><i class="flaticon-settings"></i></span>
                        <div class="tp-process-contnt-4">
                            <h6>Surveillance</h6>
                            <p class="m-0">Round-the-clock monitoring to keep your home safe, day and night.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-xxl-3 col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="tpprocess-hm-4 p-relative">
                        <div class="process-content"></div>
                        <span class="flaticon-secure"><i class="flaticon-star-1"></i></span>
                        <div class="tp-process-contnt-4">
                            <h6>Camcorders Kits</h6>
                            <p class="m-0">Capture every detail with camcorder kits designed for security and clarity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallary-area mb-115">
        <div class="container-fluid p-0">
            <div class="gallary-slider-active">
                <div class="gallary-item">
                    <a class="popup-image" href="/frontend/my_img/cam-2.webp"><img src="/frontend/my_img/cam-2.webp"
                            alt="Product-1"></a>
                </div>
                <div class="gallary-item">
                    <a class="popup-image" href="/frontend/my_img/fire.png"><img src="/frontend/my_img/fire.png"
                            alt="Product-2"></a>
                </div>
                <div class="gallary-item">
                    <a class="popup-image" href="/frontend/my_img/cam-3.webp"><img src="/frontend/my_img/cam-3.webp"
                            alt="Product-3"></a>
                </div>
                <div class="gallary-item">
                    <a class="popup-image" href="/frontend/my_img/door_lock.png"><img src="/frontend/my_img/door_lock.png"
                            alt="Product-4"></a>
                </div>
                <div class="gallary-item">
                    <a class="popup-image" href="/frontend/my_img/cam-4.webp"><img src="/frontend/my_img/cam-4.webp"
                            alt="Product-5"></a>
                </div>
            
            </div>
        </div>
    </div>

    <div class="tp-faq-area pt-0 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 text-center text-xl-start col-12">
                    <div class="tp-about-wapper3">
                        <img src="/frontend/my_img/faq-bg.webp" alt="FAQ">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-12">
                    <div class="tp-faq-wrapper pt-50 pl-60 mb-40 p1-40">
                        <div class="tp-section-box tp-section-box-2  p-relative">
                            <span class="tp-section-subtitle right d-inline-block">faq</span>
                            <h2 class="tp-section-title mb-30">
                                Have To Protect All
                                Over The Globe.
                            </h2>
                        </div>

                        <div class="tp-custom-accordio">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-buttons" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                           What does a home security system include?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A typical home security system includes smart sensors, alarms, surveillance cameras, and sometimes professional monitoring.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-buttons collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Do home security systems work without Wi-Fi?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                           Yes, some systems can function with cellular backup or wired connections, though Wi-Fi enhances remote access and smart features.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-buttons collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Can I monitor my home security system from my phone?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Absolutely. Most modern systems offer mobile apps that let you control and monitor your home anytime, anywhere.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <style>
            .tp-feed-content .tp-latest-title {
                font-size: 17px;
            }

            .tp-feed-content .tp-latest-title {
                font-size: 18px;
                color: var(--tp-common-black);
                font-weight: unset;
                line-height: 1.4;
                letter-spacing: -0.7px;
                padding-bottom: 15px;
            }
        </style>
    <div class="tp-feed-area pb-40">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-12">
                    <div class="tp-section-box tp-section-box-2 p-relative mb-45">
                        <span class="tp-section-subtitle d-inline-block pre mb-10">Security Solutions</span>
                        <h2 class="tp-section-title">Custom Security Solutions for Every Industry
                        </h2>
                        <p>We cater to a wide range of segments, offering specialized security solutions to meet unique
                            needs. From residential homes seeking enhanced safety for families, to businesses requiring
                            robust surveillance and access control, to industries demanding comprehensive protection for
                            their operations, and institutions aiming to safeguard their facilities and people we deliver
                            customized systems designed to provide maximum security and peace of mind. Our expertise ensures
                            that each segment receives the right tools and technologies to stay protected in an
                            ever-changing world.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Feed Item 1 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tp-feed-item mb-30">
                        <div class="tp-feed-img p-relative">
                            <div class="fix"><a href="#0"><img src="/frontend/my_img/Residential.png"
                                        alt="Residential" style="max-width: 140%;"></a></div>
                        </div>
                        <div class="tp-feed-content text-center">
                            <div class="tp-latest-blog-meta">
                                </br>
                                <h4>Residential</h4>
                            </div>
                            <p>protect your home and loved ones with
                                    our reliable security systems. We offer smart surveillance and 24/7 monitoring for total
                                    peace of mind.
                            </p>
                        </div>
                    </div>
                </div>

             

                <!-- Feed Item 2 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tp-feed-item mb-30">
                        <div class="tp-feed-img p-relative">
                            <div class="fix"><a href="#0"><img src="/frontend/my_img/small_businesses.png"
                                        alt="Small Businesses" style="max-width: 140%;"></a></div>
                        </div>
                        <div class="tp-feed-content text-center">
                            <div class="tp-latest-blog-meta">
                                </br>
                                <h4>Small Businesses</h4>
                            </div>
                            <p>Secure your business with affordable,
                                    scalable solutions. From cameras to access control, we help protect what you’ve worked
                                    hard to build.
                               </p>
                        </div>
                    </div>
                </div>

                <!-- Feed Item 3 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tp-feed-item mb-30">
                        <div class="tp-feed-img p-relative">
                            <div class="fix"><a href="#0"><img src="/frontend/my_img/retail.png" alt="Retail"
                                        style="max-width: 140%;"></a></div>
                        </div>
                        <div class="tp-feed-content text-center">
                            <div class="tp-latest-blog-meta">
                                </br>
                                <h4>Retail</h4>
                            </div>
                            <p>Prevent theft and ensure a safe
                                    shopping experience. Our retail security systems are designed to monitor activity and
                                    safeguard your inventory.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .tp-section-title {
        font-size: 41px;
    }
    </style>

    <div class="tp-support-area pt-120 pb-50 p-relative" data-background="/frontend/my_img/support-bg.webp">
        <img src="/frontend/my_img/support-bg.webp" alt="support-bg" style="display: none;" />
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10  m-auto">
                    <div class="tpsupport__overlay-content text-center">

                        <div class="tp-section-box tp-section-box-2 white-text p-relative mb-45 text-center">
                            <span class="tp-section-subtitle d-inline-block pre mb-10">Contact Us Today</span>
                            <h5 class="tp-section-title">
                                Reach Out to Your Home Security Experts
                              

                            </h5>
                        </div>

                    </div>

                    <div class="tpsupport-wrapper d-flex justify-content-center">
                        <div class="tpsupport-ovr-button mr-0">
                            <a class="tp-btn" href="tel:+18558321250"> <i class="fas fa-phone-alt"></i> Let’s Connect
                                <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

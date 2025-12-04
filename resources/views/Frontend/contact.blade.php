@extends('layouts.frontend')
@section('title')
    Contact Us | Buy Home Security
@endsection
@section('content')
    <!-- tp-slider-area start  -->
    <section class="breadcrumb__area include-bg pt-150 pb-150" data-background="/frontend/my_img/bredcrum/1.webp">
        <img src="/frontend/my_img/bredcrum/1.webp" alt="Bredcrum" style="display: none;" />
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="/">Home</a></span>
                            <span class="dvdr"><i class="flaticon-arrow-right"></i></span>
                            <span>contact</span>
                        </div>
                        <h3 class="breadcrumb__title">Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tp-slider-area end -->

    <div class="contact-page pt-75 pb-35">
        <div class="container">
            <div class="contact-bg grey-bg">
                <div class="row">
                    <div class="col-xxl-6 col-xl-7 col-lg-6">
                        <div class="contact-map w-100 h-100">

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.900767077199!2d-74.900046!3d40.610012999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c38b36672d414d%3A0xaa8df1abc56b282!2s21%20Glenside%20Dr%2C%20Annandale%2C%20NJ%2008801%2C%20USA!5e0!3m2!1sen!2sin!4v1755361704417!5m2!1sen!2sin"
                                style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-5 col-lg-6">
                        <div class="contact-us">
                            <div class="tp-section-box tp-section-box-2  p-relative">
                                <span class="tp-section-subtitle right d-inline-block">contact us</span>
                            
                            </div>
                            </br>
                            <div class="contact">
                                <div class="contact__form">

                                    <form id="contact_form" name="contact_form" action="contactenquirystore"
                                        enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                <div class="contact__input">
                                                    <i class="fas fa-user"></i>
                                                    <input class="w-100" type="text" placeholder="Full name"
                                                        name="name" id="name">
                                                    <div class="field_error" id="name-error" style="color:#f33838"></div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                <div class="contact__input">
                                                    <i class="fas fa-phone-alt"></i>
                                                    <input class="w-100" type="text" placeholder="Contact number"
                                                        name="phone" id="phone">
                                                    <div class="field_error" id="phone-error" style="color:#f33838"></div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                <div class="contact__input">
                                                    <i class="fas fa-envelope"></i>
                                                    <input class="w-100" type="email" placeholder="Email address"
                                                        name="email" id="email">
                                                    <div class="field_error" id="email-error" style="color:#f33838"></div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                <div class="contact__input">
                                                    <i class="fas fa-tag"></i>
                                                    <input class="w-100" type="text" placeholder="Subject"
                                                        name="subject" id="subject">
                                                    <div class="field_error" id="subject-error" style="color:#f33838"></div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                <div class="contact__input">
                                                    <i class="fas fa-pen pen"></i>
                                                    <textarea class="w-100" placeholder="Message" name="message" id="message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-lg-12 col-md-12">
                                                <div class="contact__btn">
                                                    <button class="tp-btn w-100" type="submit">Submit <i
                                                            class="fal fa-long-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tp-contact-area end -->

    <div class="tp-contact-info pb-30">
        <div class="container">
            <div class="row contact-last-child justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="contact-info-item text-center mb-30">
                        <i class="fas fa-phone-alt"></i>
                        <h5>Call Us</h5>
                        <a href="tel:+1-8558321250">+1-855-832-1250</a>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="contact-info-item text-center mb-30">
                        <i class="fas fa-envelope"></i>
                        <h5>Email Address</h5>
                        <a href="mailto:info@webmail.comjobs.webexample.com">info@webmail.com </a>
                    </div>
                </div> --}}
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="contact-info-item text-center mb-30">
                        <i class="fas fa-map-marker-alt"></i>
                        <h5>Location</h5>
                        <p>21 Glenside, Annandale, NJ, 08801</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contact_form').submit(function(e) {
                e.preventDefault();
                $('div[id$="-error"]').empty(); // Clear previous errors
                $('#sme_form_btn').prop('disabled', true).hide(); // Disable & hide button
                $('#form_loader').show(); // Show loader

                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $('#form_loader').hide();
                        $('#contact_form_btn').prop('disabled', false).show();

                        if (data.status === 'success') {
                            toastr.success(data.message, '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                            setTimeout(function() {
                                window.location.href = '/thankyou';
                            }, 1000);
                        }
                    },
                    error: function(xhr) {
                        $('#form_loader').hide();
                        $('#contact_form_btn').prop('disabled', false).show();

                        toastr.error(
                            'There are some errors in the form. Please check your inputs.',
                            '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                $('#' + key + '-error').html(value.join(', '));
                            });

                            const firstErrorKey = Object.keys(xhr.responseJSON.errors)[0];
                            const errorElement = $('#' + firstErrorKey + '-error');
                            if (errorElement.length) {
                                $('html, body').animate({
                                    scrollTop: errorElement.offset().top - 200
                                }, 500);
                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection

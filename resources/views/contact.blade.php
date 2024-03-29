@extends('layouts/frontLayout/front_design')
@section('content')



<div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-6">
                <div class="container">
                    <div class="content-part text-center">
                        <h1 class="breadcrumbs-title white-color mb-0">Contact</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <!-- Contact Section Start -->
            <div id="rs-contact" class="rs-contact inner pt-60 md-pt-80">
                <div class="container">
                    <div class="content-info-part mb-60">
                        <div class="row gutter-16">
                            <div class="col-lg-4 md-mb-30">
                                <div class="info-item">
                                    <div class="icon-part">
                                        <i class="fa fa-id-badge"></i>
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">Phone Number</h4>
                                        <a href="tel:8380004160">8380004160</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 md-mb-30">
                                <div class="info-item">
                                    <div class="icon-part">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">Email Address</h4>
                                        <a href="mailto:arthbodhshares@gmail.com">arthbodhshares@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="info-item">
                                    <div class="icon-part">
                                        <i class="fa fa-map-o"></i>
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">Office Address</h4>
                                        <p> Pune

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>



    <!-- Contact Section Start -->
    <div class="pb-60">
    <div class="rs-contact style2 gray-bg">
                <div class="row md-col-padding">
                    <div class="col-lg-6 pr-0">
                        <div class="g-map">
                            <iframe src="https://maps.google.com/maps?q=37.803467%2C%20-122.472369&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-0">
                        <div class="form-part pl-43 md-pl-15 md-pr-15 pt-110 pb-110 md-pt-72 md-pb-80">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="sec-title mb-35">
                                        <div class="sub-title primary">CONTACT US</div>
                                        <h2 class="title mb-0 ">Get In Touch</h2>
                                    </div>
                                    <div id="form-messages" class="white-color"></div>
                                    <form id="contactPage" class="contact-form" >
                                        <div class="row">
                                            <div class="col-md-6 mb-30">
                                                <div class="common-control">
                                                    <input type="text" name="name" placeholder="Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <div class="common-control">
                                                    <input type="email" name="email" placeholder="Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <div class="common-control">
                                                    <input type="text" name="phone" placeholder="Phone Number" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <div class="common-control">
                                                    <input type="text" name="website" placeholder="Subject" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-30">
                                                <div class="common-control">
                                                    <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                 <div class="g-recaptcha"
                                                    data-sitekey="6LfWsV8nAAAAABFVmHxa0ewXU4kt9Fu1FyMfH2zy"></div>
                                                <div class="submit-btn pt-20">
                                                    <button type="submit" class="readon">Submit Now</button>
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
            <!-- Contact Section End -->



@section('scripts')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>




<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js'></script>
    <script>
        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-zA-Z ]+$/i.test(value);
        }, "Letters only please *");
        $("#contactPage").validate({
            // errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                name: {
                    required: true,
                    lettersonly: true,


                },
                email: {
                    required: true,
                },

                message: {
                    required: true,
                },

                subject: {
                    required: true,
                },

                phone: {
                    required: true,
                    number: true,
                    maxlength: 12,
                    minlength: 10
                },


            },
            messages: {

                name: {
                    required: "This field is required.",
                },
                email: {
                    required: "This field is required.",
                },
                message: {
                    required: "This field is required.",
                },
                phone: {
                    required: "This field is required.",
                    number: "Please enter valid number",
                },

            },
            submitHandler: function(form) {
                $(".cbtn").attr("disabled", true);
                $(".cbtn").html("<i class='fa fa-spinner fa-spin'></i> Please wait...");
                form.submit();
            }
        });
    </script>


@endsection('scripts')

@endsection('content')
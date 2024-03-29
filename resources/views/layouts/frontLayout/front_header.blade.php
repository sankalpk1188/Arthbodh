@php
$url = url()->current();
$rootUrl = url('/');
@endphp
<!-- Include the modal content -->
@include('modal')
<!--Full width header Start-->
<div class="full-width-header">
    <!-- Toolbar Start -->
    <div class="toolbar-area hidden-md toolbar-area-arth">
        <div class="container">
            <div class="row y-middle">
                <div class="col-md-9">
                    <div class="toolbar-contact">
                        <ul>
                            <li><i class="flaticon-email"></i><a href="mailto:arthbodhshares@gmail.com">arthbodhshares@gmail.com</a></li>
                            <li><i class="flaticon-call"></i><a href="tel:8380004160">8380004160</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex justify-content-evenly">
                       
                        <div class="submit-btn @if (preg_match('/info-required-for-mutualfund-kyc/i', $url)) active @endif">
                            <a href="{{url('/info-required-for-mutualfund-kyc')}}" class="readon_two gen">Fill General Information </a>
                        </div>
                        <!-- <div class="submit-btn @if (preg_match('/doc-required-for-mutualfund-kyc/i', $url)) active @endif">
                            <a href="{{url('/doc-required-for-mutualfund-kyc')}}" class="readon_two gen">Document Required For MF </a>
                        </div> -->
                      
                    </div>

                </div>
               
            </div>
        </div>
    </div>
    <!-- Toolbar End -->

    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="mx-4">
                <div class="row y-middle">
                    <div class="col-lg-2">
                        <div class="logo-area">
                            <a href="{{url('/')}}"><img src="{{asset('assets/images/Client Final_Arthbodh_Logo_Colour.svg')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 text-right">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <div class="mobile-menu">
                                    <a class="rs-menu-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                                <nav class="rs-menu pl-40 md-pl-0">
                                    <ul class="nav-menu">
                                        <li
                                            class="rs-mega-menu mega-rs  menu-item-has-children @if ($url === $rootUrl) active @endif">
                                            <a href="{{url('/')}}">Home</a>

                                        </li>

                                        <li
                                            class="menu-item-has-children @if (preg_match('/about-us/i', $url)) active @endif">
                                            <a href="{{url('/about-us')}}">About</a>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a  >Services</a>
                                            <ul class="sub-menu">
                                              
                                                <li class="@if (preg_match('/equity-&-shares/i', $url)) active @endif"><a
                                                        href="{{url('/equity-&-shares')}}">Equity & shares</a></li>
                                                <li class="@if (preg_match('/bonds-&-fixed-deposites/i', $url)) active @endif"><a
                                                        href="{{url('/bonds-&-fixed-deposites')}}"> Bonds & Fixed Deposites </a></li>
                                                <li class="@if (preg_match('/physical-shares-to-demat/i', $url)) active @endif"><a
                                                        href="{{url('/physical-shares-to-demat')}}"> Physical Shares to Demat </a></li>
                                                
                                                <li class="@if (preg_match('/pms-distribution/i', $url)) active @endif"><a
                                                        href="{{url('/pms-distribution')}}">PMS Distribution </a></li>
                                                <li class="@if (preg_match('/aif-distribution/i', $url)) active @endif"><a
                                                        href="{{url('/aif-distribution')}}">AIF Distribution </a></li>
                                                <li class="@if (preg_match('/distribution-of-advisory-products/i', $url)) active @endif"><a
                                                        href="{{url('/distribution-of-advisory-products')}}">Distribution of Advisory Products </a></li>

                                                        <li class="@if (preg_match('/saturday-school/i', $url)) active @endif"><a
                                                        href="{{url('/saturday-school')}}">Saturday School </a></li>
                                           
                                            </ul>
                                        </li>
                                        <li class="@if (preg_match('/mutual-fund/i', $url)) active @endif"><a
                                                        href="{{url('/mutual-fund')}}">Mutual Fund Distribution</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Media Coverage</a>
                                            <ul class="sub-menu">
                                                <li class="@if (preg_match('/gallery/i', $url)) active @endif"><a
                                                        href="{{url('/gallery')}}">Gallery</a></li>
                                                <li class="@if (preg_match('/news-letter/i', $url)) active @endif"><a
                                                        href="{{url('/news-letter')}}">Newsletter</a></li>
                                                <li class="@if (preg_match('/video/i', $url)) active @endif"><a
                                                        href="{{url('/video')}}">video</a></li>

                                                <!-- <li
                                                    class="last-item @if (preg_match('/articals/i', $url)) active @endif">
                                                    <a href="{{url('/articals')}}"></a>Videos
                                                </li> -->
                                            </ul>
                                        </li>

                                        <li
                                            class="menu-item-has-children last-item @if (preg_match('/blog/i', $url)) active @endif">


                                            <a href="#" onclick="showModal()">Blogs</a>

                                            <!-- <ul class="sub-menu">
                                                       <li><a href="shop.html">Shop</a></li>
                                                       <li><a href="shop-single.html">Shop Single</a></li>
                                                       <li><a href="cart.html">Cart</a></li>
                                                       <li><a href="checkout.html">Checkout</a></li>
                                                       <li class="last-item"><a href="account.html">My Account</a></li>
                                                   </ul> -->
                                        </li>

                                        <li
                                            class="menu-item-has-children  @if (preg_match('/contact-us/i', $url)) active @endif">
                                            <a href="{{url('/contact-us')}}">Contact</a>
                                            <ul class="sub-menu">
                                                <!-- <li><a href="contact.html">Contact 1</a></li>
                                                       <li class="last-item"><a href="contact2.html">Contact 2</a></li> -->
                                            </ul>
                                        </li>
                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div> <!-- //.main-menu -->

                            <div class="expand-btn-inner pb-30">
                                <ul>

                                    <li>
                                        <a id="nav-expander" class="humburger nav-expander" href="#">
                                            <!-- <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                            <span class="dot4"></span>
                                            <span class="dot5"></span>
                                            <span class="dot6"></span>
                                            <span class="dot7"></span>
                                            <span class="dot8"></span>
                                            <span class="dot9"></span> -->
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        <!-- Canvas Menu start -->
        <nav class="right_menu_togle hidden-md">
            <div class="close-btn">
                <span id="nav-close" class="humburger">
                    <!-- <span class="dot1"></span>
                    <span class="dot2"></span>
                    <span class="dot3"></span>
                    <span class="dot4"></span>
                    <span class="dot5"></span>
                    <span class="dot6"></span>
                    <span class="dot7"></span>
                    <span class="dot8"></span>
                    <span class="dot9"></span> -->
                    <i class="fa fa-times"></i>
                </span>
            </div>

            <!-- Request For Proposal Section Start -->
            <div class="rs-quote style2 ">



                <form class="quote-form" id="contactPage_head">
                    <div class="sec-title mb-34">

                        <h2 class="title mb-0 callback">Request for Callback</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-30">
                            <input type="text" name="name" placeholder="Name" required="">
                        </div>
                        <div class="col-sm-6 mb-30">
                            <input type="email" name="email" placeholder="E-mail" required="">
                        </div>
                        <div class="col-sm-6 mb-30">
                            <input type="text" name="phone" placeholder="Phone Number" required="">
                        </div>
                        <div class="col-sm-6 mb-30">
                            <input type="text" name="website" placeholder="Your Website" required="">
                        </div>
                        <div class="col-sm-12 mb-38">
                            <textarea placeholder="Your Message Here"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <div class="submit-btn">
                                <button type="submit">SUBMIT NOW</button>
                            </div>
                        </div>
                    </div>
                </form>




            </div>
            <!-- Request For Proposal Section End -->

        </nav>
        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>
<!--Full width header End-->


@section('scripts')
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js'></script>
    <script>
        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-zA-Z ]+$/i.test(value);
        }, "Letters only please *");
        $("#contactPage_head").validate({
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
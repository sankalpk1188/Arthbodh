@extends('layouts/frontLayout/front_design')
@section('content')

@section('styles')
    <style>

    </style>
@endsection('styles')

<!--  -->
<!-- Main content Start -->
<div class="main-content">
    <!-- Slider Start -->
    <div id="rs-slider" class="rs-slider slider11">
        <div class="slider-carousel3 owl-carousel">
            <!-- Slide 1 -->
            <div class="slider slide1">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-5 col-lg-7 pl-30 md-pl-15">
                            <div class="content-part">
                                <div class="slider-des">
                                    <h1 class="sl-title mb-21">Unlocking Financial Opportunities </h1>
                                    <p class="sl-desc mb-40">We offer starting with vanilla fixed
                                        deposits, Government securities, PSU and private AAA rated bonds, Invits, Reits,
                                        Distribution of Portfolio management services, Investment advisory and mutual
                                        funds, in addition to stock broking.
                                    </p>
                                </div>
                                <div class="slider-bottom">
                                    <ul>
                                        {{-- <li><a href="contact.html" class="readon">Get In Touch</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-part">
                        <img src="assets/images/slider/sl11-ly1.png" alt="">
                    </div>
                    <div class="sl-shape">
                        <img src="assets/images/slider/sl11-ly3.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slider slide2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="content-part">
                                <div class="slider-des">
                                    <h1 class="sl-title mb-21">Investing with Insight, Growing with Confidence</h1>
                                    <p class="sl-desc mb-40">Arthbodh, led by a seasoned team, offers a wide range of
                                        investment products and services, from fixed deposits to stocks. We prioritize
                                        your goals, focus on future potential, and believe in a holistic approach to
                                        financial planning. Whether you're a seasoned investor or just starting, we're
                                        here to assist you. Contact us for expert guidance on your investment journey.
                                    </p>
                                </div>
                                <div class="slider-bottom">
                                    <ul>
                                        {{-- <li><a href="contact.html" class="readon">Get In Touch</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-part">
                        <img src="assets/images/slider/sl11-ly2.png" alt="">
                    </div>
                    <div class="sl-shape">
                        <img src="assets/images/slider/sl11-ly3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style5 ">
        <div class="container">
            <div class="wraping pt-60 pb-50 md-pt-72 ">
                <div class="row y-middle">
                    <div class="col-lg-6 pr-20 lg-pr-15 md-mb-30">
                        <div class="sec-title mb-45 md-mb-52 sm-mb-32">
                            <div class="sub-title red-color2">About Us</div>
                            <h2 class="title mb-18">A Commitment to Your Financial Freedom</h2>
                            <div class="desc text-justify"> Arthbodh is managed by an investment team having more than
                                60 Years of
                                combined experience headed by Mr. Bhushan Mahajan, who has spent three
                                decades in equity & amp; debt markets & amp; is considered an authority in stocks and
                                mutual funds. He has excellent network with fund managers, stock market
                                stalwarts and analysts, due to his position as Ex-President of Pune Stock
                                Exchange. He writes a weekly column in SAKAL covering stocks and
                                investments (More than 1300 articles published so far).
                            </div>
                        </div>
                        <div class="counter-wrap">
                            <div class="content-part mb-30">
                                <div class="counter-part">
                                    <div class="rs-count thousand">25</div>
                                    <h4 class="title mb-0"> NO. of clients</h4>
                                </div>
                                <div class="desc-text">
                                    <div class="desc">We provide services for a total of 25k clients</div>
                                </div>
                            </div>
                            <div class="content-part">
                                <div class="counter-part">
                                    <div class="rs-count thousand">15</div>
                                    <h4 class="title mb-0">AUM</h4>
                                </div>
                                <div class="desc-text">
                                    <div class="desc">We serve 15k clients with excellence</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 lg-pl-15">
                        <div class="img-part">
                            <img src="assets/images/about/Arthbodh_Logo_Colour-03.png" alt="">
                            <div class="morphin"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->


    {{-- 
<!-- Why Choose Section Start -->
<div class="rs-whychooseus style10 gray-bg7 pt-100 pb-140 md-pt-70 md-pb-50 pt-5 pb-5" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 md-mb-70">
                            <div class="img-part">
                                <img src="assets/images/whychooseus/marketing/why-choose-17.png" alt="Images">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-70 md-pl-15">
                            <div class="sec-title6 mb-35 md-mb-30">
                                <span class="sub-title">WHY ARTHBOADH</span>
                                <h2 class="title">WHY ARTHBODH MUTUAL FUND AND STOCK ADVISORY DISTRIBUTION ?</span></h2>
                                <p class="desc-big style2">
                                   Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate.
                                </p>
                            </div>
                            <div class="cl-skill-bar style2 marketing">
                                <!-- Start Skill Bar -->
                                <span class="skillbar-title">Market Consulting</span>
                                <div class="skillbar" data-percent="81">
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent"></span> 
                                </div>
                                <!-- Start Skill Bar -->
                                <span class="skillbar-title">Business Consulting</span>
                                <div class="skillbar" data-percent="95">
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent"></span> 
                                </div>
                                <!-- Start Skill Bar -->
                                <span class="skillbar-title">Risk Consulting</span>
                                <div class="skillbar" data-percent="77">
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent"></span> 
                                </div>
                                <!-- Start Skill Bar -->
                                <span class="skillbar-title">Finance Consulting</span>
                                <div class="skillbar" data-percent="85">
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent"></span> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Counter Section Start -->
                    <div class="rs-counter">
                        <div class="expert-consultion">
                            <div class="couter-part">
                                <div class="rs-count plus">50</div>
                                <h5 class="title">Expert Consultants</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Counter Section End -->
                </div>
            </div>
            <!-- Why Choose Section End --> --}}


    <!-- Why Choose Us Section Start -->
    <div class="rs-whychooseus style1 bg8 pt-100 pb-100 md-pt-72 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-50 md-mb-50 md-pr-15">
                    <div class="sec-title mb-40">
                        <div class="sub-title primary right-line">WHY ARTHBOADH</div>
                        <h2 class="title mb-0">WHY ARTHBODH MUTUAL FUND AND STOCK ADVISORY DISTRIBUTION ?</h2>
                    </div>
                    <div class="row gutter-16">
                        <div class="col-md-6 mb-16 sm-mb-30">
                            <div class="item-wrap">
                                <div class="icon-part">
                                    <a href="#"><img src="assets/images/whychooseus/1.png" alt=""></a>
                                </div>
                                <h5 class="title"><a href="#">Future-Oriented Approach</a></h5>
                            </div>
                        </div>
                        <div class="col-md-6 mb-16 sm-mb-30">
                            <div class="item-wrap">
                                <div class="icon-part">
                                    <a href="#"><img src="assets/images/whychooseus/2.png" alt=""></a>
                                </div>
                                <h5 class="title"><a href="#">Personalized Solutions</a></h5>
                            </div>
                        </div>
                        <div class="col-md-6 sm-mb-30">
                            <div class="item-wrap">
                                <div class="icon-part">
                                    <a href="#"><img src="assets/images/whychooseus/3.png" alt=""></a>
                                </div>
                                <h5 class="title"><a href="#">Diverse Product Range</a></h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-wrap">
                                <div class="icon-part">
                                    <a href="#"><img src="assets/images/whychooseus/4.png" alt=""></a>
                                </div>
                                <h5 class="title"><a href="#">Retirement Planning </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-wrap md-pt-200 md-pb-200">
                        <div class="video-btn primary text-center">
                            <a class="popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->



    {{-- <!-- Video Section Start -->
   <div class="home-six">
    <div class="rs-video style1 bg16 pt-200 pb-200 md-pt-100 md-pb-145 sm-pt-150 sm-pb-85">
       <div class="container">
           <div class="content-part ">
               <div class="video-btn border-style green mb-46">
                   <a class="popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik">
                       <i class="fa fa-play"></i>
                   </a>
               </div>
               <div class="video-desc">Experience Our Journey 
               </div>
           </div>
       </div>
   </div>
   </div>
   <!-- Video Section End --> --}}
    <!-- Portfolio Section Start -->
    {{-- <div class="rs-portfolio style2 pt-100 pb-70 md-pt-80 md-pb-50">
    <div class="row custom-width">
        <div class="col-xl-3 offset-lg relative">
            <div class="title-wrap">
                <div class="title-part">
                    <h2 class="title  pl-10 sakal">Sakal</h2>
                    <span class="watermark">News</span>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-12">
            <div class="slider-part">
                <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="20" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="portfolio-wrap">
                        <div class="img-part">
                            <a href="https://www.esakal.com/saptarang/bhushan-mahajan-writes-paytm-pjp78"><img src="assets/images/portfolio/1.png" alt=""></a>
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="https://www.esakal.com/saptarang/bhushan-mahajan-writes-paytm-pjp78">Support Technology</a></h3>
                            <span class="categories"><a href="https://www.esakal.com/saptarang/bhushan-mahajan-writes-paytm-pjp78">Consulting</a></span>
                        </div>
                    </div>
                    <div class="portfolio-wrap">
                        <div class="img-part">
                            <a href="https://www.esakal.com/arthavishwa/bhushan-mahajan-writes-share-market-profit-investor-money-pjp78"><img src="assets/images/portfolio/2.png" alt=""></a>
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="https://www.esakal.com/arthavishwa/bhushan-mahajan-writes-share-market-profit-investor-money-pjp78">Stock Market Analysis</a></h3>
                            <span class="categories"><a href="https://www.esakal.com/arthavishwa/bhushan-mahajan-writes-share-market-profit-investor-money-pjp78">Marketing</a></span>
                        </div>
                    </div>
                    <div class="portfolio-wrap">
                        <div class="img-part">
                            <a href="https://www.esakal.com/arthavishwa/bhushan-mahajan-writes-budget-pjp78"><img src="assets/images/portfolio/3.png" alt=""></a>
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="https://www.esakal.com/arthavishwa/bhushan-mahajan-writes-budget-pjp78">Sales Analysis</a></h3>
                            <span class="categories"><a href="https://www.esakal.com/arthavishwa/bhushan-mahajan-writes-budget-pjp78">Marketing</a></span>
                        </div>
                    </div>
                    <div class="portfolio-wrap">
                        <div class="img-part">
                            <a href="https://www.esakal.com/saptarang/bhushan-mahajan-writes-paytm-pjp78"><img src="assets/images/portfolio/4.png" alt=""></a>
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="https://www.esakal.com/saptarang/bhushan-mahajan-writes-paytm-pjp78">Big Data Services</a></h3>
                            <span class="categories"><a href="https://www.esakal.com/saptarang/bhushan-mahajan-writes-paytm-pjp78">Business</a></span>
                        </div>
                    </div>
                    <div class="portfolio-wrap">
                        <div class="img-part">
                            <a href="https://www.esakal.com/saptarang/bhushan-mahajan-writes-paytm-pjp78"><img src="assets/images/portfolio/4.png" alt=""></a>
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="https://www.esakal.com/saptarang/bhushan-mahajan-writes-paytm-pjp78">HR Recruiting</a></h3>
                            <span class="categories"><a href="https://www.esakal.com/saptarang/bhushan-mahajan-writes-paytm-pjp78">Consulting</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Section End --> --}}

    <!-- Blog Section Start -->
    <div id="rs-blog" class="rs-blog style1 modify2 pt-98 pb-72 md-pt-72 md-pb-52 ">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-4 pr-45 mt--33 md-mt-0 md-mb-50">
                    <div class="sec-title">
                        <span class="sub-title primary right-line">News</span>
                        <h2 class="title mb-13">Latest Updates & News Over World</h2>
                        <p class="desc mb-36">Where Expert Investment Advice Meets the Latest Financial News for 15k Satisfied Clients.</p>
                        {{-- <a class="readon" href="#">Latest News</a> --}}
                    </div>
                </div>
                <div class="col-lg-8">  
                    <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="2"
                        data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000"
                        data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false"
                        data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false"
                        data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false"
                        data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false"
                        data-ipad-device-dots2="false" data-md-device="2" data-lg-device="2"
                        data-md-device-nav="false" data-md-device-dots="false">
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/newsartical/pyt.png" alt="newsimg">
                                <div class="fly-btn">

                                </div>
                            </div>
                            <div class="content-part">
                                <span>
                                    <a class="categories"
                                        href="https://www.esakal.com/saptarang/bhushan-mahajan-writes-paytm-pjp78" target="_blank">सप्तरंग</a>
                                    <span class="float-end date">

                                        <i class="fa fa-clock-o"></i>Nov 27, 2022
                                    </span>
                                </span>
                                <h3 class="title"><a
                                        href="https://www.esakal.com/saptarang/bhushan-mahajan-writes-paytm-pjp78" target="_blank">का
                                        रे भुललासी...?</a></h3>
                                <p class="desc">बहुतांश गुंतवणूकदार तोटा सहन करायची तयारी नसल्यामुळे ‘पदरी पडलं
                                    पवित्र झालं’ म्हणत प्राथमिक समभाग विक्रीत मिळालेले शेअर आयुष्यभर उराशी...</p>

                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/newsartical/rok.png" alt="newsimg">
                                <div class="fly-btn">

                                </div>
                            </div>
                            <div class="content-part">
                                <span>
                                    <a class="categories"
                                        href="https://www.esakal.com/premium-article/saptahik/share-market-up-and-down-why-vedanta-fell-foxcon-and-international-money-market-nifty-writer-bhushan-mahajan-vg21" target="_blank">साप्ताहिक</a>
                                    <span class="float-end date">

                                        <i class="fa fa-clock-o"></i> 29 July 2023
                                    </span>
                                </span>
                                <h3 class="title"><a
                                        href="https://www.esakal.com/premium-article/saptahik/share-market-up-and-down-why-vedanta-fell-foxcon-and-international-money-market-nifty-writer-bhushan-mahajan-vg21" target="_blank">रोक सको तो रोक लो!</a></h3>
                                <p class="desc">भरघोस मागणी आणि अपुरा पुरवठा यामुळे टोमॅटो जसे महाग झाले तसा शेअर बाजार अधिकाधिक महाग होत चालला आहे....</p>

                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/newsartical/bull.png" alt="bull">
                                <div class="fly-btn">

                                </div>
                            </div>
                            <div class="content-part">
                                <span>
                                    <a class="categories"
                                        href="https://www.esakal.com/arthavishwa/bhushan-mahajan-writes-share-market-profit-investor-money-pjp78" target="_blank">अर्थविश्व</a>
                                    <span class="float-end date">

                                        <i class="fa fa-clock-o"></i> Sep 14, 2022
                                    </span>


                                    <h3 class="title"><a
                                            href="https://www.esakal.com/arthavishwa/bhushan-mahajan-writes-share-market-profit-investor-money-pjp78" target="_blank">संशय
                                            का न मनी यावा?</a></h3>
                                    <p class="desc">शेअर बाजारात भरपूर नफा मिळण्याच्या आशेने छोटे गुंतवणूकदार आपली
                                        सर्व कमाई घालत असतात, मात्र शेअर बाजारातील व्यवहारांचा ...</p>
                                    <div class="blog-meta">


                                    </div>
                            </div>
                        </div>
                         <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/newsartical/bul2.png" alt="">
                                <div class="fly-btn">

                                </div>
                            </div>
                            <div class="content-part">
                                <span>
                                    <a class="categories" href="https://www.esakal.com/arthavishwa/bhushan-mahajan-writes-budget-pjp78" target="_blank">अर्थविश्व</a>
                                    <span class="float-end date">

                                        <i class="fa fa-clock-o"></i> Feb 7, 2022
                                    </span>


                                    <h3 class="title"><a
                                            href="https://www.esakal.com/arthavishwa/bhushan-mahajan-writes-budget-pjp78 " target="_blank">अर्थवेध
                                            : अर्थसंकल्पाला सलामी!</a></h3>
                                    <p class="desc">यंदाच्या अर्थसंकल्पाचा विचार करताना मागील तीन वर्षांचा संदर्भ
                                        बघायला हवा. २०१९ मध्ये कॉर्पोरेट कर कमी करून सरकारने....</p>
                                    <div class="blog-meta">

                                    </div>
                            </div>
                        </div> 
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->




    

    <!-- Services Section Start -->
    <div class="rs-services style3  pb-100 md-pt-72 md-pb-80 bg-plan-2">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-5 pr-70 md-mb-50">
                    <div class="sec-title">
                        <div class="sub-title right-line primary">Brand</div>
                        <h2 class="title">Arthbodh - Your Trusted Investment Partner</h2>
                        <p class="desc mb-36">
                            Arthbodh is your reliable and experienced investment partner, empowering you to achieve your
                            financial goals with confidence.</p>

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6 mb-30">
                            <div class="service-wrap mb-30">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/1.png" alt="">
                                </div>
                                <h5 class="title">Expertise in Market Analysis</h5>
                                <div class="desc">Arthbodh's team dives deep into market analysis, using data from stock exchanges like NSE and BSE.</div>
                            </div>
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/7.png" alt="">
                                </div>
                                <h5 class="title">Focus on Future Appreciation</h5>
                                <div class="desc">Arthbodh focuses on future growth prospects rather than just looking at past performance.</div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-50 sm-mt-0">
                            <div class="service-wrap mb-30">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/2.png" alt="">
                                </div>
                                <h5 class="title">Personalized Retirement Partner</h5>
                                <div class="desc">Arthbodh designs retirement plans to suit everyone's needs, ensuring a secure financial future and peace of mind during retirement.</div>
                            </div>
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/8.png" alt="">
                                </div>
                                <h5 class="title">Enhancing Your Mutual Funds</h5>
                                <div class="desc">Arthbodh's Simple Strategy for Smarter Investing



</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Latest Project Section Start -->
    <div class="rs-project style4  pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row md-mb-20">
                <div class="col-lg-6">
                    <div class="sec-title md-center mb-40 md-mb-20">
                        <div class="sub-title right-line primary">Our Analysis</div>
                        <h2 class="title">Our Latest Case Studies</h2>
                    </div>
                </div>
                <div class="col-lg-6 text-right md-center pt-15 md-pt-0">
                    {{-- <div class="btn-part mb-40 md-mb-20">
                    <a class="readon2 get-new" href="#">Learn More</a>
                </div> --}}
                </div>
            </div>
        </div>
        <div id="rs-project-style4" class="rs-carousel owl-carousel">
            <div class="project-item">
                <div class="project-img">
                    <a href="{{url('/case-study-detail')}}"><img src="assets/images/project/style4/1.jpg" alt="images"></a>
                </div>
                <div class="project-inner">
                    <h4 class="title"><a href="{{url('/case-study-detail')}}">Stock Market Analysis</a></h4>
                    <span class="category"><a href="{{url('/case-study-detail')}}">Digital Agency</a></span>
                </div>
            </div>
            <div class="project-item">
                <div class="project-img">
                    <a href="{{url('/case-study-detail')}}"><img src="assets/images/project/style4/2.jpg" alt="images"></a>
                </div>
                <div class="project-inner">
                    <h4 class="title"><a href="{{url('/case-study-detail')}}">Stock Exchnage</a></h4>
                    <span class="category"><a href="{{url('/case-study-detail')}}">Digital Agency</a></span>
                </div>
            </div>
            <div class="project-item">
                <div class="project-img">
                    <a href="{{url('/case-study-detail')}}"><img src="assets/images/project/style4/3.jpg" alt="images"></a>
                </div>
                <div class="project-inner">
                    <h4 class="title"><a href="{{url('/case-study-detail')}}">Share Market</a></h4>
                    <span class="category"><a href="{{url('/case-study-detail')}}">Digital Agency</a></span>
                </div>
            </div>
            <div class="project-item">
                <div class="project-img">
                    <a href="{{url('/case-study-detail')}}"><img src="assets/images/project/style4/4.jpg" alt="images"></a>
                </div>
                <div class="project-inner">
                    <h4 class="title"><a href="{{url('/case-study-detail')}}">Mutual Funds</a></h4>
                    <span class="category"><a href="{{url('/case-study-detail')}}">Digital Agency</a></span>
                </div>
            </div>
            <div class="project-item">
                <div class="project-img">
                    <a href="{{url('/case-study-detail')}}"><img src="assets/images/project/style4/5.jpg" alt="images"></a>
                </div>
                <div class="project-inner">
                    <h4 class="title"><a href="">Stock Investments</a></h4>
                    <span class="category"><a href="">Digital Agency</a></span>
                </div>
            </div>
            <div class="project-item">
                <div class="project-img">
                    <a href="{{url('/case-study-detail')}}"><img src="assets/images/project/style4/6.jpg" alt="images"></a>
                </div>
                <div class="project-inner">
                    <h4 class="title"><a href="{{url('/case-study-detail')}}">Share Market</a></h4>
                    <span class="category"><a href="{{url('/case-study-detail')}}">Digital Agency</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Project Section End -->

    <!-- Blog Section Start -->
    <!--<div class="rs-blog style3 pt-104 pb-100 md-pt-72 md-pb-60 xs-pb-80 pt-5 pb-5">-->
    <!--    <div class="container">-->
    <!--        <div class="sec-title mb-31 sm-mb-11 xs-mb-31">-->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-5 pl-40 lg-pl-15 md-mb-18">-->
    <!--                    <div class="sub-title red-color2">Blogs</div>-->
    <!--                    <h2 class="title mb-0">Our Latest Blogs</h2>-->
    <!--                </div>-->
    <!--                <div class="col-lg-7 pr-40 lg-pr-15">-->
    <!--                    <div class="desc big">Hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment so blinded by that they cannot foresee on the other.</div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="container custom-for-sl">-->
    <!--        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="false">-->
    <!--            <div class="blog-wrap">-->
    <!--                <div class="img-part">-->
    <!--                    <img src="assets/images/blog/1.jpg" alt="">-->
    <!--                    <div class="blog-meta"><i class="fa fa-clock-o"></i> 06 Apr 2020</div>-->
    <!--                </div>-->
    <!--                <div class="content-part">-->
    <!--                    <h4 class="title"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones</a></h4>-->
    <!--                    <div class="desc">We denounce with righteous indige nation and dislike men who are so...</div>-->
    <!--                    <div class="btn-part">-->
    <!--                        <a href="blog-single.html"><i class="fa fa-plus"></i></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="blog-wrap">-->
    <!--                <div class="img-part">-->
    <!--                    <img src="assets/images/blog/2.jpg" alt="">-->
    <!--                    <div class="blog-meta"><i class="fa fa-clock-o"></i> 06 Apr 2020</div>-->
    <!--                </div>-->
    <!--                <div class="content-part">-->
    <!--                    <h4 class="title"><a href="blog-single.html">Soundtrack filma Lady Exclusive Music</a></h4>-->
    <!--                    <div class="desc">We denounce with righteous indige nation and dislike men who are so...</div>-->
    <!--                    <div class="btn-part">-->
    <!--                        <a href="blog-single.html"><i class="fa fa-plus"></i></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="blog-wrap">-->
    <!--                <div class="img-part">-->
    <!--                    <img src="assets/images/blog/3.jpg" alt="">-->
    <!--                    <div class="blog-meta"><i class="fa fa-clock-o"></i> 06 Apr 2020</div>-->
    <!--                </div>-->
    <!--                <div class="content-part">-->
    <!--                    <h4 class="title"><a href="blog-single.html">Winged moved stars, fruit creature seed night.</a></h4>-->
    <!--                    <div class="desc">We denounce with righteous indige nation and dislike men who are so...</div>-->
    <!--                    <div class="btn-part">-->
    <!--                        <a href="blog-single.html"><i class="fa fa-plus"></i></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="blog-wrap">-->
    <!--                <div class="img-part">-->
    <!--                    <img src="assets/images/blog/4.jpg" alt="">-->
    <!--                    <div class="blog-meta"><i class="fa fa-clock-o"></i> 06 Apr 2020</div>-->
    <!--                </div>-->
    <!--                <div class="content-part">-->
    <!--                    <h4 class="title"><a href="blog-single.html">Given void great you’re good appear have i also fifth</a></h4>-->
    <!--                    <div class="desc">We denounce with righteous indige nation and dislike men who are so...</div>-->
    <!--                    <div class="btn-part">-->
    <!--                        <a href="blog-single.html"><i class="fa fa-plus"></i></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Blog Section End -->

    <!-- Testimonial Section Start -->
    <div class="rs-testimonial style9 gray-bg2 pt-112 pb-111 md-pt-72 md-pb-80 pt-5 pb-5">
        <div class="container">
            <div class="sec-title mb-51 sm-mb-31">
                <div class="row">
                    <div class="col-lg-5 pl-40 lg-pl-15 md-mb-18">
                        <div class="sub-title red-color2">Testimonials</div>
                        <h2 class="title mb-0">Our Client Reviews</h2>
                    </div>
                    <div class="col-lg-7 pr-40 lg-pr-15">
                        <div class="desc big">Where Expertise Meets Passion. Exceptional Investment Team, Holistic Approach, and Proven Results. Happy Clients, Happy Investing!.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container custom-for-sl">
            <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="2" data-margin="0"
                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false"
                data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false"
                data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                data-md-device="2" data-lg-device="2" data-md-device-nav="false" data-md-device-dots="true"
                data-doteach="true">
                <div class="testi-wrap mb-39 md-mb-0">
                    <div class="icon-part">
                        <img src="assets/images/quote4.png" alt="">
                    </div>
                    <div class="wraping">
                    <div class="posted-by">
                            <div class="avatar">
                                <img src="assets/images/testimonial/avatar/1.jpg" alt="">
                            </div>
                            <div class="info">
                                <h4 class="name">Monty Moni</h4>
                                <span class="designation">CEO, Keen IT Solution</span>
                               
                            </div>
                        </div>
                        <p class="desc mb-32">Capitalize on low hanging fruit to identify a ballpark value added
                            activity to beta test. Override the digital divide with additional clickthroughs from
                            DevOps. Nanotechnology immersion along the information highway.</p>
                       
                    </div>
                </div>
                <div class="testi-wrap mb-39 md-mb-0">
                    <div class="icon-part">
                        <img src="assets/images/quote4.png" alt="">
                    </div>
                    <div class="wraping">
                    <div class="posted-by">
                            <div class="avatar">
                                <img src="assets/images/testimonial/avatar/2.jpg" alt="">
                            </div>
                            <div class="info">
                                <h4 class="name">Mike Hotten</h4>
                                <span class="designation">CEO, Brick Consulting</span>
                               
                            </div>
                        </div>
                        <p class="desc mb-32">Capitalize on low hanging fruit to identify a ballpark value added
                            activity to beta test. Override the digital divide with additional clickthroughs from
                            DevOps. Nanotechnology immersion along the information highway.</p>
                    
                    </div>
                </div>
                <div class="testi-wrap mb-39 md-mb-0">
                    <div class="icon-part">
                        <img src="assets/images/quote4.png" alt="">
                    </div>
                    <div class="wraping">
                    <div class="posted-by">
                            <div class="avatar">
                                <img src="assets/images/testimonial/avatar/3.jpg" alt="">
                            </div>
                            <div class="info">
                                <h4 class="name">Nancy Lowe</h4>
                                <span class="designation">CEO, Brick Consulting</span>
                               
                            </div>
                        </div>
                        <p class="desc mb-32">Capitalize on low hanging fruit to identify a ballpark value added
                            activity to beta test. Override the digital divide with additional clickthroughs from
                            DevOps. Nanotechnology immersion along the information highway.</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->
</div>


@section('scripts')
@endsection('scripts')

@endsection('content')

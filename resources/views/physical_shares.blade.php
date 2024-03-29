@extends('layouts/frontLayout/front_design')
@section('content')

@section('styles')
<style>
.service ul li {
    list-style: decimal !important;
    margin-left: 15px;
}
</style>
@endsection('styles')
<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs banner_ps">
        <div class="container">
            <div class="content-part text-center pt-160 pb-160">
                <!-- <h1 class="breadcrumbs-title white-color mb-0">Services</h1> -->
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Services Section Start -->
    <div id="rs-services" class="rs-services single pt-100 pb-100 md-pt-80 md-pb-80 pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pr-40 md-pr-15 md-mb-50">
                    <!-- <img class="mb-39" src="assets/images/services/single/service-single.jpg" alt=""> -->

                    <h2 class="pt-3">Conversion of Physical Shares to Demat (Dust to diamonds) </h2>

                    <p class="desc mb-31">Many investors continue to have shares in physical form. These shares cannot
                        be transferred or sold in physical form. They remain in physical form because of following
                        reasons.</p>
                    <ul class="listing-style regular2 pl-10 sm-pl-0">
                        <li>Loss of share certificate</li>
                        <li>Either of the holders are deceased</li>
                        <li>Shares are transferred to investor education and protection fund</li>

                    </ul>







                    <!-- <div class="row gutter-20">
                                <div class="col-6">
                                    <img class="bdru-4" src="assets/images/services/single/1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="bdru-4" src="assets/images/services/single/2.jpg" alt="">
                                </div>
                            </div> -->

                    <!-- <div class="rs-testimonial style6 mt-60">
                                <div class="testi-wrap">
                                    <div class="icon-part">
                                        <img src="assets/images/testimonial/sign.png" alt="">
                                    </div>
                                    <p class="desc">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos et quas molestias data.</p>
                                    <div class="detail-part">
                                        <div class="avatar">
                                            <img src="assets/images/testimonial/avatar/5.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <div class="name">John Doe</div>
                                            <span class="designation">Designer</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                </div>
                <div class="col-lg-4">


                    <div class="addd addd-3 mb-50">
                        <div class="contact-icon"> <i class="fa fa-phone"></i></div>
                        <h2 class="title white-color">Have any Questions? <br> Call us Today!</h2>
                        <div class="contact white">
                            <a href="tel:8380004160">8380004160</a>
                        </div>
                    </div>

                    <!-- <div class="brochures">
                                <h3 class="title mb-20">Brochures</h3>
                                <p class="desc mb-30">Cras enim urna, interdum nec por ttitor vitae, sollicitudin eu erosen. Praesent eget mollis nulla sollicitudin.</p>
                                <div class="dual-btn modify">
                                    <div class="dual-btn-wrap">
                                        <a class="btn-left" href="#"><span>Download</span></a>
                                        <span class="connector"> Or </span>
                                    </div>
                                    <div class="dual-btn-wrap">
                                        <a class="btn-right" href="#"><span>Discover</span></a>
                                    </div>
                                </div>
                            </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->
</div>
<!-- Main content End -->

</main>

@endsection('content')
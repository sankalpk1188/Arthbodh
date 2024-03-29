@extends('layouts/frontLayout/front_design')
@section('content')

<!-- Contact Section Start -->
<div class="rs-contact style5 modify1 ">
    <div class="container-fluid2">
        <div class="contact-us pt-40 pb-100 md-pt-70 md-pb-70">
            <div class="sec-title5 mb-50 md-mb-30 text-center">

                <h2 class="title title2 ">General Information</h2>
            </div>
            <div class="row margin-0">
                <div class="col-lg-12 padding-2">
                    <div class="contact-widget kyc-form">

                        <div id="form-messages"></div>
                        <form id="contactPage_mf" method="post" action="mailer.php">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label class="leaf" for="">Name</label>
                                        <input class="from-control from-control-one" type="text" id="name" name="name"
                                            required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label class="leaf" for="">E-Mail ID</label>
                                        <input class="from-control from-control-one" type="text" id="email" name="email"
                                            required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label class="leaf" for="">Phone Number</label>
                                        <input class="from-control from-control-one" type="text" id="phone" name="phone"
                                            required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label class="leaf" for="">Place of Birth</label>
                                        <input class="from-control from-control-one" type="text" id="birthplace"
                                            name="birthplace" required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label class="leaf" for="">Occupation Details</label>
                                        <input class="from-control from-control-one" type="text" id="occupation"
                                            name="occupation" required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label class="leaf" for="">Income Range PA</label>
                                        <input class="from-control from-control-one" type="text" id="income"
                                            name="income" required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label class="leaf" for="">Mother Name</label>
                                        <input class="from-control from-control-one" type="text" id="mothername"
                                            name="mothername" required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label class="leaf" for="">Name Of Husband/Father</label>
                                        <input class="from-control from-control-one" type="text" id="husband"
                                            name="husband" required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label class="leaf" for="">Occupation Details</label>
                                        <input class="from-control from-control-one" type="text" id="nominee"
                                            name="nominee" required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label class="leaf" for="">Pancard Number</label>
                                        <input class="from-control from-control-one" type="text" id="pan" name="pan"
                                            required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label class="leaf" for="">Upload PanCard</label>
                                        <input class="from-control from-control-one leaf-one" type="file" id="pancard"
                                            name="pancard" required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label for="" class="leaf">Passport, Driving Licence or Eaadhar Copy</label>
                                        <input class="from-control from-control-one leaf-one" type="file" id="addhar"
                                            name="addhar" required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label for="" class="leaf">Upload Cancelled Cheque Leaf</label>
                                        <input class="from-control from-control-one leaf-one" type="file" id="cheque"
                                            name="cheque" required="">
                                    </div>
                                    <div class="col-lg-4 mb-30 col-md-6 col-sm-6">
                                        <label for="" class="leaf">Passport Size Photograph</label>
                                        <input class="from-control from-control-one leaf-one" type="file"
                                            id="photograph" name="photograph" required="">
                                    </div>


                                    <div class="col-lg-12 mb-30">
                                        <label for="" class="leaf">Your message Here</label>
                                        <textarea class="from-control from-control-one" id="message" name="message"
                                            required=""></textarea>
                                    </div>


                                </div>
                                <div class="btn-part">
                                    <div class="form-group mb-0">
                                        <div class="g-recaptcha"
                                            data-sitekey="6LfWsV8nAAAAABFVmHxa0ewXU4kt9Fu1FyMfH2zy"></div>
                                        <div class="submit-btn pt-20">
                                            <button type="submit" class="readon">Submit Now</button>
                                        </div>
                                    </div>
                                </div>


                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- <div class="col-lg-4 padding-0">
                    <div class="">
                        <img src="https://img.freepik.com/premium-vector/checklist-concept-illustration_353829-133.jpg?w=740"
                            alt="">
                    </div>
                </div> -->
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
$("#contactPage_mf").validate({
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
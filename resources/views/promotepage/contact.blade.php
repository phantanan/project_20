@extends('layouts.promote')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">ติดต่อ</h1>
        </div>
    </div>
    <!-- Page Header End -->

 <!-- Contact Start -->
 <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h1 class="text-primary text-uppercase" style="letter-spacing: 5px;">ติดต่อ</h1>
            </div>
            <div class="row px-3 pb-2">
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Address</h4>
                    <p>ซอย หลังตลาดศรีเขมา ถ.ประชาราษฎร์
สาย 1 เขตบางซื่อ แขวงบางซื่อ จ.กรุงเทพ</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Phone</h4>
                    <p>+012 345 6789</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Email</h4>
                    <p>info@example.com</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pb-5">
                    <iframe style="width: 100%; height: 443px;"
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4640.857091647362!2d100.51872603833385!3d13.814727368348482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z4LiL4Lit4LiiIOC4q-C4peC4seC4h-C4leC4peC4suC4lOC4qOC4o-C4teC5gOC4guC4oeC4siDguJYu4Lib4Lij4Liw4LiK4Liy4Lij4Liy4Lip4LiO4Lij4LmMIOC4quC4suC4oiAxIOC5gOC4guC4leC4muC4suC4h-C4i-C4t-C5iOC4rSDguYHguILguKfguIfguJrguLLguIfguIvguLfguYjguK0g4LiILuC4geC4o-C4uOC4h-C5gOC4l-C4ng!5e0!3m2!1sth!2sth!4v1669003027678!5m2!1sth!2sth"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-6 pb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control bg-transparent p-4" id="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control bg-transparent py-3 px-4" rows="5" id="message" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->





@stop
@extends('frontend.layouts.master')
@section('content')
<!-- Start Page Banner Section -->
<section class="banner-section service-one">
    <div class="d-table">
        <div class="d-tablecell">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title">
                            <h2>Contact us</h2>
                            <ul>
                                <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Banner Section -->
<!-- Start Contact Section -->
   <section class="contact-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="Form-contact">
                    <div class="section-title-left">
                        <h4>Message us</h4>
                        <h2><span>Send us</span> message for any query</h2>
                    </div>

                    <form id="contactForm" action="{{route('message')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="company_name" id="company_name" required data-error="Please enter your company name" class="form-control" placeholder="Your company name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="position" id="position" required data-error="Please enter your position" class="form-control" placeholder="Your position">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control textarea-hight" id="message" cols="30" rows="5"  data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group pl-1">
                                    <div class="g-recaptcha" data-sitekey="6Lf9HCcjAAAAAIdQjkU9-o5yPo_QYl2DYaAhYkYz"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="default-btn btn-two">
                                    Send Message
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->


<!-- Start Get in Touch Section -->
<div class="get-in-touch-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="get-in-touch-wrapper">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="contact-wrapper">
                                <h3>Head Office</h3>
                                <ul class="contact-info">
                                    <li>
                                        <i class="flaticon-telephone-handle-silhouette"></i>
                                        <a href="tel:{{$contact->head_phone}}">Call us {{$contact->head_phone}}</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-mail-black-envelope-symbol"></i>
                                        <a href="mailto:{{$contact->head_email}}">{{$contact->head_email}}</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-clock-of-circular-shape-outline"></i>
                                        Open Hours {{$contact->head_openinig_time}}
                                    </li>
                                    <li>
                                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                        {{$contact->head_address}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="contact-wrapper">
                                <h3>Branch one</h3>
                                <ul class="contact-info">
                                    <li>
                                        <i class="flaticon-telephone-handle-silhouette"></i>
                                        <a href="tel:{{$contact->branch_phone}}">Call us {{$contact->branch_phone}}</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-mail-black-envelope-symbol"></i>
                                        <a href="mailto:{{$contact->branch_email}}">{{$contact->branch_email}}</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-clock-of-circular-shape-outline"></i>
                                        Open Hours {{$contact->branch_opening_time}}
                                    </li>
                                    <li>
                                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                        {{$contact->branch_address}}
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Get in Touch Section -->



<!-- End -->



<!-- Subscribe -->
<div class="submit-section">
    <form id="contactForm" novalidate="true">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" class="form-control" required="" data-error="Please enter your name here" placeholder="Enter Your  Name">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Enter Address</label>
                        <input type="email" class="form-control" required="" data-error="Please enter your email" placeholder="Enter Your Email Address">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="text-center">
                        <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">
                            subscribe
                            <i class="flaticon-right-arrow"></i>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

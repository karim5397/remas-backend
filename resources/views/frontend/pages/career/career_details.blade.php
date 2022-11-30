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
                            <h2>{{$career->title}}</h2>
                            <ul>
                                <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                <li>{{$career->title}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Banner Section -->
<!-- Content -->
<section class="contact-section contact-section-two my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="get-in-touch-section single_career">
                    <div class="get-in">

                        <h3> <span>{{$career->title}}</span></h3>

                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="contact-info">
                                    <li>
                                        <i class="flaticon-calendar"></i> {{$career->date}}
                                    </li>
                                    <li>
                                        <i class="flaticon-clock-of-circular-shape-outline"></i>
                                        @if ($career->job_type == 'full_time')
                                            Full Time
                                        @elseif ($career->job_type == 'remote')
                                            Remote
                                        @else
                                            Hybrid
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="contact-info">

                                    <li>
                                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                        {{$career->location}}
                                    </li>

                                    <li>
                                        <i class="flaticon-oil-pump"></i>
                                        {{$career->position}}
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <p>{!!$career->description!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="Form-contact">
                    <div class="section-title-left home-page-four-section-title">
                        <h2><span>Apply</span> now</h2>
                    </div>

                    <form action="{{route('career.applied')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <input type="hidden" name="position" id="job" class="form-control" required  value="{{$career->position}}" readonly>


                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group d-flex align-items-center">
                                    <label for="cv" class="form-label" style="text-align: start; width:fit-content">Upload CV <span class="text-danger">*</span></label>
                                    <input type="file" name="cv" id="cv" class="form-control" required>
                                    <br>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control textarea-hight" id="message" cols="30" rows="5"  data-error="Write your message" placeholder="Your Message*"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6Lf9HCcjAAAAAIdQjkU9-o5yPo_QYl2DYaAhYkYz"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="default-btn btn-two">
                                    Send
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
<!-- End -->
@endsection

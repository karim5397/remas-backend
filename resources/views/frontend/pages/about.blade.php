@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@section('page_title', $about->page_title)
@section('meta_title', $about->meta_title)
@section('meta_auth', $about->meta_auth)
@section('meta_description', strip_tags($about->meta_description))
{{-- SEO TAGS --}}
@section('content')


  <!-- Start Page Banner Section -->
  <section class="banner-section service-one">
    <div class="d-table">
        <div class="d-tablecell">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title">
                            <h2>About Us</h2>
                            <ul>
                                <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                <li>About Us</li>
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
<section class="team-man-section team-one-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-left">
                    <h4>Chairman</h4>
                    <h2><span>Chairman's Message</span></h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-6 offset-sm-3 offset-lg-0">
                <div class="single-team-wrapper mb-30">
                    <div class="single-team">
                        <img src="{{asset($team->photo)}}" alt="">
                    </div>
                    <div class="single-team-title text-center mt-2">
                        <h4>{{$team->name}}</h4>
                        <p>{{$team->position}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-6 offset-sm-3 offset-lg-0">
                <h3>{{$about->title}}</h3>
                <p class="mt-4">{!!$about->description!!}</p>
            </div>
        </div>
    </div>
</section>
<!-- End -->

<!-- Mission -->
<section class="our-company-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-left">
                    <h4>Our Company</h4>
                    <h2><span>Vision,</span> Mission and Values</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 pr-0 single-sevice-1">
                <div class="single-service mb-30">
                    <i class="flaticon-vision"></i>
                    <h4>Vision</h4>
                    <p>{!!$about->vision_desc!!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 single-sevice-2">
                <div class="single-service mb-30">
                    <i class="flaticon-mission-accomplished"></i>
                    <h4>Mission</h4>
                    <p>{!!$about->mission_desc!!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-sm-3 offset-lg-0 pl-0 single-sevice-3">
                <div class="single-service mb-30">
                    <i class="flaticon-goal"></i>
                    <h4>Values</h4>
                    <p>{!!$about->value_desc!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
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

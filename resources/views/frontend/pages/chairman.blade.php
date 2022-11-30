@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@section('page_title', $chairman->page_title)
@section('meta_title', $chairman->meta_title)
@section('meta_auth', $chairman->meta_auth)
@section('meta_description', strip_tags($chairman->meta_description))
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
                            <h2>Missions & Chairman Message</h2>
                            <ul>
                                <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                <li>Missions & Chairman Message</li>
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
<section class="service-info pt-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7 mb-5 d-flex justify-content-center">
                <div class="service-content-wrapper">
                   <img src="{{asset($chairman->photo)}}" style="max-width:100%" alt="">
               </div>
           </div>
            <div class="col-lg-5">
                <div class="service-content-wrapper">
                    <div class="service-content-1">
                        <h3 class="service-heading">{{$chairman->title}}</h3>
                        <p class="service-paragraph">{!!$chairman->description!!}</p>

                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="row missions">
            <div class="col-md-6">
                <h4 class="mb-3">Missions</h4>
                <p>{{$about->mission_desc}}</p>
            </div>
            <div class="col-md-6">
                <h4 class="mb-3">Vision</h4>
                <p>{{$about->vision_desc}}</p>
            </div>
        </div>
    </div>
</section>
<!-- End -->
<br>




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

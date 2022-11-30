@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@section('page_title', $service->page_title)
@section('meta_title', $service->meta_title)
@section('meta_auth', $service->meta_auth)
@section('meta_description', strip_tags($service->meta_description))
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
                                <h2>{{$service->title}}</h2>
                                <ul>
                                    <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                    <li>{{$service->title}}</li>
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
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-content-wrapper">
                        <div class="service-content-1">
                            <h3 class="service-heading">{{$service->title}}</h3>
                            <p class="service-paragraph">{!!$service->description!!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                     <div class="service-content-wrapper h-100">
                        <img src="{{asset($service->photo)}}" style="height: 100%;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
    <br>
    <!-- Service Projects -->




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

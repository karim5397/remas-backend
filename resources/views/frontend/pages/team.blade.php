@extends('frontend.layouts.master')
@section('content')
<!-- Start Page Banner Section -->
<section class="banner-section  service-one">
    <div class="d-table">
        <div class="d-tablecell">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title">
                            <h2>AAW Family</h2>
                            <ul>
                                <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                <li>AAW Family</li>
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
<section class="team-man-section team-one-section my-5">
    <div class="container">
        <div class="row">
            @foreach ($teams as $team )
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-wrapper mb-30">
                        <div class="single-team">
                            <img src="{{asset($team->photo)}}" alt="">
                        </div>
                        <div class="single-team-title pt-4">
                            <h4>{{$team->name}}</h4>
                            <p>{{$team->position}}</p>
                        </div>
                        <div class="team-layout">
                            <span>{{$team->description}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
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

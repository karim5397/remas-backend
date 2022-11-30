@extends('frontend.layouts.master')
@php
    $setting=App\Models\Setting::first()
@endphp
@section('page_title', $setting->videos_page_title)
@section('meta_title', $setting->videos_meta_title)
@section('meta_auth', $setting->videos_meta_auth)
@section('meta_description', strip_tags($setting->videos_meta_description))
{{-- SEO TAGS --}}
@section('content')
{{-- SEO TAGS --}}


<!-- Start Page Banner Section -->
<section class="banner-section service-one">
    <div class="d-table">
        <div class="d-tablecell">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title">
                            <h2>Videos</h2>
                            <ul>
                                <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                <li>Videos</li>
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
<div class="blogs-section blogs-section-two my-5">
    <div class="container">
        <div class="row">
            @foreach($videos as $video)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img video video">

                            <a href="{{$video->video_url}}" class="play-video-custom play-video" style="z-index: 1 !important;">
                                <i class="fas fa-play-circle fa-5x"></i>
                            </a>
                            <iframe style="z-index: -10 !important;" width="100%" height="315" src="{{$video->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>
                        <div class="blogs-content">
                            <h2><a href="javascript:void(0);">{{$video->title}}</a></h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            {{ $videos->links('pagination::custom') }}
        </div>
    </div>
</div>
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

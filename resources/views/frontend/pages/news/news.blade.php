@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@php
    $setting=App\Models\Setting::first()
@endphp
@section('page_title', $setting->news_page_title)
@section('meta_title', $setting->news_meta_title)
@section('meta_auth', $setting->news_meta_auth)
@section('meta_description', strip_tags($setting->news_meta_description))
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
                            <h2>NEWS</h2>
                            <ul>
                                <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                <li>NEWS</li>
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
            @foreach($news as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blogs mb-30" style="height: 600px;">
                        <div class="blog-img">
                            <a href="{{route('news.details' ,$blog->id)}}"><img src="{{asset($blog->photo)}}" alt="blog"></a>
                        </div>
                        <div class="blogs-content">
                            <ul>
                                <li><i class="flaticon-calendar"></i>{{$blog->date}}</li>
                            </ul>
                            <h2><a href="{{route('news.details' ,$blog->id)}}">{{$blog->title}}</a></h2>
                            <p style="max-height:175px; overflow:hidden;  text-overflow:ellipsis;">{{$blog->description}}</p>
                            <div class="learn-share">
                                <a class="learn" href="{{route('news.details' ,$blog->id)}}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="pagenavigation-section">
                <nav aria-label="Page navigation example text-center">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link page-links" href="#">
                                <i class="flaticon-left"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="flaticon-right-1"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
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

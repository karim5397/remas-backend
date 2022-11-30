@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@section('page_title', $news->page_title)
@section('meta_title', $news->meta_title)
@section('meta_auth', $news->meta_auth)
@section('meta_description', strip_tags($news->meta_description))
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
                            <h2>{{$news->title}}</h2>
                            <ul>
                                <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                <li>{{$news->title}}</li>
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
<div class="blogs-section blog-details-section my-5 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="{{asset($news->photo)}}" alt="blog">

                    </div>
                    <div class="blogs-content blogs-contents">
                        <ul>
                            <li><i class="flaticon-calendar"></i>{{$news->date}}</li>
                        </ul>
                    </div>
                </div>
                <div class="blog-details-text">
                    <p>{!!$news->description!!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="sidebar-area">

                    <div class="widget widget_recent_posts">
                        <h3 class="widget-title">Latest News </h3>
                        <ul>
                            @foreach ($latest_news as $item)
                                <li>
                                    <div class="recent-post-thumb">
                                        <a href="{{route('news.details' ,$item->id)}}">
                                            <img src="{{asset($item->photo)}}" alt="blog-image">
                                        </a>
                                    </div>

                                    <div class="recent-post-content">
                                        <h3><a href="{{route('news.details',$item->id)}}">{{$item->title}}</a></h3>
                                        <span class="date">{{$item->date}}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
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

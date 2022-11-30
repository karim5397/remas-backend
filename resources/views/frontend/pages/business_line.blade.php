@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@section('page_title', $business_line->page_title)
@section('meta_title', $business_line->meta_title)
@section('meta_auth', $business_line->meta_auth)
@section('meta_description', strip_tags($business_line->meta_description))
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
                            <h2>{{$business_line->title}}</h2>
                            <ul>
                                <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                <li>{{$business_line->title}}</li>
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
            <div class="col-lg-12 mb-5 d-flex justify-content-center">
                <div class="service-content-wrapper">
                   <img src="{{asset($business_line->photo)}}" style="max-width:100%" alt="">
               </div>
           </div>
            <div class="col-lg-12">
                <div class="service-content-wrapper">
                    <div class="service-content-1">
                        <h3 class="service-heading">{{$business_line->title}}</h3>
                        <p class="service-paragraph">{!!$business_line->description!!}</p>
                    </div>
                    <br>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End -->
<br>

<section class="project-section project-one">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-left">
                    <h2>{{$business_line->title}} <span>Projects</span> </h2>
                </div>
            </div><!-- /.col-12 end  -->
        </div>
        <!-- /.sorting-menu -->
        <div id="Container" class="row">
            @foreach ($projects as $project )
                <div class="col-lg-6 col-md-6 mix house all">
                    <div class="single-projects">
                        @php
                            $photo= explode(',' , $project->photo)
                        @endphp
                        <img src="{{asset($photo[0])}}" alt="">
                        <div class="project-text">
                            <h3>{{$project->title}}</h3>
                            <a href="{{route('project.details' ,$project->id)}}">view details <i class="flaticon-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>




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

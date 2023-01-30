@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@section('page_title', $about->page_title)
@section('meta_title', $about->meta_title)
@section('meta_auth', $about->meta_auth)
@section('meta_description', strip_tags($about->meta_description))
{{-- SEO TAGS --}}
@section('content')


    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('{{asset('frontend/assets/images/bg/banner11.jpg')}}') center;">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
            <div class="position-middle-bottom">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 page-heading text-white title-dark">عن الشركة</h5>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="section direction">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <img src="{{asset($about->photo)}}" class="img-fluid rounded shadow" alt="{{$about->photo_alt}}">
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-3">{{$about->title}}</h4>
                        <p class="text-muted">{{strip_tags($about->description)}}</p>
                                            
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="card shadow p-4 rounded features features-classic feature-primary">
                        <i class="fa-solid fa-tv fa-2x"></i>
                        <div class="content my-3 border-bottom">
                            <h4 href="#" class="text-dark">مهمتنا</h4>

                            <p class="text-muted mt-3">{{strip_tags($about->mission)}}</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="card shadow p-4 rounded features features-classic feature-primary">
                        <i class="fa-solid fa-atom fa-2x" ></i>

                        <div class="content my-3 border-bottom">
                            <h4 href="#" class="text-dark">رؤيتنا</h4>

                            <p class="text-muted mt-3">{{strip_tags($about->vision)}}</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection

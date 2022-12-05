@extends('frontend.layouts.master')
@section('content')
   <!-- Hero Start -->
   <section class="bg-half-170 d-table w-100" style="background: url('{{asset('frontend/assets/images/bg/banner11.jpg')}}') center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="position-middle-bottom">
            <div class="title-heading text-center">
                <h5 class="heading fw-semibold mb-0 page-heading text-white title-dark">الشهادات</h5>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="section direction">
    <div class="container-fluid">
        <div class="row">
            @foreach ($certificates as $certificate)
                <div class="col-lg-3 col-md-6">
                    <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden certifcates">
                        <div class="card-img position-relative">
                            <img src="{{asset($certificate->photo)}}" class="img-fluid" style="width:100%; height:420px" alt="">
                            <div class="card-overlay"></div>

                            <div class="pop-icon">
                                <a href="{{asset($certificate->photo)}}" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            @endforeach

         
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
@endsection
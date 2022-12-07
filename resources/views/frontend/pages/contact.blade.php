@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@section('page_title', get_setting('contact_page_title'))
@section('meta_title', get_setting('contact_meta_title'))
@section('meta_auth', get_setting('contact_meta_auth'))
@section('meta_description', strip_tags(get_setting('contact_meta_description')))
{{-- SEO TAGS --}}
@section('content')
 <!-- Hero Start -->
 <section class="bg-half-170 d-table w-100" style="background: url('{{asset('frontend/assets/images/bg/banner11.jpg')}}') center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="position-middle-bottom">
            <div class="title-heading text-center">
                <h5 class="heading fw-semibold mb-0 page-heading text-white title-dark"> فروع الشركة</h5>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="section pb-0 mb-5">
    <div class="container">
        <div class="direction">
            @foreach ($contacts as $contact)
                <div class="address mt-5">
                    <div class="branch-title mb-5 ">
                        <h4 class="p-2 text-white" style="font-weight: 900;">{{$contact->title}}</h4>
                    </div>
                    <div class="row mx-2" style="background-color: #a482341f;">
                        <div class="col-md-6">
                            <div class="branch-details p-2">
                                <ul class="d-flex flex-column list-unstyled gap-3 mt-4">
                                    <li><span><strong><i class="fa fa-phone"></i> الهاتف: </strong> {{$contact->phone}}</span></li>
                                    <li><span><strong><i class="fa-regular fa-envelope"></i> البريد الإلكترونى: </strong> {{$contact->email}}</span></li>
                                    <li><span><strong><i class="fa-solid fa-location-dot"></i> العنوان: </strong>{{$contact->address}}</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <iframe src="{{$contact->map_url}}" style="border:0; width: 100%; height: 200px;" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>

    
</section><!--end section-->
<!-- End -->
@endsection

@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@section('page_title', get_setting('investment_page_title'))
@section('meta_title', get_setting('investment_meta_title'))
@section('meta_auth', get_setting('investment_meta_auth'))
@section('meta_description', strip_tags(get_setting('investment_meta_description')))
{{-- SEO TAGS --}}
@section('content')
 <!-- Hero Start -->
 <section class="bg-half-170 d-table w-100" style="background: url('{{asset('frontend/assets/images/bg/banner7.jpg')}}') center;">
    <!-- <div class="bg-overlay bg-gradient-overlay"></div> -->
    <div class="container">
        <div class="position-middle-bottom">
            <div class="title-heading text-center">
                <h5 class="heading fw-semibold mb-0 page-heading text-white title-dark">إداره علاقات المستثمرين</h5>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row mb-5 pb-3">
            <div class="col-lg-8 col-md-8 mt-3">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h3 class="direction">اولاً : التشكيل الحالى لأعضاء مجلس الإداره</h3>
                    </div>
                    <table class="table table-bordered direction">
                        <thead  style="background-color:#353535 !important; color:#fff !important;">
                            <tr class="text-center">
                                <th>الاسم</th>
                                <th>جهة التمثيل</th>
                                <th>الصفة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($structures_members as $structure)
                                <tr class="text-center">
                                    <td>{{$structure->name}}</td>
                                    <td>{{$structure->company_name}}</td>
                                    <td>{{$structure->position}}</td>
                                </tr>
                            @endforeach
                        
                        </tbody>
                   </table>
                </div><!--end row-->
                <hr>
                <div class="row mt-2 ">
                    <div class="col-md-12 mb-5">
                        <h3 class="direction">ثانياً : المديرين التنفذين الداخليين بالشركة</h3>
                    </div>
                   <table class="table table-bordered direction">
                        <thead  style="background-color:#353535 !important; color:#fff !important;">
                            <tr class="text-center">
                                <th>الاسم</th>
                                <th>الصفة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($structures_directors as $structure)
                                <tr class="text-center">
                                    <td>{{$structure->name}}</td>
                                    <td>{{$structure->position}}</td>
                                </tr>
                            @endforeach
                        
                        </tbody>
                   </table>
                </div><!--end row-->
            </div><!--end col-->

           @include('frontend.pages.investment.links_table')
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
@endsection
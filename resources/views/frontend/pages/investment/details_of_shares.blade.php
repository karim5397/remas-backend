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
        <div class="row">
            <div class="col-lg-8 col-md-8 mt-3">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <h3 class="text-dir font-bold">بيانات الأسهم</h3>
                    </div>
                   <table class="table table-bordered direction">
                        <thead >
                            <tr>
                                <th style="width:200px;background-color:#a48234 !important; color:#fff !important">نوع الورقة </th>
                                <td>{{$share->instrument_type}}</td>
                            </tr>
                            <tr>
                                <th style="width:200px;background-color:#a48234 !important; color:#fff !important">القيمة الاسمية</th>
                                <td>{{$share->par_value}}</td>
                            </tr>
                            <tr>
                                <th style="width:200px;background-color:#a48234 !important; color:#fff !important">تفاصيل الإصدارات</th>
                                <td>{{$share->issuances_details}}</td>
                            </tr>
                            <tr>
                                <th style="width:200px;background-color:#a48234 !important; color:#fff !important">عدد الأسهم</th>
                                <td>{{$share->number_shares}}</td>
                            </tr>
                            <tr>
                                <th style="width:200px;background-color:#a48234 !important; color:#fff !important">السنة المالية</th>
                                <td>{{$share->financial_year}}</td>
                            </tr>
                        </thead>
                   </table>
                </div><!--end row-->
            </div><!--end col-->

           @include('frontend.pages.investment.links_table')
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
@endsection
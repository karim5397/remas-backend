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
                        <h3 class="text-dir font-bold">بيانات الأسهم و الشركة</h3>
                    </div>
                   <table class="table table-bordered direction">
                        <thead >
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">تاريخ التأسيس</th>
                                <td>{{$share->founding_date}}</td>
                            </tr>
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">القانون الذى تتبعه الشركة</th>
                                <td>{{$share->followed_law}}</td>
                            </tr>
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">الغرض</th>
                                <td>{{$share->purpose}}</td>
                            </tr>
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">فروع الشركة</th>
                                <td>{{$share->company_branches}}</td>
                            </tr>
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">تاريخ القيد بالبورصة</th>
                                <td>{{$share->stock_market_date}}</td>
                            </tr>
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">عدد الإصدارات</th>
                                <td>{{$share->version_number}}</td>
                            </tr>
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">القيمة الاسمية</th>
                                <td>{{$share->par_value}}</td>
                            </tr>
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">عدد الأسهم المقيدة</th>
                                <td>{{$share->number_shares}}</td>
                            </tr>
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">رأس المال المدفوع</th>
                                <td>{{$share->issued_capital}}</td>
                            </tr>
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">رأس المال المرخص به</th>
                                <td>{{$share->authorized_capital}}</td>
                            </tr>
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">  السنة المالية</th>
                                <td>{{$share->financial_year}}</td>
                            </tr>
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">أسم مراقب الحسابات</th>
                                <td>{{$share->external_auditor}}</td>
                            </tr>
                            <tr>
                                <th class="align-middle" style="width:200px;background-color:#a48234 !important; color:#fff !important">هدف و  رؤية الشركة</th>
                                <td>{{$share->vision_mission}}</td>
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
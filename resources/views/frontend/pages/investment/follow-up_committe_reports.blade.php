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
                    <div class="col-md-12 mb-5">
                        <div class="form-group" style="float: right;">
                            @php
                                $years=App\Models\FollowUpReport::select('year')->distinct()->orderBy('year' ,'DESC')->get();
                            @endphp
                            <form action="{{route('follow_up.filter')}}" method="get" >
                                <select name="year" class="form-select" style="width: fit-content;" onchange="this.form.submit();">
                                    <option value="" selected disabled>-- اختار سنه --</option>
                                    @foreach ($years as $year)
                                        <option value="{{$year['year']}}" @if(session()->get('year') == $year['year'] ) selected @endif>{{$year['year']}}</option>
                                    @endforeach
                                    
                                </select>
                            </form>
                        </div>
                    </div>
                   <table class="table table-bordered direction">
                        <thead  style="background-color:#353535 !important; color:#fff !important;">
                            <tr class="text-center">
                                <th>التقارير </th>
                                <th>تحميل</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($follow_ups->count() > 0)
                                @foreach ($follow_ups as $follow_up)
                                    <tr class="text-center">
                                        <td>{{$follow_up->title}}</td>
                                        <td><a href="{{route('follow_up.download',$follow_up->id)}}" id="counter" data-table="follow_up" data-id="{{$follow_up->id}}" data-counter="1"><i class=" fas fa-download"></i></a></td>
                                    </tr>
                                @endforeach
                            @else
                            <tr class="text-center">
                                <td colspan="2"><p class="text-danger">لا يوجد تقارير</p></td>
                            </tr>
                            @endif  
                        
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
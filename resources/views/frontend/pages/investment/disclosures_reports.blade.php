@extends('frontend.layouts.master')
@section('content')
 <!-- Hero Start -->
 <section class="bg-half-170 d-table w-100" style="background: url('{{asset('frontend/assets/images/bg/banner7.jpg')}}') center;">
    <!-- <div class="bg-overlay bg-gradient-overlay"></div> -->
    <div class="container">
        <div class="position-middle-bottom">
            <div class="title-heading text-center">
                <h5 class="heading fw-semibold mb-0 page-heading text-white title-dark">اداراه علاقات المستثمرين</h5>
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
                                $years=App\Models\Disclosure::select('year')->distinct()->get();
                            @endphp
                            <form action="{{route('disclosure.filter')}}" method="get" >
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
                            @foreach ($disclosures as $disclosure)
                                <tr class="text-center">
                                    <td>{{$disclosure->title}}</td>
                                    <td><a href="{{route('disclosure.download',$disclosure->id)}}"><i class=" fas fa-download"></i></a></td>
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
@extends('frontend.layouts.master')
@section('content')
 <!-- Start Page Banner Section -->
 <section class="banner-section  service-one">
    <div class="d-table">
        <div class="d-tablecell">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title">
                            <h2>Careers</h2>
                            <ul>
                                <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                <li>Careers</li>
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
<section class="career_section my-5 project-one">
    <div class="container">
        <!-- /.sorting-menu -->
        <div id="Container" class="row">

            <!-- Filter -->
            <div class="col-lg-3 col-md-12 projects_filter">
                <div class="sidebar-area">
                    <form action="{{route('career.filter')}}" method="GET">
                        {{-- filter by job type  --}}
                        <div class="widget widget_post_categories">
                            <h3 class="widget-title responsive-m">Vacancy Type</h3>
                            <ul>
                            @php
                                $job_types=App\Models\Career::where('status' ,'active')->select('job_type')->distinct()->get();
                            @endphp
                            @foreach ($job_types as  $type)
                                <li><input type="checkbox" name="job_types[]" value="{{$type['job_type']}}" @if(!empty(session()->get('job_types')) && in_array($type['job_type'],session()->get('job_types'))) checked  @endif>
                                     @if ($type['job_type'] == 'full_time')
                                        Full Time
                                     @elseif ($type['job_type'] == 'part_time')
                                        Part Time
                                     @elseif ($type['job_type'] == 'hybrid')
                                        Hybrid
                                     @elseif ($type['job_type'] == 'intership')
                                        Intership
                                     @endif
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        {{-- filter by position --}}
                        <div class="widget widget_post_categories">
                            <h3 class="widget-title responsive-m">Departments</h3>
                            <ul>
                            @php
                                $positions=App\Models\Career::where('status' ,'active')->select('position')->distinct()->get();
                            @endphp
                            @foreach ($positions as  $position)
                                <li><input type="checkbox" name="positions[]" value="{{$position['position']}}" @if(!empty(session()->get('positions')) && in_array($position['position'],session()->get('positions'))) checked  @endif>{{$position['position']}}</li>
                            @endforeach
                            </ul>
                        </div>

                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form>
                </div>
            </div>
            <!-- End -->

            <!-- All Projects -->
            @if (count($careers) > 0)
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                            @foreach ($careers as $career )
                                <div class="job_list row">
                                <div class="col-lg-1">
                                    <img src="{{asset('frontend/assets/img/employee.png')}}">
                                </div>
                                <div class="col-lg-8">
                                    <h4><a href="{{route('career.details',$career->id)}}">{{$career->title}}</a></h4>
                                    <ul class="ul_job">
                                        <li><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> {{$career->location}}</li>
                                        <li><i class="flaticon-clock-of-circular-shape-outline"></i>
                                            @if ($career->job_type == 'full_time')
                                                Full Time
                                            @elseif ($career->job_type == 'part_time')
                                                Part Time
                                            @elseif ($career->job_type == 'hybrid')
                                                Hybrid
                                            @elseif ($career->job_type == 'intership')
                                                Intership
                                            @endif
                                        </li>
                                        <li><i class="flaticon-calendar"></i>
                                            @php
                                                $current_date=\Carbon\Carbon::now()->format('Y-m-d');
                                                $to = \Carbon\Carbon::parse(date('Y-m-d', strtotime($career->date)));
                                                $from = \Carbon\Carbon::parse(date('Y-m-d', strtotime($current_date)));
                                                $days = $to->diffInDays($from);
                                            @endphp
                                             @if ($days > 0)
                                                {{$days}} Day ago
                                             @else
                                                Today
                                             @endif
                                            </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{route('career.details',$career->id)}}" class="default-btn">Apply Now</a>
                                </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="row">
                        {{ $careers->links('pagination::custom') }}
                    </div>


            </div>
            @else
                <div class="col-lg-9 d-flex justify-content-center align-items-center pt-5" style="background-color: #f3f3f3;">
                    <p class="text-center" style="font-size: 30px; font-weight:bold;"> no available jobs for now </p>
                </div>
            @endif
            <!-- End -->
        </div>




    </div>
</section>
<!-- End -->
@endsection

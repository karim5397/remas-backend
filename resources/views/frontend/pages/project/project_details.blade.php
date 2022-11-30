@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@section('page_title', $project->page_title)
@section('meta_title', $project->meta_title)
@section('meta_auth', $project->meta_auth)
@section('meta_description', strip_tags($project->meta_description))
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
                            <h2>{{$project->title}}</h2>
                            <ul>
                                <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                <li>{{$project->title}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-info-section mt-5">
   <div class="container">
    <div class="project-slider-change">
        <div class="row">
            <div class="col-lg-8">
                <div class="project-slider-wrapper owl-carousel owl-theme">
                    @php
                        $photos=explode(',',$project->photo)
                    @endphp
                    @foreach ($photos as $photo )
                    <div class="project-single-slider">
                        <img src="{{asset($photo)}}" alt="">
                    </div>
                    @endforeach

                </div>
                <div class="project-description">
                    <div class="project-description-wrapper">
                     <h3>{{$project->title}}</h3>
                     <p class="project-content-1">{{$project->description}}</p>
                 </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="project-info-wrapper">
                     <h3>Project Info</h3>
                     <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12">
                             <div class="project-info-list">
                                 <h4>Business lines</h4>
                                 <p>{{App\Models\BusinessLines::where('id' , $project->business_id)->value('title')}}</p>
                             </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12">
                             <div class="project-info-list">
                                 <h4>Fund</h4>
                                 <p>{{$project->fund}}</p>
                             </div>
                         </div>
                         <div class="col-lg-12 col-md-6 col-sm-6">
                             <div class="project-info-list">
                                 <h4>Location</h4>
                                 <p>{{$project->location}}</p>
                             </div>
                         </div>
                         <div class="col-lg-12 col-md-6 col-sm-6">
                             <div class="project-info-list">
                                 <h4>Country</h4>
                                 <p>{{$project->country}}</p>
                             </div>
                         </div>
                         <div class="col-lg-12 col-md-6 col-sm-6">
                             <div class="project-info-list">
                                 <h4>Start Date</h4>
                                 <p>{{carbon\Carbon::parse($project->start_date)->format('Y-m-d')}}</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="project-info-list">
                                    <h4>End Date</h4>
                                    <p>{{carbon\Carbon::parse($project->end_date)->format('Y-m-d')}}</p>
                             </div>
                         </div>
                         <div class="col-lg-12 col-md-6 col-sm-6">
                             <div class="project-info-list">
                                 <h4>Value</h4>
                                 <p>{{number_format($project->value,2)}}</p>
                             </div>
                         </div>
                         <div class="col-lg-12 col-md-6 col-sm-6">
                             <div class="project-info-list">
                                 <h4>Client</h4>
                                 <p>{{$project->client}}</p>
                             </div>
                         </div>

                     </div>
                </div>
            </div>

        </div>
        {{-- next & pervious --}}
            <div class="project-buttons d-flex justify-content-center m-5" style="gap: 50px;">
                @php
                    $project_ids=App\Models\Project::where('status' , 'active')->pluck('id');
                    $array= json_decode($project_ids);
                    $count = end($array); //get last id
                    $projects=App\Models\Project::where('status' , 'active')->get();
                    $current_id=$project->id;

                @endphp
                {{-- previous button  --}}
                @for ($i=$current_id - 1; $i<=$count ; $i--)
                    @if ($i  > 0 && in_array($i ,$array))
                        <a href="{{route('project.details',$i)}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i></a>
                        @break
                    @else

                    @endif
                    @if ($i-- && in_array($i ,$array))
                        <a href="{{route('project.details',$i)}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i></a>
                        @break
                    @endif
                    @if ($i  < 2)
                        <a href="javascript:void(0);" style="cursor: not-allowed;" class="btn btn-primary" ><i class="fa fa-arrow-circle-left"></i></a>
                        @break
                    @endif


                @endfor

                {{-- next button  --}}
                @for ($i=$current_id +1; $i<=$count +1; $i++)

                    @if ($i > 0 && in_array($i ,$array))
                        <a href="{{route('project.details',$i)}}" class="btn btn-primary"><i class="fa fa-arrow-circle-right"></i></a>
                        @break
                    @endif
                    @if ($i++ && in_array($i ,$array))
                        <a href="{{route('project.details',$i)}}" class="btn btn-primary"><i class="fa fa-arrow-circle-right"></i></a>
                        @break
                    @endif

                    @if ($i > $count)
                        <a href="javascript:void(0);" style="cursor: not-allowed;" class="btn btn-primary"><i class="fa fa-arrow-circle-right"></i></a>
                    @endif
                @endfor
            </div>
        {{-- next & pervious --}}


    </div>
   </div>
</section>

<!-- Start Project Description -->
<section class="project-description pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="project-details-wrapper">
                    <h3>AAW Responsibilities</h3>
                    <ul>
                        <li>
                            <i class="flaticon-check-mark"></i>
                            Objectively innovate empowered
                        </li>
                        <li>
                            <i class="flaticon-check-mark"></i>
                            Holisticly predominate extensible
                        </li>
                        <li>
                            <i class="flaticon-check-mark"></i>
                            Procedures for reliable supply chains
                        </li>
                        <li>
                            <i class="flaticon-check-mark"></i>
                            Dramatically engage top-line services
                        </li>
                        <li>
                            <i class="flaticon-check-mark"></i>
                            Dramatically engage top-line services
                        </li>
                        <li>
                            <i class="flaticon-check-mark"></i>
                            Dramatically engage top-line services
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="project-details-wrapper">
                    <h3>Components</h3>
                    <ul>
                        <li>
                            <i class="flaticon-check-mark"></i>
                            Objectively innovate empowered
                        </li>
                        <li>
                            <i class="flaticon-check-mark"></i>
                            Holisticly predominate extensible
                        </li>
                        <li>
                            <i class="flaticon-check-mark"></i>
                            Procedures for reliable supply chains
                        </li>
                        <li>
                            <i class="flaticon-check-mark"></i>
                            Dramatically engage top-line services
                        </li>
                        <li>
                            <i class="flaticon-check-mark"></i>
                            Dramatically engage top-line services
                        </li>
                        <li>
                            <i class="flaticon-check-mark"></i>
                            Dramatically engage top-line services
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-area">

                    <div class="widget widget_tag_cloud">
                        <h3 class="widget-title">Project Type</h3>
                        <div class="tagcloud">
                            @foreach (App\Models\ProjectType::get() as $type)
                                <a href="{{route('projects-filter',['type' => array($type->id)])}}">{{$type->title}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Project Description -->
<!-- End -->

@endsection

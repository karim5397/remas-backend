@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@php
    $setting=App\Models\Setting::first()
@endphp
@section('page_title', $setting->projects_page_title)
@section('meta_title', $setting->projects_meta_title)
@section('meta_auth', $setting->projects_meta_auth)
@section('meta_description', strip_tags($setting->projects_meta_description))
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
                                <h2>All Projects</h2>
                                <ul>
                                    <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                    <li>All Projects</li>
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
  <section class="project-section project-one my-5">
    <div class="container">
        <!-- /.sorting-menu -->
        <div id="Container" class="row">

                <!-- Filter -->
            <div class="col-lg-12 col-md-12  projects_filter">
                <div class="mb-4">
                    <h4 style="color:#003277;">Filter By : </h4>
                </div>

                <form action="{{route('projects-filter')}}" method="GET">
                    <div class="sidebar-area d-flex row">
                        <div class="col-1"></div>
                        <div class="col-3 widget widget_post_categories">
                            <a href="javascript:void(0);" class="title responsive-m" data-toggle="collapse" data-target="#business_lines" aria-expanded="false" aria-controls="business_lines">Business lines <i class="fa fa-caret-down"></i></a>

                              <div class="collapse mt-4" id="business_lines">

                                     <ul style="height: 200px !important;  overflow: auto">
                                        @foreach ($business_lines as $business)
                                            <li> <input type="checkbox" name="business[]" @if(!empty(session()->get('business')) && in_array($business->id,session()->get('business'))) checked  @endif value="{{$business->id}}"> {{$business->title}}</li>
                                        @endforeach


                                    </ul>

                              </div>

                        </div>

                        <div class="col-3 widget widget_post_categories">
                            <a href="javascript:void(0);" class="title responsive-m" data-toggle="collapse" data-target="#country" aria-expanded="false" aria-controls="country">Country <i class="fa fa-caret-down"></i></a>

                            <div class="collapse mt-4"  id="country">
                                <ul style="height: 200px !important;  overflow: auto">
                                    @php
                                        $countries=App\Models\Project::where('status' ,'active')->select('country')->distinct()->get();
                                    @endphp
                                    @foreach ($countries as  $country)
                                        <li><input type="checkbox" name="country[]" value="{{$country['country']}}" @if(!empty(session()->get('country')) && in_array($country['country'],session()->get('country'))) checked  @endif> {{$country['country']}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 widget widget_post_categories">
                            <a href="javascript:void(0);" class="title responsive-m" data-toggle="collapse" data-target="#project_type" aria-expanded="false" aria-controls="project_type">Project Type <i class="fa fa-caret-down"></i></a>

                              <div class="collapse mt-4" id="project_type">

                                     <ul style="height: 200px !important;  overflow: auto">
                                        @foreach ($project_types as $type)
                                             <li> <input type="checkbox" name="type[]" value="{{$type->id}}" @if(!empty(session()->get('type')) && in_array($type->id,session()->get('type'))) checked  @endif> {{$type->title}}</li>
                                        @endforeach


                                    </ul>

                              </div>

                        </div>



                        <div class="col-2">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>


                    </div>
                </form>
            </div>
            <!-- End -->



            <!-- All Projects -->
            <div class="col-lg-12 mt-5">
                <div class="row">
                    @if (count($projects) > 0)

                        @foreach ($projects as $project )
                            <div class="col-lg-6 col-md-6 mix house all">
                                <div class="single-projects">
                                    @php
                                        $photo=explode(',',$project->photo)
                                    @endphp
                                    <img src="{{asset($photo[0])}}"  alt="">
                                    <div class="project-text">
                                        <h3>{{$project->title}}</h3>
                                        <a href="{{route('project.details' ,$project->id)}}">view details <i class="flaticon-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col mix house all text-center ">
                            <p class="text-danger font-bold">No Project Found!</p>
                        </div>
                    @endif



                </div>
                <!-- Pagination -->
                <div class="row">
                    {{ $projects->links('pagination::custom') }}
                </div>
            <!-- End -->
        </div>




    </div>
</section>
<!-- End -->


@endsection

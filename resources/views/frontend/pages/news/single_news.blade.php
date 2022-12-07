@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@section('page_title', $news->page_title)
@section('meta_title', $news->meta_title)
@section('meta_auth', $news->meta_auth)
@section('meta_description', strip_tags($news->meta_description))
{{-- SEO TAGS --}}
@section('content')

<!-- Start Hero -->
<section class="bg-half-170 bg-light bg-gradient direction">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="title-heading">
                    <h4 class="heading fw-semibold">{{$news->title}}</h4>

                    <ul class="list-inline d-flex pt-4 mb-0 border-top justify-content-between">
                        <li class="list-inline-item text-muted h6"><i class="uil uil-calender h5 text-dark"></i> {{$news->date}}</li>
                    </ul>
                </div>

                <div class="mt-5">
                    <img src="{{asset($news->photo)}}" class="img-fluid rounded shadow" width='100%' alt="{{$news->photo_alt}}">
                </div>

                <div class="mt-5">
                    <p class="text-muted">{!!$news->description!!}</p>
                    
                </div>

               

             


                <div class="card shadow rounded border-0 mt-5">
                    <div class="card-body">
                        <h5 class="card-title mb-0">الاخبار ذات صله :</h5>

                        <div class="row">
                            @foreach ($latest_news as $news)
                                <div class="col-md-6 mt-4 pt-2">
                                    <div class="card blog blog-primary shadow rounded overflow-hidden">
                                        <div class="image position-relative overflow-hidden">
                                            <img src="{{asset($news->photo)}}" class="img-fluid" alt="{{$news->photo_alt}}">
                                        </div>
                    
                                        <div class="card-body content">
                                            <a href="#" class="h5 title text-dark d-block mb-0">{{$news->title}}</a>
                                            <p class="text-muted mt-2 mb-2" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{!!$news->description!!}</p>
                                            <a href="{{route('news.details' , $news->id)}}" class="link text-dark">اقرأ المزيد <i class="uil uil-arrow-right align-middle"></i></a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->
@endsection

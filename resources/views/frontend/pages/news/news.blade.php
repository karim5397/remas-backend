@extends('frontend.layouts.master')
{{-- SEO TAGS --}}
@section('page_title', get_setting('news_page_title'))
@section('meta_title', get_setting('news_meta_title'))
@section('meta_auth', get_setting('news_meta_auth'))
@section('meta_description', strip_tags(get_setting('news_meta_description')))
{{-- SEO TAGS --}}
@section('content')

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('{{asset('frontend/assets/images/bg/banner11.jpg')}}') center;">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
            <div class="position-middle-bottom">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 page-heading text-white title-dark">أحدث ألاخبار</h5>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start news-->
    <section class="section direction">
        <div class="container">
            <div class="row justify-content-center">

            <div class="row justify-content-center">
                @foreach ($all_news as $news)
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog blog-primary shadow rounded overflow-hidden">
                            <div class="image position-relative overflow-hidden">
                                <img src="{{asset($news->photo)}}" class="img-fluid" alt="{{$news->photo_alt}}">
                            </div>

                            <div class="card-body content">
                                <a href="#" class="h5 title text-dark d-block mb-0">{{$news->title}}</a>
                                <p class="text-muted mt-2 mb-2">{{strip_tags($news->description)}}</p>
                                <a href="{{route('news.details',$news->id)}}" class="link text-dark">اقرأ المزيد <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                @endforeach

           
            </div><!--end row-->

            <div class="row mt-5">
                {{$all_news->links('pagination::custom')}}
            </div><!--end row-->
                    <!-- End -->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection

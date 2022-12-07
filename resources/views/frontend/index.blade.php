@extends('frontend.layouts.master')
@section('content')
<main>

         <!-- Hero Start -->
        <section class="home-slider position-relative p-0 mb-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($banners as $banner)
                        <div class="carousel-item active" data-bs-interval="3000">
                            <div class="bg-home d-flex align-items-center" style="background: url('{{asset($banner->photo)}}') top; background-size: cover;">
                                <div class="bg-overlay"></div>
                                <div class="container">
                                    <div class="position-middle-bottom">
                                        <div class="title-heading my-4">
                                            <h4 class="display-3 fw-bold text-white title-dark mb-3">{{$banner->title}}</h4>
                                        </div>
                                    </div>
                                
                                </div><!--end container-->
                            </div><!--end slide-->
                        </div>
                    @endforeach

                   

                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->

        <!-- About START -->
        <section class="section direction p-5 mb-5 mt-2" style="background-color: #f3f3f3;">
            <div class="container  mt-60">
                <div class="section-title ms-lg-5 ">
                    <h4 class="title fw-semibold mb-3">عن الشركة</h4>
                </div>
                <div class="row ">
                    <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div>
                            <h3>{{$about->title}}</h3>
                            <p>{{$about->description}}</p>
                            <a href="#" class="btn btn-primary" style="border:none !important;">اقرأ المزيد</a>              
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-6">
                        <img src="{{asset($about->photo)}}" class="img-fluid rounded shadow" alt="">
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- About End -->

        <!-- Start products -->
        <section class="section bg-light p-0 mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title fw-semibold mb-4">منتجاتنا</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="tiny-four-item direction">
                            @foreach ($products as $product)
                                <div class="tiny-slide">
                                    <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                        <div class="card-img position-relative">
                                            <img src="{{asset($product->photo)}}" class="img-fluid" style="width:100%; height:220px" alt="">
                                            <div class="card-overlay"></div>
            
                                            <div class="pop-icon">
                                                <a href="{{$product->photo}}" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                            </div>
                                        </div>
                                        <div class="content pt-3">
                                            <a href="javascript:void(0);" class="text-dark h4 mb-0 d-block title"> {{$product->title}}</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            @endforeach
        
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="m-auto text-center mt-5">
                    <a class="btn btn-primary m-auto" href="{{url('http://ceramicaremas.com/index.php/ar')}}" target="_blank"> عرض المزيد</a>
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start news-->
        <section class="section direction">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title fw-semibold mt-2 mb-3">أحدث الأخبار</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    @foreach ($all_news as $news)
                        <div class="col-lg-4 col-md-6 mt-4 pt-2">
                            <div class="card blog blog-primary shadow rounded overflow-hidden">
                                <div class="image position-relative overflow-hidden">
                                    <img src="{{asset($news->photo)}}" class="img-fluid" alt="">
                                </div>

                                <div class="card-body content">
                                    <a href="#" class="h5 title text-dark d-block mb-0">{{$news->title}}</a>
                                    <p class="text-muted mt-2 mb-2">{{$news->description}} </p>
                                    <a href="{{route('news.details' , $news->id)}}" class="link text-dark">اقرأ المزيد <i class="uil uil-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                    @endforeach
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <div class="modal fade bd-example-modal-lg theme-modal direction" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="news-latter">
                    <div class="modal-bg">
                      <div class="newslatter-main">
                        <div class="offer-content">
                        <div>
                          <button type="button" class="btn-close close-audio" data-bs-dismiss="modal" aria-label="Close"></button>
                          <h2>سوره يس</h2>
                          {{-- <audio id="audio1" src="{{asset('frontend/assets/media/1.mp3')}}" autoplay controls loop></audio> --}}
                          <audio id="audio1" controls loop >
                                <source  src="{{asset('frontend/assets/media/1.mp3')}}" type="audio/mpeg">
                          </audio>
                        </div>
                      </div>
                      <div class="imd-wrraper m-auto">
                          <img src="{{asset('frontend/assets/images/photo.jpg')}}" style="height:700px !important; width:100%;"  alt="newsletterimg" class="img-fluid bg-img">
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
</main>
@endsection
@section('script')
    <script>
        "use strict"
        $(window).on('load',function(){
            $('#exampleModal').modal('show');
            document.getElementById("audio1").play(); 
        })
        $(document).on('click',function(){
            document.getElementById("audio1").pause();
        })
    </script>
@endsection

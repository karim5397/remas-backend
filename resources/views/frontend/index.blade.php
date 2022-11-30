@extends('frontend.layouts.master')
@section('content')
<main>

         <!-- Hero Start -->
        <section class="home-slider position-relative p-0 mb-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="bg-home d-flex align-items-center" style="background: url('{{asset('frontend/assets/images/bg/banner1.jpg')}}') top; background-size: cover;">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="position-middle-bottom">
                                    <div class="title-heading my-4">
                                        <h4 class="display-3 fw-bold text-white title-dark mb-3">تشكيله رائعه من المنتجات</h4>
                                    </div>
                                </div>
                             
                            </div><!--end container-->
                        </div><!--end slide-->
                    </div>

                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="bg-home d-flex align-items-center" style="background: url('{{asset('frontend/assets/images/bg/banner2.jpg')}}') top; background-size: cover;">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="position-middle-bottom">
                                    <div class="title-heading my-4">
                                        <h4 class="display-3 fw-bold text-white title-dark mb-3">تشكيله رائعه من المنتجات</h4>
                                    </div>
                                </div>
                            </div><!--end container-->
                        </div><!--end slide-->
                    </div>

                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="bg-home d-flex align-items-center" style="background: url('{{asset('frontend/assets/images/bg/banner7.jpg')}}') top; background-size: cover;">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="position-middle-bottom">
                                    <div class="title-heading my-4">
                                        <h4 class="display-3 fw-bold text-white title-dark mb-3">تشكيله رائعه من المنتجات</h4>
                                    </div>
                                </div>
                            </div><!--end container-->
                        </div><!--end slide-->
                    </div>

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
                            <p>
                                قم بتحسين نمط حياة عملائنا وتزويدهم بتجربة معيشية أفضل داخل منازلهم من خلال تزويدهم بمنتجات عالية الجودة بتصاميم إبداعية وجذابة من الناحية الجمالية تناسب كل الأذواق التي يتم تقديمها بطريقة أخلاقية وصديقة للبيئة.
                                قدم لوكلائنا سعر منتج تنافسي مع تصميمات فريدة تميزنا عن المنافسة.
                            </p>
                            <p>
                                أن نصبح أحد العشرة الأوائل الأكثر شهرة واحترامًا في صناعة بلاط السيراميك. للتوسع عالميًا والحفاظ على الاعتراف القوي بالعلامة التجارية والحضور في سوق بلاط السيراميك من خلال الاستمرار في تزويد العملاء بأعلى جودة من البلاط مع مجموعة متنوعة من التصميمات المبتكرة.
                            </p>  
                            <a href="#" class="btn btn-primary" style="border:none !important;">اقراء المزيد</a>              
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-6">
                        <img src="{{asset('frontend/assets/images/bg/banner11.jpg')}}" class="img-fluid rounded shadow" alt="">
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
                            <div class="tiny-slide">
                                <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                    <div class="card-img position-relative">
                                        <img src="{{asset('frontend/assets/images/products/product1.jpg')}}" class="img-fluid" style="width:100%; height:220px" alt="">
                                        <div class="card-overlay"></div>
        
                                        <div class="pop-icon">
                                            <a href="images/products/product1.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                        </div>
                                    </div>
                                    <div class="content pt-3">
                                        <a href="#" class="text-dark h4 mb-0 d-block title"> منتج سيراميك 1</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                    <div class="card-img position-relative">
                                        <img src="{{asset('frontend/assets/images/products/product2.jpg')}}" class="img-fluid" style="width:100%; height:220px" alt="">
                                        <div class="card-overlay"></div>
        
                                        <div class="pop-icon">
                                            <a href="images/products/product2.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                        </div>
                                    </div>
                                    <div class="content pt-3">
                                        <a href="#" class="text-dark h4 mb-0 d-block title">منتج سيراميك 2</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                    <div class="card-img position-relative">
                                        <img src="{{asset('frontend/assets/images/products/product3.png')}}" class="img-fluid" style="width:100%; height:220px" alt="">
                                        <div class="card-overlay"></div>
        
                                        <div class="pop-icon">
                                            <a href="images/products/product3.png" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                        </div>
                                    </div>
                                    <div class="content pt-3">
                                        <a href="#" class="text-dark h4 mb-0 d-block title">منتج سيراميك 3</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                    <div class="card-img position-relative">
                                        <img src="{{asset('frontend/assets/images/products/product4.jpg')}}" class="img-fluid" style="width:100%; height:220px" alt="">
                                        <div class="card-overlay"></div>
        
                                        <div class="pop-icon">
                                            <a href="images/products/product4.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                        </div>
                                    </div>
                                    <div class="content pt-3">
                                        <a href="#" class="text-dark h4 mb-0 d-block title">منتج سيراميك 4</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                    <div class="card-img position-relative">
                                        <img src="{{asset('frontend/assets/images/products/product5.jpg')}}" class="img-fluid" style="width:100%; height:220px" alt="">
                                        <div class="card-overlay"></div>
        
                                        <div class="pop-icon">
                                            <a href="images/products/product5.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                        </div>
                                    </div>
                                    <div class="content pt-3">
                                        <a href="#" class="text-dark h4 mb-0 d-block title">منتج سيراميك 5</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                    <div class="card-img position-relative">
                                        <img src="{{asset('frontend/assets/images/products/product6.jpg')}}" class="img-fluid" style="width:100%; height:220px" alt="">
                                        <div class="card-overlay"></div>
        
                                        <div class="pop-icon">
                                            <a href="images/products/product6.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                        </div>
                                    </div>
                                    <div class="content pt-3">
                                        <a href="#" class="text-dark h4 mb-0 d-block title">منتج سيراميك 6</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                    <div class="card-img position-relative">
                                        <img src="{{asset('frontend/assets/images/products/product7.jpg')}}" class="img-fluid" style="width:100%; height:220px" alt="">
                                        <div class="card-overlay"></div>
        
                                        <div class="pop-icon">
                                            <a href="images/products/product7.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                        </div>
                                    </div>
                                    <div class="content pt-3">
                                        <a href="#" class="text-dark h4 mb-0 d-block title">منتج سيراميك 7</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                    <div class="card-img position-relative">
                                        <img src="{{asset('frontend/assets/images/products/product8.jpg')}}" class="img-fluid" style="width:100%; height:220px" alt="">
                                        <div class="card-overlay"></div>
        
                                        <div class="pop-icon">
                                            <a href="images/products/product8.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                        </div>
                                    </div>
                                    <div class="content pt-3">
                                        <a href="#" class="text-dark h4 mb-0 d-block title">منتج سيراميك 8</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="card portfolio portfolio-classic portfolio-primary m-2 rounded overflow-hidden">
                                    <div class="card-img position-relative">
                                        <img src="{{asset('frontend/assets/images/products/product9.jpg')}}" class="img-fluid" style="width:100%; height:220px" alt="">
                                        <div class="card-overlay"></div>
        
                                        <div class="pop-icon">
                                            <a href="images/products/product9.jpg" class="btn btn-pills btn-icon lightbox"><i class="uil uil-camera"></i></a>
                                        </div>
                                    </div>
                                    <div class="content pt-3">
                                        <a href="#" class="text-dark h4 mb-0 d-block title">منتج سيراميك 9</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="m-auto text-center mt-5">
                    <a class="btn btn-primary m-auto" href="#"> عرض المزيد</a>
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
                            <h4 class="title fw-semibold mt-2 mb-3">احدث الاخبار</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog blog-primary shadow rounded overflow-hidden">
                            <div class="image position-relative overflow-hidden">
                                <img src="{{asset('frontend/assets/images/products/product1.jpg')}}" class="img-fluid" alt="">
                            </div>

                            <div class="card-body content">
                                <a href="#" class="h5 title text-dark d-block mb-0">نتائج أعمال الربع الثالث من عام ٢٠٢٢</a>
                                <p class="text-muted mt-2 mb-2">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها</p>
                                <a href="#" class="link text-dark">اقراء المزيد <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog blog-primary shadow rounded overflow-hidden">
                           
                            <div class="image position-relative overflow-hidden">
                                <img src="{{asset('frontend/assets/images/products/product2.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body content">
                                <a href="#" class="h5 title text-dark d-block mb-0">نتائج أعمال الربع الثالث من عام ٢٠٢٢</a>
                                <p class="text-muted mt-2 mb-2">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها</p>
                                <a href="#" class="link text-dark">اقراء المزيد <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog blog-primary shadow rounded overflow-hidden">
                            
                            <div class="image position-relative overflow-hidden">
                                <img src="{{asset('frontend/assets/images/products/product5.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body content">
                                <a href="#" class="h5 title text-dark d-block mb-0">نتائج أعمال الربع الثالث من عام ٢٠٢٢</a>
                                <p class="text-muted mt-2 mb-2">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها</p>
                                <a href="#" class="link text-dark">اقراء المزيد <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
</main>
@endsection

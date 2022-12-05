@extends('frontend.layouts.master')
@section('content')
      <!-- Hero Start -->
      <section class="bg-half-170 d-table w-100" style="background-image: url('{{asset('frontend/assets/images/bg/banner5.jpg')}}'); background-size: cover;">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
            <div class="position-middle-bottom">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 page-heading text-white title-dark"> طلبات و استفسارات</h5>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="section pb-0 mb-5">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="section-title mb-5 pb-2 text-center">
                        <h4 class="title mb-3">تواصل معانا </h4>
                    </div>
                    <div class="custom-form">
                        <form method="post" action="{{route('message')}}" class="direction">
                            @csrf
                            <p id="error-msg" class="mb-0"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">الاسم <span class="text-danger">*</span></label>
                                        <input name="name" id="name" type="text" class="form-control">
                                        @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">البريد الالكترونى <span class="text-danger">*</span></label>
                                        <input name="email" id="email" type="email" class="form-control">
                                        @error('email') <p class="text-danger">{{$message}}</p> @enderror

                                    </div> 
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">الهاتف <span class="text-danger">*</span></label>
                                        <input name="phone" id="phone" type="text" class="form-control">
                                        @error('phone') <p class="text-danger">{{$message}}</p> @enderror

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">اسم الشركه</label>
                                        <input name="company_name" id="name" type="text" class="form-control">
                                        @error('company_name') <p class="text-danger">{{$message}}</p> @enderror

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">الموضوع</label>
                                        <input name="subject" id="subject" class="form-control" >
                                        @error('subject') <p class="text-danger">{{$message}}</p> @enderror

                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">الرساله <span class="text-danger">*</span></label>
                                        <textarea name="message" id="comments" rows="4" class="form-control"></textarea>
                                        @error('message') <p class="text-danger">{{$message}}</p> @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" id="submit" name="send" class="btn btn-primary" style="border:none !important;">ارسال الرساله</button>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div><!--end custom-form-->
                </div><!--end col-->
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="img-fluid">
                        <img src="{{asset('frontend/assets/images/call.jpg')}}" style="max-width: 100%; height:700px; border-radius: 10px;" alt="">
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
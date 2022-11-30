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
                            <h2>AAW Downloads</h2>
                            <ul>
                                <li><a href="{{route('home')}}">home <i class="flaticon-right"></i> </a></li>
                                <li>AAW Downloads</li>
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
        <section class="team-man-section team-one-section my-5">
            <div class="container">
                <div class="table-responsive mt-5 p-5">
                    <table class="table table-hover table-striped table-bordered ">
                        <thead>
                            <tr>
                                <th scope="col">File Name</th>
                                <th class="text-center"  style="width: auto !important">Download</th>
                              </tr>
                        </thead>
                        <tbody>
                            @if (count($downloads) > 0)
                                @foreach ($downloads as $download)
                                    <tr>
                                        <td>{{$download->title}}</td>
                                        <td class="text-center" style="width: 10%;"><a href="{{route('file.download',$download->id)}}" class="btn btn-primary"><i class="fa fa-download"></i></a></i></td>
                                    </tr>
                                @endforeach
                            @else
                                    <tr>
                                        <td colspan="2"><p class="text-danger text-center" style="font-size: 20px;">No Files To Download</p></td>
                                    </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </section>
        <!-- End -->


        <!-- Subscribe -->
        <div class="submit-section">
            <form id="contactForm" novalidate="true">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>name</label>
                                <input type="text" class="form-control" required="" data-error="Please enter your name here" placeholder="Enter Your  Name">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>Enter Address</label>
                                <input type="email" class="form-control" required="" data-error="Please enter your email" placeholder="Enter Your Email Address">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="text-center">
                                <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">
                                    subscribe
                                    <i class="flaticon-right-arrow"></i>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
@endsection

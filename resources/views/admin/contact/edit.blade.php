@extends('admin.layout.admin_master')
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">

        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Edit Contact-us</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Contact-us Management</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Edit Contact-us</li>

                </ul>
            </div>
        </div>
        <!--end::Container-->

    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <div class="card">
                <!-- error  -->
                       @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li >{{$error}}</li>
                                    @endforeach

                                </ul>
                            </div>
                        @endif
               <!-- error  -->
                <div class="card-body py-4">

                    <div class="form-group">
                        <form action="{{route('contact.update',$contact->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Head Phone</label>
                                    <input type="text" class="form-control my-3" name="head_phone" value="{{$contact->head_phone}}">
                                    @error('head_phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Head Email</label>
                                    <input type="email" class="form-control my-3" name="head_email" value="{{$contact->head_email}}">
                                    @error('head_email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 my-3">
                                    <label class="form-label">Head Address</label>
                                    <input type="text" name="head_address" class=" form-control my-3" value="{{$contact->head_address}}">
                                    @error('head_address')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Head Opening Time</label>
                                    <input type="text" class="form-control my-3" name="head_openinig_time" value="{{$contact->head_openinig_time}}">
                                    @error('head_openinig_time')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Branch Phone</label>
                                    <input type="text" class="form-control my-3" name="branch_phone" value="{{$contact->branch_phone}}">
                                    @error('branch_phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Branch Email</label>
                                    <input type="email" class="form-control my-3" name="branch_email" value="{{$contact->branch_email}}">
                                    @error('branch_email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 my-3">
                                    <label class="form-label">Branch Address</label>
                                    <input type="text" name="branch_address" class="form-control my-3" value="{{$contact->branch_address}}">
                                    @error('branch_address')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Branch Opening Time</label>
                                    <input type="text" class="form-control my-3" name="branch_opening_time" value="{{$contact->branch_opening_time}}">
                                    @error('branch_opening_time')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-success w-100">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
@endsection
@section('script')

@endsection

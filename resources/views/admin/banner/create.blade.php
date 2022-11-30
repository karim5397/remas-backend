@extends('admin.layout.admin_master')
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">

        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Add Banner</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Banners Management</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Add Banner</li>
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
                        <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control my-3" name="title" value="{{old('title')}}">
                                    @error('title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Typed Word</label>
                                    <input type="text" class="form-control my-3" name="typed_word" value="{{old('typed_word')}}">
                                    @error('typed_word')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Status</label>
                                    <select class="form-control show-tick my-3" name="status">
                                        <option value="">-- Status --</option>
                                        <option value="active" {{old('status') == 'active' ? 'selected' : ''}}>Active</option>
                                        <option value="inactive" {{old('status') == 'inactive' ? 'selected' : ''}}>Inactive</option>
                                    </select>
                                    @error('status')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control tinymce-editor my-3" name="description">{{old('description')}}</textarea>
                                    @error('description')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Photo</label>
                                    <input type="file" class="form-control my-3" name="photo" value="{{old('photo')}}">
                                    @error('photo')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-success w-100">Create</button>
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



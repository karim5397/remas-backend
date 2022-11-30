@extends('admin.layout.admin_master')
@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">

        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Add Service</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Services Management</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Add Service</li>
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
                    @include('admin.layout.notification')

                    <div class="form-group">
                        <form action="{{route('setting.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf



                            <div class="row ">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Page Title </label>
                                        <input type="text" class="form-control"  name="page_title" value="{{$setting->page_title}}">
                                        @error('page_title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Auth </label>
                                        <input type="text" class="form-control"  name="meta_auth" value="{{$setting->meta_auth}}">
                                        @error('meta_auth')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Title </label>
                                        <input type="text" class="form-control"  name="meta_title" value="{{$setting->meta_title}}">
                                        @error('meta_title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Description</label>
                                        <textarea name="meta_description" class="form-control tinymce-editor" >{{$setting->meta_description}}</textarea>
                                        @error('meta_description')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-12 mt-4">
                                    <div class="form-group">
                                        <label class="form-label">Facebook URL</label>
                                        <input type="text" class="form-control"  name="facebook_url" value="{{$setting->facebook_url}}">
                                        @error('facebook_url')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 mt-4">
                                    <div class="form-group">
                                        <label class="form-label">Linkedin URL</label>
                                        <input type="text" class="form-control"  name="linkedin_url" value="{{$setting->linkedin_url}}">
                                        @error('linkedin_url')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 my-3">
                                    <label class="form-label">Logo Photo</label>
                                    <input type="file" class="form-control my-3" name="logo" value="{{$setting->logo}}" >
                                    <input type="hidden" class="form-control my-3" name="old_logo" value="{{$setting->logo}}">
                                    @error('logo')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 my-3">
                                    <label class="form-label">Favicon Photo</label>
                                    <input type="file" class="form-control my-3" name="favicon" value="{{$setting->favicon}}" >
                                    <input type="hidden" class="form-control my-3" name="old_favicon" value="{{$setting->favicon}}">
                                    @error('favicon')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col-md-6 m-auto">

                                    <img src="{{asset($setting->logo)}}" alt="" title="{{$setting->logo}}" class="m-2" style="width: 100px; height:100px; border:2px solid gray;">
                                </div>

                                <div class="col-md-6 m-auto">

                                    <img src="{{asset($setting->favicon)}}" alt="" title="{{$setting->favicon}}" class="m-2" style="width: 100px; height:100px; border:2px solid gray;">
                                </div>
                            </div>
                            <div class="row pt-5 mt-5">
                                <div class="col-12 pb-4">
                                    <h3>News Page SEO Tags*</h3>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Meta Title</label>
                                    <input type="text" class="form-control my-3" name="meta_title" value="{{$setting->news_meta_title}}">
                                    @error('meta_title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Meta Auth</label>
                                    <input type="text" class="form-control my-3" name="meta_auth" value="{{$setting->news_meta_auth}}">
                                    @error('meta_auth')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <label class="form-label">Page Title</label>
                                    <input type="text" class="form-control my-3" name="page_title" value="{{$setting->news_page_title}}">
                                    @error('page_title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <label class="form-label">Meta Description</label>
                                    <textarea class="form-control tinymce-editor my-3" name="meta_description">{{$setting->news_meta_description}}</textarea>
                                    @error('meta_description')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row pt-5 mt-5">
                                <div class="col-12 pb-4">
                                    <h3>Projects Page SEO Tags*</h3>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Meta Title</label>
                                    <input type="text" class="form-control my-3" name="meta_title" value="{{$setting->projects_meta_title}}">
                                    @error('meta_title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Meta Auth</label>
                                    <input type="text" class="form-control my-3" name="meta_auth" value="{{$setting->projects_meta_auth}}">
                                    @error('meta_auth')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <label class="form-label">Page Title</label>
                                    <input type="text" class="form-control my-3" name="page_title" value="{{$setting->projects_page_title}}">
                                    @error('page_title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <label class="form-label">Meta Description</label>
                                    <textarea class="form-control tinymce-editor my-3" name="meta_description">{{$setting->projects_meta_description}}</textarea>
                                    @error('meta_description')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row pt-5 mt-5">
                                <div class="col-12 pb-4">
                                    <h3>Videos SEO Tags*</h3>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Meta Title</label>
                                    <input type="text" class="form-control my-3" name="meta_title" value="{{$setting->videos_meta_title}}">
                                    @error('meta_title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Meta Auth</label>
                                    <input type="text" class="form-control my-3" name="meta_auth" value="{{$setting->videos_meta_auth}}">
                                    @error('meta_auth')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <label class="form-label">Page Title</label>
                                    <input type="text" class="form-control my-3" name="page_title" value="{{$setting->videos_page_title}}">
                                    @error('page_title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <label class="form-label">Meta Description</label>
                                    <textarea class="form-control tinymce-editor my-3" name="meta_description">{{$setting->videos_meta_description}}</textarea>
                                    @error('meta_description')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-12 mt-5 pt-5">
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

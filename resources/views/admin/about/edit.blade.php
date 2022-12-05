@extends('admin.layout.admin_master')
@section('content')

<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item " aria-current="page">About-Us</li>
                <li class="breadcrumb-item active" aria-current="page">Edit About-Us</li>
            </ol>
        </nav>
        <div class="intro-x dropdown w-8 h-8">
            <div class="w-8 h-8 rounded-full overflow-hidden shadow-lg  zoom-in text-center">
                <a href="{{route('user.logout')}}" title="Logout"><i class="fa-solid fa-right-from-bracket mt-2"></i></a>
            </div>
        </div>
    </div>
    <!-- END: Top Bar -->
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Edit About-Us
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{URL::previous()}}" class="btn btn-primary shadow-md mr-2"><i class="fa fa-arrow-right mr-2"></i> Go Back</a>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Validation -->
            <div class="intro-y box">
                <div  class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Validation Form -->
                        <form action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-12">
                                        <div class="input-form">
                                            <label  class="form-label w-full flex flex-col sm:flex-row">About Title * </label>
                                            <input type="text" class="form-control" name="title"  value="{{$about->title}}" required>
                                            @error('title')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <div class="input-form">
                                            <label  class="form-label w-full flex flex-col sm:flex-row">About Description * </label>
                                            <textarea  class="form-control tinymce-editor" name="description">{{$about->description}}</textarea>
                                            @error('description')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <div class="input-form">
                                            <label  class="form-label w-full flex flex-col sm:flex-row">About Mission * </label>
                                            <textarea  class="form-control tinymce-editor" name="mission">{{$about->mission}}</textarea>
                                            @error('mission')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <div class="input-form">
                                            <label  class="form-label w-full flex flex-col sm:flex-row">About Vision * </label>
                                            <textarea  class="form-control tinymce-editor" name="vision">{{$about->vision}}</textarea>
                                            @error('vision')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <div class="input-form mt-3 has-success">
                                            <label  class="form-label w-full flex flex-col sm:flex-row"> Photo * </label>
                                            <input type="hidden" class="form-control" name="old_photo" value="{{$about->photo}}">
                                            <input class="form-control-file border w-full p-2" type="file" name="photo" value="{{$about->photo}}">
                                            @error('photo')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="m-auto mt-5">
            
                                            <img src="{{asset($about->photo)}}" alt="" title="{{$about->photo}}" class="m-2" style="width: 300px; height:300px; border:2px solid gray; border-radius: 10px;">
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <div class="input-form mt-3">
                                            <label  class="form-label w-full flex flex-col sm:flex-row">Photo Alt  </label>
                                            <input type="text" class="form-control" name="photo_alt"  value="{{$about->photo_alt}}" >
                                            @error('photo_alt')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                            </div>

                            <div class="grid grid-cols-12 mt-5">
                                <div class="col-span-12 px-2 my-5">
                                    <h2 class="text-lg font-medium mr-auto">
                                        About Page SEO Information
                                    </h2>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Page Title * </label>
                                        <input type="text" class="form-control" name="page_title"  value="{{$about->page_title}}" required>
                                        @error('page_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Meta Title * </label>
                                        <input type="text" class="form-control" name="meta_title"  value="{{$about->meta_title}}" required>
                                        @error('meta_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Meta Auth * </label>
                                        <input type="text" class="form-control" name="meta_auth"  value="{{$about->meta_auth}}" required>
                                        @error('meta_auth')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2 mt-2">
                                    <div class="input-form">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Meta Description * </label>
                                        <textarea  class="form-control tinymce-editor" name="meta_description">{{$about->meta_description}}</textarea>
                                        @error('meta_description')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-5 w-full px-2">Update </button>
                        </form>
                        <!-- END: Validation Form -->
                    </div>
                </div>
            </div>
            <!-- END: Form Validation -->
        </div>
    </div>
</div>
@endsection


@extends('admin.layout.admin_master')
@section('content')

<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item " aria-current="page">Settings</li>
                <li class="breadcrumb-item active" aria-current="page">Edit Setting</li>
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
            Edit Setting
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Validation -->
            <div class="intro-y box">
                <div  class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Validation Form -->
                        <form action="{{route('setting.update',$setting->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="grid grid-cols-12 mt-5">
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Page Title * </label>
                                        <input type="text" class="form-control" name="page_title"  value="{{$setting->page_title}}" required>
                                        @error('page_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Meta Title * </label>
                                        <input type="text" class="form-control" name="meta_title"  value="{{$setting->meta_title}}" required>
                                        @error('meta_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Meta Auth * </label>
                                        <input type="text" class="form-control" name="meta_auth"  value="{{$setting->meta_auth}}" required>
                                        @error('meta_auth')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2 mt-2">
                                    <div class="input-form">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Meta Description * </label>
                                        <textarea  class="form-control tinymce-editor" name="meta_description">{{$setting->meta_description}}</textarea>
                                        @error('meta_description')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="col-span-12 md:col-span-6 my-5 px-2">
                                    <div class="input-form mt-3 has-success ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Logo Photo * </label>
                                        <input type="hidden" class="form-control" name="old_logo" value="{{$setting->logo}}">
                                        <input class="form-control-file border w-full p-2" type="file" name="logo" value="{{$setting->logo}}">
                                        @error('logo')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="m-auto mt-5">
                                        
                                        <img src="{{asset($setting->logo)}}" alt="" title="{{$setting->logo}}" class="m-2" style="width: 100px; height:100px; border:2px solid gray; border-radius: 10px;">
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 my-5 px-2">
                                    <div class="input-form mt-3 has-success">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Favicon Photo * </label>
                                        <input type="hidden" class="form-control" name="old_favicon" value="{{$setting->favicon}}">
                                        <input class="form-control-file border w-full p-2" type="file" name="favicon" value="{{$setting->favicon}}">
                                        @error('favicon')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="m-auto mt-5">
                                        
                                        <img src="{{asset($setting->favicon)}}" alt="" title="{{$setting->favicon}}" class="m-2" style="width: 100px; height:100px; border:2px solid gray; border-radius: 10px;">
                                    </div>
                                </div>

                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Facebook URL </label>
                                        <input type="text" class="form-control" name="facebook_url"  value="{{$setting->facebook_url}}" required>
                                        @error('facebook_url')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Instagram Url </label>
                                        <input type="text" class="form-control" name="instagram_url"  value="{{$setting->instagram_url}}" required>
                                        @error('instagram_url')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>                                
                            </div>


                            <div class="grid grid-cols-12 mt-5">
                                <div class="col-span-12 px-2 my-5">
                                    <h2 class="text-lg font-medium mr-auto">
                                        News Page SEO
                                    </h2>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">News Page Title * </label>
                                        <input type="text" class="form-control" name="news_page_title"  value="{{$setting->news_page_title}}" required>
                                        @error('news_page_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">News Meta Title * </label>
                                        <input type="text" class="form-control" name="news_meta_title"  value="{{$setting->news_meta_title}}" required>
                                        @error('news_meta_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">News Meta Auth * </label>
                                        <input type="text" class="form-control" name="news_meta_auth"  value="{{$setting->news_meta_auth}}" required>
                                        @error('news_meta_auth')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2 mt-2">
                                    <div class="input-form">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">News Meta Description * </label>
                                        <textarea  class="form-control tinymce-editor" name="news_meta_description">{{$setting->news_meta_description}}</textarea>
                                        @error('news_meta_description')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-12 mt-5">
                                <div class="col-span-12 px-2 my-5">
                                    <h2 class="text-lg font-medium mr-auto">
                                        Contact-US Page SEO
                                    </h2>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Contact-US Page Title * </label>
                                        <input type="text" class="form-control" name="contact_page_title"  value="{{$setting->contact_page_title}}" required>
                                        @error('contact_page_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Contact-US Meta Title * </label>
                                        <input type="text" class="form-control" name="contact_meta_title"  value="{{$setting->contact_meta_title}}" required>
                                        @error('contact_meta_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Contact-US Meta Auth * </label>
                                        <input type="text" class="form-control" name="contact_meta_auth"  value="{{$setting->contact_meta_auth}}" required>
                                        @error('contact_meta_auth')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2 mt-2">
                                    <div class="input-form">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Contact-US Meta Description * </label>
                                        <textarea  class="form-control tinymce-editor" name="contact_meta_description">{{$setting->contact_meta_description}}</textarea>
                                        @error('contact_meta_description')
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


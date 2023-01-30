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
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="Midone - HTML Admin Template" src="{{asset(auth()->user()->photo)}}">
            </div>
            <div class="dropdown-menu w-56">
                <ul class="dropdown-content bg-primary text-white">
                    <li class="p-2">
                        <div class="font-medium">{{ucFirst(auth()->user()->first_name)}} {{ucFirst(auth()->user()->last_name)}}</div>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="{{route('user.edit',auth()->user()->id)}}" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i>Edit Profile </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="{{route('user.logout')}}" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                    </li>
                </ul>
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
                            
                            <div class="grid grid-cols-12 mt-5">
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Footer Email * </label>
                                        <input type="text" class="form-control" name="email"  value="{{$setting->email}}">
                                        @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Footer Phone * </label>
                                        <input type="text" class="form-control" name="phone"  value="{{$setting->phone}}">
                                        @error('phone')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Page Title * </label>
                                        <input type="text" class="form-control" name="page_title"  value="{{$setting->page_title}}">
                                        @error('page_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Meta Title * </label>
                                        <input type="text" class="form-control" name="meta_title"  value="{{$setting->meta_title}}">
                                        @error('meta_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Meta Auth * </label>
                                        <input type="text" class="form-control" name="meta_auth"  value="{{$setting->meta_auth}}">
                                        @error('meta_auth')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 mt-2">
                                    <div class="input-form">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Meta Description * </label>
                                        <textarea  class="form-control tinymce-editor" name="meta_description">{{$setting->meta_description}}</textarea>
                                        @error('meta_description')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Footer Description * </label>
                                        <textarea  class="form-control tinymce-editor" name="footer_desc">{{$setting->footer_desc}}</textarea>
                                        @error('footer_desc')
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
                                        <input type="text" class="form-control" name="facebook_url"  value="{{$setting->facebook_url}}">
                                        @error('facebook_url')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Instagram Url </label>
                                        <input type="text" class="form-control" name="instagram_url"  value="{{$setting->instagram_url}}">
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
                                        <input type="text" class="form-control" name="news_page_title"  value="{{$setting->news_page_title}}">
                                        @error('news_page_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">News Meta Title * </label>
                                        <input type="text" class="form-control" name="news_meta_title"  value="{{$setting->news_meta_title}}">
                                        @error('news_meta_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">News Meta Auth * </label>
                                        <input type="text" class="form-control" name="news_meta_auth"  value="{{$setting->news_meta_auth}}">
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
                                        Investment Page SEO
                                    </h2>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Investment Page Title * </label>
                                        <input type="text" class="form-control" name="investment_page_title"  value="{{$setting->investment_page_title}}">
                                        @error('investment_page_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Investment Meta Title * </label>
                                        <input type="text" class="form-control" name="investment_meta_title"  value="{{$setting->investment_meta_title}}">
                                        @error('investment_meta_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Investment Meta Auth * </label>
                                        <input type="text" class="form-control" name="investment_meta_auth"  value="{{$setting->investment_meta_auth}}">
                                        @error('investment_meta_auth')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2 mt-2">
                                    <div class="input-form">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Investment Meta Description * </label>
                                        <textarea  class="form-control tinymce-editor" name="investment_meta_description">{{$setting->investment_meta_description}}</textarea>
                                        @error('investment_meta_description')
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
                                        <input type="text" class="form-control" name="contact_page_title"  value="{{$setting->contact_page_title}}">
                                        @error('contact_page_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 px-2 my-5">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Contact-US Meta Title * </label>
                                        <input type="text" class="form-control" name="contact_meta_title"  value="{{$setting->contact_meta_title}}">
                                        @error('contact_meta_title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-12 px-2">
                                    <div class="input-form ">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Contact-US Meta Auth * </label>
                                        <input type="text" class="form-control" name="contact_meta_auth"  value="{{$setting->contact_meta_auth}}">
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


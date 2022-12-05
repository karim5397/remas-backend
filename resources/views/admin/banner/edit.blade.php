@extends('admin.layout.admin_master')
@section('content')

<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item " aria-current="page">Banners</li>
                <li class="breadcrumb-item active" aria-current="page">Edit Banner</li>
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
            Edit Banner
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
                        <form action="{{route('banner.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="input-form">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Banner Title * </label>
                                <input type="text" class="form-control" name="title"  value="{{$banner->title}}" required>
                                @error('title')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Banner Description </label>
                                <textarea  class="form-control tinymce-editor" name="description">{{$banner->description}}</textarea>
                                @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-3">
                                <label  class="form-label w-full flex flex-col sm:flex-row"> Status * </label>
                                <select class="form-select" name="status">
                                    <option value="">-- Status --</option>
                                    <option value="active" {{$banner->status == 'active' ? 'selected' : ''}}>Active</option>
                                    <option value="inactive" {{$banner->status == 'inactive' ? 'selected' : ''}}>Inactive</option>
                                </select>
                                @error('status')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                           
                            <div class="input-form mt-3 has-success">
                                <label  class="form-label w-full flex flex-col sm:flex-row"> Photo * </label>
                                <input type="hidden" class="form-control" name="old_photo" value="{{$banner->photo}}">
                                <input class="form-control-file border w-full p-2" type="file" name="photo" value="{{$banner->photo}}">
                                @error('photo')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="m-auto mt-5">

                                <img src="{{asset($banner->photo)}}" alt="" title="{{$banner->photo}}" class="m-2" style="width: 300px; height:300px; border:2px solid gray; border-radius: 10px;">
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-5">Update </button>
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


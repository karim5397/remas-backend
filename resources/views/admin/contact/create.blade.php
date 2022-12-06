@extends('admin.layout.admin_master')
@section('content')

<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item " aria-current="page">Contact-Us</li>
                <li class="breadcrumb-item active" aria-current="page">Add Contact-Us</li>
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
            Add contact
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
                        <form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-form">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Branch Title * </label>
                                <input type="text" class="form-control" name="title"  value="{{old('title')}}" required>
                                @error('title')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Branch Phone * </label>
                                <input type="text" class="form-control" name="phone"  value="{{old('phone')}}" required>
                                @error('phone')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Branch Email * </label>
                                <input type="text" class="form-control" name="email"  value="{{old('email')}}" required>
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Branch Map URL  </label>
                                <input type="url" class="form-control" name="map_url"  value="{{old('map_url')}}" >
                                @error('map_url')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Branch Address </label>
                                <textarea  class="form-control tinymce-editor" name="address">{{old('address')}}</textarea>
                                @error('address')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-3">
                                <label  class="form-label w-full flex flex-col sm:flex-row"> Status * </label>
                                <select class="form-select" name="status">
                                    <option value="">-- Status --</option>
                                    <option value="active" {{old('status') == 'active' ? 'selected' : ''}}>Active</option>
                                    <option value="inactive" {{old('status') == 'inactive' ? 'selected' : ''}}>Inactive</option>
                                </select>
                                @error('status')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                           
                           
                            
                            <button type="submit" class="btn btn-primary mt-5">Create </button>
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


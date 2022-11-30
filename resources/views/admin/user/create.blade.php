@extends('admin.layout.admin_master')
@section('content')

<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item " aria-current="page">Users</li>
                <li class="breadcrumb-item active" aria-current="page">Add User</li>
            </ol>
        </nav>
        <div class="intro-x dropdown w-8 h-8">
            <div class="w-8 h-8 rounded-full overflow-hidden shadow-lg  zoom-in text-center">
                <a href="{{route('logout')}}" title="Logout"><i class="fa-solid fa-right-from-bracket mt-2"></i></a>
            </div>
        </div>
    </div>
    <!-- END: Top Bar -->
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Add User
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
                        <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-form">
                                <label  class="form-label w-full flex flex-col sm:flex-row">First Name * <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 3 characters</span> </label>
                                <input type="text" class="form-control" name="first_name"  minlength="3"  value="{{old('first_name')}}" required>
                                @error('first_name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Last Name * <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 3 characters</span> </label>
                                <input type="text" class="form-control" name="last_name"  minlength="3"  value="{{old('last_name')}}" required>
                                @error('last_name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-3">
                                <label  class="form-label w-full flex flex-col sm:flex-row">User Email * <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, email address format</span> </label>
                                <input type="email"  class="form-control" name="email" value="{{old('email')}}" required="">
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-3">
                                <label  class="form-label w-full flex flex-col sm:flex-row"> Password * <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 8 characters</span> </label>
                                <input type="password"  class="form-control" name="password" value="{{old('password')}}" minlength="8" required="">
                                @error('password')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-3">
                                <label  class="form-label w-full flex flex-col sm:flex-row"> Status * <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, choose status</span> </label>
                                <select class="form-select" name="status">
                                    <option value="">-- Status --</option>
                                    <option value="active" {{old('status') == 'active' ? 'selected' : ''}}>Active</option>
                                    <option value="inactive" {{old('status') == 'inactive' ? 'selected' : ''}}>Inactive</option>
                                </select>
                                @error('status')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-3 has-success">
                                <label  class="form-label w-full flex flex-col sm:flex-row"> Photo * <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, select photo</span> </label>
                                <input class="form-control-file border w-full p-2" type="file" name="photo">
                                @error('photo')
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


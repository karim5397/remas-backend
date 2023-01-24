@extends('admin.layout.admin_master')
@section('content')
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        {{-- @include('admin.layout.notification') --}}
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item " aria-current="page">Investments</li>
                <li class="breadcrumb-item active" aria-current="page">Show Financail Reports</li>
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
            Show Financail Reports
        </h2>
      
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
     <div class="grid grid-cols-12 gap-6 mt-5">
         <div class="overflow-x-auto mt-4 col-span-12 sm:col-span-6 xl:col-span-8">
             <table class="table">
                 <thead class="table-dark">
                     <tr>
                         <th class="whitespace-nowrap">#</th>
                         <th class="whitespace-nowrap">Title</th>
                         <th class="whitespace-nowrap">Year</th>
                         <th class="whitespace-nowrap">Number Of Download</th>
                         <th class="whitespace-nowrap">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @if (count($finances) > 0)
                         @foreach ($finances as $finance)
                             <tr>
                                 <td>{{$finances->firstItem()+$loop->index}})</td>
                                 <td>{{$finance->title}}</td>
                                 <td>{{$finance->year}}</td>
                                 <td>{{$finance->count}}</td>
                                 <td>
                                     <div class="flex items-center">
                                         <form action="{{route('finance.destroy' , $finance->id)}}" method="POST" class="ml-2">
                                             @csrf
                                             @method('DELETE')
                                             <a href="" data-toggle="tooltip" title="{{__('Delete')}}" data-id="{{$finance->id}}" data-placement='button' class="dltBtn btn btn-danger"><i class="fa fa-trash"></i></a>
                                         </form>
                                     </div>
                                 </td>
                             </tr>
                         @endforeach
                         
                     @else
                         <tr class="text-center">
                             <td colspan="5"><p class="text-danger">No data found!</p></td>
                         </tr>
                     @endif
                 </tbody>
             </table>
             <div class="mt-3 p-3">
 
                 {{$finances->links('pagination::custom')}}
                 
             </div>
         </div>
         <div class="col-span-12 sm:col-span-12 xl:col-span-4 intro-y">
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-12">
                    <!-- BEGIN: Form Validation -->
                    <div class="intro-y box">
                        <div  class="p-5" style="border-radius:10px; border: 1px solid #000">
                            <div class="preview">
                                <h2 class="text-lg font-medium mr-auto pb-4">
                                    Add Financial
                                </h2>
                                <!-- BEGIN: Validation Form -->
                                <form action="{{route('finance.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-form">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Title * </label>
                                        <input type="text" class="form-control" name="title"  value="{{old('title')}}" required>
                                        @error('title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="input-form">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">Year * </label>
                                        <input type="text" class="form-control" name="year"  value="{{old('year')}}" required>
                                        @error('year')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                   
                                    <div class="input-form mt-3 has-success">
                                        <label  class="form-label w-full flex flex-col sm:flex-row"> File (Max:20 MB , Type:pdf) * </label>
                                        <input class="form-control-file border w-full p-2" type="file" name="file">
                                        @error('file')
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

     </div>
    </div>
    <!-- END: HTML Table Data -->
</div>
@endsection





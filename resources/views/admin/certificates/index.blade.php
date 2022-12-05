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
                <li class="breadcrumb-item " aria-current="page">Certificates</li>
                <li class="breadcrumb-item active" aria-current="page">Show Certificates</li>
            </ol>
        </nav>
        <div class="intro-x dropdown w-8 h-8">
            <div class="w-8 h-8 rounded-full overflow-hidden shadow-lg  zoom-in text-center">
                <a href="{{route('user.logout')}}" title="Logout"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </div>
    </div>
    <!-- END: Top Bar -->
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Show Certificates
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
                         <th class="whitespace-nowrap">Photo</th>
                         <th class="whitespace-nowrap">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @if (count($certificates) > 0)
                         @foreach ($certificates as $certificate)
                             <tr>
                                 <td>{{$certificates->firstItem()+$loop->index}})</td>
                                 <td><img src="{{asset($certificate->photo)}}" style="width:70px;" alt=""></td>
                                 <td>
                                     <div class="flex items-center">
                                         <form action="{{route('certificate.destroy' , $certificate->id)}}" method="POST" class="ml-2">
                                             @csrf
                                             @method('DELETE')
                                             <a href="" data-toggle="tooltip" title="{{__('Delete')}}" data-id="{{$certificate->id}}" data-placement='button' class="dltBtn btn btn-danger"><i class="fa fa-trash"></i></a>
                                         </form>
                                     </div>
                                 </td>
                             </tr>
                         @endforeach
                         
                     @else
                         <tr class="text-center">
                             <td colspan="3"><p class="text-danger">No data found!</p></td>
                         </tr>
                     @endif
                 </tbody>
             </table>
             <div class="mt-3 p-3">
 
                 {{$certificates->links('pagination::custom')}}
                 
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
                                    Add certificates
                                </h2>
                                <!-- BEGIN: Validation Form -->
                                <form action="{{route('certificate.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-form mt-3 has-success">
                                        <label  class="form-label w-full flex flex-col sm:flex-row"> Photo * </label>
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

     </div>
    </div>
    <!-- END: HTML Table Data -->
</div>
@endsection




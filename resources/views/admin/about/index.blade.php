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
                <li class="breadcrumb-item " aria-current="page">About-Us</li>
                <li class="breadcrumb-item active" aria-current="page">Show About-Us</li>
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
            Show About-Us
        </h2>
      
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
        <div class="overflow-x-auto mt-4">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">Title</th>
                        <th class="whitespace-nowrap">Description</th>
                        <th class="whitespace-nowrap">Photo</th>
                        <th class="whitespace-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($abouts) > 0)
                        @foreach ($abouts as $about)
                            <tr>
                                <td>{{$abouts->firstItem()+$loop->index}})</td>
                                <td>{{$about->title}}</td>
                                <td>{!!$about->description!!}</td>
                                <td><img src="{{asset($about->photo)}}" style="width:70px;" alt=""></td>
                                <td>
                                    <div class="flex items-center">
                                        <a href="{{route('about.edit',$about->id)}}" data-toggle="tooltip" title="{{__('Edit')}}"  data-placement='button' class="btn btn-secondary"><i class="fa fa-pen"></i></a>
                                        <form action="{{route('about.destroy' , $about->id)}}" method="POST" class="ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <a href="" data-toggle="tooltip" title="{{__('Delete')}}" data-id="{{$about->id}}" data-placement='button' class="dltBtn btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                    @else
                        <tr class="text-center">
                            <td colspan="6"><p class="text-danger">No data found!</p></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <!-- END: HTML Table Data -->
</div>
@endsection

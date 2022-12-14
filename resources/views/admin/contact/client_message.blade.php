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
                <li class="breadcrumb-item " aria-current="page">Client Messages</li>
                <li class="breadcrumb-item active" aria-current="page">Show Client Messages</li>
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
            Show Client Messages
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{route('export.message')}}" class="btn btn-primary shadow-md mr-2"><i class="fa fa-download mr-2"></i> Export</a>
        </div>
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
        <div class="overflow-x-auto mt-4">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">Name</th>
                        <th class="whitespace-nowrap">Email </th>
                        <th class="whitespace-nowrap">Company Name </th>
                        <th class="whitespace-nowrap">Phone </th>
                        <th class="whitespace-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($messages) > 0)
                        @foreach ($messages as $message)
                            <tr>
                                <td>{{$messages->firstItem()+$loop->index}})</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->company_name}}</td>
                                <td>{{$message->phone}}</td>
                            
                                <td>
                                    <div class="flex items-center">
                                        <a href="javascript:void(0);" data-tw-toggle="modal" data-tw-target="#show-message-{{$message->id}}"  title="{{__('Show')}}"  class="btn btn-secondary"><i class="fa fa-eye"></i></a>
                                        <form action="{{route('delete.message' , $message->id)}}" method="POST" class="ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <a href="" data-toggle="tooltip" title="{{__('Delete')}}" data-id="{{$message->id}}" data-placement='button' class="dltBtn btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                             <!-- BEGIN: Add Modal Content -->
                             <div id="show-message-{{$message->id}}" class="modal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-body p-10 text-center">
                                            <div class="preview">
                                                <h2 class="text-lg font-medium mr-auto pb-4">
                                                    Show Client Message
                                                </h2>

                                                <div class="grid grid-cols-12 gap-6 mt-5">
                                                    <div class="sm:col-span-12 md:col-span-6 xl:col-span-6">
                                                        <div class="show-content text-left">
                                                            <span><strong>Name : </strong> {{$message->name}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-12 md:col-span-6 xl:col-span-6">
                                                        <div class="show-content text-left">
                                                            <span><strong>Email : </strong> {{$message->email}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-12 md:col-span-6 xl:col-span-6">
                                                        <div class="show-content text-left">
                                                            <span><strong>Company Name : </strong> {{$message->company_name}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-12 md:col-span-6 xl:col-span-6">
                                                        <div class="show-content text-left">
                                                            <span><strong>Phone : </strong> {{$message->phone}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-12 md:col-span-6 xl:col-span-6">
                                                        <div class="show-content text-left">
                                                            <span><strong>Subject : </strong> {{$message->subject}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-12 md:col-span-6 xl:col-span-6">
                                                        <div class="show-content text-left">
                                                            <span><strong>Message : </strong>{{$message->message == '' ? 'no message send' : $message->message }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Add Modal Content -->
                        @endforeach
                        
                    @else
                        <tr class="text-center">
                            <td colspan="9"><p class="text-danger">No data found!</p></td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="mt-3 p-3">

                {{$messages->links('pagination::custom')}}
                
            </div>
        </div>
    </div>
    <!-- END: HTML Table Data -->
</div>
@endsection





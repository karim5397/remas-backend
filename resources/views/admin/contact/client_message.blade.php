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
            <div class="w-8 h-8 rounded-full overflow-hidden shadow-lg  zoom-in text-center">
                <a href="{{route('user.logout')}}" title="Logout"><i class="fa-solid fa-right-from-bracket"></i></a>
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
                        <th class="whitespace-nowrap">Subject</th>
                        <th class="whitespace-nowrap">Message</th>
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
                                <td>{{$message->subject}}</td>
                                @if ($message->message != null)
                                    <td>{{$message->message}}</td>
                                @else
                                    <td><p class="text-danger">no message</p></td>
                                @endif
                                <td>
                                    <div class="flex items-center">
                                        <form action="{{route('delete.message' , $message->id)}}" method="POST" class="ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <a href="" data-toggle="tooltip" title="{{__('Delete')}}" data-id="{{$message->id}}" data-placement='button' class="dltBtn btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
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





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
                <li class="breadcrumb-item " aria-current="page">Users</li>
                <li class="breadcrumb-item active" aria-current="page">Show Users</li>
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
            Show Users
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{route('user.create')}}" class="btn btn-primary shadow-md mr-2"><i class="fa fa-plus-circle mr-2"></i> Add User</a>
        </div>
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <form  class="xl:flex sm:mr-auto"  method="post" action="{{route('user.search')}}">
                @csrf

                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Status</label>
                    <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto" name="status">
                        <option value="" selected>-- status --</option>
                        <option value="active" {{session()->get('status') == 'active' ? 'selected' : ''}}>Active</option>
                        <option value="inactive" {{session()->get('status') == 'inactive' ? 'selected' : ''}}>Inactive</option>
                      
                    </select>
                </div>
                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Search</label>
                    <input  type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" name="search" value="{{session()->get('search')}}" placeholder="Search name,email">
                </div>
                <div class="mt-2 xl:mt-0">
                    <button id="tabulator-html-filter-go" type="submit" class="btn btn-primary w-full sm:w-16" >Go</button>
                    <a id="tabulator-html-filter-reset" href="{{route('user.index')}}" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1" >Reset</a>
                </div>
            </form>
        </div>
        <div class="overflow-x-auto mt-4">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">Photo</th>
                        <th class="whitespace-nowrap">User Name</th>
                        <th class="whitespace-nowrap">Email</th>
                        <th class="whitespace-nowrap">Status</th>
                        <th class="whitespace-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$users->firstItem()+$loop->index}} )</td>
                                <td><img src="@if($user->photo != null){{asset($user->photo)}} @else {{Helper::userDefaultImage()}} @endif" style="border-radius: 50%" width="70px" alt=""></td>
                                <td>{{$user->first_name}} {{$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="status">
                                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                                        <input id="status-btn" type="checkbox" name="toogle" value="{{$user->id}}" {{$user->status == 'active' ? 'checked' : ''}}  class="form-check-input mr-0 ml-3"  >
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <a href="{{route('user.edit',$user->id)}}" data-toggle="tooltip" title="{{__('Edit')}}"  data-placement='button' class="btn btn-secondary"><i class="fa fa-pen"></i></a>
                                        <form action="{{route('user.destroy' , $user->id)}}" method="POST" class="ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <a href="" data-toggle="tooltip" title="{{__('Delete')}}" data-id="{{$user->id}}" data-placement='button' class="dltBtn btn btn-danger"><i class="fa fa-trash"></i></a>
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
            <div class="mt-3 p-3">

                {{$users->links('pagination::custom')}}
                
            </div>
        </div>
    </div>
    <!-- END: HTML Table Data -->
</div>
@endsection



@section('script')
    {{-- change status --}}
<script>
    $('input[name=toogle]').change(function(){
        var mode = $(this).prop('checked');
        var id = $(this).val();
        $.ajax({
            url:"{{route('user.status')}}",
            type:'POST',
            data:{
                _token:'{{csrf_token()}}',
                mode:mode,
                id:id,
            },
            success:function(response){
                if(response.status){
                    swal("The status change successfully", {
                        icon: "success",
                        buttons:'ok'
                        });
                }else{
                    alert('please try again')
                }
            }
        })
    })
</script>
@endsection
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
                <li class="breadcrumb-item " aria-current="page">Contact-Us</li>
                <li class="breadcrumb-item active" aria-current="page">Show Contact-Us</li>
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
            Show Contact-Us
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{route('contact.create')}}" class="btn btn-primary shadow-md mr-2"><i class="fa fa-plus-circle mr-2"></i> Add Contact-Us</a>
        </div>
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        </div>
        <div class="overflow-x-auto mt-4">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">Title</th>
                        <th class="whitespace-nowrap">Phone</th>
                        <th class="whitespace-nowrap">Status</th>
                        <th class="whitespace-nowrap">Email</th>
                        <th class="whitespace-nowrap">Address</th>
                        <th class="whitespace-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($contacts) > 0)
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$contacts->firstItem()+$loop->index}})</td>
                                <td>{{$contact->title}}</td>
                                <td>{{$contact->phone}}</td>
                                <td class="status">
                                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                                        <input id="status-btn" type="checkbox" name="toogle" value="{{$contact->id}}" {{$contact->status == 'active' ? 'checked' : ''}}  class="form-check-input mr-0 ml-3"  >
                                    </div>
                                </td>
                                <td>{{$contact->email}}</td>
                                <td>{!!$contact->address!!}</td>
                                <td>
                                    <div class="flex items-center">
                                        <a href="{{route('contact.edit',$contact->id)}}" data-toggle="tooltip" title="{{__('Edit')}}"  data-placement='button' class="btn btn-secondary"><i class="fa fa-pen"></i></a>
                                        <form action="{{route('contact.destroy' , $contact->id)}}" method="POST" class="ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <a href="" data-toggle="tooltip" title="{{__('Delete')}}" data-id="{{$contact->id}}" data-placement='button' class="dltBtn btn btn-danger"><i class="fa fa-trash"></i></a>
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

                {{$contacts->links('pagination::custom')}}
                
            </div>
        </div>
    </div>
    <!-- END: HTML Table Data -->
</div>
@endsection




@section('script')
    {{-- change status --}}
<script>
    $('#status-btn').change(function(){
        var mode = $(this).prop('checked');
        var id = $(this).val();
        $.ajax({
            url:"{{route('contact.status')}}",
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
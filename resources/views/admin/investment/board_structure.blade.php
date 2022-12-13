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
                <li class="breadcrumb-item active" aria-current="page">Show Board Structure</li>
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
            Show Board Structure
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="javascript:;" class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#add-structures"><i class="fa fa-plus-circle mr-2"></i> Add structures</a>
        </div>
      
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
     <div class="grid grid-cols-12 gap-6 mt-5">
         <div class="overflow-x-auto mt-4 col-span-12 sm:col-span-6 xl:col-span-12">
             <table class="table">
                 <thead class="table-dark">
                     <tr>
                         <th class="whitespace-nowrap">#</th>
                         <th class="whitespace-nowrap">Name</th>
                         <th class="whitespace-nowrap">Company Name</th>
                         <th class="whitespace-nowrap">Position</th>
                         <th class="whitespace-nowrap">Type</th>
                         <th class="whitespace-nowrap">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @if (count($structures) > 0)
                         @foreach ($structures as $structure)
                             <tr>
                                 <td>{{$structures->firstItem()+$loop->index}})</td>
                                 <td>{{$structure->name}}</td>
                                 <td>{{$structure->company_name}}</td>
                                 <td>{{$structure->position}}</td>
                                 <td>{{$structure->type}}</td>
                                 <td>
                                     <div class="flex items-center">
                                        <a href="javascript:;"  title="{{__('Edit')}}"  data-placement='button' class="btn btn-secondary" data-tw-toggle="modal" data-tw-target="#edit-structures-{{$structure->id}}"><i class="fa fa-pen"></i></a>

                                         <form action="{{route('structure.destroy' , $structure->id)}}" method="POST" class="ml-2">
                                             @csrf
                                             @method('DELETE')
                                             <a href="" data-toggle="tooltip" title="{{__('Delete')}}" data-id="{{$structure->id}}" data-placement='button' class="dltBtn btn btn-danger"><i class="fa fa-trash"></i></a>
                                         </form>
                                     </div>
                                 </td>
                             </tr>
                              <!-- BEGIN: Edit Modal Content -->
      <div id="edit-structures-{{$structure->id}}" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body p-10 text-center">
                    <div class="preview">
                        <h2 class="text-lg font-medium mr-auto pb-4">
                            Edit Board Structure
                        </h2>
                        <!-- BEGIN: Validation Form -->
                        <form action="{{route('structure.update',$structure->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Name * </label>
                                <input type="text" class="form-control" name="name"  value="{{$structure->name}}" >
                                @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Company Name * </label>
                                <input type="text" class="form-control" name="company_name"  value="{{$structure->company_name}}" >
                                @error('company_name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Position * </label>
                                <input type="text" class="form-control" name="position"  value="{{$structure->position}}" >
                                @error('position')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Type * </label>
                                <select name="type" class="form-select" id="">
                                    <option disabled selected>-- Select type --</option>
                                    <option value="member" {{$structure->type == 'member' ? 'selected' : ''}}>Member</option>
                                    <option value="director" {{$structure->type == 'director' ? 'selected' : ''}}>Director</option>
                                </select>
                                @error('type')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                           
                            <button type="submit" class="btn btn-primary mt-5 w-full">Update </button>
                        </form>
                        <!-- END: Validation Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Edit Modal Content -->
                         @endforeach
                         
                     @else
                         <tr class="text-center">
                             <td colspan="7"><p class="text-danger">No data found!</p></td>
                         </tr>
                     @endif
                 </tbody>
             </table>
             <div class="mt-3 p-3">
 
                 {{$structures->links('pagination::custom')}}
                 
             </div>
         </div>
     </div>
    </div>
    <!-- END: HTML Table Data -->

     <!-- BEGIN: Add Modal Content -->
     <div id="add-structures" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body p-10 text-center">
                    <div class="preview">
                        <h2 class="text-lg font-medium mr-auto pb-4">
                            Add Board Structure
                        </h2>
                        <!-- BEGIN: Validation Form -->
                        <form action="{{route('structure.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Name * </label>
                                <input type="text" class="form-control" name="name"  value="{{old('name')}}" >
                                @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Company Name  </label>
                                <input type="text" class="form-control" name="company_name"  value="{{old('company_name')}}" >
                                @error('company_name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Position * </label>
                                <input type="text" class="form-control" name="position"  value="{{old('position')}}" >
                                @error('position')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Type * </label>
                                <select name="type" class="form-select" id="">
                                    <option disabled selected>-- Select type --</option>
                                    <option value="member" {{old('type') == 'member' ? 'selected' : ''}}>Member</option>
                                    <option value="director" {{old('type') == 'director' ? 'selected' : ''}}>Director</option>
                                </select>
                                @error('type')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            

                            <button type="submit" class="btn btn-primary mt-5 w-full">Create </button>
                        </form>
                        <!-- END: Validation Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Add Modal Content -->

     
</div>
@endsection





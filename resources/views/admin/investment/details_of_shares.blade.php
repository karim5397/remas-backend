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
                <li class="breadcrumb-item active" aria-current="page">Show Details Of Shares</li>
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
            Show Details Of Shares
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="javascript:;" class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#add-shares"><i class="fa fa-plus-circle mr-2"></i> Add Shares</a>
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
                         <th class="whitespace-nowrap">Instrument Type</th>
                         <th class="whitespace-nowrap">Par Value</th>
                         <th class="whitespace-nowrap">Issuances Details</th>
                         <th class="whitespace-nowrap">Number of Shares</th>
                         <th class="whitespace-nowrap">Financial Year</th>
                         <th class="whitespace-nowrap">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @if (count($shares) > 0)
                         @foreach ($shares as $share)
                             <tr>
                                 <td>{{$shares->firstItem()+$loop->index}})</td>
                                 <td>{{$share->instrument_type}}</td>
                                 <td>{{$share->par_value}}</td>
                                 <td>{{$share->issuances_details}}</td>
                                 <td>{{$share->number_shares}}</td>
                                 <td>{{$share->financial_year}}</td>
                                 <td>
                                     <div class="flex items-center">
                                        <a href="javascript:;"  title="{{__('Edit')}}"  data-placement='button' class="btn btn-secondary" data-tw-toggle="modal" data-tw-target="#edit-shares-{{$share->id}}"><i class="fa fa-pen"></i></a>

                                         <form action="{{route('share.destroy' , $share->id)}}" method="POST" class="ml-2">
                                             @csrf
                                             @method('DELETE')
                                             <a href="" data-toggle="tooltip" title="{{__('Delete')}}" data-id="{{$share->id}}" data-placement='button' class="dltBtn btn btn-danger"><i class="fa fa-trash"></i></a>
                                         </form>
                                     </div>
                                 </td>
                             </tr>
                              <!-- BEGIN: Edit Modal Content -->
      <div id="edit-shares-{{$share->id}}" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body p-10 text-center">
                    <div class="preview">
                        <h2 class="text-lg font-medium mr-auto pb-4">
                            Edit Details of Shares
                        </h2>
                        <!-- BEGIN: Validation Form -->
                        <form action="{{route('share.update',$share->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Instrument Type * </label>
                                <input type="text" class="form-control" name="instrument_type"  value="{{$share->instrument_type}}" required>
                                @error('instrument_type')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Par Value * </label>
                                <input type="text" class="form-control" name="par_value"  value="{{$share->par_value}}" required>
                                @error('par_value')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Issuances Details * </label>
                                <input type="text" class="form-control" name="issuances_details"  value="{{$share->issuances_details}}" required>
                                @error('issuances_details')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Number Shares * </label>
                                <input type="text" class="form-control" name="number_shares"  value="{{$share->number_shares}}" required>
                                @error('number_shares')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Financial Year * </label>
                                <input type="text" class="form-control" name="financial_year"  value="{{$share->financial_year}}" required>
                                @error('financial_year')
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
 
                 {{$shares->links('pagination::custom')}}
                 
             </div>
         </div>
     </div>
    </div>
    <!-- END: HTML Table Data -->

     <!-- BEGIN: Add Modal Content -->
     <div id="add-shares" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body p-10 text-center">
                    <div class="preview">
                        <h2 class="text-lg font-medium mr-auto pb-4">
                            Add Details of Shares
                        </h2>
                        <!-- BEGIN: Validation Form -->
                        <form action="{{route('share.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Instrument Type * </label>
                                <input type="text" class="form-control" name="instrument_type"  value="{{old('instrument_type')}}" required>
                                @error('instrument_type')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Par Value * </label>
                                <input type="text" class="form-control" name="par_value"  value="{{old('par_value')}}" required>
                                @error('par_value')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Issuances Details * </label>
                                <input type="text" class="form-control" name="issuances_details"  value="{{old('issuances_details')}}" required>
                                @error('issuances_details')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Number Shares * </label>
                                <input type="text" class="form-control" name="number_shares"  value="{{old('number_shares')}}" required>
                                @error('number_shares')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-form mt-5">
                                <label  class="form-label w-full flex flex-col sm:flex-row">Financial Year * </label>
                                <input type="text" class="form-control" name="financial_year"  value="{{old('financial_year')}}" required>
                                @error('financial_year')
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





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
            Show Details Of Shares
        </h2>
        
      
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
     <div class="grid grid-cols-12 gap-6 mt-5">
         <div class="overflow-x-auto mt-4 col-span-12 sm:col-span-6 xl:col-span-12">
             <table class="table">
                 <thead class="table-dark">
                     <tr>
                         <th class="whitespace-nowrap">Founding Date</th>
                         <th class="whitespace-nowrap">Followed Law</th>
                         <th class="whitespace-nowrap">Purpose</th>
                         <th class="whitespace-nowrap">Version Number</th>
                         <th class="whitespace-nowrap">Par Value</th>
                         <th class="whitespace-nowrap">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @if (count($shares) > 0)
                         @foreach ($shares as $share)
                             <tr>
                                 <td>{{$share->founding_date}}</td>
                                 <td>{{$share->followed_law}}</td>
                                 <td>{{$share->purpose}}</td>
                                 <td>{{$share->version_number}}</td>
                                 <td>{{$share->par_value}}</td>                                 <td>
                                     <div class="flex items-center">
                                        <a href="javascript:;"  title="{{__('Edit')}}"  data-placement='button' class="btn btn-secondary" data-tw-toggle="modal" data-tw-target="#edit-shares-{{$share->id}}"><i class="fa fa-pen"></i></a>
                                     </div>
                                 </td>
                             </tr>
                            <!-- BEGIN: Edit Modal Content -->
                                @include('admin.investment.edit_details_share')
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

  

     
</div>
@endsection
@section('script')
{{-- check input feild validation --}}
<script>
    let error='This field is required';
    $('#update').click(function(e){
           
            if($('input[name=founding_date]').val() == ''){
                $('.error-div-founding_date').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
                
            }
            if($('input[name=followed_law]').val() == ''){
                $('.error-div-followed_law').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
            }
            if($('input[name=purpose]').val() == ''){
                $('.error-div-purpose').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
            }
            if($('input[name=company_branches]').val() == ''){
                $('.error-div-company_branches').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
            }
            if($('input[name=stock_market_date]').val() == ''){
                $('.error-div-stock_market_date').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
            }
            if($('input[name=version_number]').val() == ''){
                $('.error-div-version_number').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
            }
            if($('input[name=par_value]').val() == ''){
                $('.error-div-par_value').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
            }
            if($('input[name=number_shares]').val() == ''){
                $('.error-div-number_shares').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
            }
            if($('input[name=issued_capital]').val() == ''){
                $('.error-div-issued_capital').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
            }
            if($('input[name=authorized_capital]').val() == ''){
                $('.error-div-authorized_capital').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
            }
            if($('input[name=financial_year]').val() == ''){
                $('.error-div-financial_year').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
            }
            if($('input[name=external_auditor]').val() == ''){
                $('.error-div-external_auditor').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
            }
            if($('input[name=vision_mission]').val() == ''){
                $('.error-div-vision_mission').html('<p class="text-danger">'+error+'</p>');
                e.preventDefault();
            }   

         

        })
   
</script>  
@endsection





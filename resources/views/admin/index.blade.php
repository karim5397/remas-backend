@extends('admin.layout.admin_master')
@section('content')

<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Application</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
        <!-- END: Breadcrumb -->
   
        <!-- BEGIN: Account Menu -->
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
        <!-- END: Account Menu -->
    </div>
    <!-- END: Top Bar -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            General Report
                        </h2>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i class="fa-regular fa-envelope fa-2x"></i>
                                        <span class="text-base text-slate-700 mt-1 px-2" style="font-size: 20px">Client Messages</span>
 
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{App\Models\Message::count()}}</div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i class="fas fa-user fa-2x"></i>
                                        <span class="text-base text-slate-700 mt-1 px-2" style="font-size: 20px">Total Users</span>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{App\Models\User::count()}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i class="fa-solid fa-chart-line fa-2x"></i>
                                        <span class="text-base text-slate-700 mt-1 px-2" style="font-size: 20px">Governance Reports</span>
                                    </div>
                                    <div class=" leading-8 mt-6">
                                        <p>Total Files = <strong>{{App\Models\Government::select('id')->count()}}</strong></p> 
                                        <p>Total User Download = <strong>{{App\Models\Government::where('count' , '>' ,0)->sum('count')}}</strong></p> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i class="fa-solid fa-chart-line fa-2x"></i>
                                        <span class="text-base text-slate-700 mt-1 px-2" style="font-size: 20px">Follow up Committee Reports</span>
                                    </div>
                                    <div class=" leading-8 mt-6">
                                        <p>Total Files = <strong>{{App\Models\FollowUpReport::select('id')->count()}}</strong></p> 
                                        <p>Total User Download = <strong>{{App\Models\FollowUpReport::where('count' , '>' ,0)->sum('count')}}</strong></p> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i class="fa-solid fa-chart-line fa-2x"></i>
                                        <span class="text-base text-slate-700 mt-1 px-2" style="font-size: 20px">Financial Reports</span>
                                    </div>
                                    <div class=" leading-8 mt-6">
                                        <p>Total Files = <strong>{{App\Models\Finance::select('id')->count()}}</strong></p> 
                                        <p>Total User Download = <strong>{{App\Models\Finance::where('count' , '>' ,0)->sum('count')}}</strong></p> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i class="fa-solid fa-chart-line fa-2x"></i>
                                        <span class="text-base text-slate-700 mt-1 px-2" style="font-size: 20px">Disclosure Reports</span> 
                                    </div>
                                    <div class=" leading-8 mt-6">
                                        <p>Total Files = <strong>{{App\Models\Disclosure::select('id')->count()}}</strong></p> 
                                        <p>Total User Download = <strong>{{App\Models\Disclosure::where('count' , '>' ,0)->sum('count')}}</strong></p> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i class="fa-solid fa-chart-line fa-2x"></i>
                                        <span class="text-base text-slate-700 mt-1 px-2" style="font-size: 20px">Board Of Director</span>  
                                    </div>
                                    <div class=" leading-8 mt-6">
                                        <p>Total Files = <strong>{{App\Models\Director::select('id')->count()}}</strong></p> 
                                        <p>Total User Download = <strong>{{App\Models\Director::where('count' , '>' ,0)->sum('count')}}</strong></p> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i class="fa-solid fa-chart-line fa-2x"></i>
                                        <span class="text-base text-slate-700 mt-1 px-2" style="font-size: 20px">Remedies</span>  
    
                                    </div>
                                    <div class=" leading-8 mt-6">
                                        <p>Total Files = <strong>{{App\Models\Remedies::select('id')->count()}}</strong></p> 
                                        <p>Total User Download = <strong>{{App\Models\Remedies::where('count' , '>' ,0)->sum('count')}}</strong></p> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i class="fa-solid fa-chart-line fa-2x"></i>
                                        <span class="text-base text-slate-700 mt-1 px-2" style="font-size: 20px">Assembly Decision</span>  
    
                                    </div>
                                    <div class=" leading-8 mt-6">
                                        <p>Total Files = <strong>{{App\Models\Decision::select('id')->count()}}</strong></p> 
                                        <p>Total User Download = <strong>{{App\Models\Decision::where('count' , '>' ,0)->sum('count')}}</strong></p> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- END: General Report -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
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
    </div>
</div>
@endsection


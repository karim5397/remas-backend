@extends('admin.layout.admin_master')
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">

        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Client Message</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Contact-us Management</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Client Message</li>
                </ul>
            </div>
        </div>
        <!--end::Container-->

    </div>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-title">
                        <a href="{{route('export.message')}}" class="btn btn-success">Export <i class="fa fa-download"></i></a>
                    </div>
                </div>
                <div class="card-body py-4">
                    @include('admin.layout.notification')
                    <table class="table align-middle table-hover  gy-5" >
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">

                                <th>Name</th>
                                <th>Email </th>
                                <th>Company Name </th>
                                <th>Position</th>
                                <th>Phone </th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <tbody class="text-gray-600 fw-bold">
                            @if (count($messages) > 0)
                                @foreach ($messages as $message )
                                    <!--begin::Table row-->
                                    <tr>
                                        <td>{{$message->name}}</td>
                                        <td>{{$message->email}}</td>
                                        <td>{{$message->company_name}}</td>
                                        <td>{{$message->position}}</td>
                                        <td>{{$message->phone}}</td>
                                        <td>{{$message->subject}}</td>
                                        @if ($message->message != null)
                                            <td>{{$message->message}}</td>
                                        @else
                                            <td><p class="text-danger">no message</p></td>
                                        @endif
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                <form action="{{route('delete.message' , $message->id)}}" method="POST" class="ml-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="" data-toggle="tooltip" title="{{__('Delete')}}" data-id="{{$message->id}}" data-placement='button' class="dltBtn btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>

                                    <!--end::Table row-->
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8"><p class="text-danger text-center" style="font-size: 25px">No data found!</p></td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{$messages->links('pagination::bootstrap-5')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Content-->
@endsection
@section('style')
<style>
    .toggle:not(.collapsible):not(.active) .toggle-on {
    display: block;
}
</style>
@endsection
@section('script')
{{-- <script>alert('kk')</script> --}}
{{-- delete button  --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.dltBtn').click(function (e) {
        var form=$(this).closest('form');
        var dataID=$(this).data('id');
        e.preventDefault();

        // sweet alert
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                    swal("Poof! Your data has been deleted!", {
                    icon: "success",
                    });
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        })

</script>


@endsection

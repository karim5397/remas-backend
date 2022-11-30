@extends('admin.layout.admin_master')
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">

        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">All Contact-us</h1>
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
                    <li class="breadcrumb-item text-dark">All Contact-us</li>
                </ul>
            </div>
        </div>
        <!--end::Container-->

    </div>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-contact-table-toolbar="base">
                            <!--begin::Add contact-->
                            <a  class="btn btn-primary"  href="{{route('contact.create')}}">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                               <i class="fa fa-plus-circle"></i>
                            </span>
                            <!--end::Svg Icon-->Add Contact-us</a>
                            <!--end::Add contact-->
                        </div>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <div class="card-body py-4">
                    @include('admin.layout.notification')
                    <table class="table align-middle table-hover  gy-5" >
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th>NO.</th>
                                <th>Head Phone</th>
                                <th>Head Email </th>
                                <th>Head Address </th>
                                <th>Head Openinig Time </th>
                                <th>Branch Phone </th>
                                <th>Branch Email</th>
                                <th>Branch Address</th>
                                <th>Branch Opening Time</th>
                                <th>Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <tbody class="text-gray-600 fw-bold">
                            @if (count($contacts) > 0)
                                @foreach ($contacts as $contact )
                                    <!--begin::Table row-->
                                    <tr>
                                        <td>{{$contacts->firstItem()+$loop->index}}</td>
                                        <td>{{$contact->head_phone}}</td>
                                        <td>{{$contact->head_email}}</td>
                                        <td>{!!$contact->head_address!!}</td>
                                        <td>{{$contact->head_openinig_time}}</td>
                                        <td>{{$contact->branch_phone}}</td>
                                        <td>{{$contact->branch_email}}</td>
                                        <td>{!!$contact->branch_address!!}</td>
                                        <td>{{$contact->branch_opening_time}}</td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{route('contact.edit',$contact->id)}}" data-toggle="tooltip" title="{{__('Edit')}}"  data-placement='button' class="btn btn-secondary"><i class="fa fa-pen"></i></a>
                                                <form action="{{route('contact.destroy' , $contact->id)}}" method="POST" class="ml-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="" data-toggle="tooltip" title="{{__('Delete')}}" data-id="{{$contact->id}}" data-placement='button' class="dltBtn btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>

                                    <!--end::Table row-->
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9"><p class="text-danger text-center" style="font-size: 25px">No data found!</p></td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{$contacts->links('pagination::bootstrap-5')}}
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

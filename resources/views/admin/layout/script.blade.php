  <!-- BEGIN: JS Assets-->
  <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
  <script src="{{asset('backend/assets/js/app.js')}}"></script>
  <script src="{{asset('backend/assets/js/jquery-3.6.0.min.js')}}"></script>
  <!-- END: JS Assets-->




@yield('script')


{{-- delet button  --}}
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
                        swal("Your data is safe");
                    }
                });
            })

</script>

{{-- change status --}}
<script>
    $('#status-btn').change(function(){
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
                    swal("تم تغير الحاله بنجاح", {
                        icon: "success",
                        buttons:'موافق'
                        });
                }else{
                    alert('please try again')
                }
            }
        })
    })



</script>
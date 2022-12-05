
  <!-- javascript -->
  <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/tiny-slider.js')}}"></script>
  <script src="{{asset('frontend/assets/js/tobii.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/feather.min.js')}}"></script>
  <!-- Main Js -->
  <script src="{{asset('frontend/assets/js/plugins.init.js')}}"></script>
  
  
  <!-- Jquery-3.2.1.Slim.Mim.JS -->
  
  <script src="{{asset('frontend/assets/js/jquery-3.2.1.slim.min.js')}}"></script>
  
  <!-- Owl.Carousel.Min.JS -->
  
  <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
  
  
  <script src="{{asset('frontend/assets/js/app.js')}}"></script>

<script src="{{asset('frontend/assets/js/bootstrap-notify.min.js')}}"></script>
<script>
    @if (Illuminate\Support\Facades\Session::has('success'))
        $.notify("{{session()->get('success')}}", {
            type:'success',
            animate: {
                enter: 'animated fadeInRight',
                exit: 'animated fadeOutRight'
            }
        });
    @endif
    @php
        Illuminate\Support\Facades\Session::forget('success');
    @endphp
    @if (Illuminate\Support\Facades\Session::has('error'))
        $.notify("{{session()->get('error')}}", {
            type:'danger',
            animate: {
                enter: 'animated fadeInRight',
                exit: 'animated fadeOutRight'
            }
        });
    @endif
    @php
        Illuminate\Support\Facades\Session::forget('error');
    @endphp
</script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

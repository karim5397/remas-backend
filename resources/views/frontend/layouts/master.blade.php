<!DOCTYPE html>

<html lang="en">





{{-- head  --}}
@php
    $setting=App\Models\Setting::first()
@endphp
@section('page_title', $setting->page_title)
@section('meta_title', $setting->meta_title)
@section('meta_auth', $setting->meta_auth)
@section('meta_description', strip_tags($setting->meta_description))

@include('frontend.layouts.head')
{{-- head  --}}



    <body>
        <!-- Start Header Section -->

            @include('frontend.layouts.header')


        <!-- End Header Section -->



        <!-- search -->

        @include('frontend.layouts.search')

        <!-- End Sidebar Modal -->


        {{-- start content  --}}
            @yield('content')
        {{-- end content  --}}


        <!-- Start  Footer Section -->

            @include('frontend.layouts.footer')

        <!-- End  Footer Section -->




        {{-- start script  --}}
            @include('frontend.layouts.script')
        {{-- end script  --}}
    </body>



</html>


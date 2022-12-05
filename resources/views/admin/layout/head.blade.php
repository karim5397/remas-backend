<head>
    <meta charset="utf-8">
    <link href="{{asset(get_setting('favicon'))}}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->

    <link rel="stylesheet" href="{{asset('backend/assets/css/all.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/app.css')}}" />
    <!-- END: CSS Assets-->
    @yield('style')
    <style>
        .animated.fadeInRight{
            width: 400px !important;
        }
        .animated.fadeInRight .close{
            top: 15px !important;
        }
        .alert-success{
            background-color: #fff !important;
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            border: none;
        }
    </style>
</head>
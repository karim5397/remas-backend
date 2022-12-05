<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield("meta_description")">
    <meta name="title" content="@yield("meta_title")">
    <meta name="auth" content=@yield("meta_auth")>
    <link rel="icon" type="image/png" href="{{asset(get_setting("favicon"))}}">
    <title>@yield("page_title")</title>

    <!-- favicon -->
    <link href="images/favicon.ico" rel="shortcut icon">
    <!-- Bootstrap -->
    <link href="{{asset('frontend/assets/css/bootstrap.rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/assets/css/tiny-slider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/assets/css/tobii.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">

    <!-- Main Css -->
    <!-- <link href="css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" /> -->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('frontend/assets/css/custom-style.css')}}" rel="stylesheet"/>

    

    <style>
        .alert.fadeInRight .close{
            border: none;
            background-color: transparent
        }
    </style>

</head>
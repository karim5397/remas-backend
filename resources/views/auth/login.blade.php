<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('backend/assets/images/favicon.ico')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Login - Remas </title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('backend/assets/css/app.css')}}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5" style="background-color:#fff; border-radius:10px; width:fit-content;">
                        <img alt="Midone - HTML Admin Template" class="w-100 p-3" src="{{asset('backend/assets/images/logo.png')}}" width="300px">
                    </a>
                    <div class="my-auto">
                        <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{asset('backend/assets/images/illustration.svg')}}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            A few more clicks to 
                            <br>
                            sign in to your account.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your website in one place</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
				
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
						<div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
							<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
								Sign In
							</h2>
							<form action="{{ route('admin.login') }}" method="POST">
								@csrf
								<div class="intro-x mt-8">
									<input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email" name="email">
 									 @error('email')
										<span class="text-danger p-1" >
											<p>{{ $message }}</p>
										</span>
									 @enderror
									
									<input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" name="password">
									  @error('password')
										<span class="text-danger p-1 font-mono" >
											<p>{{ $message }}</p>
										</span>
									  @enderror
								</div>
								<div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
									<button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" type="submit">Login</button>
								</div>
							</form>
						</div>
					</div>
				
                <!-- END: Login Form -->
            </div>
        </div>
        
        <!-- BEGIN: JS Assets-->
        <script src="{{asset('backend/assets/js/app.js')}}"></script>
        <!-- END: JS Assets-->
    </body>
</html>
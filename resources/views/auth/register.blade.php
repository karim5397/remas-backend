
<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset(get_setting('favicon'))}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register - Remas</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('backend/assets/css/app.css')}}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Register Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5" style="background-color:#fff; border-radius:10px; width:fit-content;">
                        <img  class="w-100 p-3" src="{{asset(get_setting('logo'))}}" width="300px">
                    </a>
                    <div class="my-auto">
                        <img  class="-intro-x w-1/2 -mt-16" src="{{asset('backend/assets/images/illustration.svg')}}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            A few more clicks to 
                            <br>
                            sign up to your account.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your website in one place</div>
                    </div>
                </div>
                <!-- END: Register Info -->
                <!-- BEGIN: Register Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign Up
                        </h2>
						<form action="{{ route('admin.register') }}" method="POST">
							@csrf
							<div class="intro-x mt-8">
								<input type="text" name="first_name" class="intro-x login__input form-control py-3 px-4 block" placeholder="First Name">
								@error('first_name')
                                    <span class="text-danger" >
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
								<input type="text" name="last_name" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Last Name">
								@error('last_name')
                                    <span class="text-danger" >
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
								<input type="email" name="email" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email">
								@error('email')
                                    <span class="text-danger" >
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
								<input type="password" name="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
								@error('password')
                                    <span class="text-danger" >
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
								<input type="password" name="password_confirmation" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password Confirmation">
							</div>
						
							<div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
								<button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
								<a href="{{route('login.form')}}" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign in</a>
							</div>
						</form>
                    </div>
                </div>
                <!-- END: Register Form -->
            </div>
        </div> 
        <!-- BEGIN: JS Assets-->
        <script src="{{asset('backend/assets/js/app.js')}}"></script>
        <!-- END: JS Assets-->
    </body>
</html>
{{-- <!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>AWW - Register</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{asset(get_setting('favicon'))}}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset('backend/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('backend/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-up -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(backend/assets/media/illustrations/sketchy-1/14.png">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="{{route('dashboard')}}" class="mb-12">
						<img alt="Logo" src="{{asset('backend/assets/images/logo/aaw.jpg')}}" class="h-40px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" action="{{ route('admin.register') }}" method="POST" >
                            @csrf
                            <!--begin::Heading-->
							<div class="mb-10 text-center">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Create an Account</h1>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-bold fs-4">Already have an account?
								<a href="{{route('login.form')}}" class="link-primary fw-bolder">Sign in here</a></div>
								<!--end::Link-->
							</div>
							<!--end::Heading-->
							<!--begin::Action-->
							<!--end::Action-->
							<!--begin::Separator-->
							<div class="d-flex align-items-center mb-10">
								<div class="border-bottom border-gray-300 mw-50 w-100"></div>
								<span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
								<div class="border-bottom border-gray-300 mw-50 w-100"></div>
							</div>
							<!--end::Separator-->
							<!--begin::Input group-->
							<div class="row fv-row mb-7">
								<!--begin::Col-->
								<div class="col-xl-6">
									<label class="form-label fw-bolder text-dark fs-6">First Name</label>
									<input class="form-control form-control-lg form-control-solid" type="text" placeholder="Write Your First Name" name="first_name" value="{{ old('first_name') }}" autocomplete="off"  />
                                    @error('first_name')
                                        <span class="text-danger">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-6">
									<label class="form-label fw-bolder text-dark fs-6">Last Name</label>
									<input class="form-control form-control-lg form-control-solid" type="text" placeholder="Write Your Last Name" name="last_name" value="{{ old('last_name') }}" autocomplete="off"  />
                                    @error('last_name')
                                        <span class="text-danger">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-7">
								<label class="form-label fw-bolder text-dark fs-6">Email</label>
								<input class="form-control form-control-lg form-control-solid" type="email" placeholder="Write Your Email" name="email" value="{{ old('email') }}" autocomplete="off"  />
                                @error('email')
                                    <span class="text-danger" >
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10 fv-row" data-kt-password-meter="true">
								<!--begin::Wrapper-->
								<div class="mb-1">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6">Password</label>
									<!--end::Label-->
									<!--begin::Input wrapper-->
									<div class="position-relative mb-3">
										<input class="form-control form-control-lg form-control-solid" id="password" type="password" placeholder="Enter Your Password" name="password" autocomplete="off" />
										<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
											<i class="bi bi-eye-slash fs-2"></i>
											<i class="bi bi-eye fs-2 d-none"></i>
										</span>
									</div>
									<!--end::Input wrapper-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Hint-->
								<!--end::Hint-->
                                @error('password')
                                    <span class="text-danger" >
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
							</div>
							<!--end::Input group=-->
							<!--begin::Input group-->
							<div class="fv-row mb-5">
								<label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
								<input class="form-control form-control-lg form-control-solid" id="password-confirm" type="password" placeholder="Re-enter the password" name="password_confirmation" autocomplete="off" />
							</div>
							<!--end::Input group-->

							<!--begin::Actions-->
							<div class="text-center">
								<button  id="kt_sign_up_submit" type="submit" class="btn btn-lg btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Sign-up-->
		</div>
		<!--end::Root-->
		<!--end::Main-->

		<script>var hostUrl = "backend/assets/";</script>
		<script src="{{asset('backend/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('backend/assets/js/scripts.bundle.js')}}"></script>

	</body>
	<!--end::Body-->
</html> --}}
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
                        <img alt="Midone - HTML Admin Template" class="w-100 p-3" src="{{asset('backend/assets/images/logo.png')}}" width="300px">
                    </a>
                    <div class="my-auto">
                        <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{asset('backend/assets/images/illustration.svg')}}">
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
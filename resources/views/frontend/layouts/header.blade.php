   <!-- Navbar STart -->
   <header id="topnav" class="defaultscroll sticky direction">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="{{route('home')}}">
            <span class="logo-light-mode">
                <img src="{{asset('frontend/assets/images/logo.png')}}" style="width:200px; height:80px">
            </span>
        </a>
        <!-- End Logo container-->
        <div class="menu-extras" style="float: left;">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>



        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu m-auto nav-light">
                <li class="has-submenu parent-parent-menu-item">
                    <a href="{{route('about')}}">عن الشركة</a>
                </li>
            
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">إداره علاقات المستثمرين <i class="fa-solid fa-angle-down"></i></a><span class="menu-arrow" style="display: none;"></span>
                    <ul class="submenu">
                        <li><a href="{{route('share')}}" class="sub-menu-item"> بيانات الأسهم و الشركة</a></li>
                        <li><a href="{{route('director')}}" class="sub-menu-item">قرارات مجلس الإدارة</a></li>
                        <li><a href="{{route('decision')}}" class="sub-menu-item"> قرارات الجمعية العمومية</a></li>
                        <li><a href="{{route('finance')}}" class="sub-menu-item"> القوائم المالية</a></li>
                        <li><a href="{{route('disclosure')}}" class="sub-menu-item"> تقارير الإفصاح</a></li>
                        <li><a href="{{route('board.structure')}}" class="sub-menu-item">تشكيل مجلس الإداره</a></li>
                        <li><a href="{{route('advertisement')}}" class="sub-menu-item">أعلانات السوق</a></li>
                        <li><a href="{{route('government')}}" class="sub-menu-item">تقارير الحوكمة</a></li>
                        <li><a href="{{route('follow_up')}}" class="sub-menu-item">تقارير لجنة المراجعة</a></li>
                        <li><a href="{{route('remedies')}}" class="sub-menu-item">استدراكات</a></li>
                    </ul>
                        
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="{{route('inquery')}}">طلبات و إستفسارات</a>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="{{route('certificate')}}">الشهادات</a>
                </li>

                <li><a href="{{route('contact')}}" class="sub-menu-item">فروع الشركة</a></li>
                
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
   <!-- Navbar STart -->
   <header id="topnav" class="defaultscroll sticky direction">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="#">
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
                    <a href="javascript:void(0)">عن الشركه</a>
                </li>
            
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">اداره علاقات المستثمرين <i class="fa-solid fa-angle-down"></i></a><span class="menu-arrow" style="display: none;"></span>
                    <ul class="submenu">
                        <li><a href="#" class="sub-menu-item">نظرة عامة</a></li>
                        <li><a href="#" class="sub-menu-item">القدرة التنافسية والإستراتيجية</a></li>
                        <li><a href="#" class="sub-menu-item">القوائم الماليه</a></li>
                        <li><a href="#" class="sub-menu-item"> تقارير سنوية</a></li>
                        <li><a href="#" class="sub-menu-item"> نشرات إخبارية</a></li>
                        <li><a href="#" class="sub-menu-item"> تقارير أداء</a></li>
                        <li><a href="#" class="sub-menu-item"> تقارير مالية</a></li>
                        <li><a href="#" class="sub-menu-item"> بيانات التداول</a></li>
                        <li><a href="#" class="sub-menu-item"> القيادات التنفيذية</a></li>
                        <li><a href="#" class="sub-menu-item"> مجلس الإداره</a></li>
                        <li><a href="#" class="sub-menu-item"> بيانات الإفصاح وإجتماعات الجمعية العامة ومجالس الإدارة</a></li>
                    </ul>
                        
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">طلبات و استفسارات</a>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">الشهادات</a>
                </li>

                <li><a href="#" class="sub-menu-item">فروع الشركه</a></li>
                <li>
                    <ul class="buy-button list-inline mb-0">
                        <li class="list-inline-item search-icon mb-0">
                            <div class="dropdown">
                                <button type="button" class="btn btn-link text-decoration-none dropdown-toggle mb-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="uil uil-search h5 text-dark nav-light-icon-dark mb-0"></i>
                                    <i class="uil uil-search h5 text-white nav-light-icon-white mb-0"></i>
                                </button>
                                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-4 py-0" style="width: 300px;">
                                    <form class="p-4">
                                        <input type="text" id="text" name="name" class="form-control border bg-white" placeholder="Search...">
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
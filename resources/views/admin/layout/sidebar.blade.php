<nav class="side-nav">
    <a href="{{route('dashboard')}}" class="intro-x flex items-center " style="background-color: #fff; border-radius: 10px">
        <img alt="Midone - HTML Admin Template" class="w-100 p-2" src="{{asset(get_setting('logo'))}}">
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{route('dashboard')}}" class="side-menu @if(Request::routeIs('dashboard')) side-menu--active @endif">
                <div class="side-menu__icon"> <i class="fa fa-home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="side-menu @if(Request::routeIs('user.index') || Request::routeIs('user.create')) side-menu--active side-menu--open @endif">
                <div class="side-menu__icon"> <i class="fa fa-user"></i> </div>
                <div class="side-menu__title">
                    Users 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="@if(Request::routeIs('user.index') || Request::routeIs('user.create')) side-menu__sub-open @endif">
                <li>
                    <a href="{{route('user.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Show Users </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.create')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Add User </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i class="fa fa-box"></i> </div>
                <div class="side-menu__title">
                    About-us 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('about.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Show About-us </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('about.create')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Add About-us </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i class="fa fa-flag"></i> </div>
                <div class="side-menu__title">
                    Banners 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('banner.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Show Banners </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('banner.create')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Add Banner </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i class="fa fa-newspaper"></i> </div>
                <div class="side-menu__title">
                    News 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('news.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Show News </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('news.create')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Add News </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i class="fa fa-phone"></i> </div>
                <div class="side-menu__title">
                    Contact-us 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('contact.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Show Contacts </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('contact.create')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Add Contact </div>
                    </a>
                </li>
            </ul>
        </li>
        
    </ul>
</nav>
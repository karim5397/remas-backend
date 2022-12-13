<nav class="side-nav">
    <a href="{{route('dashboard')}}" class="intro-x flex items-center " style="background-color: #fff; border-radius: 10px">
        <img  class="w-100 p-2" src="{{asset(get_setting('logo'))}}">
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
            <a href="javascript:;" class="side-menu @if(Request::routeIs('about.index')) side-menu--active side-menu--open @endif">
                <div class="side-menu__icon"> <i class="fa fa-box"></i> </div>
                <div class="side-menu__title">
                    About-us 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="@if(Request::routeIs('about.index')) side-menu__sub-open @endif">
                <li>
                    <a href="{{route('about.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Show About-us </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="side-menu @if(Request::routeIs('banner.index') || Request::routeIs('banner.create')) side-menu--active side-menu--open @endif">
                <div class="side-menu__icon"> <i class="fa fa-flag"></i> </div>
                <div class="side-menu__title">
                    Banners 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="@if(Request::routeIs('banner.index') || Request::routeIs('banner.create')) side-menu__sub-open @endif">
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
            <a href="javascript:;" class="side-menu @if(Request::routeIs('news.index') || Request::routeIs('news.create')) side-menu--active side-menu--open @endif">
                <div class="side-menu__icon"> <i class="fa fa-newspaper"></i> </div>
                <div class="side-menu__title">
                    News 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="@if(Request::routeIs('news.index') || Request::routeIs('news.create')) side-menu__sub-open @endif">
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
            <a href="javascript:;" class="side-menu @if(Request::routeIs('contact.index') || Request::routeIs('contact.create')) side-menu--active side-menu--open @endif">
                <div class="side-menu__icon"> <i class="fa fa-phone"></i> </div>
                <div class="side-menu__title">
                    Contact-us 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="@if(Request::routeIs('contact.index') || Request::routeIs('contact.create')) side-menu__sub-open @endif">
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

        <li>
            <a href="{{route('client.message')}}" class="side-menu @if(Request::routeIs('client.message')) side-menu--active @endif">
                <div class="side-menu__icon"> <i class="fa-regular fa-envelope"></i> </div>
                <div class="side-menu__title"> Client Messages </div>
            </a>
        </li>

        <li>
            <a href="{{route('product.index')}}" class="side-menu @if(Request::routeIs('product.index')) side-menu--active @endif">
                <div class="side-menu__icon"> <i class="fa-solid fa-layer-group"></i> </div>
                <div class="side-menu__title"> Products </div>
            </a>
        </li>

        <li>
            <a href="{{route('certificate.index')}}" class="side-menu @if(Request::routeIs('certificate.index')) side-menu--active @endif">
                <div class="side-menu__icon"> <i class="fa-regular fa-file-lines"></i> </div>
                <div class="side-menu__title"> Certificates </div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="side-menu @if(Request::routeIs('director.show') || Request::routeIs('advertisement.show') || Request::routeIs('remedies.show') || Request::routeIs('follow_up.show') || Request::routeIs('structure.show') || Request::routeIs('government.show') || Request::routeIs('share.show') || Request::routeIs('decision.show') || Request::routeIs('disclosure.show') || Request::routeIs('finance.show')) side-menu--active side-menu--open @endif">
                <div class="side-menu__icon"> <i class="fa-solid fa-chart-line"></i> </div>
                <div class="side-menu__title">
                    Investments 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="@if(Request::routeIs('director.show') || Request::routeIs('remedies.show') || Request::routeIs('advertisement.show') || Request::routeIs('follow_up.show') || Request::routeIs('share.show') ||Request::routeIs('structure.show') || Request::routeIs('government.show') || Request::routeIs('decision.show') || Request::routeIs('disclosure.show') || Request::routeIs('finance.show')) side-menu__sub-open @endif">
                <li>
                    <a href="{{route('share.show')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Details of Shares </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('structure.show')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Board Structure </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('director.show')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Board of Directors </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('decision.show')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> General Assembly Decisions </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('finance.show')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Financial Reports </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('disclosure.show')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Disclosures Reports </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('government.show')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Governances Reports </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('follow_up.show')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Follow-Up Committee Reports </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('remedies.show')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Remedies </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('advertisement.show')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Advertisements </div>
                    </a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="{{route('setting')}}" class="side-menu @if(Request::routeIs('setting')) side-menu--active @endif">
                <div class="side-menu__icon"> <i class="fa fa-gear"></i> </div>
                <div class="side-menu__title"> Settings </div>
            </a>
        </li>


        
    </ul>
</nav>
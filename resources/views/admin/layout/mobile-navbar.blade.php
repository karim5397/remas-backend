<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone - HTML Admin Template" class="w-40" src="{{asset(get_setting('logo'))}}">
        </a>
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <div class="scrollable">
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        <ul class="scrollable__content py-2">
            <li>
                <a href="{{route('dashboard')}}" class="menu @if(Request::routeIs('dashboard')) menu--active @endif">
                    <div class="menu__icon"> <i class="fa fa-home"></i> </div>
                    <div class="menu__title"> Dashboard </div>
                </a>
            </li>
    
            <li>
                <a href="javascript:;" class="menu @if(Request::routeIs('user.index') || Request::routeIs('user.create')) menu--active menu--open @endif">
                    <div class="menu__icon"> <i class="fa fa-user"></i> </div>
                    <div class="menu__title">
                        Users 
                        <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="@if(Request::routeIs('user.index') || Request::routeIs('user.create')) menu__sub-open @endif">
                    <li>
                        <a href="{{route('user.index')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Show Users </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.create')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Add User </div>
                        </a>
                    </li>
                </ul>
            </li>
    
            <li>
                <a href="javascript:;" class="menu @if(Request::routeIs('about.index')) menu--active menu--open @endif">
                    <div class="menu__icon"> <i class="fa fa-box"></i> </div>
                    <div class="menu__title">
                        About-us 
                        <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="@if(Request::routeIs('about.index')) menu__sub-open @endif">
                    <li>
                        <a href="{{route('about.index')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Show About-us </div>
                        </a>
                    </li>
                </ul>
            </li>
    
            <li>
                <a href="javascript:;" class="menu @if(Request::routeIs('banner.index') || Request::routeIs('banner.create')) menu--active menu--open @endif">
                    <div class="menu__icon"> <i class="fa fa-flag"></i> </div>
                    <div class="menu__title">
                        Banners 
                        <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="@if(Request::routeIs('banner.index') || Request::routeIs('banner.create')) menu__sub-open @endif">
                    <li>
                        <a href="{{route('banner.index')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Show Banners </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('banner.create')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Add Banner </div>
                        </a>
                    </li>
                </ul>
            </li>
    
            <li>
                <a href="javascript:;" class="menu @if(Request::routeIs('news.index') || Request::routeIs('news.create')) menu--active menu--open @endif">
                    <div class="menu__icon"> <i class="fa fa-newspaper"></i> </div>
                    <div class="menu__title">
                        News 
                        <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="@if(Request::routeIs('news.index') || Request::routeIs('news.create')) menu__sub-open @endif">
                    <li>
                        <a href="{{route('news.index')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Show News </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('news.create')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Add News </div>
                        </a>
                    </li>
                </ul>
            </li>
    
            <li>
                <a href="javascript:;" class="menu @if(Request::routeIs('contact.index') || Request::routeIs('contact.create')) menu--active menu--open @endif">
                    <div class="menu__icon"> <i class="fa fa-phone"></i> </div>
                    <div class="menu__title">
                        Contact-us 
                        <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="@if(Request::routeIs('contact.index') || Request::routeIs('contact.create')) menu__sub-open @endif">
                    <li>
                        <a href="{{route('contact.index')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Show Contacts </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contact.create')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Add Contact </div>
                        </a>
                    </li>
                </ul>
            </li>
    
            <li>
                <a href="{{route('client.message')}}" class="menu @if(Request::routeIs('client.message')) menu--active @endif">
                    <div class="menu__icon"> <i class="fa-regular fa-envelope"></i> </div>
                    <div class="menu__title"> Client Messages </div>
                </a>
            </li>
    
            <li>
                <a href="{{route('product.index')}}" class="menu @if(Request::routeIs('product.index')) menu--active @endif">
                    <div class="menu__icon"> <i class="fa-solid fa-layer-group"></i> </div>
                    <div class="menu__title"> Products </div>
                </a>
            </li>
    
            <li>
                <a href="{{route('certificate.index')}}" class="menu @if(Request::routeIs('certificate.index')) menu--active @endif">
                    <div class="menu__icon"> <i class="fa-regular fa-file-lines"></i> </div>
                    <div class="menu__title"> Certificates </div>
                </a>
            </li>
    
            <li>
                <a href="javascript:;" class="menu @if(Request::routeIs('director.show') || Request::routeIs('share.show') || Request::routeIs('decision.show') || Request::routeIs('disclosure.show') || Request::routeIs('finance.show')) menu--active menu--open @endif">
                    <div class="menu__icon"> <i class="fa-solid fa-chart-line"></i> </div>
                    <div class="menu__title">
                        Investments 
                        <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>
                <ul class="@if(Request::routeIs('director.show') || Request::routeIs('share.show') || Request::routeIs('decision.show') || Request::routeIs('disclosure.show') || Request::routeIs('finance.show')) menu__sub-open @endif">
                    <li>
                        <a href="{{route('share.show')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Details of Shares </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('director.show')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Board of Directors </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('decision.show')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> General Assembly Decisions </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('finance.show')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Financial Reports </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('disclosure.show')}}" class="menu">
                            <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                            <div class="menu__title"> Disclosures Reports </div>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="{{route('setting')}}" class="menu @if(Request::routeIs('setting')) menu--active @endif">
                    <div class="menu__icon"> <i class="fa fa-gear"></i> </div>
                    <div class="menu__title"> Settings </div>
                </a>
            </li>
    
    
            
        </ul>
    </div>
</div>
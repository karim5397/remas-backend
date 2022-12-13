<div class="col-lg-4 col-md-4 mt-4 mt-sm-0 pt-sm-0">
    <div class="card border-0 shadow sidebar sticky-bar ms-lg-4">
        <div class="card-body">
            <!-- Categories -->
            <div class="widget">
                <h5 class="widget-title text-dir">إداره علاقات المستثمرين</h5>
                <ul class="list-unstyled mt-4 mb-0 p-0 blog-categories text-dir">
                    <li class="@if(Request::routeIs('share')) active-li @endif"><a href="{{route('share')}}" class="text-dark"> بيانات الأسهم و الشركة <i class="uil uil-arrow-left"></i></a></li>
                    <li class="@if(Request::routeIs('director') || Request::routeIs('director.filter')) active-li @endif"><a href="{{route('director')}}" class="text-dark"> قرارات مجلس الإداره <i class="uil uil-arrow-left"></i></a></li>
                    <li class="@if(Request::routeIs('decision') || Request::routeIs('decision.filter')) active-li @endif"><a href="{{route('decision')}}" class="text-dark">  قرارات الجمعية العمومية <i class="uil uil-arrow-left"></i></a></li>
                    <li class="@if(Request::routeIs('finance') || Request::routeIs('finance.filter')) active-li @endif"><a href="{{route('finance')}}" class="text-dark"> القوائم المالية <i class="uil uil-arrow-left"></i></a></li>
                    <li class="@if(Request::routeIs('disclosure') || Request::routeIs('disclosure.filter')) active-li @endif"><a href="{{route('disclosure')}}" class="text-dark"> تقارير الإفصاح <i class="uil uil-arrow-left"></i></a></li>
                    <li class="@if(Request::routeIs('board.structure')) active-li @endif"><a href="{{route('board.structure')}}" class="text-dark">تشكيل مجلس الإداره<i class="uil uil-arrow-left"></i></a></li>
                    <li class="@if(Request::routeIs('advertisement') || Request::routeIs('advertisement.filter')) active-li @endif"><a href="{{route('advertisement')}}" class="text-dark">أعلانات السوق<i class="uil uil-arrow-left"></i></a></li>
                    <li class="@if(Request::routeIs('government') || Request::routeIs('government.filter')) active-li @endif"><a href="{{route('government')}}" class="text-dark">تقارير الحوكمة<i class="uil uil-arrow-left"></i></a></li>
                    <li class="@if(Request::routeIs('follow_up') || Request::routeIs('follow_up.filter')) active-li @endif"><a href="{{route('follow_up')}}" class="text-dark">تقارير لجنة المراجعة<i class="uil uil-arrow-left"></i></a></li>
                    <li class="@if(Request::routeIs('remedies') || Request::routeIs('remedies.filter')) active-li @endif"><a href="{{route('remedies')}}" class="text-dark">استدراكات<i class="uil uil-arrow-left"></i></a></li>
    
                
                </ul>
            </div>
            <!-- Categories -->
        </div>
    </div>
</div>
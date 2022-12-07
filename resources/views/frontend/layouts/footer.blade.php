 <!-- Footer Start -->
 <footer class="footer bg-footer direction">
    <div class=" footer-border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-py-60">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0  ">
                            <img src="{{asset(get_setting('logo'))}}" style="max-width: 100%;" alt="" class="mb-3">
                            <p> قم بتحسين نمط حياة عملائنا وتزويدهم بتجربة معيشية أفضل داخل منازلهم من خلال تزويدهم بمنتجات عالية الجودة بتصاميم إبداعية وجذابة من الناحية الجمالية تناسب كل الأذواق التي يتم تقديمها بطريقة أخلاقية وصديقة للبيئة.
                                قدم لوكلائنا سعر منتج تنافسي مع تصميمات فريدة تميزنا عن المنافسة.
                            </p>
                            <ul class="d-flex list-unstyled  social-icons">
                                <li><a href="{{get_setting('facebook_url')}}" class="social-links"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="{{get_setting('instagram_url')}}" class="social-links"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>

                         </div>

                        
                         <div class="col-lg-6 col-md-4 col-12 ">
                             <h6 class="footer-head">إتصل بنا</h6>
                             <div>
                                 <div class="pt-3">
                                     <span><strong>البريد الإلكترونى : </strong>info[at]ceramicaremas.com</span>
                                 </div>
                                 <div class="pt-3 d-flex">
                                    <strong> الهاتف : </strong>
                                    <p class="px-2" style="direction: ltr;"> (+02) 226 965 1 </p>
                                </div>
                                 <div class="pt-3">
                                    <ul class="d-flex flex-column list-unstyled gap-4">
                                        @php
                                            $branches=App\Models\ContactUs::limit(4)->get();
                                        @endphp
                                        @foreach ($branches as $branch)
                                            <li>
                                                <span><strong>  {{$branch->title}}  : </strong>{!!$branch->address!!}</span>
                                            </li>
                                        @endforeach
                                     
                                    </ul>
                                 </div>
                                 
                             </div>
                         </div><!--end col-->

                       
                        
                        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0 ">
                            <h6 class="footer-head">القائمة الرئيسية</h6>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="{{route('news')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i>الأخبار</a></li>
                                <li><a href="{{route('contact')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> فروع الشركة</a></li>
                                <li><a href="{{route('inquery')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> طلبات و إستفسارات</a></li>
                                <li><a href="{{route('about')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> عن الشركة</a></li>
                            </ul>
                        </div><!--end col-->

                        

                    </div><!--end row-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="footer-py-30 footer-bar bg-footer">
        <div class="container">
            <div class="row align-items-center">
             

                <div class="col-sm-8 mt-2 mt-sm-0">
                    <div class="text-sm-end text-center">
                        <p class="mb-0 text-muted">All Rights Reserved - Copyrights ©  Powered By STS-Egypt</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- End -->

<!-- Back to top -->
<a href="javascript:void(0)" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill"><i class="fas fa-arrow-up"></i></a>
<!-- Back to top -->
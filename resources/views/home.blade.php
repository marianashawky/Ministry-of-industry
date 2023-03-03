@extends('layouts.app')

@section('content')


<section class="about-section">
    <div class="container">

    <div class="experince-header"><span class="experince-header-set">عن الهيأه</span></div>

        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2  ">
                <div class="inner-column">
                    <div class="sec-title"  >
                        <h3 >
                            وزاره الصناعه والمعادن
                            هيأه البحث والتطوير الصناعي
                        </h3>
                    </div>
                    <div class="text">
                        أن من أهداف وزارة الصناعة والمعادن نشر المدن الصناعية الحديثة في كافة أنحاء العراق لغرض تشجيع القطاع الخاص لأقامة المشاريع الصغيرة والمتوسطة التي تخدم الأقتصاد الوطني وتخلق فرص عمل للكثير من العاملين من ذوي الأختصاصات المتنوعة في المحافظات المزمع أنشاء هذه المدن أو المجمعات فيها بعد أن تتكفل باقي دوائر الدولة بتنفيذ مشاريع البنى التحتية لغاية حدود الأراضي المرخصة لهذا الغرض أن أقامة مثل هذه المدن هو متطلب أقتصادي لما له من دور في جذب وأستقطاب المستثمرين

                    </div>
                    <div class="text">
                        من الصناعيين المحليين والأجانب أضافة الى كونها مطلبا أجتماعيا وتنمويا لمساهمتها الأكيدة في تحقيق النهضة التنموية في المحافظات التي تقام على أرضها وقد تم الأستعانة بشركات تصميمية كفوءة وذات مهارات كبيرة ولها خبرة في مجال أعداد دراسات الجدوى والتصاميم والتنفيذ لغرض أقامة هذه المدن الصناعية .
                    </div>

                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12  mb-5">
                <div class="inner-column wow fadeInLeft">
                    <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img title="Rahul Kumar Yadav" src="{{asset('images/about.jpg')}}"  height="800"alt=""></a></figure>

                </div>
            </div>

        </div>
    </div>

</section>
<section class="brand-section  section-padding" style="margin-bottom: 200px !important;">

    <div class="container">
        <div class="brand-hadding">
            <h2>
                المنتجات والخدمات

            </h2>
        </div>
        <div class="brand-logo-list">
            <div id="popular_brands">
                <div><a href="#"><img src="{{asset('images/brand1.jpg')}}" class="img-responsive" alt="image"></a></div>
                <div><a href="#"><img src="{{asset('images/brand2.jpg')}}" class="img-responsive" alt="image"></a></div>
                <div><a href="#"><img src="{{asset('images/brand3.jpg')}}" class="img-responsive" alt="image"></a></div>
                <div><a href="#"><img src="{{asset('images/brand2.jpg')}}" class="img-responsive" alt="image"></a></div>
                <div><a href="#"><img src="{{asset('images/brand1.jpg')}}" class="img-responsive" alt="image"></a></div>
                <div><a href="#"><img src="{{asset('images/brand3.jpg')}}" class="img-responsive" alt="image"></a></div>
                <div><a href="#"><img src="{{asset('images/brand1.jpg')}}" class="img-responsive" alt="image"></a></div>
                <div><a href="#"><img src="{{asset('images/brand2.jpg')}}" class="img-responsive" alt="image"></a></div>
                <div><a href="#"><img src="{{asset('images/brand2.jpg')}}" class="img-responsive" alt="image"></a></div>
                <div><a href="#"><img src="{{asset('images/brand1.jpg')}}" class="img-responsive" alt="image"></a></div>
                <div><a href="#"><img src="{{asset('images/brand2.jpg')}}" class="img-responsive" alt="image"></a></div>

            </div>
        </div>

    </div>

</section>
<div class="container">

    <div class="experince-header"><span class="experince-header-set">المؤتمرات والمعارض</span></div>
</div>
<!--Featured Car-->
<section class="section-padding graybg">
    <div class="container">

        <div class="row" id="cardetails">
            <div class="col-list-3">
                <div class="featured-car-list">
                    <div class="featured-car-img"><a href="تفاصيل السيارة .html"><img src="{{asset('images/img2.jpg')}}" class="img-responsive" alt="Image"></a>
                    </div>
                    <div class="featured-car-content">
                        <h6><a href="تفاصيل السيارة .html">
                                إقامـة مدينـة صناعيـة مُتطـورة فـي الحبانيـة
                            </a></h6>
                        <ul>
                            شاركت هيئة المدن الصناعية في اللقاء الدوري الخاص بمدراء الموارد البشرية في شركات وزارة الصناعة والمعادن المنعقد في محافظة السليمانية، حيث مثل الهيئة في الاجتماع المذكور الاستاذ (( دريد سامي)) مدير قسم الشؤون الادارية في هيئة المدن الصناعية
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-list-3">
                <div class="featured-car-list">
                    <div class="featured-car-img"><a href="تفاصيل السيارة .html"><img src="{{asset('images/img3.jpg')}}" class="img-responsive" alt="Image"></a>
                    </div>
                    <div class="featured-car-content">
                        <h6><a href="تفاصيل السيارة .html">
                                هيئة المدن الصناعية تشارك في اللقاء الدوري لمدراءالموارد البشرية في شركات وزارة الصناعة والمعادن
                            </a></h6>
                        <ul>
                            شاركت هيئة المدن الصناعية في اللقاء الدوري الخاص بمدراء الموارد البشرية في شركات وزارة الصناعة والمعادن المنعقد في محافظة السليمانية، حيث مثل الهيئة في الاجتماع المذكور الاستاذ (( دريد سامي)) مدير قسم الشؤون الادارية في هيئة المدن الصناعية
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-list-3">
                <div class="featured-car-list">
                    <div class="featured-car-img"><a href="تفاصيل السيارة .html"><img src="{{asset('images/img2.jpg')}}" class="img-responsive" alt="Image"></a>
                    </div>
                    <div class="featured-car-content">
                        <h6><a href="تفاصيل السيارة .html">
                                هيئة المدن الصناعية تشارك في اللقاء الدوري لمدراءالموارد البشرية في شركات وزارة الصناعة والمعادن
                            </a></h6>
                        <ul>
                            شاركت هيئة المدن الصناعية في اللقاء الدوري الخاص بمدراء الموارد البشرية في شركات وزارة الصناعة والمعادن المنعقد في محافظة السليمانية، حيث مثل الهيئة في الاجتماع المذكور الاستاذ (( دريد سامي)) مدير قسم الشؤون الادارية في هيئة المدن الصناعية
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-list-3">
                <div class="featured-car-list">
                    <div class="featured-car-img"><a href="تفاصيل السيارة .html"><img src="{{asset('images/img1.jpg')}}" class="img-responsive" alt="Image"></a>
                    </div>
                    <div class="featured-car-content">
                        <h6><a href="تفاصيل السيارة .html">
                                هيئة المدن الصناعية تشارك في اللقاء الدوري لمدراءالموارد البشرية في شركات وزارة الصناعة والمعادن
                            </a></h6>
                        <ul>
                            شاركت هيئة المدن الصناعية في اللقاء الدوري الخاص بمدراء الموارد البشرية في شركات وزارة الصناعة والمعادن المنعقد في محافظة السليمانية، حيث مثل الهيئة في الاجتماع المذكور الاستاذ (( دريد سامي)) مدير قسم الشؤون الادارية في هيئة المدن الصناعية
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-list-3">
                <div class="featured-car-list">
                    <div class="featured-car-img"><a href="تفاصيل السيارة .html"><img src="{{asset('images/img1.jpg')}}" class="img-responsive" alt="Image"></a>
                    </div>
                    <div class="featured-car-content">
                        <h6><a href="تفاصيل السيارة .html">
                                هيئة المدن الصناعية تشارك في اللقاء الدوري لمدراءالموارد البشرية في شركات وزارة الصناعة والمعادن
                            </a></h6>
                        <ul>
                            شاركت هيئة المدن الصناعية في اللقاء الدوري الخاص بمدراء الموارد البشرية في شركات وزارة الصناعة والمعادن المنعقد في محافظة السليمانية، حيث مثل الهيئة في الاجتماع المذكور الاستاذ (( دريد سامي)) مدير قسم الشؤون الادارية في هيئة المدن الصناعية
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /Featured Car-->

<!--Page Header-->

<!-- /Page Header-->
<!--Contact-us-->
<section class="contact_us section-padding">

    <div class="container">
        <div class="experince-header"><span class="experince-header-set">اتصل بنا </span></div>

        <div class="row">
            <div class="col-md-6">
                <h3>تواصل معنا باستخدام النموذج أدناه</h3>
                <div class="contact_form gray-bg">
                    <form action="#" method="get">
                        <div class="form-group">
                            <label class="control-label">الاسم بالكامل<span>*</span></label>
                            <input type="text" class="form-control white_bg" id="fullname">
                        </div>
                        <div class="form-group">
                            <label class="control-label"> البريد الالكتروني <span>*</span></label>
                            <input type="email" class="form-control white_bg" id="emailaddress">
                        </div>
                        <div class="form-group">
                            <label class="control-label">رقم الجوال <span>*</span></label>
                            <input type="text" class="form-control white_bg" id="phonenumber">
                        </div>
                        <div class="form-group">
                            <label class="control-label">الرسالة <span>*</span></label>
                            <textarea class="form-control white_bg" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn" type="submit"> ارسال الرسالة<span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <h3> معلومات التواصل</h3>
                <div class="contact_detail">
                    <ul>
                        <li>
                            <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="contact_info_m">

                                العراق,بغداد
                            </div>
                        </li>
                        <li>
                            <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <div class="contact_info_m"><a href="tel:92000000">01111111110</a></div>
                        </li>
                        <li>
                            <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                            <div class="contact_info_m"><a href="mailto:contact@exampleurl.com">

                                    contact@exampleurl.com


                                </a></div>
                        </li>
                    </ul>
                    <div class="map_wrap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d213394.25944439403!2d44.643004666366856!3d33.31135591870938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15577f67a0a74193%3A0x9deda9d2a3b16f2c!2z2KjYutiv2KfYr9iMINin2YTYudix2KfZgg!5e0!3m2!1sar!2seg!4v1677836316455!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Contact-us-->


@endsection
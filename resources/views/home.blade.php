@extends('layouts.userlayout')

@section('usercontent')
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">الصفحة الرئيسة</a></li>
            <li><a href="">حول الكلية</a></li>
            <li><a href="https://uomustansiriyah.edu.iq/">موقع الجامعة</a></li>
            <li><a href="{{ route('program') }}">البرامج المستخدمة</a></li>
        </ul>
    </nav>

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class=" desc col-md-6">
                    <h3>الجامعة المستنصرية موقع التعليم الالكتروني </h3>
                    <p>هذا الموقع خاص بطلاب علوم الحاسوب للجامعة المستنصرية حيث يوجد فيه جميع المحاضرات الفديوية </p>
                </div>
                <div class="col-md-6 text-center p-4  mb-3 mt-3">
                    <img src="/image/animation_640_klgk9iu2.gif" alt="" class="img-fluid">
                </div>
            </div>

        </div>
        <img src="/image//pngkey.com-wave-shape-png-5161226.png" class="bottom-img">

    </section>


    <div class="aboutus-section">
        <div class=" container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title">حول الموقع</h2>
                        <p class="aboutus-text">الجامعة المستنصرية كلية العلوم قسم الحاسوب وهو قسم تم طرحه جديداً في
                            السنوات الاخيرة حيث يعد من اهم
                            الاقسام الموجودة في الكلية وتحتوي على اختصاصين وهن علوم الحاسوب وتكنلوجيا المعلومات وفيه قسم
                            المسائي
                            ايضاً يحتوي القسم على ندريسين ب اعلى المستويات وبشهادات الدكتوراء وغيرها ويحتوي على
                            المختبرات والقاعات
                            الدراسبة المكيفةالجامعة المستنصرية كلية العلوم قسم الحاسوب وهو قسم تم طرحه جديداً في السنوات
                            الاخيرة حيث
                            يعد من اهم
                            الاقسام الموجودة في الكلية وتحتوي على اختصاصين وهن علوم الحاسوب وتكنلوجيا المعلومات وفيه قسم
                            المسائي
                            ايضاً يحتوي القسم على ندريسين ب اعلى المستويات وبشهادات الدكتوراء وغيرها ويحتوي على
                            المختبرات والقاعات
                            الدراسبة المكيفة</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="aboutus-banner">
                        <img src="/image/animation_300_klgkunte.gif">
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12 ">
                    <div class="feature">
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Work with heart</h4>
                                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                                        vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Reliable services</h4>
                                    <p>Donec vitae sapien ut libero venenatis faucibu. Nullam quis ante. Etiam sit amet
                                        orci eget eros faucibus tincidunt</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Great support</h4>
                                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                                        vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <h1 class="hint">الدخول الى المرحلة</h1>

    <!-- start-card-stage -->
    <div class="cards-list">

        @foreach ($getstage as $stage)
            <div class="cards">
                <div class="card_image">
                    <a class="card_image" href="{{ route('getmatiral', ['stage_id' => $stage->id, 'branch_id' => -1]) }}">
                        <img src="/imageStage/{{ $stage->image }}" /></a>
                </div>
                <div class="card_title title-white">
                    {{-- <p>{{ $stage->name }}</p> --}}
                </div>
            </div>
        @endforeach


    </div>


    <section id="testimonial">
        <div class="title-text">

            <h1>ادارة قسم علوم الحاسوب </h1>
        </div>
        <div class="testimonial-row">
            <div class="testimonial-col">
                <div class="user">
                    <img src="/user_image/4648_2020_06_19!03_29_38_PM.jpg" alt="">
                    <div class="user-info">
                        <h4>م . باسم خضير عباس <i class="fa fa-twitter"></i></h4>
                        <small>baasim_math@uomustansiriyah.edu.iq </small>
                    </div>
                </div>
                <p>تدريسي في قسم علوم الحاسوب ومقرر الدراسات الاولية في القسم

                    Sc.M ماجستير علوم رياضيات في المعادالت التفاضلية الجزئية
                    c.B بكلوريوس في علوم الرياضيات
                    الجوائز والتكريم األكاديمي

                    حاصل على عدة كتب شكر من وزير التعليم العالي والبحث العلمي ومن رئيس الجامعة ومن عميد الكلية
                    الخبرة األكاديمية والتدريس:
                    تدريسي في القسم
                    مقرر الدراسات االولية
                </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="/user_image/286_2019_11_22!06_33_18_PM.png" alt="image">
                    <div class="user-info">
                        <h4>أ.م.د . ذكرى حيدر علي عباس <i class="fa fa-twitter"></i></h4>
                        <small>thekra.abbas@uomustansiriyah.edu.iq </small>
                    </div>
                </div>
                <p> Donec eget ultricies sapi. sed porttitor, mauris ater lob facilisis, elit sapi eleifend ligula.Donec
                    eget ultricies sapi. sed porttitor, mauris ater lob facilisis, elit sapi eleifend ligula.Donec eget
                    ultricies sapi. mauris ater lob facilisis, elit sapi </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="image/img-3.jpg" alt="">
                    <div class="user-info">
                        <h4>ALI LUAY <i class="fa fa-twitter"></i></h4>
                        <small>@yousufabdalstar</small>
                    </div>
                </div>
                <p> Donec eget ultricies sapi. sed porttitor, mauris ater lob facilisis, elit sapi eleifend ligula.Donec
                    eget ultricies sapi. sed porttitor, mauris ater lob facilisis, elit sapi eleifend ligula.Donec eget
                    ultricies sapi. mauris ater lob facilisis, elit sapi eleifend ligula.Donec eget ultricies sapi.
                    mauris ater lob facilisis, elit sapi eleifend ligula.</p>
            </div>
        </div>

    </section>


    <div class="container-fluid footer-sec">
        <div class="row">
            <!-- <img src="image/img-2.jpg" class="img-responsive center-block footer-logo" data-aos="fade-up" /> -->
            <span class="text-center center-block" data-aos="fade-up"><i class="fa fa-map-marker fa-2x fa-fw"></i>
                الجامعة المستنصرية-كلية علوم الحاسوب

                <!--fontawesome icons-->
                <div class="col-md-12 text-center">
                    <ul class="social">
                        <li><a href="#" class="insta" title="Instagram" data-aos="fade-up" data-aos-delay="20"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="face" title="Facebook" data-aos="fade-up" data-aos-delay="40"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twit" title="Twitter" data-aos="fade-up" data-aos-delay="60"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google" title="Google +" data-aos="fade-up" data-aos-delay="80"><i
                                    class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin" title="Linkedin" data-aos="fade-up" data-aos-delay="100"><i
                                    class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
        </div>
    </div>

@endsection

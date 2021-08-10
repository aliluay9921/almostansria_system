@extends('layouts.userlayout')

@section('usercontent')
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">الصفحة الرئيسة</a></li>
            <li><a href="#aboutus-section">حول الموقع</a></li>
            <li><a href="https://uomustansiriyah.edu.iq/">موقع الجامعة</a></li>
            <li><a href="{{ route('program') }}">البرامج المستخدمة</a></li>
        </ul>
    </nav>

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class=" desc col-md-6">
                    <h3>الجامعة المستنصرية موقع التعليم الالكتروني </h3>
                    <p> منصة للتعليم الالكتروني لطلاب علوم الحاسوب </p>
                </div>
                <div class="col-md-6 text-center p-4  mb-3 mt-3">
                    <img src="/image/animation_640_klgk9iu2.gif" alt="" class="img-fluid">
                </div>
            </div>

        </div>
        <img src="/image//pngkey.com-wave-shape-png-5161226.png" class="bottom-img">
    </section>


    <div id="aboutus-section" class="aboutus-section">
        <div class=" container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title">حول الموقع</h2>
                        <p class="aboutus-text"> تم انشاء هذا الموقع الخاص بكلية العليوم قسم الحاسوب الجامعة المستنصرية
                            لمساعدة الطلاب في التعليم الالكتروني ومن اجل تطوير عملية التعليم الالكتروني بشكل عامك والمحافظة
                            على الرصانة العلمية في العراق تم حيث ان الموقع يسهل على الطلاب عملية الوصول الى المحاضرات
                            الفديوية للمواد العملية وايضاً لسهولة تحميل البرامج المستحدمة في المواد الدراسية وايضاً يسهل على
                            الاساتذة عملية رفع المحاضرات والمواد الدراسية وبالأمكان ايضاً رفع مصادر اضافية من اجل الحصول على
                            معلومات اضافية للمواد الدراسية</p>
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
                                    <h4>المحاضرات الفديوية </h4>
                                    <p>امكانية الوصول الى المحاضرات الفديو الخاصة بكل مرحله دراسية وبكل مادة </p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>البرامج </h4>
                                    <p> امكانية تحميل جميع البرامج المستخدمة للمواد العملية تحميل مباشر بأقل مجهود </p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>المصادر الخارجية</h4>
                                    <p>امكانية الحصول على مصادر خارجيه موثوقة يتم اضافتها من قبل الكادر التدريسي </p>
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
                        <h4>م . باسم خضير عباس </h4>
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
                        <h4>أ.م.د . ذكرى حيدر علي</h4>
                        <small>thekra.abbas@uomustansiriyah.edu.iq </small>
                    </div>
                </div>
                <p>
                    دكتوراه في علوم الحاسبات / الجامعة المستنصرية / مدرس بكلية العلوم / منذ عام 1987 حتى الآن.
                    دكتوراة # 1: Centeral South University، China، 2013.

                    · ماجستير. رقم 2: قسم علوم الحاسوب ، كلية العلوم ، الجامعة المستنصرية ، بغداد ،

                    العراق 2005.

                    · بكالوريوس. رقم 3: قسم علوم الحاسوب ، الجامعة التكنولوجية ، بغداد ، العراق ، 1987.</p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="/user_image/photo_2021-05-26_18-44-37.jpg" alt="">
                    <div class="user-info">
                        <h4>أ.د. محمد فرج شذر </h4>
                        <small>dr.marjani@uomustansiriyah.edu.iq</small>
                    </div>
                </div>
                <p> عميد كلية العلوم الجامعة المستنصرية

                    أن مجال أهتمامي البحثي هو ضمن وراثة البكتريا المرضية ومقاومة البكتريا للمضادات الحيوية ويسعدني التعاون
                    مع اي باحث ضمن هذا التخصص
                    I am interest in Bacterial Genetics and Antibiotic resistance</p>
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
                        <li><a href="https://www.instagram.com/startt__up/" class="insta" title="Instagram"
                                data-aos="fade-up" data-aos-delay="20"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/startt__up-108291684751507/?ref=pages_you_manage" class="face"
                                title="Facebook" data-aos="fade-up" data-aos-delay="40"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://twitter.com/Aliluy5" class="twit" title="Twitter" data-aos="fade-up"
                                data-aos-delay="60"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="mailto:startt.up.company@gmail.com" class="google" title="Google +" data-aos="fade-up"
                                data-aos-delay="80"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin" title="Linkedin" data-aos="fade-up" data-aos-delay="100"><i
                                    class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
        </div>
    </div>

@endsection

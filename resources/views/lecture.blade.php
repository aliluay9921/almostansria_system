@extends('layouts.userlayout')
@if (empty($infolecture[0]))
    <div class="container mt-5 mr-5 p-5  text-center">
        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-danger" role="alert">
                    لاتوجد محاضرات في الوقت الحالي
                </div>
            </div>
        </div>
    </div>
@else
    @section('usercontent')

        <link rel="stylesheet" href="/css/videoCss.css">
        <nav class="container-fluid fixed-top bg-white pt-2" id="top_nav">
            <div class="row">
                <div class="col-4 pl-4">
                    <a class="navbar-brand" href="#"><img src="/image/1611611143.Asset 1@8x.png">START UP</a>
                </div>
                <div class=" col-4">

                </div>

            </div>
        </nav>


        <!-- mobile top navbar -->
        <nav class="container-fluid fixed-top bg-white pt-3" id="top_nav_mobile">
            <div class="row">
                <div class="col-3 pl-4">
                    <a class="navbar-brand" href="index.html"><img src="/image/1611611143.Asset 1@8x.png" class="mb-2"></a>
                </div>
                <div class="col-7">

                </div>
                <div class="col-2 text-right">
                    <a href="login.html"><i class="fas fa-user-circle" style="font-size: 30px;"></i></a>
                </div>
            </div>
        </nav>
        <div class="ks-khaltk watch_video ">
            <div class="row pt-4">
                <div class="col-md-8 video_box vidd-container">
                    <iframe id="vid_frame" class="video_responsive ifram" width="100%" height="100%"
                        src="https://www.youtube.com/embed/{{ $infolecture[0]->link }}" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <div class="p-1 pt-3">
                        <div class="title" id="title">{{ $infolecture[0]->title }}</div>
                        <div class="row mt-2 border-bottom">
                        </div>
                        <div class="row mt-4 border-bottom ">
                            <div class="col-1 pr-0 w-2 text-right">
                                <img id="img" width="48" src='/user_image/{{ $infolecture[0]->users->image }}'
                                    class="rounded-circle">
                            </div>
                            <div class="col-9 pl-0">
                                <p style="color:#303030;">
                                    <b>{{ $infolecture[0]->materials->title }}</b> <i class="fas fa-check-circle"></i><br>
                                    <span style="color:#606060">{{ $infolecture[0]->users->name }}</span>
                                </p>
                                <p>المحاضرات الالكترونية لقسم علوم الحاسوب
                                    <br><span id="dots">...</span>
                                    <span id="des-p">{{ $infolecture[0]->desc }}</span>
                                </p>
                                <button onclick="myFunction()" id="myBtn" class="btn">SHOW MORE</button>
                            </div>
                            <div class="col-2 text-right">

                                <a id="code_download" href="{{ route('download', $infolecture[0]->code) }}"
                                    class="btn btn-danger  ">تحميل
                                    الكود</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-6 mb-3">Up Next</div>

                    </div>
                    @foreach ($infolecture as $item)
                        <div class="ks-khaltk video_list">
                            <a href="#">
                                <div class="ks-ekhtk">
                                    <div class="row  p-0">
                                        <div class="col-md-5">
                                            <a href="javascript:void();"
                                                onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/{{ $item->link }}'
                                                                                                                document.getElementById('img').src='/user_image/{{ $item->users->image }}'
                                                                                                                document.getElementById('title').textContent='{{ $item->title }}'
                                                                                                                document.getElementById('des-p').textContent='{{ $item->desc }}'
                                                                                                                document.getElementById('des-tech').textContent='{{ $item->users->name }}' 
                                                                                                                document.getElementById('code_download').textContent='{{ $item->code }}' ">
                                                {{-- <span class="vidd-thumb video_list_responsive"><img
                                                    src="/image/{{ $item->image }}" width="100%" height="100%" /></span> --}}
                                                <span class=" vidd-thumb video_list_responsive"><img
                                                        src="https://img.youtube.com/vi/{{ $item->link }}/default.jpg"
                                                        width="100%" height="100%" /></span>
                                            </a>
                                        </div>
                                        <div class="col-md-7  p-0">
                                            <p class="mb-1 tit">
                                                {{ $item->title }}</p>
                                            <p style="color:#606060;">
                                                {{ $item->materials->title }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('.vid-item').each(function(index) {
                    $(this).on('click', function() {
                        var current_index = index + 1;
                        $('.vid-item .thumb').removeClass('active');
                        $('.vid-item:nth-child(' + current_index + ') .thumb').addClass('active');
                    });
                });
            });

        </script>

        <script>
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
            });

            function myFunction() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "SHOW MORE";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "SHOW LESS";
                    moreText.style.display = "inline";
                }
            }

        </script>

    @endsection
@endif

@extends('layouts.userlayout')

@section('usercontent')
    <div class="vidd-main-wrapper clearfix">

        <!-- THE YOUTUBE PLAYER -->

        <div class="vidd-container">
            <iframe id="vid_frame" src="https://www.youtube.com/embed/{{ $infolecture[0]->link }}" frameborder="0"
                width="560" height="315"></iframe>
            <div class="descrption">
                <h2 id="title">{{ $infolecture[0]->title }}</h2>
                <div id="profile-description">
                    <div class="text show-more-height">
                        <div class="photo-descrption">
                            <img id="img" class="photo-des" src='/user_image/{{ $infolecture[0]->users->image }}'>
                            <p id="des-p" class="des-p">{{ $infolecture[0]->materials->title }} </p>
                            <p id="des-tech" class="des-tech">{{ $infolecture[0]->users->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- THE PLAYLIST -->
        <div class="vidd-list-container">
            <ol id="vidd-list">
                @foreach ($infolecture as $item)

                    <li>
                        <a href="javascript:void();"
                            onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/{{ $item->link }}'
                                                                                document.getElementById('img').src='/user_image/{{ $item->users->image }}'
                                                                                document.getElementById('title').textContent='{{ $item->materials->title }}'
                                                                                document.getElementById('des-p').textContent='{{ $item->desc }}'
                                                                                document.getElementById('des-tech').textContent='{{ $item->users->name }}' ">
                            <span class="vidd-thumb"><img width=70px height="50px"
                                    src="/image/{{ $item->image }}" /></span>
                            <div class="descc">{{ $item->title }}</div>
                        </a>
                    </li>


                @endforeach

            </ol>

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

@endsection

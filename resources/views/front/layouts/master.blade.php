<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include('front.layouts.head')

<body>

<audio loop autoplay volume="1" id="audio-player"><source src="{{asset('storage')}}/{{home('home_audio')}}" type="audio/mpeg"></audio>

<!--Theme Options Start-->


<!-- Preloader -->
<div id="preloader">
    <div class="loading-area">
        <div class="circle"></div>
    </div>
    <div class="left-side"></div>
    <div class="right-side"></div>
</div>

<!-- Main Site -->
<div id="home">
    <div id="about">
        <div id="resume">
            <div id="portfolio">
                <div id="blog">
                    <div id="contact">

                        <div class="header-mobile">
                            <a class="header-toggle"><i class="fas fa-bars"></i></a>
                            <h2>باها</h2>
                        </div>

                        <!-- Left Block -->
                        @include('front.layouts.sidebar')

                      @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('front.layouts.scripts')


</body>

</html>

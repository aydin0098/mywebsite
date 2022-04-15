<nav class="header-main" data-simplebar>

    <!-- Logo -->
    @if(setting('site_logo'))
        <div class="logo">
            <img src="{{asset('front/img/logo.png')}}" alt="">
        </div>
    @elseif(setting('site_text_logo'))
        <div class="logo">
            <h1>{{setting('site_text_logo')}}</h1>
        </div>
    @endif

    <ul>
        <li data-tooltip="خانه" data-position="top">
            <a href="#home" class="icon-h fas fa-house-damage"></a>
        </li>
        <li data-tooltip="درباره" data-position="top">
            <a href="#about" class="icon-a fas fa-user-tie"></a>
        </li>
        <li data-tooltip="رزومه" data-position="top">
            <a href="#resume" class="icon-r fas fa-address-book"></a>
        </li>
        <li data-tooltip="نمونه‌کارها" data-position="top">
            <a href="#portfolio" class="icon-p fas fa-briefcase"></a>
        </li>
        <li data-tooltip="بلاگ" data-position="top">
            <a href="#blog" class="icon-b fas fa-receipt"></a>
        </li>
        <li data-tooltip="تماس" data-position="bottom">
            <a href="#contact" class="icon-c fas fa-envelope"></a>
        </li>
    </ul>

    <!-- Sound wave -->
    <a class="music-bg">
        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <p> صدا </p>
    </a>
</nav>

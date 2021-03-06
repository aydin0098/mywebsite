<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->
@include('admin.layouts.head')
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
@include('admin.layouts.header')
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">فایل ها</h6></a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="app-assets/images/icons/xls.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">دو مورد جدید ثبت شد</p><small class="text-muted">مدیر فروش</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small></a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 فایل عکس تهیه شده است</p><small class="text-muted">توسعه دهنده FrontEnd</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small></a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 فایل PDF بارگذاری شده است</p><small class="text-muted">مدیر دیجیتال مارکتینگ</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small></a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="app-assets/images/icons/doc.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">طراح وب سایت</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small></a></li>
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">اعضا</h6></a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">جواد محمدی</p><small class="text-muted">طراح رابط کاربری</small>
                </div>
            </div></a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">مسعود اصغرزاده</p><small class="text-muted">توسعه دهنده FrontEnd</small>
                </div>
            </div></a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">محمد نوریان</p><small class="text-muted">مدیر دیجیتال مارکتینگ</small>
                </div>
            </div></a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">هانیه برخوردار</p><small class="text-muted">طراح وب سایت</small>
                </div>
            </div></a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>نتیجه ای پیدا نشد</span></div></a></li>
</ul>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('admin.layouts.sidebar')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
     @yield('content')
    </div>
</div>
<!-- END: Content-->


@include('admin.layouts.scripts')

</body>
<!-- END: Body-->
</html>

@extends('dashboard::admin.layouts.master')
@section('title','بخش تنظیمات')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/plugins/forms/validation/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/tagsinput.css')}}">
@endsection
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">تنظیمات کلی</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">تنظیمات سایت</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">تنظیمات کلی</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body"><!-- account setting page start -->
        <section id="page-account-settings">
            <div class="row">
                <!-- left menu section -->
                <div class="col-md-3 mb-2 mb-md-0">
                    <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
                               href="#account-vertical-general" aria-expanded="true">
                                <i class="feather icon-globe mr-50 font-medium-3"></i> اطلاعات عمومی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                               href="#account-vertical-password" aria-expanded="false">
                                <i class="feather icon-lock mr-50 font-medium-3"></i> تنظیمات خدمات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill" href="#account-vertical-info"
                               aria-expanded="false">
                                <i class="feather icon-info mr-50 font-medium-3"></i> تنظیمات تجربیات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="pill" href="#account-vertical-social"
                               aria-expanded="false">
                                <i class="feather icon-camera mr-50 font-medium-3"></i> تنظیمات نمونه کارها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-connections" data-toggle="pill"
                               href="#account-vertical-connections" aria-expanded="false">
                                <i class="feather icon-feather mr-50 font-medium-3"></i> تنظیمات مقالات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-notifications" data-toggle="pill"
                               href="#account-vertical-notifications" aria-expanded="false">
                                <i class="feather icon-message-circle mr-50 font-medium-3"></i> تنظیمات تماس با من</a>
                        </li>
                    </ul>
                </div>
                <!-- right content section -->
                <div class="col-md-9">
                    <div class="card">

                        <div class="card-content">
                            @if(\Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert bg-success">
                                    <span class="text-white">{{\Illuminate\Support\Facades\Session::get('success')}}</span>
                                </div>
                            @endif
                            <div class="card-body">
                                @include('layouts.error')
                                <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data" novalidate>
                                    @csrf
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                         aria-labelledby="account-pill-general" aria-expanded="true">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>عنوان وبسایت</label>
                                                        <input type="text" name="site_name" class="form-control" value="{{ setting('site_title') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">آیکون</label>
                                                    <div class="custom-file">
                                                        <input type="file" accept="image/*" name="site_icon" class="custom-file-input">
                                                        <label class="custom-file-label" for="inputGroupFile01">{{ setting('site_icon') }}</label>
                                                    </div>
                                                </fieldset>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">لوگوی سایت</label>
                                                    <div class="custom-file">
                                                        <input type="file" accept="image/*" name="site_logo" class="custom-file-input">
                                                        <label class="custom-file-label" for="inputGroupFile01">{{ setting('site_logo') }}</label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">متن جایگزین لوگو ( اگر عکس لوگو بارگزاری نشده باشد متن جایگزین لوگو می شود )</label>
                                                    <div class="custom-file">
                                                        <input type="text" value="{{setting('site_text_logo')}}"  name="site_text_logo" class="form-control">

                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <div class="controls">
                                                        <label>ایمیل</label>
                                                        <input type="email" name="email" class="form-control" value="{{ setting('email') }}">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <div class="controls">
                                                        <label>تلفن</label>
                                                        <input type="number" name="phone" class="form-control" value="{{ setting('phone') }}">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <div class="controls">
                                                        <label>نام نویسنده سایت</label>
                                                        <input type="text" name="author" class="form-control" value="{{ setting('author') }}">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <div class="controls">
                                                        <label>شغل نویسنده سایت</label>
                                                        <input type="text" name="author_job" class="form-control" value="{{ setting('author_job') }}">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <div class="controls">
                                                        <label>متن کپی رایت</label>
                                                        <input type="text" name="copyright" class="form-control" value="{{ setting('copyright') }}">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <div class="controls">
                                                        <label>توضیحات سئو</label>
                                                        <textarea id="seo_description" name="seo_description" type="text" class="form-control" >{{ setting('seo_description') }}</textarea>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <div class="controls">
                                                        <label>کلمات کلیدی</label>
                                                        <input id="keywords" name="keywords" type="text" data-role="tagsinput" value="{{ setting('keywords')}}">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <div class="controls">
                                                        <label>کد های سفارشی</label>
                                                        <textarea id="plugins" name="plugins" type="text" class="form-control" >{{ setting('plugins') }}</textarea>
                                                    </div>
                                                </fieldset>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                                         aria-labelledby="account-pill-password" aria-expanded="false">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>عنوان سربرگ خدمات</label>
                                                        <input type="text" name="service_head" class="form-control" value="{{ setting('service_head') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">رنگ سکشن</label>
                                                    <div class="custom-file">
                                                        <input type="color" value="{{setting('service_color')}}"  name="service_color" class="form-control">

                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info"
                                         aria-expanded="false">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>عنوان سربرگ تجربیات</label>
                                                        <input type="text" name="work_head" class="form-control" value="{{ setting('work_head') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                                         aria-labelledby="account-pill-social" aria-expanded="false">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>عنوان سربرگ نمونه کارها</label>
                                                        <input type="text" name="portfolio_head" class="form-control" value="{{ setting('portfolio_head') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">رنگ سکشن</label>
                                                    <div class="custom-file">
                                                        <input type="color" value="{{setting('portfolio_color')}}"  name="portfolio_color" class="form-control">

                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                                         aria-labelledby="account-pill-connections" aria-expanded="false">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>عنوان سربرگ مقالات</label>
                                                        <input type="text" name="blog_head" class="form-control" value="{{ setting('blog_head') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>متن دکمه</label>
                                                        <input type="text" name="blog_btn" class="form-control" value="{{ setting('blog_btn') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                                         aria-labelledby="account-pill-notifications" aria-expanded="false">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>سربرگ تماس با من</label>
                                                        <input type="text" name="contact_head" class="form-control" value="{{ setting('contact_head') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>توضیح کوتاه تماس با من</label>
                                                        <input type="text" name="contact_desc" class="form-control" value="{{ setting('contact_desc') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>متن بالای فرم تماس</label>
                                                        <input type="text" name="contact_text_form" class="form-control" value="{{ setting('contact_text_form') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0"> ذخیره تغییرات</button>

                                </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- account setting page end -->

    </div>
@endsection
@section('scripts')
    <script src="{{asset('back/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('back/app-assets/js/scripts/pages/account-setting.min.js')}}"></script>
    <script src="{{asset('back/tagsinput.js')}}"></script>
    <script>
        $("#keywords").val()

    </script>
@endsection

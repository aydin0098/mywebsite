@extends('admin.layouts.master')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">طرح فرم</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">فرم ها</a>
                            </li>
                            <li class="breadcrumb-item active"><a href="#">طرح فرم</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
                <div class="dropdown">
                    <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">گفتگو</a><a class="dropdown-item" href="#">ایمیل</a><a class="dropdown-item" href="#">تقویم</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body"><!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">فرم افقی با آیکون</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>نام</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="first-name" class="form-control" name="fname" placeholder="نام">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>ایمیل</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="email" id="email-id" class="form-control" name="email-id" placeholder="ایمیل">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>تلفن همراه</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="number" id="contact-info" class="form-control" name="contact" placeholder="تلفن همراه">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>کلمه عبور</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="password" id="password" class="form-control" name="password" placeholder="کلمه عبور">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-8 offset-md-4">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check"></i>
                          </span>
                        </span>
                                                        <span class="">مرا به خاطر بسپار</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">ارسال</button>
                                                <button type="reset" class="btn btn-outline-warning mr-1 mb-1">تنظیم مجدد</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">فرم افقی با آیکون</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>نام</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="fname-icon" class="form-control" name="fname-icon" placeholder="نام">
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>ایمیل</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="email" id="email-icon" class="form-control" name="email-id-icon" placeholder="ایمیل">
                                                            <div class="form-control-position">
                                                                <i class="feather icon-mail"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>تلفن همراه</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="number" id="contact-icon" class="form-control" name="contact-icon" placeholder="تلفن همراه">
                                                            <div class="form-control-position">
                                                                <i class="feather icon-smartphone"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>کلمه عبور</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="password" id="pass-icon" class="form-control" name="contact-icon" placeholder="کلمه عبور">
                                                            <div class="form-control-position">
                                                                <i class="feather icon-lock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-8 offset-md-4">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check"></i>
                          </span>
                        </span>
                                                        <span class="">مرا به خاطر بسپار</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">ارسال</button>
                                                <button type="reset" class="btn btn-outline-warning mr-1 mb-1">تنظیم مجدد</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Horizontal form layout section end -->

        <!-- Basic Vertical form layout section start -->
        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">فرم عمودی</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">نام</label>
                                                    <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="نام">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">ایمیل</label>
                                                    <input type="email" id="email-id-vertical" class="form-control" name="email-id" placeholder="ایمیل">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">تلفن همراه</label>
                                                    <input type="number" id="contact-info-vertical" class="form-control" name="contact" placeholder="تلفن همراه">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="password-vertical">کلمه عبور</label>
                                                    <input type="password" id="password-vertical" class="form-control" name="contact" placeholder="کلمه عبور">
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check"></i>
                          </span>
                        </span>
                                                        <span class="">مرا به خاطر بسپار</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">ارسال</button>
                                                <button type="reset" class="btn btn-outline-warning mr-1 mb-1">تنظیم مجدد</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">فرم عمودی  با آیکون</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon">نام</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="نام">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-icon">ایمیل</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="email" id="email-id-icon" class="form-control" name="email-id-icon" placeholder="ایمیل">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-mail"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-icon">تلفن همراه</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="number" id="contact-info-icon" class="form-control" name="contact-icon" placeholder="تلفن همراه">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-smartphone"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="password-icon">کلمه عبور</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="password" id="password-icon" class="form-control" name="contact-icon" placeholder="کلمه عبور">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check"></i>
                          </span>
                        </span>
                                                        <span class="">مرا به خاطر بسپار</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">ارسال</button>
                                                <button type="reset" class="btn btn-outline-warning mr-1 mb-1">تنظیم مجدد</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Vertical form layout section end -->

        <!-- // Basic Floating Label Form section start -->
        <section id="floating-label-layouts">
            <div class="row match-height">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">فرمی با برچسب placeholder</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="first-name-floating" class="form-control" placeholder="نام" name="fname-floating">
                                                    <label for="first-name-floating">نام</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="email" id="email-id-floating" class="form-control" name="email-id-floating" placeholder="ایمیل">
                                                    <label for="email-id-floating">ایمیل</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="number" id="contact-info-floating" class="form-control" name="contact-floating" placeholder="تلفن همراه">
                                                    <label for="contact-info-floating">تلفن همراه</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-label-group">
                                                    <input type="password" id="password-floating" class="form-control" name="contact-floating" placeholder="کلمه عبور">
                                                    <label for="password-floating">کلمه عبور</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check"></i>
                          </span>
                        </span>
                                                        <span class="">مرا به خاطر بسپار</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">ارسال</button>
                                                <button type="reset" class="btn btn-outline-warning mr-1 mb-1">تنظیم مجدد</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">فرمی با برچسب placeholder و آیکون</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-label-group position-relative has-icon-left">
                                                    <input type="text" id="first-name-floating-icon" class="form-control" name="fname-floating-icon" placeholder="نام">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                    <label for="first-name-floating-icon">نام</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-label-group position-relative has-icon-left">
                                                    <input type="email" id="email-id-floating-icon" class="form-control" name="email-id-floating-icon" placeholder="ایمیل">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-mail"></i>
                                                    </div>
                                                    <label for="email-id-floating-icon">ایمیل</label>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-label-group position-relative has-icon-left">
                                                    <input type="number" id="contact-floating-icon" class="form-control" name="contact-floating-icon" placeholder="تلفن همراه">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-smartphone"></i>
                                                    </div>
                                                    <label for="contact-floating-icon">تلفن همراه</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-label-group position-relative has-icon-left">
                                                    <input type="password" id="password-floating-icon" class="form-control" name="password-floating-icon" placeholder="کلمه عبور">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>
                                                    <label for="password-floating-icon">کلمه عبور</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check"></i>
                          </span>
                        </span>
                                                        <span class="">مرا به خاطر بسپار</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">ارسال</button>
                                                <button type="reset" class="btn btn-outline-warning mr-1 mb-1">تنظیم مجدد</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Floating Label Form section end -->

        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">چندین انتخابی ستونی</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="نام" name="fname-column">
                                                    <label for="first-name-column">نام</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="نام خانوادگی" name="lname-column">
                                                    <label for="last-name-column">نام خانوادگی</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="city-column" class="form-control" placeholder="شهر" name="city-column">
                                                    <label for="city-column">شهر</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="کشور">
                                                    <label for="country-floating">کشور</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="company-column" class="form-control" name="company-column" placeholder="شرکت">
                                                    <label for="company-column">شرکت</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-label-group">
                                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="ایمیل">
                                                    <label for="email-id-column">ایمیل</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check"></i>
                          </span>
                        </span>
                                                        <span class="">مرا به خاطر بسپار</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">ارسال</button>
                                                <button type="reset" class="btn btn-outline-warning mr-1 mb-1">تنظیم مجدد</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Floating Label Form section end -->

    </div>
@endsection

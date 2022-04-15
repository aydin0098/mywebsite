@extends('dashboard::admin.layouts.master')
@section('title','بخش درباره من')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb no-border">
                            <li class="breadcrumb-item">مدیریت
                            </li>
                            <li class="breadcrumb-item">بخش درباره من
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- users edit start -->
        <section class="users-edit">
            <div class="card">
                <div id="main-card" class="card-content">
                    <div class="card-body">
                        @include('layouts.error')

                        <div class="tab-content">

                            @if(\Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert bg-success">
                                    <span class="text-white">{{\Illuminate\Support\Facades\Session::get('success')}}</span>
                                </div>
                            @endif

                            <form id="information-form" action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>سربرگ درباره من</label>
                                                <input type="text" name="about_headline" class="form-control" value="{{ personal('about_headline') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">عکس درباره من ( ابعاد :626px در 630px )  </label>
                                            <div class="custom-file">
                                                <input type="file" accept="image/*" name="about_pic" class="custom-file-input">
                                                <label class="custom-file-label" for="inputGroupFile01">{{ personal('about_pic') }}</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>عنوان درباره من</label>
                                                <input type="text" name="about_title" class="form-control" value="{{ personal('about_title') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>نام فریلنسر</label>
                                                <input type="text" name="about_name" class="form-control" value="{{ personal('about_name') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="controls">
                                                <label>متن درباره من</label>
                                                <textarea type="text" name="about_description" class="form-control">{{ personal('about_description') }}</textarea>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>رنگ پس زمینه</label>
                                                <input type="color" name="about_color" class="form-control" value="{{ personal('about_color') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>تلفن</label>
                                                <input type="text" name="about_phone" class="form-control" value="{{ personal('about_phone') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>واتساپ</label>
                                                <input type="text" name="about_whatsapp" class="form-control" value="{{ personal('about_whatsapp') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>ایمیل</label>
                                                <input type="text" name="about_email" class="form-control" value="{{ personal('about_email') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>شغل</label>
                                                <input type="text" name="about_job" class="form-control" value="{{ personal('about_job') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>تاریخ تولد (مثلا : یک فروردین 1378)</label>
                                                <input type="text" name="about_birth" class="form-control" value="{{ personal('about_birth') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>سن</label>
                                                <input type="text" name="about_age" class="form-control" value="{{ personal('about_age') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>تعداد پروژه های انجام شده</label>
                                                <input type="text" name="about_portfolio" class="form-control" value="{{ personal('about_portfolio') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>میزان تجربه بر حسب سال</label>
                                                <input type="text" name="about_edu" class="form-control" value="{{ personal('about_edu') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>وضعیت فریلنسر</label>
                                                <select class="form-control" name="about_work">
                                                    @if(personal('about_work')==0)
                                                    <option value="0" selected>اماده کار</option>
                                                    <option value="1">در حال انجام پروژه</option>
                                                    @else
                                                        <option value="0">اماده کار</option>
                                                        <option value="1" selected>در حال انجام پروژه</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>ادرس</label>
                                                <textarea type="text" name="about_address" class="form-control">{{ personal('about_address') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                        </div>

                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                            <button type="submit" class="btn btn-primary glow">ذخیره تغییرات</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- users edit ends -->

    </div>
@endsection

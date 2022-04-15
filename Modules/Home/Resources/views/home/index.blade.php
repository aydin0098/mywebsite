@extends('dashboard::admin.layouts.master')
@section('title','بخش خانه')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb no-border">
                            <li class="breadcrumb-item">مدیریت
                            </li>
                            <li class="breadcrumb-item">بخش خانه
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
                        <a class="btn-sm btn-primary float-right" href="{{route('typings.index')}}">بخش نوشته ها</a>
                        @include('layouts.error')
                        <div class="tab-content">

                            @if(\Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert bg-success">
                                    <span class="text-white">{{\Illuminate\Support\Facades\Session::get('success')}}</span>
                                </div>
                            @endif

                            <form id="information-form" action="{{ route('admin.home.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>نام فریلنسر</label>
                                                <input type="text" name="home_freelancer" class="form-control" value="{{ home('home_freelancer') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>سرتیتر عنوان</label>
                                                <input type="text" name="home_headline" class="form-control" value="{{ home('home_headline') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>تیتر برگه خانه</label>
                                                <input type="text" name="home_title" class="form-control" value="{{ home('home_title') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">عکس خانه (ابعاد :2500px در 1404px  ) </label>
                                            <div class="custom-file">
                                                <input type="file" accept="image/*" name="home_pic" class="custom-file-input">
                                                <label class="custom-file-label" for="inputGroupFile01">{{ home('home_pic') }}</label>
                                            </div>
                                        </fieldset>

                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">فایل رزومه</label>
                                            <div class="custom-file">
                                                <input type="file" accept="image/*" name="home_cv" class="custom-file-input">
                                                <label class="custom-file-label" for="inputGroupFile01">{{ home('home_cv') }}</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">فایل موسیقی</label>
                                            <div class="custom-file">
                                                <input type="file" name="home_audio" class="custom-file-input">
                                                <label class="custom-file-label" for="inputGroupFile01">{{ home('home_audio') }}</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="controls">
                                                <label>توضیحات برگه خانه</label>
                                                <textarea type="text" name="home_description" class="form-control">{{ home('home_description') }}</textarea>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>رنگ پس زمینه</label>
                                                <input type="color" name="home_color" class="form-control" value="{{ home('home_color') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>شغل</label>
                                                <input type="text" name="home_job" class="form-control" value="{{ home('home_job') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="controls">
                                                <label>تخصص های شما ( با | جدا کنید)</label>
                                                <textarea type="text" name="home_footer" class="form-control">{{ home('home_footer') }}</textarea>
                                            </div>
                                        </fieldset>
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

@extends('dashboard::admin.layouts.master')
@section('title','مقاله جدید')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/forms/select/select2.min.css')}}">
@endsection
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb no-border">
                            <li class="breadcrumb-item">مدیریت
                            </li>
                            <li class="breadcrumb-item">مقالات
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

                            <form id="information-form" action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">عکس مقاله ( ابعاد : 992px در 661px ) </label>
                                            <div class="custom-file">
                                                <input type="file" accept="image/*" name="image" class="custom-file-input">
                                                <label class="custom-file-label" for="inputGroupFile01"></label>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>عنوان مقاله</label>
                                                <input type="text" name="title" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>عنوان مقاله</label>
                                                <textarea type="text" name="description" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="controls">
                                                <label>دسته بندی</label>
                                                <select class="select2 form-control" name="category_id[]" multiple="multiple">
                                                    @foreach(\Modules\Category\Entities\Category::all() as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>کلمات کلیدی</label>
                                                <input type="text" name="keywords" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="controls">
                                                <label>دسته بندی</label>
                                                <input type="text" name="tags" class="form-control">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="controls">
                                                <label>وضعیت</label>
                                                <select class="select2 form-control" name="status">

                                                        <option value="0">پیش نویس</option>
                                                        <option value="1">منتشر شده</option>

                                                </select>
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
@section('scripts')
    <script src="{{asset('back/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('back/app-assets/js/scripts/forms/select/form-select2.min.js')}}"></script>
@endsection

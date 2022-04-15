@extends('dashboard::admin.layouts.master')
@section('title','ویرایش سرویس')
@section('styles')
    <link rel="stylesheet" href="{{asset('back/app-assets/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/app-assets/iconpicker-1.5.0.css')}}">
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
                            <li class="breadcrumb-item">خدمات
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

                        <h3>ویرایش سرویس {{$service->title}}</h3>
                        @include('layouts.error')

                        <div class="tab-content">

                            @if(\Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert bg-success">
                                    <span class="text-white">{{\Illuminate\Support\Facades\Session::get('success')}}</span>
                                </div>
                            @endif

                            <form id="information-form" action="{{ route('services.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="position-relative has-icon-left d-flex">
                                            <input type="text" class="form-control" id="IconInput" name="icon" placeholder="ایکون" autocomplete="on" value="{{$service->icon}}">
                                            <button class="btn btn-sm btn-primary" type="button" id="GetIconPicker" data-iconpicker-input="input#IconInput" data-iconpicker-preview="i#IconPreview">انتخاب ایکون</button>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>عنوان نمونه کار</label>
                                                <input type="text" name="title" value="{{$service->title}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="controls">
                                                <label>توضیحات نمونه کار</label>
                                                <textarea type="text" name="description" class="form-control">{{$service->description}}</textarea>
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
    <script src="{{asset('back/app-assets/iconpicker-1.5.0.js')}}"></script>
    <script>

        // Default options
        IconPicker.Init({
            // Required: You have to set the path of IconPicker JSON file to "jsonUrl" option. e.g. '/content/plugins/IconPicker/dist/iconpicker-1.5.0.json'
            jsonUrl: '{{asset('back/app-assets/iconpicker-1.5.0.json')}}',
            // Optional: Change the buttons or search placeholder text according to the language.
            searchPlaceholder: 'Search Icon',
            showAllButton: 'Show All',
            cancelButton: 'Cancel',
            borderRadius: '20px', // v1.5.0 and the next versions
        });

        IconPicker.Run('#GetIconPicker');


    </script>
@endsection

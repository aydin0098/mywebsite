@extends('dashboard::admin.layouts.master')
@section('title','ویرایش نقش')
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
                            <li class="breadcrumb-item"> نقش ها
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
                        <div class="card-header">ویرایش نقش {{$role->label}}</div>

                        <div class="tab-content">

                            @if(\Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert bg-success">
                                    <span class="text-white">{{\Illuminate\Support\Facades\Session::get('success')}}</span>
                                </div>
                            @endif

                            <form id="information-form" action="{{ route('roles.update',$role->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>نام نقش به لاتین</label>
                                                <input type="text" value="{{$role->name}}" name="name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="controls">
                                                <label>توضیحات</label>
                                                <input type="text" value="{{$role->label}}" name="label" class="form-control">
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


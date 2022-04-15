@extends('dashboard::admin.layouts.master')
@section('title','ویرایش پروفایل')
@section('content')
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- users edit start -->
        <section class="users-edit">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        @include('layouts.error')
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account"
                                   aria-controls="account" role="tab" aria-selected="true">
                                    <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">حساب</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            @if(\Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert bg-success">
                                    <span class="text-white">{{\Illuminate\Support\Facades\Session::get('success')}}</span>
                                </div>
                            @endif
                            <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                <!-- users edit media object start -->
                                <div class="media mb-2">
                                    <a class="mr-2 my-25" href="#">
                                        <img src="{{asset('storage')}}/{{auth()->user()->image}}" alt="users avatar"
                                             class="users-avatar-shadow rounded" height="90" width="90">
                                    </a>

                                </div>
                                <!-- users edit media object ends -->
                                <!-- users edit account form start -->
                                <form action="{{route('admin.profile.update',auth()->user()->id)}}" method="post" enctype="multipart/form-data" novalidate>
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>اپلود اواتار</label>
                                                    <input type="file" class="form-control"
                                                           name="image">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>نام کاربری</label>
                                                    <input type="text" class="form-control" placeholder="نام کاربری" value="{{auth()->user()->name}}"
                                                        name="name">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>پست الکترونیک</label>
                                                    <input type="email" class="form-control" placeholder="ایمیل" value="{{auth()->user()->email}}"
                                                           name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>رمز عبور</label>
                                                    <input type="password" class="form-control" placeholder="رمز عبور" name="password"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"> ذخیره تغییرات</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- users edit account form ends -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- users edit ends -->

    </div>
@endsection

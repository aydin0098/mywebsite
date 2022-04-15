@extends('layouts.app')
@section('title','تعیین رمز جدید')
@section('content')
    <div class="col-xl-7 col-10 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0 w-100">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center p-0">
                    <img src="{{asset('back/app-assets/images/pages/reset-password.png')}}" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">بازنشانی گذرواژه</h4>
                            </div>
                        </div>
                        <p class="px-2">لطفاً رمز جدید خود را وارد کنید</p>
                        <div class="card-content">
                            <div class="card-body pt-1">
                                @include('layouts.error')
                                <form action="{{route('password.update')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <fieldset class="form-label-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <label for="email">ایمیل</label>
                                    </fieldset>

                                    <fieldset class="form-label-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <label for="password">کلمه عبور</label>
                                    </fieldset>

                                    <fieldset class="form-label-group">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                        <label for="password-confirm">رمز عبور را تأیید کنید</label>
                                    </fieldset>
                                    <div class="row pt-2">
                                        <div class="col-12 col-md-6 mb-1">
                                            <a href="{{route('login')}}"
                                               class="btn btn-outline-primary btn-block px-0">بازگشت به قسمت
                                                ورود</a>
                                        </div>
                                        <div class="col-12 col-md-6 mb-1">
                                            <button type="submit" class="btn btn-primary btn-block px-0">
                                                تنظیم رمز عبور
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

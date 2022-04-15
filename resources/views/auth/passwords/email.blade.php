@extends('layouts.app')
@section('title','بازیابی رمز عبور')
@section('content')
    <div class="col-xl-7 col-md-9 col-10 d-flex justify-content-center px-0">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center">
                    <img src="{{asset('back/app-assets/images/pages/forgot-password.png')}}" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2 py-1">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">بازیابی رمز عبور</h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                    @include('layouts.error')
                                <form id="resetForm" action="{{route('password.email')}}" method="post">
                                    @csrf
                                    <div class="form-label-group">
                                        <input type="email" name="email"  id="inputEmail" class="form-control @error('email') is-invalid @enderror"
                                               placeholder="ایمیل">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <label for="inputEmail">ایمیل</label>
                                    </div>
                                    <div class="float-md-right d-block mb-1">
                                        <button type="submit" class="btn btn-primary btn-block px-75">بازیابی رمز عبور</button>
                                    </div>
                                </form>
                                <div class="float-md-left d-block mb-1">
                                    <a href="{{route('login')}}"
                                       class="btn btn-outline-primary btn-block px-75">بازگشت به صفحه
                                        ورود</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



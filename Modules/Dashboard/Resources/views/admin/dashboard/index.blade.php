@extends('dashboard::admin.layouts.master')
@section('title','پیشخوان')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/pages/dashboard-ecommerce.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css-rtl/pages/card-analytics.min.css')}}">
@endsection
@section('content')
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- Dashboard Ecommerce Starts -->
        <section id="dashboard-ecommerce">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="fa fa-book text-primary font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1">{{\Modules\Article\Entities\Article::count()}}</h2>
                            <p class="mb-0">مقالات منتشر شده</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-success p-50 m-0">
                                <div class="avatar-content">
                                    <i class="fa fa-book text-success font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1">{{\Modules\Article\Entities\Article::where('status',0)->count()}}</h2>
                            <p class="mb-0">مقالات در دست بررسی</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-danger p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-box text-danger font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1">{{\Modules\Portfolio\Entities\Portfolio::count()}}</h2>
                            <p class="mb-0">تعداد نمونه کارها</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-warning p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-message-circle text-warning font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1">{{\Modules\Contact\Entities\Contact::count()}}</h2>
                            <p class="mb-0">تعداد نظرات</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dashboard Ecommerce ends -->

    </div>
@endsection
@section('scripts')
    <script src="{{asset('back/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('back/app-assets/js/scripts/pages/dashboard-ecommerce.min.js')}}"></script>
@endsection

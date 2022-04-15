<div class="page pt-about" data-simplebar>
    <section class="container">

        <!-- Section Title -->
        <div class="header-page mt-70 mob-mt">
            <h2>{{personal('about_headline')}}</h2>
            <span></span>
        </div>

        <!-- Personal Info Start -->
        <div class="row mt-100">

            <!-- Information Block -->
            <div class="col-lg-12 col-sm-12">
                <div class="info box-1">
                    <div class="row">
                        <div class="col-lg-3 col-sm-4">
                            <div class="photo">
                                <img alt="" src="{{asset('storage')}}/{{personal('about_pic')}}">
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-8">
                            <h4>{{personal('about_name')}}</h4>
                            <div class="loc">
                                <i class="fas fa-map-marked-alt"></i> {{personal('about_address')}}
                            </div>
                            <p>{{personal('about_description')}}</p>

                        </div>

                        <!-- Icon Info -->
                        <div class="col-lg-3 col-sm-4">
                            <div class="info-icon">
                                <i class="fas fa-award"></i>
                                <div class="desc-icon">
                                    <h6>{{personal('about_edu')}} سال</h6>
                                    <p>تجربه</p>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Info -->
                        <div class="col-lg-3 col-sm-4">
                            <div class="info-icon">
                                <i class="fas fa-certificate"></i>
                                <div class="desc-icon">
                                    <h6>{{personal('about_portfolio')}}+ پروژه</h6>
                                    <p>اتمام یافته</p>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Info -->
                        <div class="col-lg-3 col-sm-4">
                            <div class="info-icon">
                                <i class="fas fa-user-astronaut"></i>
                                <div class="desc-icon">
                                    <h6>فریلنس</h6>
                                    @if(personal('about_work')==0)
                                    <p>اماده کار</p>
                                    @else
                                    <p>در حال انجام پروژه</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 pt-50">
                            <a href="{{asset('storage')}}/{{home('home_cv')}}" class="btn-st">دریافت رزومه</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Interests Row Start -->
        <div class="row mt-100">

            <!-- Header Block -->
            <div class="col-md-12">
                <div class="header-box mb-50">
                    <h3>علایق من</h3>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12">
                <div class="box-2">
                    <div class="row">
                        <!-- Interests Item -->
                        @foreach(\Modules\Favorite\Entities\Favorite::all() as $job)
                        <div class="col-lg-3 col-sm-6">
                            <div class="inter-icon">
                                <i class="{{$job->icon}}"></i>
                                <div class="desc-inter">
                                    <h6>{{$job->title}}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <!-- Service Row Start -->
        <div class="row mt-100">

            <!-- Header Block -->
            <div class="col-md-12">
                <div class="header-box mb-50">
                    <h3>خدمات</h3>
                </div>
            </div>

            <!-- Service Item -->
            @foreach(\Modules\Services\Entities\Service::all() as $service)
            <div class="col-lg-6 col-sm-6">
                <div class="service box-1 mb-40">
                    <i class="{{$service->icon}}"></i>
                    <h4>{{$service->title}}</h4>
                    <p>{{$service->description}}</p>
                </div>
            </div>
            @endforeach

        </div>

        <!-- Testimonial Row Start -->


    </section>
</div>

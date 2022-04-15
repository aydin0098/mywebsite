<div class="page pt-resume" data-simplebar>
    <section class="container">

        <!-- Section Title -->
        <div class="header-page mt-70 mob-mt">
            <h2>رزومه</h2>
            <span></span>
        </div>

        <!-- Experience & Education Row Start -->
        <div class="row mt-100">

            <!-- Experience Column Start -->
            <div class="col-lg-6 col-sm-12">

                <!-- Header Block -->
                <div class="header-box mb-50">
                    <h3>سوابق کاری</h3>
                </div>

                <div class="experience box-1">

                    <!-- Experience Item -->
                    @foreach($jobs as $job)
                    <div class="item">
                        <div class="main">
                            <h4>{{$job->title}}</h4>
                            <p><i class="far fa-calendar-alt"></i>{{$job->start_date}} - {{$job->end_date}} | {{$job->office}}</p>
                        </div>
                    <p>{{$job->description}}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Education Column Start -->
            <div class="col-lg-6 col-sm-12">

                <!-- Header Block -->
                <div class="header-box mb-50 mob-box-mt">
                    <h3>سوابق تحصیلی</h3>
                </div>

                <div class="experience box-2">

                    <!-- Education Item -->
                    @foreach($educations as $edu)
                    <div class="item">
                        <div class="main">
                            <h4>{{$edu->title}}</h4>
                            <p><i class="far fa-calendar-alt"></i> {{$edu->description}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Skills Row Start -->
        <div class="row mt-100">

            <!-- Header Block -->
            <div class="col-md-12">
                <div class="header-box mb-50">
                    <h3>مهارت ها</h3>
                </div>
            </div>
        </div>

        <div class="box-1 skills">
            <div class="row">
                <div class="col-md-6">

                    <!-- Skill Item -->
                    @foreach($skills as $skill)
                    <div class="skill-item">
                        <h4 class="progress-title">{{$skill->title}}</h4>
                        <div class="progress">
                            <div class="progress-bar" style="width:{{$skill->average}}%">
                                <div class="progress-value">{{$skill->average}}%</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="col-md-6">
                    <div class="row">

                        <!-- Skill Item -->
                        @foreach($skills as $skill)
                        <div class="col-lg-6 col-sm-6 skill-chart">
                            <div class="chart" data-percent="{{$skill->average}}" data-bar-color="#fff"> {{$skill->average}}% <p>{{$skill->title}}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <!-- Work Process Row Start -->
        <div class="row mt-100">

            <!-- Header Block -->
        </div>
    </section>
</div>

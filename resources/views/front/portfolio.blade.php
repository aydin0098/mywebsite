<div class="page pt-portfolio" data-simplebar>
    <section class="container">

        <!-- Section Title -->
        <div class="header-page mt-70 mob-mt">
            <h2>نمونه‌کارها</h2>
            <span></span>
        </div>

        <!-- Portfolio Filter Row Start -->
        <div class="row mt-100">
            <div class="col-lg-12 col-sm-12 portfolio-filter">
                <ul>
                    <li class="active" data-filter="*">همه</li>
                    @foreach($category as $cat)
                    <li data-filter=".{{$cat->id}}">{{$cat->title}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Portfolio Item Row Start -->
        <div class="row portfolio-items mt-100 mb-100">

            <!-- Portfolio Item -->
            @foreach($category as $c)
                @foreach($c->portfolios()->get() as $p)
            <div class="item col-lg-4 col-sm-6 {{$c->id}}">
                <figure>
                    <img alt="" src="{{asset('storage')}}/{{$p->image}}">
                    <figcaption>
                        <h3>{{$p->title}}</h3>
                        <p>{{$c->title}}</p><i class="fas fa-image"></i>
                        <a class="image-link" href="{{asset('storage')}}/{{$p->image}}"></a>
                    </figcaption>
                </figure>
            </div>
                @endforeach
            @endforeach
        </div>
    </section>
</div>

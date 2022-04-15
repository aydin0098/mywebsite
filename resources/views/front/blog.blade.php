<div class="page pt-blog" data-simplebar>
    <section class="container">

        <!-- Section Title -->
        <div class="header-page mt-70 mob-mt">
            <h2>بلاگ</h2>
            <span></span>
        </div>

        <!-- Blog Row Start -->
        <div class="row blog-masonry mt-100 mb-50">

            <!-- Blog Item -->
            @foreach($articles as $article)
            <div class="col-lg-4 col-sm-6">
                <div class="blog-item">
                    <div class="thumbnail">
                        <a href="{{route('blog.single',$article->id)}}"><img alt="" src="{{asset('storage')}}/{{$article->image}}"></a>
                    </div>
                    <h4><a href="{{route('blog.single',$article->id)}}">{{$article->title}}</a></h4>
                    <ul>
                        <li><a href="#">{{jdate($article->created_at)->format('%A, %d %B %Y')}}</a></li>
                        <li><a href="#">{{$article->categories()->value('title')}}</a></li>
                    </ul>
                    <div class="blog-btn">
                        <a href="{{route('blog.single',$article->id)}}" class="btn-st">بیشتر بخوانید</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row mt-60 mb-90">
            <div class="col-lg-12 col-sm-12 text-center">
                <a href="{{route('blog.index')}}" class="btn-st">مشاهده همه مطالب بلاگ</a>
            </div>
        </div>

    </section>
</div>

<div class="pt-home" style="background-image: url('{{asset('storage')}}/{{home('home_pic')}}');background-size: cover">
    <section>

        <!-- Banner -->
        <div class="banner">
            <h1>{{home('home_title')}}</h1>
            <p class="cd-headline rotate-1">
                <span class="cd-words-wrapper">
                    @foreach(\Modules\Home\Entities\Typing::all() as $key=>$type)
                    <b class="{{$key==0 ? 'is-visible' : ''}}">{{$type->name}}</b>
                    @endforeach
                </span>
            </p>
        </div>


        <!-- Social -->
        <div class="social">
            <ul>
                @foreach(\Modules\Social\Entities\Social::all() as $social)
                <li><a href="{{$social->link}}"><i class="{{$social->icon}}"></i></a></li>
                @endforeach
            </ul>
        </div>
    </section>
</div>

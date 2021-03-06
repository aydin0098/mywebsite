<div class="page pt-contact" data-simplebar>
    <section class="container">

        <!-- Section Title -->
        <div class="header-page mt-70 mob-mt">
            <h2>تماس</h2>
            <span></span>
        </div>

        <!-- Form Start -->
        <div class="row mt-100">
            <div class="col-lg-12 col-sm-12">
                <div class="contact-form ">
                    <form action="{{route('contact.post')}}" method="post" class="box-1 contact-valid" id="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="نام *">
                            </div>
                            <div class="col-lg-6 col-sm-12 mt-3 mt-lg-0">
                                <input type="email" name="email" id="email" class="form-control" placeholder="* ایمیل" dir="ltr">
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <textarea class="form-control" name="comment" id="note" placeholder="پیام شما"></textarea>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-center">
                                <button type="submit" class="btn-st">ارسال پیام</button>
                                <div id="loader">
                                    <i class="fas fa-sync"></i>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="error-messages">
                                    <div id="success">
                                        <i class="far fa-check-circle"></i>متشکریم، پیام شما ارسال شد.
                                    </div>
                                    <div id="error">
                                        <i class="far fa-times-circle"></i>خطایی در هنگام ارسال ایمیل رخ داد. لطفا مجدد تلاش کنید.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="box-2 contact-info">
            <div class="row">
                <div class="col-lg-4 col-sm-12 info">
                    <i class="fas fa-paper-plane"></i>
                    <p>example@example.com</p>
                    <span>ایمیل</span>
                </div>
                <div class="col-lg-4 col-sm-12 info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>تبریز، فلکه دانشگاه، برج بلور، طبقه 567</p>
                    <span>آدرس</span>
                </div>
                <div class="col-lg-4 col-sm-12 info">
                    <i class="fas fa-phone"></i>
                    <p><span class="ltr-text">(+98) 123 456 7890</span></p>
                    <span>تلفن</span>
                </div>
            </div>
        </div>

        <!--Google Map Start-->
        <div class="google-map box-1 mt-100 mb-100">
            <div class="row">
                <div class="col-lg-12">
                    <div id="map" data-latitude="40.712775" data-longitude="-74.005973" data-zoom="14"></div>
                </div>
            </div>
        </div>
    </section>
</div>

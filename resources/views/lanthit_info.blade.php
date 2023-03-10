@extends('layouts.main')
@section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>

    </div>

    <section class="portfolio-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-details__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15270.791837318397!2d96.11381380000002!3d16.89082943602387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9c75e4d568eb20a1!2sPRO%201%20Global%20Home%20Center%20-%20Lanthit%20Branch%20(Insein)!5e0!3m2!1sen!2smm!4v1657271276010!5m2!1sen!2smm"
                            width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="portfolio-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details__content-left">
                            <div>&nbsp;{{__('home.center_lanthit3')}}</div>
                            <div>&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;{{__('home.center_lanthit4')}}</div>
                            <div>&nbsp;<i class="fa-solid fa-clock"></i>&nbsp;{{__('home.center_lanthit5')}}</div>
                            <div>&nbsp;<i class="fa-solid fa-phone-flip"></i>&nbsp;09-777000942, 09-777000943</div>

                        </div>

                    </div>
                </div>

            </div>
    </section>
@endsection

<div class="menu" id="planning">
    <a href="#" class="btn-menu-back visible-xs visible-sm">Назад</a>
    <div class="row">
        <div class="col-sm-5 col-md-3 col-lg-3">
            {{--{{dd($data['categories'])}}--}}
            <ul class="menu__nav mb-4 menu-trig">
                @foreach($data['categories'] as $category)
                    @if($category['data_menu'] == 'planning' & $category['left_sidebar_menu'] != 0)
                        @foreach($category['left_sidebar_menu'] as $left_sidebar_menu)
                            <li><a href="#">{{$left_sidebar_menu['title']}}</a></li>
                            @if($left_sidebar_menu['children'] & $left_sidebar_menu['left_sidebar_droopdown'])
                                @foreach($left_sidebar_menu['left_sidebar_droopdown'] as $left_sidebar_droopdown)
                                    <ul class="dropdown">
                                        <li>
                                            <a class="" href="#">{{$left_sidebar_droopdown['title']}}</a>
                                        </li>
                                    </ul>
                                @endforeach
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>
            <div class="col-xs-12 col-md-6">
                <div class="popup-socials">
                    <span class="mr-2 fw-bold visible-md-inline-block">Слідкуй за нами</span>
                    <ul class="social">
                        <li>
                            <a href="#" class="btn-social"><i class="fa fa-facebook-official"
                                                              aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social"><i class="fa fa-instagram"
                                                              aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social"><i class="fa fa-twitter-square"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social"><i class="fa fa-google-plus-square"
                                                              aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-7 col-md-9 col-lg-9 hidden-xs">
            <div class="row">
                <h3>До Львова</h3>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <a href="#" class="card card__moded">
                        <div class="card__img card-img-now card-img-now-planning">
                            <img src="images/icons/icon-plane.svg" data-lg="images/icons/icons-plane.svg"
                                 data-md="images/card-image-1.jpg" data-sm="images/card-image-1.jpg"
                                 alt="" class="blurryload card__img_plane">
                        </div>
                        <div class="card__overlay card__overlay_moded">
                            <div class="card__description card__description_card">
                                <div class="card__title">Літак</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <a href="#" class="card card__moded">
                        <div class="card__img card-img-now card-img-now-planning">
                            <img src="images/icons/icon-train.svg" data-lg="images/card-image-1.jpg"
                                 data-md="images/card-image-1.jpg" data-sm="images/card-image-1.jpg"
                                 alt="" class="blurryload card__img_train">
                        </div>
                        <div class="card__overlay card__overlay_moded">
                            <div class="card__description card__description_card">
                                <div class="card__title">Поїзд</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <a href="#" class="card card__moded">
                        <div class="card__img card-img-now card-img-now-planning">
                            <img src="images/icons/icon-bus.svg" data-lg="images/card-image-1.jpg"
                                 data-md="images/card-image-1.jpg" data-sm="images/card-image-1.jpg"
                                 alt="" class="blurryload card__img_bus">
                        </div>
                        <div class="card__overlay card__overlay_moded">
                            <div class="card__description card__description_card">
                                <div class="card__title">Автобус</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <h3>Популярні готелі</h3>
                <div class="col-md-3 col-lg-3">
                    <a href="#" class="card card-small">
                        <div class="card-img-marker-small">
                            <img src="" alt="">
                        </div>
                        <div class="place-mark">
                            <span>5.2</span>
                        </div>
                        <div class="card__img card-img-pl">
                            <img src="images/card-image-1.jpg"
                                 data-lg="images/card-image-1.jpg"
                                 data-md="images/card-image-1.jpg"
                                 data-sm="images/card-image-1.jpg"
                                 alt="" class="blurryload">
                        </div>
                        <div class="card__overlay card-overlay-small">
                            <div class="card__description ">
                                <div class="card-hotel-type">Готель</div>
                                <div class="card-hotel-name">Тиць</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-lg-3">
                    <a href="#" class="card card-small">
                        <div class="card-img-marker-small">
                            <img src="" alt="">
                        </div>
                        <div class="place-mark">
                            <span>5.2</span>
                        </div>
                        <div class="card__img card-img-pl">
                            <img src="images/card-image-1.jpg"
                                 data-lg="images/card-image-1.jpg"
                                 data-md="images/card-image-1.jpg"
                                 data-sm="images/card-image-1.jpg"
                                 alt="" class="blurryload">
                        </div>
                        <div class="card__overlay card-overlay-small">
                            <div class="card__description ">
                                <div class="card-hotel-type">Готель</div>
                                <div class="card-hotel-name">Тиць</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-lg-3">
                    <a href="#" class="card card-small">
                        <div class="card-img-marker-small">
                            <img src="" alt="">
                        </div>
                        <div class="place-mark">
                            <span>5.2</span>
                        </div>
                        <div class="card__img card-img-pl">
                            <img src="images/card-image-1.jpg"
                                 data-lg="images/card-image-1.jpg"
                                 data-md="images/card-image-1.jpg"
                                 data-sm="images/card-image-1.jpg"
                                 alt="" class="blurryload">
                        </div>
                        <div class="card__overlay card-overlay-small">
                            <div class="card__description ">
                                <div class="card-hotel-type">Готель</div>
                                <div class="card-hotel-name">Тиць</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-lg-3">
                    <a href="#" class="card card-small">
                        <div class="card-img-marker-small">
                            <img src="" alt="">
                        </div>
                        <div class="place-mark">
                            <span>5.2</span>
                        </div>
                        <div class="card__img card-img-pl">
                            <img src="images/card-image-1.jpg"
                                 data-lg="images/card-image-1.jpg"
                                 data-md="images/card-image-1.jpg"
                                 data-sm="images/card-image-1.jpg"
                                 alt="" class="blurryload">
                        </div>
                        <div class="card__overlay card-overlay-small">
                            <div class="card__description ">
                                <div class="card-hotel-type">Готель</div>
                                <div class="card-hotel-name">Тиць</div>
                            </div>
                        </div>
                    </a>
                </div>
                <a href="{{route('planning')}}" class="btn btn--green">Більше подій</a>
            </div>
        </div>
    </div>
</div>

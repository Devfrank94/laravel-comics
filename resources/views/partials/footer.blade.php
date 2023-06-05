@php
    $cta = config('menus.cta');
    $menu_footer = config('menus.footer_menu');
    $menu_social = config('menus.social_menu');
@endphp

<footer>
    <div class="background-top">
        <div class="container">
            <div class="blue-section d-flex j-cont-bet">
                @foreach ($cta as $item)
                    <div class="icon-card d-flex al-item-cent j-cont-cent">
                        <img src="{{Vite::asset('/resources/img/' . $item['img'])}}" alt="">
                        <span>{{$item['text']}}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="background-center">
        <div class="container d-flex j-cont-bet no-wrap">
            <div class="categories d-flex">
                    @foreach ($menu_footer as $menu_col)
                        <div class="col">
                            @foreach ($menu_col as $key => $menu_section )
                            <h4>{{$key}}</h4>
                                <nav>
                                    <ul>
                                        @foreach ($menu_section as $item)
                                        <li>
                                        <a href="">{{$item['text']}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="right">

                </div>
            </div>
        </div>
    </div>


    <div class="background-bottom">
        <div class="container d-flex j-cont-bet al-item-cent">
            <div class="foot-bott-left d-flex j-cont-cent">
                <span>sign-up now!</span>
            </div>
            <div class="foot-bott-right d-flex al-item-cent j-cont-cent">
                <span>follow us</span>
                <nav class="d-flex al-item-cent">
                    <ul class="d-flex">
                        @foreach ($menu_social as $icon)
                        <li>
                            <a><img src="{{Vite::asset($icon['img'])}}" alt="Social Icon"></a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</footer>

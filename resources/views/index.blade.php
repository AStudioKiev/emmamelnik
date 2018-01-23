@extends('layouts.main')

@section('head-center')
    <title>Emma Melnik</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('emma.png')}}"/>
    <link rel="shortcut icon" type="image/png" href="http://eg.com/emma.png"/>
@stop

@section('head-begin')
    <!— Global site tag (gtag.js) - Google Analytics —>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-101921000-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-101921000-1');
    </script>
@stop

@section('body')
    <div class="top-block">
        <div class="white-texture">
            <ul id="mobile_nav" class="mobile-hidden">
                <li><a class="scroll" href="{{url('/')}}">Главная</a></li>
                <li><a class="scroll" href="{{url('/consultancies')}}">Консультации</a></li>
                <li><a class="scroll" href="{{url('/trainings')}}">Тренинги</a></li>
                <li><a class="scroll" href="{{url('/blog')}}">Блог</a></li>

                <div id="toggle_nav" onclick="showNav();"><img src="img/menu-button.svg" alt=""></div>
            </ul>

            <div class="curved-line"></div>

            <div class="container-md">
                <nav class="top-nav">
                    <li><a href="{{url('/')}}">Главная</a></li>
                    <li><a href="{{url('/consultancies')}}">Консультации</a></li>
                    <li><a href="{{url('/trainings')}}">Тренинги</a></li>
                    <li><a href="{{url('/blog')}}">Блог</a></li>

                    <img src="img/lamp.png" alt="" class="lamp-img">
                </nav>

                <div class="main-text-holder">
                    <span>Все, что я пропогандирую - ведет к счастью! Счастье для меня - Удовольствие без раскаяния</span>
                    <div class="logo-main"><img src="img/logo.png" alt="logotype" width="100%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-block">
        <div class="overflowed-animation"><div class="curved-line"></div></div>

        <div class="container-md">
            <div class="outer-wrapper">
                <div class="inner-wrapper">
                    <div class="text-holder">
                        <span>Эмма Мельник - тренер личностного роста<br>Создатель и Руководитель проектов:
                            <div class="emmas-projects space-btw">
                                <a href="https://web-site.kiev.ua/" target="_blank"><img src="img/astudio.png" alt="" width="100%"></a>
                                <a href="https://emmamelnik.com/" target="_blank"><img src="img/emmamelnic.png" alt="" width="100%"></a>
                                <a href="https://studio-angels.com/" target="_blank"><img src="img/angels.png" alt="" width="100%"></a>
                            </div>
                            Автор тренингов и обучающих программ<br>Спортивный судья и тренер 17 чемпионов в Pole Sport<br>Ученик лучших современных мировых  тренеров и психологов.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-block">
        <div class="curved-line"></div>

        <div class="container-md">
            <div class="outer-wrapper">
                <div class="inner-wrapper space-btw overflow-hd">
                    <div class="info-card">
                        <div class="card-image-holder"><img src="img/icon_1.png" alt="" width="100px"></div>
                        <div class="card-info-holder"><span>197 часов<br>живого обучения</span></div>
                    </div>
                    <div class="info-card">
                        <div class="card-image-holder"><img src="img/icon_2.png" alt="" width="70px"></div>
                        <div class="card-info-holder"><span>500 часов<br>онлайн обучения</span></div>
                    </div>
                    <div class="info-card">
                        <div class="card-image-holder"><img src="img/icon_3.png" alt="" width="105px"></div>
                        <div class="card-info-holder"><span>1094 личных<br>консультаций</span></div>
                    </div>
                    <div class="info-card">
                        <div class="card-image-holder"><img src="img/icon_4.png" alt="" width="95px"></div>
                        <div class="card-info-holder"><span>10 живых<br>тренингов</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="feedback-block overflow-hd">
        <div class="book-img-holder"><img src="img/book.png" alt="" height="100%"></div>

        <div class="container-md">
            <div class="outer-wrapper">
                <div class="inner-wrapper">
                    <div id="carouselFeedback" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @for ($i = 0; $i < count($pageComments); $i++)
                                <div class="carousel-item @if($i == 0) active @endif">
                                    <div>
                                    <span>{{$pageComments[$i]->comment}}</span>
                                        <span class="font-right">{{$pageComments[$i]->author}}</span>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        <a class="carousel-control-prev" href="#carouselFeedback" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselFeedback" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="curved-line"></div>

        <div class="footer-info-holder">
            <p class="zero">Запись на консультацию:</p>
            <p class="mar-tp-2 mar-bt-0"><a href="tel:+380980786317">+38 (098) 078 63 17</a></p>
            <p class="zero">emmamelnik1@ukr.net</p>
        </div>
        <div class="footer-info-holder">
            <p class="zero"><a href="https://m.facebook.com/emmamelnik1/" target="_blank"><span>Facebook</span><img class="mar-lt-3" src="img/facebook_logo.png" alt="" width="33px;"></a></p>
            <p class="mar-tp-2 mar-bt-0"><a href="https://www.instagram.com/emmamelnik/" target="_blank"><span>Instagram</span><img class="mar-lt-3" src="img/instagram_logo.png" alt="" width="33px;"></a></p>
        </div>
    </footer>
@stop

@extends('layouts.main')

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
                <li><a class="scroll" href="index.html">Главная</a></li>
                <li><a class="scroll" href="consulties.html">Консультации</a></li>
                <li><a class="scroll" href="trainings.html">Тренинги</a></li>
                <li><a class="scroll" href="blog.php">Блог</a></li>

                <div id="toggle_nav" onclick="showNav();"><img src="img/menu-button.svg" alt=""></div>
            </ul>

            <div class="curved-line"></div>

            <div class="container-md">
                <nav class="top-nav">
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="consulties.html">Консультации</a></li>
                    <li><a href="trainings.html">Тренинги</a></li>
                    <li><a href="blog.php">Блог</a></li>

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
                        <span>Эмма Мельник - тренер личностного роста<br>Создатель и Руководитель проектов<br>Автор тренингов и обучающих программ<br>Спортивный судья и тренер 17 чемпионов в Pole Sport<br>Ученик лучших современных мировых  тренеров и психологов.</span>
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
                            <div class="carousel-item">
                                <div>
                                    <span>"Консультация мне очень помогла.
                                    За несколько часов я получила знания, которые помогли мне понять не просто правила ведения бизнеса, основные постулаты, а и задать себе вопросы: «как я это вижу?» «Нужно ли это мне?» «В каком формате я бы хотела этим заниматься?».
                                    Эмма не просто проконсультировала, а провела коуч-сессию, которая помогла мне  переосмыслить мои идеи и стремления и определиться с приоритетами на ближайший период.
                                    Для меня Эмма образец красивой и успешной женщины, человека, который открыт новым идеям, всегда развивается и приносит красоту в этот мир. Человек, который сочетает в себе владелицу и идейного вдохновителя нескольких бизнес- направлений (сети самой известной студии танцев на пилоне в Киеве и дизайн-студии) и женщина, которой удается сохранить баланс между работой, красотой и заботой о семье и близких людях. Несомненно, человек у которого есть чему поучиться и который, что очень важно, умеет учить, делиться знаниями и знает какой подход выбрать именно для вас, что бы вырастить из вас чемпиона)."</span>
                                    <span class="font-right">Ирина</span>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <div>
                                    <span>"Никогда не подумала бы, что из одной проблемы можно размотать целый клубок зла внутри себя))) но Эмма умеет. За час консультации она успела вытянуть суть проблемы и направить к ее решению. Кстати, о тренингах.. Это так же анализ себя и своих поступков, пинок к изменениям и развитию. Это возможность увидеть себя со стороны. Обязателен к посещению!!!)"</span>
                                    <span class="font-right">Анна</span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div>
                                    <span>"Знакомство с Эммой-психологом для меня началось с её постов Инстаграм. Каждый день новый пост, новый повод для размышления. Благодаря ее постам я смогла найти ответы на многие свои вопросы и разложить ситуации по полочкам)))) Я поняла, что это хрупкая блондинка ( тогда она блондинкой) мой человек, человек который говорит на моем языке, понимает меня и самое главное может мне объяснить почему так. После этого был тренинг "Идентификация", это моя маленькая победа над собой)))На тренинге Эмма смогла навести порядок у меня в голове))) помогла разложить все по полочкам и профессионально выкинула от туда очень много мусора)))) выходила я с тренинга с гудящей от информации головой и полным блокнотом записей. Когда у меня возникает ситуации которая ставит меня в тупик я всегда знаю что у Эммы есть ответ на мучающий меня вопрос))) Эта девушка стала моим волшебным пинком, который заставил пересмотреть своё отношение к себе))))"</span>

                                    <span class="font-right">Татьяна</span>
                                </div>
                            </div>
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

@section('js-section')
    <script src="js/mine.js"></script>
@stop
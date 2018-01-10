<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Агенство">
    <meta name="keywords" content="">
    <title>Как начать свое дело</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('business.png')}}"/>
    <link rel="shortcut icon" type="image/png" href="http://eg.com/business.png"/>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-business.css')}}" rel="stylesheet">
    <meta name="theme-color" content="#ffffff">
    <style type="text/css" media="screen, print">
        @font-face {
            font-family: "BookCaps";
            src: url("{{asset('fonts/INTRO-BOOK-CAPS.OTF')}}");
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="{{asset('css/style-business.css')}}"></script>
</head>

<body>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog outer-wrapper">
        <div class="inner-wrapper">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" id="contactModal" class="form">
                        <div class="select-wrapper">
                            <div class="select form-group mar-bt-2">
                                <input type="text" id="nameM" name="name" placeholder="имя" required="required" class="form-control input-field bfh-phone">
                            </div>
                        </div>

                        <div class="select-wrapper">
                            <div class="select form-group mar-bt-2">
                                <input type="email" id="emailM" name="email" placeholder="e-mail" required="required" class="form-control input-field">
                            </div>
                        </div>

                        <input type="submit" role="button" class="lg-btn red-btn" value="Зарегистрироваться">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-holder">
    <div class="main"></div>

    <div class="top-container">
        <div class="outer-wrapper">
            <div class="inner-wrapper" align="center">
                <img class="top-text-img" src="{{asset('img/business_top_font.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="info-container">
        <div class="container-sm">
            <div class="inline-row" align="center">
                <div class="image-holder"><img src="{{asset('img/man.png')}}" alt="" height="100%"></div>
                <div class="negative-info-holder negative-info-holder__1">
                    <p class="negative-indent"><span class="lg-caps">Есть люди,</span>чей потенциал способен приносить миллионы. Но они боятся рискнуть. Есть люди чей талант приносит миллионы, но не им. Существуют незаменимые специалисты без которых сотни потребителей не мыслят свою жизнь. Есть сотрудники на которых держится вся компания, но принадлежит она тем кто понятия не имеет о ценности такого сотрудника.</p>
                    <p class="lg-caps mar-tp-3">Пришло время перемен!</p>
                </div>
            </div>
        </div>

        <div class="inline-row" align="right">
            <div class="padding-adaptive">
                <div class="negative-info-holder negative-info-holder__2">
                    <p class="negative-indent"><span class="lg-caps">Научись<br>развивать<br>себя,</span> а не чужой бизнес. Если ты чувствуешь, что твои способности могут принести пользу людям, сделай это делом своей жизни. Совмести своё предназначение и работу воедино.</p>
                </div>
                <div class="negative-info-holder negative-info-holder__3">
                    <p class="negative-indent"><span class="lg-caps">Научись<br>зарабатывать<br>на том,<br>что любишь</span>и больше ни дня не будешь работать!</p>
                </div>
                <div class="for-whom-img"><img src="{{asset('img/whom_business.png')}}" alt=""></div>
            </div>
            <div class="overflowed-image-holder"><img src="{{asset('img/notebook_right.png')}}" alt="" height="100%"></div>
        </div>
    </div>

    <div class="offers-container">
        <div class="offers-points">
            <div class="container-sm space-btw">
                <div class="point-holder">
                    <div class="image-holder">
                        <img src="{{asset('img/1_icon.png')}}" alt="" height="100%;">
                    </div>
                    <p>Для тех, кто знает, <br>что стоит больше, <br>чем получает</p>
                </div>
                <div class="point-holder">
                    <div class="image-holder">
                        <img src="{{asset('img/2_icon.png')}}" alt="" height="100%;">
                    </div>
                    <p>Для тех, кто перерос <br>начальников и менеджеров <br>по персоналу</p>
                </div>
                <div class="point-holder">
                    <div class="image-holder">
                        <img src="{{asset('img/3_icon.png')}}" alt="" height="100%;">
                    </div>
                    <p>Для тех, чьи идеи и <br>достижения приносят <br>деньги другим</p>
                </div>
                <div class="point-holder">
                    <div class="image-holder">
                        <img src="{{asset('img/4_icon.png')}}" alt="" height="100%;">
                    </div>
                    <p>Для тех, кто давно <br>хочет, но не знает как</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-container">
        <div class="container-sm space-btw">
            <div class="photo-holder"><img src="{{asset('img/Emma_photo.png')}}" alt="" width="100%;"></div>
            <div class="info-holder">
                <div class="emma-header"><img src="{{asset('img/emma_header.png')}}" alt="" width="100%"></div>
                <div class="pad-hz-2">
                    <span>Создатель четырёх бизнесов, опытный управляющий. Владелец-руководитель студии танцев, тренингового центра , вебстудии.</span>

                    <ul>
                        <li><a href="https://web-site.kiev.ua" target="_blank">web-site.kiev.ua</a></li>
                        <li><a href="https://studio-angels.com" target="_blank">studio-angels.com</a></li>
                        <li><a href="https://emmamelnik.com" target="_blank">emmamelnik.com</a></li>
                    </ul>

                    <span>Автор и лектор 7-ми тренингов. Спортивный тренер и судья. Личный консультант владельцев малого бизнеса</span></div>
            </div>
        </div>
        <div class="container-transformed space-btw">
            <div class="float-header"><img src="{{asset('img/mark.png')}}" alt="" height="38px"><span class="lg-caps">Это мой любимый тренинг</span></div>
            <div class="lg-caps lg-label-left"><span>Сделай шаг вверх и ты больше не сможешь остановиться.</span></div>
            <div class="info-holder bordered-info">
                <p>и я приглашаю всех к его обязательному прохождению! Есть люди, которые умеют создавать. И быть создателем неимоверно окрыляющее состояние.</p>
                <p>Я создала много проектов и все они были успешны, потому что я делала это, так как умела, а не «как сосед». Все, что сделано с душой, обречено на успех. И вот теперь я с душой и огромной любовью создаю создателей. Это не сухой список действий. Это не громкие фразы о мотивации и истории чужого успеха. <b>Это пошаговый работающий план.</b> Твой личный план! Приходи сам! Приведи друга. Подари этот тренинг любимому человеку.</p>

                <div class="mark-rotate"><img src="{{asset('img/mark.png')}}" alt="" height="38px"></div>
            </div>
        </div>
    </div>
    <div class="business-carousel-container">
        <div class="offers-points">
            <div class="container-sm space-btw">
                <div class="training-business-future"><img src="{{asset('img/together_font.png')}}" alt="" width="100%"></div>

                <div id="carouselBusiness" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @for($i = 0; $i < count($pageComments); $i++)
                        <div class="carousel-item @if($i == 0) active @endif">
                            <div>
                                <span>{{$pageComments[$i]->comment}}</span>
                            </div>
                        </div>
                        @endfor
                    </div>

                    <a class="carousel-control-prev" href="#carouselBusiness" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselBusiness" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="faq-container">
        <div class="container-sm">
            <div class="bordered-timer">
                <h4>До тренинга осталось:</h4>
                <span class="time-counter">12 дней 10 часов 54 минут 12 секунд</span>
            </div>
            <div class="faq-image-holder"><img src="{{asset('img/faq_business.png')}}" alt="" width="100%;"></div>
            <button type="button" class="blue-business-btn">Задать вопрос</button>
            <button type="button" class="blue-business-btn">Зарегистрироваться</button>
        </div>
    </div>
</div>
</body>

<script src="{{asset('js/mine.js')}}"></script>

<script>
    $("#contactForm").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var data = {
            name: $('#nameM').val(),
            email: $('#emailM').val(),
            page: 'Как начать свое дело',
            _token: $("input[name*='_token']").val()
        };

        $.ajax({
            type: "POST",
            url: '{{url('/contactForm')}}',
            data: data,
            error: function () {
                alert('Извините, данные не были переданы');
            },
            success: function(data) {
                alert(data + 'Ваше сообщение получено.\nБлагодарим за интерес к нашим услугам'); // show response from the php script.
            }
        });
    });
</script>

</html>
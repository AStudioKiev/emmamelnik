<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Агенство">
    <meta name="keywords" content="">
    <title>Тело твоей мечты</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('body.png')}}"/>
    <link rel="shortcut icon" type="image/png" href="http://eg.com/body.png"/>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-body.css')}}" rel="stylesheet">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.appear.js')}}"></script>
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
                        <form action="{{url('/contactForm')}}" method="post" id="contactModal" class="form">
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

        <div class="top-container container-md">
            <div class="black-bg">
                <h1 class="popup-up">Тело твоей мечты</h1>
                <h2 class="popup-up">16 декабря 12:00</h2>

                <div class="image-holder-absolute"><img src="{{asset('img/photoemma.png')}}" alt="" height="100%"></div>
                <div class="form-holder">
                    <form action="{{url('/contactForm')}}" method="post" id="contactForm" class="form">
                        <p class="popup-up popup-delayed-4">Как тренировать не только тело , но и дух! Эксклюзивный тренинг от Эммы Мельник</p>

                        <div class="select-wrapper">
                            <div class="select form-group mar-bt-2">
                                <input type="text" id="name" name="name" placeholder="имя" required="required" class="form-control input-field bfh-phone">
                            </div>
                        </div>

                        <div class="select-wrapper">
                            <div class="select form-group mar-bt-2">
                                <input type="email" id="email" name="email" placeholder="e-mail" required="required" class="form-control input-field">
                            </div>
                        </div>

                        <input type="submit" role="button" class="lg-btn red-btn mobile-btn" value="Зарегистрироваться" data-toggle="modal" data-target="#myModal">
                        <input type="submit" role="button" class="lg-btn red-btn" value="Зарегистрироваться">
                    </form>
                </div>
            </div>
        </div>

        <div class="intro-container container-md">
            <div class="black-bg">
                <p class="intro-info-holder popup-up">Физическое здоровье является очень важным шагом на пути к переменам и к счастливой жизни. Спорт это то с чего начинается хорошее настроение, самочувствие. Спорт это вечный источник энергии. Но только в том случае, если заниматься им правильно! Если без разбора заниматься всем, что нам предлагают не мудрено и пойти в обратную сторону.</p>

                <div class="bordered-text">
                    <img class="popup-left-lg" src="{{asset('img/line.png')}}" alt="" width="100%">
                    <span class="popup-up popup-delayed-10">Безграмотное отношение к физическим нагрузкам – может очень сильно навредить!</span>
                    <img class="popup-left-lg" src="{{asset('img/line.png')}}" alt="" width="100%">
                </div>

                <div class="image-holder-running"><img src="{{asset('img/picture.png')}}" alt="" width="100%"></div>
            </div>
        </div>

        <div class="faq-container container-md">
            <div class="black-bg">
                <ul class="faq-list">
                    <li class="popup-left">Как самостоятельно распределять свои нагрузки?</li>
                    <li class="popup-left">Как получать быстрый результат?</li>
                    <li class="popup-left">Как быть всегда в хорошей форме? </li>
                    <li class="popup-left">Сколько нужно заниматься?</li>
                    <li class="popup-left">Как найти свой вид спорта? </li>
                    <li class="popup-left">С чего нужно начинать?</li>
                    <li class="popup-left">Как питаться?</li>
                </ul>

                <p class="faq-info-holder popup-up">И многие другие вопросы разберем на тренинге «Тело твоей  мечты».</p>
            </div>
        </div>

        <div class="info-container container-md">
            <div class="black-bg">
                <div class="shaped-container shaped-container__1 popup-left">
                    <div class="cancel-holder cancel-holder__1"><img src="{{asset('img/cancel.png')}}" alt="" width="250px" height="250px"></div>
                    <p class="text-shaped text-shaped__1">Диеты, приводящие к стрессам<br> не работают.</p>
                </div>

                <div class="shaped-container shaped-container__2 popup-right popup-delayed-4" align="right">
                    <p class="text-shaped text-shaped__2">Тренировка, которая не<br> принесла результата<br> сразу - не должна<br> повториться</p>
                    <div class="cancel-holder cancel-holder__2"><img src="{{asset('img/cancel.png')}}" alt="" width="200px" height="200px"></div>
                </div>

                <div class="shaped-container shaped-container__3 popup-left popup-delayed-8" align="right">
                    <div class="cancel-holder cancel-holder__3"><img src="{{asset('img/cancel.png')}}" alt="" width="250px" height="250px"></div>
                    <p class="text-shaped text-shaped__3">Чувство голода первый враг<br> хорошей фигуры.</p>
                </div>

                <div class="shaped-container shaped-container__4 popup-right popup-delayed-12" align="right">
                    <p class="text-shaped text-shaped__4">Если путь к желаемой фигуре,<br> предполагает терпение или<br> страдания, это<br> не твой путь!</p>
                    <div class="cancel-holder cancel-holder__4"><img src="{{asset('img/cancel.png')}}" alt="" width="200px" height="200px"></div>
                </div>

                <div class="accept-point popup-up">
                    <div class="accept-image"><img src="{{asset('img/checked.png')}}" alt="" width="180px" height="180px"></div>
                    <p class="text-accepted">Я предлагаю вам прекратить жить в неведении и, наконец-то разобраться во всем самому</p>
                </div>
            </div>
        </div>

        <div class="plan-container container-md">
            <div class="black-bg">
                <h3 class="popup-up">На тренинге мы подробно разберём :</h3>

                <div class="mar-tp-6 space-btw">
                    <div class="image-holder-girl popup-right"><img src="{{asset('img/girl.png')}}" alt="" width="100%"></div>

                    <ul class="bordered-list">
                        <li class="bordered-text">
                            <img class="popup-left-lg" src="{{asset('img/line.png')}}" alt="" width="100%">
                            <span class="popup-up popup-delayed-10">Что такое правильное питание?</span>
                        </li>
                        <li class="bordered-text">
                            <img class="popup-left-lg" src="{{asset('img/line.png')}}" alt="" width="100%">
                            <span class="popup-up popup-delayed-10">Калории. Как их правильно получать и тратить.</span>
                        </li>
                        <li class="bordered-text">
                            <img class="popup-left-lg" src="{{asset('img/line.png')}}" alt="" width="100%">
                            <span class="popup-up popup-delayed-10">Нагрузки. Их виды и результаты</span>
                        </li>
                        <li class="bordered-text">
                            <img class="popup-left-lg" src="{{asset('img/line.png')}}" alt="" width="100%">
                            <span class="popup-up popup-delayed-10">Как выбрать свой вид спорта ?</span>
                        </li>
                        <li class="bordered-text">
                            <img class="popup-left-lg" src="{{asset('img/line.png')}}" alt="" width="100%">
                            <span class="popup-up popup-delayed-10">Что необходимо для нормального обмена веществ?</span>
                        </li>
                        <li class="bordered-text">
                            <img class="popup-left-lg" src="{{asset('img/line.png')}}" alt="" width="100%">
                            <span class="popup-up popup-delayed-10">Как сбросить и не набирать лишние килограммы?</span>
                        </li>
                        <li class="bordered-text">
                            <img class="popup-left-lg" src="{{asset('img/line.png')}}" alt="" width="100%">
                            <span class="popup-up popup-delayed-10">Как написать собственную программу тренировок?</span>
                        </li>
                        <li class="bordered-text">
                            <img class="popup-left-lg" src="{{asset('img/line.png')}}" alt="" width="100%">
                            <span class="popup-up popup-delayed-10">Как контролировать результаты и какие показатели важны прежде всего?</span>
                        </li>
                        <li class="bordered-text">
                            <img class="popup-left-lg" src="{{asset('img/line.png')}}" alt="" width="100%">
                            <span class="popup-up popup-delayed-10">Как заниматься, чтоб получать энергию от занятий, а не тратить?</span>
                            <img class="popup-left-lg" src="{{asset('img/line.png')}}" alt="" width="100%">
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="registrate-bottom container-md">
            <div class="black-bg">
                <p class="lg-white popup-up">Уходит много времени на пробы и попытки?</p>
                <p class="lg-white popup-up">Не рациональнее ли потратить всего 3 часа на тренинг и начать прокачивать своё  тело правильно уже с завтрашнего дня?</p>
                <p class="lg-white popup-up">Цена - 200 грн</p>

                <div class="form-holder-bottom">
                    <form action="{{url('/contactForm')}}" method="post" id="contactFormBottom" class="form">
                        <div class="select-wrapper">
                            <div class="select form-group mar-bt-2">
                                <input type="text" id="nameB" name="name" placeholder="имя" required="required" class="form-control input-field bfh-phone">
                            </div>
                        </div>

                        <div class="select-wrapper">
                            <div class="select form-group mar-bt-2">
                                <input type="email" id="emailB" name="email" placeholder="e-mail" required="required" class="form-control input-field">
                            </div>
                        </div>

                        <input type="submit" role="button" class="lg-btn red-btn" value="Зарегистрироваться">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{asset('js/mine.js')}}"></script>

<script>
    document.getElementById('contactModal').addEventListener('submit', function(evt){
        var http = new XMLHttpRequest(), f = this;
        evt.preventDefault();
        http.open("POST", "contactForm.php", true);
        http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        http.send("name=" + f.name.value + "&email=" + f.email.value);
        http.onreadystatechange = function() {
            if (http.readyState == 4 && http.status == 200) {
                alert(http.responseText + 'Ваше сообщение получено.\nНаши специалисты ответят Вам в течении часа.\nБлагодарим за интерес к нашим услугам');
            }
        }
        http.onerror = function() {
            alert('Извините, данные не были переданы');
        }
    }, false);

    document.getElementById('contactFormBottom').addEventListener('submit', function(evt){
        var http = new XMLHttpRequest(), f = this;
        evt.preventDefault();
        http.open("POST", "contactForm.php", true);
        http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        http.send("name=" + f.name.value + "&email=" + f.email.value);
        http.onreadystatechange = function() {
            if (http.readyState == 4 && http.status == 200) {
                alert(http.responseText + 'Ваше сообщение получено.\nНаши специалисты ответят Вам в течении часа.\nБлагодарим за интерес к нашим услугам');
            }
        }
        http.onerror = function() {
            alert('Извините, данные не были переданы');
        }
    }, false);

    document.getElementById('contactForm').addEventListener('submit', function(evt){
        var http = new XMLHttpRequest(), f = this;
        evt.preventDefault();
        http.open("POST", "contactForm.php", true);
        http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        http.send("name=" + f.name.value + "&email=" + f.email.value);
        http.onreadystatechange = function() {
            if (http.readyState == 4 && http.status == 200) {
                alert(http.responseText + 'Ваше сообщение получено.\nНаши специалисты ответят Вам в течении часа.\nБлагодарим за интерес к нашим услугам');
            }
        }
        http.onerror = function() {
            alert('Извините, данные не были переданы');
        }
    }, false);
</script>
</html>
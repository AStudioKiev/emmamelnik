<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Агенство">
    <meta name="keywords" content="">
    <title>Женственность</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-femininity.css')}}" rel="stylesheet">
    <meta name="theme-color" content="#ffffff">
    <style type="text/css" media="screen, print">
        @font-face {
          font-family: "Intro_Script";
          src: url("{{asset('fonts/INTRO_SCRIPT_R_H2_BASE.OTF')}}");
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700&amp;subset=cyrillic" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
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
                        <button type="button" class="close" id="racoon" data-dismiss="modal">&times;</button>
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

                            {{ csrf_field() }}

                            <div align="center"><input type="submit" role="button" class="fem-btn" value="Зарегистрироваться"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-block">
        <div class="woman-left"><img src="{{asset('img/left_figure.png')}}" alt="" height="100%"></div>
        <div class="woman-right"><img src="{{asset('img/left_figure.png')}}" alt="" height="100%"></div>
        <div class="white-thought">
            <span>В чем секреты этих с виду обычных женщин, за которыми ходят полки мужчин?</span>
        </div>

        <div class="main-text">
            <h2>Тренинг в формате<br> «разговор по душам»</h2>
            <h1>Женственность</h1>
        </div>
    </div>

    <div class="additional-info-holder">
        <div class="md-info">
            <span>О ней пишут легенды . Она муза и повелительница мужских сердец. Она всегда победитель, Она Великая Женщина! Её женственность - её сила! Возможно ли стать женственной?</span>
        </div>
        <div class="md-info-row space-btw">
            <div class="sm-info">
                <span>Существует ли волшебная кнопка, чтоб включить в себе Женщину?</span>
            </div>

            <div class="figure-image-holder"><img src="{{asset('img/figure.png')}}" alt="" width="100%"></div>

            <div class="sm-info">
                <span>Почему они никогда не напрягаются?</span>
            </div>
        </div>
    </div>

    <div class="main-info-holder">
        <div class="container-femininity space-btw">
            <div class="info-holder">
                <span>Это тренинг в формате беседы. Это разговор по душам. Это повод признаться себе в том, что женственность твоя неотделимая часть. И секреты которые откроют тебе глаза на те моменты жизни , когда ты предала свою Женщину. Когда запретила ей идти дальше. Когда обрезала ей крылья. Это техники, которые раскроют все замки на пути к ней!Не отбирай у мира свою Женщину. Какую бы важную роль ты не играла, тебе стоит возвращаться к себе настоящей.</span>
            </div>
        </div>
    </div>

    <div class="about-block">
        <div class="pink-header">
            <span>На нашем тренинге мы поговорим о:</span>
        </div>

        <div class="container-sm">
            <div class="about-point">
                <div class="about-point-image"><img src="{{asset('img/icon_w1.png')}}" alt="" height="100%" width="100%"></div>
                <div class="about-point-info">
                    <span>Призвание и природа женщины</span>
                </div>
            </div>
            <div class="about-point">
                <div class="about-point-image"><img src="{{asset('img/icon_w2.png')}}" alt="" height="100%" width="100%"></div>
                <div class="about-point-info">
                    <span>Как умножать женскую энергию</span>
                </div>
            </div>
            <div class="about-point">
                <div class="about-point-image"><img src="{{asset('img/icon_w3.png')}}" alt="" height="100%" width="100%"></div>
                <div class="about-point-info">
                    <span>Как перестать «впахивать» и начать жить для себя</span>
                </div>
            </div>
            <div class="about-point">
                <div class="about-point-image"><img src="{{asset('img/icon_w4.png')}}" alt="" height="100%" width="100%"></div>
                <div class="about-point-info">
                    <span>Что «убивает» , а что «возрождает» женскую сущность</span>
                </div>
            </div>
            <div class="about-point">
                <div class="about-point-image"><img src="{{asset('img/icon_w5.png')}}" alt="" height="100%" width="100%"></div>
                <div class="about-point-info">
                    <span>Женское развитие</span>
                </div>
            </div>
            <div class="about-point">
                <div class="about-point-image"><img src="{{asset('img/icon_w6.png')}}" alt="" height="100%" width="100%"></div>
                <div class="about-point-info">
                    <span>Мужчина. Инструкция к применению</span>
                </div>
            </div>
        </div>
    </div>

    <div class="words-block">
        <div class="container-femininity">
            <div class="words-comment">
                <div class="words-header">
                    <span>Я писала этот тренинг более десяти лет</span>
                </div>
                <div class="words-info">
                    <span>Мне помогали самые прекрасные представительницы человечества, лучшие из лучших. Я много лет работаю с женщинами. Я долго наблюдала и исследовала. Искала секрет) Провела сотни мастер классов по искусству соблазнения и самым чувственным танцам.  Встретила тысячи женщин, которые могли повторить нужные движения и поведение, притвориться кошечками. Но это все не то. Я знала, что есть тайна и нашла ее. Пора и тебе узнать, что ты знаешь эту тайну! Женственность это не миф.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="circled-info-block">
        <div class="pad-vl-10">
            <div class="circled-info">
                <div class="vl-cl">
                    <div><span>Тренинг проходит в виде беседы. Все участники активно выполняют тесты и задания и отвечают на вопросы.</span></div>
                </div>
            </div>
        </div>

        <div class="count-white-block">
            <div class="woman-left"><img src="{{asset('img/left_figure.png')}}" alt="" height="100%"></div>
            <div class="woman-right"><img src="{{asset('img/left_figure.png')}}" alt="" height="100%"></div>
            <div class="count-block">
                <p class="count-header">До тренинга осталось:</p>
                <div class="count-border">
                    <span id="dd"></span><span class="time-label"> дней </span>
                    <span id="hh"></span><span class="time-label"> часов </span>
                    <span id="mm"></span><span class="time-label"> минут </span>
                    <span id="ss"></span><span class="time-label"> секунд </span>
                </div>
                <button class="fem-btn" data-toggle="modal" data-target="#myModal">Записаться</button>
            </div>
        </div>
    </div>
</body>

<script src="{{asset('js/mine.js')}}"></script>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Feb 18, 2018 19:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("dd").innerHTML = days;
        document.getElementById("hh").innerHTML = hours;
        document.getElementById("mm").innerHTML = minutes;
        document.getElementById("ss").innerHTML = seconds;

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

<script type="text/javascript">
    $("#contactModal").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var data = {
            name: $('#nameM').val(),
            email: $('#emailM').val(),
            page: 'Женственность',
            _token: $("input[name*='_token']").val()
        };

        $.ajax({
            type: "POST",
            url: "{{url('/contactForm')}}",
            data: data,
            error: function () {
                alert('Извините, данные не были переданы');
            },
            success: function(data) {
                alert(data + 'Ваше сообщение получено.\nБлагодарим за интерес к нашим услугам');
                $('#racoon').click();
            }
        });
    });
</script>

</html>

@extends('layouts.main')

@section('head-center')
    <title>Emma Melnik</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('emma.png')}}"/>
    <link rel="shortcut icon" type="image/png" href="http://eg.com/emma.png"/>
@stop

@section('body')
    <div class="consulties-block overflow-hd">
        <a class="back-link" href="{{url('/')}}">на главную</a>
        <div class="overflowed-animation"><h1>Консультации</h1></div>

        <div class="animated-images-holder space-btw">
            <div class="circled-skull">
                <img src="img/skull.png" alt="" height="100%">

                <img class="question-animated-1" src="img/question_1.png" alt="">
                <img class="question-animated-2" src="img/question_2.png" alt="">
                <img class="question-animated-3" src="img/question_3.png" alt="">
            </div>
            <div class="circled-skull">
                <img src="img/skull.png" alt="" height="100%">

                <img class="wheel-animated" src="img/wheel.png" alt="" width="65px">
            </div>
            <div class="circled-skull">
                <div class="flower-animated"></div>
            </div>
        </div>

        <div class="container-sm">
            <div class="image-info-holder space-btw">
                <div class="image-holder"><span>Зависимость</span><img src="img/hole.png" alt="" height="100%" width="100%"></div>
                <div class="text-holder">
                    <span>То самое чувство, когда ты понимаешь, что жить без чего то не можешь. Будь то человек или сахарок - опасность везде очень высокая. Любая зависимость приводит к нарушению гармонии.  Наличие зависимости очень ограничивает человека в возможностях видеть больше, мыслить шире. А так же часто заставляет оставаться на одном месте и физически и духовно.</span>
                    <span>Стоимость 300 грн/час</span>
                    <span>Курс 20 часов - 5000 грн</span>
                </div>
            </div>
            <div class="image-info-holder space-btw">
                <div class="text-holder">
                    <span>Работа с женской энергией. Вдохновение. Здоровье. Страхи. Установки и блоки.</span>
                    <span>Стоимость 300/час</span>
                </div>
                <div class="image-holder"><span>Женственность</span><img src="img/hole.png" alt="" height="100%" width="100%"></div>
            </div>
            <div class="image-info-holder space-btw">
                <div class="image-holder"><span>Бизнес консультация</span><img src="img/hole.png" alt="" height="100%" width="100%"></div>
                <div class="text-holder">
                        <span>Бизнес консультирование это сессии по вопросам организации бизнеса, персонала, развития и продвижение дела. Консалтинг, тайменеджмент PR и маркетинг, планирование.<br>Нестандартный подход.<br>Лёгкость восприятия
                        </span>
                    <span>Стоимость 1000 грн /час.</span>
                </div>
            </div>
            <div class="image-info-holder space-btw">
                <div class="text-holder">
                    <span>Отношения в жизни каждого из нас существуют с целью - сделать эту жизнь лучше. Если же ты находишься в отношениях, которые приносят дискомфорт, пора что-то поменять. Можно конечно бесконечно менять партнёров и  друзей, но от этого редко исчезает проблема. Потому что проблема  находится внутри тебя самого. «Совершенно не важно, кого вы выбрали в супруги. Ни один партнер не поможет вам достичь душевной гармонии, не повысит вашу самооценку и не вселит уверенность в себя. С кем бы вас ни свела судьба – по сути это встреча с самим собой».</span>
                    <span>Стоимость 300 грн/час</span>
                    <span>Курс 20 часов - 5000 грн</span>
                </div>
                <div class="image-holder"><span>Отношения</span><img src="img/hole.png" alt="" height="100%" width="100%"></div>
            </div>
            <div class="image-info-holder space-btw">
                <div class="image-holder"><span>Для руководителей</span><img src="img/hole.png" alt="" height="100%" width="100%"></div>
                <div class="text-holder">
                    <span>Наработка лидерских качеств<br>Техники для тренировки личности<br>Повышение показателей <br>Делегирование<br>Управление персоналом<br>Работа с мотивацией, хронической усталостью, апатией и вдохновением.</span>
                    <span>Стоимость 500 грн/час</span>
                </div>
            </div>
            <div class="image-info-holder space-btw">
                <div class="text-holder">
                    <span>Каждый день нашей прекрасной жизни должен приносить нам удовольствие и восторг, дарить энергию и вдохновение, приносить полезные инсайты, знакомства и планы на будущее. Отсутствие видимых причин обратится к тренеру не повод к нему не обращаться. Всегда можно повысить собственные показатели. Так что просто набирай и говори: у меня все отлично и теперь я хочу,  чтоб было ещё лучше! И будет.</span>
                    <span>Стоимость 300/час</span>
                </div>
                <div class="image-holder"><span>Просто<br>приуныл</span><img src="img/hole.png" alt="" height="100%" width="100%"></div>
            </div>
        </div>
    </div>
@stop
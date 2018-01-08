@extends('layouts.main')

@section('body')

    <div class="training-block">
        <a class="back-link" href="{{url('/')}}">на главную</a>
        <div class="overflowed-animation"><h1>Тренинги</h1></div>

        <div class="container-sm">
            <div class="training-holder space-btw">
                <div class="training-image-holder"><img src="img/training_1.png" alt="" width="100%"></div>

                <div class="training-info-holder">
                    <h2>Корпоративный Тренинг "Команда"</h2>

                    <p class="blue-question">Что?</p>
                    <p class="regular-lg">Корпоративный тренинг</p>

                    <p class="blue-question">Зачем?</p>
                    <p class="regular-lg">Для налаживания работы команды и руководителей</p>

                    <p class="blue-question">Когда?</p>
                    <p class="regular-lg">На любом этапе совместной работы</p>

                    <p class="blue-question">Кому?</p>
                    <p class="regular-lg">Всем кто любит свою работу и всем кто хочет ее полюбить</p>

                    <p class="regular-lg mar-tp-2">Длительность - 4 часа</p>
                </div>
            </div>

            <div class="training-holder space-btw">
                <div class="top-decoration"><img src="img/decor_curved.png" alt="" width="100%"></div>

                <div class="training-image-holder"><img src="img/photo2.jpg" alt="" width="100%"></div>

                <div class="training-info-holder">
                    <h2>Тренинг "Женственность"</h2>

                    <p class="blue-question">Что?</p>
                    <p class="regular-lg">Разговор-история о том, что принято считать редким даром свыше. О том что женственность есть в каждой из нас. О том, что это не набор упражнений и навыков, а грамотное избавление от лишнего груза в нашем сознании.</p>

                    <p class="blue-question">Зачем?</p>
                    <p class="regular-lg">Чтоб обрести крылья</p>

                    <p class="blue-question">Кому?</p>
                    <p class="regular-lg">Каждой, кто знает кого-то более женственного, чем она сама.</p>

                    <p class="regular-lg mar-tp-2">Длительность от 2 до 12 часов<br> Практикуется только в мини группах до 6-ти человек.<br> Формат - игра, тренировка, разговор.</p>
                </div>
            </div>

            <div class="training-holder space-btw">
                <div class="top-decoration"><img src="img/decor_curved.png" alt="" width="100%"></div>

                <div class="training-image-holder"><img src="img/photo3.jpg" alt="" width="100%"></div>

                <div class="training-info-holder">
                    <h2>Бизнес тренинг "Как начать своё дело"</h2>

                    <p class="blue-question">Что?</p>
                    <p class="regular-lg">Бизнес тренинг</p>

                    <p class="blue-question">Зачем?</p>
                    <p class="regular-lg">На тренинге вы сможете написать пошаговый план работы и узнаете много «невидимых» моментов</p>

                    <p class="blue-question">Когда?</p>
                    <p class="regular-lg">Когда ваш потенциал больше не возможно удерживать</p>

                    <p class="blue-question">Кому?</p>
                    <p class="regular-lg">Тому кто хочет и может больше!</p>

                    <p class="regular-lg mar-tp-2">Длительность - 4 часа</p>
                    <a href="{{url('/trainings/business')}}" target="_blank" class="btn-more-holder"><button type="button" class="btn-more-training"></button></a>
                </div>
            </div>

            <div class="training-holder space-btw">
                <div class="top-decoration"><img src="img/decor_curved.png" alt="" width="100%"></div>

                <div class="training-image-holder"><img src="img/photo4.jpg" alt="" width="100%"></div>

                <div class="training-info-holder">
                    <h2>Личностный тренинг "Идентификация"</h2>

                    <p class="blue-question">Что?</p>
                    <p class="regular-lg">Тренинг по личностному росту</p>

                    <p class="blue-question">Зачем?</p>
                    <p class="regular-lg">Для точного ответа на вопрос «Кто я?» </p>

                    <p class="blue-question">Когда?</p>
                    <p class="regular-lg">Всегда. Человеку свойственно меняться и очень важно в этих всех переменах - не терять себя!</p>

                    <p class="blue-question">Кому?</p>
                    <p class="regular-lg">Всем, кто хочет расти, развиваться и двигаться вперёд.</p>

                    <p class="regular-lg mar-tp-2">Длительность - 8 часа</p>
                </div>
            </div>

            <div class="training-holder space-btw">
                <div class="top-decoration"><img src="img/decor_curved.png" alt="" width="100%"></div>

                <div class="training-image-holder"><img src="img/photo5.jpg" alt="" width="100%"></div>

                <div class="training-info-holder">
                    <h2>Тренинг спортивный "Тело мечты"</h2>

                    <p class="blue-question">Что?</p>
                    <p class="regular-lg">Лекция по питанию, анатомии и видам спортивных нагрузок</p>

                    <p class="blue-question">Зачем?</p>
                    <p class="regular-lg">Для тех, кто хочет самостоятельно писать себе программы занятий, диет  и контролировать свой результат</p>

                    <p class="blue-question">Когда?</p>
                    <p class="regular-lg">Когда собираешься заняться спортом и когда существующие тренировки не приносят желаемого</p>

                    <p class="blue-question">Кому?</p>
                    <p class="regular-lg">Всем</p>

                    <p class="regular-lg mar-tp-2">Длительность - 3 часа</p>
                    <a href="{{url('/trainings/body')}}" target="_blank" class="btn-more-holder"><button type="button" class="btn-more-training"></button></a>
                </div>
            </div>

            <div class="training-holder space-btw">
                <div class="top-decoration"><img src="img/decor_curved.png" alt="" width="100%"></div>

                <div class="training-image-holder"><img src="img/photo6.jpg" alt="" width="100%"></div>

                <div class="training-info-holder">
                    <h2>Корпоративный Тренинг "Владелец +"</h2>

                    <p class="blue-question">Что?</p>
                    <p class="regular-lg">Бизнес тренинг</p>

                    <p class="blue-question">Зачем?</p>
                    <p class="regular-lg">Доя структурирования рабочего процесса</p>

                    <p class="blue-question">Когда?</p>
                    <p class="regular-lg">Когда потерян баланс между работой и личным комфортом.</p>

                    <p class="blue-question">Кому?</p>
                    <p class="regular-lg">Всем кто развивает своё дело</p>

                    <p class="regular-lg mar-tp-2">Длительность - 4 часа</p>
                </div>
            </div>
        </div>
    </div>

@stop

@section('js-section')
    <script src="js/mine.js"></script>
@stop
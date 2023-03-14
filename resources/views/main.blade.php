@section('title', 'Микроинвест.рф')
@extends('layouts.app')

@section('content')

    <body>

        {{-- СЛАЙДЕР --}}
        @include('sliders.slider-general')
        {{-- ПРОДУМАННЫЕ РЕШЕНИЯ --}}
        <div class="container resheniya">

            <div class="row">
                <h1 class="text-center">Продуманные решения</h1>
                <h2 class="header text-center">для ресторанов</h2>
            </div>
            <div class="row gx-3 gy-4 text-center">
                <div class="col-md-6 col-xl-3">
                    <div class="p-4"><img src="img/svg/meat.svg" alt="" class="icon"> Ресторан</div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="p-4"><img src="img/svg/tea.svg" alt="" class="icon"> Кафе</div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="p-4"><img src="img/svg/fastfood.svg" alt="" class="icon"> Фаст-фуд</div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="p-4"><img src="img/svg/bar.svg" alt="" class="icon"> Бар</div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="p-4"><img src="img/svg/cofeynya.svg" alt="" class="icon"> Кофейня</div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="p-4"><img src="img/svg/pizza.svg" alt="" class="icon"> Пиццерия</div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="p-4"><img src="img/svg/Meat_lavka.svg" alt="" class="icon"> Мясная лавка</div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="p-4"><img src="img/svg/beer.svg" alt="" class="icon"> Пивная</div>
                </div>
            </div>
        </div>
        <div class="container resheniya">

            <div class="row">
                <h2 class="header text-center">для торговли</h2>
            </div>
            <div class="row gx-3 gy-4 text-center">
                <div class="col-md-6">
                    <div class="p-4"><img src="img/svg/cart.svg" alt="" class="icon"> Продуктовый магазин
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4"><img src="img/svg/helmet.svg" alt="" class="icon"> Строительные
                        материалы
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4"><img src="img/svg/shirt.svg" alt="" class="icon"> Магазин одежды</div>
                </div>
                <div class="col-md-6">
                    <div class="p-4"><img src="img/svg/wheel.svg" alt="" class="icon"> Автозапчасти</div>
                </div>
                <div class="col-md-6">
                    <div class="p-4"><img src="img/svg/broom.svg" alt="" class="icon"> Товары для дома
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4"><img src="img/svg/microwave.svg" alt="" class="icon"> Бытовая техника
                    </div>
                </div>
            </div>
        </div>
        <div class="container resheniya">
            <div class="row">
                <h2 class="header text-center">для сферы досуга</h2>
            </div>
            <div class="row gx-3 gy-4 text-center">
                <div class="col-md-6">
                    <div class="p-4"><img src="img/svg/billiard.svg" alt="" class="icon"> Бильярдная</div>
                </div>
                <div class="col-md-6">
                    <div class="p-4"><img src="img/svg/bowling.svg" alt="" class="icon"> Боулинг</div>
                </div>
                <div class="col-md-6">
                    <div class="p-4"><img src="img/svg/spa.svg" alt="" class="icon"> СПА-центр</div>
                </div>
                <div class="col-md-6">
                    <div class="p-4"><img src="img/svg/salon.svg" alt="" class="icon"> Салон красоты</div>
                </div>
                <div class="col-md-6">
                    <div class="p-4"><img src="img/svg/abacus.svg" alt="" class="icon"> Детский уголок
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4"><img src="img/svg/fitnes.svg" alt="" class="icon"> Фитнес клуб</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mesto">
                <p class="lead">ТЕРМИНАЛ</p>
                <h2>Удобное рабочее место кассира</h2>
                <div class="col">
                    <div class="box">
                        <img src="img/home/rab_mesto_kassa.webp" alt="">
                    </div>
                </div>
                <div class="col">
                    <p>Запускается на обычных компьютерах и ноутбуках, поддерживает все типы заказов – в заведении, навынос
                        и доставку.</p>
                    <div class="row check">
                        <div class="col-1">
                            <img src="img/svg/check.svg">
                        </div>
                        <div class="col-11">легко разобраться и сразу начать продавать</div>
                        <div class="col-1">
                            <img src="img/svg/check.svg">
                        </div>
                        <div class="col-11">будет работать, даже если пропадет интернет</div>
                    </div>
                    <div class="button">
                        <button class="btn" type="button">Подробнее <img src="img/svg/forward arrow.svg"
                                alt=""></button>
                    </div>
                </div>
            </div>
            <div class="row mesto">
                <p class="lead">БЭК ОФИС</p>
                <h2>Больше, чем просто учёт</h2>
                <div class="col">
                    <div class="box">
                        <img src="img/home/rab_mesto_tovaroved.webp" alt="">
                    </div>
                </div>
                <div class="col">
                    <p>Прогнозируйте нагрузку, оптимизируйте меню и склад, привлекайте новых гостей, контролируйте
                        сотрудников. Весь бэк-офис у вас на компьютере.
                    </p>
                    <div class="button">
                        <button class="btn" type="button">Подробнее <img src="img/svg/forward arrow.svg"
                                alt=""></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider" id="second">
            <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item 1 active" data-bs-interval="10000">
                        <img src="img/home/slide_light_mob.webp" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block">
                            <h2>СКЛАД PRO <span class="blue">LIGHT</span></h2>
                            <p class="text">Модульное решение<br> для ресторанов</p>
                            <p>от 11900.00 руб</p>
                            <div class="button">
                                <button class="btn" type="button">Подробнее <img src="img/svg/forward arrow.svg"
                                        alt=""></button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item 2" data-bs-interval="10000">
                        <img src="img/home/slide_barcode_mob.webp" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h2>BARCODE <span class="blue">PRINTER PRO</span></h2>
                            <p class="text">Программа для <br>создания и печати<br> этикеток</p>
                            <p>от 7900.00 руб</p>
                            <div class="button">
                                <button class="btn" type="button">Подробнее <img src="img/svg/forward arrow.svg"
                                        alt=""></button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item 3" data-bs-interval="10000">
                        <img src="img/home/slide_egais_mob.webp" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h2>ЕГАИС <span class="red">МЕНЕДЖЕР</span></h2>
                            <p>Приложение, отвечающее<br>всем требованиям<br>законодательства РФ по<br>работе с системой
                                ЕГАИС</p>
                            <p>от 9900.00 руб</p>
                            <div class="button">
                                <button class="btn" type="button">Подробнее <img src="img/svg/forward arrow.svg"
                                        alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
        @include('layouts.order')
    </body>
@endsection

@extends('layouts.header')

@section('content')

    <body>
        {{-- СЛАЙДЕР --}}
 <div class="container slider">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000000">
            <img src="img/home/slide1_mob.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block">
              <h2>Мы ищем партнеров</h2>
              <p>Развивайте свой бизнес совместно с Microinvest.</p>
              <div class="button">
                <button class="btn" type="button">Подробнее <img src="img/svg/forward arrow.svg" alt=""></button>
            </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="100000000">
            <img src="img/home/slide2_mob.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block">
              <h2>Торговля и склад в облаке</h2>
              <p>Все онлайн:</p>
              <div class="row check">
                <div class="col-4"><p><img src="img/svg/check.svg">Продажи</p></div>
                <div class="col-4"><p><img src="img/svg/check.svg">Закупки</p></div>
                <div class="col-4"><p><img src="img/svg/check.svg">Склад</p></div>
                <div class="col-4"><p><img src="img/svg/check.svg">Финансы</p></div>
                <div class="col-4"><p><img src="img/svg/check.svg">Клиенты</p></div>
                <div class="col-4 122px"><p><img src="img/svg/check.svg">Поставщики</p></div>
            </div>
              <div class="button">
                <button class="btn" type="button">Подробнее <img src="img/svg/forward arrow.svg" alt=""></button>
            </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Следующий</span>
        </button>
      </div>
 </div>
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
                <div class="col-md-4">
                    <div class="p-4"><img src="img/svg/cart.svg" alt="" class="icon"> Продуктовый магазин</div>
                </div>
                <div class="col-md-4">
                    <div class="p-4"><img src="img/svg/helmet.svg" alt="" class="icon"> Строительные материалы
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4"><img src="img/svg/shirt.svg" alt="" class="icon"> Магазин одежды</div>
                </div>
                <div class="col-md-4">
                    <div class="p-4"><img src="img/svg/wheel.svg" alt="" class="icon"> Автозапчасти</div>
                </div>
                <div class="col-md-4">
                    <div class="p-4"><img src="img/svg/broom.svg" alt="" class="icon"> Товары для дома</div>
                </div>
                <div class="col-md-4">
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
                <div class="col-md-4">
                    <div class="p-4"><img src="img/svg/billiard.svg" alt="" class="icon"> Бильярдная</div>
                </div>
                <div class="col-md-4">
                    <div class="p-4"><img src="img/svg/bowling.svg" alt="" class="icon"> Боулинг</div>
                </div>
                <div class="col-md-4">
                    <div class="p-4"><img src="img/svg/spa.svg" alt="" class="icon"> СПА-центр</div>
                </div>
                <div class="col-md-4">
                    <div class="p-4"><img src="img/svg/salon.svg" alt="" class="icon"> Салон красоты</div>
                </div>
                <div class="col-md-4">
                    <div class="p-4"><img src="img/svg/abacus.svg" alt="" class="icon"> Детский уголок
                    </div>
                </div>
                <div class="col-md-4">
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
                        <img src="img/home/rab_mesto_kassa.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <p>Запускается на обычных компьютерах и ноутбуках, поддерживает все типы заказов – в заведении, навынос и доставку.</p>
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
                        <button class="btn" type="button">Подробнее <img src="img/svg/forward arrow.svg" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="row mesto">
                <p class="lead">БЭК ОФИС</p>
                <h2>Больше, чем просто учёт</h2>
                <div class="col">
                    <div class="box">
                        <img src="img/home/rab_mesto_tovaroved.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <p>Прогнозируйте нагрузку, оптимизируйте меню и склад, привлекайте новых гостей, контролируйте сотрудников. Весь бэк-офис у вас на компьютере.
                    </p>
                    <div class="button">
                        <button class="btn" type="button">Подробнее <img src="img/svg/forward arrow.svg" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

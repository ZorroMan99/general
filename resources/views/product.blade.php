@extends('layouts.header')

@section('content')

    <body>
        <div class="container">
            <div class="row leader">
                <h1>Основыне продукты</h1>
            </div>
        </div>
        <div class="general products">
            <div class="product">
                <div class="row">
                    <div class="col-md-6 product-img">
                        <img src="https://xn--b1aghajkkgrpl.xn--p1ai/wp-content/uploads/2022/10/skladprolight.png"
                            alt="skald pro light">
                    </div>
                    <div class="col-md-4 product-desc">
                        <h2>Станция <br>кассира/официанта</h2>
                        <h3 class="product">MICROINVEST СКЛАД PRO LIGHT</h3>
                        <p class="product">Microinvest Склад Pro Light предназначен для автоматизации рабочего места кассира
                            (официанта) и
                            попадает в категорию «Front Office», т.е. это продукт для обслуживания конкретного
                            клиента/посетителя.</p>
                        <div class="row check">
                            <div class="col-md-1">
                                <img src="{{ asset('img/svg/check.svg') }}">
                            </div>
                            <div class="col-md-11">подходит ко всем типам торговых объектов, магазинов, ресторанов и др.
                            </div>
                        </div>
                        <div class="row check">
                            <div class="col-md-1">
                                <img src="{{ asset('img/svg/check.svg') }}">
                            </div>
                            <div class="col-md-11">минимальные требования к компьютерной технике.</div>
                        </div>
                        <div class="row check">
                            <div class="col-md-1">
                                <img src="{{ asset('img/svg/check.svg') }}">
                            </div>
                            <div class="col-md-11">создан для ведения продаж в загруженном торговом объекте.</div>
                        </div>
                        <div class="button">
                          <button type="button" class="btn btn-outline-primary">Подробнее</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
          <div class="row leader">
              <h1>Вспомогательные продукты</h1>
          </div>
      </div>
        <div class="secondary products">

        </div>
    </body>
@endsection

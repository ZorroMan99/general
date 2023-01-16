@extends('layouts.header')

@section('content')

  <body>
    <div class="container">
      <div class="row leader">
        <h1>Основыне продукты</h1>
      </div>
    </div>
    {{-- pc start --}}

    <div class="general products pc">
      @foreach ($products as $product)
        @if ($product->general == 1)
          <div class="product">
            <div class="row">
              <div class="col-md-6 product-img">
                <img alt="{{ $product->title }}" src="{{ $product->img_pc }}">
              </div>
              <div class="col-md-4 product-desc">
                <h2>{!! $product->name !!}</h2>
                <h3 class="product">{{ $product->title }}</h3>
                <p class="product">{{ $product->desc_min }}</p>
                <div class="row check">
                  <div class="col-md-1">
                    <img src="{{ asset('img/svg/check.svg') }}">
                  </div>
                  <div class="col-md-11">{{ $product->check1 }}</div>
                </div>
                <div class="row check">
                  <div class="col-md-1">
                    <img src="{{ asset('img/svg/check.svg') }}">
                  </div>
                  <div class="col-md-11">{{ $product->check2 }}</div>
                </div>
                <div class="row check">
                  <div class="col-md-1">
                    <img src="{{ asset('img/svg/check.svg') }}">
                  </div>
                  <div class="col-md-11">{{ $product->check3 }}</div>
                </div>
                <div class="button">
                  <button class="btn btn-outline-primary" type="button">Подробнее</button>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
    {{-- PC END --}}
    {{-- TABLET SART --}}
    <div class="general products tablet">
      @foreach ($products as $product)
        @if ($product->general == 1)
          <div class="product">
            <h2>{!! $product->name !!}</h2>
            <img alt="{{ $product->title }}" src="{{ $product->img_table }}">
            <h3 class="product">{{ $product->title }}</h3>
            <p class="product">{{ $product->desc_min }}</p>
            <div class="row check">
              <div class="col-md-1">
                <img src="{{ asset('img/svg/check.svg') }}">
              </div>
              <div class="col-md-11">{{ $product->check1 }}</div>
            </div>
            <div class="row check">
              <div class="col-md-1">
                <img src="{{ asset('img/svg/check.svg') }}">
              </div>
              <div class="col-md-11">{{ $product->check2 }}</div>
            </div>
            <div class="row check">
              <div class="col-md-1">
                <img src="{{ asset('img/svg/check.svg') }}">
              </div>
              <div class="col-md-11">{{ $product->check3 }}</div>
            </div>
            <div class="button">
              <button class="btn btn-outline-primary" type="button">Подробнее</button>
            </div>
          </div>
        @endif
      @endforeach
    </div>
    {{-- TABLET END --}}
    {{-- MOB START --}}
    <div class="general products mob">
      @foreach ($products as $product)
      @if ($product->general == 1)
      <div class="col-md-4 mob">
        <div class="desc">
          <img alt="" src="{{ $product->img_mob }}">
          <div class="row">
            <p class="title">{{ $product->title }}</p>
            <p class="desc_thin">{{ $product->desc_thin }}</p>
          </div>
        </div>
        <div class="button">
          <button type="button">Подробнее</button>
        </div>
      </div>
    </div>
    @endif
    @endforeach
    {{-- MOB END --}}

    <div class="container">
      <div class="row secondary">
        <h1>Вспомогательные продукты</h1>
      </div>
    </div>
    <div class="secondary products">
      <div class="row">
        @foreach ($products as $product)
          @if ($product->general == 0)
            {{-- PC START --}}
            <div class="col-md-4 pc">
              <img alt="" src="{{ $product->img_pc }}">
              <p>
                <b class="b500">{{ $product->title }}</b> {{ $product->desc_min }}
              </p>
              <div class="button">
                <button class="btn btn-outline-primary" type="button">Подробнее</button>
              </div>
            </div>
            {{-- PC END --}}
            {{-- TABLE START --}}
            <div class="col-md-4 tablet">
              <div class="desc">
                <img alt="" src="{{ $product->img_table }}">
                <div class="row">
                  <p><b class="b500">{{ $product->title }}</b> {{ $product->desc_min }}</p>
                </div>
              </div>
              <div class="button">
                <button type="button">Подробнее</button>
              </div>
            </div>
            {{-- TABLET END --}}
            {{-- MOB START --}}
            <div class="col-md-4 mob">
              <div class="desc">
                <img alt="" src="{{ $product->img_mob }}">
                <div class="row">
                  <p class="title">{{ $product->title }}</p>
                  <p class="desc_thin">{{ $product->desc_thin }}</p>
                </div>
              </div>
              <div class="button">
                <button type="button">Подробнее</button>
              </div>
            </div>
            {{-- MOB END --}}
          @endif
        @endforeach
      </div>
    </div>
    <div class="general products2">
      @foreach ($products as $product)
          @if ($product->general == 1)
      <div class="product">
        <div class="row">
          <div class="col-md-6 product-img">
            <img alt="{{ $product->title }}" src="{{ $product->img_pc }}">
          </div>
          <div class="col-md-4 product-desc">
            <h2>{!! $product->name !!}</h2>
            <h3 class="product">{{ $product->title }}</h3>
            <p class="product">{{ $product->desc_min }}</p>
            <div class="row check">
              <div class="col-md-1">
                <img src="{{ asset('img/svg/check.svg') }}">
              </div>
              <div class="col-md-11">{{ $product->check1 }}</div>
            </div>
            <div class="row check">
              <div class="col-md-1">
                <img src="{{ asset('img/svg/check.svg') }}">
              </div>
              <div class="col-md-11">{{ $product->check2 }}</div>
            </div>
            <div class="row check">
              <div class="col-md-1">
                <img src="{{ asset('img/svg/check.svg') }}">
              </div>
              <div class="col-md-11">{{ $product->check3 }}</div>
            </div>
            <div class="button">
              <button class="btn btn-outline-primary" type="button">Подробнее</button>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </body>
@endsection

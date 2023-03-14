@section('title', 'Продукты Микроинвест.рф')
@extends('layouts.app')

@section('content')

    <body>
        <div class="container">
            <div class="row leader">
                <h1>Основные продукты</h1>
            </div>
        </div>
        {{-- pc start --}}

        <div class="container">
            @foreach ($products as $product)
                @if ($product->general == 1)
                    <div class="product">
                        <div class="row">
                            <div class="col product-img">
                                <img class="img-fluid" alt="{{ $product->title }}" src="{{ $product->img_pc }}">
                                {{-- ТУТ подумать нужно ли 3 картинки ,весит то она немного! --}}
                                {{-- <img  class="img-fluid" srcset="{{ $product->img_pc }} 788w, 
                                {{ $product->img_table }} 588w" 
                                sizes="(min-width: 1280px) 588px, (min-width: 768px) 588px, (min-width: 320px)588px" 
                                alt="{{ $product->title }}"
                                    src="{{ $product->img_pc }}"> --}}
                            </div>
                            <div class="col product-desc">
                                <h2>{!! $product->name !!}</h2>
                                <h6 class="product">{{ $product->title }}</h6>
                                <p class="desc-min">{{ $product->desc_min }}</p>
                                <p class="desc-thin">{{ $product->desc_thin }}</p>
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

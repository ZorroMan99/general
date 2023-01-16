@extends('layouts.header')

@section('content')

    <body>
        <div class="container">
            <div class="row leader">
                <h1>Основыне продукты</h1>
            </div>
        </div>
        {{-- pc start --}}

        <div class="container">
            @foreach ($products as $product)
                @if ($product->general == 1)
                    <div class="product">
                        <div class="row">
                            <div class="col-md-6 product-img">
                                <img srcset="{{ $product->img_mob }} 120w, {{ $product->img_tablet }} 588w, {{ $product->img_pc }} 588w" sizes="(max-width: 768px) 120px, (max-width: 1280px) 588px, 588px" alt="{{ $product->title }}"
                                    src="{{ $product->img_pc }}">
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

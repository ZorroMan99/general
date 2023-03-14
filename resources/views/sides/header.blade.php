@section('header')
<header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img class="mob" src="img/logo_site_mob.webp">
            <img class="pc" src="img/logo_site.webp">
        </a>
        <button class="navbar-toggler collapsed" id="toggle" type="button">
            <img class="open" src="img/svg/list.svg"alt="">
            <img class="close" src="img/svg/x.svg"alt="">
        </button>
        <div class="navbar-collapse collapse" id="menu" style="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="{{ route('product.index') }}" class="nav-link">ПРОДУКТЫ</a></li>
                <li class="nav-item"><a href="{{ route('tariff.index') }}" class="nav-link disabled">ТАРИФЫ</a></li>
                <li class="nav-item"><a href="{{ route('base.index') }}" class="nav-link disabled">БАЗА ЗНАНИЙ</a>
                </li>
                <li class="nav-item"><a href="{{ route('support.index') }}" class="nav-link disabled">ПОДДЕРЖКА</a>
                </li>
                <li class="nav-item"><a href="{{ route('blog.index') }}" class="nav-link disabled">БЛОГ</a></li>
            </ul>
        </div>
    </nav>
</header>
@endsection
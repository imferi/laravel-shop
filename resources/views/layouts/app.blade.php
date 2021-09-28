<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', "فروشگاه لاراول")</title>
    {{--Styles--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend.css')}}">

    @yield('styles')
</head>
<body id="@yield('body-id', 'app-page')">
<header id="header">
    <div class="container">
        <nav class="header-nav">
            <ul>
                <li><a href="/">خانه</a></li>
                <li><a href="#">محصولات</a></li>
                <li><a href="{{route('cart.index')}}">سبد خرید</a></li>
            </ul>
        </nav>
        <div class="branding">
            <a href="/">
                <img class="store-logo" src="{{asset('images/laravel-logo.png')}}" alt="laravel Home">
            </a>
        </div>

    </div>
</header>
@yield('content')

<footer>
    <div class="container">
        <nav class="footer-nav" id="footer" role="navigation" aria-label="Footer">
            <ul class="footer-links">
                <li><a href="https://laravel.bigcartel.com/">Home</a></li>
                <li><a href="https://laravel.bigcartel.com/products">Products</a></li>

                <li><a href="https://laravel.bigcartel.com/contact">Contact</a></li>
                <li><a href="https://laravel.bigcartel.com/cart">Cart</a></li>

            </ul>


            <div class="badge"><a href="https://www.bigcartel.com/?utm_source=bigcartel&amp;utm_medium=credit&amp;utm_campaign=5659727" title="Start your own store at Big Cartel now">Online Store by Big Cartel</a></div>
        </nav>
    </div>
</footer>

{{--Scripts--}}
<script src="{{asset('css/app.css')}}" type="application/javascript"></script>
@yield('scripts')
</body>
</html>

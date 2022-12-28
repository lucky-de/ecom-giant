<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giantcart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="{{ URL::to('web/asstes/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <header>
         @include('layouts.top_header')
    </header>

    <div class="search__bar">
        <div class="searchbar__content">
            <a href="i{{url('/')}}"><img src="{{ URL::to('web/asstes/img/logo.svg')}}" alt="GiantCart" class="img-fluid"></a>
            <form>
                <input type="search" class="search-field" placeholder="Search products" autocomplete="off">
                <button type="submit" class="search-submit">
                    <img src="{{ URL::to('web/asstes/img/search.svg')}}" alt="search">
                </button>
            </form>
            <div class="search__close">
                <img src="{{ URL::to('web/asstes/img/close.png')}}" alt="close" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="slide__nav">
       @include('layouts.sidebar')
    </div>
    <div class="sidecart__block">
        <div class="sidecart__content">
            <div class="side__cart">
                <div class="sidecart__header">
                    <p>Shopping Cart</p>
                    <button class="sidecart__close"><img src="{{ URL::to('web/asstes/img/gray-close.svg')}}" alt="close"></button>
                </div>
{{--                @if(\App\Models\Cart::where('session_id', session()->getId())->exists())--}}

{{--                    @foreach(\App\Models\Cart::where('session_id', session()->getId())->first()->detail as $cart)--}}
{{--                        <div class="sidecart__item" id="cart_{{ $cart->id }}">--}}
{{--                            <div class="sc__img">--}}
{{--                                <img src="{{ URL::to(config('constants.PRODUCTS').'/'.$cart->product->image) }}" alt="{{ $cart->product->title }}" class="img-fluid">--}}
{{--                            </div>--}}
{{--                            <div class="sc__info">--}}
{{--                                <p>{{ $cart->product->title }}</p>--}}
{{--                                <p>${{ $cart->total_price }}</p>--}}
{{--                                <div class="sc__btns">--}}
{{--                                    <div class="item__count">--}}
{{--                                        <button>-</button>--}}
{{--                                        <span>{{ $cart->quantity }}</span>--}}
{{--                                        <button>+</button>--}}
{{--                                    </div>--}}
{{--                                    <button>Remove</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}

{{--                @endif--}}
            </div>
            <div class="sidecart__total">
                <div>
                    <p>Subtotal</p>
                    <p><span id="cart-subtotal">$0</span></p>
                </div>
                <div>
                    <p>Shipping</p>
                    <p>Flat rate : <span>$0</span></p>
                </div>
                <div class="sc__total">
                    <p>Total</p>
                    <p id="cart-total">$0</p>
                </div>
                <a href="{{ URL::to('checkout')}}" class="btn">Checkout</a>
                <a href="{{ URL::to('view-cart')}}" class="btn">View cart</a>
            </div>
        </div>
    </div>
    <!-- Modal -->

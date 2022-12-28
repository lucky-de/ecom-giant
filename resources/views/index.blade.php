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
                <div class="sidecart__item">
                    <div class="sc__img">
                        <img src="{{ URL::to('web/asstes/img/product1.jpg')}}" alt="product name" class="img-fluid">
                    </div>
                    <div class="sc__info">
                        <p>Patek Philippe</p>
                        <p>$5000</p>
                        <div class="sc__btns">
                            <div class="item__count">
                                <button>-</button>
                                <span>1</span>
                                <button>+</button>
                            </div>
                            <button>Remove</button>
                        </div>
                    </div>
                </div>
                <div class="sidecart__item">
                    <div class="sc__img">
                        <img src="{{ URL::to('web/asstes/img/product2.jpg')}}" alt="product name" class="img-fluid">
                    </div>
                    <div class="sc__info">
                        <p>Patek Philippe</p>
                        <p>$5000</p>
                        <div class="sc__btns">
                            <div class="item__count">
                                <button>-</button>
                                <span>1</span>
                                <button>+</button>
                            </div>
                            <button>Remove</button>
                        </div>
                    </div>
                </div>
                <div class="sidecart__item">
                    <div class="sc__img">
                        <img src="{{ URL::to('web/asstes/img/product2.jpg')}}" alt="product name" class="img-fluid">
                    </div>
                    <div class="sc__info">
                        <p>Patek Philippe</p>
                        <p>$5000</p>
                        <div class="sc__btns">
                            <div class="item__count">
                                <button>-</button>
                                <span>1</span>
                                <button>+</button>
                            </div>
                            <button>Remove</button>
                        </div>
                    </div>
                </div>
                <div class="sidecart__item">
                    <div class="sc__img">
                        <img src="{{ URL::to('web/asstes/img/product2.jpg')}}" alt="product name" class="img-fluid">
                    </div>
                    <div class="sc__info">
                        <p>Patek Philippe</p>
                        <p>$5000</p>
                        <div class="sc__btns">
                            <div class="item__count">
                                <button>-</button>
                                <span>1</span>
                                <button>+</button>
                            </div>
                            <button>Remove</button>
                        </div>
                    </div>
                </div>
                <div class="sidecart__item">
                    <div class="sc__img">
                        <img src="{{ URL::to('web/asstes/img/product2.jpg')}}" alt="product name" class="img-fluid">
                    </div>
                    <div class="sc__info">
                        <p>Patek Philippe</p>
                        <p>$5000</p>
                        <div class="sc__btns">
                            <div class="item__count">
                                <button>-</button>
                                <span>1</span>
                                <button>+</button>
                            </div>
                            <button>Remove</button>
                        </div>
                    </div>
                </div>
                <div class="sidecart__item">
                    <div class="sc__img">
                        <img src="{{ URL::to('web/asstes/img/product2.jpg')}}" alt="product name" class="img-fluid">
                    </div>
                    <div class="sc__info">
                        <p>Patek Philippe</p>
                        <p>$5000</p>
                        <div class="sc__btns">
                            <div class="item__count">
                                <button>-</button>
                                <span>1</span>
                                <button>+</button>
                            </div>
                            <button>Remove</button>
                        </div>
                    </div>
                </div>
                <div class="sidecart__item">
                    <div class="sc__img">
                        <img src="{{ URL::to('web/asstes/img/product2.jpg')}}" alt="product name" class="img-fluid">
                    </div>
                    <div class="sc__info">
                        <p>Patek Philippe</p>
                        <p>$5000</p>
                        <div class="sc__btns">
                            <div class="item__count">
                                <button>-</button>
                                <span>1</span>
                                <button>+</button>
                            </div>
                            <button>Remove</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidecart__total">
                <div>
                    <p>Subtotal</p>
                    <p><span>$7200</span></p>
                </div>
                <div>
                    <p>Shipping</p>
                    <p>Flat rate : <span>$10</span></p>
                </div>
                <div class="sc__total">
                    <p>Total</p>
                    <p>$7210</p>
                </div>
                <a href="checkout.html" class="btn">Checkout</a>
                <a href="view-cart.html" class="btn">View cart</a>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
    <main>
        <div class="container">
            <div class="banner__section">
                <div class="banner__slider carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000"
                    data-bs-pause="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="banner__slide">
                                <img src="{{ URL::to('web/asstes/img/banner.jpg')}}" alt="Home Appliances">
                                <div class="banner__text">
                                    <h1>Home <span>Appliances</span></h1>
                                    <h2>Up To <span>50% Off</span> on Top Brands</h2>
                                    <a href="#" class="btn">View Collection <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                                            alt="arrow-right"></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="banner__slide">
                                <img src="{{ URL::to('web/asstes/img/banner2.jpg')}}" alt="name">
                                <div class="banner__text">
                                    <h1>Trendy <span>Fashion</span></h1>
                                    <h2>Up To <span>50% Off</span> on Top Brands</h2>
                                    <a href="#" class="btn">View Collection <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                                            alt="arrow-right"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__section">
                <div class="product__topbar">
                    <p><span>Top Sellers</span> Last Week</p>
                    <div class="product__slidebtn">
                        <button type="button" class="slick-prev">
                            <svg width="8" height="13" viewBox="0 0 8 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.828 6.364L7.778 11.314L6.364 12.728L0 6.364L6.364 0L7.778 1.414L2.828 6.364Z"
                                    fill="#A4B0BE" />
                            </svg>
                        </button>
                        <button type="button" class="slick-next">
                            <svg width="8" height="13" viewBox="0 0 8 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.172 6.364L0.222 11.314L1.636 12.728L8 6.364L1.636 0L0.222 1.414L5.172 6.364Z"
                                    fill="#A4B0BE" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product__row toplist__slider">
                    <div class="product__card">
                        <div class="product__img">
                            <img src="{{ URL::to('web/asstes/img/product2.jpg')}}" alt="product name">
                        </div>
                        <div class="product__title">
                            <div class="product__name">
                                <p>Microwave Oven</p>
                                <div class="rating">
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                </div>
                            </div>
                            <p class="product-price">$97</p>
                        </div>
                    </div>
                    <div class="product__card">
                        <div class="product__img">
                            <img src="{{ URL::to('web/asstes/img/product1.jpg')}}" alt="product name">
                        </div>
                        <div class="product__title">
                            <div class="product__name">
                                <p>YSL Perfumes</p>
                                <div class="rating">
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                </div>
                            </div>
                            <p class="product-price">$130</p>
                        </div>
                    </div>
                    <div class="product__card">
                        <div class="product__img">
                            <img src="{{ URL::to('web/asstes/img/product4.jpg')}}" alt="product name">
                        </div>
                        <div class="product__title">
                            <div class="product__name">
                                <p>Car Tyres</p>
                                <div class="rating">
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                </div>
                            </div>
                            <p class="product-price">$70</p>
                        </div>
                    </div>
                    <div class="product__card">
                        <div class="product__img">
                            <img src="{{ URL::to('web/asstes/img/product3.jpg')}}" alt="product name">
                        </div>
                        <div class="product__title">
                            <div class="product__name">
                                <p>Vaccuum Cleaner</p>
                                <div class="rating">
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                </div>
                            </div>
                            <p class="product-price">$115</p>
                        </div>
                    </div>
                    <div class="product__card">
                        <div class="product__img">
                            <img src="{{ URL::to('web/asstes/img/product2.jpg')}}" alt="product name">
                        </div>
                        <div class="product__title">
                            <div class="product__name">
                                <p>Microwave Oven</p>
                                <div class="rating">
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                </div>
                            </div>
                            <p class="product-price">$97</p>
                        </div>
                    </div>
                    <div class="product__card">
                        <div class="product__img">
                            <img src="{{ URL::to('web/asstes/img/product1.jpg')}}" alt="product name">
                        </div>
                        <div class="product__title">
                            <div class="product__name">
                                <p>YSL Perfumes</p>
                                <div class="rating">
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                </div>
                            </div>
                            <p class="product-price">$130</p>
                        </div>
                    </div>
                    <div class="product__card">
                        <div class="product__img">
                            <img src="{{ URL::to('web/asstes/img/product4.jpg')}}" alt="product name">
                        </div>
                        <div class="product__title">
                            <div class="product__name">
                                <p>Car Tyres</p>
                                <div class="rating">
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                </div>
                            </div>
                            <p class="product-price">$70</p>
                        </div>
                    </div>
                    <div class="product__card">
                        <div class="product__img">
                            <img src="{{ URL::to('web/asstes/img/product3.jpg')}}" alt="product name">
                        </div>
                        <div class="product__title">
                            <div class="product__name">
                                <p>Vaccuum Cleaner</p>
                                <div class="rating">
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                    <div class="rating-star"></div>
                                </div>
                            </div>
                            <p class="product-price">$115</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category__section">
                <div class="category__title">
                    <p>Product <span>Categories</span></p>
                </div>
                <div class="category__grid">
                    <div class="category__block">
                        <a href="#">
                            <img src="{{ URL::to('web/asstes/img/cat1.jpg')}}" alt="Automobiles & Spare Parts">
                            <div class="category__name">
                                <button class="btn">Automobiles & Spare Parts</button>
                            </div>
                        </a>
                    </div>
                    <div class="category__block">
                        <a href="#">
                            <img src="{{ URL::to('web/asstes/img/cat2.jpg')}}" alt="Appliances">
                            <div class="category__name">
                                <button class="btn">Appliances</button>
                            </div>
                        </a>
                    </div>
                    <div class="category__block">
                        <a href="#">
                            <img src="{{ URL::to('web/asstes/img/cat3.jpg')}}" alt="Beauty & Personal Care">
                            <div class="category__name">
                                <button class="btn">Beauty & Personal Care</button>
                            </div>
                        </a>
                    </div>
                    <div class="category__block">
                        <a href="#">
                            <img src="{{ URL::to('web/asstes/img/cat4.jpg')}}" alt="Electronics">
                            <div class="category__name">
                                <button class="btn">Electronics</button>
                            </div>
                        </a>
                    </div>
                    <div class="category__block">
                        <a href="#">
                            <img src="{{ URL::to('web/asstes/img/cat5.jpg')}}" alt="Clothing & Shoes">
                            <div class="category__name">
                                <button class="btn">Clothing & Shoes</button>
                            </div>
                        </a>
                    </div>
                    <div class="category__block">
                        <a href="#">
                            <img src="{{ URL::to('web/asstes/img/cat6.jpg')}}" alt="Jewelry & Watches">
                            <div class="category__name">
                                <button class="btn">Jewelry & Watches</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="view__more">
                    <a href="#">View More <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}" alt="arrow-right"></a>
                </div>
            </div>
            <div class="product__section">
                <div class="product__topbar">
                    <p><span>Latest </span>Products</p>
                    <div class="product__slidebtn">
                        <button data-bs-target="#productCarousel2" data-bs-slide="prev">
                            <svg width="8" height="13" viewBox="0 0 8 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.828 6.364L7.778 11.314L6.364 12.728L0 6.364L6.364 0L7.778 1.414L2.828 6.364Z"
                                    fill="#A4B0BE" />
                            </svg>
                        </button>
                        <button data-bs-target="#productCarousel2" data-bs-slide="next">
                            <svg width="8" height="13" viewBox="0 0 8 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.172 6.364L0.222 11.314L1.636 12.728L8 6.364L1.636 0L0.222 1.414L5.172 6.364Z"
                                    fill="#A4B0BE" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div id="productCarousel2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="product__row">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="{{ URL::to('web/asstes/img/product5.png')}}" alt="Lakme Absolute Make Up">

                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Lakme Absolute Make Up</p>
                                            <div class="rating">
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                            </div>
                                        </div>
                                        <p class="product-price">$22</p>
                                    </div>
                                </div>
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="{{ URL::to('web/asstes/img/product6.png')}}" alt="Apple iPhone 13 Mini 512GB">

                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Apple iPhone 13 Mini 512GB</p>
                                            <div class="rating">
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                            </div>
                                        </div>
                                        <p class="product-price">$1100</p>
                                    </div>
                                </div>
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="{{ URL::to('web/asstes/img/product7.png')}}" alt="Patek Philippe">

                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Patek Philippe</p>
                                            <div class="rating">
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                            </div>
                                        </div>
                                        <p class="product-price">$5000</p>
                                    </div>
                                </div>
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="{{ URL::to('web/asstes/img/product8.png')}}" alt="product name">

                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Car Tyres</p>
                                            <div class="rating">
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                            </div>
                                        </div>
                                        <p class="product-price">$250</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="product__row">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="{{ URL::to('web/asstes/img/product2.jpg')}}" alt="product name">

                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Microwave Oven</p>
                                            <div class="rating">
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                            </div>
                                        </div>
                                        <p class="product-price">$97</p>
                                    </div>
                                </div>
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="{{ URL::to('web/asstes/img/product1.jpg')}}" alt="product name">

                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>YSL Perfumes</p>
                                            <div class="rating">
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                            </div>
                                        </div>
                                        <p class="product-price">$130</p>
                                    </div>
                                </div>
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="{{ URL::to('web/asstes/img/product4.jpg')}}" alt="product name">

                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Car Tyres</p>
                                            <div class="rating">
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                            </div>
                                        </div>
                                        <p class="product-price">$70</p>
                                    </div>
                                </div>
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="{{ URL::to('web/asstes/img/product3.jpg')}}" alt="product name">

                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Vaccuum Cleaner</p>
                                            <div class="rating">
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                                <div class="rating-star"></div>
                                            </div>
                                        </div>
                                        <p class="product-price">$115</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="newsletter__section">
                <div class="newsletter__block">
                    <h2>Subscribe <span>Newsletter</span></h2>
                    <h3>Be the first to know about updates</h3>
                    <form>
                        <input type="text" class="form-control" id="staticEmail" placeholder="Enter your email">
                        <button type="submit"><img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}" alt="submit"></button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- OTP & rating buttons -->
    <div class="modal-btns">
        <button type="submit" class="btn" data-bs-toggle="modal" data-bs-target="#hiddenModalOTP">OTP</button>
        <button type="submit" class="btn" data-bs-toggle="modal" data-bs-target="#hiddenModalRating">Rating</button>
    </div>
    <footer>
        <div class="container">
            <div class="footer__row">
                <div class="media__block">
                    <img src="{{ URL::to('web/asstes/img/logo.svg')}}" alt="GiantCart">
                    <div class="media__links">
                        <a href="#"><img src="{{ URL::to('web/asstes/img/fb.svg')}}" alt="facebook"></a>
                        <a href="#"><img src="{{ URL::to('web/asstes/img/twitter.svg')}}" alt="twitter"></a>
                        <a href="#"><img src="{{ URL::to('web/asstes/img/instagram.svg')}}" alt="instagram"></a>
                    </div>
                </div>
                <div class="anchor__block">
                    <p>Quick Links</p>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="checkout.html">Order Now</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="anchor__block">
                    <p>Services</p>
                    <ul>
                        <li><a href="deals.html">Today's Deal</a></li>
                        <li><a href="contact-us.html">Customer Service</a></li>
                        <li><a href="index.html">Registery</a></li>
                        <li><a href="index.html">Gift Cards</a></li>
                        <li><a href="make-money.html">Make Money With Us</a></li>
                    </ul>
                </div>
                <div class="anchor__block">
                    <p>Legal</p>
                    <ul>
                        <li><a href="terms.html">Terms & Condition</a></li>
                        <li><a href="terms.html">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="contact__block">
                    <p>Contact Us</p>
                    <ul>
                        <li><a href="#"><img src="{{ URL::to('web/asstes/img/location.svg')}}" alt="location"> 1010 Avenue, sw 54321,
                                Chandigarh</a></li>
                        <li><a href="#"><img src="{{ URL::to('web/asstes/img/mail.svg')}}" alt="mail">giantcart@gmail.com</a></li>
                        <li><a href="#"><img src="{{ URL::to('web/asstes/img/phone.svg')}}" alt="phone">123 - 456 - 7890</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright © 2022, All Right Reserved</p>
            </div>
        </div>
    </footer>





    <!-- OTP Modal -->
    <div class="modal fade" id="hiddenModalOTP" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="otp__form">
                <div class="form__header">
                    <h3>OTP Verification</h3>
                    <p>Enter the 6-digit code we just sent to
                        <span>abcyz@gmail.com</span> to continue.
                    </p>
                </div>
                <form class="flex">
                    <div class="input__grp">

                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn">Verify Account <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
                <p>Didn’t receive code? <span>Resend OTP</span></p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div data-formnum="1" class="signin__form d-none">
                <div class="form__header">
                    <h3>Sign In</h3>
                    <div class="flex">
                        <p>Don’t have an account?</p>
                        <button class="form-btn" data-form="2">Sign Up here</button>
                    </div>
                </div>
                  <form id="userlogin_form" method="post" name="add_form" >
                    {{csrf_field()}}
                    <input type="text" name="email" class="form-control" placeholder="Email / Phone number">
                    <input type="password" name="password" class="form-control" placeholder="Password">

                    <div id="login_resposce_msg"></div>
                     

                    <button type="button" onclick="user_login()"  class="btn btn-primary">Sign In
                    <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
                <button class="form-btn" data-form="3">Forgot Password?</button>
                <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div data-formnum="2" class="signin__form signup__form d-none">
                <div class="form__header">
                    <h3>Sign Up</h3>
                    <div class="flex">
                        <p>Already have an account?</p>
                        <button class="form-btn" data-form="1">Log In</button>
                         
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                 <form id="userregistration_form" method="post" name="add_form" >
                    {{csrf_field()}}
                 
                    <input type="text" class="form-control" placeholder="Your name" name="reg_name">
                    <input type="number" class="form-control" placeholder="Phone number" name="reg_mobile">
                    <input type="email" class="form-control" placeholder="Email Address" name="reg_email">
                    <input type="password" class="form-control" placeholder="Password" name="reg_passs">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkText">
                        <label class="form-check-label" for="checkText">Yes, I agree with GiantCart <a href="#">Privacy
                                Policy</a> and
                            <a href="#">Terms of Use</a></label>
                    </div>

                    <div id="registration_resposce_msg"></div>


                    <button type="button" onclick="userregistration()" class="btn btn-primary">Sign Up <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div data-formnum="3" class="signin__form forget__format d-none">
                <div class="form__header">
                    <h3>Lost Your Password?</h3>
                    <div class="flex">
                        <p>Please enter your username or email address. You will
                            receive a link to create a new password via email.</p>
                    </div>
                </div>
                <form>
                    <input type="text" class="form-control" placeholder="Email / Phone number">
                    <button type="submit" class="btn btn-primary">Reset Password <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
                <div class="flex">
                    <p>Remember now?</p>
                    <button class="form-btn" data-form="1">Back to Login</button>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>


      <div class="modal fade" id="sellerOnboard" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="signin__form signup__form">
                <div class="form__header">
                    <h3>Create an Account</h3>
                    <div class="flex">
                        <p>Already have an account?</p>
                        <button class="form-btn" data-form="1">Log In</button>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="selleronboard_form" method="post" name="add_form" >
                        {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First Name" name="first_name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Business Name" name="business_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Phone Number" name="mobile">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Alternate Phone Number" name="phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Email Address" name="user_email">
                        </div>
                        <div class="col-md-6">
                            <div class="pass__input">
                                <div class="pass__toggler">
                                    <img src="{{ URL::to('web/asstes/img/password-view.svg')}}" alt="password-view" class="img-fluid">
                                </div>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Address" name="address">
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-select form-control" name="city">
                                <option selected="">City</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select form-control" name="state">
                                <option selected="">State</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Postal / Zip Code" name="zip_code">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="TIN Number" name="tin_number">
                        </div>
                    </div>
                    <textarea class="form-control" placeholder="Description of product/service being displayed"
                        rows="4" name="about_business"></textarea>
                    <p class="product__upload--title">Business License</p>
                    <div class="upload__product">
                        <img src="{{ URL::to('web/asstes/img/product-icon.svg')}}" alt="icon">
                        <label for="inputFile01">Drop your images here,
                            or <span>click to browse</span></label>
                        <input name="business_license"  type="file" class="form-control" id="inputFile01">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkText">
                        <label class="form-check-label" for="checkText">Yes, I agree with GiantCart <a href="#">Privacy
                                Policy</a> and
                            <a href="#">Terms of Use</a></label>
                    </div>

                    <div id="vendor_resposce_msg"></div>

                    <button type="button" onclick="become_seller()" class="btn btn-primary">Sign Up <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>

  


    <!-- Rating Modal -->
    <div class="modal fade" id="hiddenModalRating" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="signin__form rating__form">
                <div class="form__header">
                    <h3>Share Your Feedback</h3>
                    <p>How was your last order?</p>
                    <div class="rate clearfix">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
                <form>
                    <input type="text" class="form-control" placeholder="Your Name">
                    <input type="text" class="form-control" placeholder="Email / Phone number">
                    <textarea class="form-control" placeholder="Leave a comment here"></textarea>
                    <button type="submit" class="btn btn-primary">Submit Review <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ URL::to('web/asstes/js/custom.js')}}"></script>

    <script type="text/javascript">
        function become_seller()
        {
             var form = $('#selleronboard_form')[0]; 
             var formData = new FormData(form);
              formData.append('business_license', $('input[type=file]')[0].files[0]);
             var API_URL = "{{ route('admin.seller.store') }}";

                $.ajax({
                    url: API_URL,
                     type: 'POST',
                     data: formData,
                     async: false,
                     dataType: 'json',
                     contentType: false, 
                     processData: false, 
                     success: function (data)
                     {
                        $('#vendor_resposce_msg').html('');    
                        
                        if (data["status"] == 1){

                        $('#vendor_resposce_msg').html('<div class="alert alert-success">'+data['msg']+'</div>');
                            setTimeout(function() {
                                $('#selleronboard_form')[0].reset();
                                $('#sellerOnboard').modal('hide');
                            },1500);

                       } else if (data["status"] == 2){
                        alert(1);
                            $('#vendor_resposce_msg').html('<div class="alert alert-danger">'+data['msg']+'</div>');
                       }
                       else{
                            $('#vendor_resposce_msg').html('<div class="alert alert-danger">'+data['msg']+'</div>');
                       }
                        setTimeout(function() {
                                $('#vendor_resposce_msg').html('') 
                        },2000);
                    },
                    error: function (data) {
                        alert('server unavailable');
                    }
                });
          }


        function userregistration()
        {
            var form = $('#userregistration_form')[0]; 
            var formData = new FormData(form);
            var API_URL = "{{ route('admin.user.register') }}";
                $.ajax({
                    url: API_URL,
                     type: 'POST',
                     data: formData,
                     async: false,
                     dataType: 'json',
                     contentType: false, 
                     processData: false, 
                     success: function (data)
                     {
                        $('#registration_resposce_msg').html('');    
                        if (data["status"] == 1){
                            $('#registration_resposce_msg').html('<div class="alert alert-success">'+data['msg']+'</div>');
                            setTimeout(function() {
                                $('#userregistration_form')[0].reset();
                                $('#loginmodal').modal('hide');
                            },1500);
                            
                       }
                        else if (data["status"] == 2){
                            $('#registration_resposce_msg').html('<div class="alert alert-danger">'+data['msg']+'</div>');
                       } else{
                        
                        $('#registration_resposce_msg').html('<div class="alert alert-danger">'+data['msg']+'</div>');
                       }

                         setTimeout(function() {
                                $('#registration_resposce_msg').html('') 
                        },2000);

                    },
                    error: function (data) {
                        alert('server unavailable');
                    }
                });
          }



        function user_login()
        {
             var form = $('#userlogin_form')[0]; 
             var formData = new FormData(form);
             var API_URL = "{{ route('admin.user.store') }}";

                $.ajax({
                    url: API_URL,
                     type: 'POST',
                     data: formData,
                     async: false,
                     dataType: 'json',
                     contentType: false, 
                     processData: false, 
                     success: function (data)
                     {
                        
                        /*<div id="login_resposce_msg"></div>*/
                        
                        
                        $('#login_resposce_msg').html('');    

                       if (data["status"] == 1){
                            
                            $('#login_resposce_msg').html('<div class="alert alert-success">'+data['msg']+'</div>')
                            
                            setTimeout(function() {
                                window.location.href = '{{url("dashboard")}}';
                            },1500);

                            
                       }else if (data["status"] == 2){
                            $('#login_resposce_msg').html('<div class="alert alert-danger">'+data['msg']+'</div>')
                       }

                       else{
                            $('#login_resposce_msg').html('<div class="alert alert-danger">'+data['msg']+'</div>')
                       }
                        setTimeout(function() {
                                $('#login_resposce_msg').html('') 
                        },2000);

                    },
                    error: function (data) {
                        alert('server unavailable');
                    }
                });
          }

          

    </script>


</body>

</html>
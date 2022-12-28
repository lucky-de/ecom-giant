  @include('web.components.header')
    

    <main>
        <div class="breadcrumb__section">
            <div class="breadcrumb__block">
                <h3>Appliances </h3>
                <a href="#">Home</a>
                <span><img src="{{ URL::to('web/asstes/img/breadcrumb-arrow.svg') }}" alt="arrow"></span>
                <a href="#">Appliances </a>
            </div>
        </div>
        <div class="container">
            <div class="categoris__section">
                <div class="categoris__tab">
                    <div class="tab__header">
                        <button class="tab-btn" data-tabname="All" class="active">All</button>
                        <button class="tab-btn" data-tabname="Laundry">Laundry Appliances </button>
                        <button class="tab-btn" data-tabname="Refrigerators">Refrigerators </button>
                        <button class="tab-btn" data-tabname="Freezers">Freezers </button>
                        <button class="tab-btn" data-tabname="Microwave">Microwave Ovens </button>
                        <button class="tab-btn" data-tabname="Dishwashers">Dishwashers </button>
                        <button class="tab-btn" data-tabname="AC">AC & Fans</button>
                        <button class="tab-btn" data-tabname="Vacuum">Vacuum Cleaners </button>
                    </div>
                    <div class="tab__content">
                        <div class="each__tab" data-tabfor="All">
                            <div class="product__row">
                                <div class="product__card">
                                    <div class="product__img">
                                        <a href="#">
                                            <img src="./asstes/img/product2.jpg" alt="product name">
                                        </a>
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
                                        <a href="#"><img src="./asstes/img/product1.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product4.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product3.jpg" alt="product name"></a>
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
                            <div class="product__row">
                                <div class="product__card">
                                    <div class="product__img">
                                        <a href="#">
                                            <img src="./asstes/img/product2.jpg" alt="product name">
                                        </a>
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
                                        <a href="#"><img src="./asstes/img/product1.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product4.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product3.jpg" alt="product name"></a>
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
                            <div class="product__row">
                                <div class="product__card">
                                    <div class="product__img">
                                        <a href="#">
                                            <img src="./asstes/img/product2.jpg" alt="product name">
                                        </a>
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
                                        <a href="#"><img src="./asstes/img/product1.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product4.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product3.jpg" alt="product name"></a>
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
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg width="8" height="13" viewBox="0 0 8 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.172 6.364L0.222 11.314L1.636 12.728L8 6.364L1.636 0L0.222 1.414L5.172 6.364Z"
                                                    fill="#A4B0BE"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="each__tab d-none" data-tabfor="Laundry">
                            <div class="product__row">
                                <div class="product__card">
                                    <div class="product__img">
                                        <a href="#">
                                            <img src="./asstes/img/product2.jpg" alt="product name">
                                        </a>
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
                                        <a href="#"><img src="./asstes/img/product1.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product4.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product3.jpg" alt="product name"></a>
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
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg width="8" height="13" viewBox="0 0 8 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.172 6.364L0.222 11.314L1.636 12.728L8 6.364L1.636 0L0.222 1.414L5.172 6.364Z"
                                                    fill="#A4B0BE"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="each__tab d-none" data-tabfor="Refrigerators">
                            <div class="product__row">
                                <div class="product__card">
                                    <div class="product__img">
                                        <a href="#">
                                            <img src="./asstes/img/product2.jpg" alt="product name">
                                        </a>
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
                                        <a href="#"><img src="./asstes/img/product1.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product4.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product3.jpg" alt="product name"></a>
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
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg width="8" height="13" viewBox="0 0 8 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.172 6.364L0.222 11.314L1.636 12.728L8 6.364L1.636 0L0.222 1.414L5.172 6.364Z"
                                                    fill="#A4B0BE"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="each__tab d-none" data-tabfor="Freezers">
                            <div class="product__row">
                                <div class="product__card">
                                    <div class="product__img">
                                        <a href="#">
                                            <img src="./asstes/img/product2.jpg" alt="product name">
                                        </a>
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
                                        <a href="#"><img src="./asstes/img/product1.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product4.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product3.jpg" alt="product name"></a>
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
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg width="8" height="13" viewBox="0 0 8 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.172 6.364L0.222 11.314L1.636 12.728L8 6.364L1.636 0L0.222 1.414L5.172 6.364Z"
                                                    fill="#A4B0BE"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="each__tab d-none" data-tabfor="Microwave">
                            <div class="product__row">
                                <div class="product__card">
                                    <div class="product__img">
                                        <a href="#">
                                            <img src="./asstes/img/product2.jpg" alt="product name">
                                        </a>
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
                                        <a href="#"><img src="./asstes/img/product1.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product4.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product3.jpg" alt="product name"></a>
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
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg width="8" height="13" viewBox="0 0 8 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.172 6.364L0.222 11.314L1.636 12.728L8 6.364L1.636 0L0.222 1.414L5.172 6.364Z"
                                                    fill="#A4B0BE"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="each__tab d-none" data-tabfor="Dishwashers">
                            <div class="product__row">
                                <div class="product__card">
                                    <div class="product__img">
                                        <a href="#">
                                            <img src="./asstes/img/product2.jpg" alt="product name">
                                        </a>
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
                                        <a href="#"><img src="./asstes/img/product1.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product4.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product3.jpg" alt="product name"></a>
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
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg width="8" height="13" viewBox="0 0 8 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.172 6.364L0.222 11.314L1.636 12.728L8 6.364L1.636 0L0.222 1.414L5.172 6.364Z"
                                                    fill="#A4B0BE"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="each__tab d-none" data-tabfor="AC">
                            <div class="product__row">
                                <div class="product__card">
                                    <div class="product__img">
                                        <a href="#">
                                            <img src="./asstes/img/product2.jpg" alt="product name">
                                        </a>
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
                                        <a href="#"><img src="./asstes/img/product1.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product4.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product3.jpg" alt="product name"></a>
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
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg width="8" height="13" viewBox="0 0 8 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.172 6.364L0.222 11.314L1.636 12.728L8 6.364L1.636 0L0.222 1.414L5.172 6.364Z"
                                                    fill="#A4B0BE"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="each__tab d-none" data-tabfor="Vacuum">
                            <div class="product__row">
                                <div class="product__card">
                                    <div class="product__img">
                                        <a href="#">
                                            <img src="./asstes/img/product2.jpg" alt="product name">
                                        </a>
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
                                        <a href="#"><img src="./asstes/img/product1.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product4.jpg" alt="product name"></a>
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
                                        <a href="#"><img src="./asstes/img/product3.jpg" alt="product name"></a>
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
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><svg width="8" height="13" viewBox="0 0 8 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.172 6.364L0.222 11.314L1.636 12.728L8 6.364L1.636 0L0.222 1.414L5.172 6.364Z"
                                                    fill="#A4B0BE"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

  @include('web.components.footer')
    
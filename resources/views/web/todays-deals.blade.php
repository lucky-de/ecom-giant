  @include('web.components.header')

     <main>
        <div class="container">
            <div class="deal__banner banner__section">
                <div class="banner__slide">
                    <img src="{{ URL::to('web/asstes/img/banner3.jpg') }}" alt="Home Appliances">
                    <div class="deals__banner banner__text">
                        <div class="top__deal">Top Deal</div>
                        <h1><span>Beauty </span>Products</h1>
                        <h2>Up To <span>50% Off</span> on Top Brands</h2>
                        <a href="#" class="btn">Shop now <img src="{{ URL::to('web/asstes/img/arrow-right.svg') }}" alt="arrow-right"></a>
                    </div>
                </div>
            </div>
            <div class="deals__section">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="collapsible">
                            <div class="collapsible__btn">
                                <p>Deals</p>
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 6H14V8H0V6Z" fill="#A4B0BE" />
                                    <path
                                        d="M6 13.9999L6.06037 4.76837e-07L8.06035 0.00862519L7.99998 14.0085L6 13.9999Z"
                                        fill="#A4B0BE" />
                                </svg>
                            </div>
                            <div class="collapsible__block">
                                <a href="#">All</a>
                                <ul>
                                    <li>Available</li>
                                    <li>Upcoming</li>
                                    <li>Watchlist</li>
                                </ul>
                            </div>
                        </div>
                        <div class="collapsible">
                            <div class="collapsible__btn">
                                <p>Collections</p>
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 6H14V8H0V6Z" fill="#A4B0BE" />
                                    <path
                                        d="M6 13.9999L6.06037 4.76837e-07L8.06035 0.00862519L7.99998 14.0085L6 13.9999Z"
                                        fill="#A4B0BE" />
                                </svg>
                            </div>
                            <div class="collapsible__block">
                                <a href="#">Automobiles & Spare Parts</a>
                                <a href="#">Appliances</a>
                                <a href="#">Beauty & Personal Care</a>
                                <a href="#">Electronics</a>
                                <a href="#">Clothing & Shoes</a>
                                <a href="#">Jewelery & Watches</a>
                                <ul>
                            </div>
                        </div>
                        <div class="collapsible">
                            <div class="collapsible__btn">
                                <p>Deal Type</p>
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 6H14V8H0V6Z" fill="#A4B0BE" />
                                    <path
                                        d="M6 13.9999L6.06037 4.76837e-07L8.06035 0.00862519L7.99998 14.0085L6 13.9999Z"
                                        fill="#A4B0BE" />
                                </svg>
                            </div>
                            <div class="collapsible__block">
                                <a href="#">All Deals</a>
                                <a href="#">Top Deal</a>
                                <a href="#">Lightning deal</a>
                                <a href="#">Best deal</a>
                            </div>
                        </div>
                        <div class="collapsible">
                            <div class="collapsible__btn">
                                <p>Price</p>
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 6H14V8H0V6Z" fill="#A4B0BE" />
                                    <path
                                        d="M6 13.9999L6.06037 4.76837e-07L8.06035 0.00862519L7.99998 14.0085L6 13.9999Z"
                                        fill="#A4B0BE" />
                                </svg>
                            </div>
                            <div class="collapsible__block">
                                <a href="#">All</a>
                                <ul>
                                    <li>Under $25</li>
                                    <li>$25 to $50</li>
                                    <li>$50 to $100</li>
                                    <li>$100 to $200</li>
                                    <li>$200 & Above</li>
                                </ul>
                            </div>
                        </div>
                        <div class="collapsible">
                            <div class="collapsible__btn">
                                <p>Discount</p>
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 6H14V8H0V6Z" fill="#A4B0BE" />
                                    <path
                                        d="M6 13.9999L6.06037 4.76837e-07L8.06035 0.00862519L7.99998 14.0085L6 13.9999Z"
                                        fill="#A4B0BE" />
                                </svg>
                            </div>
                            <div class="collapsible__block">
                                <a href="#">All Deals</a>
                                <ul>
                                    <li>10% off or more</li>
                                    <li>25% off or more</li>
                                    <li>50% off or more</li>
                                    <li>70% off or more</li>
                                </ul>
                            </div>
                        </div>
                        <div class="collapsible">
                            <div class="collapsible__btn">
                                <p>Review</p>
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 6H14V8H0V6Z" fill="#A4B0BE" />
                                    <path
                                        d="M6 13.9999L6.06037 4.76837e-07L8.06035 0.00862519L7.99998 14.0085L6 13.9999Z"
                                        fill="#A4B0BE" />
                                </svg>
                            </div>
                            <div class="collapsible__block">
                                <a href="#">All</a>
                                <ul>
                                    <li>
                                        <img src="./asstes/img/4star.svg" alt="star">
                                    </li>
                                    <li>
                                        <img src="./asstes/img/3star.svg" alt="star">
                                    </li>
                                    <li>
                                        <img src="./asstes/img/2star.svg" alt="star">
                                    </li>
                                    <li>
                                        <img src="./asstes/img/1star.svg" alt="star">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="productgrid__header">
                            <p>Showing 1–12 of 40 results</p>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Default sorting</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="product__row">
                            <a href="#">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="./asstes/img/product2.jpg" alt="product name">
                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Microwave Oven</p>
                                            <div class="price__off">
                                                <span>20% Off</span>
                                                <span>Top Deal</span>
                                            </div>
                                        </div>
                                        <p class="product-price">$104
                                            <span>130</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="./asstes/img/product1.jpg" alt="product name">
                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>YSL Perfumes</p>
                                            <div class="price__off">
                                                <span>Up To 50% Off</span>
                                                <span>Ends in 08:50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="./asstes/img/product4.jpg" alt="product name">
                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Car Tyres</p>
                                            <div class="price__off">
                                                <span>deal</span>
                                                <span>Starts at 16:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="./asstes/img/product2.jpg" alt="product name">
                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Microwave Oven</p>
                                            <div class="price__off">
                                                <span>20% Off</span>
                                                <span>Top Deal</span>
                                            </div>
                                        </div>
                                        <p class="product-price">$104
                                            <span>130</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="./asstes/img/product1.jpg" alt="product name">
                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>YSL Perfumes</p>
                                            <div class="price__off">
                                                <span>Up To 50% Off</span>
                                                <span>Ends in 08:50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="./asstes/img/product4.jpg" alt="product name">
                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Car Tyres</p>
                                            <div class="price__off">
                                                <span>deal</span>
                                                <span>Starts at 16:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="./asstes/img/product2.jpg" alt="product name">
                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Microwave Oven</p>
                                            <div class="price__off">
                                                <span>20% Off</span>
                                                <span>Top Deal</span>
                                            </div>
                                        </div>
                                        <p class="product-price">$104
                                            <span>130</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="./asstes/img/product1.jpg" alt="product name">
                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>YSL Perfumes</p>
                                            <div class="price__off">
                                                <span>Up To 50% Off</span>
                                                <span>Ends in 08:50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="./asstes/img/product4.jpg" alt="product name">
                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Car Tyres</p>
                                            <div class="price__off">
                                                <span>deal</span>
                                                <span>Starts at 16:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="./asstes/img/product2.jpg" alt="product name">
                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Microwave Oven</p>
                                            <div class="price__off">
                                                <span>20% Off</span>
                                                <span>Top Deal</span>
                                            </div>
                                        </div>
                                        <p class="product-price">$104
                                            <span>130</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="./asstes/img/product1.jpg" alt="product name">
                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>YSL Perfumes</p>
                                            <div class="price__off">
                                                <span>Up To 50% Off</span>
                                                <span>Ends in 08:50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="product__card">
                                    <div class="product__img">
                                        <img src="./asstes/img/product4.jpg" alt="product name">
                                    </div>
                                    <div class="product__title">
                                        <div class="product__name">
                                            <p>Car Tyres</p>
                                            <div class="price__off">
                                                <span>deal</span>
                                                <span>Starts at 16:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <nav aria-label="Page navigation example">
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
                                                    fill="#A4B0BE" />
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>


  @include('web.components.footer')

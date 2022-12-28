
    @include('web.components.header')

    <main>
        <div class="container">
            <div class="banner__section">
                <div class="banner__slider carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000"
                    data-bs-pause="false">
                    
                    <div class="carousel-inner">
                        @foreach($banners as $row)

                            <div class="carousel-item active">
                                <div class="banner__slide">
                                    <img src="{{ URL::to($row->image)}}" alt="Home Appliances">
                                    <div class="banner__text">
                                        <h1>{{$row->title}}</h1>
                                        <h2>{{$row->subtitile}}</h2>
                                        <a target="_blank" href="{{@$row->link}}" class="btn">View Collection <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                                                alt="arrow-right"></a>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                       

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
                     @foreach($products as $row)
                    <div class="product__card">
                        <a href="{{url('/product-details?product_id=').encrypt($row->id)}}">
                            <div class="product__img">
                                <img src="{{ URL::to(config('constants.PRODUCTS').'/'.$row->image) }}" alt="{{$row->title}}" style="max-width: 100%">
                            </div>
                        </a>
                        <a href="/product-details?product_id={{ encrypt($row->id) }}">
                            <div class="product__title">
                                <div class="product__name">
                                    <p>{{$row->title}}</p>
                                    <div class="rating">
                                        <div class="rating-star"></div>
                                        <div class="rating-star"></div>
                                        <div class="rating-star"></div>
                                        <div class="rating-star"></div>
                                        <div class="rating-star"></div>
                                    </div>
                                </div>
                                <p class="product-price">${{ (!Auth::hasUser() || Auth::user()->type != "vendor") ? $row->price : $row->b2b_Price }}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="category__section">
                <div class="category__title">
                    <p>Product <span>Categories</span></p>
                </div>
                <div class="category__grid">
                    @foreach($categories as $category)
                    <div class="category__block">
                        <a href="#">
                            <img src="{{ url('/upload/category/'.@$category->image)}}" alt={{$category->title}}">
                            <div class="category__name">
                                <button class="btn">{{$category->title}}</button>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="view__more">
                    <a href="#">View More <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}" alt="arrow-right"></a>
                </div>
            </div>
             <div class="product__section">
                <div class="product__topbar">
                    <p><span>Products</span></p>
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
                     @foreach($products as $row)
                    <div class="product__card">
                        <a href="{{url('/product-details?product_id=').encrypt($row->id)}}">
                            <div class="product__img">
                                <img src="{{ URL::to(config('constants.PRODUCTS').'/'.$row->image) }}" alt="{{$row->title}}" style="max-width: 100%">
                            </div>
                        </a>
                        <a href="/product-details?product_id={{ encrypt($row->id) }}">
                            <div class="product__title">
                                <div class="product__name">
                                    <p>{{$row->title}}</p>
                                    <div class="rating">
                                        <div class="rating-star"></div>
                                        <div class="rating-star"></div>
                                        <div class="rating-star"></div>
                                        <div class="rating-star"></div>
                                        <div class="rating-star"></div>
                                    </div>
                                </div>
                                <p class="product-price">${{ (!Auth::hasUser() || Auth::user()->type != "vendor") ? $row->price : $row->b2b_Price }}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach

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
    <!-- <div class="modal-btns">
        <button type="submit" class="btn" data-bs-toggle="modal" data-bs-target="#hiddenModalOTP">OTP</button>
        <button type="submit" class="btn" data-bs-toggle="modal" data-bs-target="#hiddenModalRating">Rating</button>
    </div> -->

    @include('web.components.footer')

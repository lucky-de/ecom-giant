@include('web.components.header')

<main>
    <div class="breadcrumb__section breadcrumb__thin">
        <div class="breadcrumb__block">
            <a href="#">Home</a>
            <span><img src="{{ URL::to('web/asstes/img/breadcrumb-arrow.svg') }}" alt="arrow"></span>
            <a href="#">{{$product->get_category_name->title}}</a>
            <span><img src="{{ URL::to('web/asstes/img/breadcrumb-arrow.svg') }}" alt="arrow"></span>
            <a href="#">{{$product->title}}</a>
        </div>
    </div>
    <div class="container">
        <section class="details__section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="detail__slider">
                        <div id="details__carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#details__carousel" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1">
                                    <img src="{{ URL::to(config('constants.PRODUCTS').'/'.$product->image) }}" alt="{{ $product->title }}" class="img-fluid">
                                </button>
                                <button type="button" data-bs-target="#details__carousel" data-bs-slide-to="1"
                                    aria-label="Slide 2">
                                    <img src="{{ URL::to(config('constants.PRODUCTS').'/'.$product->image_second) }}" alt="{{ $product->title }}" class="img-fluid">
                                </button>
                                <button type="button" data-bs-target="#details__carousel" data-bs-slide-to="2"
                                    aria-label="Slide 3">
                                    <img src="{{ URL::to(config('constants.PRODUCTS').'/'.$product->image_third) }}" alt="{{ $product->title }}" class="img-fluid">
                                </button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="detail-slide">
                                        <img src="{{ URL::to(config('constants.PRODUCTS').'/'.$product->image) }}" class="img-fluid" alt="{{ $product->title }}">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="detail-slide">
                                        <img src="{{ URL::to(config('constants.PRODUCTS').'/'.$product->image_second) }}" class="img-fluid" alt="{{ $product->title }}">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="detail-slide">
                                        <img src="{{ URL::to(config('constants.PRODUCTS').'/'.$product->image_third) }}" class="img-fluid" alt="{{ $product->title }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="details__description">
                        <p>Top Deal</p>
                        <h3>{{$product->title}}</h3>
                        <div class="details__price">
                            <div class="item__count">
                                <button id="minQtyBtn">-</button>
                                <span id="qty">1</span>
                                <button id="plusQtyBtn">+</button>
                            </div>
                            <div class="items__price">
                                <p class="product-price" id="product-price">${{ (!Auth::hasUser() || Auth::user()->type != "vendor") ? $product->price : $product->b2b_Price }}</p>
{{--                                    <div class="price__off">--}}
{{--                                        <span>20% Off</span>--}}
{{--                                    </div>--}}
                            </div>
                        </div>
                        <div class="avg__review">
                            <div class="rating">
                                <div class="rating-star"></div>
                                <div class="rating-star"></div>
                                <div class="rating-star"></div>
                                <div class="rating-star"></div>
                                <div class="rating-star"></div>
                            </div>
                            <a href="#">28 reviews</a>
                        </div>
                        <p>{{$product->description}}.</p>
                        <div class="details__btn">
                            <meta name="csrf-token" content="{{ csrf_token() }}" />
                            <a href="javascript:void(0);" id="addToCartBtn" class="btn">Add To Cart</a>
                            <a href="javascript:void(0);" id="buyNowBtn" class="btn">Buy It Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                                    <img src="{{ URL::to('web/asstes/img/product5.png') }}" alt="Lakme Absolute Make Up">
                                    <div class="product__hover">
                                        <button class="wishlist__btn">
                                            <img src="{{ URL::to('web/asstes/img/wish.svg') }}" alt="add to wishlist">
                                        </button>
                                        <button class="addtocart__btn">
                                            <img src="{{ URL::to('web/asstes/img/cart2.svg') }}" alt="add to cart">
                                        </button>
                                    </div>
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
                                    <img src="{{ URL::to('web/asstes/img/product6.png') }}" alt="Apple iPhone 13 Mini 512GB">
                                    <div class="product__hover">
                                        <button class="wishlist__btn">
                                            <img src="{{ URL::to('web/asstes/img/wish.svg') }}" alt="add to wishlist">
                                        </button>
                                        <button class="addtocart__btn">
                                            <img src="{{ URL::to('web/asstes/img/cart2.svg') }}" alt="add to cart">
                                        </button>
                                    </div>
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
                                    <img src="{{ URL::to('web/asstes/img/product7.png') }}" alt="Patek Philippe">
                                    <div class="product__hover">
                                        <button class="wishlist__btn">
                                            <img src="{{ URL::to('web/asstes/img/wish.svg') }}" alt="add to wishlist">
                                        </button>
                                        <button class="addtocart__btn">
                                            <img src="{{ URL::to('web/asstes/img/cart2.svg') }}" alt="add to cart">
                                        </button>
                                    </div>
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
                                    <img src="{{ URL::to('web/asstes/img/product8.png') }}" alt="product name">
                                    <div class="product__hover">
                                        <button class="wishlist__btn">
                                            <img src="{{ URL::to('web/asstes/img/wish.svg') }}" alt="add to wishlist">
                                        </button>
                                        <button class="addtocart__btn">
                                            <img src="{{ URL::to('web/asstes/img/cart2.svg') }}" alt="add to cart">
                                        </button>
                                    </div>
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
                                    <img src="{{ URL::to('web/asstes/img/product2.jpg') }}" alt="product name">
                                    <div class="product__hover">
                                        <button class="wishlist__btn">
                                            <img src="{{ URL::to('web/asstes/img/wish.svg') }}" alt="add to wishlist">
                                        </button>
                                        <button class="addtocart__btn">
                                            <img src="{{ URL::to('web/asstes/img/cart2.svg') }}" alt="add to cart">
                                        </button>
                                    </div>
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
                                    <img src="{{ URL::to('web/asstes/img/product1.jpg') }}" alt="product name">
                                    <div class="product__hover">
                                        <button class="wishlist__btn">
                                            <img src="{{ URL::to('web/asstes/img/wish.svg') }}" alt="add to wishlist">
                                        </button>
                                        <button class="addtocart__btn">
                                            <img src="{{ URL::to('web/asstes/img/cart2.svg') }}" alt="add to cart">
                                        </button>
                                    </div>
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
                                    <img src="{{ URL::to('web/asstes/img/product4.jpg') }}" alt="product name">
                                    <div class="product__hover">
                                        <button class="wishlist__btn">
                                            <img src="{{ URL::to('web/asstes/img/wish.svg') }}" alt="add to wishlist">
                                        </button>
                                        <button class="addtocart__btn">
                                            <img src="{{ URL::to('web/asstes/img/cart2.svg') }}" alt="add to cart">
                                        </button>
                                    </div>
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
                                    <img src="{{ URL::to('web/asstes/img/product3.jpg') }}" alt="product name">
                                    <div class="product__hover">
                                        <button class="wishlist__btn">
                                            <img src="{{ URL::to('web/asstes/img/wish.svg') }}" alt="add to wishlist">
                                        </button>
                                        <button class="addtocart__btn">
                                            <img src="{{ URL::to('web/asstes/img/cart2.svg') }}" alt="add to cart">
                                        </button>
                                    </div>
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
    </div>
</main>

@include('web.components.footer')

<script>
    $(() => {
        let bulkPrice = parseInt({{ $product->bulk_price }});
        let minBulkOrder = parseInt({{ $product->min_quantity }});
        let productPrice = parseInt({{ (!Auth::hasUser() || Auth::user()->type != "vendor") ? $product->price : $product->b2b_Price }});
        var productQuantity = parseInt($('#qty').html());

        $('#plusQtyBtn').click(function() {
            productQuantity =+ productQuantity + 1;

            $('#qty').html(productQuantity);

            if (productQuantity >= minBulkOrder) {
                @if((!Auth::hasUser() || Auth::user()->type != "vendor"))
                    $('#product-price').html('$' + bulkPrice * productQuantity);
                @else
                    $('#product-price').html('$' + productPrice * productQuantity);
                @endif
                $('#product-price').append(' <span>$' + productPrice * productQuantity + '</span>');
            } else {
                $('#product-price').html('$' + productPrice * productQuantity);
            }
        });

        $('#minQtyBtn').click(function() {
            if (+productQuantity < 2) {
                productQuantity = 1;
            } else {
                productQuantity = productQuantity - 1;
            }

            $('#qty').html(productQuantity);

            if (productQuantity >= minBulkOrder) {
                @if((!Auth::hasUser() || Auth::user()->type != "vendor"))
                $('#product-price').html('$' + bulkPrice * productQuantity);
                @else
                $('#product-price').html('$' + productPrice * productQuantity);
                @endif
                $('#product-price').append(' <span>$' + productPrice * productQuantity + '</span>');
            } else {
                $('#product-price').html('$' + productPrice * productQuantity);
            }
        });

        $('#addToCartBtn').click(function() {
            let headers = {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')};
            var form_data = new FormData();
            form_data.append('product_id', '{{ encrypt($product->id) }}');
            form_data.append('qty', productQuantity);
            
             var API_URL = "{{ route('add_cart') }}";

            $.ajax({
                url			: API_URL,
                type		: "POST",
                headers     : headers,
                data		: form_data,
                contentType	: false,
                cache		: false,
                processData	:false,
                success		: function(result){
                    if(result.status) {
                        updateCart();
                    } else {
                        alert(result.message);
                    }
                }
            });
        });

        $('#buyNowBtn').click(function() {
            let headers = {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')};
            var form_data = new FormData();
            form_data.append('product_id', '{{ encrypt($product->id) }}');
            form_data.append('qty', productQuantity);
             var API_URL = "{{ route('add_cart') }}";

            $.ajax({
                url			: API_URL,
                type		: "POST",
                headers     : headers,
                data		: form_data,
                contentType	: false,
                cache		: false,
                processData	:false,
                success		: function(result){
                    if(result.status) {
 
                        window.location.href = "{{ route('add_cart') }}";
                    } else {
                        alert(result.message);
                    }
                }
            });
        });

    });
</script>

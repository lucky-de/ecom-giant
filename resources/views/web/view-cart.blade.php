@include('web.components.header')

<main>
    <div class="breadcrumb__section breadcrumb__thin">
        <div class="breadcrumb__block">
            <h3>Shopping Cart</h3>
            <a href="#">Home</a>
            <span><img src="{{ URL::to('web/asstes/img/breadcrumb-arrow.svg') }}" alt="arrow"></span>
            <a href="#">Shopping Cart</a>
            <P></P>
        </div>
    </div>
    <div class="container">
        <div class="viewcart__section">
            <div class="row gx-5">
                <div class="col-lg-8">
                    <div class="viewcart__left">
                        <div class="pp__quantity">
                            <p>Product</p>
                            <p>Price</p>
                            <p>Quantity</p>
                            <p>Subtotal</p>
                        </div>
                        <div class="cart-wrapper">
                        </div>

                        <a href="{{ URL::to('/') }}"><img src="{{ URL::to('web/asstes/img/arrow-left.svg') }}" alt="Continue Shopping"> Continue
                            Shopping</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="viewcart__right">
                        <div class="cart__total">
                            <div class="total__icons">
                                <div>
                                    <img src="{{ URL::to('web/asstes/img/note.svg') }}" alt="note">
                                    <p>Note</p>
                                </div>
                                <div>
                                    <img src="{{ URL::to('web/asstes/img/ship.svg') }}" alt="Shipping">
                                    <p>Shipping</p>
                                </div>
                                <div>
                                    <img src="{{ URL::to('web/asstes/img/coupon.svg') }}" alt="Coupon">
                                    <p>Coupon</p>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <span>Subtotal</span>
                                    <span id="view-cart-subtotal">$0</span>
                                </li>
                                <li>
                                    <span>Shipping</span>
                                    <span>Flat rate: $0</span>
                                </li>
                                <li>
                                    <span>Total</span>
                                    <span id="view-cart-total">$0</span>
                                </li>
                            </ul>
                            <a href="{{ URL::to('checkout') }}">Checkout</a>
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
        updateViewCart();
    });

    $(document).on("click", '#minViewCart', function() {
        let productId = $('#minViewCart').attr('id_attr');
        let qty = $('#view_cart_' + productId + ' .item__count span').html();

        if (qty - 1 === 0) {
            return;
        }

        let headers = {'X-CSRF-TOKEN': '{{ csrf_token() }}'};
        var form_data = new FormData();
        form_data.append('product_id', productId);
        form_data.append('qty', parseInt(qty) - 1);
        var API_URL = "{{ route('update_cart') }}";

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
                    updateViewCart()
                } else {
                    alert(result.message);
                }
            }
        });
    });

    $(document).on("click", '#plusViewCart', function() {
        let productId = $('#plusViewCart').attr('id_attr');
        let qty = $('#view_cart_' + productId + ' .item__count span').html();

        let headers = {'X-CSRF-TOKEN': '{{ csrf_token() }}'};
        var form_data = new FormData();
        form_data.append('product_id', productId);
        form_data.append('qty', parseInt(qty) + 1);
        
        var API_URL = "{{ route('update_cart') }}";

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
                    updateViewCart()
                } else {
                    alert(result.message);
                }
            }
        });
    });

    $(document).on("click", '#removeViewCart', function() {
        let productId = $('#removeViewCart').attr('id_attr');

        let headers = {'X-CSRF-TOKEN': '{{ csrf_token() }}'};
        var form_data = new FormData();
        form_data.append('product_id', productId);
        var API_URL = "{{ route('delete_cart') }}";

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
                    updateViewCart()
                } else {
                    alert(result.message);
                }
            }
        });
    });


    // Cart update
    function updateViewCart() {

        var API_URL = "{{ route('get_cart_data') }}";

        $.ajax({
            url			: API_URL,
            type		: "GET",
            contentType	: false,
            cache		: false,
            processData	:false,
            success		: function(result){
                if(result.status) {
                    $('.cart-wrapper').html('');

                    var subTotal = 0;
                    $.each(result.data, function(index, value) {
                        subTotal += value.total_price;
                        let dataCart = '<div class="item__bar" id="view_cart_' + value.product_id + '">\n' +
                            '<div class="cart__item">\n' +
                            '<div class="item__img">\n' +
                            '<img src="{{ URL::to(config('constants.PRODUCTS')) }}/' + value.product_detail.image + '" alt="' + value.product_detail.title + '" class="img-fluid">\n' +
                            '</div>\n' +
                            '<div class="item__info">\n' +
                            '<p>' + value.product_detail.title + '</p>\n' +
                            '<button id="removeViewCart" id_attr="' + value.product_id + '">Remove</button>\n' +
                            '</div>\n' +
                            '</div>\n' +
                            '<div>\n' +
                            '<p>$' + ((value.type == "vendor") ? value.product_detail.b2b_Price : (value.quantity >= value.product_detail.min_quantity) ? value.product_detail.bulk_price : value.product_detail.price) + '</p>\n' +
                            '</div>\n' +
                            '<div>\n' +
                            '<div class="item__count">\n' +
                            '<button id="minViewCart" id_attr="' + value.product_id + '">-</button>\n' +
                            '<span>' + value.quantity + '</span>\n' +
                            '<button id="plusViewCart" id_attr="' + value.product_id + '">+</button>\n' +
                            '</div>\n' +
                            '</div>\n' +
                            '<div>\n' +
                            '<p>$' + value.total_price + '</p>\n' +
                            '</div>\n' +
                            '</div>';
                        $('.cart-wrapper').append(dataCart);
                    });
                    $('#view-cart-subtotal').html('$' + subTotal);
                    $('#view-cart-total').html('$' + subTotal);

                } else {
                    alert(result.message);
                }
            }
        });
    }
</script>

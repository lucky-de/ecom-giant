@include('web.components.header')

<main>
    <div class="breadcrumb__section breadcrumb__thin">
        <div class="breadcrumb__block">
            <h3>Checkout</h3>
            <a href="#">Home</a>
            <span><img src="{{ URL::to('web/asstes/img/breadcrumb-arrow.svg') }}" alt="arrow"></span>
            <a href="#">Checkout</a>
            <P></P>
        </div>
    </div>
    <div class="container">
        <div class="thank__section">
            <p>Thank you. Your order has been received.</p>
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="order__infolist">
                        <ul>
                            <li>
                                <span>Order number:</span>
                                <span>#{{ $order->id }}</span>
                            </li>
                            <li>
                                <span>Date:</span>
                                <span>{{ \Illuminate\Support\Carbon::createFromDate($order->created_at)->format('M d, Y') }}</span>
                            </li>
                            <li>
                                <span>Total:</span>
                                <span>${{ $order->product->sum('total_price') }}</span>
                            </li>
                            <li>
                                <span>Payment Method:</span>
                                <span>Cash On Delivery</span>
                            </li>
                        </ul>
                        <p>Pay with cash upon delivery.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="order__details">
                        <h4>Order Details</h4>
                        <ul>
                            <li>
                                <span>Product</span>
                                <span>Total</span>
                            </li>
                            @foreach($order->product as $product)
                            <li>
                                <span>{{ $product->detail->title }} x {{ $product->quantity }}</span>
                                <span>${{ $product->total_price }}</span>
                            </li>
                            @endforeach
                            <li>
                                <span>Subtotal</span>
                                <span>${{ $order->product->sum('total_price') }}</span>
                            </li>
                            <li>
                                <span>Shipping</span>
                                <span>$0</span>
                            </li>
                            <li>
                                <span>Payment Method:</span>
                                <span>Cash On Delivery</span>
                            </li>
                            <li>
                                <span>Total:</span>
                                <span>${{ $order->product->sum('total_price') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('web.components.footer')

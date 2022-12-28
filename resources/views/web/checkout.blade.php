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
        <div class="checkout__section">
            <div class="row gx-5">
                <div class="col-lg-8">
                    <div class="checkout__form">
                        <p>Returning customer? <a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal"
                                                  data-form="1" class="form-btn">Click here to login</a>
                        </p>
                        <h3>Billing Details</h3>
                        <form id="form-checkout" class="row g-4" action="{{url('/checkout')}}" method="POST">
                            <div class="col-md-6">
                                <input type="text" name="first_name" class="form-control" value="" placeholder="First Name*">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name*">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Company Name">
                            </div>
                            <div class="col-md-6">
                                <select class="form-select">
                                    <option selected>Select Country</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea name="address" class="form-control" placeholder="Street Address*" rows="7"></textarea>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option selected>Select City</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option selected>Select State</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="zip" class="form-control" placeholder="ZIP Code*">
                            </div>
                            <div class="col-md-6">
                                <input type="tel" name="phone" class="form-control" placeholder="Phone Number*">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" value="{{ (Auth::hasUser()) ? Auth::user()->email : '' }}" placeholder="Email Address*" required>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Ship to a different address?
                                    </label>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="order__summery">
                        <h4>Order Summary</h4>
                        @foreach($cartDetail as $cart)
                        <div class="order__item">
                            <div class="od__img">
                                <img src="{{ URL::to(config('constants.PRODUCTS').'/'.$cart->product->image) }}" alt="{{ $cart->product->title }}" class="img-fluid">
                            </div>
                            <div class="od__info">
                                <p>{{ $cart->product->title }}</p>
                                <div class="d-flex align-items-end justify-content-between">
                                    <span>x {{ $cart->quantity }}</span>
                                    <span>${{ $cart->total_price }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                                    <span>${{ $cartDetail->sum('total_price') }}</span>
                                </li>
                                <li>
                                    <span>Shipping</span>
                                    <span>Flat rate: $0</span>
                                </li>
                                <li>
                                    <span>Total</span>
                                    <span>${{ $cartDetail->sum('total_price') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="payment__info">
                        <h4>Payment Information</h4>
                        <div class="pay__btns">
                            <button class="pay-btn"><svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 0H19C19.2652 0 19.5196 0.105357 19.7071 0.292893C19.8946 0.48043 20 0.734784 20 1V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18H1C0.734784 18 0.48043 17.8946 0.292893 17.7071C0.105357 17.5196 0 17.2652 0 17V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM18 8H2V16H18V8ZM18 6V2H2V6H18ZM12 12H16V14H12V12Z"
                                        fill="currentColor" />
                                </svg>
                                Direct Bank Transfer</button>
                            <button class="pay-btn"><svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18 5V2H2V5H18ZM18 7H2V16H18V7ZM1 0H19C19.2652 0 19.5196 0.105357 19.7071 0.292893C19.8946 0.48043 20 0.734784 20 1V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18H1C0.734784 18 0.48043 17.8946 0.292893 17.7071C0.105357 17.5196 0 17.2652 0 17V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM9 11H15V13H4.5L9 8.5V11Z"
                                        fill="currentColor" />
                                </svg>
                                Cheque Payments</button>
                            <button class="pay-btn active"><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 20C8.02219 20 6.08879 19.4135 4.4443 18.3147C2.79981 17.2159 1.51809 15.6541 0.761209 13.8268C0.00433284 11.9996 -0.193701 9.98891 0.192152 8.0491C0.578004 6.10929 1.53041 4.32746 2.92894 2.92894C4.32746 1.53041 6.10929 0.578004 8.0491 0.192152C9.98891 -0.193701 11.9996 0.00433284 13.8268 0.761209C15.6541 1.51809 17.2159 2.79981 18.3147 4.4443C19.4135 6.08879 20 8.02219 20 10C20 12.6522 18.9464 15.1957 17.0711 17.0711C15.1957 18.9464 12.6522 20 10 20ZM10 18C11.5823 18 13.129 17.5308 14.4446 16.6518C15.7602 15.7727 16.7855 14.5233 17.391 13.0615C17.9965 11.5997 18.155 9.99113 17.8463 8.43928C17.5376 6.88743 16.7757 5.46197 15.6569 4.34315C14.538 3.22433 13.1126 2.4624 11.5607 2.15372C10.0089 1.84504 8.40035 2.00347 6.93854 2.60897C5.47673 3.21447 4.2273 4.23985 3.34825 5.55544C2.4692 6.87104 2 8.41775 2 10C2 12.1217 2.84286 14.1566 4.34315 15.6569C5.84344 17.1572 7.87827 18 10 18ZM6.5 12H12C12.1326 12 12.2598 11.9473 12.3536 11.8536C12.4473 11.7598 12.5 11.6326 12.5 11.5C12.5 11.3674 12.4473 11.2402 12.3536 11.1465C12.2598 11.0527 12.1326 11 12 11H8C7.33696 11 6.70108 10.7366 6.23224 10.2678C5.7634 9.79893 5.5 9.16305 5.5 8.5C5.5 7.83696 5.7634 7.20108 6.23224 6.73224C6.70108 6.2634 7.33696 6 8 6H9V4H11V6H13.5V8H8C7.8674 8 7.74022 8.05268 7.64645 8.14645C7.55268 8.24022 7.5 8.3674 7.5 8.5C7.5 8.63261 7.55268 8.75979 7.64645 8.85356C7.74022 8.94733 7.8674 9 8 9H12C12.663 9 13.2989 9.2634 13.7678 9.73224C14.2366 10.2011 14.5 10.837 14.5 11.5C14.5 12.163 14.2366 12.7989 13.7678 13.2678C13.2989 13.7366 12.663 14 12 14H11V16H9V14H6.5V12Z"
                                        fill="currentColor" />
                                </svg>
                                Cash On Delivery</button>
                        </div>
                        <p>Pay with cash upon delivery.</p>
                        <div class="place__order">
                            <p>Your personal data will be used to process your order, support your experience
                                throughout
                                this website, and for other
                                purposes described in our <a href="#">Privacy Policy.</a></p>
                            <a href="javascript:void(0);" id="checkoutBtn">Place Order</a>
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
       $('#checkoutBtn').click(function () {
           $('#form-checkout').submit();
       });
    });
</script>

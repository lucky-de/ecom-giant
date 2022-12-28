<main>
    <div class="breadcrumb__section breadcrumb__thin">
        <div class="breadcrumb__block">
            <h3><?= ucfirst(Auth::user()->type) ?> Dashboard</h3>
            <a href="#">Home</a>
            <span><img src="{{ URL::to('web/asstes/img/breadcrumb-arrow.svg')}}" alt="arrow"></span>
            <a href="#">Dashboard</a>
            <P></P>
        </div>
    </div>
    <section class="dashboard__section">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4">
                    <div class="dashboard__tabs">
                        <button data-tabfor="dashboard" class="dash__tab">
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 0H19C19.2652 0 19.5196 0.105357 19.7071 0.292893C19.8946 0.48043 20 0.734784 20 1V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18H1C0.734784 18 0.48043 17.8946 0.292893 17.7071C0.105357 17.5196 0 17.2652 0 17V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM18 8H2V16H18V8ZM18 6V2H2V6H18ZM12 12H16V14H12V12Z"
                                    fill="currentColor" />
                            </svg>
                            Dashboard
                        </button>
                        <button data-tabfor="orders" class="dash__tab">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.5 0H14.5C14.6552 0 14.8084 0.036145 14.9472 0.105573C15.0861 0.175 15.2069 0.275804 15.3 0.4L18 4V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H1C0.734784 20 0.48043 19.8946 0.292893 19.7071C0.105357 19.5196 0 19.2652 0 19V4L2.7 0.4C2.79315 0.275804 2.91393 0.175 3.05279 0.105573C3.19164 0.036145 3.34475 0 3.5 0ZM16 6H2V18H16V6ZM15.5 4L14 2H4L2.5 4H15.5ZM6 8V10C6 10.7956 6.31607 11.5587 6.87868 12.1213C7.44129 12.6839 8.20435 13 9 13C9.79565 13 10.5587 12.6839 11.1213 12.1213C11.6839 11.5587 12 10.7956 12 10V8H14V10C14 11.3261 13.4732 12.5979 12.5355 13.5355C11.5979 14.4732 10.3261 15 9 15C7.67392 15 6.40215 14.4732 5.46447 13.5355C4.52678 12.5979 4 11.3261 4 10V8H6Z"
                                    fill="currentColor" />
                            </svg>
                            Orders
                        </button>
                        <button data-tabfor="profile" class="dash__tab active">
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H19C19.2652 0 19.5196 0.105357 19.7071 0.292893C19.8946 0.48043 20 0.734784 20 1V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18H1C0.734784 18 0.48043 17.8946 0.292893 17.7071C0.105357 17.5196 0 17.2652 0 17V1ZM2 2V16H18V2H2ZM4 4H10V10H4V4ZM6 6V8H8V6H6ZM4 12H16V14H4V12ZM12 4H16V6H12V4ZM12 8H16V10H12V8Z"
                                    fill="currentColor" />
                            </svg>
                            Profile
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div data-tabname="dashboard" class="dash__tablock dash__tab--dashboard">
                        <div class="add__product">
                            <button data-bs-toggle="modal" data-bs-target="#addproduct" class="btn">
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 6.49102V0.437256H8V6.49102H14V8.50894H8V14.5627H6V8.50894H0V6.49102H6Z"
                                        fill="white" />
                                </svg>
                                Add Products
                            </button>
                        </div>
                        <div class="dashboard__grid">
                            <div class="dashitem__each">
                                <h3>{{$products}}</h3>
                                <p>
                                    Total Products Posted</p>
                            </div>
                            <div class="dashitem__each">
                                <h3>{{$products_pending}}</h3>
                                <p>
                                    Products Pending</p>
                            </div>
                            <div class="dashitem__each">
                                <h3>{{$products_active}}</h3>
                                <p>
                                    Products Active</p>
                            </div>
                            <div class="dashitem__each">
                                <h3>{{count($data['orders'])}}</h3>
                                <p>
                                    Products Sold Out</p>
                            </div>
                        </div>
                    </div>
                    <div data-tabname="orders" class="dash__tablock dash__tab--order d-none">
                        <div class="order__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data['orders'] as $order)
                                    <tr>
                                        <td>#{{ $order->id }}</td>
                                        <td>{{ \Carbon\Carbon::createFromDate($order->created_at)->format('M d, Y') }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>${{ $order->product->sum('total_price') }}</td>
                                        <td>
                                            <span data-bs-toggle="modal" data-bs-target="#viewOrder_{{ $order->id }}">View</span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div data-tabname="profile" class="dash__tablock dash__tab--profile d-none">
                        <div class="user__profile">
                            <div class="profile__header">
                                <div class="position-relative">
                                    <div class="profile__img">
                                        <img src="{{ URL::to('web/asstes/img/user-img.jpg')}}" alt="name" class="img-fluid">
                                    </div>
                                    <div class="pp__edit">
                                        <img src="{{ URL::to('web/asstes/img/edit.svg')}}" alt="edit profile" class="img-fluid">
                                    </div>
                                </div>
                                 <h3>{{Auth::user()->name}}</h3>
                                <p>{{Auth::user()->email}}</p>
                            </div>
                            <div class="profile__body">
                                <ul>
                                   <li>
                                        <span>User Name:</span>
                                        <span>{{Auth::user()->name}}</span>
                                    </li>
                                    <li>
                                        <span>Phone Number:</span>
                                        <span>{{Auth::user()->mobile}}</span>
                                    </li>
                                    <li>
                                        <span>Email Address:</span>
                                        <span>{{Auth::user()->email}}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="edit__profile--btn">
                                <a href="#">Edit Detail
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.172 6.778L6.808 1.414L8.222 0L16 7.778L8.222 15.556L6.808 14.142L12.172 8.778H0V6.778H12.172Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@foreach($data['orders'] as $order)
    <div class="modal fade" id="viewOrder_{{ $order->id }}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
         aria-hidden="true">
        <div class="modal-dialog" style="max-width: 60%;">
            <div class="order__list">
                <div class="delivery__date">
                    <div class="deilvery__icon">
                        <img src="{{ URL::to('web/asstes/img/order-list.svg')}}" alt="order-list" class="img-fluid">
                    </div>
                    <div class="delivery__info">
                        <h4>Delivered</h4>
                        <p>Place July 15 2022 and Delivered on July 18 2022</p>
                    </div>
                </div>
                @foreach($order->product as $product)
                    <div class="order__each">
                        <div class="product__img">
                            <img src="{{ URL::to(config('constants.PRODUCTS').'/'.$product->detail->image) }}" alt="{{ $product->detail->title }}" class="img-fluid">
                        </div>
                        <div class="product__info">
                            <h3>{{ $product->detail->title }}</h3>
                            <p>{{ $product->detail->description }}</p>
                            <ul>
                                <li>Total Price:<span>${{ $product->total_price }}</span></li>
                                <li>Quantity:<span>{{ $product->quantity }}</li>
                                <li>Order Id:<span>#{{ $order->id }}</span></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endforeach

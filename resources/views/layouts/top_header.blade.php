 <div class="container">
            <div class="topbar d-flex justify-content-between align-items-center">
                <div class="menu__icon">
                    <img src="{{ URL::to('web/asstes/img/menu-icon.svg')}}" alt="menu" class="img-fluid">
                </div>
                <div class="logo__block">
                    <a href="/"><img src="{{ URL::to('web/asstes/img/logo.svg')}}" alt="GiantCart" class="img-fluid"></a>
                </div>
                <div class="topright__block d-flex align-items-center">
                    <div class="log_reg__block d-flex">

                    @if(Auth::user())
                        <a href="{{ route('users.logout') }}"  class="form-btn" >Logout</a> |

                        <a href="{{ route('user.dashboard') }}"  class="form-btn" >Dashboard</a>
                    @else
                        <a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal" class="form-btn"
                        data-form="1">Log In</a>

                       <a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal" class="form-btn" data-form="2">Create Account</a>

                       <!--  <a href="#" data-bs-toggle="modal" data-bs-target="#sellerOnboard"
                        class="">Become a Seller
                        </a> -->
                    @endif

                        <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal" class="form-btn"
                            data-form="2">Create Account</a> -->

                            
                        <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#sellerOnboard">Become a Seller</a> -->
                    </div>
                    <div class="search_cart__block d-flex">
                        <button class="search__btn">
                            <img src="{{ URL::to('web/asstes/img/search.svg')}}" alt="search">
                        </button>
                        <button class="cart__btn">
                            <img src="{{ URL::to('web/asstes/img/cart.svg')}}" alt="cart">
                            <span>0</span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="d-flex justify-content-center align-items-center">
                <a href="{{url('/todays-deals')}}">Today's Deals</a>
                <a href="{{url('/contact-us')}}">Customer Services</a>
                <a href="{{url('/about-us')}}">About us</a>
                <a href="{{url('/terms-and-condition')}}">Terms & policy</a>
                <a href="{{url('/make-money')}}">Make Money With us</a>
            </nav>
        </div>

 <div class="sildenav__content">
            <div class="slidenav__header">
                <div class="user-dp">
                    <div class="dp">
                        <img src="{{ URL::to('web/asstes/img/user.png')}}" alt="username" class="img-fluid">
                    </div>
                    <p>Hello, Sign in</p>
                </div>
                <div class="slidenav__close">
                    <img src="{{ URL::to('web/asstes/img/close.png')}}" alt="close" class="img-fluid">
                </div>
            </div>
            <div class="slidenav__main">
                <nav>
                    <a href="{{route('user.home')}}">Today's Deals</a>
                    <a href="{{route('user.home')}}">Customer Services</a>
                    <a href="{{route('user.home')}}">About us</a>
                    <a href="{{route('user.home')}}">Terms & policy</a>
                    <a href="{{route('user.home')}}">Make Money With us</a>
                </nav>
                <div class="slidenav__block">
                    <p><img src="{{ URL::to('web/asstes/img/categories.png')}}" alt="category"> Shop by category</p>
                    <ul>
                        <li><a href="{{route('user.home')}}">Automobiles & Spare Parts</a></li>
                        <li><a href="{{route('user.home')}}">Appliances</a></li>
                        <li><a href="{{route('user.home')}}">Beauty & Personal Care</a></li>
                        <li><a href="{{route('user.home')}}">Electronics</a></li>
                        <li><a href="{{route('user.home')}}">Clothing & Shoes</a></li>
                        <li><a href="{{route('user.home')}}">Jewelry & Watches</a></li>
                    </ul>
                </div>
                <div class="signin__block">
                    
                         <a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal" class="form-btn" data-form="1">Sign In</a>
                    
                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal" class="form-btn"
                        data-form="2">Register</a>
                </div>
            </div>
        </div>
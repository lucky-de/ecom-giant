
    <footer>
        <div class="container">
            <div class="footer__row">
                <div class="media__block">
                    <img src="{{ URL::to('web/asstes/img/logo.svg')}}" alt="GiantCart">
                    <div class="media__links">
                        <a href="#"><img src="{{ URL::to('web/asstes/img/fb.svg')}}" alt="facebook"></a>
                        <a href="#"><img src="{{ URL::to('web/asstes/img/twitter.svg')}}" alt="twitter"></a>
                        <a href="#"><img src="{{ URL::to('web/asstes/img/instagram.svg')}}" alt="instagram"></a>
                    </div>
                </div>
                <div class="anchor__block">
                    <p>Quick Links</p>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="checkout.html">Order Now</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="anchor__block">
                    <p>Services</p>
                    <ul>
                        <li><a href="deals.html">Today's Deal</a></li>
                        <li><a href="contact-us.html">Customer Service</a></li>
                        <li><a href="index.html">Registery</a></li>
                        <li><a href="index.html">Gift Cards</a></li>
                        <li><a href="make-money.html">Make Money With Us</a></li>
                    </ul>
                </div>
                <div class="anchor__block">
                    <p>Legal</p>
                    <ul>
                        <li><a href="terms.html">Terms & Condition</a></li>
                        <li><a href="terms.html">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="contact__block">
                    <p>Contact Us</p>
                    <ul>
                        <li><a href="#"><img src="{{ URL::to('web/asstes/img/location.svg')}}" alt="location"> 1010 Avenue, sw 54321,
                                Chandigarh</a></li>
                        <li><a href="#"><img src="{{ URL::to('web/asstes/img/mail.svg')}}" alt="mail">giantcart@gmail.com</a></li>
                        <li><a href="#"><img src="{{ URL::to('web/asstes/img/phone.svg')}}" alt="phone">123 - 456 - 7890</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright © 2022, All Right Reserved</p>
            </div>
        </div>
    </footer>





    <!-- OTP Modal -->
    <div class="modal fade" id="hiddenModalOTP" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="otp__form">
                <div class="form__header">
                    <h3>OTP Verification</h3>
                    <p>Enter the 6-digit code we just sent to
                        <span>abcyz@gmail.com</span> to continue.
                    </p>
                </div>
                <form class="flex">
                    <div class="input__grp">

                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn">Verify Account <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
                <p>Didn’t receive code? <span>Resend OTP</span></p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div data-formnum="1" class="signin__form d-none">
                <div class="form__header">
                    <h3>Sign In</h3>
                    <div class="flex">
                        <p>Don’t have an account?</p>
                        <button class="form-btn" data-form="2">Sign Up here</button>
                    </div>
                </div>
                  <form id="userlogin_form" method="post" name="add_form" >
                    {{csrf_field()}}
                    <input type="text" name="email" class="form-control" placeholder="Email / Phone number">
                    <input type="password" name="password" class="form-control" placeholder="Password">

                    <div id="login_resposce_msg"></div>


                    <button type="button" onclick="user_login()"  class="btn btn-primary">Sign In
                    <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
                <button class="form-btn" data-form="3">Forgot Password?</button>
                <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div data-formnum="2" class="signin__form signup__form d-none">
                <div class="form__header">
                    <h3>Sign Up</h3>
                    <div class="flex">
                        <p>Already have an account?</p>
                        <button class="form-btn" data-form="1">Log In</button>

                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                 <form id="userregistration_form" method="post" name="add_form" >
                    {{csrf_field()}}

                    <input type="text" class="form-control" placeholder="Your name" name="reg_name">
                    <input type="number" class="form-control" placeholder="Phone number" name="reg_mobile">
                    <input type="email" class="form-control" placeholder="Email Address" name="reg_email">
                    <input type="password" class="form-control" placeholder="Password" name="reg_passs">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkText">
                        <label class="form-check-label" for="checkText">Yes, I agree with GiantCart <a href="#">Privacy
                                Policy</a> and
                            <a href="#">Terms of Use</a></label>
                    </div>

                    <div id="registration_resposce_msg"></div>


                    <button type="button" onclick="userregistration()" class="btn btn-primary">Sign Up <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div data-formnum="3" class="signin__form forget__format d-none">
                <div class="form__header">
                    <h3>Lost Your Password?</h3>
                    <div class="flex">
                        <p>Please enter your username or email address. You will
                            receive a link to create a new password via email.</p>
                    </div>
                </div>
                <form>
                    <input type="text" class="form-control" placeholder="Email / Phone number">
                    <button type="submit" class="btn btn-primary">Reset Password <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
                <div class="flex">
                    <p>Remember now?</p>
                    <button class="form-btn" data-form="1">Back to Login</button>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>


      <div class="modal fade" id="sellerOnboard" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="signin__form signup__form">
                <div class="form__header">
                    <h3>Create an Account</h3>
                    <div class="flex">
                        <p>Already have an account?</p>
                        <button class="form-btn" data-form="1">Log In</button>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="selleronboard_form" method="post" name="add_form" >
                        {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First Name" name="first_name" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Business Name" name="business_name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Phone Number" name="mobile" required>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Alternate Phone Number" name="phone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Email Address" name="user_email" required>
                        </div>
                        <div class="col-md-6">
                            <div class="pass__input">
                                <div class="pass__toggler">
                                    <img src="{{ URL::to('web/asstes/img/password-view.svg')}}" alt="password-view" class="img-fluid">
                                </div>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Address" name="address">
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-select form-control" name="city">
                                <option selected="">City</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select form-control" name="state">
                                <option selected="">State</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Postal / Zip Code" name="zip_code" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="TIN Number" name="tin_number" required>
                        </div>
                    </div>
                    <textarea class="form-control" placeholder="Description of product/service being displayed"
                        rows="4" name="about_business"></textarea>
                    <p class="product__upload--title">Business License</p>
                    <div class="upload__product">
                        <img src="{{ URL::to('web/asstes/img/product-icon.svg')}}" alt="icon">
                        <label for="inputFile01">Drop your images here,
                            or <span>click to browse</span></label>
                        <input name="business_license"  type="file" class="form-control" id="inputFile01" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkText">
                        <label class="form-check-label" for="checkText">Yes, I agree with GiantCart <a href="#">Privacy
                                Policy</a> and
                            <a href="#">Terms of Use</a></label>
                    </div>

                    <div id="vendor_resposce_msg"></div>

                    <button type="button" onclick="become_seller()" class="btn btn-primary">Sign Up <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>




    <!-- Rating Modal -->
    <div class="modal fade" id="hiddenModalRating" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="signin__form rating__form">
                <div class="form__header">
                    <h3>Share Your Feedback</h3>
                    <p>How was your last order?</p>
                    <div class="rate clearfix">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
                <form>
                    <input type="text" class="form-control" placeholder="Your Name">
                    <input type="text" class="form-control" placeholder="Email / Phone number">
                    <textarea class="form-control" placeholder="Leave a comment here"></textarea>
                    <button type="submit" class="btn btn-primary">Submit Review <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ URL::to('web/asstes/js/custom.js')}}"></script>

    <script type="text/javascript">
        $(() => {
            updateCart();
        });

        $(document).on("click", '#minCartPrd', function() {
            let productId = $('#minCartPrd').attr('id_attr');
            let qty = $('#cart_' + productId + ' .item__count span').html();

            if (qty - 1 === 0) {
                return;
            }

            let headers = {'X-CSRF-TOKEN': '{{ csrf_token() }}'};
            var form_data = new FormData();
            form_data.append('product_id', productId);
            form_data.append('qty', parseInt(qty) - 1);
            
             var API_URL = "{{ route('get_cart_data') }}";
   
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
                        updateCart()
                    } else {
                        alert(result.message);
                    }
                }
            });
        });

        $(document).on("click", '#plusCartPrd', function() {
            let productId = $('#plusCartPrd').attr('id_attr');
            let qty = $('#cart_' + productId + ' .item__count span').html();

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
                        updateCart()
                    } else {
                        alert(result.message);
                    }
                }
            });
        });

        $(document).on("click", '#removeCartPrd', function() {
            let productId = $('#removeCartPrd').attr('id_attr');

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
                        updateCart()
                    } else {
                        alert(result.message);
                    }
                }
            });
        });

        // Cart update
        function updateCart() {
           var API_URL = "{{ route('get_cart_data') }}";

            $.ajax({
                url			: API_URL,
                type		: "GET",
                contentType	: false,
                cache		: false,
                processData	:false,
                success		: function(result){
                    if(result.status) {
                        $('.sidecart__item').remove();

                        var subTotal = 0;
                        $.each(result.data, function(index, value) {
                            subTotal += value.total_price;
                            let dataCart = '<div class="sidecart__item" id="cart_' + value.product_id + '">\n' +
                                ' <div class="sc__img">\n' +
                                ' <img src="{{ URL::to(config('constants.PRODUCTS')) }}/' + value.product_detail.image + '" alt="' + value.product_detail.title + '" class="img-fluid">\n' +
                                ' </div>\n' +
                                ' <div class="sc__info">\n' +
                                ' <p>' + value.product_detail.title + '</p>\n' +
                                ' <p id="prdTotalPrice">$' + value.total_price + '</p>\n' +
                                ' <div class="sc__btns">\n' +
                                ' <div class="item__count">\n' +
                                ' <button id="minCartPrd" id_attr="' + value.product_id + '">-</button>\n' +
                                ' <span>' + value.quantity + '</span>\n' +
                                ' <button id="plusCartPrd" id_attr="' + value.product_id + '">+</button>\n' +
                                ' </div>\n' +
                                ' <button id="removeCartPrd" id_attr="' + value.product_id + '">Remove</button>\n' +
                                ' </div>\n' +
                                ' </div>\n' +
                                ' </div>';
                            $('.side__cart').append(dataCart);
                        });
                        $('.cart__btn span').html(result.data.length);
                        $('#cart-subtotal').html('$' + subTotal);
                        $('#cart-total').html('$' + subTotal);

                    } else {
                        alert(result.message);
                    }
                }
            });
        }

        function become_seller()
        {
             var form = $('#selleronboard_form')[0];
             var formData = new FormData(form);
              formData.append('business_license', $('input[type=file]')[0].files[0]);
             var API_URL = "{{ route('admin.seller.store') }}";

                $.ajax({
                    url: API_URL,
                     type: 'POST',
                     data: formData,
                     async: false,
                     dataType: 'json',
                     contentType: false,
                     processData: false,
                     success: function (data)
                     {
                        $('#vendor_resposce_msg').html('');

                        if (data["status"] == 1){

                        $('#vendor_resposce_msg').html('<div class="alert alert-success">'+data['msg']+'</div>');
                            setTimeout(function() {
                                $('#selleronboard_form')[0].reset();
                                $('#sellerOnboard').modal('hide');
                            },1500);

                       } else if (data["status"] == 2){
                        alert(1);
                            $('#vendor_resposce_msg').html('<div class="alert alert-danger">'+data['msg']+'</div>');
                       }
                       else{
                            $('#vendor_resposce_msg').html('<div class="alert alert-danger">'+data['msg']+'</div>');
                       }
                        setTimeout(function() {
                                $('#vendor_resposce_msg').html('')
                        },2000);
                    },
                    error: function (data) {
                        alert('server unavailable');
                    }
                });
          }


        function userregistration()
        {
            var form = $('#userregistration_form')[0];
            var formData = new FormData(form);
            var API_URL = "{{ route('admin.user.register') }}";
                $.ajax({
                    url: API_URL,
                     type: 'POST',
                     data: formData,
                     async: false,
                     dataType: 'json',
                     contentType: false,
                     processData: false,
                     success: function (data)
                     {
                        $('#registration_resposce_msg').html('');
                        if (data["status"] == 1){
                            $('#registration_resposce_msg').html('<div class="alert alert-success">'+data['msg']+'</div>');
                            setTimeout(function() {
                                $('#userregistration_form')[0].reset();
                                $('#loginmodal').modal('hide');
                            },1500);

                       }
                        else if (data["status"] == 2){
                            $('#registration_resposce_msg').html('<div class="alert alert-danger">'+data['msg']+'</div>');
                       } else{

                        $('#registration_resposce_msg').html('<div class="alert alert-danger">'+data['msg']+'</div>');
                       }

                         setTimeout(function() {
                                $('#registration_resposce_msg').html('')
                        },2000);

                    },
                    error: function (data) {
                        alert('server unavailable');
                    }
                });
          }



        function user_login()
        {
             var form = $('#userlogin_form')[0];
             var formData = new FormData(form);
             var API_URL = "{{ route('admin.user.store') }}";

                $.ajax({
                    url: API_URL,
                     type: 'POST',
                     data: formData,
                     async: false,
                     dataType: 'json',
                     contentType: false,
                     processData: false,
                     success: function (data)
                     {

                        /*<div id="login_resposce_msg"></div>*/


                        $('#login_resposce_msg').html('');

                       if (data["status"] == 1){

                            $('#login_resposce_msg').html('<div class="alert alert-success">'+data['msg']+'</div>')

                            setTimeout(function() {
                                window.location.href = '{{url("dashboard")}}';
                            },1500);


                       }else if (data["status"] == 2){
                            $('#login_resposce_msg').html('<div class="alert alert-danger">'+data['msg']+'</div>')
                       }

                       else{
                            $('#login_resposce_msg').html('<div class="alert alert-danger">'+data['msg']+'</div>')
                       }
                        setTimeout(function() {
                                $('#login_resposce_msg').html('')
                        },2000);

                    },
                    error: function (data) {
                        alert('server unavailable');
                    }
                });
          }



    </script>


</body>

</html>

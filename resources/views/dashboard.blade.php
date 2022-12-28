@include('web.components.header')
 

    <div class="slide__nav">
       @include('layouts.sidebar')
    </div>
   
    <!-- Modal -->
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
                <form>
                    <input type="text" class="form-control" placeholder="Email / Phone number">
                    <input type="password" class="form-control" placeholder="Password">
                    <button type="submit" class="btn btn-primary">Sign In

                        <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
                            alt="submit"></button>
                </form>
                <button class="form-btn" data-form="3">Forgot Password?</button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                <form>
                    <input type="text" class="form-control" placeholder="Your name">
                    <input type="number" class="form-control" placeholder="Phone number">
                    <input type="email" class="form-control" placeholder="Email Address">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkText">
                        <label class="form-check-label" for="checkText">Yes, I agree with GiantCart <a href="#">Privacy
                                Policy</a> and
                            <a href="#">Terms of Use</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up <img src="{{ URL::to('web/asstes/img/arrow-right.svg')}}"
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



        @if(Auth::user()->type == 'vendor')
            @include('vendor_dashboard')
        @else
            @include('user_dashboard')
        @endif

    <!-- Add Product Modal -->
    <div class="modal fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div data-formnum="2" class="signin__form addproduct__from">
                <div class="form__header">
                    <h3>Add Product</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="vendorproduct_form" method="post" name="vendorproduct_form" >
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <input name="title" id="title" type="text" class="form-control" placeholder="Product Name">
                        </div>
                        <div class="col-md-6">
                            <select class="form-select form-control" name="category_id">
                                <option selected>Category</option>
                               @foreach($data['categories'] as $category)
                                    <option value="{{$category['id']}}">{{$category['title']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <textarea name="description" class="form-control" placeholder="Description of product" rows="4"></textarea>
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-select form-control" name="brand_id">
                                <option selected>Brand</option>
                                @foreach($data['brands'] as $brand)
                                    <option value="{{$brand['id']}}">{{$brand['title']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Price" name="price" id="price">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Min Quantity for bulk price" name="min_quantity" id="min_quantity">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="B2B Price" name="b2b_Price" id="b2b_Price">
                        </div>
                    </div>
                    <style>
                        .hide{
                            display:none;
                        }
                    </style>
                    <p class="product__upload--title">Product Images</p>
                    <div class="product__upload">
                        <div class="sample__product">
                            <img src="{{ URL::to('web/asstes/img/sample-product.png')}}" alt="sample__product">
                        </div>
                        <div class="upload__product">
                            <img src="" alt="icon" id="image_preview" style="width: 100%;" class="hide">
                            <label for="inputFile01">Drop your images here,
                                or <span>click to browse</span></label>
                            <input name="category_image" type="file" class="form-control" id="inputFile01" onchange="readURLImage(this,'image_preview')">
                        </div>
                        <div class="upload__product--group">
                            <div class="upload__product">
                                <img src="" alt="icon" id="image_second_preview" style="width: 100%;" class="hide">
                                <label for="inputFile02">Drop your images here,
                                    or <span>click to browse</span></label>
                                <input name="image_second" type="file" class="form-control" id="inputFile02" onchange="readURLImage(this,'image_second_preview')">
                            </div>
                            <div class="upload__product">
                                <img src="" alt="icon" id="image_third_preview" style="width: 100%;" class="hide">
                                <label for="inputFile03">Drop your images here,
                                    or <span>click to browse</span></label>
                                <input name="image_third" type="file" class="form-control" id="inputFile03" onchange="readURLImage(this,'image_third_preview')">
                            </div>
                        </div>
                    </div>
                    <p>You need to add at least 4 images.Pay attention to the quality of the pictures you add, comply
                        with the background color
                        standards. Pictures must be in certain dimensions. Notice that the product shows all the details
                    </p>

                    <div id="registration_resposce_msg"></div>

                    <button type="button" onclick="vendorproduct()" class="btn btn-primary">Add Product</button>
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ URL::to('web/asstes/js/custom.js')}}"></script>

    <script type="text/javascript">

        function vendorproduct()
        {
            var form = $('#vendorproduct_form')[0];
            var formData = new FormData(form);
            formData.append('file', $('input[type=file]')[0].files[0]);


            var API_URL = "{{ route('admin.vendorproduct.store') }}";
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
                                $('#vendorproduct_form')[0].reset();
                                $('#addproduct').modal('hide');
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

          function readURLImage(input,img_preview)
            {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                    $('#'+img_preview).removeClass('hide');
                    $('#'+img_preview).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
                }
            }

    </script>

</body>

</html>

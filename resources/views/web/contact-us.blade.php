  @include('web.components.header')

    <main>
        <div class="breadcrumb__section">
            <div class="breadcrumb__block">
                <h3>Contact Us</h3>
                <a href="#">Home</a>
                <span><img src="{{ URL::to('web/asstes/img/breadcrumb-arrow.svg') }}" alt="arrow"></span>
                <a href="#">Contact us</a>
            </div>
        </div>
        <div class="container">
            <section class="contact__section">
                <h3>We would love to hear from you.</h3>
                <p>If you’ve got great products your making or looking to work with us then drop us a line.</p>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder="Your Name*">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="form-control" placeholder="Your Email*">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <textarea class="form-control" rows="9" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit">Submit Now <img src="./asstes/img/arrow-right.svg" alt="submit"></button>
                </form>
            </section>
            <section class="map__section">
                <iframe height="500" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=Ethiopia&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </section>
        </div>
    </main>


  @include('web.components.footer')

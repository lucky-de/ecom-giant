  @include('web.components.header')
 



  <main>
        <div class="breadcrumb__section">
            <div class="breadcrumb__block">
                <h3>About Us</h3>
                <a href="#">Home</a>
                <span><img src=" {{ URL::to('web/asstes/img/breadcrumb-arrow.svg') }}" alt="arrow"></span>
                <a href="#">About us</a>
            </div>
        </div>
        <div class="container">
            <section class="abouttext__section">
                <img src="./asstes/img/logo.svg" alt="Giantcart">
                <h3>From Our Door To Your Door</h3>
                <p>GiantCart houses Ethiopia's finest products, ranging from fast-moving goods to farm produce and
                    everything in between.
                    When you're away from home, the one thing that can make you feel better is having easy access to
                    local products. At
                    GiantCart, we completely understand. Here, we deliver locally-made products from Ethiopian markets
                    to your door anywhere
                    in the world. We believe that people should have unrestricted access to whatever products they want,
                    from wherever they
                    want. Our online store offers a dependable platform for accessing and purchasing all products
                    ranging from raw farm
                    products to industrial products. Wherever you are in the world, whether in Europe, the Americas, or
                    Asia, you can order
                    any product from our website and have it delivered to your door with a few taps on your smartphone.
                </p>
            </section>
            <section class="aboutvalues__section">
                <h3>Our <span>Values</span></h3>
                <div class="our__values">
                    <div class="flex-1">
                        <img src="./asstes/img/value-icon1.svg" alt="Reliablity">
                        <h4>Reliablity</h4>
                        <p>Our platform accepts and processes orders 24 hours a day, seven days a week. You can rely on
                            us for your most pressing
                            purchases.</p>
                    </div>
                    <div class="flex-1">
                        <img src="./asstes/img/value-icon2.svg" alt="Professionalism">
                        <h4>Professionalism</h4>
                        <p>Our employees have been thoroughly trained to handle all order processes on the platform. You
                            don't have to be concerned
                            about unprofessional employees leaving a bad taste in your mouth. Excellent Customer Service
                            We have a dedicated
                            customer service team that is eager to make your experience with us unforgettable.</p>
                    </div>
                    <div class="flex-1">
                        <img src="./asstes/img/value-icon3.svg" alt="Secure Transactions">
                        <h4>Secure Transactions</h4>
                        <p>Our platform is completely secure, with cutting-edge security measures in place to ensure
                            that all transactions are
                            encrypted and free of threats.</p>
                    </div>
                </div>
            </section>
            <div class="newsletter__section">
                <div class="newsletter__block">
                    <h2>Subscribe <span>Newsletter</span></h2>
                    <h3>Be the first to know about updates</h3>
                    <form>
                        <input type="text" class="form-control" id="staticEmail" placeholder="Enter your email">
                        <button type="submit"><img src="./asstes/img/arrow-right.svg" alt="submit"></button>
                    </form>
                </div>
            </div>
        </div>
    </main>




  @include('web.components.footer')

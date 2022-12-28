  @include('web.components.header')


 <main>
        <div class="breadcrumb__section">
            <div class="breadcrumb__block">
                <h3>Make Money With Us</h3>
                <a href="#">Home</a>
                <span><img src="{{ URL::to('web/web/asstes/img/breadcrumb-arrow.svg') }}" alt="arrow"></span>
                <a href="#">Make Money With Us</a>
            </div>
        </div>
        <div class="container">
            <section class="makemoney__section">
                <div class="tab__btns">
                    <button class="tab-btn active" data-tabname="why">Why GiantCart?</button>
                    <button class="tab-btn" data-tabname="how">How To Start Selling On GiantCart</button>
                    <button class="tab-btn" data-tabname="compare">Individual V/S Professional Seller
                        Account</button>
                </div>
                <div class="tab__contents">
                    <div class="each__tab" data-tabfor="why">
                        <div class="why__gc">
                            <div class="mb-5">
                                <h3>What is E-commerce?</h3>
                                <p>Ecommerce can be defined as the buying and selling of goods electronically
                                    online. Its popular because of the many
                                    benefits of e-business -internet marketing, electronic funds transfer, mobile
                                    commerce – this is broken up into two
                                    parts.</p>
                                <ul>
                                    <li>Online retail shopping that goes directly to consumers through mobile apps,
                                        websites and even voice assistants, chats,
                                        chatbots etc.</li>
                                    <li>Sellers being a part of online marketplaces where many third-party sales
                                        take place.</li>
                                </ul>
                            </div>
                            <div class="mb-5">
                                <h3>Advantages of E-commerce</h3>
                                <p>The online marketplace is a good platform for you to expand your business. We are
                                    going to explain what kind of
                                    advantages there are by sharing what we know about online selling. In brief,
                                    these are the plus points we will talk
                                    about.</p>
                                <ul>
                                    <li>Product and price comparison</li>
                                    <li>Faster buying process</li>
                                    <li>Store and product listing creation</li>
                                    <li>Cost reduction</li>
                                    <li>Affordable advertising and marketing</li>
                                    <li>Flexibility for customers</li>
                                    <li>No reach limitations</li>
                                    <li>Faster response to buyer/market demands</li>
                                    <li>Several payment modes</li>
                                </ul>
                            </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#sellerOnboard"
                                class="become__seller">Become a Seller <img src="./web/asstes/img/arrow-right.svg"
                                    alt="arrow"> </a>
                        </div>
                    </div>
                    <div class="each__tab d-none" data-tabfor="how">
                        <div class="howto__start">
                            <div class="flex">
                                <div>
                                    <h3>Start Selling on GiantCart</h3>
                                    <p>Whether you’ve already got an established ecommerce business, a great idea
                                        for a new product, or you just have a passion
                                        for selling, here’s how to take that next step with GiantCart.</p>
                                </div>
                                <div>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cIMM4TJMDRI"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#sellerOnboard"
                                class="become__seller">Become a Seller <img src="{{ URL::to('web/web/asstes/img/arrow-right.svg') }}"
                                    alt="arrow">
                            </a>
                        </div>
                    </div>
                    <div class="each__tab d-none" data-tabfor="compare">
                        <div class="seller__acc">
                            <div class="choosing__plan">
                                <h3>Choose a Selling Plan</h3>
                                <p>With the Individual plan, you’ll pay $0.99 every time you sell an item. The
                                    Professional plan costs $39.99 per month, no
                                    matter how many items you sell. For both plans, GiantCart also collects a
                                    <a href="#">referral fee</a> on each sale, which is a
                                    percentage of the total transaction and varies by product category. Visit
                                    our <a href="#">pricing page</a> for a summary of selling
                                    fees.
                                </p>
                            </div>
                            <div class="selling__plan">
                                <h3>Selling Plans</h3>
                                <p>Our selling plans give you the freedom to pay per sale or stick to a flat monthly
                                    fee. You can change or cancel your
                                    plan at any time.</p>
                                <ul class="plan__block">
                                    <li>
                                        <div>Plans</div>
                                        <div>Individual</div>
                                        <div>Professional</div>
                                    </li>
                                    <li>
                                        <div></div>
                                        <div>
                                            <p><span>$0.99</span>/ item sold</p>
                                            <p>+ additional selling fees</p>
                                        </div>
                                        <div>
                                            <p><span>$39.99</span>/ month</p>
                                            <p>+ additional selling fees</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="overview__block">
                                <h3>Overview</h3>
                                <div class="flex">
                                    <div>
                                        <p>This plan might be right for you if...</p>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>You sell fewer than 40 units a month</li>
                                            <li>You're still deciding what to sell</li>
                                            <li>You don't plan to advertise or use advanced selling tools</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>You sell more than 40 units a month</li>
                                            <li>You want to advertise your products</li>
                                            <li>You want to qualify for top placement on product detail pages</li>
                                            <li>You want to use advanced selling tools, like APIs and reports</li>
                                            <li>You want to sell products in restricted categories</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="plan__features">
                                <h3>Selling Plan Features</h3>
                                <ul>
                                    <li>
                                        <span>Add new products to the Amazon catalog</span>
                                        <span><img src="{{url('/web/asstes/img/bluetick.svg')}}" alt="tick"></span>
                                        <span><img src="{{url('/web/asstes/img/bluetick.svg')}}" alt="tick"></span>
                                    </li>
                                    <li>
                                        <span>Grow your business with Fulfillment by GiantCart</span>
                                        <span><img src="{{url('/web/asstes/img/bluetick.svg')}}" alt="tick"></span>
                                        <span><img src="{{url('/web/asstes/img/bluetick.svg')}}" alt="tick"></span>
                                    </li>
                                    <li>
                                        <span>Apply to sell in additional categories</span>
                                        <span></span>
                                        <span><img src="{{url('/web/asstes/img/bluetick.svg')}}" alt="tick"></span>
                                    </li>
                                    <li>
                                        <span>Save time creating listings in bulk</span>
                                        <span></span>
                                        <span><img src="{{url('/web/asstes/img/bluetick.svg')}}" alt="tick"></span>
                                    </li>
                                    <li>
                                        <span>Manage inventory with feeds, spreadsheets, and reports</span>
                                        <span></span>
                                        <span><img src="{{url('/web/asstes/img/bluetick.svg')}}" alt="tick"></span>
                                    </li>
                                    <li>
                                        <span>Qualify for top placement on product detail pages</span>
                                        <span></span>
                                        <span><img src="{{url('/web/asstes/img/bluetick.svg')}}" alt="tick"></span>
                                    </li>
                                </ul>
                                <div class="flex">
                                    <div></div>
                                    <div class="text-center"><a href="#">Sign up for Individual</a></div>
                                    <div class="text-center"><a href="#">Sign up for Professional</a></div>
                                </div>
                            </div>
                            <div class="refferal__fees">
                                <h3>Category Referral Fees</h3>
                                <p>Below is the fees table showing referral fees for different categories.</p>
                                <ul>
                                    <li>
                                        <div class="text-left">Category</div>
                                        <div class="text-center">Referral Fee Percentage</div>
                                        <div class="text-center">Referral Fee Minimum</div>
                                    </li>
                                    <li>
                                        <div class="text-left">Appliances - Compact (including parts and
                                            accessories)</div>
                                        <div class="text-center">
                                            <ul>
                                                <li>15% for the portion of the total sales price up to $300.00,
                                                    and</li>
                                                <li>8% for any portion of the total sales price greater than
                                                    $300.00</li>
                                            </ul>
                                        </div>
                                        <div class="text-center">$0.30</div>
                                    </li>
                                    <li>
                                        <div class="text-left">Appliances - Full-size</div>
                                        <div class="text-center">8%</div>
                                        <div class="text-center">$0.30</div>
                                    </li>
                                    <li>
                                        <div class="text-left">Beauty</div>
                                        <div class="text-center">
                                            <ul>
                                                <li>8% for products with a total sales price of $10.00 or less,
                                                    and</li>
                                                <li>15% for items with a total sales price greater than $10.00</li>
                                            </ul>
                                        </div>
                                        <div class="text-center">$0.30</div>
                                    </li>
                                    <li>
                                        <div class="text-left">Cell Phone Devices *</div>
                                        <div class="text-center">8%</div>
                                        <div class="text-center">$0.30</div>
                                    </li>
                                    <li>
                                        <div class="text-left">Clothing & Accessories (excluding Shoes, Handbags, &
                                            Sunglasses)</div>
                                        <div class="text-center">17%</div>
                                        <div class="text-center">$0.30</div>
                                    </li>
                                </ul>
                                <div class="refferal__terms">
                                    <ul>
                                        <li><sup>1</sup> Shipping Cost Per Sale” value will be $0 for users who
                                            select
                                            Fulfillment By GiantCart.</li>
                                        <li><sup>2</sup> Return value will be $0 for users who select Fulfillment by
                                            seller.</li>
                                        <li><sup>3</sup> The Everything Else category is available to sellers for
                                            products that
                                            do not clearly fit within existing categories.
                                            Do not list items in the Everything Else category that appropriately
                                            fall within another category.</li>
                                    </ul>
                                    <p>* Approval is required to sell in these categories, to protect the customer
                                        experience and allow them to shop with
                                        confidence on GiantCart.</p>
                                </div>
                            </div>
                            <div class="adding__products">
                                <h3>Adding Your Products</h3>
                                <p>Here’s a short video explaining how to add products to sell on GiantCart.</p>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/cIMM4TJMDRI"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="attract__customers">
                                <div class="flex">
                                    <div>
                                        <h3>Attracting Customers</h3>
                                        <p>Once your products go live in GiantCart's stores, there are a number of
                                            things
                                            you can do to attract customers. The
                                            GiantCart Flywheel describes our method for driving growth.</p>

                                        <p>Below are some ways to consider using “GiantCart Flywheel” principles to
                                            generate momentum for your business.</p>
                                    </div>
                                    <div class="attract__img">
                                        <img src="{{url('/web/asstes/img/export.png')}}" alt="Attracting Customers" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="advertise__offers">
                                <h3>Advertise Your Offers</h3>
                                <p>Help improve visibility of individual products and boost brand awareness by
                                    advertising in search results and on product
                                    pages. Running a deal or a coupon is another way to promote your products.</p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#sellerOnboard"
                                    class="become__seller">Become a Seller <img src="{{('/web/asstes/img/arrow-right.svg')}}"
                                        alt="Become a Seller "></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="start__selling">
                <h3>Start <span>Selling Today</span></h3>
                <p>Put your products in front of the millions of customers who search GiantCart every day.</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#sellerOnboard">Sign Up <img
                        src="{{('/web/asstes/img/arrow-right.svg')}}" alt="Become a Seller "></a>
                <p>$39.99 a month + selling fees</p>
                <div class="selling__model">
                    <img src="{{('/web/asstes/img/start_sell.png')}}" alt="Selling Today" class="img-fluid">
                </div>
            </section>
        </div>
    </main>

  @include('web.components.footer')

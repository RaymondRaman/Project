<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c534ff95df.js" crossorigin="anonymous"></script>
    <title>ArtTech</title>
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- CSS -->
    <style>
        :root {
            --dark-grey: #222
            --gray: #262626;
            --golden-treasure: #ffbd27;
            --tangaroa: #041E42;
            --white: #fff;
            --black: #000;
            --dark-cyan: #088178;
            --alice-blue: #F1FBFF;
            --secluded-woods: #465b52;
            --dark-blue: #6c757d;
            --stormy-blue: #818ea0;
            --blue: #0000ff;
            --black-russian: #000000a6;
        }

        * {
            font-family: 'Spartan', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            font-size: 50px;
            line-height: 64px;
            color: var(--dark-grey);
        }

        h2 {
            font-size: 46px;
            line-height: 54px;
            color: var(--dark-grey);
        }

        h4 {

            font-size: 20px;
            color: var(--dark-grey);
        }


        h6 {
            font-weight: 700;
            font-size: 12px;
        }

        p {
            margin: 15px 0px 20px 0;
            font-size: 20px;
            line-height: 1.9;
        }

        .section-padding {
            padding: 100px 80px;
        }

        .section-m1 {
            margin: 40px 0;
        }

        body {
            width: 100%;
            background: var(--alice-blue);
            overflow-x: hidden;
            zoom: 80%;
        }

        /* header css starts */
        .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
            height: 50px;
        }

        .navbar-light .navbar-brand {
            font-size: 25px;
            font-weight: 700;
        }

        .navbar li {
            list-style: none;
            padding: 0 10px;
            position: relative;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-nav a {
            text-decoration: none;
            font-size: 20px;
            text-transform: uppercase;
            transition: 0.3s ease;
            font-weight: 500;
            color: var(--black-russian);

        }

        .navbar li a:hover,
        .navbar li a.nav-link.active {
            color: var(--dark-cyan);
        }

        .navbar li a.nav-link.active::after,
        .navbar li a:hover::after {
            content: "";
            width: 30%;
            height: 2px;
            background: var(--dark-cyan);
            position: absolute;
            bottom: -4px;
            left: 20px;
        }

        button.normal {
            font-size: 14px;
            font-weight: 600;
            padding: 15px 30px;
            color: var(--black);
            background-color: var(--white);
            border-radius: 4px;
            cursor: pointer;
            border: none;
            outline: none;
            transition: 0.2s;
        }

        .carousel-item {
            min-height: 300px;
        }

        .carousel-img {
            object-fit: cover;
            height: 125vh;
            width: 100%;
        }

        .carousel-caption {
            bottom: 220px;
            z-index: 2;
        }

        .carousel-caption h5 {
            font-size: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 100px;
        }

        .carousel-caption p {
            font-size: 20px;
        }

        .carousel-inner:before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        /* header css ends */

        /* product features css starts */
        .feature {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .feature .fe-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 230px;
            text-align: center;
            padding: 25px 15px;
            box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.15);
            border: 1px solid #cccce7d0;
            margin: 20px 10px;
        }

        .feature .fe-box:hover {
            box-shadow: 10px 10px 54px rgba(70, 62, 221, 0.1);
        }

        .feature .fe-box img {
            margin-bottom: 10px;
            width: 100%;
        }

        /* product features css end */
        /* Testimonials css starts */
        #testimonial-carousel .carousel-inner:before {
            background: none;
        }

        #testimonial-carousel .card {
            width: 100%;
            transform-style: preserve-3d;
            perspective: 500px;
            border: none;
            background-color: inherit;
        }

        #testimonial-carousel .box {
            align-items: center;
            justify-content: center;
            color: var(--gray);
            width: 100%;
            height: 100%;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            background: #fff;
            transform-style: preserve-3d;
            transition: 0.5s;
            backface-visibility: hidden;
            justify-content: center;
            min-height: 320px;
        }

        #testimonial-carousel p {
            font-size: 15px;
            padding-left: 13px;
        }

        #testimonial-carousel h4 {
            font-size: 20px;
            padding-left: 13px;
        }

        #testimonial-carousel h5 {
            font-size: 25px;
            padding-left: 13px;
        }

        /* Testimonials css ends */

        /* banner css starts */
        .banner {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-image: url("https://plus.unsplash.com/premium_photo-1682310420902-4d28c8c3fd53?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjI2fHxzYWxlcyUyMGJhbm5lcnxlbnwwfDB8MHx8&auto=format&fit=crop&w=700&q=60");
            width: 100%;
            height: 20vh;
            background-size: cover;
            background-position: center;
            padding-top: 60px;
        }

        .banner h3 {
            color: var(--black);
            font-size: 25px;
            padding: 10px 26px;
        }

        .banner h2 {
            color: var(--black);
            font-size: 30px;
        }

        .banner h2 span {
            color: var(--golden-treasure);
            padding-bottom: 10px;
        }

        .banner button:hover {
            background-color: var(--dark-cyan);
            color: var(--white);
            padding: 10px 26px;
        }

        /* banner css ends */



        /* Contact css starts */
        .contact button {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
            height: 5vh;
        }

        .contact button:hover {
            background-color: var(--blue);
            color: var(--white);
        }

        input[type="checkbox"] {
            margin-right: 10px;
            vertical-align: middle;
        }

        /* Contact css ends */
        /* newsletter css starts */
        #newsletter {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            background-position: 20% 20%;
            background-color: var(--tangaroa);
            width: 100%;
            height: 20vh;
        }

        #newsletter h2 {
            font-size: 30px;
            font-weight: 700;
            color: var(--white);
            padding: 0px 26px;
        }

        #newsletter .form {
            display: flex;
            width: 30%;
            padding: 0px 26px;
        }

        #newsletter h4 {
            font-size: 17px;
            font-weight: 600;
            color: var(--stormy-blue);
            padding: 0px 26px;
            ;
        }

        #newsletter h4 span {
            color: var(--golden-treasure);
        }


        #newsletter input {
            height: 3.125rem;
            padding: 0 1.25em;
            font-size: 14px;
            width: 40%;
            border: 1px solid transparent;
            border-radius: 4px;
            outline: none;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        #newsletter button {
            height: 3.125rem;
            background-color: var(--dark-cyan);
            color: var(--white);
            white-space: nowrap;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        /* newsletter css ends */

        /* footer css starts */

        .footer {
            margin-right: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }


        #footer .col {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        #footer h4 {
            font-size: 20px;
            padding-bottom: 20px;
        }

        #footer p {
            font-size: 20px;
            margin: 0 0 8px 0;
            color: var(--secluded-woods);
        }

        #footer a {
            font-size: 20px;
            text-decoration: none;
            color: var(--secluded-woods);
            margin-bottom: 10px;
        }

        #footer .follow {
            margin-top: 20px;
            font-size: 20px;
            color: var(--dark-blue);
        }

        #footer .follow i {
            color: var(--secluded-woods);
            padding-right: 10px;
            cursor: pointer;
            font-size: 15px;
        }

        /* footer css ends */
        /* ==responsive css== */
        @media (min-width: 477px) {

            .feature {
                justify-content: center;
                margin: 15px;
            }

            .shadow-lg {
                min-height: 380.5px;
                min-width: 220px;
            }

            h1 {
                font-size: 30px;
                line-height: 64px;
                color: var(--dark-grey);
            }

            .banner h3 {
                margin-top: 30px;
            }

            .banner h2 {
                font-size: 25px;
            }

            .banner {
                height: 30vh;
            }

            #newsletter .form {
                width: 70%;
            }

            #footer p {
                font-size: 10px;
            }

            #footer a {
                font-size: 10px;
            }

            #footer h4 {
                font-size: 15px;
                padding-bottom: 0px;
            }

            #testimonial-carousel .card {
                min-width: 10px;
                justify-content: center;
                margin-top: 20px;
            }
        }
    </style>
</head>

<!-- HTML -->

<body style="overflow-x: hidden;">
    <div id="zoom-wrapper">
        <!-- header starts -->
        <section id="header">
            <!-- Nav link -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container-fluid">
                    <!-- logo starts-->
                    <div class="logo-container">
                        <nav class="navbar navbar-light bg-light">
                            <a class="navbar-brand" href="#">
                                <i class="fa-solid fa-hat-wizard navbar-hat"></i>
                                ArtTech
                            </a>
                        </nav>
                    </div>
                    <!-- logo ends -->
                    <!-- menu starts -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav__item--home">
                                <a class="nav-link active" href="#header">Home</a>
                            </li>
                            <li class="nav__item--products">
                                <a class="nav-link" href="#product">Products</a>
                            </li>
                            <li class="nav__item--pricing">
                                <a class="nav-link" href="#pricing">Pricing</a>
                            </li>
                            <li class="nav__item--testimonials">
                                <a class="nav-link" href="#testimonials">Testimonials</a>
                            </li>
                            <li class="nav__item--contact">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <li class="nav__item--socialMedia">
                                <a class="navbar-brand" href="#">
                                    <a href="https://github.com/RaymondRaman"><i class="bi bi-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- menu ends -->
                </div>
            </nav>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="carousel-img"
                            src="https://images.unsplash.com/photo-1667835949495-78a1ea9ecd77?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8YWklMjBhcnR8ZW58MHx8MHx8&auto=format&fit=crop&w=700&q=60"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Found Your Dream Artwork!</h5>
                            <p>Expanding your market and reaching new customers who are interested in innovative.
                                Cutting-edge artwork is crucial for the growth and success of any art business. Lorem
                                ipsum
                                dolor sit amet consectetur adipisicing elit. Culpa illo architecto corrupti dicta
                                praesentium labore reprehenderit explicabo veniam deserunt eaque. Neque repellendus
                                dolorem
                                consectetur ipsam, assumenda magni tempore unde omnis!</p>
                            <p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="carousel-img"
                            src="https://images.unsplash.com/photo-1533497374533-d860dceecf74?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGFpJTIwYXJ0fGVufDB8MXwwfHw%3D&auto=format&fit=crop&w=700&q=60"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Found Your Dream Artwork!</h5>
                            <p>Experience the majesty of space in this stunning acrylic painting. Want to know more
                                about the value and benefits of this innovative technology? Lorem ipsum dolor sit amet
                                consectetur, adipisicing elit. Cumque explicabo deleniti, autem sint placeat consequatur
                                non
                                voluptas repellendus, odit aperiam officia nobis! Accusamus corporis, aliquid eligendi
                                eum
                                cupiditate eos neque! </p>
                            <p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="carousel-img"
                            src="https://images.unsplash.com/photo-1549490349-8643362247b5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjN8fGFpJTIwYXJ0fGVufDB8MXwwfHw%3D&auto=format&fit=crop&w=700&q=60"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5>Found Your Dream Artwork!</h5>
                            <p>Expanding your market and reaching new customers who are interested in innovative.
                                Cutting-edge artwork is crucial for the growth and success of any art business. Lorem
                                ipsum
                                dolor sit amet consectetur adipisicing elit. Culpa illo architecto corrupti dicta
                                praesentium labore reprehenderit explicabo veniam deserunt eaque. Neque repellendus
                                dolorem
                                consectetur ipsam, assumenda magni tempore unde omnis!</p>
                            <p>
                                <a href="#" class="btn btn-warning mt3">Learn More</a>
                            </p>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- header ends -->
        <!-- Product Section starts-->
        <section id="product" class="product section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <section-header class="text-center pb-5">
                            <h2>Product Features</h2>
                            <p> AI Art Design</p>
                        </section-header>
                    </div>
                </div>
                <section class="feature">
                    <div class="fe-box">
                        <img
                            src="https://media.istockphoto.com/id/186859069/fr/photo/livraison-gratuite.jpg?s=612x612&w=0&k=20&c=asVwyOhawGaCwYw8tdX3znruaDQWDFMaqOlZTtNezVU=">
                        <h5>Free Shipping</h5>
                        <a href="#" class="btn btn-secondary">View More</a>
                    </div>
                    <div class="fe-box">
                        <img
                            src="https://media.istockphoto.com/id/186859069/fr/photo/livraison-gratuite.jpg?s=612x612&w=0&k=20&c=asVwyOhawGaCwYw8tdX3znruaDQWDFMaqOlZTtNezVU=">
                        <h5>Exceptional Quality</h5>
                        <a href="#" class="btn btn-secondary">View More</a>
                    </div>
                    <div class="fe-box">
                        <img
                            src="https://media.istockphoto.com/id/186859069/fr/photo/livraison-gratuite.jpg?s=612x612&w=0&k=20&c=asVwyOhawGaCwYw8tdX3znruaDQWDFMaqOlZTtNezVU=">
                        <h5>Low Transaction Fee</h5>
                        <a href="#" class="btn btn-secondary">View More</a>
                    </div>
                    <div class="fe-box">
                        <img
                            src="https://media.istockphoto.com/id/186859069/fr/photo/livraison-gratuite.jpg?s=612x612&w=0&k=20&c=asVwyOhawGaCwYw8tdX3znruaDQWDFMaqOlZTtNezVU=">
                        <h5>24/7 Support</h5>
                        <a href="#" class="btn btn-secondary">View More</a>
                    </div>
                    <div class="fe-box">
                        <img
                            src="https://media.istockphoto.com/id/186859069/fr/photo/livraison-gratuite.jpg?s=612x612&w=0&k=20&c=asVwyOhawGaCwYw8tdX3znruaDQWDFMaqOlZTtNezVU=">
                        <h5>Online Order</h5>
                        <a href="#" class="btn btn-secondary">View More</a>
                    </div>
                </section>
            </div>
        </section>
        <!-- Product Section ends-->
        <!-- Price Table starts -->
        <section id="pricing" class="pricing section-padding ">
            <section-header class="text-center pb-5">
                <h2>Monthly Fee With Huge Discount!</h2>
                <p>Only cost you a cup of coffee per week!</p>
            </section-header>
            <div class="container text-center mt-3">
                <div class="row row-cols-1 row-cols-md-3">
                    <div class="col mb-3">
                        <div class="card shadow-lg">
                            <div class="card-header">
                                <h4>Free</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="my-0 font-weight-normal">$0 <small class="text-muted">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>1 users included</li>
                                    <li>local storage: 2GB</li>
                                    <li>Email support</li>
                                    <li>Help center acess</li>
                                </ul>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" style="width: 80%;">Explore
                                    more</button>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card shadow-lg">
                            <div class="card-header">
                                <h4>Pro</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="my-0 font-weight-normal">$20 <small class="text-muted">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>5 users included</li>
                                    <li>local storage: 4GB</li>
                                    <li>Email support</li>
                                    <li>Help center acess</li>
                                </ul>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" style="width: 80%;">Explore
                                    more</button>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card shadow-lg">
                            <div class="card-header">
                                <h4>Business</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="my-0 font-weight-normal">$30 <small class="text-muted">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>100 users included</li>
                                    <li>local storage: Unlimited</li>
                                    <li>Email support</li>
                                    <li>Help center acess</li>
                                </ul>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" style="width: 80%;">Explore
                                    more</button>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Price Table Ends starts-->
        <!-- Testimonials start-->
        <div id="testimonials" class="testimonials section-padding mt-5">
            <div class="row">
                <div class="col-md-12">
                    <section-header class="text-center pb-5">
                        <h2>Testimonials</h2>
                        <p>Review from our subscribers.</p>
                    </section-header>
                </div>
            </div>
            <div class="container">
                <div id="testimonial-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row" id="testimonial-container-1">
                                <!-- Testimonial cards will be inserted here -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row" id="testimonial-container-2">
                                <!-- Testimonial cards will be inserted here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials ends-->
        <!-- Call to action starts-->
        <section id="banner" class="banner section-padding mt-5">
            <h3>What are you waiting for?</h3>
            <h2>Register now and enjoy <span>70% OFF</span> for your first mouth!</h2>
            <button class="normal" onclick="window.location.href='#pricing'">Explore more</button>
        </section>
        <!-- Call to action ends-->
        <!-- Contact Section start -->
        <section id="contact" class="contact section-padding">
            <div class="row">
                <div class="col-md-12">
                    <section-header class="text-center pb-5">
                        <h2>Contact Us</h2>
                    </section-header>
                </div>
            </div>

            <div class="row m-4">
                <div class="col-md-8 p-0 pt-4 p-4 m-auto">
                    <form id="contact-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" required
                                        placeholder="Your Full name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" required placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input type="phone" name="phone" class="form-control" required placeholder="Phone">
                                </div>
                                <div class="mb-3">
                                    <textarea name="query" rows="3" required class="form-control"
                                        placeholder="Your Query Here"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="terms" id="terms" required>
                                    <label for="terms">I agree to the terms and conditions</label>
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Contact Section ends -->
        <!-- Newsletter Section start -->
        <section id="newsletter">
            <div class=" newstext">
                <h2>Sign Up For Newsletters</h2>
                <h4>Get Weekly dates about our latest shop and <span>special offers</span>
                </h4>
            </div>
            <div class="form">
                <input type="text" placeholder="Your email address">
                <button class="normal">Sign Up</button>
            </div>
        </section>
        <!-- Newsletter Section ends-->

        <!-- footer starts -->
        <section id="footer" class="section-padding">
            <div class="row">
                <div class="col">
                    <h4>Contact</h4>
                    <p><strong>Address:</strong> The Chinese University of Hong Kong, Central Ave </p>
                    <p><strong>Founder:</strong> Raymond</p>
                    <p><strong>Phone:</strong> +852 84812710</p>
                    <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
                    <div class="follow">
                        <h4>Follow us</h4>
                        <div class="icon">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-pinterest-p"></i>
                            <i class="fab fa-youtuber"></i>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h4>About</h4>
                    <a href="#">About us</a>
                    <a href="#">Delivery Information</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Contact us</a>
                </div>
                <div class="col">
                    <h4>My Account</h4>
                    <a href="#">Sign In</a>
                    <a href="#">View Cart</a>
                    <a href="#">My Wishlist</a>
                    <a href="#">Track My Order</a>
                    <a href="#">Help</a>
                </div>
                <div class="col install">
                    <h4>Payment</h4>
                    <p>Secured Payment Gateways</p>
                </div>

            </div>

            <p style="text-align: center;">@2023, RaymondRaman - HTML CSS Shopping Website Projcet</p>

        </section>
        <!-- footer ends -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
            integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
            crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">

        </script>
        <script src="./index.js"></script>
    </div>
</body>

<!-- JavaScript -->
<script>
    // close the navbar after user click a section
    $(document).ready(function () {
        $('.navbar-nav>li>a').on('click', function () {
            $('.navbar-collapse').collapse('hide');
        });
    });

    fetch("testimonials.json")
        .then(response => response.json())
        .then(data => {
            const testimonialContainer1 = document.querySelector("#testimonial-container-1");
            const testimonialContainer2 = document.querySelector("#testimonial-container-2");

            data.forEach((testimonial, index) => {
                const testimonialHtml = `
    <div class="col-lg-4">
      <div class="card">
        <div class="box front">
          <img src="${testimonial.img}" class="card-img-top" alt="">
          <h4 class="card-text">${testimonial.testimonial}</h4>
          <h4>${testimonial.occupation || ""}</h4>
          <p class="card-title">${testimonial.name}</p>
        
         
        </div>
    
        </div>
      </div>
    </div>
  `;

                if (index % 2 === 0) {
                    testimonialContainer1.insertAdjacentHTML("beforeend", testimonialHtml);
                } else {
                    testimonialContainer2.insertAdjacentHTML("beforeend", testimonialHtml);
                }
            });
        })
        .catch(error => console.log(error));

    // Contact form interaction
    const form = document.querySelector('form');

    form.addEventListener('submit', async (e) => {
        e.preventDefault(); // prevent the form from submitting

        const name = form.querySelector('input[name="name"]').value;
        const email = form.querySelector('input[name="email"]').value;
        const phone = form.querySelector('input[name="phone"]').value;
        const query = form.querySelector('textarea[name="query"]').value;
        const terms = form.querySelector('input[name="terms"]').checked;

        if (name.trim() === '') {
            alert('Please enter your full name.');
            return;
        }
        if (email.trim() === '') {
            alert('Please enter your email address.');
            return;
        }
        if (phone.trim() === '') {
            alert('Please enter your phone number.');
            return;
        }
        if (query.trim() === '') {
            alert('Please enter your query.');
            return;
        }
        if (!terms) {
            alert('Please agree to the terms and conditions.');
            return;
        }

        // Submit form data via AJAX
        try {
            const response = await fetch('/contact', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    name: name,
                    email: email,
                    phone: phone,
                    message: query,
                    terms: terms
                })
            });

            const result = await response.json();

            if (response.ok) {
                alert('Message sent successfully!');
            } else {
                alert('An error occurred while submitting the form. Please try again.');
            }
        } catch (error) {
            alert('An error occurred while submitting the form. Please try again.');
        }

        form.reset();
    });


</script>

</body>

</html>
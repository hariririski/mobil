<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>DirectoryHub - Multipurpose Directory &amp; Listings HTML Template</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="fonts/circular/styles.css">
    <link rel="stylesheet" type="text/css" href="fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconfont/styles.css">
    <!-- END GLOBAL MANDATORY STYLES -->



<link rel="stylesheet" type="text/css" href="vendors/select2/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="css/vendors/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendors/nouislider/nouislider.min.css">
<link rel="stylesheet" type="text/css" href="css/vendors/nouislider/nouislider.min.css">
<link rel="stylesheet" type="text/css" href="vendors/owl-carousel/assets/owl.carousel.min.css">


    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <!-- END THEME STYLES -->
</head>
<!-- BEGIN HEAD -->
<body class="">


<?php include"share/menu.php";?>
<div class="hero-carousel">
    <div class="owl-carousel owl-theme hero-carousel__items">
        <div class="item hero-carousel__item">
            <img src="images/hero/properties.png" height="460" alt="">
            <div class="hero-carousel__item-info">
                <div class="container">
                    <h2 class="hero-carousel__item-heading">The best places to find your home</h2>
                    <p class="hero-carousel__item-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <div class="btn btn-outline-secondary hero-carousel__item-read-more">Read more</div>
                </div>
            </div>
        </div>
        <div class="item hero-carousel__item">
            <img src="images/hero/properties.png" height="460" alt="">
            <div class="hero-carousel__item-info">
                <div class="container">
                    <h2 class="hero-carousel__item-heading">The best places to find your home</h2>
                    <p class="hero-carousel__item-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <div class="btn btn-outline-secondary hero-carousel__item-read-more">Read more</div>
                </div>
            </div>
        </div>
    </div>
</div>
<form class="filter-properties">
    <div class="container">
        <h2 class="filter-properties__heading">Find Your Properties</h2>

        <div class="row">
            <div class="col-lg-3">
                <select class="form-control selectable">
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                </select>
            </div>
            <div class="col-lg-3">
                <select class="form-control selectable">
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                </select>
            </div>
            <div class="col-lg-3">
                <select class="form-control selectable">
                    <option value="">Minimum Bedroom</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                </select>
            </div>
            <div class="col-lg-3">
                <select class="form-control selectable">
                    <option value="">Minimum Bathroom</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <select class="form-control selectable">
                    <option value="">Minimum Area (Sq-Ft)</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                </select>
            </div>
            <div class="col-lg-3">
                <select class="form-control selectable">
                    <option value="">Maximum Area (Sq-Ft)</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                    <option value="">Location</option>
                </select>
            </div>
            <div class="col-lg-3">
                <div class="filter-properties__price-range">Price range: $100-$7000</div>
                <div id="filter-properties-price-range-slider" class="filter-properties__price-range-slider range-slider-default-shadow range-slider-default-shadow-sm"></div>
            </div>
            <div class="col-lg-3">
                <button class="btn btn-primary btn-block filter-properties__search-btn">Search</button>
            </div>
        </div>
    </div>
</form>
<div class="listing-properties">
    <div class="container">
        <h2 class="listing-properties__heading">New Properties</h2>

        <div class="row">
            <div class="col-lg-4">
                <div class="listing-properties__item">
                    <div class="listing-properties__image">
                        <img src="images/listings/properties/01.png" alt="" class="embed-responsive">
                        <div class="listing-properties__price">
                            <span class="listing-properties__price-amount">$200,000 </span>
                            <span class="badge listing-properties__price-sale">For Sale</span>
                        </div>
                    </div>
                    <div class="listing-properties__title">Luxury Villa | Bern | Switzerland</div>
                    <div class="listing-properties__meta">
                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-bed-outline"></span>
                            <span class="amount">3</span>
                        </span>
                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-drop-outline"></span>
                            <span class="amount">2</span>
                        </span>
                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-car-outline"></span>
                            <span class="amount">2</span>
                        </span>
                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-table"></span>
                            <span class="amount">400 sqft</span>
                        </span>
                    </div>
                    <a href="#" class="btn btn-outline-primary listing-properties__view-details">View Details</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing-properties__item">
                    <div class="listing-properties__image">
                        <img src="images/listings/properties/02.png" alt="" class="embed-responsive">
                        <div class="listing-properties__price">
                            <span class="listing-properties__price-amount">$70,000 </span>
                            <span class="badge listing-properties__price-sale">For Sale</span>
                        </div>
                    </div>
                    <div class="listing-properties__title">Luxury Villa | Bern | Switzerland</div>
                    <div class="listing-properties__meta">
                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-bed-outline"></span>
                            <span class="amount">3</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-drop-outline"></span>
                            <span class="amount">2</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-car-outline"></span>
                            <span class="amount">2</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-table"></span>
                            <span class="amount">400 sqft</span>
                        </span>
                    </div>
                    <a href="#" class="btn btn-outline-primary listing-properties__view-details">View Details</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing-properties__item">
                    <div class="listing-properties__image">
                        <img src="images/listings/properties/03.png" alt="" class="embed-responsive">
                        <div class="listing-properties__price">
                            <span class="listing-properties__price-amount">$60,000 </span>
                            <span class="badge listing-properties__price-sale">For Sale</span>
                        </div>
                    </div>
                    <div class="listing-properties__title">Luxury Villa | Bern | Switzerland</div>
                    <div class="listing-properties__meta">
                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-bed-outline"></span>
                            <span class="amount">3</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-drop-outline"></span>
                            <span class="amount">2</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-car-outline"></span>
                            <span class="amount">2</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-table"></span>
                            <span class="amount">400 sqft</span>
                        </span>
                    </div>
                    <a href="#" class="btn btn-outline-primary listing-properties__view-details">View Details</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="listing-properties__item">
                    <div class="listing-properties__image">
                        <img src="images/listings/properties/04.png" alt="" class="embed-responsive">
                        <div class="listing-properties__price">
                            <span class="listing-properties__price-amount">$170,000 </span>
                            <span class="badge listing-properties__price-sale">For Sale</span>
                        </div>
                    </div>
                    <div class="listing-properties__title">Luxury Villa | Bern | Switzerland</div>
                    <div class="listing-properties__meta">
                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-bed-outline"></span>
                            <span class="amount">3</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-drop-outline"></span>
                            <span class="amount">2</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-car-outline"></span>
                            <span class="amount">2</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-table"></span>
                            <span class="amount">400 sqft</span>
                        </span>
                    </div>
                    <a href="#" class="btn btn-outline-primary listing-properties__view-details">View Details</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing-properties__item">
                    <div class="listing-properties__image">
                        <img src="images/listings/properties/05.png" alt="" class="embed-responsive">
                        <div class="listing-properties__price">
                            <span class="listing-properties__price-amount">$90,000 </span>
                            <span class="badge listing-properties__price-sale">For Sale</span>
                        </div>
                    </div>
                    <div class="listing-properties__title">Luxury Villa | Bern | Switzerland</div>
                    <div class="listing-properties__meta">
                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-bed-outline"></span>
                            <span class="amount">3</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-drop-outline"></span>
                            <span class="amount">2</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-car-outline"></span>
                            <span class="amount">2</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-table"></span>
                            <span class="amount">400 sqft</span>
                        </span>
                    </div>
                    <a href="#" class="btn btn-outline-primary listing-properties__view-details">View Details</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="listing-properties__item">
                    <div class="listing-properties__image">
                        <img src="images/listings/properties/06.png" alt="" class="embed-responsive">
                        <div class="listing-properties__price">
                            <span class="listing-properties__price-amount">$150,000 </span>
                            <span class="badge listing-properties__price-sale">For Sale</span>
                        </div>
                    </div>
                    <div class="listing-properties__title">Luxury Villa | Bern | Switzerland</div>
                    <div class="listing-properties__meta">
                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-bed-outline"></span>
                            <span class="amount">3</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-drop-outline"></span>
                            <span class="amount">2</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-car-outline"></span>
                            <span class="amount">2</span>
                        </span>

                        <span class="listing-properties__meta-item">
                            <span class="icon iconfont-table"></span>
                            <span class="amount">400 sqft</span>
                        </span>
                    </div>
                    <a href="#" class="btn btn-outline-primary listing-properties__view-details">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="choose-us-default">
    <div class="container">
        <h2 class="choose-us-default__heading">Why Choose Us</h2>

        <div class="row">
            <div class="col-lg-3">
                <div class="choose-us-default__item">
                    <h5 class="choose-us-default__item-heading">Sale Service</h5>
                    <span class="choose-us-default__item-icon iconfont-user-outline"></span>
                    <div class="choose-us-default__item-description">
                        Are you going to list something
                        specific? Not a problem at all.
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="choose-us-default__item">
                    <h5 class="choose-us-default__item-heading">Rent Service</h5>
                    <span class="choose-us-default__item-icon iconfont-hands-key-outline"></span>
                    <div class="choose-us-default__item-description">
                        Are you going to list something
                        specific? Not a problem at all.
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="choose-us-default__item">
                    <h5 class="choose-us-default__item-heading">Property Insurance</h5>
                    <span class="choose-us-default__item-icon iconfont-shield"></span>
                    <div class="choose-us-default__item-description">
                        Are you going to list something
                        specific? Not a problem at all.
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="choose-us-default__item">
                    <h5 class="choose-us-default__item-heading">Property Search</h5>
                    <span class="choose-us-default__item-icon iconfont-magnifier"></span>
                    <div class="choose-us-default__item-description">
                        Are you going to list something
                        specific? Not a problem at all.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="agents-default">
    <div class="container">
        <h2 class="agents-default__heading">Professional Agents</h2>

        <div class="row">
            <div class="col-lg-4">
                <div class="agents-default__item">
                    <img src="images/agents/01.png" alt="" class="embed-responsive agents-default__agent-image">

                    <div class="agents-default__item-info">
                        <div class="agents-default__agent-name">Joanna Doe</div>
                        <div class="agents-default__agent-phone"><span class="icon iconfont-phone-outline"></span> +385 21 123 4567</div>
                        <div class="agents-default__agent-email"><span class="icon iconfont-envelope-outline"></span> info@youremail.com</div>
                        <div class="agents-default__agent-social-links">
                            <a href="#"><img src="images/social/facebook-circle.png" width="16" height="16" alt=""></a>
                            <a href="#"><img src="images/social/twitter-circle.png" width="16" height="16" alt=""></a>
                            <a href="#"><img src="images/social/instagram-circle.png" width="16" height="16" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="agents-default__item">
                    <img src="images/agents/02.png" alt="" class="embed-responsive agents-default__agent-image">

                    <div class="agents-default__item-info">
                        <div class="agents-default__agent-name">John Doe</div>
                        <div class="agents-default__agent-phone"><span class="icon iconfont-phone-outline"></span> +385 21 123 4567</div>
                        <div class="agents-default__agent-email"><span class="icon iconfont-envelope-outline"></span> info@youremail.com</div>
                        <div class="agents-default__agent-social-links">
                            <a href="#"><img src="images/social/facebook-circle.png" width="16" height="16" alt=""></a>
                            <a href="#"><img src="images/social/twitter-circle.png" width="16" height="16" alt=""></a>
                            <a href="#"><img src="images/social/instagram-circle.png" width="16" height="16" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="agents-default__item">
                    <img src="images/agents/03.png" alt="" class="embed-responsive agents-default__agent-image">

                    <div class="agents-default__item-info">
                        <div class="agents-default__agent-name">Danielle Doe</div>
                        <div class="agents-default__agent-phone"><span class="icon iconfont-phone-outline"></span> +385 21 123 4567</div>
                        <div class="agents-default__agent-email"><span class="icon iconfont-envelope-outline"></span> info@youremail.com</div>
                        <div class="agents-default__agent-social-links">
                            <a href="#"><img src="images/social/facebook-circle.png" width="16" height="16" alt=""></a>
                            <a href="#"><img src="images/social/twitter-circle.png" width="16" height="16" alt=""></a>
                            <a href="#"><img src="images/social/instagram-circle.png" width="16" height="16" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonials-client">
    <div class="container">
        <h2 class="testimonials-client__heading">Client Testmonial</h2>

        <div id="testimonials-properties-carousel" class="testimonials-client__carousel owl-carousel">
            <div class="testimonials-client__item item">
                <div class="testimonials-client__message">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="testimonials-client__author">
                    John Doe, Villa Buyer
                </div>
            </div>
            <div class="testimonials-client__item item">
                <div class="testimonials-client__message">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="testimonials-client__author">
                    John Doe, Villa Buyer
                </div>
            </div>
            <div class="testimonials-client__item item">
                <div class="testimonials-client__message">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="testimonials-client__author">
                    John Doe, Villa Buyer
                </div>
            </div>
            <div class="testimonials-client__item item">
                <div class="testimonials-client__message">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="testimonials-client__author">
                    John Doe, Villa Buyer
                </div>
            </div>
            <div class="testimonials-client__item item">
                <div class="testimonials-client__message">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="testimonials-client__author">
                    John Doe, Villa Buyer
                </div>
            </div>
        </div>
    </div>
</div>
<div class="recent-news">
    <div class="container">
        <h2 class="recent-news__heading">Recent News</h2>

        <div class="row">
            <div class="col-lg-4">
                <div class="recent-news__item">
                    <img src="images/news/recent/01.png" alt="" class="recent-news__image embed-responsive">
                    <a href="#" class="recent-news__title">Popular House</a>
                    <div class="recent-news__meta">
                        Post by <a href="#">Joe Doe</a> June 3, 2024
                    </div>
                    <div class="recent-news__announce">
                        Are you going to list something
                        specific? Not a problem at all.
                    </div>

                    <a href="#" class="btn btn-outline-primary btn-lg recent-news__read-more-btn">Read more</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="recent-news__item">
                    <img src="images/news/recent/02.png" alt="" class="recent-news__image embed-responsive">
                    <a href="#" class="recent-news__title">Popular House</a>
                    <div class="recent-news__meta">
                        Post by <a href="#">Joe Doe</a> June 3, 2024
                    </div>
                    <div class="recent-news__announce">
                        Are you going to list something
                        specific? Not a problem at all.
                    </div>

                    <a href="#" class="btn btn-outline-primary btn-lg recent-news__read-more-btn">Read more</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="recent-news__item">
                    <img src="images/news/recent/03.png" alt="" class="recent-news__image embed-responsive">
                    <a href="#" class="recent-news__title">Popular House</a>
                    <div class="recent-news__meta">
                        Post by <a href="#">Joe Doe</a> June 3, 2024
                    </div>
                    <div class="recent-news__announce">
                        Are you going to list something
                        specific? Not a problem at all.
                    </div>

                    <a href="#" class="btn btn-outline-primary btn-lg recent-news__read-more-btn">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<form class="newsletter-default">
    <div class="container">
        <div class="newsletter-default__wrap">
            <div class="newsletter-default__heading">Our Newsletter</div>
            <input type="text" class="form-control newsletter-default__input" placeholder="Enter Your Email Address">
            <button class="btn btn-default newsletter-default__button">Subscribe Now</button>
        </div>
    </div>
</form>
<div class="popular-properties">
    <div class="container-fluid">
        <h2 class="popular-properties__heading">Amazing Features</h2>

        <p class="popular-properties__description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <div class="popular-properties__grid">
            <div class="popular-properties__grid-col-left">
                <div class="popular-properties__grid-item">
                    <img src="images/popular/properties/01.png" alt="">
                    <div class="popular-properties__image-title">San Francisco</div>
                </div>
            </div>
            <div class="popular-properties__grid-col-middle">
                <div class="popular-properties__grid-col-row">
                    <div class="popular-properties__grid-item">
                        <img src="images/popular/properties/02.png" alt="">
                        <div class="popular-properties__image-title">San Diego</div>
                    </div>
                    <div class="popular-properties__grid-item">
                        <img src="images/popular/properties/03.png" alt="">
                        <div class="popular-properties__image-title">Santa Barbara</div>
                    </div>
                </div>
                <div class="popular-properties__grid-item">
                    <img src="images/popular/properties/05.png" class="embed-responsive-16by9" alt="">
                    <div class="popular-properties__image-title">Oakland</div>
                </div>
            </div>
            <div class="popular-properties__grid-col-right">
                <div class="popular-properties__grid-item">
                    <img src="images/popular/properties/04.png" alt="">
                    <div class="popular-properties__image-title">Beverly Hills</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include"share/footer.php";?>

<script src="vendors/jquery/jquery.min.js"></script>
<script src="vendors/tether/js/tether.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="js/dropdown.animate.js"></script>



<script>
    (function () {
        $(document).ready(function () {
            var dropDownToggle = $('.dropdown-toggle');

            $(".navbar-toggler").on("click", function () {
                $(this).toggleClass("is-active");
            });

            dropDownToggle.click(function() {
                var dropdownList = $(this).parent().find('.dropdown-menu');
                var dropdownOffset = $(this).offset();
                var offsetLeft = dropdownOffset.left;
                var dropdownWidth = dropdownList.width() / 2;
                var docWidth = $(window).width();

                var isDropdownVisible = (offsetLeft + dropdownWidth <= docWidth);

                if (!isDropdownVisible) {
                    dropdownList.addClass('dropdown-menu-right');
                } else {
                    dropdownList.removeClass('dropdown-menu-right');
                }
            });
        });
    })(jQuery);
</script>

<script src="vendors/select2/js/select2.min.js"></script>
<script src="vendors/nouislider/nouislider.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/properties.js"></script>


</body>
</html>

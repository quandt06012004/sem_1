
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">
    <style>
        .pagination{
            justify-content: center !important;
        }
    </style>

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:200,300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/demo18.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-transparent">
            <div class="header-middle sticky-header">
                <div class="container-fluid">
                    <div class="header-left">
                        <button class="mobile-menu-toggler text-white mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="{{route('home.index')}}" class="logo">
                            <img src="assets/images/demoes/demo18/logo.png" alt="Porto Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-center justify-content-between">
                        <nav class="main-nav w-100">
                            <ul class="menu">
                                <li class="active">
                                    <a href="{{route('home.index')}}">Home</a>
                                </li>
                                <li class="d-none d-xl-block">
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="{{route('cart.index')}}">Shopping Cart</a></li>
                                        <li><a href="{{route('checkout.index')}}">Checkout</a></li>
                                        <li><a href="{{route('about.index')}}">About Us</a></li>
                                         <li><a href="{{route('blog.index')}}">Blog</a></li>
                                        </li>
                                        <li><a href="{{route('contact.index')}}">Contact Us</a></li>
                                        <li><a href="{{route('login.index')}}">Login</a></li>
                                        <li><a href="{{route('auth.admin')}}">Login Admin</a></li>

                                        <li><a href="forgot-password.html">Forgot Password</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{route('shop.index')}}">Shop</a></li>        
                                <li><a href="{{route('blog.index')}}">Blog</a></li>
                                <li class="d-none d-xxl-block"><a href="#">Special Offer!</a></li>
            
                            </ul>
                        </nav>
                    </div>
                    <!-- End .header-center -->

                    <div class="header-right justify-content-end">
                        <div class="header-dropdowns">
                            <div class="header-dropdown ">
                                <a href="#">USD</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                    </ul>
                                </div>
                                <!-- End .header-menu -->
                            </div>
                            <!-- End .header-dropown -->

                            <div class="header-dropdown">
                                <a href="#">ENG</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">ENG</a>
                                        </li>
                                        <li><a href="#">FRA</a></li>
                                    </ul>
                                </div>
                                <!-- End .header-menu -->
                            </div>
                            <!-- End .header-dropown -->

                            <div class="header-dropdown">
                                <a href="#">LINKS</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="{{route('about.index')}}">ABOUT US</a>
                                        </li>
                                        <li><a href="{{route('contact.index')}}">CONTACT US</a></li>
                                    </ul>
                                </div>
                                <!-- End .header-menu -->
                            </div>
                            <!-- End .header-dropown -->
                        </div>
                        <!-- End .header-dropdowns -->
                        {{-- {{Auth::check()}} --}}
                        @if (Auth::check()) 
                        
                            {{Auth::user()->name}}| 
                            <a href="{{route('auth.logout')}}" class="header-icon" title="logout">Logout</a>
                        
                        @else 
                            <a href="{{route('login.index')}}" class="header-icon" title="login">Login</a>  
                            <a href="{{route('register.index')}}" class="header-icon" title="login">Register</a>
                        
                        @endif

                      

                        <a href="wishlist.html" class="header-icon" title="Wishlist"><i class="icon-wishlist-2"><span
                                    class="badge-circle">2</span></i></a>

                        <div class="header-icon header-search header-search-popup header-search-category text-right">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="63">- Games</option>
                                            <option value="7">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="31">- Cars and Trucks</option>
                                            <option value="32">- Motorcycles &amp; Powersports</option>
                                            <option value="33">- Parts &amp; Accessories</option>
                                            <option value="34">- Boats</option>
                                            <option value="57">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="minicart-icon"></i>
                                @if(Session::has("Cart") != null)
                                    <span id="cart_count_total" class="cart-count badge-circle">{{Session::get("Cart")->totalQuanty}}</span>
                                @else
                                    <span id="cart_count_total" class="cart-count badge-circle">0</span>
                                @endif
                                
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->

                                <div id="change_item_cart">
                                @if(Session::has("Cart") != null)
                                <div class="dropdown-cart-products">
                                        @foreach (Session::get("Cart")->products as $item)
                                            <div class="product">
                                                <div class="product-details">
                                                    <h4 class="product-title">
                                                        <a href="{{route('product-detail.index')}}">{{$item['productInfo']->name}}</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">{{$item['quanty']}}</span> × {{$item['productInfo']->price}}
                                                    </span>
                                                </div>
                                                <!-- End .product-details -->

                                                <figure class="product-image-container">
                                                    <a href="{{route('product-detail.index')}}" class="product-image">
                                                        <img src="{{asset($item['productInfo']->image)}}" alt="product" width="80" height="80">
                                                    </a>

                                                    <a href="#" class="btn-remove" title="Remove Product"><span data-idcart="{{$item['productInfo']->id}}" >×</span></a>
                                                </figure>
                                            </div>
                                        @endforeach
                                        <h5>tổng giá: $ {{Session::get("Cart")->totalPrice}}</h5>
                                <!-- End .product -->
                                </div>
                                @endif
                                    </div>
                                    <div class="dropdown-cart-action">
                                        <a href="{{route('cart.index')}}" class="btn btn-gray btn-block view-cart">View
                                            Cart</a>
                                        <a href="{{route('checkout.index')}}" class="btn btn-dark btn-block">Checkout</a>
                                    </div>
                                    <!-- End .dropdown-cart-total -->
                                </div>
                                <!-- End .dropdownmenu-wrapper -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container-fluid -->
            </div>
            <!-- End .header-middle -->
        </header>
        <!-- End .header -->

        <main class="main">
            <section class="home-slider-container">
                <div class="home-slider owl-carousel with-dots-container" data-owl-options="{'nav': false}">
                    <div class="home-slide home-slide1 banner" style="background-color: #111">
                        <div class="slide-bg" src="assets/images/demoes/demo18/slider/home-slide-back.jpg"></div>
                        <!-- End .slide-bg !-->
                        <ul class="slide-bg scene" style="width: 100%; height: 100%;">
                            <li class="layer" data-depth="0.05"><img src="assets/images/demoes/demo18/slider/white-shoes.png" alt="" /></li>
                            <li class="layer" data-depth="0.06"><img style="position: absolute; top: 31%; left: 46.5%;" src="assets/images/demoes/demo18/slider/blurflake1.png" alt="" /></li>
                            <li class="layer" data-depth="0.07"><img class="animation-spin" style="position: absolute; top: 25%; left: 66%;" src="assets/images/demoes/demo18/slider/blurflake2.png" alt="" /></li>
                            <li class="layer" data-depth="0.10"><img class="animation-wave" style="position: absolute; top: 50%; left: 80%;" src="assets/images/demoes/demo18/slider/blurflake3.png" alt="" /></li>
                            <li class="layer" data-depth="0.15"><img style="position: absolute; top: 70%; left: 55%;" src="assets/images/demoes/demo18/slider/blurflake4.png" alt="" /></li>
                        </ul>
                        <div class="home-slide-content">
                            <h2 class="text-white text-transform-uppercase line-height-1">Spring / Summer Season</h2>
                            <h3 class="text-white d-inline-block line-height-1 ls-0 text-center">up<br /> to
                            </h3>
                            <h4 class="text-white text-uppercase line-height-1 d-inline-block">50% off</h4>
                            <div></div>
                            <h5 class="float-left text-white text-uppercase line-height-1 ls-n-20">Starting At</h5>
                            <h6 class="float-left coupon-sale-text line-height-1 ls-n-20 font-weight-bold text-secondary">
                                <sup>$</sup>19<sup>99</sup></h6>
                            <a href="{{route('shop.index')}}" class="btn btn-light d-inline-block">Shop Now</a>
                        </div>
                        <!-- End .home-slide-content -->
                    </div>
                    <!-- End .home-slide -->

                    <div class="home-slide home-slide2 banner" style="background-color: #111;">
                        <div class="slide-bg" src="assets/images/demoes/demo18/slider/home-slide-back.jpg" style="transform: scaleX(-1);"></div>
                        <!-- End .slide-bg !-->
                        <ul class="slide-bg scene" style="width: 100%; height: 100%;">
                            <li class="layer" data-depth="0.05"><img src="assets/images/demoes/demo18/slider/ball2.png" alt="" /></li>
                            <li class="layer" data-depth="0.06"><img style="position: absolute; top: 70%; left: 42%;" src="assets/images/demoes/demo18/slider/blurflake1.png" alt="" /></li>
                            <li class="layer" data-depth="0.07"><img class="animation-spin" style="position: absolute; top: 25%; left: 45%;" src="assets/images/demoes/demo18/slider/blurflake2.png" alt="" /></li>
                            <li class="layer" data-depth="0.10"><img class="animation-wave" style="position: absolute; top: 49%; left: 21%;" src="assets/images/demoes/demo18/slider/blurflake3.png" alt="" /></li>
                            <li class="layer" data-depth="0.15"><img style="position: absolute; top: 25%; left: 23%;" src="assets/images/demoes/demo18/slider/blurflake4.png" alt="" /></li>
                        </ul>
                        <div class="home-slide-content">
                            <h2 class="text-white text-transform-uppercase line-height-1">Spring / Summer Season</h2>
                            <h3 class="text-white d-inline-block line-height-1 ls-0 text-center">up<br /> to
                            </h3>
                            <h4 class="text-white text-uppercase line-height-1 d-inline-block">50% off</h4>
                            <div></div>
                            <h5 class="float-left text-white text-uppercase line-height-1 ls-n-20">Starting At</h5>
                            <h6 class="float-left coupon-sale-text line-height-1 ls-n-20 font-weight-bold text-secondary">
                                <sup>$</sup>19<sup>99</sup></h6>
                            <a href="{{route('shop.index')}}" class="btn btn-light d-inline-block">Shop Now</a>
                        </div>
                        <!-- End .home-slide-content -->
                    </div>
                    <!-- End .home-slide -->
                </div>
                <!-- End .home-slider -->

                <div class="home-slider-thumbs owl-dots">
                    <a href="#" class="owl-dot">
                        <img src="assets/images/demoes/demo18/slider/slide-1-thumb.jpg" alt="Slide Thumb">
                    </a>
                    <a href="#" class="owl-dot">
                        <img src="assets/images/demoes/demo18/slider/slide-2-thumb.jpg" alt="Slide Thumb">
                    </a>
                </div>
                <!-- End .home-slide-thumbs -->
            </section>
            <!-- End .home-slider-container -->

            <div class="products-filter-container bg-gray">
                <div class="container-fluid">
                    <div class="row align-items-lg-stretch">
                    
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-12">
                            <div class="row product-ajax-grid mb-2">
                                @foreach ( $products as $item)
                                              <div class="col-6 col-md-4 col-lg-3 ">
                                    <div class="product-default inner-quickview inner-icon appear-animate" data-animation-name="fadeIn">
                                        <figure>
                                            <a href="{{ route('product-detail.index', [ 'productId' => $item->id ]) }}">
                                                <img  width="205" height="205"  src="{{ asset($item->image) }}" alt="">
                                                
                                            </a>
                                            <div class="btn-icon-group">
                                                <a onclick="AddCart({{$item->id}})" href="javascript:" class="btn-icon btn-add-cart "><i
                                                        class="icon-shopping-cart"></i></a>
                                            </div>
                                            {{-- <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a> --}}
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="demo18-shop.html" class="product-category">category: {{$item->catalogues->name}}</a>
                                                </div>
                                                <a href="wishlist.html" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="{{route('product-detail.index')}}">{{$item->name}}</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price"><b>$</b> {{number_format($item->price)}} </span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                </div>
                                @endforeach
                      
    
                            </div>
                            <!-- End .row -->

                            {{-- <div class="product-more-container d-flex justify-content-center">
                                <a href="ajax/demo18-ajax-products.html" class="btn btn-outline-dark loadmore">Load
                                    More...</a>
                            </div> --}}
                            <div class="paginat text-center">
                                {{$products->links()}}
                            </div>
                            
                            <!-- End .product-more-container -->
                        </div>
                        <!-- End .col-lg-9 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container-fluid -->
            </div>
            <!-- End .produts-filter-container-->

            <section class="product-banner-section">
                <div class="banner" style="background-color: #111;">
                    <figure class="w-100 appear-animate" data-animation-name="fadeIn">
                        <img src="assets/images/demoes/demo18/product-section-slider/slide-1.jpg" alt="product banner">
                    </figure>
                    <div class="container-fluid">
                        <div class="position-relative h-100">
                            <div class="banner-layer banner-layer-middle">
                                <h3 class="text-white text-uppercase ls-n-25 m-b-4 appear-animate" data-animation-name="fadeInUpShorter" data-animation-duration="1000" data-animation-delay="200">Ultra Boost</h3>
                                <img class="m-b-4 appear-animate" data-animation-name="fadeInUpShorter" data-animation-duration="1000" data-animation-delay="400" src="assets/images/demoes/demo18/product-section-slider/img-1.png" alt="img" width="540" height="100">
                                <a href="{{route('shop.index')}}" class="btn btn-light appear-animate" data-animation-name="fadeInUpShorter" data-animation-duration="1000" data-animation-delay="600">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End .product-banner-section -->

            <section class="product-slider-section bg-gray">
                <div class="container-fluid">
                    <h2 class="subtitle text-center text-uppercase mb-2 appear-animate" data-animation-name="fadeIn">
                        Featured products</h2>

                    <div class="featured-products owl-carousel owl-theme show-nav-hover nav-outer nav-image-center mb-3 appear-animate" data-owl-options="{ 
                        'dots': false, 
                        'nav': true, 
                        'margin': 20, 
                        'responsive': {
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 6
                            }
                        } 
                    }" data-animation-name="fadeIn">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{route('product-detail.index')}}">
                                    <img src="assets/images/demoes/demo18/products/product-7.jpg" width="205" height="205" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo18-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('product-detail.index')}}">Backpack Sfs Responder</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$185.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{route('product-detail.index')}}">
                                    <img src="assets/images/demoes/demo18/products/product-15.jpg" width="205" height="205" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo18-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('product-detail.index')}}">Converse Chuck Quarter</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$14.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{route('product-detail.index')}}">
                                    <img src="assets/images/demoes/demo18/products/product-13.jpg" width="205" height="205" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo18-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('product-detail.index')}}">Football Vapor 24/7</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$25.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{route('product-detail.index')}}">
                                    <img src="assets/images/demoes/demo18/products/product-8.jpg" width="205" height="205" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo18-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('product-detail.index')}}">Hot Black Suits</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$30.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{route('product-detail.index')}}">
                                    <img src="assets/images/demoes/demo18/products/product-4.jpg" width="205" height="205" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo18-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('product-detail.index')}}">Hyperadapt Shield Lite Half-Zip</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$299.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{route('product-detail.index')}}">
                                    <img src="assets/images/demoes/demo18/products/product-19.jpg" width="205" height="205" alt="product">
                                    <img src="assets/images/demoes/demo18/products/product-10.jpg" width="205" height="205" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="{{route('product-detail.index')}}" class="btn-icon btn-add-cart"><i
                                            class="fa fa-arrow-right"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo18-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('product-detail.index')}}">Jordan Flight</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$99.00 - $109.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{route('product-detail.index')}}">
                                    <img src="assets/images/demoes/demo18/products/product-11.jpg" width="205" height="205" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo18-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('product-detail.index')}}">Jordan Hyper Grip Ot</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$50.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{route('product-detail.index')}}">
                                    <img src="assets/images/demoes/demo18/products/product-9.jpg" width="205" height="205" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo18-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('product-detail.index')}}">Long-Length 2.0</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:20%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$22.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{route('product-detail.index')}}">
                                    <img src="assets/images/demoes/demo18/products/product-16.jpg" width="205" height="205" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="{{route('product-detail.index')}}" class="btn-icon btn-add-cart"><i
                                            class="fa fa-arrow-right"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo18-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{route('product-detail.index')}}">Man Black Pants</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$89.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <!-- End .featured-produts -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner appear-animate" data-animation-name="fadeInLeftShorter" style="background-color: #fff;">
                                <figure>
                                    <img src="assets/images/demoes/demo18/banners/banner1.jpg" alt="banner" width="873" height="151">
                                </figure>
                                <div class="banner-layer banner-layer-middle d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <h4 class="mb-0">Summer Sale</h4>
                                        <h5 class="text-uppercase mb-0">20% off</h5>
                                    </div>
                                    <a href="{{route('shop.index')}}" class="btn btn-dark">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="400" style="background-color: #111;">
                                <figure>
                                    <img src="assets/images/demoes/demo18/banners/banner2.jpg" alt="banner" width="873" height="151">
                                </figure>
                                <div class="banner-layer banner-layer-middle d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <h4 class="text-white mb-0">Flash Sale</h4>
                                        <h5 class="text-uppercase text-white mb-0">30% off</h5>
                                    </div>
                                    <a href="{{route('shop.index')}}" class="btn btn-light">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .container-fluid -->
            </section>

            <section class="explore-section d-flex align-items-center" data-parallax="{'speed': 1.8,  'enableOnMobile': true}" data-image-src="assets/images/demoes/demo18/bg-2.jpg" style="background-color: #111;">
                <div class="container-fluid text-center position-relative appear-animate" data-animation-name="fadeInUpShorter">
                    <h3 class="line-height-1 ls-n-25 text-white text-uppercase m-b-4">Explore the best of you</h3>
                    <a href="{{route('shop.index')}}" class="btn btn-light">Shop Now</a>
                </div>
                <!-- End .container -->
            </section>
            <!-- End .explore-section -->

            <section class="feature-boxes-container">
                <div class="container-fluid appear-animate" data-animation-name="fadeInUpShorter">
                    <div class="row no-gaps m-0 ">
                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box feature-box-simple text-center mb-2">
                                <div class="feature-box-icon">
                                    <i class="icon-earphones-alt text-white"></i>
                                </div>

                                <div class="feature-box-content p-0">
                                    <h3 class="text-white">Customer Support</h3>
                                    <h5 class="line-height-1">Need Assistance?</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-sm-6.col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box feature-box-simple text-center mb-2">
                                <div class="feature-box-icon">
                                    <i class="icon-credit-card text-white"></i>
                                </div>

                                <div class="feature-box-content p-0">
                                    <h3 class="text-white">Secured Payment</h3>
                                    <h5 class="line-height-1">Safe &amp; Fast</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum dolor sit amet.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box feature-box-simple text-center mb-2">
                                <div class="feature-box-icon">
                                    <i class="icon-action-undo text-white"></i>
                                </div>
                                <div class="feature-box-content p-0">
                                    <h3 class="text-capitalize text-white">Free Returns</h3>
                                    <h5 class="line-height-1">Easy &amp; Free</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box feature-box-simple text-center mb-2">
                                <div class="feature-box-icon">
                                    <i class="icon-shipping text-white"></i>
                                </div>
                                <div class="feature-box-content p-0">
                                    <h3 class="text-white">Free Shipping</h3>
                                    <h5 class="line-height-1">Made To Help You</h5>

                                    <p>Porto has very powerful admin features to help customer to build their own shop in minutes without any special skills in web development.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-sm-6 col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container-->
            </section>
            <!-- End .feature-boxes-container -->
        </main>
        <!-- End .main -->

        <footer class="footer font2">
            <div class="container-fluid">
                <div class="footer-top top-border d-flex align-items-center justify-content-between flex-wrap">
                    <div class="footer-left widget-newsletter d-md-flex align-items-center">
                        <div class="widget-newsletter-info">
                            <h5 class="widget-newsletter-title text-white text-uppercase ls-0 mb-0">subscribe newsletter
                            </h5>
                            <p class="widget-newsletter-content mb-0">Get all the latest information on Events, Sales and Offers.</p>
                        </div>
                        @if (Auth::check())
                            @if(count($sub) > 0)
                                <form action="{{ route('user.unsubscriber')}}" method="POST">
                                    @csrf
                                    {{-- @method("DELETE") --}}
                                    <div class="footer-submit-wrapper d-flex">
                                        <input type="hidden" class="form-control" value="{{$sub[0]->id}}" name="id" >
                                        <button type="submit" class="btn btn-danger btn-sm">Huỷ</button>
                                    </div>
                                </form>
                            @else
                                <form action="{{ route('user.subscriber')}}" method="POST">
                                    @csrf
                                    <div class="footer-submit-wrapper d-flex">
                                        <input type="hidden" class="form-control" value="{{Auth::user()->email}}" name="email" placeholder="Email address..." size="40" >
                                        <button type="submit" class="btn btn-danger btn-sm">Subscribe</button>
                                    </div>
                                </form>
                            @endif
                        @endif
                    </div>
                    <div class="footer-right">
                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="demo18.html">
                                <img src="assets/images/demoes/demo18/logo.png" alt="Logo" class="logo">
                            </a>

                            <p class="footer-desc">Lorem ipsum dolor sit amet, consectetur adipis.</p>

                            <div class="ls-0 footer-question">
                                <h6 class="mb-0 text-white">QUESTIONS?</h6>
                                <h3 class="mb-3 text-white"><a href="tel:1-888-123-456">1-888-123-456</a></h3>
                            </div>
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Account</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="links">
                                            <li><a href="demo18-about.html">About us</a></li>
                                            <li><a href="demo18-contact.html">Contact us</a></li>
                                            <li><a href="dashboard.html">My Account</a></li>
                                            <li><a href="#">Payment Methods</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="links">
                                            <li><a href="https://www.portotheme.com/html/porto_ecommerce/order.html">Order history</a></li>
                                            <li><a href="#">Advanced search</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">About</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="links">
                                            <li><a href="{{route('about.index')}}">About Porto</a></li>
                                            <li><a href="#">Our Guarantees</a></li>
                                            <li><a href="#">Terms And Conditions</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="links">
                                            <li><a href="#">Return Policy</a></li>
                                            <li><a href="#">Intellectual Property Claims</a></li>
                                            <li><a href="#">Site Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3">
                            <div class="widget text-lg-right">
                                <h4 class="widget-title">Features</h4>

                                <ul class="links">
                                    <li><a href="#">Powerful Admin Panel</a></li>
                                    <li><a href="#">Mobile &amp; Retina Optimized</a></li>
                                    <li><a href="#">Super Fast HTML Template</a></li>
                                </ul>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <div class="footer-bottom">
                    <p class="footer-copyright text-lg-center mb-0">&copy; Porto eCommerce. 2021. All Rights Reserved
                    </p>
                </div>
                <!-- End .footer-bottom -->
            </div>
            <!-- End .container-fluid -->
        </footer>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="header-center justify-content-between">
        <nav class="main-nav w-100">
            <ul class="menu">
                <li class="active">
                    <a href="{{route('home.index')}}">Home</a>
                </li>
                <li class="d-none d-xl-block">
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="{{route('shop.index')}}">Shopping Cart</a></li>
                        <li><a href="{{route('checkout.index')}}">Checkout</a></li>
                        <li><a href="">Dashboard</a></li>
                        <li><a href="{{route('about.index')}}">About Us</a></li>
                        <li><a href="{{route('blog.index')}}">Blog</a>
                        </li>
                        <li><a href="{{route('contact.index')}}">Contact Us</a></li>
                        <li><a href="{{route('login.index')}}">Login</a></li>
                        <li><a href="{{route('auth.admin')}}">Login Admin</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('shop.index')}}">Shop</a>
              
                </li>
          
                <li><a href="{{route('blog.index')}}">Blog</a></li>
                <li class="d-none d-xxl-block"><a href="#">Special Offer!</a></li>
                <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
            </ul>
        </nav>
    </div>
    <!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="{{route('home.index')}}">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{route('shop.index')}}" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{route('login.index')}}" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{route('cart.index')}}" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>

    <!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
    <script>(function(){var js = "window['__CF$cv$params']={r:'816905095e42b442',t:'MTY5NzM4Mjk1MC4xOTEwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/dffb14d6/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>
    !-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>


<script>
    // AddCart();
    function AddCart(id){
        $.ajax({
            url: "/frontend/addcart/"+id,
            type: "GET"
        }).done(function(res) {
            RenderCart(res);
            alertify.success('thêm mới thành công');
        });
    }
    $('#change_item_cart').on("click", ".btn-remove span",function(){
      
        $.ajax({
            url: "/frontend/delete-addcart/"+ $(this).data("idcart"),
            type: "GET"
        }).done(function(res) {
            RenderCart(res);
            alertify.success('đã xóa thành công');
        });
    })
    function RenderCart(res){
        if (res){
            $("#change_item_cart").empty();
            $("#change_item_cart").html(res);
            $("#cart_count_total").text($("#total_item_cart").val());
        }

       if($("#total_item_cart").val() == undefined){
            $("#change_item_cart").empty();
            $("#cart_count_total").text('0');
        }
    }
</script>
<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo18.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 15:16:29 GMT -->
</html>
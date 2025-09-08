<!DOCTYPE html>
<html lang="en">

<head>
  <title>Stylish - Shoes Online Store HTML Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="Online Store">
  <meta name="description" content="Stylish - Shoes Online Store HTML Template">

  <link rel="stylesheet" href="user/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="user/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,900;1,900&family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
    rel="stylesheet">
</head>

<body>
  



  <div class="search-box bg-dark position-relative">
    <div class="search-wrap">
      <div class="close-button">
        <svg class="close" style="fill: white;">
          <use xlink:href="#close"></use>
        </svg>
      </div>
      <form id="search-form" class="text-lg-center text-md-left pt-3" action="index.html" method="get">
        <input type="text" class="search-input" placeholder="Search...">
        <svg class="search">
          <use xlink:href="#search"></use>
        </svg>
      </form>
    </div>
  </div>

  <!-- quick view -->
  <div class="modal fade" id="modaltoggle" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="col-lg-12 col-md-12 me-3">
            <div class="image-holder">
              <img src="user/images/summary-item1.jpg" alt="Shoes">
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="summary">
              <div class="summary-content fs-6">
                <div class="product-header d-flex justify-content-between mt-4">
                  <h3 class="display-7">Running Shoes For Men</h3>
                  <div class="modal-close-btn">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                  </div>
                </div>
                <span class="product-price fs-3">$99</span>
                <div class="product-details">
                  <p class="fs-7">Buy good shoes and a good mattress, because when you're not in one you're in the
                    other. With four pairs of shoes, I can travel the world.</p>
                </div>
                <ul class="select">
                  <li>
                    <strong>Colour Shown:</strong> Red, White, Black
                  </li>
                  <li>
                    <strong>Style:</strong> SM3018-100
                  </li>
                </ul>
                <div class="variations-form shopify-cart">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="quantity d-flex pb-4">
                        <div
                          class="qty-number align-top qty-number-plus d-flex justify-content-center align-items-center text-center">
                          <span class="increase-qty plus">
                            <svg class="plus">
                              <use xlink:href="#plus"></use>
                            </svg>
                          </span>
                        </div>
                        <input type="number" id="quantity_001" class="input-text text-center" step="1" min="1" name="quantity" value="1" title="Qty">
                        <div
                          class="qty-number qty-number-minus d-flex justify-content-center align-items-center text-center">
                          <span class="increase-qty minus">
                            <svg class="minus">
                              <use xlink:href="#minus"></use>
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <a rel="nofollow" data-no-instant="" href="#" class="out-stock button">Out of stock</a>
                      <button type="submit" class="btn btn-medium btn-black hvr-sweep-to-right">Add to cart</button>
                    </div>
                  </div>
                </div>
                <!-- variations-form -->
                <div class="categories d-flex flex-wrap pt-3">
                  <strong class="pe-2">Categories:</strong>
                  <a href="#" title="categories">Clothing,</a>
                  <a href="#" title="categories">Men's Clothes,</a>
                  <a href="#" title="categories">Tops & T-Shirts</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / quick view -->

  <div class="modal fade" id="modallong" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5">Cart</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="shopping-cart">
            <div class="shopping-cart-content">
              <div class="mini-cart cart-list p-0 mt-3">
                <div class="mini-cart-item d-flex border-bottom pb-3">
                  <div class="col-lg-2 col-md-3 col-sm-2 me-4">
                    <a href="#" title="product-image">
                      <img src="user/images/single-product-thumb1.jpg" class="img-fluid" alt="single-product-item">
                    </a>
                  </div>
                  <div class="col-lg-9 col-md-8 col-sm-8">
                    <div class="product-header d-flex justify-content-between align-items-center mb-3">
                      <h4 class="product-title fs-6 me-5">Sport Shoes For Men</h4>
                      <a href="" class="remove" aria-label="Remove this item" data-product_id="11913"
                        data-cart_item_key="abc" data-product_sku="">
                        <svg class="close">
                          <use xlink:href="#close"></use>
                        </svg>
                      </a>
                    </div>
                    <div class="quantity-price d-flex justify-content-between align-items-center">
                      <div class="input-group product-qty">
                        <button type="button"
                          class="quantity-left-minus btn btn-light rounded-0 rounded-start btn-number"
                          data-type="minus">
                          <svg width="16" height="16">
                            <use xlink:href="#minus"></use>
                          </svg>
                        </button>
                        <input type="text" name="quantity" class="form-control input-number quantity" value="1">
                        <button type="button" class="quantity-right-plus btn btn-light rounded-0 rounded-end btn-number"
                          data-type="plus">
                          <svg width="16" height="16">
                            <use xlink:href="#plus"></use>
                          </svg>
                        </button>
                      </div>
                      <div class="price-code">
                        <span class="product-price fs-6">$99</span>
                      </div>
                    </div>
                    <!-- quantity-price -->
                  </div>
                </div>
              </div>
              <div class="mini-cart cart-list p-0 mt-3">
                <div class="mini-cart-item d-flex border-bottom pb-3">
                  <div class="col-lg-2 col-md-3 col-sm-2 me-4">
                    <a href="#" title="product-image">
                      <img src="user/images/single-product-thumb2.jpg" class="img-fluid" alt="single-product-item">
                    </a>
                  </div>
                  <div class="col-lg-9 col-md-8 col-sm-8">
                    <div class="product-header d-flex justify-content-between align-items-center mb-3">
                      <h4 class="product-title fs-6 me-5">Brand Shoes For Men</h4>
                      <a href="" class="remove" aria-label="Remove this item" data-product_id="11913"
                        data-cart_item_key="abc" data-product_sku="">
                        <svg class="close">
                          <use xlink:href="#close"></use>
                        </svg>
                      </a>
                    </div>
                    <div class="quantity-price d-flex justify-content-between align-items-center">
                      <div class="input-group product-qty">
                        <button type="button"
                          class="quantity-left-minus btn btn-light rounded-0 rounded-start btn-number"
                          data-type="minus">
                          <svg width="16" height="16">
                            <use xlink:href="#minus"></use>
                          </svg>
                        </button>
                        <input type="text" name="quantity" class="form-control input-number quantity" value="1">
                        <button type="button" class="quantity-right-plus btn btn-light rounded-0 rounded-end btn-number"
                          data-type="plus">
                          <svg width="16" height="16">
                            <use xlink:href="#plus"></use>
                          </svg>
                        </button>
                      </div>
                      <div class="price-code">
                        <span class="product-price fs-6">$99</span>
                      </div>
                    </div>
                    <!-- quantity-price -->
                  </div>
                </div>
              </div>
              <!-- cart-list -->
              <div class="mini-cart-total d-flex justify-content-between py-4">
                <span class="fs-6">Subtotal:</span>
                <span class="special-price-code">
                  <span class="price-amount amount fs-6" style="opacity: 1;">
                    <bdi>
                      <span class="price-currency-symbol">$</span>198.00 </bdi>
                  </span>
                </span>
              </div>
              <div class="modal-footer my-4 justify-content-center">
                <button type="button" class="btn btn-red hvr-sweep-to-right dark-sweep">View Cart</button>
                <button type="button"
                  class="btn btn-outline-gray hvr-sweep-to-right dark-sweep">Checkout</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cart view -->

  <div class="modal fade" id="modallogin" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered" role="document">
      <div class="modal-content p-4">
        <div class="modal-header mx-auto border-0">
          <h2 class="modal-title fs-3 fw-normal">Login</h2>
        </div>
        <div class="modal-body">
          <div class="login-detail">
            <div class="login-form p-0">
              <div class="col-lg-12 mx-auto">
                <form id="login-form">
                  <input type="text" name="username" placeholder="Username or Email Address *"
                    class="mb-3 ps-3 text-input">
                  <input type="password" name="password" placeholder="Password" class="ps-3 text-input">
                  <div class="checkbox d-flex justify-content-between mt-4">
                    <p class="checkbox-form">
                      <label class="">
                        <input name="rememberme" type="checkbox" id="remember-me" value="forever"> Remember me </label>
                    </p>
                    <p class="lost-password">
                      <a href="#">Forgot your password?</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer mt-5 d-flex justify-content-center">
              <button type="button" class="btn btn-red hvr-sweep-to-right dark-sweep">Login</button>
              <button type="button"
                class="btn btn-outline-gray hvr-sweep-to-right dark-sweep">Register</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login -->

  <header id="header" class="site-header text-black">
    <div class="header-top border-bottom py-2">
      <div class="container-lg">
        <div class="row justify-content-evenly">
          <div class="col">
            <ul class="social-links list-unstyled d-flex m-0">
              <li class="pe-2">
                <a href="#">
                  <svg class="facebook" width="20" height="20">
                    <use xlink:href="#facebook"></use>
                  </svg>
                </a>
              </li>
              <li class="pe-2">
                <a href="#">
                  <svg class="instagram" width="20" height="20">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </a>
              </li>
              <li class="pe-2">
                <a href="#">
                  <svg class="youtube" width="20" height="20">
                    <use xlink:href="#youtube"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg class="pinterest" width="20" height="20">
                    <use xlink:href="#pinterest"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
          <div class="col d-none d-md-block">
            <p class="text-center text-black m-0"><strong>Special Offer</strong>: Free Shipping on all the orders above $100
            </p>
          </div>
          <div class="col">
            <ul class="d-flex justify-content-end gap-3 list-unstyled m-0">
              @if(Auth::User())
              
                <li>
                <p class="p-2">{{Auth::User()->name}}</p>
              </li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="btn btn-danger">Logout</button>
                </form>
              </li>
               
              
              @else
                 <li>
                <a href="/login">Login</a>
              </li>
              <li>
               <a href="/register">Register</a>
              </li>
            
              @endif
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    <nav id="header-nav" class="navbar navbar-expand-lg">
      <div class="container-lg">
        <a class="navbar-brand" href="index.html">
          <img src="user/images/main-logo.png" class="logo" alt="logo">
        </a>
        <button class="navbar-toggler d-flex d-lg-none order-3 border-0 p-1 ms-2" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="navbar-icon">
            <use xlink:href="#navbar-icon"></use>
          </svg>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar">
          <div class="offcanvas-header px-4 pb-0">
            <a class="navbar-brand ps-3" href="index.html">
              <img src="user/images/main-logo.png" class="logo" alt="logo">
            </a>
            <button type="button" class="btn-close btn-close-black p-5" data-bs-dismiss="offcanvas" aria-label="Close"
              data-bs-target="#bdNavbar"></button>
          </div>
          <div class="offcanvas-body">
            <ul id="navbar" class="navbar-nav fw-bold justify-content-end align-items-center flex-grow-1">
              <li class="nav-item dropdown">
                <a class="nav-link me-5 active border-0" href="#" data-bs-toggle="dropdown"
                  aria-expanded="false">Home</a>
                
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link me-5 active dropdown-toggle border-0" href="#" data-bs-toggle="dropdown"
                  aria-expanded="false">Products</a>
                <ul class="dropdown-menu fw-bold">
                  <li>
                    <a href="index.html" class="dropdown-item">Category 1</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html">Category 2</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html">Category 3 </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html">Category 4</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html">Category 5</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html">Category 6</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5" href="index.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5" href="/contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5" href="#">Cart</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="user-items ps-0 ps-md-5">
          <ul class="d-flex justify-content-end list-unstyled align-item-center m-0">
            <li class="pe-3">
              <a href="login" data-bs-toggle="modal" data-bs-target="#modallogin" class="border-0">
                <svg class="user" width="24" height="24">
                  <use xlink:href="#user"></use>
                </svg>
              </a>
            </li>
            <li class="pe-3">
              <a href="#" data-bs-toggle="modal" data-bs-target="#modallong" class="border-0">
                <svg class="shopping-cart" width="24" height="24">
                  <use xlink:href="#shopping-cart"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="search-item border-0" data-bs-toggle="collapse" data-bs-target="#search-box" aria-label="Toggle navigation">
                <svg class="search" width="24" height="24">
                  <use xlink:href="#search"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


@yield('content')


  <footer id="footer" class="py-5 border-top">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Info</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Track Your Order</a>
              </li>
              <li class="pb-2">
                <a href="index.html">Our Blog</a>
              </li>
              <li class="pb-2">
                <a href="#">Privacy policy</a>
              </li>
              <li class="pb-2">
                <a href="#">Shipping</a>
              </li>
              <li class="pb-2">
                <a href="/contact">Contact Us</a>
              </li>
              <li class="pb-2">
                <a href="#">Help</a>
              </li>
              <li class="pb-2">
                <a href="#">Community</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">About</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">History</a>
              </li>
              <li class="pb-2">
                <a href="#">Our Team</a>
              </li>
              <li class="pb-2">
                <a href="#">Services</a>
              </li>
              <li class="pb-2">
                <a href="#">Company</a>
              </li>
              <li class="pb-2">
                <a href="#">Manufacture</a>
              </li>
              <li class="pb-2">
                <a href="#">Wholesale</a>
              </li>
              <li class="pb-2">
                <a href="#">Retail</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Women Shoes</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Track Your Order</a>
              </li>
              <li class="pb-2">
                <a href="index.html">Our Blog</a>
              </li>
              <li class="pb-2">
                <a href="#">Privacy policy</a>
              </li>
              <li class="pb-2">
                <a href="#">Shipping</a>
              </li>
              <li class="pb-2">
                <a href="#">Contact Us</a>
              </li>
              <li class="pb-2">
                <a href="#">Help</a>
              </li>
              <li class="pb-2">
                <a href="#">Community</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Popular</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Prices Drop</a>
              </li>
              <li class="pb-2">
                <a href="#">New Products</a>
              </li>
              <li class="pb-2">
                <a href="#">Best Sales</a>
              </li>
              <li class="pb-2">
                <a href="index.html">Stores</a>
              </li>
              <li class="pb-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modallogin">Login</a>
              </li>
              <li class="pb-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modallong">Cart</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Mens Collection</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Delivery</a>
              </li>
              <li class="pb-2">
                <a href="index.html">About Us</a>
              </li>
              <li class="pb-2">
                <a href="#">Shoes</a>
              </li>
              <li class="pb-2">
                <a href="#">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-3">Get In Touch</h5>
            <div class="footer-contact-text">
              <span>Stylish Online Store 123 Main Street, Toulouse - France. </span>
              <span> Call us: (+33) 800 456 789-987 </span>
              <span class="text-hover fw-bold light-border"><a href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a></span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p>© Copyright Stylish 2023.</p>
        </div>
        <div class="col-md-6 text-lg-end">
          <p>Free HTML by <a href="https://templatesjungle.com/" target="_blank">TemplatesJungle</a><br> Distributed by <a href="https://themewagon.com" target="blank">ThemeWagon</a> </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="user/js/jquery-1.11.0.min.js"></script>
  <script src="user/js/plugins.js"></script>
  <script src="user/js/script.js"></script>
</body>

</html>
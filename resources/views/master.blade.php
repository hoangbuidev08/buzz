<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>BUZZSHOP-SỰ KHÁC BIỆT CỦA BẠN</title>
    <base href="{{asset('')}}">

    <meta name="keywords" content="thời trang Buzzshop" />
    <meta name="description" content="khác biệt với Buzzshop">
    <meta name="author" content="">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('')}}assets/images/icons/favicon.ico">
    
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/style.min.css">
</head>
@include('header')
@yield('content')
@include('footer')
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
<div class="mobile-menu-wrapper">
    <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
    <nav class="mobile-nav">
        <ul class="mobile-menu">
            <li class="active"><a href="#">Home</a></li>
            <li>
                <a href="category.html">Categories</a>
                <ul>
                    <li><a href="category.html">Full Width Banner</a></li>
                    <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                    <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                    <li><a href="category.html">Left Sidebar</a></li>
                    <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                    <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                    <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                    <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                    <li><a href="#">Product List Item Types</a></li>
                    <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                    <li><a href="category.html">3 Columns Products</a></li>
                    <li><a href="category-4col.html">4 Columns Products</a></li>
                    <li><a href="category-5col.html">5 Columns Products</a></li>
                    <li><a href="category-6col.html">6 Columns Products</a></li>
                    <li><a href="category-7col.html">7 Columns Products</a></li>
                    <li><a href="category-8col.html">8 Columns Products</a></li>
                </ul>
            </li>
            <li>
                <a href="product.html">Products</a>
                <ul>
                    <li>
                        <a href="#">Variations</a>
                        <ul>
                            <li><a href="product.html">Horizontal Thumbnails</a></li>
                            <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                            <li><a href="product.html">Inner Zoom</a></li>
                            <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                            <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Variations</a>
                        <ul>
                            <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                            <li><a href="product-simple.html">Simple Product</a></li>
                            <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Product Layout Types</a>
                        <ul>
                            <li><a href="product.html">Default Layout</a></li>
                            <li><a href="product-extended-layout.html">Extended Layout</a></li>
                            <li><a href="product-full-width.html">Full Width Layout</a></li>
                            <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                            <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                            <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                <ul>
                    <li><a href="cart.html">Shopping Cart</a></li>
                    <li>
                        <a href="#">Checkout</a>
                        <ul>
                            <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                            <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                            <li><a href="checkout-review.html">Checkout Review</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#" class="login-link">Login</a></li>
                    <li><a href="forgot-password.html">Forgot Password</a></li>
                </ul>
            </li>
            <li><a href="blog.html">Blog</a>
                <ul>
                    <li><a href="single.html">Blog Post</a></li>
                </ul>
            </li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="#" target="_blank">Buy Porto!</a></li>
        </ul>
    </nav><!-- End .mobile-nav -->

    <div class="social-icons">
        <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
        <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
        <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
    </div><!-- End .social-icons -->
</div>
<!-- End .mobile-menu-wrapper -->
</div>
<!-- End .mobile-menu-container -->

{{--  <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url({{asset('')}}assets/images/newsletter_popup_bg.jpg)">
    <div class="newsletter-popup-content">
        <img src="{{asset('')}}assets/images/logo-black.png" alt="Logo" class="logo-newsletter">
        <h2>BE THE FIRST TO KNOW</h2>
        <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
        <form action="#">
            <div class="input-group">
                <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                <input type="submit" class="btn" value="Go!">
            </div><div End .from-group -->
        </form>
        <div class="newsletter-subscribe">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1">
                    Don't show this popup again
                </label>
            </div>
        </div>
    </div>
    <!-- End .newsletter-popup-content -->
</div>  --}}
<!-- End .newsletter-popup -->

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<!-- Plugins JS File -->
<script src="{{asset('')}}assets/js/jquery.min.js"></script>
<script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('')}}assets/js/plugins.min.js"></script>

<!-- Main JS File -->
<script src="{{asset('')}}assets/js/main.min.js"></script>
</body>
</html>

@extends('client.master')
@section('noi_dung')
<main id="MainContent" class="content-for-layout">
    <!-- slideshow start -->
    <div class="slideshow-section position-relative">
        <div class="slideshow-active activate-slider" data-slick='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "dots": true,
            "arrows": true,
            "responsive": [
                {
                "breakpoint": 768,
                "settings": {
                    "arrows": false
                }
                }
            ]
        }'>
            <div class="slide-item slide-item-bag position-relative">
                <img class="slide-img d-none d-md-block" src="https://webdulichdanang.com/wp-content/uploads/2023/02/slider_cachep.jpg" alt="slide-1">
                <img class="slide-img d-md-none" src="https://webdulichdanang.com/wp-content/uploads/2023/02/slider_cachep.jpg" alt="slide-1">
                <div class="content-absolute content-slide">
                    <div class="container height-inherit d-flex align-items-center justify-content-end">
                        <div class="content-box slide-content slide-content-1 py-4">
                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Discover The Best Furniture
                            </h2>
                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Look for your inspiration here
                            </p>
                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                href="collection-left-sidebar.html"
                                data-animation="animate__animated animate__fadeInUp">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item slide-item-bag position-relative">
                <img class="slide-img d-none d-md-block" src="https://webdulichdanang.com/wp-content/uploads/2023/02/slider_banahill.jpg" alt="slide-2">
                <img class="slide-img d-md-none" src="https://webdulichdanang.com/wp-content/uploads/2023/02/slider_banahill.jpg" alt="slide-2">
                <div class="content-absolute content-slide">
                    <div class="container height-inherit d-flex align-items-center justify-content-end">
                        <div class="content-box slide-content slide-content-1 py-4 text-center">
                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Discover The Best Furniture
                            </h2>
                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Look for your inspiration here
                            </p>
                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                href="collection-left-sidebar.html"
                                data-animation="animate__animated animate__fadeInUp">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item slide-item-bag position-relative">
                <img class="slide-img d-none d-md-block" src="https://webdulichdanang.com/wp-content/uploads/2023/02/slider_biendanang.jpg" alt="slide-3">
                <img class="slide-img d-md-none" src="https://webdulichdanang.com/wp-content/uploads/2023/02/slider_biendanang.jpg" alt="slide-3">
                <div class="content-absolute content-slide">
                    <div class="container height-inherit d-flex align-items-center justify-content-center">
                        <div class="content-box slide-content slide-content-1 py-4 text-center">
                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Discover The Best Furniture
                            </h2>
                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Look for your inspiration here
                            </p>
                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                href="collection-left-sidebar.html"
                                data-animation="animate__animated animate__fadeInUp">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="activate-arrows"></div>
        <div class="activate-dots dot-tools"></div>
    </div>
    <!-- slideshow end -->

    <!-- banner start -->
    <div class="grid-banner mt-100 overflow-hidden">
        <div class="collection-tab-inner mt-0">
            <div class="container">
                <div class="grid-container-2">
                    <a class="grid-item grid-item-1 position-relative rounded mt-0 d-flex" href="collection-left-sidebar.html"
                        data-aos="fade-right" data-aos-duration="700">
                        <img class="banner-img rounded" src="https://webdulichdanang.com/wp-content/uploads/2023/02/slider_banahill.jpg" alt="banner-1">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex">
                                <div class="content-box banner-content p-4">
                                    <h2 class="heading_34 primary-color">20% Off On <br>New Chair</h2>
                                    <p class="text_14 mt-2 primary-color">Get Instant Cashback</p>
                                    <span class="text_12 mt-4 link-underline d-block primary-color">
                                        VIEW MORE
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="grid-item grid-item-2 position-relative rounded mt-0 d-flex" href="collection-left-sidebar.html"
                        data-aos="fade-right" data-aos-duration="700">
                        <img class="banner-img rounded" src="https://webdulichdanang.com/wp-content/uploads/2023/02/slider_biendanang.jpg" alt="banner-1">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex justify-content-end">
                                <div class="content-box banner-content p-4 text-end">
                                    <h2 class="heading_34 primary-color">Let’s buy <br>New Chair</h2>
                                    <p class="text_14 mt-2 primary-color">Get Instant Cashback</p>
                                    <span class="text_12 mt-4 link-underline d-block primary-color">
                                        VIEW MORE
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="grid-item grid-item-3 position-relative rounded mt-0 d-flex" href="collection-left-sidebar.html"
                        data-aos="fade-left" data-aos-duration="700">
                        <img class="banner-img rounded" src="https://webdulichdanang.com/wp-content/uploads/2023/02/slider_cachep.jpg" alt="banner-1">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex">
                                <div class="content-box banner-content p-4">
                                    <h2 class="heading_34 primary-color">Let’s buy <br>New Chair</h2>
                                    <p class="text_14 mt-2 primary-color">Get Instant Cashback</p>
                                    <span class="text_12 mt-4 link-underline d-block primary-color">
                                        VIEW MORE
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- collection start -->
    <div class="featured-collection mt-100 overflow-hidden">
        <div class="collection-tab-inner">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-heading primary-color">Tours Đà Nẵng</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="https://webdulichdanang.com/wp-content/uploads/2020/02/bai_ran-son-tra_04-400x267.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2020/02/bai_ran-son-tra_04-400x267.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-badge">
                                    <span class="badge-label badge-percentage rounded">-44%</span>
                                </div>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">best wood furniture</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="https://webdulichdanang.com/wp-content/uploads/2016/07/my-khe-beach-da-nang-537x360.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2016/07/my-khe-beach-da-nang-537x360.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="https://webdulichdanang.com/wp-content/uploads/2018/02/cau-rong-da-nang-phun-lua-400x267.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2018/02/cau-rong-da-nang-phun-lua-400x267.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-badge">
                                    <span class="badge-label badge-new rounded">New</span>
                                </div>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">Sarno Dining Chair</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="https://webdulichdanang.com/wp-content/uploads/2020/02/hoang-hon-ba-na.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2020/02/hoang-hon-ba-na.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">bisum tea table</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="https://webdulichdanang.com/wp-content/uploads/2020/02/bai_ran-son-tra_04-400x267.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2020/02/bai_ran-son-tra_04-400x267.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-badge">
                                    <span class="badge-label badge-percentage rounded">-44%</span>
                                </div>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">best wood furniture</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="https://webdulichdanang.com/wp-content/uploads/2016/07/my-khe-beach-da-nang-537x360.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2016/07/my-khe-beach-da-nang-537x360.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="https://webdulichdanang.com/wp-content/uploads/2018/02/cau-rong-da-nang-phun-lua-400x267.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2018/02/cau-rong-da-nang-phun-lua-400x267.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-badge">
                                    <span class="badge-label badge-new rounded">New</span>
                                </div>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">Sarno Dining Chair</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="https://webdulichdanang.com/wp-content/uploads/2020/02/hoang-hon-ba-na.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2020/02/hoang-hon-ba-na.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">bisum tea table</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                    <a class="btn-primary" href="#">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
    <!-- collection end -->

    <!-- video start -->
    <div class="video-section mt-100 overflow-hidden">
        <div class="overlay-furniture section-spacing"
            style="background: url('https://webdulichdanang.com/wp-content/uploads/2023/02/slider_biendanang.jpg')">
            <div class="container video-container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-tools d-flex align-items-center justify-content-center">
                            <div class="video-button-area">
                                <a class="video-button" target="_blank" href="https://www.youtube.com/watch?v=UGqw3xmczI0">
                                    <svg width="22" height="26" viewBox="0 0 22 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.5 12.134C22.1667 12.5189 22.1667 13.4811 21.5 13.866L2 25.1244C1.33333 25.5093 0.499999 25.0281 0.499999 24.2583L0.5 1.74167C0.5 0.971867 1.33333 0.490743 2 0.875643L21.5 12.134Z"
                                            fill="#FEFEFE" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video end -->
</main>
@endsection

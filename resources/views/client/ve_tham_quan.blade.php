@extends('client.master')
@section('noi_dung')
<main id="MainContent" class="content-for-layout">
    <div class="collection" style="margin-top: 30px">
        <div class="container">
            <div class="row flex-row-reverse">
                <!-- product area start -->
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="filter-sort-wrapper d-flex justify-content-between flex-wrap">
                        <div class="collection-title-wrap d-flex align-items-end">
                            <h2 class="collection-title heading_24 mb-0">All products</h2>
                            <p class="collection-counter text_16 mb-0 ms-2">(237 items)</p>
                        </div>
                        <div class="filter-sorting">
                            <div class="filter-drawer-trigger mobile-filter d-flex align-items-center d-lg-none">
                                <span class="mobile-filter-icon me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon icon-filter">
                                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                    </svg>
                                </span>
                                <span class="mobile-filter-heading">Filter and Sorting</span>
                            </div>
                        </div>
                    </div>
                    <div class="collection-product-container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
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

                                        <div
                                            class="product-card-action product-card-action-2 justify-content-center">
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
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26"
                                                    viewBox="0 0 24 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">best wood furniture</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span
                                                class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img"
                                                src="https://webdulichdanang.com/wp-content/uploads/2016/07/my-khe-beach-da-nang-537x360.jpg" alt="product-img">
                                            <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2016/07/my-khe-beach-da-nang-537x360.jpg"
                                                alt="product-img">
                                        </a>

                                        <div
                                            class="product-card-action product-card-action-2 justify-content-center">
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
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26"
                                                    viewBox="0 0 24 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span
                                                class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img"
                                                src="https://webdulichdanang.com/wp-content/uploads/2018/02/cau-rong-da-nang-phun-lua-400x267.jpg" alt="product-img">
                                            <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2018/02/cau-rong-da-nang-phun-lua-400x267.jpg"
                                                alt="product-img">
                                        </a>

                                        <div class="product-badge">
                                            <span class="badge-label badge-new rounded">New</span>
                                        </div>

                                        <div
                                            class="product-card-action product-card-action-2 justify-content-center">
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
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26"
                                                    viewBox="0 0 24 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">Sarno Dining Chair</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span
                                                class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
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

                                        <div
                                            class="product-card-action product-card-action-2 justify-content-center">
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
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26"
                                                    viewBox="0 0 24 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">best wood furniture</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span
                                                class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img"
                                                src="https://webdulichdanang.com/wp-content/uploads/2016/07/my-khe-beach-da-nang-537x360.jpg" alt="product-img">
                                            <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2016/07/my-khe-beach-da-nang-537x360.jpg"
                                                alt="product-img">
                                        </a>

                                        <div
                                            class="product-card-action product-card-action-2 justify-content-center">
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
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26"
                                                    viewBox="0 0 24 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span
                                                class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img"
                                                src="https://webdulichdanang.com/wp-content/uploads/2018/02/cau-rong-da-nang-phun-lua-400x267.jpg" alt="product-img">
                                            <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2018/02/cau-rong-da-nang-phun-lua-400x267.jpg"
                                                alt="product-img">
                                        </a>

                                        <div class="product-badge">
                                            <span class="badge-label badge-new rounded">New</span>
                                        </div>

                                        <div
                                            class="product-card-action product-card-action-2 justify-content-center">
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
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26"
                                                    viewBox="0 0 24 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">Sarno Dining Chair</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span
                                                class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
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

                                        <div
                                            class="product-card-action product-card-action-2 justify-content-center">
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
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26"
                                                    viewBox="0 0 24 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">best wood furniture</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span
                                                class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img"
                                                src="https://webdulichdanang.com/wp-content/uploads/2016/07/my-khe-beach-da-nang-537x360.jpg" alt="product-img">
                                            <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2016/07/my-khe-beach-da-nang-537x360.jpg"
                                                alt="product-img">
                                        </a>

                                        <div
                                            class="product-card-action product-card-action-2 justify-content-center">
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
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26"
                                                    viewBox="0 0 24 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span
                                                class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a class="hover-switch" href="collection-left-sidebar.html">
                                            <img class="secondary-img"
                                                src="https://webdulichdanang.com/wp-content/uploads/2018/02/cau-rong-da-nang-phun-lua-400x267.jpg" alt="product-img">
                                            <img class="primary-img" src="https://webdulichdanang.com/wp-content/uploads/2018/02/cau-rong-da-nang-phun-lua-400x267.jpg"
                                                alt="product-img">
                                        </a>

                                        <div class="product-badge">
                                            <span class="badge-label badge-new rounded">New</span>
                                        </div>

                                        <div
                                            class="product-card-action product-card-action-2 justify-content-center">
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
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>

                                            <a href="#" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26"
                                                    viewBox="0 0 24 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <a href="collection-left-sidebar.html">Sarno Dining Chair</a>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular">$1529</span>
                                            <span
                                                class="card-price-compare text-decoration-line-through">$1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination justify-content-center mt-100">
                        <nav>
                            <ul class="pagination m-0 d-flex align-items-center">
                                <li class="item disabled">
                                    <a class="link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-left">
                                            <polyline points="15 18 9 12 15 6"></polyline>
                                        </svg>
                                    </a>
                                </li>
                                <li class="item"><a class="link" href="#">1</a></li>
                                <li class="item active"><a class="link" href="#">2</a></li>
                                <li class="item"><a class="link" href="#">3</a></li>
                                <li class="item"><a class="link" href="#">4</a></li>
                                <li class="item">
                                    <a class="link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- product area end -->

                <!-- sidebar start -->
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="collection-filter filter-drawer">
                        <div class="filter-widget d-lg-none d-flex align-items-center justify-content-between">
                            <h5 class="heading_24">Filter By</h4>
                            <button type="button" class="btn-close text-reset filter-drawer-trigger d-lg-none"></button>
                        </div>
                        <div class="filter-widget">
                            <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                data-bs-toggle="collapse" data-bs-target="#filter-collection">
                                Tất cả các Tours
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </div>
                            <div id="filter-collection" class="accordion-collapse collapse show">
                                <ul class="filter-lists list-unstyled mb-0">
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            <span class="filter-text">Combo Đà Nẵng</span>
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Du lịch Biển
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Mạo hiểm
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Tours ghép
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-widget">
                            <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                data-bs-toggle="collapse" data-bs-target="#filter-price">
                                Giá
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </div>
                            <div id="filter-price" class="accordion-collapse collapse show">
                                <div class="filter-price d-flex align-items-center justify-content-between">
                                    <div class="filter-field">
                                        <input class="field-input" type="number" placeholder="$0" min="0"
                                            max="2000.00">
                                    </div>
                                    <div class="filter-separator px-3">To</div>
                                    <div class="filter-field">
                                        <input class="field-input" type="number" min="0" placeholder="$595.00"
                                            max="2000.00">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-widget">
                            <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                data-bs-toggle="collapse" data-bs-target="#filter-size">
                                Xếp hạng
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </div>
                            <div id="filter-size" class="accordion-collapse collapse show">
                                <ul class="filter-lists list-unstyled mb-0">
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            <span class="filter-text">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                            </span>
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            <span class="filter-text">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                            </span>
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            <span class="filter-text">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                            </span>
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            <span class="filter-text">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                            </span>
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            <span class="filter-text">
                                                <img src="/assets/img/icon/star.png" alt="img">
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-widget">
                            <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                data-bs-toggle="collapse" data-bs-target="#filter-type">
                                Tiện nghi
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </div>
                            <div id="filter-type" class="accordion-collapse collapse show">
                                <ul class="filter-lists list-unstyled mb-0">
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            <span class="filter-text"> 1 ngày</span>
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            2 ngày 1 đêm
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            3 ngày 2 đêm
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            4 ngày 3 đêm
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Bữa ăn
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Buffer
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Xe du lịch
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-widget">
                            <div
                                class="filter-header faq-heading heading_18 d-flex align-items-center border-bottom">
                                Điểm du lịch nổi tiếng
                            </div>
                            <div class="filter-related">
                                <div class="related-item d-flex">
                                    <div class="related-img-wrapper">
                                        <img class="related-img" src="https://webdulichdanang.com/wp-content/uploads/2018/02/cau-rong-da-nang-phun-lua-400x267.jpg"
                                            alt="img">
                                    </div>
                                    <div class="related-product-info">
                                        <h2 class="related-heading heading_18">
                                            <a href="product.html">Tea Table</a>
                                        </h2>
                                        <div
                                            class="related-review-icon product-icon-star d-flex align-items-center">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                        </div>
                                        <p class="related-price text_16">$2,546</p>
                                    </div>
                                </div>
                                <div class="related-item d-flex">
                                    <div class="related-img-wrapper">
                                        <img class="related-img" src="https://webdulichdanang.com/wp-content/uploads/2020/02/bai_ran-son-tra_04-400x267.jpg"
                                            alt="img">
                                    </div>
                                    <div class="related-product-info">
                                        <h2 class="related-heading heading_18">
                                            <a href="product.html">Comfy Sofa</a>
                                        </h2>
                                        <div
                                            class="related-review-icon product-icon-star d-flex align-items-center">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                        </div>
                                        <p class="related-price text_16">$1,526</p>
                                    </div>
                                </div>
                                <div class="related-item d-flex">
                                    <div class="related-img-wrapper">
                                        <img class="related-img" src="https://webdulichdanang.com/wp-content/uploads/2020/02/hoang-hon-ba-na.jpg"
                                            alt="img">
                                    </div>
                                    <div class="related-product-info">
                                        <h2 class="related-heading heading_18">
                                            <a href="product.html">Cusion Chair</a>
                                        </h2>
                                        <div
                                            class="related-review-icon product-icon-star d-flex align-items-center">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                            <img src="/assets/img/icon/star.png" alt="img">
                                        </div>
                                        <p class="related-price text_16">$1,235</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar end -->
            </div>
        </div>
    </div>
</main>
@endsection

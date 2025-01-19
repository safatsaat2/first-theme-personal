<?php
get_header();
?>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
    }

    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
    }

    .secondary-btn {
        height: 55px;
        padding: 0 15px;
        background: transparent;
        letter-spacing: 0;
        font-family: "Rubik", sans-serif;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: inherit;
        text-decoration: none;
    }

    .primary-btn {
        height: 55px;
        padding: 0 15px;
        background: #f5c332;
        letter-spacing: 0;
        font-family: "Rubik", sans-serif;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: inherit;
        text-decoration: none;
    }

    body {
        color: #231e41;
        font-family: "Rubik", sans-serif;
    }
</style>
<!-- Hero Section starts -->
<style>
    .sef-hero-section {
        background: #f9fafc;
    }

    .sef-hero-section .sef-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sef-hero-section .sef-container>div {
        width: 50%;
    }

    .sef-hero-section .sef-container div.img-parent {
        position: relative;
        overflow: hidden;
        height: calc(100vh - 150px);
        margin-top: 120px;
        width: 100%;
        float: right;
        border-bottom-right-radius: 400px;
        border-bottom-left-radius: 400px;
        box-shadow: 0 8px 8px -9px rgba(0, 0, 0, .4);
    }

    .sef-hero-section .sef-container div.img-parent img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top;
        bottom: 0;
        right: 0;
    }

    .sef-container .left-section .heading {
        margin-bottom: 30px;
        line-height: 100%;
        font-size: 72px;
        letter-spacing: -3px;
        font-family: "Rubik", sans-serif;
        color: #231e41;
    }

    .sef-container .left-section .sub-heading {
        margin-bottom: 30px;
        line-height: 100%;
        font-size: 16px;
        font-family: "Rubik", sans-serif;
        color: #6f6f87;
    }

    .sef-container .left-section .button-pr {
        display: flex;
        align-items: center;
        gap: 15px;
        color: #231e41;
    }
</style>
<section class="sef-hero-section">
    <div class="sef-container">
        <div class="left-section">
            <h2 class="heading">
                We do not cook, we create your emotions!
            </h2>
            <p class="sub-heading">
                This is a sub wording for demo
            </p>
            <div class="button-pr">
                <a href="#" class="primary-btn">Our Menu</a>
                <a href="#" class="secondary-btn">About us</a>
            </div>
        </div>
        <div class="right-section">
            <div class="img-parent">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/home/girl.png'; ?>" alt="hero image">
            </div>
        </div>
    </div>
</section>
<!-- Hero Section ends -->

<!-- More Expectation Section Starts -->
<style>
    .sef-ex-section {
        padding-top: 60px;
        background: #f9fafc;
    }

    .sef-ex-section .sef-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sef-ex-section .sef-container .left-section {
        width: 50%;
    }

    .sef-ex-section .sef-container .left-section .pr-com-ele {
        margin-bottom: 90px;
        position: relative;
        padding-bottom: 120%;
        width: 100%;
    }

    .sef-ex-section .sef-container .left-section .pr-com-ele .img-parent {
        position: absolute;
        overflow: hidden;
        z-index: 2;
        width: 80%;
        height: 90%;
        bottom: 10%;
        left: 0;
        box-shadow: 0 6px 8px -6px rgba(0, 0, 0, .1);
    }

    .sef-ex-section .sef-container .left-section .pr-com-ele .img-parent img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: bottom;
        animation: zoom 30s ease-in-out infinite;
    }

    .sef-ex-section .sef-container .left-section .pr-com-ele .sef-experience {
        background-color: #fff;
        position: absolute;
        z-index: 3;
        bottom: 0;
        right: 10%;
        width: 34%;
        padding: 30px;
        box-shadow: 6px 6px 8px -6px rgba(0, 0, 0, .1);
    }

    .sef-ex-section .sef-container .left-section .pr-com-ele .sef-experience div {
        padding: 15px;
        text-align: center;
        border: 3px dotted #f2f3f5;

    }

    .sef-ex-section .sef-container .left-section .pr-com-ele .sef-experience .number {
        font-weight: 500;
        font-family: "Monoton", sans-serif;
        line-height: 100%;
        font-size: 72px;
        letter-spacing: -3px;
        margin-bottom: 10px;
        margin-top: 0;
        color: #231e41;
    }

    .sef-ex-section .sef-container .left-section .pr-com-ele .sef-experience .year {
        line-height: 120%;
        font-size: 22px;
        letter-spacing: -1px;
        font-weight: 600;
        margin: 0;
        padding: 0;
        font-family: "Rubik", sans-serif;
    }

    .sef-ex-section .sef-container .right-section {
        max-width: 50%;
        width: 100%;
    }

    .sef-ex-section .sef-container .right-section .heading {
        font-weight: 600;
        margin: 0;
        padding: 0;
        line-height: 110%;
        font-size: 40px;
        letter-spacing: -2px;
        margin-bottom: 60px;
    }

    .sef-ex-section .sef-container .right-section .sef-features {
        display: flex;
        flex-direction: column;
        gap: 60px;
    }

    .sef-ex-section .sef-container .right-section .sef-features .features-item {
        display: flex;
        position: relative;
        z-index: 2;
    }

    .sef-ex-section .sef-container .right-section .sef-features .features-item .number {
        min-width: 62px;
        margin-right: 30px;
        font-family: "Monoton", sans-serif;
        color: #f5c332;
        font-size: 42px;
        line-height: 36px;
    }

    .sef-ex-section .sef-container .right-section .sef-features .features-item .feature-details {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .sef-ex-section .sef-container .right-section .sef-features .features-item .feature-details h6 {
        line-height: 120%;
        font-size: 22px;
        letter-spacing: -1px;
        margin: 0;
    }

    .sef-ex-section .sef-container .right-section .sef-features .features-item .feature-details p {
        color: #6f6f87;
        margin: 0;
        font-size: 15px;
    }

    @keyframes zoom {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
        }
    }
</style>
<div class="sef-ex-section">
    <div class="sef-container">
        <div class="left-section">
            <div class="pr-com-ele">
                <div class="img-parent">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/home/interior.jpg'; ?>" alt="interior">
                </div>
                <div class="sef-experience">
                    <div>
                        <p class="number">17</p>
                        <p class="year">Years Experience</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="right-section">
            <h2 class="heading">
                We Are doing more than you expect.
            </h2>
            <div class="sef-features">
                <div class="features-item">
                    <div class="number">
                        01
                    </div>
                    <div class="feature-details">
                        <h6>We are Located in the city</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum temporibus dolores, sed vel nulla ab reiciendis</p>
                    </div>
                </div>
                <div class="features-item">
                    <div class="number">
                        02
                    </div>
                    <div class="feature-details">
                        <h6>We are Located in the city</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum temporibus dolores, sed vel nulla ab reiciendis</p>
                    </div>
                </div>
                <div class="features-item">
                    <div class="number">
                        03
                    </div>
                    <div class="feature-details">
                        <h6>We are Located in the city</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum temporibus dolores, sed vel nulla ab reiciendis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- More Expectation Section ends -->

<!-- Like Today Section starts -->

<style>
    .sef-like-today {}

    .sef-like-today .sef-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .sef-like-today .sef-heading-area {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sef-like-today .sef-heading-area .left-area {}

    .sef-like-today .sef-heading-area .left-area h2 {
        font-family: "Rubik", sans-serif;
        font-size: 40px;
        line-height: 110%;
        color: #231e41;
        font-weight: 600;
        margin-bottom: 30px;
    }

    .sef-like-today .sef-heading-area .left-area p {
        font-family: "Rubik", sans-serif;
        font-size: 15px;
        line-height: 150%;
        color: #6f6f87;
        font-weight: 500;
        max-width: 350px;
    }

    .sef-like-today .sef-heading-area .right-area {}

    .sef-like-today .sef-heading-area .right-area .primary-btn {}

    .sef-like-today .sef-menu-area {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 30px;
        margin-top: 30px;
    }

    .sef-like-today .sef-menu-area .menu-item-box {
        padding: 30px;
        display: flex;
        align-items: center;
        gap: 30px;
        background: #f9fafc;
    }

    .sef-like-today .sef-menu-area .menu-item-box:hover {}

    .sef-like-today .sef-menu-area .menu-item-box .img-wrapper {
        max-width: 70px;
    }

    .sef-like-today .sef-menu-area .menu-item-box .img-wrapper img {
        width: 100%;
    }

    .sef-like-today .sef-menu-area .menu-item-box .item-text {}

    .sef-like-today .sef-menu-area .menu-item-box .item-text h4 {
        font-family: "Rubik", sans-serif;
        font-size: 22px;
        line-height: 120%;
        color: #231e41;
        font-weight: 500;
        margin-bottom: 10px;
    }

    .sef-like-today .sef-menu-area .menu-item-box .item-text p {
        font-family: "Rubik", sans-serif;
        font-size: 15px;
        color: #6f6f87;
        font-weight: 400;
    }
</style>
<div class="sef-like-today">
    <div class="sef-container">
        <div class="sef-heading-area">
            <div class="left-area">
                <h2 class="sef-heading">What do you like today?</h2>
                <p class="sef-heading">Consectetur numquam poro nemo veniam
                    eligendi rem adipisci quo modi.</p>
            </div>
            <div class="right-area">
                <a href="#" class="primary-btn">Go Order Now</a>
            </div>
        </div>
        <div class="sef-menu-area">
            <div class="menu-item-box">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/home/food-icon.png'; ?>" alt="" class="img-class">
                </div>
                <div class="item-text">
                    <h4>Starters</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
            <div class="menu-item-box">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/home/food-icon.png'; ?>" alt="" class="img-class">
                </div>
                <div class="item-text">
                    <h4>Starters</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
            <div class="menu-item-box">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/home/food-icon.png'; ?>" alt="" class="img-class">
                </div>
                <div class="item-text">
                    <h4>Starters</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
            <div class="menu-item-box">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/home/food-icon.png'; ?>" alt="" class="img-class">
                </div>
                <div class="item-text">
                    <h4>Starters</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Like Today Section ends -->

<style>
    .sef-popular-dishes {
        padding: 100px 0;
    }

    .sef-popular-dishes .sef-container {
        max-width: 1200px;
        margin: 0 auto;
        overflow: hidden;
    }

    .sef-popular-dishes .sef-heading-area {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 40px;
    }

    .sef-popular-dishes .sef-heading-area .left-area {}

    .sef-popular-dishes .sef-heading-area .left-area h2 {
        font-family: "Rubik", sans-serif;
        font-size: 40px;
        line-height: 110%;
        color: #231e41;
        font-weight: 600;
        margin-bottom: 30px;
    }

    .sef-popular-dishes .sef-heading-area .left-area p {
        font-family: "Rubik", sans-serif;
        font-size: 15px;
        line-height: 150%;
        color: #6f6f87;
        font-weight: 500;
        max-width: 350px;
    }

    .swiper-container.sef-slider-parent {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .sef-popular-dishes .sef-slider-parent .swiper-button-next:after,
    .sef-popular-dishes .sef-slider-parent .swiper-button-prev:after {
        font-size: 15px !important;
        color: #231e41
    }

    .sef-popular-dishes .sef-slider-parent .swiper-button-next,
    .sef-popular-dishes .sef-slider-parent .swiper-button-prev {
        width: 40px;
        height: 40px;
        background: #f5c332;
        border-radius: 50%;
        box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
    }

    .sef-popular-dishes .sef-slider-parent .swiper-button-prev {
        left: 20px;
    }

    .sef-popular-dishes .sef-slider-parent .swiper-button-next {
        right: 20px;
    }
</style>
<div class="sef-popular-dishes">
    <div class="sef-container">
        <div class="sef-heading-area">
            <div class="left-area">
                <h2 class="sef-heading">Most Popular Dishes</h2>
                <p class="sef-heading">Consectetur numquam poro nemo veniam
                    eligendi rem adipisci quo modi.</p>
            </div>
            <div class="right-area">
                <a href="#" class="primary-btn">Go Order Now</a>
            </div>
        </div>
        <div class="sef-popular-slider">
            <!-- Menu Item Slider starts -->
            <div class="swiper-container sef-slider-parent">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div href="#" class="sef-item-card">
                            <div class="sef-img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/home/food-img.jpg'; ?>" alt="item">
                            </div>
                            <div class="sef-text-wrapper">
                                <h3>CHevrefrit au miel</h3>
                                <p><span>$</span>15</p>
                            </div>
                            <div class="sef-content-wrapper">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolore explicabo molestias doloremque asperiores soluta ratione repellat</p>
                                <div class="btn-rating-wrapper">
                                    <div>
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.64062 13.125L4.65625 8.73438L1.25 5.78125L5.75 5.39062L7.5 1.25L9.25 5.39062L13.75 5.78125L10.3437 8.73438L11.3594 13.125L7.5 10.7969L3.64062 13.125Z" fill="#FFB147" />
                                        </svg>
                                        <span>(4.6 Star)</span>
                                    </div>
                                    <a href="#" class="primary-btn">order now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div href="#" class="sef-item-card">
                            <div class="sef-img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/home/food-img.jpg'; ?>" alt="item">
                            </div>
                            <div class="sef-text-wrapper">
                                <h3>CHevrefrit au miel</h3>
                                <p><span>$</span>15</p>
                            </div>
                            <div class="sef-content-wrapper">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolore explicabo molestias doloremque asperiores soluta ratione repellat</p>
                                <div class="btn-rating-wrapper">
                                    <div>
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.64062 13.125L4.65625 8.73438L1.25 5.78125L5.75 5.39062L7.5 1.25L9.25 5.39062L13.75 5.78125L10.3437 8.73438L11.3594 13.125L7.5 10.7969L3.64062 13.125Z" fill="#FFB147" />
                                        </svg>
                                        <span>(4.6 Star)</span>
                                    </div>
                                    <a href="#" class="primary-btn">order now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div href="#" class="sef-item-card">
                            <div class="sef-img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/home/food-img.jpg'; ?>" alt="item">
                            </div>
                            <div class="sef-text-wrapper">
                                <h3>CHevrefrit au miel</h3>
                                <p><span>$</span>15</p>
                            </div>
                            <div class="sef-content-wrapper">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolore explicabo molestias doloremque asperiores soluta ratione repellat</p>
                                <div class="btn-rating-wrapper">
                                    <div>
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.64062 13.125L4.65625 8.73438L1.25 5.78125L5.75 5.39062L7.5 1.25L9.25 5.39062L13.75 5.78125L10.3437 8.73438L11.3594 13.125L7.5 10.7969L3.64062 13.125Z" fill="#FFB147" />
                                        </svg>
                                        <span>(4.6 Star)</span>
                                    </div>
                                    <a href="#" class="primary-btn">order now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div href="#" class="sef-item-card">
                            <div class="sef-img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/home/food-img.jpg'; ?>" alt="item">
                            </div>
                            <div class="sef-text-wrapper">
                                <h3>CHevrefrit au miel</h3>
                                <p><span>$</span>15</p>
                            </div>
                            <div class="sef-content-wrapper">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolore explicabo molestias doloremque asperiores soluta ratione repellat</p>
                                <div class="btn-rating-wrapper">
                                    <div>
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.64062 13.125L4.65625 8.73438L1.25 5.78125L5.75 5.39062L7.5 1.25L9.25 5.39062L13.75 5.78125L10.3437 8.73438L11.3594 13.125L7.5 10.7969L3.64062 13.125Z" fill="#FFB147" />
                                        </svg>
                                        <span>(4.6 Star)</span>
                                    </div>
                                    <a href="#" class="primary-btn">order now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div href="#" class="sef-item-card">
                            <div class="sef-img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/home/food-img.jpg'; ?>" alt="item">
                            </div>
                            <div class="sef-text-wrapper">
                                <h3>CHevrefrit au miel</h3>
                                <p><span>$</span>15</p>
                            </div>
                            <div class="sef-content-wrapper">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolore explicabo molestias doloremque asperiores soluta ratione repellat</p>
                                <div class="btn-rating-wrapper">
                                    <div>
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.64062 13.125L4.65625 8.73438L1.25 5.78125L5.75 5.39062L7.5 1.25L9.25 5.39062L13.75 5.78125L10.3437 8.73438L11.3594 13.125L7.5 10.7969L3.64062 13.125Z" fill="#FFB147" />
                                        </svg>
                                        <span>(4.6 Star)</span>
                                    </div>
                                    <a href="#" class="primary-btn">order now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div href="#" class="sef-item-card">
                            <div class="sef-img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/home/food-img.jpg'; ?>" alt="item">
                            </div>
                            <div class="sef-text-wrapper">
                                <h3>CHevrefrit au miel</h3>
                                <p><span>$</span>15</p>
                            </div>
                            <div class="sef-content-wrapper">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolore explicabo molestias doloremque asperiores soluta ratione repellat</p>
                                <div class="btn-rating-wrapper">
                                    <div>
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.64062 13.125L4.65625 8.73438L1.25 5.78125L5.75 5.39062L7.5 1.25L9.25 5.39062L13.75 5.78125L10.3437 8.73438L11.3594 13.125L7.5 10.7969L3.64062 13.125Z" fill="#FFB147" />
                                        </svg>
                                        <span>(4.6 Star)</span>
                                    </div>
                                    <a href="#" class="primary-btn">order now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div href="#" class="sef-item-card">
                            <div class="sef-img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/home/food-img.jpg'; ?>" alt="item">
                            </div>
                            <div class="sef-text-wrapper">
                                <h3>CHevrefrit au miel</h3>
                                <p><span>$</span>15</p>
                            </div>
                            <div class="sef-content-wrapper">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolore explicabo molestias doloremque asperiores soluta ratione repellat</p>
                                <div class="btn-rating-wrapper">
                                    <div>
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.64062 13.125L4.65625 8.73438L1.25 5.78125L5.75 5.39062L7.5 1.25L9.25 5.39062L13.75 5.78125L10.3437 8.73438L11.3594 13.125L7.5 10.7969L3.64062 13.125Z" fill="#FFB147" />
                                        </svg>
                                        <span>(4.6 Star)</span>
                                    </div>
                                    <a href="#" class="primary-btn">order now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>


                <div class="swiper-pagination"></div>
            </div>
            <style>
                .sef-item-card {
                    max-width: 270px;
                    margin: 0 auto;
                    display: block;
                    text-decoration: none;
                }

                .sef-item-card .sef-img-wrapper {
                    width: 100%;
                    height: 240px;
                }

                .sef-item-card .sef-img-wrapper img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                .sef-item-card .sef-text-wrapper {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    margin-bottom: 15px;
                    padding-left: 15px;
                    background-color: #f2f3f5;
                }

                .sef-item-card .sef-text-wrapper h3 {
                    width: calc(100% - 90px);
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 1;
                    -webkit-box-orient: vertical;
                    font-family: "Rubik", sans-serif;
                    font-size: 16px;
                    letter-spacing: 0;
                    line-height: 120%;
                    color: #231e41;
                }

                .sef-item-card .sef-text-wrapper p {
                    width: 60px;
                    height: 60px;
                    font-weight: 500;
                    background-color: #f5c332;
                    color: #231e41;
                    font-size: 24px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-family: "Rubik", sans-serif;
                }

                .sef-item-card .sef-text-wrapper p span {
                    font-size: 12px;
                    font-weight: 400;
                }

                .sef-item-card .sef-content-wrapper {}

                .sef-item-card .sef-content-wrapper p {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;
                    font-family: "Rubik", sans-serif;
                    font-size: 15px;
                    letter-spacing: 0;
                    line-height: 120%;
                    color: #6f6f87;
                    margin-bottom: 15px;
                }

                .sef-item-card .sef-content-wrapper .btn-rating-wrapper {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }

                .sef-item-card .sef-content-wrapper .btn-rating-wrapper div {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .sef-item-card .sef-content-wrapper .btn-rating-wrapper div svg {}

                .sef-item-card .sef-content-wrapper .btn-rating-wrapper div span {
                    font-family: "Rubik", sans-serif;
                    font-size: 12px;
                    color: #6f6f87;
                }

                .sef-item-card .sef-content-wrapper .btn-rating-wrapper .primary-btn {
                    height: 35px;
                }
            </style>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.swiper-container.sef-slider-parent', {
            loop: true, // Enables infinite scrolling
            autoplay: {
                delay: 3000, // Autoplay delay in ms
                disableOnInteraction: false, // Keeps autoplay running after interaction
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 4, // Default: 4 slides visible
            spaceBetween: 10, // Space between slides in px
            breakpoints: {
                1024:{
                    slidesPerView: 4,
                },
                // When the screen width is 768px or less (for tablets and mobile)
                767: {
                    slidesPerView: 2, // Show 2 slides
                },
                // When the screen width is 480px or less (for mobile)
                0: {
                    slidesPerView: 1, // Show 1 slide
                },
            },
        });
    });
</script>

<!-- Menu Item Slider ends -->


<style>
    @media (max-width: 767px) {
        .sef-hero-section .sef-container {
            flex-direction: column-reverse;

        }

        .sef-hero-section .sef-container>div {
            width: 100%;
        }

        .sef-container .left-section .heading {
            font-size: 32px;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 15px;
        }

        .sef-container .left-section .sub-heading {
            font-size: 12px;
            text-align: center;
        }

        .sef-container .left-section .button-pr {
            justify-content: center;
        }



        .sef-ex-section .sef-container {
            flex-direction: column-reverse;
        }

        .sef-ex-section .sef-container .left-section {
            width: 100%;
            margin-top: 30px;
        }

        .sef-ex-section .sef-container .right-section {
            max-width: 100%;
        }

        .sef-ex-section .sef-container .right-section .heading {
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
        }

        .sef-ex-section .sef-container .right-section .sef-features {
            gap: 30px;
            padding: 0 20px;
        }

        .sef-ex-section .sef-container .right-section .sef-features .features-item .number {
            font-size: 24px;
            min-width: 40px;
            margin-right: 15px;
        }

        .sef-ex-section .sef-container .right-section .sef-features .features-item .feature-details {
            gap: 10px;
        }

        .sef-ex-section .sef-container .right-section .sef-features .features-item .feature-details h6 {
            font-size: 16px;
        }

        .sef-ex-section .sef-container .right-section .sef-features .features-item .feature-details p {
            font-size: 10px;
        }

        .sef-ex-section .sef-container .left-section .pr-com-ele .sef-experience .number {
            font-size: 32px;
        }

        .sef-ex-section .sef-container .left-section .pr-com-ele .sef-experience div {
            padding: 10px;
        }

        .sef-ex-section .sef-container .left-section .pr-com-ele .sef-experience {
            padding: 15px;
        }

        .sef-ex-section .sef-container .left-section .pr-com-ele .sef-experience .year {
            font-size: 11px;
        }

        .sef-ex-section .sef-container .left-section .pr-com-ele .img-parent {
            width: 100%;
        }

        .sef-ex-section .sef-container .left-section .pr-com-ele .sef-experience {
            right: 0;
        }

        .sef-like-today .sef-heading-area .left-area h2 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .sef-like-today {
            padding: 60px 10px;
        }

        .sef-like-today .sef-heading-area .left-area p {
            font-size: 10px;
        }

        .primary-btn {
            font-size: 12px;
            padding: 0 8px;
        }

        .sef-like-today .sef-heading-area .left-area {
            max-width: 70%;
        }

        .sef-like-today .sef-menu-area {
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 15px;
            margin-top: 15px;
        }

        .sef-like-today .sef-menu-area .menu-item-box {
            padding: 15px;
            gap: 15px;
        }

        .sef-like-today .sef-menu-area .menu-item-box .item-text h4 {
            font-size: 16px;
        }

        .sef-like-today .sef-menu-area .menu-item-box .item-text p {
            font-size: 10px;
        }

        .sef-like-today .sef-menu-area .menu-item-box .img-wrapper {
            max-width: 40px;
        }

        .sef-popular-dishes .sef-heading-area .left-area h2 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .sef-popular-dishes {
            padding: 60px 10px;
        }

        .sef-popular-dishes .sef-heading-area .left-area p {
            font-size: 10px;
        }

        .sef-popular-dishes .sef-heading-area .left-area {
            max-width: 70%;
        }

    }
</style>

<?php
get_footer();

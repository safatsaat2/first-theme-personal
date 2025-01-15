<?php
get_header();
?>

<style>
    *{
        box-sizing: border-box;
        margin: 0;
    }
    p,h1,h2,h3,h4,h5,h6{
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

    .sef-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sef-container .left-section {
        width: 50%;
    }

    .sef-container .left-section .pr-com-ele {
        margin-bottom: 90px;
        position: relative;
        padding-bottom: 120%;
        width: 100%;
    }

    .sef-container .left-section .pr-com-ele .img-parent {
        position: absolute;
        overflow: hidden;
        z-index: 2;
        width: 80%;
        height: 90%;
        bottom: 10%;
        left: 0;
        box-shadow: 0 6px 8px -6px rgba(0, 0, 0, .1);
    }

    .sef-container .left-section .pr-com-ele .img-parent img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: bottom;
        animation: zoom 30s ease-in-out infinite;
    }

    .sef-container .left-section .pr-com-ele .sef-experience {
        background-color: #fff;
        position: absolute;
        z-index: 3;
        bottom: 0;
        right: 10%;
        width: 34%;
        padding: 30px;
        box-shadow: 6px 6px 8px -6px rgba(0, 0, 0, .1);
    }

    .sef-container .left-section .pr-com-ele .sef-experience div {
        padding: 15px;
        text-align: center;
        border: 3px dotted #f2f3f5;

    }

    .sef-container .left-section .pr-com-ele .sef-experience .number {
        font-weight: 500;
        font-family: "Monoton", sans-serif;
        line-height: 100%;
        font-size: 72px;
        letter-spacing: -3px;
        margin-bottom: 10px;
        margin-top: 0;
        color: #231e41;
    }

    .sef-container .left-section .pr-com-ele .sef-experience .year {
        line-height: 120%;
        font-size: 22px;
        letter-spacing: -1px;
        font-weight: 600;
        margin: 0;
        padding: 0;
        font-family: "Rubik", sans-serif;
    }

    .sef-container .right-section {
        max-width: 50%;
        width: 100%;
    }

    .sef-container .right-section .heading {
        font-weight: 600;
        margin: 0;
        padding: 0;
        line-height: 110%;
        font-size: 40px;
        letter-spacing: -2px;
        margin-bottom: 60px;
    }

    .sef-container .right-section .sef-features {
        display: flex;
        flex-direction: column;
        gap: 60px;
    }

    .sef-container .right-section .sef-features .features-item {
        display: flex;
        position: relative;
        z-index: 2;
    }

    .sef-container .right-section .sef-features .features-item .number {
        min-width: 62px;
        margin-right: 30px;
        font-family: "Monoton", sans-serif;
        color: #f5c332;
        font-size: 42px;
        line-height: 36px;
    }

    .sef-container .right-section .sef-features .features-item .feature-details {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .sef-container .right-section .sef-features .features-item .feature-details h6 {
        line-height: 120%;
        font-size: 22px;
        letter-spacing: -1px;
        margin: 0;
    }

    .sef-container .right-section .sef-features .features-item .feature-details p {
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
            <div class="menu-utem-box">
                <div class="img-wrapper">
                    <img src="#" alt="" class="img-class">
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

<?php
get_footer();

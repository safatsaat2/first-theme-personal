<?php
get_header();
?>
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

    .sef-container .left-section .button-pr .primary-btn {
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

    .sef-container .left-section .button-pr .secondary-btn {
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


<?php
get_footer();

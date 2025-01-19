<?php
// Template Name: Contact Page
?>
<?php
get_header();

?>
<style>
    .sef-contact-pr {
        padding: 60px 0 0 0;
        background: #f9fafc;
    }

    .sef-contact-pr .sef-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
    }

    .sef-contact-pr .sef-container .menu {
        margin-bottom: 30px;
        display: inline-block;
        padding: 2px 5px;
        background: #f2f3f5;
        font-size: 12px;
        color: #231341;
    }

    .sef-contact-pr .sef-container .heading {
        font-size: 72px;
        letter-spacing: -3px;
        line-height: 100%;
        margin-bottom: 30px;
        color: #231341;
    }

    .sef-contact-pr .sef-container .description {
        font-size: 15px;
        line-height: 100%;
        margin-bottom: 30px;
        color: #6f6f87;
    }

    .sef-contact-pr .sef-container .menu-box {
        max-width: 194px;
        margin: 0;
        padding: 0 20px;
        height: 55px;
        background: #f5c332;
        color: #231341;
        display: flex;
        align-items: center;
    }

    .sef-contact-pr .sef-container .menu-box span {
        padding: 0 10px;
        color: #231341;
    }

    .sef-contact-pr .sef-container .text-area {
        max-width: 55%;
    }

    .sef-contact-pr .sef-container .form-area {
        max-width: 45%;
        width: 100%;
        position: relative;
        background-color: #fff;
        padding: 30px;
        text-align: center;
        box-shadow: 0 0 8px -2px rgba(0, 0, 0, .1);
    }

    .sef-contact-pr .sef-container .form-area .form-wrapper {
        border: 3px dotted #f2f3f5;
        width: 100%;
        padding: 30px;
    }

    .sef-contact-pr .sef-container .form-area .form-wrapper .form-title {
        line-height: 120%;
        font-size: 22px;
        letter-spacing: -1px;
        margin-bottom: 30px;
        font-weight: 700;
        display: block;
    }

    .sef-contact-pr .sef-container .form-area .form-wrapper p span {
        width: 100%;
        display: block;
        text-align: left;
    }

    .sef-contact-pr .sef-container .form-area .form-wrapper p span input {
        width: 100%;
        height: 50px;
        position: relative;
        padding: 0 20px;
        font-size: 14px;
        background-color: #f9fafc;
        display: block;
        width: 100%;
        border: none;
        border-bottom: 1px solid #f2f3f5;
        margin-bottom: 20px;
    }

    .sef-contact-pr .sef-container .form-area .form-wrapper p input[type="submit"] {
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
        border: none;
        margin: auto;
    }

    .sef-contact-pr .sef-container .form-area .form-wrapper p span textarea {
        width: 100%;
        height: 200px;
        position: relative;
        padding: 0 20px;
        font-size: 14px;
        background-color: #f9fafc;
        display: block;
        width: 100%;
        border: none;
        border-bottom: 1px solid #f2f3f5;
        margin-bottom: 20px;
    }
</style>
<section class="sef-contact-pr">
    <div class="sef-container">
        <div class="text-area">
            <span class="menu">Contact</span>
            <h2 class="heading">Get in Touch with Starbelly
            </h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A iusto dignissimos</p>
            <div class="menu-box">
                <span>Home</span>/<span>Contact</span>
            </div>
        </div>
        <div class="form-area">
            <div class="form-wrapper">
                <span class="form-title">Send Message</span>
                <?php
                echo do_shortcode('[contact-form-7 id="bc30bfa" title="Contact form 1"]');
                ?>
            </div>
        </div>
    </div>
</section>

<style>
    .contact-information {
        padding: 60px 0;
    }

    .contact-information .sef-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 60px;
    }

    .contact-information .sef-container .features-item {
        display: flex;
        position: relative;
        z-index: 2;
    }

    .contact-information .sef-container .features-item .number {
        min-width: 62px;
        margin-right: 30px;
        font-family: "Monoton", sans-serif;
        color: #f5c332;
        font-size: 42px;
        line-height: 36px;
    }

    .contact-information .sef-container .features-item .feature-details {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .contact-information .sef-container .features-item .feature-details h6 {
        line-height: 120%;
        font-size: 22px;
        letter-spacing: -1px;
        margin: 0;
    }

    .contact-information .sef-container .features-item .feature-details p {
        color: #6f6f87;
        margin: 0;
        font-size: 15px;
    }
</style>
<section class="contact-information">
    <div class="sef-container">
        <div class="features-item">
            <div class="number">
                01
            </div>
            <div class="feature-details">
                <h6>Adress</h6>
                <p>Montréal, 1510 Rue Sauvé</p>
            </div>
        </div>
        <div class="features-item">
            <div class="number">
                02
            </div>
            <div class="feature-details">
                <h6>Call</h6>
                <p>+02 (044) 756-X6-52</p>
            </div>
        </div>
        <div class="features-item">
            <div class="number">
                03
            </div>
            <div class="feature-details">
                <h6>Email</h6>
                <p>starbelly@mail.com</p>
            </div>
        </div>
    </div>
</section>

<style>
    @media (max-width: 767px) {
        .sef-contact-pr .sef-container {
            flex-direction: column;
            text-align: center;
        }

        .sef-contact-pr .sef-container .menu {
            font-size: 10px;
            margin-bottom: 10px;
        }

        .sef-contact-pr .sef-container .heading {
            font-size: 32px;
            margin-bottom: 15px;
            letter-spacing: normal;
        }

        .sef-contact-pr .sef-container .description {
            font-size: 12px;
        }

        .sef-contact-pr .sef-container .menu-box {
            margin: auto;
            height: 35px;
            justify-content: center;
        }

        .sef-contact-pr .sef-container .menu-box span {
            font-size: 12px;
        }

        .sef-contact-pr .sef-container .text-area {
            max-width: 100%
        }

        .sef-contact-pr .sef-container .form-area {
            max-width: 100%;
            margin-top: 20px;
            padding: 10px;
        }
        .sef-contact-pr .sef-container .form-area .form-wrapper{
            padding: 10px;
        }
        .contact-information .sef-container {
            flex-direction: column;
        }
    }
</style>
<?php


get_footer();
?>
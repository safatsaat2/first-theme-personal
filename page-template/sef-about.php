<?php
// Template Name: About Page
?>
<?php
get_header();
?>
<style>
    .sef-hero-about {
        background: #f9fafc;
        padding: 80px 0;
    }

    .sef-hero-about .sef-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
    }

    .sef-hero-about .sef-container .about {
        margin-bottom: 30px;
        display: inline-block;
        padding: 2px 5px;
        background: #f2f3f5;
        font-size: 12px;
        color: #231341;
    }

    .sef-hero-about .sef-container .heading {
        font-size: 72px;
        letter-spacing: -3px;
        line-height: 100%;
        margin-bottom: 30px;
        color: #231341;
    }

    .sef-hero-about .sef-container .description {
        font-size: 15px;
        line-height: 100%;
        margin-bottom: 30px;
        color: #6f6f87;
    }

    .sef-hero-about .sef-container .about-box {
        max-width: 164px;
        margin: 0 auto;
        padding: 0 20px;
        height: 55px;
        background: #f5c332;
        color: #231341;
        display: flex;
        align-items: center;
    }

    .sef-hero-about .sef-container .about-box span {
        padding: 0 10px;
        color: #231341;
    }

</style>
<section class="sef-hero-about">
    <div class="sef-container">
        <span class="about">About</span>
        <h2 class="heading">Bringing People Together Through Food</h2>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A iusto dignissimos</p>
        <div class="about-box">
            <span>Home</span>/<span>About</span>
        </div>
    </div>
</section>
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
        gap: 20px;
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
    
    @media (max-width: 767px) {
        .sef-hero-section .sef-container {
            flex-direction: column-reverse;

        }

        .sef-hero-section .sef-container>div {
            width: 100%;
            text-align: center;
        }
        .sef-container .left-section {
            margin-top: 20px;
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
        
    }
</style>
<section class="sef-hero-section">
    <div class="sef-container">
        <div class="left-section">
            <span class="sub-heading">Our story</span>
            <h2 class="heading">
                Where Passion Meets the Plate
            </h2>
            <p class="sub-heading">
                Our story is rooted in passion and a love for exceptional food. Inspired by [specific inspiration, e.g., family traditions, local ingredients, or cultural heritage], we craft every dish with care, using fresh, high-quality ingredients. Our goal is simple: to create memorable dining experiences that bring people together. Whether it’s a special occasion or a casual meal, we pour our heart into every plate, ensuring each bite tells a story. Thank you for being part of our journey—we’re thrilled to share our passion with you, one meal at a time.
            </p>
            <div class="button-pr">
                <a href="<?php echo site_url(); ?>/menu-items" class="primary-btn">Our Menu</a>
            </div>
        </div>
        <div class="right-section">
            <div class="img-parent">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/about/team.jpg'; ?>" alt="team image">
            </div>
        </div>
    </div>
</section>
<!-- Hero Section ends -->

<?php
get_footer();
?>
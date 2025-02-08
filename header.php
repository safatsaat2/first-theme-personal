<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?> <!-- This is essential for WordPress to load scripts and styles -->
    <style>
        /* Base styles for desktop and larger screens */
        .srs-header {
            top: 0;
            padding: 0;
            position: sticky;
            background-color: transparent;
            background: transparent;
            backdrop-filter: blur(5px);
            width: 100%;
            z-index: 99;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .05);
        }

        .srs-header .sef-header-pr {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
        }

        .srs-header .sef-header-pr .logo-wrapper img {
            max-width: 100%;
            height: auto;
        }

        .srs-header .sef-header-pr .items-parent {
            display: flex;
            gap: 20px;
        }

        .srs-header .sef-header-pr .items-parent a.item {
            text-decoration: none;
            color: #000;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        .srs-header .sef-header-pr .items-parent a.item:hover {
            color: #FFB147;
        }

        .srs-header .sef-header-pr .add-to-list {
            display: flex;
            align-items: center;
        }

        .srs-header .sef-header-pr .add-to-list svg {
            width: 15px;
            height: 15px;
            fill: #FFB147;
        }

        .srs-header .sef-header-pr .add-to-list span {
            margin-left: 8px;
            font-size: 16px;
            color: #000;
        }

        /* Initially hide the cross icon */
        .hide {
            display: none;
        }

        /* Smooth transition for menu */
        .srs-header .sef-header-pr .items-parent {
            transition: transform 1s ease-in-out, opacity 1s ease;
        }

        @media (max-width:767px) {
            /* .srs-header {
                position: relative;
            } */

            .srs-header .sef-header-pr .items-parent {
                display: none;
                transform: translateX(-100%);
                transition: all .5s linear;
            }

            .hamBurg {
                position: absolute;
                right: 10px;
            }

            .srs-header .sef-header-pr .items-parent.show {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 0;
                width: 50%;
                background: #fff;
                height: 100vh;
                left: 0;
                padding: 20px;
                padding-top: 60px;
                z-index: 999;
                transform: translateX(0);
            }

            .srs-header .sef-header-pr .items-parent.show {
                display: flex;
                transform: translateX(0);
                opacity: 1;
            }

            /* Initially hide the cross icon and show the hamburger icon */
            .hamBurg .cross {
                display: none;
            }

            .hamBurg .ham {
                display: block;
            }

            /* Hide the hamburger icon and show the cross when menu is open */
            .srs-header .sef-header-pr .items-parent.show~.hamBurg .ham {
                display: none;
            }

            .srs-header .sef-header-pr .items-parent.show~.hamBurg .cross {
                display: block;
            }

        }

        @media (min-width: 768px) {
            .hamBurg {
                display: none;
            }
        }

        .sef-menu-items {
            position: absolute;
            right: 0;
            width: 400px;
            background: #fff;
            top: 100%;
            padding: 20px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .05);
            transform: translateX(200%);
            transition: all .5s cubic-bezier(.645, .045, .355, 1);

        }
        .sef-items-wrapper{
            max-height: 340px;
            overflow-y: scroll;
        }
        .sef-menu-items .sef-items-footer{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }
        .sef-menu-items.open {
            transform: translateX(0);
        }

        .sef-menu-items .sef-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #f9fafc;
            margin-bottom: 20px;
        }

        .sef-menu-items .sef-item .item-name {
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

        .sef-menu-items .sef-item .item-price {
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

        .sef-menu-items .sef-item img {
            width: 60px;
            height: 60px;
            object-fit: cover;
        }

        .srs-header .sef-header-pr .add-to-list {
            position: relative;
            cursor: pointer;
        }
    </style>
</head>

<body <?php body_class(); ?>> <!-- Adds dynamic body classes -->
    <header class="srs-header">
        <div class="sef-header-pr">
            <div class="logo-wrapper">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/home/logo.svg' ?>" alt="">
            </div>
            <nav class="items-parent">
                <a class="item" href="/">Home</a>
                <a class="item" href="<?php echo site_url(); ?>/menu-items">Menu</a>
                <a class="item" href="<?php echo site_url(); ?>/about">About</a>
                <a class="item" href="<?php echo site_url(); ?>/contact">Contact</a>
            </nav>
            <div class="add-to-list">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 2.5H2.5C2.33424 2.5 2.17527 2.56585 2.05806 2.68306C1.94085 2.80027 1.875 2.95924 1.875 3.125V11.875C1.875 12.0408 1.94085 12.1997 2.05806 12.3169C2.17527 12.4342 2.33424 12.5 2.5 12.5H12.5C12.6658 12.5 12.8247 12.4342 12.9419 12.3169C13.0592 12.1997 13.125 12.0408 13.125 11.875V3.125C13.125 2.95924 13.0592 2.80027 12.9419 2.68306C12.8247 2.56585 12.6658 2.5 12.5 2.5ZM2.5 1.25C2.00272 1.25 1.52581 1.44754 1.17417 1.79917C0.822544 2.15081 0.625 2.62772 0.625 3.125V11.875C0.625 12.3723 0.822544 12.8492 1.17417 13.2008C1.52581 13.5525 2.00272 13.75 2.5 13.75H12.5C12.9973 13.75 13.4742 13.5525 13.8258 13.2008C14.1775 12.8492 14.375 12.3723 14.375 11.875V3.125C14.375 2.62772 14.1775 2.15081 13.8258 1.79917C13.4742 1.44754 12.9973 1.25 12.5 1.25H2.5ZM3.75 4.375H5V5.625H3.75V4.375ZM6.875 4.375C6.70924 4.375 6.55027 4.44085 6.43306 4.55806C6.31585 4.67527 6.25 4.83424 6.25 5C6.25 5.16576 6.31585 5.32473 6.43306 5.44194C6.55027 5.55915 6.70924 5.625 6.875 5.625H10.625C10.7908 5.625 10.9497 5.55915 11.0669 5.44194C11.1842 5.32473 11.25 5.16576 11.25 5C11.25 4.83424 11.1842 4.67527 11.0669 4.55806C10.9497 4.44085 10.7908 4.375 10.625 4.375H6.875ZM5 6.875H3.75V8.125H5V6.875ZM6.25 7.5C6.25 7.33424 6.31585 7.17527 6.43306 7.05806C6.55027 6.94085 6.70924 6.875 6.875 6.875H10.625C10.7908 6.875 10.9497 6.94085 11.0669 7.05806C11.1842 7.17527 11.25 7.33424 11.25 7.5C11.25 7.66576 11.1842 7.82473 11.0669 7.94194C10.9497 8.05915 10.7908 8.125 10.625 8.125H6.875C6.70924 8.125 6.55027 8.05915 6.43306 7.94194C6.31585 7.82473 6.25 7.66576 6.25 7.5ZM5 9.375H3.75V10.625H5V9.375ZM6.25 10C6.25 9.83424 6.31585 9.67527 6.43306 9.55806C6.55027 9.44085 6.70924 9.375 6.875 9.375H10.625C10.7908 9.375 10.9497 9.44085 11.0669 9.55806C11.1842 9.67527 11.25 9.83424 11.25 10C11.25 10.1658 11.1842 10.3247 11.0669 10.4419C10.9497 10.5592 10.7908 10.625 10.625 10.625H6.875C6.70924 10.625 6.55027 10.5592 6.43306 10.4419C6.31585 10.3247 6.25 10.1658 6.25 10Z" fill="#FFB147" />
                </svg>
                <span>
                    0
                </span>
                <div class="sef-menu-items">
                    <div class="sef-items-wrapper">

                    </div>

                    <div class="sef-items-footer">
                        <a class="secondary-btn" href="tel:01518758802">Call For Order</a>
                        <a href="#" class="primary-btn">Clear List</a>
                    </div>
                </div>
            </div>
            <div class="hamBurg">
                <svg class="ham" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.5 4H13.5M2.5 8H13.5M2.5 12H13.5" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg class="cross" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 20L4 4M20 4L4 20" stroke="black" stroke-width="2" stroke-linecap="round" />
                </svg>

            </div>
        </div>
    </header>
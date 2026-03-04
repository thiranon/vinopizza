<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Playfair Display', serif;
        }

        .max-screen-1080p {
            max-width: 1920px;
            margin: 0 auto;
        }

        .gold-text {
            color: #c5a059;
        }

        .bg-gold {
            background-color: #c5a059;
        }

        .nav-link:hover {
            color: #c5a059;
            transition: 0.3s;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #c5a059 !important;
        }

        .swiper-pagination-bullet-active {
            background: #c5a059 !important;
        }

        .swiper-slide img {
            filter: brightness(0.6);
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <nav class="sticky top-0 z-50 bg-black/90 border-b border-white/10 p-4">
        <div class="max-screen-1080p flex justify-between items-center px-6">
            <div class="text-2xl font-bold gold-text tracking-widest uppercase">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </div>

            <div class="hidden md:flex space-x-8 uppercase text-sm tracking-wide">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'items_wrap' => '%3$s',
                    'fallback_cb' => 'vinopizza_fallback_menu',
                ));
                ?>
            </div>

            <div class="md:hidden">
                <button class="text-white">Menu</button>
            </div>
        </div>
    </nav>

    <?php
    function vinopizza_fallback_menu()
    {
        ?>
        <a href="#" class="nav-link">Home</a>
        <a href="#wine" class="nav-link">Wine</a>
        <a href="#food" class="nav-link">Pizza & Food</a>
        <a href="#contact" class="nav-link">Contact</a>
        <?php
    }
    ?>

    <div class="max-screen-1080p">
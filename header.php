<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

    <div class="container header-container">

        <div class="site-logo">

            <?php
            if (has_custom_logo()) {

                the_custom_logo();

            } else {
                ?>

                <a href="<?php echo esc_url(home_url('/')); ?>"
                   class="site-logo-text">

                    MusicVibe

                </a>

                <?php
            }
            ?>

        </div>


        <nav class="main-navigation">

            <?php

            wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'container'      => false,
                'fallback_cb'    => 'wp_page_menu'
            ));

            ?>

        </nav>

    </div>

</header>
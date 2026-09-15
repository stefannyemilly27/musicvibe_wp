<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

```
<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>
```

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

```
<div class="container header-container">

    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
        MUSIC<span>VIBE</span>
    </a>

    <nav class="main-menu">

        <?php
        wp_nav_menu(array(
            'theme_location' => 'menu-principal',
            'container' => false,
            'fallback_cb' => false
        ));
        ?>

    </nav>

</div>
```

</header>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <a href="<?php echo get_home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-escritorio-santana-vanzella.png" alt="Logo Escritório Santana e Vanzella" class="img-fluid">
            </a>
            <button>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'container' => 'nav'
                ));
            ?>
            <a href="" class="btn btn__primary">WhatsApp</a>
        </div>
    </header>
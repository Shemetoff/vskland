<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a href="#" class="header__logo">
                    <?php
                    $image = get_field('logo', 'options');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </a>
                <div class="header__toggler js-toggler"><img src="<?php bloginfo('template_url'); ?>/assets/src/images/svg/menu.svg" alt=""></div>
                <div class="header__menu">
                    <nav>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'menu-main',
                            'container' => null
                        )); ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>

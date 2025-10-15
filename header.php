<?php
/**
 * The header for the Déluxara theme.
 *
 * Displays all of the <head> section and everything up till <main>.
 *
 * @package Deluxara
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="loading-screen" id="loadingScreen">
    <div class="loading-logo"><?php esc_html_e( 'DÉLUXARA', 'deluxara' ); ?></div>
    <div class="loading-bar">
        <div class="loading-progress"></div>
    </div>
    <div class="loading-text"><?php esc_html_e( 'CRAFTING EXCELLENCE', 'deluxara' ); ?></div>
</div>

<div class="cursor"></div>
<div class="cursor-glow"></div>

<nav>
    <div class="nav-container">
        <a href="<?php echo esc_url( home_url( '/#home' ) ); ?>" class="logo"><?php esc_html_e( 'DÉLUXARA', 'deluxara' ); ?></a>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-links',
                'fallback_cb'    => 'deluxara_default_menu',
                'depth'          => 1,
            )
        );
        ?>
    </div>
</nav>
<main id="primary" class="site-main">

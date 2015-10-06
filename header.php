<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

?>
    <!doctype html>
    <!--[if !IE]>
    <html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
    <!--[if IE 7 ]>
    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
    <!--[if IE 8 ]>
    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
    <!--[if IE 9 ]>
    <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
    <!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php wp_title( '&#124;', true, 'right' ); ?></title>

        <link href="<?php echo get_stylesheet_directory_uri() . '/core/images/favicon.ico'; ?>" rel="shortcut icon" type="image/x-icon"/>
        <link rel="profile" href="http://gmpg.org/xfn/11"/>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

<div id="branding-bar" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity">
    <div class="bar">
        <div class="wrapper">
            <p class="campus">
                <a href="http://www.iupui.edu" title="Indiana University–Purdue University Indianapolis" target="_blank">
                    <img src="//assets.iu.edu/brand/legacy/trident-tab.gif" height="73" width="64" alt="Indiana University–Purdue University Indianapolis">
                    <span class="show-on-desktop" itemprop="name">Indiana University–Purdue University Indianapolis</span>
                    <span class="show-on-tablet" itemprop="name">Indiana University–Purdue University Indianapolis</span>
                    <span class="show-on-mobile" itemprop="name">IUPUI / SOIC</span>
                </a>
                <a class="soic" href="http://soic.iupui.edu" title="School of Informatics and Computing" target="_blank">
                    <span class="show-on-desktop">School of Informatics and Computing</span>
                    <span class="show-on-tablet">School of Informatics and Computing</span>
                </a>
            </p>
        </div>
    </div>
</div>

<?php responsive_header(); // before header hook ?>
    <div id="header">

        <?php responsive_header_top(); // before header content hook ?>

        <?php if ( has_nav_menu( 'top-menu', 'responsive' ) ) {
            wp_nav_menu( array(
                'container'      => '',
                'fallback_cb'    => false,
                'menu_class'     => 'top-menu',
                'theme_location' => 'top-menu'
            ) );
        } ?>

        <?php responsive_in_header(); // header hook ?>

        <div id="container">

        <?php if ( get_header_image() != '' ) : ?>

            <div id="logo">
                <a href="<?php echo home_url( '/' ); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
            </div><!-- end of #logo -->

        <?php endif; // header image was removed ?>

        <?php if ( !get_header_image() ) : ?>

            <div id="logo">
                <span class="site-name"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
                <span class="site-description"><?php bloginfo( 'description' ); ?></span>
            </div><!-- end of #logo -->

        <?php endif; // header image was removed (again) ?>

        <?php get_sidebar( 'top' ); ?>
        <?php wp_nav_menu( array(
            'container'       => 'div',
            'container_class' => 'main-nav',
            'fallback_cb'     => 'responsive_fallback_menu',
            'theme_location'  => 'header-menu'
        ) ); ?>

        <?php if ( has_nav_menu( 'sub-header-menu', 'responsive' ) ) {
            wp_nav_menu( array(
                'container'      => '',
                'menu_class'     => 'sub-header-menu',
                'theme_location' => 'sub-header-menu'
            ) );
        } ?>

        <?php responsive_header_bottom(); // after header content hook ?>

        </div><!-- end of #container -->

    </div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_wrapper(); // before wrapper container hook ?>
    <div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>
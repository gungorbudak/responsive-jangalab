<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

$responsive_options = responsive_get_options();
//test for first install no database
$db = get_option( 'responsive_theme_options' );
//test if all options are empty so we can display default text if they are
$empty     = ( empty( $responsive_options['home_headline'] ) && empty( $responsive_options['home_subheadline'] ) && empty( $responsive_options['home_content_area'] ) ) ? false : true;
$emtpy_cta = ( empty( $responsive_options['cta_text'] ) ) ? false : true;

?>

<div id="featured" class="grid col-940">

    <?php $featured_content = ( !empty( $responsive_options['featured_content'] ) ) ? $responsive_options['featured_content'] : '<img class="aligncenter" src="' . get_template_directory_uri() . '/core/images/featured-image.png" width="440" height="300" alt="" />'; ?>

    <div id="featured-content" style="background-image:url(<?php echo $featured_content; ?>);">

        <?php if ( isset( $responsive_options['home_headline'] ) && $db && $empty ): ?>
            <h1 class="featured-title">
                <?php echo $responsive_options['home_headline']; ?>
            </h1>
        <?php endif; ?>

        <?php if ( isset( $responsive_options['home_subheadline'] ) && $db && $empty ): ?>
            <h2 class="featured-subtitle">
                <?php echo $responsive_options['home_subheadline']; ?>
            </h2>
        <?php endif; ?>

        <?php if ( isset( $responsive_options['home_content_area'] ) && $db && $empty ): ?>
            <?php echo do_shortcode( wpautop( $responsive_options['home_content_area'] ) ); ?>
        <?php endif; ?>

        <?php if ( $responsive_options['cta_button'] == 0 ): ?>

            <div class="call-to-action">

                <a href="<?php echo $responsive_options['cta_url']; ?>" class="blue button">
                    <?php
                    if ( isset( $responsive_options['cta_text'] ) && $db && $emtpy_cta )
                        echo $responsive_options['cta_text'];
                    else
                        _e( 'Call to Action', 'responsive' );
                    ?>
                </a>

            </div><!-- end of .call-to-action -->

        <?php endif; ?>

    </div><!-- end of #featured-content -->

</div><!-- end of #featured -->
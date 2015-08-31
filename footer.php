<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<footer id="footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity">
    <div class="wrapper">
        <p class="tagline">Fulfilling <span>the</span> Promise</p>
        <p class="internal"><a href="http://soic.iupui.edu/privacy" id="privacy-policy-link" target="_blank">Privacy Notice</a></p>
        <p class="copyright">
            <a href="http://www.iu.edu/" target="_blank" class="block-iu"><img src="//assets.iu.edu/brand/1.x/block-iu.png" height="26" width="22" alt="Block IU"></a>
            <span class="line-break">
                <a href="http://www.iu.edu/copyright/index.shtml" target="_blank">Copyright</a> © 2015</span>
            <span class="line-break">The Trustees of <a href="http://www.iu.edu/" target="_blank" itemprop="url"><span itemprop="name">Indiana University</span></a>,</span>
            <span class="line-break"><a href="http://www.iu.edu/copyright/complaints.shtml" target="_blank">Copyright Complaints</a></span>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
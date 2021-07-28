<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greyotters
 */

?>

</div><!-- #page -->

<footer class="siteFooter">
    <div class="siteFooter__wrap container">
        <div class="siteFooter__logo">
            <a href="#top">
			    <img src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>"/>
			</a>
        </div>
        <div class="siteFooter__social">
            <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/images/icons/linkedin_white_ico.svg'; ?>"/>
            </a>
            <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/images/icons/facebook_white_ico.svg'; ?>"/>
            </a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<?php if(!current_user_can( 'administrator' )): ?>
    <div class="customMouse customMouse--one"></div>
    <div class="customMouse customMouse--two"></div>
<?php else: ?>
    <style>
        body{
            cursor: auto !important;
        }
    </style>
<?php endif; ?>
</body>
</html>

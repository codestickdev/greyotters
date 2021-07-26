<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greyotters
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'greyotters' ); ?></a>

	<header id="masthead" class="siteHeader">
		<div class="siteHeader__wrap container">
			<div class="siteHeader__logo">
				<a href="#top">
					<img src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>"/>
				</a>
			</div>
			<div class="siteHeader__menu">
				<nav class="menu">
					<a href="about" class="menu__item"><span><?php _e('about us', 'greyotters'); ?></span></a>
					<a href="services" class="menu__item"><span><?php _e('our services', 'greyotters'); ?></span></a>
					<a href="clients" class="menu__item"><span><?php _e('our clients', 'greyotters'); ?></span></a>
					<a href="contact" class="menu__item"><span><?php _e('contact us', 'greyotters'); ?></span></a>
				</nav>
			</div>
			<div class="siteHeader__actions">
				<div class="langSwitcher none">
					<?php do_action('wpml_add_language_selector'); ?>
				</div>
				<div class="social">
					<a href="" target="_blank" class="social__item">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/linkedin_ico.svg'; ?>"/>
					</a>
					<a href="" target="_blank" class="social__item">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/facebook_ico.svg'; ?>"/>
					</a>
				</div>
			</div>
			<div class="siteHeader__mobile">
				<div class="menuToggle">
					<span></span>
					<span></span>
					<span></span>
					<div class="close">
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
			<div class="siteHeader__menuMobile">
				<div class="wrap">
					<a href="about" class="mobileItem"><span><?php _e('about us', 'greyotters'); ?></span></a>
					<a href="services" class="mobileItem"><span><?php _e('our services', 'greyotters'); ?></span></a>
					<a href="clients" class="mobileItem"><span><?php _e('our clients', 'greyotters'); ?></span></a>
					<a href="contact" class="mobileItem"><span><?php _e('contact us', 'greyotters'); ?></span></a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

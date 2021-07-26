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
<?php  
$args = array(
    'posts_per_page'	=> -1,
    'post_type'		    => 'clients',
);
$clients = new WP_Query($args);
if( $clients->have_posts() ): ?>
    <div class="clientWrap">
        <div class="clientWrap__wrap container-normal">
            <div class="clientWrap__nav">
                <p class="navbtn" data-href="back"><span>← <?php _e('back', 'greyotters'); ?></span></p>
                <p class="navbtn" data-href="contact"><span><?php _e('contact', 'greyotters'); ?> →</span></p>
            </div>
            <?php while( $clients->have_posts() ) : $clients->the_post();
                $post_slug = get_post_field( 'post_name', get_post() );
            ?>
            <div class="clientPage" data-client="<?php echo $post_slug; ?>">
                <section class="clientPage__heading">
                    <div class="content">
                        <h3><?php the_title(); ?></h3>
                        <h2>case study</h2>
                        <p><?php the_field('clientPage_heading_content'); ?></p>
                    </div>
                    <div class="image">
                        <div class="image__wrap"></div>
                    </div>
                </section>
                <section class="clientPage__sections">
                    <section class="clientPage__before">
                        <div class="content">
                            <h2><?php the_field('clientPage_before_title'); ?></h2>
                            <p><?php the_field('clientPage_before_content'); ?></p>
                        </div>
                        <div class="image">
                            <div class="image__wrap"></div>
                        </div>
                    </section>
                    <section class="clientPage__desc">
                        <div class="content">
                            <h2><?php the_field('clientPage_desc_title'); ?></h2>
                            <p><?php the_field('clientPage_desc_content'); ?></p>
                        </div>
                    </section>
                    <section class="clientPage__after">
                        <div class="image">
                            <div class="image__wrap"></div>
                        </div>
                        <div class="content">
                            <h2><?php the_field('clientPage_after_title'); ?></h2>
                            <p><?php the_field('clientPage_after_content'); ?></p>
                        </div>
                    </section>
                </section>
            </div>
            <?php endwhile; ?>
            <div class="clientWrap__nav clientWrap__nav--bottom">
                <p class="navbtn" data-href="back"><span>← <?php _e('back', 'greyotters'); ?></span></p>
                <p class="navbtn" data-href="contact"><span><?php _e('contact', 'greyotters'); ?> →</span></p>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_query();	?>
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
<div class="customMouse customMouse--one"></div>
<div class="customMouse customMouse--two"></div>
</body>
</html>

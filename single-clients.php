<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package greyotters
 */

get_header();
?>

	<main class="greyotters greyotters--client">
		<div class="clientWrap">
			<div class="clientWrap__wrap container-normal">
				<div class="clientWrap__nav">
					<a class="navbtn" href="<?php echo home_url(); ?>"><span>← <?php _e('back', 'greyotters'); ?></span></a>
					<a class="navbtn" href="<?php echo home_url('?section=contact'); ?>"><span><?php _e('contact', 'greyotters'); ?> →</span></a>
				</div>
				<div class="clientPage">
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
				<div class="clientWrap__nav clientWrap__nav--bottom">
					<a class="navbtn" href="<?php echo home_url(); ?>"><span>← <?php _e('back', 'greyotters'); ?></span></a>
					<a class="navbtn" href="<?php echo home_url('?section=contact'); ?>"><span><?php _e('contact', 'greyotters'); ?> →</span></a>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();

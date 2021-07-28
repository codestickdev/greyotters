<?php
/*
 *  Template name: Main page
 */
get_header(); ?>

<main class="greyotters greyotters--main container">
    <div class="scrollNav scrollNav--hidden">
        <div class="scrollNav__wrap">
            <div class="scrollNav__dots">
                <div class="scrollNav__dot" data-name="contact us"></div>
                <div class="scrollNav__dot" data-name="our clients"></div>
                <div class="scrollNav__dot" data-name="our services"></div>
                <div class="scrollNav__dot" data-name="about us"></div>
            </div>
            <div class="scrollNav__name"><?php _e('about us', 'greyotters'); ?></div>
        </div>
    </div>
    <div id="homeSections">
        <section class="mainHeading gosection" data-name="heading">
            <div class="mainHeading__wrap">
                <h1><?php the_field('mainHeading_title'); ?></h1>
            </div>
        </section>
        <section id="about" class="mainAbout gosection" data-name="about us">
            <div class="mainAbout__wrap">
                <div class="mainAbout__intro">
                    <p><?php the_field('mainAbout_intro') ?></p>
                </div>
                <div class="mainAbout__main">
                    <p><?php the_field('mainAbout_main') ?></p>
                </div>
                <a href="contact" class="mainAbout__btn menu__item"><span><?php _e('contact us', 'greyotters'); ?> →</span></a>
            </div>
        </section>
        <section id="services" class="mainServices gosection" data-name="our services">
            <div class="mainServices__wrap">
                <div class="mainServices__heading">
                    <h2><?php the_field('mainServices_heading'); ?></h2>
                </div>
                <div class="mainServices__list">
                    <?php while(have_rows('mainServices_list')): the_row();
                        $title = get_sub_field('mainServices_list_title');
                        $icon = get_sub_field('mainServices_list_icon');
                        $desc = get_sub_field('mainServices_list_desc');
                    ?>
                    <div class="mainServices__item">
                        <h3><?php echo $title; ?></h3>
                        <div class="icon">
                            <img src="<?php echo $icon; ?>"/>
                        </div>
                        <p><?php echo $desc; ?></p>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>

        <?php
        $clientList = get_field('mainClients_list');
        if( $clientList ): ?>
        <section id="clients" class="mainClients gosection" data-name="our clients">
            <div class="mainClients__wrap">
                <div class="mainClients__heading">
                    <h2><?php the_field('mainClients_heading'); ?></h2>
                    <p class="info"><span><?php _e('click on the logo to see case study', 'greyotters'); ?></span></p>
                </div>
                <div class="mainClients__list">
                    <?php foreach( $clientList as $post ): 
                    setup_postdata($post); ?>
                        <a href="<?php the_permalink(); ?>" class="mainClients__item">
                            <img src="<?php the_field('client_logo'); ?>"/>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php wp_reset_postdata(); ?>
        </section>
        <?php endif; ?>

        <section id="contact" class="mainContact gosection" data-name="contact us">
            <div class="mainContact__wrap">
                <div class="mainContact__heading">
                    <h2><?php _e('Contact us', 'greyotters'); ?>:</h2>
                </div>
                <div class="mainContact__form">
                    <div class="info">
                        <p><?php _e('We will be more then happy to talk with you about how we can help. Please contact us by e-mail or by using the contact form.', 'greyotters'); ?></p>
                        <a href="mailto:hello@greyotters.com" class="info__mail"><span>hello@greyotters.com</span></a>
                        <div class="info__social">
                            <a href="#" target="_blank">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/linkedin_white_ico.svg'; ?>"/>
                            </a>
                            <a href="#" target="_blank">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/facebook_white_ico.svg'; ?>"/>
                            </a>
                        </div>
                        <div class="info__logo">
                            <img src="<?php echo get_template_directory_uri() . '/images/logo.svg' ?>"/>
                        </div>
                    </div>
                    <div class="form">
                        <form method="POST" name="contactform">
                            <div class="form__wrap form__wrap--half">
                                <input type="text" name="contactName" placeholder="<?php _e('name', 'greyotters'); ?>" required/>
                                <input type="email" name="contactMail" placeholder="<?php _e('email', 'greyotters'); ?>" required/>
                            </div>
                            <div class="form__wrap">
                                <input type="text" name="contactSubject" placeholder="<?php _e('subject', 'greyotters'); ?>" required/>
                            </div>
                            <div class="form__wrap form__wrap--before" data-placeholder="<?php _e('message', 'greyotters'); ?>">
                                <textarea name="contactMessage" placeholder="<?php _e('message', 'greyotters'); ?>" required></textarea>
                            </div>
                            <button type="submit" class="submit"><span><?php _e('send message', 'greyotters'); ?></span></button>
                        </form>
                        <div class="form__notice"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
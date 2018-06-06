<?php

global $post;

/*
 * Template name: Contacts
 */
get_header() ?>

    <!-- BEGIN CONTACT -->
    <div class="contact">
        <div class="contact-container">
            <div class="contact-content contact-content__text">
                <h1 class="section-header__text-big section-header__text-big--size-2"><?php the_title() ?></h1>
                <div class="content">
                    <?php echo $post->post_content ?>
                </div>
            </div>
            <div class="contact-form">
                <div class="contact-form__data">
                    <h3 class="section-header__text-big--smaller contact-form-title">Contact form</h3>
                    <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact Form"]' ); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTACT -->

<?php get_footer();
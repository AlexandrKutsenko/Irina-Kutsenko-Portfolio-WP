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
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control contact-form__form-control" name="name" value size="40" aria-required="true" aria-invalid="false"
                                   placeholder="Name...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control contact-form__form-control" name="email" value size="40" aria-required="true" aria-invalid="false"
                                   placeholder="E-mail...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control contact-form__form-control" name="phone" value size="40" aria-required="true" aria-invalid="false"
                                   placeholder="Phone...">
                        </div>
                        <div class="form-group">
                    <textarea name="textarea" class="form-control contact-form__form-control" cols="40" rows="10" aria-required="true"
                              aria-invalid="false" placeholder="Message..."></textarea>
                        </div>
                    </form>
                    <div class="text-center">
                        <button type="button" class="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTACT -->

<?php get_footer();
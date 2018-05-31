<!-- BEGIN SECTION ABOUT ME -->
<section class="about">
    <div class="about__column-left">
        <img class="about__img" src="<?php echo get_template_directory_uri() ?>/img/aboutme.jpg" alt="About me">
    </div>
    <div class="about__column-right">
        <h2 class="section-header">
            <span class="section-header__text-small">Few words</span>
            <span class="section-header__text-big section-header__text-big--smaller"><?php
                $idObj = get_category_by_slug('s_aboutme');
                $id = $idObj->term_id;
                echo get_cat_name($id);
                ?></span>
        </h2>
        <p class="text-italic text-italic--dark text-center"><?php echo category_description(4); ?> </p>
    </div>

    <?php $work_principles = get_work_principles(); ?>
    <?php if( ! empty($work_principles) ) { ?>
    <div class="about__column-center">
        <h3 class="section-header">My work principles</h3>
        <div class="principles">
            <?php foreach ($work_principles as $work_principle) {?>
            <div class="principles__item">
                <div class="principles__item-number">01</div>
                <div class="principles__item-text">
                    <p class="principles__item-title"><?php echo $work_principle->post_title  ?></p>
                    <p class="principles__item-description"><?php echo $work_principle->post_content  ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</section>
<!-- END SECTION ABOUT ME -->
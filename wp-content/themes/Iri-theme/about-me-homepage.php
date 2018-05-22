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
    <div class="about__column-center">
        <h3 class="section-header">My work principles</h3>
        <div class="principles">
            <div class="principles__item">
                <div class="principles__item-number">01</div>
                <div class="principles__item-text">
                    <p class="principles__item-title">TAKE A WALK</p>
                    <p class="principles__item-description">Nullam sit amet mattis sem, ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque dolore ratione vitae. Deserunt impedit obcaecati quidem saepe.hendrerit sapien. Mauris suscipit feugiat ante quis pellentesque.</p>
                </div>
            </div>
            <div class="principles__item">
                <div class="principles__item-number">02</div>
                <div class="principles__item-text">
                    <p class="principles__item-title">TAKE A WALK</p>
                    <p class="principles__item-description">Nullam sit amet mattis sem, ut hendrerit sapien. Mauris suscipit feugiat ante quis Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae eveniet facere ipsum necessitatibus, quod reprehenderit sunt? pellentesque.</p>
                </div>
            </div>
            <div class="principles__item">
                <div class="principles__item-number">03</div>
                <div class="principles__item-text">
                    <p class="principles__item-title">TAKE A WALK</p>
                    <p class="principles__item-description">Nullam sit amet mattis sem, ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consectetur esse ex laboriosam laborum libero natus optio veniam.hendrerit sapien. Mauris suscipit feugiat ante quis pellentesque.</p>
                </div>
            </div>
            <div class="principles__item">
                <div class="principles__item-number">04</div>
                <div class="principles__item-text">
                    <p class="principles__item-title">TAKE A WALK</p>
                    <p class="principles__item-description">Nullam sit amet Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consectetur hic quo repellendus soluta. Cupiditate dolor nostrum perferendis vitae voluptatum.mattis sem, ut hendrerit sapien. Mauris suscipit feugiat ante quis pellentesque.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT ME -->
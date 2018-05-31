<!-- BEGIN SECTION TESTIMOTIONALS -->
<section class="testimotionals">
    <div class="container">
        <h2 class="section-header">
            <span class="section-header__text-small">my clients</span>
            <span class="section-header__text-big">testimotionals</span>
        </h2>
    </div>
    <?php $testimotionals = get_testimotionals(); ?>
    <?php if( ! empty($testimotionals) ) { ?>
    <div class="testimotionals-slider owl-carousel owl-theme owl-loaded">
        <?php foreach ($testimotionals as $testimotional) {?>
        <div class="testimotionals-item">
            <div class="testimotionals-item__avatar">
                <?php echo get_the_post_thumbnail( $testimotional->ID); ?>
            </div>
            <blockquote class="testimotionals-item__blockquote">
                <?php echo $testimotional->post_content  ?>
                <span class="testimotionals-item__blockquote-post"><?php echo $testimotional->post_title  ?></span>
            </blockquote>
        </div>
        <?php } ?>
    <?php } ?>
    </div>
</section>
<!-- END SECTION TESTIMOTIONALS -->
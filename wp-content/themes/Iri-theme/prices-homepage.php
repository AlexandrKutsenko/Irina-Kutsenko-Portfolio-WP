<?php global $post; ?>
<!-- END SECTION PRICES -->
<section class="prices">
    <div class="container">
        <h2 class="section-header">
            <span class="section-header__text-small">choose one of my</span>
            <span class="section-header__text-big">hot prices</span>
        </h2>
    </div>
    <?php $prices = get_prices(); ?>
    <?php if( ! empty($prices) ) { ?>
    <div class="price-list">
        <?php foreach ($prices as $price) {?>
        <div class="price-list-item">
            <div class="price-list-item__header">
                <img src="<?php echo get_template_directory_uri() ?>/img/price1.jpg" alt="Price image 1" class="price-list-item__image"/>
                <div class="price-list-item__header-content">
                    <h3 class="price-list-item__name"><?php echo $price->post_title  ?></h3>
                    <h3 class="price-list-item__price"><?php echo $price->post_excerpt  ?> </h3>
                </div>
            </div>
            <div class="price-list-item__content">
                <?php echo $price->post_content  ?>
                <div class="price-list-item__button-container">
                    <a href="<?php echo get_permalink(64) ?>" class="button button--small">Purchase it</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</section>
<!-- END SECTION PRICES -->
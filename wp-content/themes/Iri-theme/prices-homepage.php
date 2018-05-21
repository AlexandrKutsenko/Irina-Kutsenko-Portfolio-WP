<!-- END SECTION PRICES -->
<section class="prices">
    <div class="container">
        <h2 class="section-header">
            <span class="section-header__text-small">choose one of my</span>
            <span class="section-header__text-big">hot prices</span>
        </h2>
    </div>
    <div class="price-list">
        <div class="price-list-item">
            <div class="price-list-item__header">
                <img src="<?php echo get_template_directory_uri() ?>/img/price1.jpg" alt="Price image 1" class="price-list-item__image"/>
                <div class="price-list-item__header-content">
                    <h3 class="price-list-item__name">Outdoor session</h3>
                    <h3 class="price-list-item__price">49 </h3>
                    <p class="price-list-item__comment">Beautiful</p>
                </div>
            </div>
            <div class="price-list-item__content">
                <ul class="price-list-item__characteristics-list">
                    <li class="price-list-item__characteristic">3 hours of location</li>
                    <li class="price-list-item__characteristic">1 outfit change</li>
                    <li class="price-list-item__characteristic">50 changes</li>
                    <li class="price-list-item__characteristic">15 edited images</li>
                    <li class="price-list-item__characteristic">Lo-res images for Facebook</li>
                </ul>
                <div class="price-list-item__button-container">
                    <button class="button button--small" type="button">Purchase it</button>
                </div>
            </div>
        </div>
        <div class="price-list-item">
            <div class="price-list-item__header">
                <img src="<?php echo get_template_directory_uri() ?>/img/price1.jpg" alt="Price image 1" class="price-list-item__image"/>
                <div class="price-list-item__header-content">
                    <h3 class="price-list-item__name">Outdoor session</h3>
                    <h3 class="price-list-item__price">49 </h3>
                    <p class="price-list-item__comment">Beautiful</p>
                </div>
            </div>
            <div class="price-list-item__content">
                <ul class="price-list-item__characteristics-list">
                    <li class="price-list-item__characteristic">3 hours of location</li>
                    <li class="price-list-item__characteristic">1 outfit change</li>
                    <li class="price-list-item__characteristic">50 changes</li>
                    <li class="price-list-item__characteristic">15 edited images</li>
                    <li class="price-list-item__characteristic">Lo-res images for Facebook</li>
                </ul>
                <div class="price-list-item__button-container">
                    <button class="button button--small" type="button">Purchase it</button>
                </div>
            </div>
        </div>
        <div class="price-list-item">
            <div class="price-list-item__header">
                <img src="<?php echo get_template_directory_uri() ?>/img/price1.jpg" alt="Price image 1" class="price-list-item__image"/>
                <div class="price-list-item__header-content">
                    <h3 class="price-list-item__name">Outdoor session</h3>
                    <h3 class="price-list-item__price">49 </h3>
                    <p class="price-list-item__comment">Beautiful</p>
                </div>
            </div>
            <div class="price-list-item__content">
                <ul class="price-list-item__characteristics-list">
                    <li class="price-list-item__characteristic">3 hours of location</li>
                    <li class="price-list-item__characteristic">1 outfit change</li>
                    <li class="price-list-item__characteristic">50 changes</li>
                    <li class="price-list-item__characteristic">15 edited images</li>
                    <li class="price-list-item__characteristic">Lo-res images for Facebook</li>
                </ul>
                <div class="price-list-item__button-container">
                    <button class="button button--small" type="button">Purchase it</button>
                </div>
            </div>
        </div>
        <div class="price-list-item">
            <div class="price-list-item__header">
                <img src="<?php echo get_template_directory_uri() ?>/img/price1.jpg" alt="Price image 1" class="price-list-item__image"/>
                <div class="price-list-item__header-content">
                    <h3 class="price-list-item__name">Outdoor session</h3>
                    <h3 class="price-list-item__price">49 </h3>
                    <p class="price-list-item__comment">Beautiful</p>
                </div>
            </div>
            <div class="price-list-item__content">
                <ul class="price-list-item__characteristics-list">
                    <?php $value = get_field('field_name'); ?>
                    <?php if($value) { ?>
                        <li class="price-list-item__characteristic"><?php echo $value ?></li>
                    <?php } ?>
                    <li class="price-list-item__characteristic">1 outfit change</li>
                    <li class="price-list-item__characteristic">50 changes</li>
                    <li class="price-list-item__characteristic">15 edited images</li>
                    <li class="price-list-item__characteristic">Lo-res images for Facebook</li>
                </ul>
                <div class="price-list-item__button-container">
                    <button class="button button--small" type="button">Purchase it</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PRICES -->
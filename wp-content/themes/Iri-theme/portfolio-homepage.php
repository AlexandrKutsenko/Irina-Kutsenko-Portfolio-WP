<?php $portfolio_images = get_portfolio_images(); ?>
<?php if( ! empty($portfolio_images) ) { ?>
    <!-- BEGIN SECTION PORTFOLIO -->
    <section class="portfolio">
        <div class="container">
            <h2 class="section-header">
                <span class="section-header__text-small">Enjoy my</span>
                <span class="section-header__text-big">Portfolio</span>
            </h2>
        </div>
        <div class="portfolio-images">
            <?php foreach ($portfolio_images as $portfolio_image) {?>
                <a class="portfolio-images--link" href="<?php echo get_field('image', $portfolio_image->ID) ?>">
                    <figure>
                        <img class="portfolio-images--img" src="<?php echo get_field('image', $portfolio_image->ID) ?>" alt="<?php echo $portfolio_image->post_title  ?>">
                    </figure>
                </a>
            <?php } ?>
        </div>
    </section>
    <!-- END SECTION PORTFOLIO -->
<?php } ?>

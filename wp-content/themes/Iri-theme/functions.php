<?php
/*
 * Hide Admin bar of wordpress
 */
function hide_admin_bar() {
    show_admin_bar(false);
}
add_action('init', 'hide_admin_bar');

/*
 * Register theme styles
 */
function register_styles() {
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/assets/libs/owlcarousel/dist/assets/owl.carousel.min.css');
    wp_enqueue_style('owl-carousel-theme-css', get_template_directory_uri() . '/assets/libs/owlcarousel/dist/assets/owl.theme.default.min.css');
    wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/libs/Magnific-Popup-master/dist/magnific-popup.css');
    wp_enqueue_style('main-theme-style-css', get_template_directory_uri() . '/assets/css/style.css');

    if(get_the_ID() === 62) {
        wp_enqueue_style('main-photoswipe-style-css', get_template_directory_uri() . '/assets/libs/PhotoSwipe-master/dist/photoswipe.css');
        wp_enqueue_style('main-photoswipe-defoultskin-style-css', get_template_directory_uri() . '/assets/libs/PhotoSwipe-master/dist/default-skin/default-skin.css');
    }
}
add_filter('wp_enqueue_scripts', 'register_styles');

/*
 * Register theme scripts
 */
function register_scripts() {
    wp_enqueue_script('masonry-scripts', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel-scripts', get_template_directory_uri() . '/assets/libs/owlcarousel/dist/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup-scripts', get_template_directory_uri() . '/assets/libs/Magnific-Popup-master/dist/jquery.magnific-popup.js', array('jquery'), null, true);
    wp_enqueue_script('main-theme-js-scripts', get_template_directory_uri() . '/assets/js/home.js', array('jquery'), null, true);
    if(get_the_ID() === 62) {
        wp_enqueue_script('main-photoswipe-style-js', get_template_directory_uri() . '/assets/libs/PhotoSwipe-master/dist/photoswipe.min.js');
        wp_enqueue_script('main-photoswipe-defoultskin-style-js', get_template_directory_uri() . '/assets/libs/PhotoSwipe-master/dist/photoswipe-ui-default.min.js');
    }
}
add_filter('wp_enqueue_scripts', 'register_scripts');

/*
 * Register portfolio fields post type
 */
function add_portfolio_img_post_type() {
    register_post_type('add_portfolio_img', array(
        'public' => true,
        'labels' => array(
            'name' => __('Картинки портфолио')
        )
    ));
}
add_action('init', 'add_portfolio_img_post_type');

/*
 * Add photo to portfolio
 */
function get_portfolio_images()
{
    return get_posts([
        'post_type' => 'add_portfolio_img',
        'posts_per_page' => -1,
        'order' => 'ASC',
    ]);
}


/*
 * Register MY WORK PRINCIPLES fields post type
 */
function add_work_principles_post_type() {
    register_post_type('add_work_principles', array(
        'public' => true,
        'labels' => array(
            'name' => __('MY WORK PRINCIPLES')
        ),
        'supports' => array(
            'title',
            'editor',
            'excerpt'
            )
    ));
}
add_action('init', 'add_work_principles_post_type');

/*
 * Add MY WORK PRINCIPLES
 */
function get_work_principles()
{
    return get_posts([
        'post_type' => 'add_work_principles',
        'posts_per_page' => -1,
    ]);
}


/*
 * Register testimotionals fields post type
 */

function add_testimotionals_post_type() {
    add_theme_support( 'post-thumbnails' );
    register_post_type('add_testimotionals', array(
        'public' => true,
        'labels' => array(
            'name' => __('testimotionals')
        ),
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    ));
}
add_action('init', 'add_testimotionals_post_type');

/*
 * Add testimotionals
 */
function get_testimotionals()
{
    return get_posts([
        'post_type' => 'add_testimotionals',
        'posts_per_page' => -1,
    ]);
}

// TODO: main menu
// TODO: site options (phones, social links
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

// TODO: main menu
// TODO: site options (phones, social links
// TODO: localization

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
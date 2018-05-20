<?php
add_action( 'wp_enqueue_scripts', 'mazino_theme_css',999);
function mazino_theme_css() {
    wp_enqueue_style( 'mazino-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('bootstrap', QUALITY_TEMPLATE_DIR_URI . '/css/bootstrap.css');
	wp_enqueue_style('theme-menu', QUALITY_TEMPLATE_DIR_URI . '/css/theme-menu.css');
    wp_enqueue_style( 'mazino-child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
	wp_enqueue_style( 'default-style-css', get_stylesheet_directory_uri()."/css/default.css" );
	wp_dequeue_style( 'default-css', get_template_directory_uri() .'/css/default.css');
	wp_enqueue_script('mazino-mp-masonry-js', get_stylesheet_directory_uri() . '/js/masonry/mp.mansory.js');
}

//Load text domain for translation-ready
load_theme_textdomain( 'mazino', get_stylesheet_directory() . '/languages' );


// Read more tag to formatting in blog page 
  	function mazino_new_content_more($more)
	{  global $post;
		return '<div class="blog-btn-col"><a href="' . get_permalink() . "#more-{$post->ID}\" class=\"qua-read-more\">Read More</a></div>";
	}   
	add_filter( 'the_content_more_link', 'mazino_new_content_more' );
	
	
function mazino_child_theme_setup() {
    remove_filter( 'the_content_more_link', 'quality_new_content_more' );
    add_filter( 'the_content_more_link', 'mazino_new_content_more' );
}

add_action( 'after_setup_theme', 'mazino_child_theme_setup' );

// footer custom script
function mazino_footer_custom_script()
{
?>
<script>
jQuery(document).ready(function ( jQuery ) {
	jQuery("#blog-masonry").mpmansory(
		{
			childrenClass: 'item', // default is a div
			columnClasses: 'padding', //add classes to items
			breakpoints:{
				lg: 4, //Change masonry column here like 2, 3, 4 column
				md: 6, 
				sm: 6,
				xs: 12
			},
			distributeBy: { order: false, height: false, attr: 'data-order', attrOrder: 'asc' }, //default distribute by order, options => order: true/false, height: true/false, attr => 'data-order', attrOrder=> 'asc'/'desc'
			onload: function (items) {
				//make somthing with items
			} 
		}
	);
});
</script>
<?php
}
add_action('wp_footer','mazino_footer_custom_script');
?>
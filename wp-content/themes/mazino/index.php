<?php get_header(); ?>
<div class="page-seperator"></div>
<div class="container">
  <div class="row">
    <div class="qua_page_heading">
      <h1><?php the_title(); ?></h1>
      <div class="qua-separator"></div>
    </div>
  </div>
</div>
<!-- /Page Title Section ---->

<div class="container qua_blog_wrapper">
	<div class="row" id="blog-masonry">
			<?php while(have_posts()):the_post();
				global $more;
				$more = 0; ?>	
			<div class="qua_blog_section qua-blog-masonry item">					
				<div class="qua_blog_post_img">
					<?php $defalt_arg =array('class' => "img-responsive");  
					if(has_post_thumbnail()): ?>
					<a  href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('', $defalt_arg);  endif;  ?>
						<div class="qua_post_date qua-date-absolute"><span class="date">
						<?php echo get_the_date('j'); ?></span><h6><?php echo the_time('M'); ?></h6>
						</div>
					</a>
				</div>
				<div class="qua_post_title_wrapper">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="clear"></div>
				<div class="qua_blog_post_content">
					<?php the_content(__('Read more','mazino')); ?>
					<?php if(get_the_tag_list() != '') { ?>
					<div class="qua_post_detail">				
						<div class="qua_tags">
							<?php the_tags(' ',' '); ?>
						</div>
					</div>
					<?php } ?>
				</div>	
			</div>
			<?php endwhile; ?>
		<!--/Blog Content-->
	</div>
	<div class="row margin-60">
		<div class="col-md-12">
			<div class="qua_blog_pagination">
				<div class="qua_blog_pagi">					
				  <?php if ( get_previous_posts_link() ): ?>
				  <?php previous_posts_link(); ?>
				  <?php endif; ?>
				  <?php if ( get_next_posts_link() ): ?>
				  <?php next_posts_link(); ?>
				  <?php endif; ?>
				</div>
				<?php if(wp_link_pages()) { wp_link_pages();  } ?>
			  </div>
		</div>	  
	</div>	
</div>
<?php get_footer(); ?>
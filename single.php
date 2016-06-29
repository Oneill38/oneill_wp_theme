<?php get_header(); ?>

<section>
	<div class="container">
		<div class="row">
		  <div class="post-page">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<p><em><?php the_time('l, F jS, Y'); ?></em></p>

			  	<?php the_content(); ?>
			  	
			  	<h4>Tags:</h4>
			  	<ul class="page-list-tags">
	              <?php 
	                foreach(get_the_tags($post->ID) as $tag)
	                {
	                  echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
	                }                
	              ?>
	            </ul>
			  	<hr>

			<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>

		  </div>

		</div>
	</div>
</section>

<?php get_footer(); ?>
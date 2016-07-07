/*
Template Name: My Custom Page
*/
<?php get_header(); ?>

<section>
  <div class="container">
    <div class="row">
      <h3>Posts:</h3>
      <div>
       <?php $the_query = new WP_Query( 'posts_per_page=-1&post_type=post' ); ?>
       <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
           <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
           <p><em><?php the_time('l, F jS, Y'); ?></em></p>
             <div>
               <?php the_excerpt(); ?>
             </div>
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
      <?php endwhile; endif; ?>

      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
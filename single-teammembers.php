<h1>Teammembers 1</h1>

<?php 
$args = array( 'post_type' => 'teammembers', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<h2><?php the_title(); ?></h2>
<div class="entry-content">
<?php the_content(); the_category(' '); $current_ID = the_ID(); the_taxonomies($current_ID, '',' ', '', '');?> 
</div>
<?php 
wp_reset_postdata(); 
endwhile;
else:  
?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
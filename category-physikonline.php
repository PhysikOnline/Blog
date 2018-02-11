<?php 
get_header();
set_query_var( 'view-category', 'po' );
set_query_var( 'view-page', 'blog' );
get_template_part('partials/sidebar');
get_template_part('partials/navheader');
?>

 <!--MAIN-->       
<main>
    <div class="row">

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
?>
    
        <div class="col s12 m6">
            <a href="<?php bloginfo('wpurl'); ?>/?p=<?php the_ID(); ?>">
            <div class="card">
                <div class="card-image">
                    <img src="<?php the_post_thumbnail_url( array(520, 390)); ?>">
                </div>
                <div class="card-content">
                <span class="card-title with-image"><?php the_title(); ?>(<?php the_ID(); ?>)</span>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="card-action">
                <span><i class="material-icons left">access_time</i><?php the_time(); ?></span>
                </div>
            </div>
            </a>
        </div>

<?php
    }
    else {
?>
       
        <div class="col s12 m6">
            <a href="<?php bloginfo('wpurl'); ?>/?p=<?php the_ID(); ?>">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><?php the_title(); ?></span>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="card-action">
                    <span><i class="material-icons left">access_time</i><?php the_time(); ?></span>
                </div>
            </div>
            </a>
        </div>
    
<?php
}
endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>
        </div>
    </div>
</main>
      
<!-- FOOTER --> 
<?php get_footer(); ?>

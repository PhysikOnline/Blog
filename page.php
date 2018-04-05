<?php 
get_header();
set_query_var( 'view-category', 'po' );
set_query_var( 'view-page', 'blog' );
get_template_part('partials/sidebar');
get_template_part('partials/navheader');

?>

<main>
    <div class="row">

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
?>
<!--     
    <div class="col s12 offset-m2 m8">
        <div class="card">
            <div class="card-image">
                <img src="<?php the_post_thumbnail_url( array(520, 390)); ?>">
            </div>
            <div class="card-content">
            <span class="card-title with-image"><?php the_title(); ?></span> -->
            <?php the_content(); ?>
            <!-- </div>
            <div class="card-action">
                <span><i class="material-icons left">access_time</i><?php the_date('d.m.Y'); ?></span>
            </div>
        </div>
        <span><?php previous_post_link("%link", "%title", true); ?></span><br>
        <span><?php next_post_link("%link", "%title", true); ?></span>
    </div> -->

<?php
    }
    else {
?>
       
        <div class="col s12 offset-m2 m8"">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><?php the_title(); ?></span>
                    <p><?php the_content(); ?></p>
                </div>
                <div class="card-action">
                    <span><< <?php previous_post_link(); ?></span>
                    <span><i class="material-icons left">access_time</i><?php the_date('d.m.Y'); ?></span>
                    <span>>> <?php next_post_link(); ?></span>
                </div>
            </div>
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
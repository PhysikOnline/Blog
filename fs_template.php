<?php 
/* Template Name: Fachschaft */
get_header();
set_query_var( 'view-category', 'fs' );
get_template_part('partials/sidebar');
get_template_part('partials/navheader');
?>
<!--MAIN-->       
<main>
    <div class="row">
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
    <?php the_title(); ?>
    <?php the_content()?>
<?php
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

<?php
/* Template Name: PhysikOnline */
get_header();
set_query_var('view-category', 'po');
set_query_var('view-page', '');

// selects active navheader li
global $wp;
$url = home_url( $wp->request );
if ( $url == home_url() . '/contact-po') {
	set_query_var('view-page', 'contact');
} elseif ( $url == home_url() . '/about_po' ){
	set_query_var('view-page', 'about_us');
} elseif ($url == home_url() . '/category/physikonline/' ){
	set_query_var('view-page', 'blog');
};

get_template_part('partials/sidebar');
get_template_part('partials/navheader');
?>
 <!--MAIN-->
 <main>
    <div class="row">
        <?php
        if ( have_posts() ): 
            while ( have_posts() ): 
                the_post();
                the_content();
            endwhile;
        else :
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;
        ?>
    </div>
</main>

<!-- FOOTER -->
<?php get_footer();?>

<?php
/* Template Name: PhysikOnline Über Uns */ 
get_header();
set_query_var('view-category', 'po');
set_query_var('view-page', 'about_us');
get_template_part('partials/sidebar');
get_template_part('partials/navheader');
echo 'About Us PO';
?>


<?php get_footer();?>
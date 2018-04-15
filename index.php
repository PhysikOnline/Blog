<?php 
get_header();
set_query_var( 'view-category', '' );
set_query_var( 'view-page', 'blog' );
get_template_part('partials/sidebar');
get_template_part('partials/navheader');
?>

 <!--MAIN-->       
<main>
<div class="row">
    <div class="col s12 m6">
        <h1>Projektvorstellungen</h1>
    </div>
</div>
</main>




<!-- FOOTER 
 <footer class="page-footer">
    <div class="footer-copyright">  
        <div class="footainer">
            © 2017 PhysikOnline 
            <ul>
            <li><a href="<?php echo home_url(); ?>/wp-admin">Bearbeiten</a>
            </ul>
        </div>
    </div>
</footer>         -->

<?php get_footer(); ?>

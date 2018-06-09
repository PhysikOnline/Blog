<?php
get_header();
set_query_var('view-category', 'index');
set_query_var('view-page', 'blog');
get_template_part('partials/sidebar');
get_template_part('partials/navheader');
?>

 <!--MAIN-->
<main>
<div class="row">
    <div class="col s12 offset-m1 m10">
        <h1 class="light center">Willkommen auf dem Physik-Blog!</h1>
        <p class="flow-text center">
            Hier findest du alles rund um das Physik Studium an der Goethe Universität Frankfurt.
        </p>
    </div>
    <div class="row section">
        <div class="col s12 m6 offset-l2 l4">
            <a href="<?php echo home_url(); ?>/fs-home/">
                <div class="center">
                    <i class="material-icons large yellow-text text-darken-4">weekend</i>
                    <p class="flow-text">Zur Fachschaft</p>
                </div>
            </a>
        </div>
        <div class="col s12 m6 l4">
            <a href="<?php echo home_url(); ?>/po-home/">
                <div class="center">
                    <i class="material-icons large light-blue-text text-darken-4">code</i>
                    <p class="flow-text">Zum PhysikOnline Bereich</p>
                </div>
            </a>
        </div>
    </div>
</div>

</main>

<?php get_footer();?>

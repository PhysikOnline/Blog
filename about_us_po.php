<?php
/* Template Name: PhysikOnline Über Uns */ 
get_header();
set_query_var('view-category', 'po');
set_query_var('view-page', 'about_us');
get_template_part('partials/sidebar');
get_template_part('partials/navheader');
?>

<main>
    
    <div class="card">
        <div class="card-image">
            <img src="<?php bloginfo('template_url') ?>/assets/images/Teamfoto2016.jpg" style="top: -50%;">
        </div>
        <div class="card-content container">
            <div class="section">
                <h1 class="light center"> Über Uns </h1>
                <span>
                Alle Mitarbeiter bei PhysikOnline sind Studierende der Physik oder benachbarter Studiengänge. Sie sind als studentische Hilfskräfte angestellt oder arbeiten ehrenamtlich mit. Wir beziehen Gelder aus verschiedenen Töpfen, wobei die QSL-Mittel des Fachbereichs Physik den Grundstock an Mitarbeitern ermöglicht.

                Als studentisches Projekt lebt PhysikOnline von einem ständigen Kommen und Gehen. Manche Mitglieder von PhysikOnline sind nur wenige Monate angestellt, anderere sind bereits seit ihrem ganzen Studium dabei. Auf dieser Seite sind alle ehemaligen und amtierenden Teammitglieder aufgelistet. Diese Seite soll dabei Teile unseres Impressums ersetzen. Zu jedem Mitglied zeigen wir ein Photo, stellen ihn oder sie in einem kurzen Text mit Fähigkeiten, Zeitraum der Mitarbeit, und den Projekten, in denen er/sie mitgewirkt hat, vor.

                Einzig nicht studentisches Mitglied in folgender Liste ist Professor Wagner, der das Projekt betreut. Ansonsten gibt es im PhysikOnline-Projekt keine hierarchische Struktur, alle Teammitglieder beteiligen sich an den Projekten, die sie interessieren. Nach diesen Kriterien werden auch neue Mitglieder ins Team aufgenommen.
                </p>
            </div>
            <div class="divider"></div>
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content(); 
            endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
            ?>
        </div>
    </div>  
</main>

<?php get_footer();?>
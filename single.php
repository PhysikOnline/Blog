<?php 
get_header();
set_query_var( 'view-category', '' );
set_query_var( 'view-page', 'blog' );
get_template_part('partials/sidebar');
get_template_part('partials/navheader');

$po_cat_id = get_cat_id('PhysikOnline');
$fs_cat_id = get_cat_id('Fachschaft Physik');
$gen_cat_id = get_cat_id('Uncategorized');

// excludes any other category than fs or po as current category
if ( have_posts() ) : while ( have_posts() ) : the_post();
$categories = get_the_category();
if ( !(esc_html( in_array('Allgemein', $categories) ) ) == 'Allgemein'){
    $current_post_cat = esc_html( $categories[0]->name );
} else {
    if ( !($categories[1]  == NULL) ){
        $current_post_cat = esc_html( $categories[1]->name );
    } else {
        $current_post_cat = NULL;
    }
};

// excludes po or fs category based on current category
if ( $current_post_cat == 'PhysikOnline'){
    $excluded_cat_id = array($fs_cat_id, $gen_cat_id, get_cat_id('Allgemein')); 
} else {
    $excluded_cat_id = array($po_cat_id, $gen_cat_id, get_cat_id('Allgemein'));
}

$previous_post = get_previous_post( TRUE, $excluded_cat_id );
$next_post = get_next_post( TRUE, $excluded_cat_id );

if ($previous_post == ''){
    $previous_post_url = '';
    $previous_button_class ='disabled';
} else {
    $previous_post_url = esc_url( get_permalink( $previous_post->ID ) );
    $previous_button_class = '';
}

if ($next_post == '') {
    $next_post_url = '';
    $next_button_class = 'disabled';
} else {
    $next_post_url = esc_url( get_permalink( $next_post->ID ) );
    $next_button_class = '';
}

?>

<main>
    <div class="row">

<?php


    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
?>
    
    <div class="col s12 offset-m1 m10">
        <div class="card">
            <div class="card-image">
                <img src="<?php the_post_thumbnail_url( array(520, 390)); ?>">
            </div>
            <div class="card-content">
            <span class="card-title with-image"><?php the_title(); ?></span>
                <p><?php the_content(); ?></p>
            </div>
            <div class="card-action">
                <span><i class="material-icons left">access_time</i><?php the_date('d.m.Y'); ?></span>
            </div>
        </div>
            <!-- PREVIOUS POST -->
            <a class="waves-effect waves-light btn <?php echo $previous_button_class;?>" href="<?php echo $previous_post_url; ?>"> 
                    Previous Post
                </a>
                <!-- <span><i class="material-icons left">access_time</i><?php the_date('d.m.Y'); ?></span> -->

            <!-- NEXT POST -->
                <a class="waves-effect waves-light btn <?php echo $next_button_class;?>" href="<?php echo $next_post_url; ?>"> 
                    Next Post
                </a>
    </div>

<?php
    }
    else {
?>
       
    <div class="col s12 offset-m2 m8">
        <div class="card">
            <div class="card-content">
                <span class="card-title"><?php the_title(); ?></span>
                <p><?php the_content();?>
            </div>
            <div class="card-action">
            <!-- <span><i class="material-icons left">access_time</i><?php the_date('d.m.Y'); ?></span> -->
            <!-- PREVIOUS POST -->
            <a class="waves-effect waves-light btn <?php echo $previous_button_class;?>" href="<?php echo $previous_post_url; ?>"> 
                    Previous Post
                </a>
                <!-- <span><i class="material-icons left">access_time</i><?php the_date('d.m.Y'); ?></span> -->

            <!-- NEXT POST -->
                <a class="waves-effect waves-light btn <?php echo $next_button_class;?>" href="<?php echo $next_post_url; ?>"> 
                    Next Post
                </a>

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
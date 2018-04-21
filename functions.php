<?php
add_theme_support( 'post-thumbnails' ); // to allow thumbnails for each post

// [display-member name="" page-src="", img-src=""]
function display_member_func( $atts ) {
	$a = shortcode_atts( array(
		'name' => 'Name',
		'page-src' => '#',
		'img-src' => '#',
	), $atts );
	$name = $a['name'];
	$template_url = get_bloginfo('template_url');
	if ($a['img-src'] == '#'){
		$img_src = $template_url . '/assets/images/avatar_white.png';
	} else {
		$img_src = $a['img-src'];
	}
	$page_src = $a['page-src']; 

	return '<a href="' . $page_src . '">
		<div class="chip">
			<img src="' . $img_src . '" class="blue-grey lighten-3">
			' . $name . '
		</div>
	</a>';
}
add_shortcode( 'display-member', 'display_member_func');

// Register Custom Post Type
function custom_po_teammembers() {

	$labels = array(
		'name'                  => 'teammembers',
		'singular_name'         => 'teammember',
		'menu_name'             => 'Teammembers',
		'name_admin_bar'        => 'Teammembers',
		'archives'              => 'Archives',
		'attributes'            => '',
		'parent_item_colon'     => '',
		'all_items'             => 'teammembers',
		'add_new_item'          => 'Add New Member',
		'add_new'               => 'Add New',
		'new_item'              => 'New Member',
		'edit_item'             => 'Edit Member',
		'update_item'           => 'Update Member',
		'view_item'             => 'View Member',
		'view_items'            => 'View Members',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => '',
		'set_featured_image'    => '',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this member',
		'items_list'            => 'Members list',
		'items_list_navigation' => 'Members list navigation',
		'filter_items_list'     => 'Filter members list',
	);
	$args = array(
		'label'                 => 'teammember',
		'description'           => 'Members of all teams',
        'labels'                => $labels,
        'rewrite' => array('slug' => 'teammembers'),
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'teammembers-archive',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
    register_post_type( 'teammembers', $args );
    
    flush_rewrite_rules( false );

}
add_action( 'init', 'custom_po_teammembers', 0 );




// http://www.wpbeginner.com/wp-tutorials/how-to-create-custom-post-types-in-wordpress/
// function create_po_teammembers() {
    
//     register_post_type( 'members',
//     // CPT Options
//         array(
//             'labels' => array(
//                 'name' => __( 'Members' ),
//                 'singular_name' => __( 'Member1' )
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => array('slug' => 'members'),
//         )
//     );
// }

// // Hooking up our function to theme setup
// add_action( 'init', 'create_po_teammembers' );

/*
* Creating a function to create our CPT
*/
 
// function custom_po_teammembers() {
 
//     // Set UI labels for Custom Post Type
//         $labels = array(
//             'name'                => _x( 'Teammembers', 'Post Type General Name', 'po-md' ),
//             'singular_name'       => _x( 'Member', 'Post Type Singular Name', 'po-md' ),
//             'menu_name'           => __( 'Teammembers', 'po-md' ),
//             'all_items'           => __( 'All Teammembers', 'po-md' ),
//             'view_item'           => __( 'View Members', 'po-md' ),
//             'add_new_item'        => __( 'Add New Member', 'po-md' ),
//             'add_new'             => __( 'Add New', 'po-md' ),
//             'edit_item'           => __( 'Edit Member', 'po-md' ),
//             'update_item'         => __( 'Update Member', 'po-md' ),
//             'search_items'        => __( 'Search Member', 'po-md' ),
//             'not_found'           => __( 'Not Found', 'po-md' ),
//             'not_found_in_trash'  => __( 'Not found in Trash', 'po-md' ),
//         );
         
//     // Set other options for Custom Post Type
         
//     $args = array(
//         'label'               => __( 'teammembers', 'po-md' ),
//         'description'         => __( 'Teammembers', 'po-md' ),
//         'labels'              => $labels,
//         // Features this CPT supports in Post Editor
//         'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
//         // You can associate this CPT with a taxonomy or custom taxonomy. 
//         'taxonomies'          => array( 'category' ),
//         /* A hierarchical CPT is like Pages and can have
//         * Parent and child items. A non-hierarchical CPT
//         * is like Posts.
//         */ 
//         'hierarchical'        => false,
//         'public'              => true,
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'menu_position'       => 5,
//         'can_export'          => true,
//         'has_archive'         => true,
//         'rewrite' => array('slug' => 'teammembers'),
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'capability_type'     => 'page',
//     );
        
//     // Registering your Custom Post Type
//     register_post_type( 'teammembers', $args );
    
// }
    
// /* Hook into the 'init' action so that the function
// * Containing our post type registration is not 
// * unnecessarily executed. 
// */
    
// add_action( 'init', 'custom_po_teammembers', 0 );

// add_filter('pre_get_posts', 'query_post_type');
// function query_post_type($query) {
//   if( is_category() ) {
//     $post_type = get_query_var('post_type');
//     if($post_type)
//         $post_type = $post_type;
//     else
//         $post_type = array('nav_menu_item', 'post', 'teammembers'); 
//     $query->set('post_type',$post_type);
//     return $query;
//     }
// }

?>
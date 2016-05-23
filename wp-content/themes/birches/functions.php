<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function birches_sidebars_init() {
	register_sidebar( array(
		'name'          => __( 'Main Navigation', 'birches' ),
		'id'            => 'main_nav_menu',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'birches' ),
		'before_widget' => '',
		'after_widget'  => ''
	) );

	register_sidebar( array(
		'name'          => __( 'Social Icons', 'birches' ),
		'id'            => 'social_icons',
		'description'   => __( 'Links To Social Icons', 'birches' ),
		'before_widget' => '<section class="widget %2$s">',
		'after_widget'  => '</section>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Text', 'birches' ),
		'id'            => 'main_footer',
		'description'   => __( 'Appears at the bottom of the content.', 'birches' ),
		'before_widget' => '<div class="col-md-3 col-sm-4 menu-footer">',
		'after_widget'  => '</div>',
	) );
}
add_action( 'widgets_init', 'birches_sidebars_init' );

add_theme_support( 'post-thumbnails' );

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?>
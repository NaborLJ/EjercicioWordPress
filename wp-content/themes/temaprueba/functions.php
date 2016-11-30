<?php register_nav_menus( array(
	'menu1 '=> __('Menu1 cosas','tema1'),
	'menu2' => __('Menu2 cosos','tema2')
) );
/**
 * Register our sidebars and widgetized areas.
 *
 */

	register_sidebar( array(
		'name'          => __( 'SideBar1', 'temaprueba' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'temaprueba' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


?>
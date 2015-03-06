<?php
function market_cadence_widgets_init() {
	register_sidebar( array(
	'name'          => __( 'Social Icons Box', 'market-cadence' ),
	'id'            => 'social-icons-box',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget social-icons-box %2$s">',
		'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
	'name'          => __( 'Home Page Column 1', 'market-cadence' ),
	'id'            => 'home-col-1',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget home-col %2$s">',
		'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
	'name'          => __( 'Home Page Column 2', 'market-cadence' ),
	'id'            => 'home-col-2',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget home-col %2$s">',
		'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
	'name'          => __( 'Home Page Column 3', 'market-cadence' ),
	'id'            => 'home-col-3',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget home-col %2$s">',
		'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
	'name'          => __( 'Home Page Column 4', 'market-cadence' ),
	'id'            => 'home-col-4',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget home-col %2$s">',
		'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
	'name'          => __( 'Home Page Column 5', 'market-cadence' ),
	'id'            => 'home-col-5',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget home-col %2$s">',
		'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
	'name'          => __( 'Home Page CTA Box', 'market-cadence' ),
	'id'            => 'home-cta-box',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget cta-box %2$s">',
		'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'market_cadence_widgets_init' );
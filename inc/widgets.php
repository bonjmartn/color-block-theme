<?php

function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

function footer_widgets( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<p class="footer-widget-title">',
		'after_title' => '</p>'
	));
}

function homepage_social_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

function footer_social_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

// Create Widgets for Homepage

create_widget( 'Call to Action Bar', 'front-bar', 'Displays on the homepage underneath the first set of images' );
homepage_social_widget( 'Homepage Social Icons', 'homepage-social-icons', 'Social icons that display in a bar on the homepage. If you dont want to show one of the icons, leave the URL field blank.' );

// Create Widget areas for Pages and Blog Posts

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the right of blog posts' );

// Create Widget areas for Footer

footer_widgets( 'Footer 1', 'footer-1', 'Displays first in the footer' );
footer_widgets( 'Footer 2', 'footer-2', 'Displays second in the footer' );
footer_widgets( 'Footer 3', 'footer-3', 'Displays third in the footer' );
footer_social_widget( 'Footer 4', 'footer-social-icons', 'Social icons that display in the footer. If you dont want to show one of the icons, leave the URL field blank.' );

?>
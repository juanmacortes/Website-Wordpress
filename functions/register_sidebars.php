<?php
/* Sidebar Registration*/

if ( function_exists('register_sidebar')) {
    
	
	register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'parada-sidebar-6',
        'before_widget' => '<div class="widgets" id="%1$s">',
        'after_widget' => '<div class="clear"></div></div><div class="padding60"></div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>'
    ));
	register_sidebar(array(
        'name' => 'Page Sidebar',
        'id' => 'parada-sidebar-5',
        'before_widget' => '<div class="widgets" id="%1$s">',
        'after_widget' => '<div class="clear"></div></div><div class="padding60"></div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>'
    ));
	register_sidebar(array(
        'name' => 'Menu Sidebar',
        'id' => 'parada-sidebar-7',
        'before_widget' => '<div class="widget" id="%1$s"><div class="widget-content">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="widget-title bottom-line">',
        'after_title' => '</div>'
    ));
	register_sidebar(array(
		'name' => 'Newsletter widget',
		'id' => 'parada-sidebar-8',
		'before_widget' => '<div class="widget" id="%1$s"><div class="widget-content">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="widget-title bottom-line">',
        'after_title' => '</div>'
	));
	register_sidebar(array(
        'name' => 'Footer Widget 1',
        'id' => 'parada-sidebar-1',
        'before_widget' => '<div class="col-md-6" id="%1$s">',
        'after_widget' => '<div class="clear"></div></div>',
        'before_title' => '<h4 class="title">',
        'after_title' => '</h4>'
    ));
	register_sidebar(array(
        'name' => 'Footer Widget 2',
        'id' => 'parada-sidebar-2',
        'before_widget' => '<div class="col-md-5 col-md-offset-1" id="%1$s">',
        'after_widget' => '<div class="clear"></div></div>',
        'before_title' => '<h4 class="title">',
        'after_title' => '</h4>'
    ));
}?>
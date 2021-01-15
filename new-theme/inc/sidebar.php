<?php


add_action( 'widgets_init', 'custom_sidebar' );
function custom_sidebar(){

    register_sidebar( array(
        'name'          => sprintf(__('Sidebar %d'), $i ),
        'id'            => "sidebar-$i",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ) );
}



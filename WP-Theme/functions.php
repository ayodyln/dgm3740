<?php

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );




/* THIS FUNCTION ENABLES WIDGETS IN APPEARSNCE >  SIDEBAR*/
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'HomeLeft Widgets',
'id'   => 'homeleft-widgets',
'description'   => 'Widget Area',
'before_widget' => '<div id="one" class="two">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title'   => '</h2>'
));
}


/*DISABLE THE TINY MCE EDITOR IN THE BACK END*/
add_filter( 'user_can_richedit' , '__return_false', 50 );
/*DISABLE GUTENBURG EDITOR*/
add_filter('use_block_editor_for_post', '__return_false', 10);



?>
<?php
/**
* Template Name: Map Sidebar Template
* Description: Used for Jobs in County pages
*/

add_action('get_header','ablg_change_genesis_sidebar');
function ablg_change_genesis_sidebar() {
    //if ( is_page_template( 'map-sidebar.php' ) ) {
        remove_action( 'genesis_sidebar', 'genesis_do_sidebar' ); //remove the default genesis sidebar
        add_action( 'genesis_sidebar', 'ablg_do_sidebar' ); //add an action hook to call the function for my custom sidebar
    //}
}

//Function to output my custom sidebar
function ablg_do_sidebar() {
    dynamic_sidebar( 'map-of-counties' );
}

genesis();

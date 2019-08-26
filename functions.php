<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

// Get Uomo hompage sidebar
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Hompage Uomo', 'wpb' ),
        'id' => 'home-uomo',
        'description' => __( 'Qui inserisci lo slider per la collezione uomo da visualizzare in homepage', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title uomo-home-slider">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Homepage Donna', 'wpb'),
        'id' => 'home-donna',
        'description' => __( 'Qui inserisci lo slider per la collezione donna da visualizzare in homepage', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
    ) );
    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );

// block gutemberg editor
add_filter('use_block_editor_for_post', '__return_false', 10);

/**
 * Function to remove sidebar on woocommerce single product
 * Author: Khokan Sardar https://stackoverflow.com/a/57654626/10259012
 */
function remove_sidebar_single_product_page() {
    if ( is_product() ) {
        // for understrap theme
        remove_action( 'woocommerce_after_main_content', 'understrap_woocommerce_wrapper_end', 10 );
        // for default woocommerce structure
        remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
        // add wrapper end for single product
        add_action( 'woocommerce_after_main_content', 'understrap_woocommerce_wrapper_end_for_single_product', 11 );
    }
}
add_action( 'wp', 'remove_sidebar_single_product_page' );

function understrap_woocommerce_wrapper_end_for_single_product(){
    echo '</main><!-- #main -->';
    echo '</div><!-- .row -->';
    echo '</div><!-- Container end -->';
    echo '</div><!-- Wrapper end -->';
}
/**
 * Function to move buy button on woocommerce single product
 */
remove_action( 'woocommerce_single_product_summary', 
'woocommerce_template_single_add_to_cart', 30 );
add_action( 'woocommerce_single_product_summary', 
'woocommerce_template_single_add_to_cart', 15 );

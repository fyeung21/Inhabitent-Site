<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

function inhabitent_tax_product_type() {

	$labels = array(
		'name'                       => _x( 'Product Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Product Types', 'text_domain' ),
		'all_items'                  => __( 'All Product Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Product Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Product Type:', 'text_domain' ),
		'new_item_name'              => __( 'New Product Type Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Product Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Product Type', 'text_domain' ),
		'update_item'                => __( 'Update Product Type', 'text_domain' ),
		'view_item'                  => __( 'View Product Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Product Types with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Product Types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the Most Used', 'text_domain' ),
		'popular_items'              => __( 'Popular Product Types', 'text_domain' ),
		'search_items'               => __( 'Search Product Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Product Types', 'text_domain' ),
		'items_list'                 => __( 'Product Types list', 'text_domain' ),
		'items_list_navigation'      => __( 'Product Types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'         		 => true,
	);
    register_taxonomy( 'product_type', array( 'product' ), $args );
 }
 add_action( 'init', 'inhabitent_tax_product_type' );

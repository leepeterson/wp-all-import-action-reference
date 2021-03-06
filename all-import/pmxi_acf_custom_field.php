<?php
/**
 * ================================================
 * Filter: pmxi_acf_custom_field
 * ================================================
 *
 * Filter for ACF custom field values.
 *
 * @param $value    		-   Existing value
 * @param $pid 				-	The post ID.
 * @param $name 			-	The field name.
 *
 */
add_filter( 'pmxi_acf_custom_field', 'wp_all_import_pmxi_acf_custom_field', 10, 3 ); 

function wp_all_import_pmxi_acf_custom_field( $value, $pid, $name ) { 
	// Code here.
}

// ----------------------------
// Example uses below
// ----------------------------

/**
 * Example: only update ACF field if empty in post
 *
 */
add_filter( 'pmxi_acf_custom_field', 'wp_all_import_pmxi_acf_custom_field', 10, 3 ); 

function wp_all_import_pmxi_acf_custom_field( $value, $pid, $name ) { 
	if ( empty( $value ) ) { 
	// get existing value 
		$value = get_post_meta( $pid, $name, true ); 
	} 
	return $value; 
}
<?php
//**If you want to check if a function is being called, add this line of code in your function
//**and you can check the value of variables and what not in the firebug console
//$data = whatever you want to check
//echo "<script>console.log( 'FUNCTION " . $data . " IS BEING CALLED YO' );</script>";


//redirect all to home page after login -- Cam
//**could ridirect to post job for employer, find a job for seeker, and dashboard for admin
add_action('login_form', 'redirect_after_login');
function redirect_after_login() {
global $redirect_to;
if (!isset($_GET['redirect_to'])) {
$redirect_to = get_option('siteurl');
}
}

// Add shortcode support to widgets --Cam
add_filter('widget_text', 'do_shortcode');

//Add red asterix for all required form fields --Cam
add_filter( 'user_meta_field_config', 'user_meta_field_config_add_asterisk', 10, 3 );
function user_meta_field_config_add_asterisk( $field, $fieldID, $formName ){     
    if( !empty($field['required']) || in_array($field['field_type'], array('user_login', 'user_email')) ){
        if( !empty( $field['field_title'] ) )
            $field['field_title'] .= '<span class="um_required">*</span>';
    }
 
    return $field;
}

//Redirects after profile update --Cam
add_action( 'user_meta_after_user_update', 'user_meta_after_user_update_function' );
function user_meta_after_user_update_function( $response ){
    global $userMeta;
	//echo $userMeta->jsRedirect( 'http://capstone.jonny.me' );
	echo $userMeta->jsRedirect( home_url() );
  
}

// Remove Edit Profile nav_menu item for Company Role (subscriber)
if (get_current_user_role()=="Company" ) {
 
function exclude_menu_items( $items, $menu, $args ) {
    // Iterate over the items to search and destroy
    foreach ( $items as $key => $item ) {
   		//id of edit profile nav_menu item  
	  if ( $item->object_id == 2235){ unset( $items[$key] );}
	  
  
	}
  
  return $items;
  
}

add_filter( 'wp_get_nav_menu_items', 'exclude_menu_items', null, 3 );
  
} 
function get_current_user_role() {
	global $wp_roles;
	$current_user = wp_get_current_user();
	$roles = $current_user->roles;
	$role = array_shift($roles);
	return isset($wp_roles->role_names[$role]) ? translate_user_role($wp_roles->role_names[$role] ) : false;
}
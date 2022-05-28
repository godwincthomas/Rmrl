<?php
/**
 * Plugin Name: Flip-pong V
 * Plugin URI: http://www.tambourdeville.net
 * Description: Ultimate Html5 Flibook
 * Author: tambourdeville
 * Author URI: http://www.tambourdeville.net
 * Version: 1.4.2
**/

class flippong{
function check_version(){
	if (!is_admin()){
		$fileok = plugins_url().'/flip-pong-v/single-flip_pong.txt';
		$filecheck = get_stylesheet_directory_uri();
		$cut = strpos($filecheck, 'wp-content');
		$filecheck = substr($filecheck, $cut).'/single-flip_pong.php';
		if (!file_exists($filecheck)){
			add_action( 'pre_get_posts', array('flippong','copy_file_flippong' ));
			return 0;
		}
		
		$current_version = @file($filecheck);
		$available_version = @file($fileok);
		$current_version = $current_version[5];
		$available_version = $available_version[5];
		if($available_version != $current_version)
		{
			add_action( 'pre_get_posts', array('flippong','copy_file_flippong' ));
		}
	}
}

//***********      File Copy            ****************//
function copy_file_flippong() {
	global $post;
	if( isset($_GET['post_type'])) $post_type = $_GET['post_type'];
	else $post_type = get_post_type( $post->ID );
	if ($post_type == 'flip_pong'){
	$source = plugins_url().'/flip-pong-v/single-flip_pong.txt';
	$target = get_stylesheet_directory_uri();
	$cut = strpos($target, 'wp-content');
	$target = substr($target, $cut).'/single-flip_pong.txt';
	copy($source,$target);
	$cut = (strpos($target, 'txt'));
	$target_renamed = substr($target, 0, $cut).'php';
	rename($target,$target_renamed );
	}
	else return;
}

//**************   Create Custom Post Type: FlipBook    *****************//
function create_mon_post_types() {
	
	register_post_type( 'flip_pong',
		array(
			'labels' => array(
				'name' => __( 'Flipbooks' ),
				'singular_name' => __( 'Flipbook' ),
					'add_new' => __( 'add new' ),
					'add_new_item' => __( 'add a FlipBook' ),
					'edit' => __( 'edit' ),
					'edit_item' => __( 'edit FlipBook' ),
					'new_item' => __( 'new FlipBook;' ),
					'view' => __( 'see' ),
					'view_item' => __( 'see FlipBook' ),
					'search_items' => __( 'search FlipBook' ),
					'not_found' => __( 'no FlipBook found' ),
							),
			'public' => true,
			'taxonomies' => array('category'), 
			'show_ui' => true,
			'publicly_queryable' => true,
			'rewrite' => array( 'slug' => 'flip_pong' ),
			'menu_icon' => plugins_url().'/flip-pong-v/images/book.png',
			'supports' => array('title','editor','thumbnail')
		)
	);
}

//**************  Add meta box  *********************************/
function flipbook_add_box() {
add_meta_box('flipbookmb', 'Flipbook Options', array('flippong','flipbook_show_box'), 'flip_pong', 'normal');
add_meta_box('flipbookmb2', 'Flipbook: how-to ?', array('flippong','flipbook_show_box2'), 'flip_pong', 'side');
}

/**************  Show Meta-boxes  *********************************/
function flipbook_show_box() {// Callback function to show fields in meta box
    global $meta_value, $post;
    // Use nonce for verification
    echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	echo '<div id="tablo">';
	if (version_compare(PHP_VERSION, '5.3.0', '<')){    
	echo '<span style="color:red;font-weight:bold;">Your php version is '. PHP_VERSION .' and you must have at least php 5.3 to run Flip Pong V.<br>Please upgrade your php version.</span>';
	}
	else{
	$meta_value = get_post_meta($post->ID,'','');
	echo '
	Enter Flipbook page’s height in pixels:
	<input id="dbt_height" type="text" style="width:20%" size="30" value="'.$meta_value['dbt_height'][0].'" name="dbt_height" />
	(Recommended max. height: <strong>700px</strong>)
	<br><br>
	
	Enter Flipbook page’s widht in pixels:
	<input id="dbt_width" type="text" style="width:20%" size="30" value="'.$meta_value['dbt_width'][0].'" name="dbt_width" />
	(Recommended max. width: <strong>650px</strong>)
	<br>
	<br>
	
	<input type="radio" value="ok" name="dbt_shadow"';
	if ($meta_value['dbt_shadow'][0] == 'ok'){ echo ' checked=""';}
	echo '/>
	With shadow around the flipbook
	<br>
	<input type="radio" value="no" name="dbt_shadow"';
	if ($meta_value['dbt_shadow'][0] == 'no'){ echo ' checked=""';}
	echo '/>
	Without shadow<br><br>
	
	<input type="radio" value="ok" name="dbt_header"';
	if ($meta_value['dbt_header'][0] == 'ok'){ echo ' checked=""';}
	echo '/>
	Get the header
	<br>
	<input type="radio" value="no" name="dbt_header"';
	if ($meta_value['dbt_header'][0] == 'no'){ echo ' checked=""';}
	echo '/>
	Don&rsquo;t get the header<br><br>
	
	<input type="radio" value="ok" name="dbt_footer"';
	if ($meta_value['dbt_footer'][0] == 'ok'){ echo ' checked=""';}
	echo '/>
	Get the footer
	<br>
	<input type="radio" value="no" name="dbt_footer"';
	if ($meta_value['dbt_footer'][0] == 'no'){ echo ' checked=""';}
	echo '/>
	Don&rsquo;t get the footer<br><br>';
	}
	echo '</div>';
 }
 function flipbook_show_box2() {
	echo '<span id="flippong_advices">
	To create your flipbook, simply create a pictures gallery and add it into the post.
	<hr>
	To mofidy your flipbook, click on the "edit gallery" button in the content area.
	<hr>
	<span style="color:red;">Troubleshooting:</span><br>
	- No images appears ? Edit your post in text mode, and delete the "columns" and "links" attributes in the gallery shortcode<br>
	- The flipbook URL works only with the default permalink setting (http://yoursite.com/?flip_pong=flipbook-name)<br>
	- "Wrong parameter count for strstr()" appears ? Because you have an old version of PHP ( in your .htaccess file)<br>
	</span>';
 }
/***************  Save meta boxes  ******************************/
function flipbook_save_box($post_id) {
 // wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
      return;
	}
	
	$meta_value = get_post_meta($post->ID,'','');
	if ($meta_value[dbt_height][0] != $_POST['dbt_height']){
		update_post_meta($post_id, 'dbt_height', $_POST['dbt_height']);
	}
	if ($meta_value[dbt_width][0] != $_POST['dbt_width']){
		update_post_meta($post_id, 'dbt_width', $_POST['dbt_width']);
	}
	if ($meta_value[dbt_shadow][0] != $_POST['dbt_shadow']){
		update_post_meta($post_id, 'dbt_shadow', $_POST['dbt_shadow']);
	}
	
	if ($meta_value[dbt_header][0] != $_POST['dbt_header']){
		update_post_meta($post_id, 'dbt_header', $_POST['dbt_header']);
	}
	if ($meta_value[dbt_footer][0] != $_POST['dbt_footer']){
		update_post_meta($post_id, 'dbt_footer', $_POST['dbt_footer']);
	}
}
/*********************  Custom admin panel  ********************/
function flipbook_admin_css() {
		global $post_type;
		if( isset($_GET['post_type']) ) $post_type = $_GET['post_type'];
				if($post_type == 'flip_pong')
				echo "<link type='text/css' rel='stylesheet' href='" . plugins_url('/css/flipadmin.css', __FILE__) . "' />";
	}
}//end class

/*********************  Add flip book to post query  ********************/
// Show posts of 'post' and 'flip_pong' post types on home page
function add_my_post_types_to_query( $query ) {
	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'flip_pong' ) );
	return $query;
}

add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
add_action('init', array('flippong','check_version' ));
add_action('init', array('flippong','create_mon_post_types' ));
add_action('admin_init', array('flippong','flipbook_add_box'));
add_action('save_post', array('flippong','flipbook_save_box'));
add_action('admin_head', array('flippong','flipbook_admin_css'));
?>
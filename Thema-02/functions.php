<?php
ob_start();
/*********************
INCLUDE NEEDED FILES
*********************/

// LOAD JOINTSWP CORE (if you remove this, the theme will break)
require_once(get_template_directory().'/library/joints.php'); 

// USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
require_once(get_template_directory().'/library/custom-post-type.php'); // you can disable this if you like

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
// require_once(get_template_directory().'/library/admin.php'); 

// SUPPORT FOR OTHER LANGUAGES (off by default)
// require_once(get_template_directory().'/library/translation/translation.php'); 

/*********************
MENUS & NAVIGATION
*********************/


add_action( 'wpcf7_mail_sent', 'your_wpcf7_mail_sent_function' ); 

function your_wpcf7_mail_sent_function( $contact_form ) {
    $title = $contact_form->title;
    global $wpdb;
    $submission = WPCF7_Submission::get_instance();
  
    if ( $submission ) {
    	$posted_data = $submission->get_posted_data();
    }      
     
 
   if ( 'Formulario-Cafe-la-musique-cumbuco' == $title ) {
     

    	$nome = $posted_data['name-cumbuco'];
    	$email = $posted_data['email-cumbuco'];
    	$celular = $posted_data['celular-cumbuco'];    	
    	$tipo = 'Formulario-Cafe-la-musique-cumbuco';

    	$wpdb->query("insert into ".$wpdb->prefix."sml (sml_name, sml_email, sml_celular, sml_tipo) values ('".$wpdb->escape($nome)."', '".$wpdb->escape($email)."','".$wpdb->escape($celular)."','".$wpdb->escape($tipo)."')");

   }


   if ( 'Formulario-Cafe-La-Musique-Pousada' == $title ) {
     
    	$nome = $posted_data['name-pousada'];
    	$email = $posted_data['email-pousada'];
    	$celular = $posted_data['celular-pousada'];    	
    	$tipo = 'Formulario-Cafe-La-Musique-Pousada';

    	$wpdb->query("insert into ".$wpdb->prefix."sml (sml_name, sml_email, sml_celular, sml_tipo) values ('".$wpdb->escape($nome)."', '".$wpdb->escape($email)."','".$wpdb->escape($celular)."','".$wpdb->escape($tipo)."')");


   }

   if ( 'Formulario-NONI-RESORT-ARENA' == $title ) {
     
    	$nome = $posted_data['name-arena'];
    	$email = $posted_data['email-arena'];
    	$celular = $posted_data['celular-arena'];    	
    	$tipo = 'Formulario-NONI-RESORT-ARENA';

    	$wpdb->query("insert into ".$wpdb->prefix."sml (sml_name, sml_email, sml_celular, sml_tipo) values ('".$wpdb->escape($nome)."', '".$wpdb->escape($email)."','".$wpdb->escape($celular)."','".$wpdb->escape($tipo)."')");

   }
}


// REGISTER MENUS
register_nav_menus(
	array(
		'top-nav' => __( 'The Top Menu' ),   // main nav in header
		'main-nav' => __( 'The Main Menu' ),   // main nav in header
		'footer-links' => __( 'Footer Links' ) // secondary nav in footer
	)
);

// THE TOP MENU
function joints_top_nav() {
    wp_nav_menu(array(
    	'container' => false,                           // remove nav container
    	'container_class' => '',           // class of container (should you choose to use it)
    	'menu' => __( 'The Top Menu', 'jointstheme' ),  // nav name
    	'menu_class' => '',         // adding custom nav class
    	'theme_location' => 'top-nav',                 // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
    	'fallback_cb' => 'joints_main_nav_fallback'      // fallback function
	));
} /* end joints main nav */

// THE MAIN MENU
function joints_main_nav() {
    wp_nav_menu(array(
    	'container' => false,                           // remove nav container
    	'container_class' => '',           // class of container (should you choose to use it)
    	'menu' => __( 'The Main Menu', 'jointstheme' ),  // nav name
    	'menu_class' => '',         // adding custom nav class
    	'theme_location' => 'main-nav',                 // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
    	'fallback_cb' => 'joints_main_nav_fallback'      // fallback function
	));
} /* end joints main nav */

// THE FOOTER MENU
function joints_footer_links() {
    wp_nav_menu(array(
    	'container' => '',                              // remove nav container
    	'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)
    	'menu' => __( 'Footer Links', 'jointstheme' ),   // nav name
    	'menu_class' => 'sub-nav',      // adding custom nav class
    	'theme_location' => 'footer-links',             // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
    	'fallback_cb' => 'joints_footer_links_fallback'  // fallback function
	));
} /* end joints footer link */

// HEADER FALLBACK MENU
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => '',      // adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // before each link
        'link_after' => ''                             // after each link
	) );
}

// FOOTER FALLBACK MENU
function joints_footer_links_fallback() {
	/* you can put a default here if you like */
}

/*********************
SIDEBARS
*********************/

// SIDEBARS AND WIDGETIZED AREAS
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'jointstheme'),
		'description' => __('The first (primary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'jointstheme'),
		'description' => __('The offcanvas sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointstheme'),
		'description' => __('The second (secondary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!
// Pagination
function wp_pagination($pages = '', $range = 3)
{  
    global $wp_query, $wp_rewrite;  
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;  
    $pagination = array(  
        'base' => @add_query_arg('page','%#%'),  
        'format' => '',  
        'total' => $wp_query->max_num_pages,  
        'current' => $current,  
        'show_all' => true,  
        'type' => 'plain'  
    );  
    if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );  
    if ( !empty($wp_query->query_vars['s']) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );  
    echo '<div class="wp_pagination">'.paginate_links( $pagination ).'</div>';
}


/*********************
COMMENT LAYOUT
*********************/


/** Pagination */ 
function pagination_funtion() { // Get total number of pages global 
$wp_query; $total = $wp_query->max_num_pages;
 // Only paginate if we have more than one page 
 if ( $total > 1 ) { // Get the current page 
 if ( !$current_page = get_query_var('paged') ) $current_page = 1; $big = 999999999; 
 // Structure of "format" depends on whether we’re using pretty permalinks 
 $permalink_structure = get_option('permalink_structure'); $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/'; 
 echo paginate_links(array( 'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ), 'format' => $format, 
 'current' => $current_page, 'total' => $total, 'mid_size' => 2, 'type' => 'list' )); } } 
 /** END Pagination */


add_action('wp_enqueue_scripts', 'wpmidia_enqueue_masked_input');

function wpmidia_enqueue_masked_input(){

     wp_enqueue_script('masked-input', get_template_directory_uri().'/js/jquery.maskedinput.min.js', array('jquery'));

}
add_action('wp_footer', 'wpmidia_activate_masked_input');

function wpmidia_activate_masked_input(){
   if( is_page() ){ //mais uma vez, feito isso, o script abaixo só aparecerá na página Contato.
?>

         <script type="text/javascript">

                jQuery( function($){

                     $(".data").mask("99/99/9999");
                     $(".tel").mask("(99) 9999-9999");
                     $(".cpf").mask("999.999.999-99");
                     $(".cnpj").mask("99.999.999/9999-99");

                });

         </script>

<?php 
   }
}


show_admin_bar( false );
// Comment Layout
function joints_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('panel'); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix large-12 columns">
			<header class="comment-author">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<!-- custom gravatar call -->
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<?php printf(__('<cite class="fn">%s</cite>', 'jointstheme'), get_comment_author_link()) ?> on
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__(' F jS, Y - g:ia', 'jointstheme')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'jointstheme'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e('Your comment is awaiting moderation.', 'jointstheme') ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<!-- </li> is added by WordPress automatically -->
	<!--  background cover e login do login do site wp -->


<?php 


} // don't remove this bracket!

?>


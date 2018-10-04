<?php
// Funtion load scripts
function load_scripts() {
    // bootstrap scripts
        wp_enqueue_style( 'Bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all' );
        wp_enqueue_script( 'Bootstrap JS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
    // Theme scripts
        wp_enqueue_style( 'custom', get_template_directory_uri(). '/css/custom.css', array(), '1.0', 'all' );
        wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);
    // Font awesome
        wp_enqueue_style( 'FontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '', 'all' );
    }
    add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Funtion Main Menu
    register_nav_menus(
        array(
            'menu_principal' => 'Menu Principal'
        )
    );

// Funtion Footer Menu
    register_nav_menus(
        array(
            'menu_footer' => 'Menu Rodapé'
        )
    );

// Register Sidebar
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'		=> 'Sidebar home',
			'id'		=> 'sidebar-1',
			'description'	=> 'Barra lateral da página home',
			'before_widget'	=> '<div class="widget__wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget__title">',
			'after_title'	=> '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'		=> 'Sidebar blog',
			'id'		=> 'sidebar-2',
			'description'	=> 'Barra lateral da página blog',
			'before_widget'	=> '<div class="widget__wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget__title">',
			'after_title'	=> '</h2>',
		)
	);
}

// Include Custom Posts Theme
include 'includes/custom-posts.php';

// Remove Wordpress version
remove_action('wp_head', 'wp_generator');

// Remove Admin Bar in Front-End
add_filter('show_admin_bar', '__return_false');

// Change Wordpress footer info
add_filter('admin_footer_text', 'bl_admin_footer');
function bl_admin_footer() {
  echo 'Asimov, The Good Doctor foi desenvolvido por <a href="http://souzaty.com" title="Thiago Souza">Thiago Souza </a>';
}

// Add social network to users
add_filter('user_contactmethods', 'bl_profile_fields');
function bl_profile_fields($profile_fields) {
  // Adicionar novos campos
  $profile_fields['twitter']  = 'Usuário do Twitter';
  $profile_fields['facebook'] = 'URL para facebook';

  // Remover campos existentes
  unset($profile_fields['aim']);
  unset($profile_fields['jabber']);
  unset($profile_fields['yim']);

  return $profile_fields;
}

// Theme Support
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('video', 'image') );
    function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 90,
        'width'       => 160,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// Star Custom posts

  // Start CPT social media

  add_action('init', 'social_media_links_register');

  function social_media_links_register() {
      $eventos_permalink = 'social-media';
      $labels = array(

  			'name' => __('Social media', 'links social media.'),

  			'singular_name' => __('Social media', 'post type singular name'),

  			'add_new_item' => __('Adicionar novos links'),

  			'edit_item' => __('Editar Sala de Apoio'),

  			'new_item' => __('Nova Sala de Apoio Item'),

  			'view_item' => __('Ver item da salas de apoio'),

  			'parent_item_colon' => ''

  	);

    $args = array(

			'labels' => $labels,

			'public' => true,

			'publicly_queryable' => true,

			'show_ui' => true,

			'query_var' => true,

			'menu_icon' => 'dashicons-admin-home',

			'rewrite' => array('slug' => 'evento','with_front' => false),

			'capability_type' => 'post',

			'hierarchical' => false,

			'menu_position' => 60,

			'supports' => array(''),

	);

	register_post_type( 'social_media' , $args );

	flush_rewrite_rules();

}

add_action("admin_init", "campos_personalizados_social_media");

function campos_personalizados_social_media(){

	add_meta_box("facebook", "Facebook URL", "facebook", "social_media", "normal", "low");

	add_meta_box("twitter", "Twitter URL", "twitter", "social_media", "normal", "low");

	add_meta_box("instagram", "Instagram URL", "instagram", "social_media", "normal", "low");

	add_meta_box("github", "Github URL", "github", "social_media", "normal", "low");

    add_meta_box("linkedin", "Linkedin URL", "linkedin", "social_media", "normal", "low");

}

function facebook() {

	global $post;

	$custom = get_post_meta($post->ID);

	$facebook = $custom["facebook"][0];

	?>

	<input type="text" name="facebook" value="<?php echo $facebook; ?>" />

<?php

}

function twitter() {

	global $post;

	$custom = get_post_meta($post->ID);

	$twitter = $custom["twitter"][0];

	?>

	<input type="text" name="twitter" value="<?php echo $twitter; ?>" />

<?php

}

function instagram() {

	global $post;

	$custom = get_post_meta($post->ID);

	$instagram = $custom["instagram"][0];

	?>

	<input type="text" name="instagram" value="<?php echo $instagram; ?>" />

<?php

}

function github() {

	global $post;

	$custom = get_post_meta($post->ID);

	$github = $custom["github"][0];

	?>

	<input type="text" name="github" value="<?php echo $github; ?>" />

<?php

}

function linkedin() {

	global $post;

	$custom = get_post_meta($post->ID);

	$linkedin = $custom["linkedin"][0];

	?>

	<input type="text" name="linkedin" value="<?php echo $linkedin; ?>" />

<?php

}

add_action('save_post_social_media', 'save_details_post_social_media');

function save_details_post_social_media(){

	global $post;

	update_post_meta($post->ID, "facebook", $_POST["facebook"]);

	update_post_meta($post->ID, "twitter", $_POST["twitter"]);

	update_post_meta($post->ID, "instagram", $_POST["instagram"]);

	update_post_meta($post->ID, "github", $_POST["github"]);

    update_post_meta($post->ID, "linkedin", $_POST["linkedin"]);

}

/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page(){
    add_menu_page(
        __( 'Custom Menu Title', 'textdomain' ),
        'custom menu',
        'manage_options',
        'custompage',
        'my_custom_menu_page',
        'dashicons-admin-home',
        plugins_url( 'myplugin/images/icon.png' ),
        6
    );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );

/**
 * Display a custom menu page
 */
function my_custom_menu_page(){
    esc_html_e( 'Admin Page Test', 'textdomain' );
}

// Styling wp-login page
function login_styles() { ?>
 <style type="text/css">
 body {
     background: #fc5c7d !important; /* Old browsers */
     background: -moz-linear-gradient(45deg, #fc5c7d 0%, #6a82fb 100%) !important; /* FF3.6-15 */
     background: -webkit-linear-gradient(45deg, #fc5c7d 0%, #6a82fb 100%) !important;
     /* Chrome10-25,Safari5.1-6 */
     background: linear-gradient(45deg, #fc5c7d 0%, #6a82fb 100%) !important; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
     filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#fc5c7d', endColorstr='#6a82fb', GradientType=1); /* IE6-9 fallback on horizontal gradient */
     background-attachment: fixed !important;
 }
 #wp-submit {
     border: none !important;
     box-shadow: none !important;
     background: #662d91 !important;
     text-shadow: none !important;
     border-radius: 4px !important;
     -webkit-border-radius: 4px !important;
     color: #fff !important;
     display: block;
     width: 100% !important;
     margin: 30px 0 0 0 !important;
     font-size: 16px;
     padding: 5px 0 !important;
     height: auto !important;
     transition: all 0.5s;
 }
 #wp-submit:hover {
     background: #ec008c !important;
 }
 .login h1 a {
     background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/asimov-logo-login.svg') !important;
     background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/asimov-logo-login.svg') !important;
     background-size: 100% !important;
     background-position: center center !important;
     background-repeat: no-repeat;
     height: 35px !important;
     width: 320px !important;
 }
 .login #backtoblog a,
 .login #nav a {
     color: #fff !important;
 }
 </style>
<?php }

add_action('login_enqueue_scripts', 'login_styles', 10);

// Link logo login
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

// Mudar nome ao passar o mouse
function my_login_logo_url_title() {
    return 'The Good Doctor.';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>

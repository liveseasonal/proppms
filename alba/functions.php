<?php
$alba_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/visual/shortcodes.php';
require_once get_template_directory() . '/visual/vc_shortcode.php';
//Theme Set up:
function alba_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
  load_theme_textdomain('alba', $lang);

    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu: Chosen menu in Home page, single, blog, pages ...', 'alba' ),
	) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'alba_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;

function alba_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'alba' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Caveat|Open+Sans:300,400,700' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}


function alba_theme_scripts_styles() {
	$alba_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'alba-fonts', alba_fonts_url(), array(), '1.0.0' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css');
    wp_enqueue_style( 'swiper', get_template_directory_uri().'/css/swiper.css');
    wp_enqueue_style( 'aos', get_template_directory_uri().'/css/aos.css');
    wp_enqueue_style( 'bootstrap-slider', get_template_directory_uri().'/css/bootstrap-slider.css');
    wp_enqueue_style( 'alba-css', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style( 'alba-style', get_stylesheet_uri(), array(), '2016-06-23' );

    if(isset($alba_redux_demo['chosen-color']) && $alba_redux_demo['chosen-color']==1){
    wp_enqueue_style( 'color', get_template_directory_uri().'/framework/color.php');
    } 

if(isset($alba_redux_demo['rtl']) && $alba_redux_demo['rtl']==1){
  wp_enqueue_style( 'rtl', get_template_directory_uri().'/rtl.css');  }

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
  wp_enqueue_script( 'comment-reply' );

  //Javascript 
    wp_enqueue_script("popper-min", get_template_directory_uri()."/js/popper.min.js",array(),false,true);
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("pace", get_template_directory_uri()."/js/pace.min.js",array(),false,true);
   wp_enqueue_script("easing-min", get_template_directory_uri()."/js/jquery.easing.min.js",array(),false,true);
   wp_enqueue_script("swiper", get_template_directory_uri()."/js/swiper.jquery.min.js",array(),false,true);
   wp_enqueue_script("aos", get_template_directory_uri()."/js/aos.min.js",array(),false,true);
   wp_enqueue_script("bootstrap-slider", get_template_directory_uri()."/js/bootstrap-slider.min.js",array(),false,true);
   wp_enqueue_script("validate", get_template_directory_uri()."/js/jquery.validate.min.js",array(),false,true);
   wp_enqueue_script("modernizr", get_template_directory_uri()."/js/modernizr-2.8.3.min.js",array(),false,true);
   if(is_page_template('page-templates/template-home.php')){
   wp_enqueue_script("forms", get_template_directory_uri()."/js/forms.min.js",array(),false,true);
 }
   wp_enqueue_script("alba-main", get_template_directory_uri()."/js/main.js",array(),false,true);
   }
add_action( 'wp_enqueue_scripts', 'alba_theme_scripts_styles' );

function alba_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'alba_mime_types');

//Custom Excerpt Function
function alba_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}
// Widget Sidebar
function alba_widgets_init() {
	register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'alba' ),
        'id'            => 'sidebar-1',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'alba' ),        
		'before_widget' => '<div id="%1$s" class="widget %2$s">',        
		'after_widget'  => '</div>',        
		'before_title'  => '<h4 class="regular mb-3">',        
		'after_title'   => '</h4> '
    ) ); 
  register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget Area', 'alba' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'alba' ),
    'before_widget' => '<div class="footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="color-1">',
    'after_title'   => '</h4>',
  ) );
  
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget Area', 'alba' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'alba' ),
    'before_widget' => '<div class="footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="color-1">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Three Widget Area', 'alba' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'alba' ),
    'before_widget' => '<div class="footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="color-1">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Four Widget Area', 'alba' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'alba' ),
    'before_widget' => '<div class="footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="color-1">',
    'after_title'   => '</h4>',
  ) );
}
add_action( 'widgets_init', 'alba_widgets_init' );

//function tag widgets
function alba_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'alba_tag_cloud_widget' );
function alba_excerpt() {
  $alba_redux_demo = get_option('redux_demo');
  if(isset($alba_redux_demo['blog_excerpt'])){
    $limit = $alba_redux_demo['blog_excerpt'];
  }else{
    $limit = 80;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//pagination
if ( !function_exists('alba_pagination') ) {
  function alba_pagination() {
    if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
      return '';
    } ?>
      <?php if ( get_next_posts_link() ) : ?>
        <li class="previous btn btn-6"><?php next_posts_link( htmlspecialchars_decode(esc_html__('Older <i class="fa-angle-left"></i>', 'alba') )); ?></li>
      <?php endif; ?>
      <?php if ( get_previous_posts_link() ) : ?>
        <li class="next btn btn-6"><?php previous_posts_link( htmlspecialchars_decode(esc_html__('<i class="fa-angle-right"></i> Newer', 'alba') )); ?></li>
      <?php endif; ?>
  <?php }
}

function alba_search_form( $form ) {
    $form = '
  <form  method="get" class="search-form" action="' . esc_url(home_url('/')) . '"> 
            <input type="search" class="form-control" placeholder="'.esc_html__('Search', 'alba').'" value="' . get_search_query() . '" name="s" id="s"> 
  </form>
	';
    return $form;
}
add_filter( 'get_search_form', 'alba_search_form' );
//Custom comment List:

// Comment Form
function alba_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
    <li class="media">
      <?php echo get_avatar($comment,$size='45' ); ?>

      <div class="media-body">
          <h5 class="my-0"><?php printf( esc_html__('%s','alba'), get_comment_author_link()) ?></h5><span><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>  </span>
          <time class="small" datetime="<?php $d = "F d , Y"; printf(get_comment_date($d)) ?>"><?php $d = "F d , Y"; printf(get_comment_date($d)) ?></time>
<div class="comment_right">
          <p> <?php comment_text() ?></p>
          </div>
      </div>
  </li>
<?php
}


function alba_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
    $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
    $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
    $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
    $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
    $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
    $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
    $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
    $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
    $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
    $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
    $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
    $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'alba_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){

vc_add_param('vc_row',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Chosen type row', 'alba' ),
                             'param_name' => 'type_row',
                             'value' => array(
                                esc_html__( 'None Section', 'alba' ) => 'type2',
                                esc_html__( 'Features', 'alba' ) => 'features',
                                esc_html__( 'Choose', 'alba' ) => 'choose',
                                esc_html__( 'FAQ', 'alba' ) => 'faqs',
                                esc_html__( 'Form', 'alba' ) => 'form',
                                esc_html__( 'Section', 'alba' ) => 'section',
                                esc_html__( 'Section list', 'alba' ) => 'section2',
                                esc_html__( 'Form Header', 'alba' ) => 'form2',
                                esc_html__( 'Pricing', 'alba' ) => 'pricing',
                             ),
                             'description' => esc_html__( 'Select type row', 'alba' )
      )); 

vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'alba'),
                              "param_name" => "ses_title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "alba"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Subtitle', 'alba'),
                              "param_name" => "ses_subtitle",
                              "value" => "",
                              "description" => esc_html__("Section Subtitle, Leave a blank do not show frontend.", "alba"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Desc', 'alba'),
                              "param_name" => "ses_desc",
                              "value" => "",
                              "description" => esc_html__("Section Desc, Leave a blank do not show frontend.", "alba"),   
    ));
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'alba' ),
                             'param_name' => 'ses_image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'alba' )
      ));  

// Add new Param in Column  
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Title', 'alba'),
                              "param_name" => "title",
                              "value" => "",
                              "description" => esc_html__("Title of column", "alba"),      
                            ) 
    );

vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Subtitle', 'alba'),
                              "param_name" => "subtitle",
                              "value" => "",
                              "description" => esc_html__("Subtitle of column", "alba"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Container Class', 'alba'),
                              "param_name" => "wap_class",
                              "value" => "",
                              "description" => esc_html__("Container Class", "alba"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column id', 'alba'),
                              "param_name" => "column_id",
                              "value" => "",
                              "description" => esc_html__("Column ID, Only use for content slider.", "alba"),      
                            ) 
    );  
vc_add_param('vc_column',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Type', 'alba' ),
                             'param_name' => 'type',
                             'value' => array(
                                esc_html__( 'None', 'alba' ) => 'none',
                                esc_html__( 'Column', 'alba' ) => 'column',
                                esc_html__( 'Choose', 'alba' ) => 'choose',
                                esc_html__( 'Tab Content', 'alba' ) => 'tab-content',
                                esc_html__( 'List unstyled', 'alba' ) => 'unstyled',

                             ),
                             'description' => esc_html__( 'Select type section content', 'alba' )
      )); 
vc_add_param('vc_column',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'alba' ),
                             'param_name' => 'image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'alba' )
      )); 
}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'alba_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function alba_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'      => esc_html__( 'Contact Form 7', 'alba' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'alba' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
        array(
            'name'               => esc_html__( 'WPBakery Visual Composer', 'alba' ), // The plugin name.
            'slug'               => 'visualcomposer',
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'                     => esc_html__( 'Alba Common', 'alba' ),
            'slug'                     => 'alba-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/alba-common.zip',
        )
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'alba' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'alba' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'alba' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'alba' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'alba' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'alba' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'alba' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'alba' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'alba' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'alba' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'alba' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'alba' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'alba' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'alba' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'alba' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'alba' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'alba' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}



function alba_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import Alba',
            'import_file_url'            => 'http://shtheme.com/import/alba/content.xml',
            'import_widget_file_url'     => 'http://shtheme.com/import/alba/widget.json',
            'import_preview_image_url'   => 'http://shtheme.com/import/alba/Image-Preview.jpg',
            'import_notice'              => esc_html__( 'Import data example alba', 'alba' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'alba_import_files' );




function alba_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'primary' );
    

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'alba_after_import_setup' );




?>
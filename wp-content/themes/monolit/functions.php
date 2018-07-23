<?php

/**
 * @package Monolit - Responsive Architecture Wordpress Theme
 * @author Cththemes - http://themeforest.net/user/cththemes
 * @date: 17-2-2016
 *
 * @copyright  Copyright ( C ) 2015 cththemes.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

if (!isset($monolit_options) && file_exists(get_template_directory() . '/functions/admin-config.php')) {
    require_once (get_template_directory() . '/functions/admin-config.php');
}
function monolit_removeDemoModeLink() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
//add_action('init', 'monolit_removeDemoModeLink');



if (!function_exists('monolit_setup_theme')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Monolit 1.0
     */

    function monolit_setup_theme() {
        global $monolit_options;
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         */
        load_theme_textdomain( 'monolit', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        
        add_theme_support('post-thumbnails');

        if(isset($monolit_options['enable_custom_sizes']) && $monolit_options['enable_custom_sizes']){

            //get thumbnail sizes option
            $sizes = monolit_get_thumbnail_size();//var_dump($sizes);die;
            
            add_image_size('monolitfuls-thumb', $sizes['fuls']['width'], $sizes['fuls']['height'], $sizes['fuls']['hard_crop']);
            add_image_size('monolithoz-thumb', $sizes['hoz']['width'], $sizes['hoz']['height'], $sizes['hoz']['hard_crop']);
            add_image_size('monolithoztwover-thumb', $sizes['hoztwover']['width'], $sizes['hoztwover']['height'], $sizes['hoztwover']['hard_crop']);
            add_image_size('monolithozthreever-thumb', $sizes['hozthreever']['width'], $sizes['hozthreever']['height'], $sizes['hozthreever']['hard_crop']);

            add_image_size('monolitfolio-parallax', $sizes['fopar']['width'], $sizes['fopar']['height'], $sizes['fopar']['hard_crop']);

            

            add_image_size('monolitmasonry-size-one', $sizes['galma1']['width'], $sizes['galma1']['height'], $sizes['galma1']['hard_crop']);
            add_image_size('monolitmasonry-size-two', $sizes['galma2']['width'], $sizes['galma2']['height'], $sizes['galma2']['hard_crop']);
            add_image_size('monolitmasonry-size-three', $sizes['galma3']['width'], $sizes['galma3']['height'], $sizes['galma3']['hard_crop']);

            add_image_size('monolitmember2-thumb', $sizes['team2']['width'], $sizes['team2']['height'], $sizes['team2']['hard_crop']);
            add_image_size('monolit-service-thumb', $sizes['service']['width'], $sizes['service']['height'], $sizes['service']['hard_crop']);
            add_image_size('monolitblog-thumb', $sizes['blog']['width'], $sizes['blog']['height'], $sizes['blog']['hard_crop']);
            
            add_image_size('monolit-carousel', esc_html_x('374', 'carousel slider width','monolit' ), esc_html_x('623', 'carousel slider height', 'monolit' ), true );
            add_image_size('monolitfolio-carousel', esc_html_x('1183', 'portfolio slider width','monolit' ), esc_html_x('763', 'portfolio slider height', 'monolit' ), true );
        }

        // This theme uses wp_nav_menu() in one location.
        register_nav_menu('primary', esc_html__('Primary Menu (Main Navigation)', 'monolit'));
        register_nav_menu('onepage', esc_html__('One Page Menu (with Scrolling Effect)', 'monolit'));
        
        // This theme uses its own gallery styles.
        if (isset($monolit_options['dynamic_menus']) && !empty($monolit_options['dynamic_menus'])) {
            foreach ($monolit_options['dynamic_menus'] as $key => $location) {
                register_nav_menu(sanitize_title($location), $location);
            }
        }
        
        // to output valid HTML5.
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list'));
        
        //Post formats
        add_theme_support('post-formats', array('audio', 'gallery', 'image', 'link', 'quote', 'status', 'video'));

        add_theme_support('custom-header');

        add_theme_support('custom-background');

        // from version 2.0
        add_theme_support( 'woocommerce' );
        // add_theme_support( 'wc-product-gallery-zoom' );
        //add_theme_support( 'wc-product-gallery-lightbox' );
        //add_theme_support( 'wc-product-gallery-slider' );
        
        add_filter('use_default_gallery_style', '__return_false');

        add_editor_style(get_template_directory_uri().'/inc/assets/custom-editor-style.css');
    }
}
add_action('after_setup_theme', 'monolit_setup_theme');

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Monolit 1.0
 */
function monolit_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'monolit_content_width', 806 );
}

add_action( 'after_setup_theme', 'monolit_content_width', 0 );


if(!function_exists('monolit_get_thumbnail_size')){
    function monolit_get_thumbnail_size(){
        global $monolit_options;
        $sizes = array();

        //Horizontal Slider
        if(isset($monolit_options['fullscreen_thumb'])){
            $sizes['fuls'] = array();
            $sizes['fuls']['width'] = isset($monolit_options['fullscreen_thumb']['width']) ? $monolit_options['fullscreen_thumb']['width'] : '1356';
            $sizes['fuls']['height'] = isset($monolit_options['fullscreen_thumb']['height']) ? $monolit_options['fullscreen_thumb']['height'] : '581';
            $sizes['fuls']['hard_crop'] = isset($monolit_options['fullscreen_thumb']['hard_crop']) ? $monolit_options['fullscreen_thumb']['hard_crop'] : 1;
        }else{
            $sizes['fuls'] = array(
                'width' => '1356',
                'height' => '581',
                'hard_crop' => 1,
            );
        }

        //Horizontal Slider
        if(isset($monolit_options['horizontal_slider_thumb'])){
            $sizes['hoz'] = array();
            $sizes['hoz']['width'] = isset($monolit_options['horizontal_slider_thumb']['width']) ? $monolit_options['horizontal_slider_thumb']['width'] : '9999';
            $sizes['hoz']['height'] = isset($monolit_options['horizontal_slider_thumb']['height']) ? $monolit_options['horizontal_slider_thumb']['height'] : '658';
            $sizes['hoz']['hard_crop'] = isset($monolit_options['horizontal_slider_thumb']['hard_crop']) ? $monolit_options['horizontal_slider_thumb']['hard_crop'] : 0;
        }else{
            $sizes['hoz'] = array(
                'width' => '9999',
                'height' => '658',
                'hard_crop' => 0,
            );
        }

        //Portfolio Horizontal - Two Vertical Columns
        if(isset($monolit_options['horizontal_twover_thumb'])){
            $sizes['hoztwover'] = array();
            $sizes['hoztwover']['width'] = isset($monolit_options['horizontal_twover_thumb']['width']) ? $monolit_options['horizontal_twover_thumb']['width'] : '9999';
            $sizes['hoztwover']['height'] = isset($monolit_options['horizontal_twover_thumb']['height']) ? $monolit_options['horizontal_twover_thumb']['height'] : '329';
            $sizes['hoztwover']['hard_crop'] = isset($monolit_options['horizontal_twover_thumb']['hard_crop']) ? $monolit_options['horizontal_twover_thumb']['hard_crop'] : 0;
        }else{
            $sizes['hoztwover'] = array(
                'width' => '9999',
                'height' => '329',
                'hard_crop' => 0,
            );
        }

        //Portfolio Horizontal - Three Vertical Columns
        if(isset($monolit_options['horizontal_threever_thumb'])){
            $sizes['hozthreever'] = array();
            $sizes['hozthreever']['width'] = isset($monolit_options['horizontal_threever_thumb']['width']) ? $monolit_options['horizontal_threever_thumb']['width'] : '9999';
            $sizes['hozthreever']['height'] = isset($monolit_options['horizontal_threever_thumb']['height']) ? $monolit_options['horizontal_threever_thumb']['height'] : '219';
            $sizes['hozthreever']['hard_crop'] = isset($monolit_options['horizontal_threever_thumb']['hard_crop']) ? $monolit_options['horizontal_threever_thumb']['hard_crop'] : 0;
        }else{
            $sizes['hozthreever'] = array(
                'width' => '9999',
                'height' => '219',
                'hard_crop' => 0,
            );
        }

        //Masonry size one
        if(isset($monolit_options['galmasonry_thumbnail_size_one'])){
            $sizes['galma1'] = array();
            $sizes['galma1']['width'] = isset($monolit_options['galmasonry_thumbnail_size_one']['width']) ? $monolit_options['galmasonry_thumbnail_size_one']['width'] : '390';
            $sizes['galma1']['height'] = isset($monolit_options['galmasonry_thumbnail_size_one']['height']) ? $monolit_options['galmasonry_thumbnail_size_one']['height'] : '9999';
            $sizes['galma1']['hard_crop'] = isset($monolit_options['galmasonry_thumbnail_size_one']['hard_crop']) ? $monolit_options['galmasonry_thumbnail_size_one']['hard_crop'] : 0;
        }else{
            $sizes['galma1'] = array(
                'width' => '390',
                'height' => '9999',
                'hard_crop' => 0,
            );
        }


        //Masonry size two
        if(isset($monolit_options['galmasonry_thumbnail_size_two'])){
            $sizes['galma2'] = array();
            $sizes['galma2']['width'] = isset($monolit_options['galmasonry_thumbnail_size_two']['width']) ? $monolit_options['galmasonry_thumbnail_size_two']['width'] : '784';
            $sizes['galma2']['height'] = isset($monolit_options['galmasonry_thumbnail_size_two']['height']) ? $monolit_options['galmasonry_thumbnail_size_two']['height'] : '9999';
            $sizes['galma2']['hard_crop'] = isset($monolit_options['galmasonry_thumbnail_size_two']['hard_crop']) ? $monolit_options['galmasonry_thumbnail_size_two']['hard_crop'] : 0;
        }else{
            $sizes['galma2'] = array(
                'width' => '784',
                'height' => '9999',
                'hard_crop' => 0,
            );
        }

        //Masonry size three
        if(isset($monolit_options['galmasonry_thumbnail_size_three'])){
            $sizes['galma3'] = array();
            $sizes['galma3']['width'] = isset($monolit_options['galmasonry_thumbnail_size_three']['width']) ? $monolit_options['galmasonry_thumbnail_size_three']['width'] : '1178';
            $sizes['galma3']['height'] = isset($monolit_options['galmasonry_thumbnail_size_three']['height']) ? $monolit_options['galmasonry_thumbnail_size_three']['height'] : '9999';
            $sizes['galma3']['hard_crop'] = isset($monolit_options['galmasonry_thumbnail_size_three']['hard_crop']) ? $monolit_options['galmasonry_thumbnail_size_three']['hard_crop'] : 0;
        }else{
            $sizes['galma3'] = array(
                'width' => '1178',
                'height' => '9999',
                'hard_crop' => 0,
            );
        }

        //Portfolio Parallax
        if(isset($monolit_options['fopar_thumbnail_size_one'])){
            $sizes['fopar'] = array();
            $sizes['fopar']['width'] = isset($monolit_options['fopar_thumbnail_size_one']['width']) ? $monolit_options['fopar_thumbnail_size_one']['width'] : '678';
            $sizes['fopar']['height'] = isset($monolit_options['fopar_thumbnail_size_one']['height']) ? $monolit_options['fopar_thumbnail_size_one']['height'] : '437';
            $sizes['fopar']['hard_crop'] = isset($monolit_options['fopar_thumbnail_size_one']['hard_crop']) ? $monolit_options['fopar_thumbnail_size_one']['hard_crop'] : 1;
        }else{
            $sizes['fopar'] = array(
                'width' => '678',
                'height' => '437',
                'hard_crop' => 1,
            );
        }

        //Team Member Parallax
        if(isset($monolit_options['team_member2_thumb'])){
            $sizes['team2'] = array();
            $sizes['team2']['width'] = isset($monolit_options['team_member2_thumb']['width']) ? $monolit_options['team_member2_thumb']['width'] : '376';
            $sizes['team2']['height'] = isset($monolit_options['team_member2_thumb']['height']) ? $monolit_options['team_member2_thumb']['height'] : '564';
            $sizes['team2']['hard_crop'] = isset($monolit_options['team_member2_thumb']['hard_crop']) ? $monolit_options['team_member2_thumb']['hard_crop'] : 1;
        }else{
            $sizes['team2'] = array(
                'width' => '376',
                'height' => '564',
                'hard_crop' => 1,
            );
        }

        //Service Bg
        if(isset($monolit_options['service_bg_thumb'])){
            $sizes['service'] = array();
            $sizes['service']['width'] = isset($monolit_options['service_bg_thumb']['width']) ? $monolit_options['service_bg_thumb']['width'] : '572';
            $sizes['service']['height'] = isset($monolit_options['service_bg_thumb']['height']) ? $monolit_options['service_bg_thumb']['height'] : '369';
            $sizes['service']['hard_crop'] = isset($monolit_options['service_bg_thumb']['hard_crop']) ? $monolit_options['service_bg_thumb']['hard_crop'] : 1;
        }else{
            $sizes['service'] = array(
                'width' => '573',
                'height' => '369',
                'hard_crop' => 1,
            );
        }


        //Blog Post
        if(isset($monolit_options['blog_image_thumb'])){
            $sizes['blog'] = array();
            $sizes['blog']['width'] = isset($monolit_options['blog_image_thumb']['width']) ? $monolit_options['blog_image_thumb']['width'] : '862';
            $sizes['blog']['height'] = isset($monolit_options['blog_image_thumb']['height']) ? $monolit_options['blog_image_thumb']['height'] : '575';
            $sizes['blog']['hard_crop'] = isset($monolit_options['blog_image_thumb']['hard_crop']) ? $monolit_options['blog_image_thumb']['hard_crop'] : 1;
        }else{
            $sizes['blog'] = array(
                'width' => '862',
                'height' => '575',
                'hard_crop' => 1,
            );
        }

        return $sizes;
    }
}

/**
 * Register widget area.
 *
 * @since Monolit 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function monolit_register_sidebars() {
    
    register_sidebar(
        array(
            'name' => esc_html__('Main Sidebar', 'monolit'), 
            'id' => 'sidebar-1', 
            'description' => esc_html__('Appears in the sidebar section of the site.', 'monolit'), 
            'before_widget' => '<div id="%1$s" class="widget %2$s">', 
            'after_widget' => '</div>', 
            'before_title' => '<h3>', 
            'after_title' => '</h3><div class="clearfix"></div>',
        )
    );
    
    register_sidebar(
        array(
            'name' => esc_html__('Page Sidebar', 'monolit'), 
            'id' => 'sidebar-2', 
            'description' => esc_html__('Appears in the sidebar section of the page template.', 'monolit'), 
            'before_widget' => '<div id="%1$s" class="widget cth %2$s">', 
            'after_widget' => '</div>', 
            'before_title' => '<h3>', 
            'after_title' => '</h3><div class="clearfix"></div>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Shop Sidebar', 'monolit'), 
            'id' => 'sidebar-shop', 
            'description' => esc_html__('Appears in the sidebar section of shop pages.', 'monolit'), 
            'before_widget' => '<div id="%1$s" class="widget shop-widget cth %2$s">', 
            'after_widget' => '</div>', 
            'before_title' => '<h3>', 
            'after_title' => '</h3><div class="clearfix"></div>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Member Sidebar', 'monolit'), 
            'id' => 'sidebar-3', 
            'description' => esc_html__('Appears in the sidebar section of team member pages', 'monolit'), 
            'before_widget' => '<div id="%1$s" class="widget cth %2$s">', 
            'after_widget' => '</div>', 
            'before_title' => '<h3>', 
            'after_title' => '</h3><div class="clearfix"></div>',
        )
    );



    register_sidebar(
        array(
            'name' => esc_html__('Social Share', 'monolit'), 
            'id' => 'social_share_widget', 
            'description' => esc_html__('Widget area for Share menu. To use this area you must leave Share Names field on Monolit Options &gt; Social Share Settings empty', 'monolit'), 
            'before_widget' => '<div id="%1$s" class="widget %2$s">', 
            'after_widget' => '</div>', 
            'before_title' => '<h3 class="widget-title">', 
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Footer Columns Widget', 'monolit'), 
            'id' => 'footer_columns_widget', 
            'description' => esc_html__('Appears above the footer copyright content.', 'monolit'), 
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s ' . monolit_slbd_count_widgets('footer_columns_widget') . '">', 
            'after_widget' => '</div>', 
            'before_title' => '<h3 class="widget-title">', 
            'after_title' => '</h3>',
        )
    );
}

add_action('widgets_init', 'monolit_register_sidebars');

if(!function_exists('monolit_slbd_count_widgets')){
   /**
     * Count number of widgets in a sidebar
     * Used to add classes to widget areas so widgets can be displayed one, two, three or four per row
     */
    function monolit_slbd_count_widgets($sidebar_id) {
        
        // If loading from front page, consult $_wp_sidebars_widgets rather than options
        // to see if wp_convert_widget_settings() has made manipulations in memory.
        global $_wp_sidebars_widgets;
        if (empty($_wp_sidebars_widgets)):
            $_wp_sidebars_widgets = get_option('sidebars_widgets', array());
        endif;
        
        $sidebars_widgets_count = $_wp_sidebars_widgets;
        
        if (isset($sidebars_widgets_count[$sidebar_id])):
            $widget_count = count($sidebars_widgets_count[$sidebar_id]);
            $widget_classes = 'widget-count-' . count($sidebars_widgets_count[$sidebar_id]);
            if ($widget_count % 6 == 0 && $widget_count >= 6):
                
                // Six widgets er row if there are exactly four or more than six
                $widget_classes.= ' col-md-2';
            elseif ($widget_count % 4 == 0 && $widget_count >= 4):
                
                // Four widgets er row if there are exactly four or more than six
                $widget_classes.= ' col-md-3';
            elseif ($widget_count % 3 == 0 && $widget_count >= 3):
                
                // Three widgets per row if there's three or more widgets
                $widget_classes.= ' col-md-4';
            elseif (2 == $widget_count):
                
                // Otherwise show two widgets per row
                $widget_classes.= ' col-md-6';
            elseif (1 == $widget_count):
                
                // Otherwise show two widgets per row
                $widget_classes.= ' col-md-12';
            endif;
            
            return $widget_classes;
        endif;
    } 
}

//For IE
function monolit_script_ie() {
    global $monolit_options;
    
    echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->';
}
//add_action('wp_head', 'monolit_script_ie');

/**
 * Enqueue scripts and styles.
 *
 * @since Monolit 1.0
 */

if (!function_exists('monolit_scripts_styles')) {
    function monolit_scripts_styles() {
        global $monolit_options;
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
        wp_enqueue_script("monolit-js-plugins", get_template_directory_uri() . "/js/plugins.js", array('jquery'), null, true);
        wp_enqueue_script("monolit-scripts", get_template_directory_uri() . "/js/scripts.js", array(), null, true);
        wp_localize_script( 'monolit-scripts', '_monolit', array(
            'shuffle_off' => $monolit_options['disable_shuffle_script'],
            'parallax_off' => $monolit_options['disable_parallax_effect'],
            'enable_image_click' => monolit_global_var('enable_image_click')
        ) );
        
        //wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css',);
        wp_enqueue_style('monolit-css-plugins', get_template_directory_uri() . '/css/plugins.css', array(), null );
        wp_enqueue_style('monolit-style', get_stylesheet_uri(), array(), null);
        wp_enqueue_style('monolit-custom-style', get_stylesheet_directory_uri() . '/css/custom.css', array(), null);
        if ($monolit_options['override-preset']) {
            $inline_style = monolit_overridestyle();
            if (!empty($inline_style)) {
                wp_add_inline_style('monolit-custom-style', $inline_style);
            }
        }
        
        $inline_custom_style = trim($monolit_options['custom-css']);

        if(isset($monolit_options['custom-css-medium']) && !empty($monolit_options['custom-css-medium'])){
            $inline_custom_style .= '@media only screen and  (max-width: 1036px){'.trim($monolit_options['custom-css-medium']).'}';
        }
        if(isset($monolit_options['custom-css-tablet']) && !empty($monolit_options['custom-css-tablet'])){
            $inline_custom_style .= '@media only screen and  (max-width: 768px){'.trim($monolit_options['custom-css-tablet']).'}';
        }
        if(isset($monolit_options['custom-css-mobile']) && !empty($monolit_options['custom-css-mobile'])){
            $inline_custom_style .= '@media only screen and  (max-width: 640px){'.trim($monolit_options['custom-css-mobile']).'}';
        }
        
        if (!empty($inline_custom_style)) {
            wp_add_inline_style('monolit-custom-style', monolit_stripWhitespace($inline_custom_style) );
        }
    }
}
add_action('wp_enqueue_scripts', 'monolit_scripts_styles');

/**
 * Enqueue admin scripts and styles.
 *
 * @since Monolit 1.0
 */

if (!function_exists('monolit_enqueue_admin_scripts')) {
    function monolit_enqueue_admin_scripts() {
        
        wp_enqueue_style('monolitadmin-styles', get_template_directory_uri() . '/inc/assets/admin_styles.css');
    }
}
add_action('admin_enqueue_scripts', 'monolit_enqueue_admin_scripts');


/**
 * Modify menu link class attribute
 *
 * @since Monolit 1.0
 */
add_filter('nav_menu_css_class', 'monolit_nav_menu_css_class_func', 10, 2);

$monolit_menu_link_class = array();

function monolit_nav_menu_css_class_func($classes, $item) {
    global $monolit_menu_link_class;
    $monolit_menu_link_class = array();
    $external_menu = array_search("external", $classes);
    if ($external_menu !== false) {
        $monolit_menu_link_class[] = 'external';
    }
    //scroll menu for multipage menu
    $menu_scroll_link_menu = array_search("menu-scroll-link", $classes);
    if ($menu_scroll_link_menu !== false) {
        $monolit_menu_link_class[] = 'menu-scroll-link';
    }
    $current_menu = array_search("current-menu-item", $classes);
    if ($current_menu !== false) {
        $monolit_menu_link_class[] = 'act-link';
    }
    $current_menu_ancestor = array_search("current-menu-ancestor", $classes);
    if ($current_menu_ancestor !== false) {
        $monolit_menu_link_class[] = 'ancestor-act-link';
    }
    $current_menu_parent = array_search("current-menu-parent", $classes);
    if ($current_menu_parent !== false) {
        $monolit_menu_link_class[] = 'parent-act-link';
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'monolit_nav_menu_link_attributes_func', 10, 3);

function monolit_nav_menu_link_attributes_func($atts, $item, $args) {
    global $monolit_menu_link_class;
    if (!empty($monolit_menu_link_class)) {
        $atts['class'] = implode(" ", $monolit_menu_link_class);
    }
    
    return $atts;
}

/**
 * Change posts per page setting for portfolio archive pages.
 *
 * @since Monolit 1.0
 */
function monolit_pagesize($query) {
    global $monolit_options;
    
    if (is_admin() || !$query->is_main_query()) return;
    
    if (is_post_type_archive('portfolio') || is_tax('portfolio_cat')) {
        
        // Display 50 posts for a custom post type called 'portfolio'
        if (isset($monolit_options['folio_posts_per_page'])) {
            $query->set('posts_per_page', $monolit_options['folio_posts_per_page']);
        }
        // oder portfolio posts
        if (isset($monolit_options['folio_archive_orderby'])) {
            $query->set('orderby', $monolit_options['folio_archive_orderby']);
        }
        if (isset($monolit_options['folio_archive_order'])) {
            $query->set('order', $monolit_options['folio_archive_order']);
        }
        return;
    }
    if (is_post_type_archive('product') || is_tax('product_cat') || is_tax('product_tag')) {
        if (isset($monolit_options['shop_posts_per_page'])) {
            $query->set('posts_per_page', $monolit_options['shop_posts_per_page']);
        }
        return;
    }
    if(is_post_type_archive('monolit_member' )){
        
        if (isset($monolit_options['member_posts_per_page'])) {
            $query->set('posts_per_page', $monolit_options['member_posts_per_page']);
        }
        // oder portfolio posts
        if (isset($monolit_options['member_archive_orderby'])) {
            $query->set('orderby', $monolit_options['member_archive_orderby']);
        }
        if (isset($monolit_options['member_archive_order'])) {
            $query->set('order', $monolit_options['member_archive_order']);
        }

        return;
    }

    
}
add_action('pre_get_posts', 'monolit_pagesize', 1);

if(!function_exists('monolit_breadcrumbs')){
    function monolit_breadcrumbs() {
               
        // Settings
        $separator          = esc_html__('/','monolit');//'&gt;';
        $breadcrums_id      = 'breadcrumb';
        $breadcrums_class   = 'main-breadcrumb creat-list';
        $home_title         = esc_html__('Home','monolit');
        $blog_title         = esc_html__('Blog','monolit');
         
        // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
        // $custom_taxonomy    = 'product_cat,portfolio_cat,cth_speaker';
        $custom_taxonomy    = '';

        $custom_post_types = array(
                                'portfolio' => esc_html_x('Portfolio','portfolio archive in breadcrumb','monolit'),
                                'product' => esc_html_x('Products','product archive in breadcrumb','monolit'),
                                'monolit_member' => esc_html_x('Team','Team archive in breadcrumb','monolit'),
                            );
          
        // Get the query & post information
        global $post,$wp_query;
          
        // Do not display on the homepage
        if ( !is_front_page() ) {
          
            // Build the breadcrums
            echo '<ul id="' . esc_attr($breadcrums_id ) . '" class="' . esc_attr($breadcrums_class ) . '">';
              
            // Home page
            echo '<li class="item-home"><a class="bread-link bread-home" href="' . esc_url(get_home_url(null,'/') ) . '" title="' . esc_attr($home_title ) . '">' . esc_attr($home_title ) . '</a></li>';

            if(is_home()){
                // Blog page
                echo '<li class="item-current item-blog"><strong class="bread-current item-blog">' . esc_attr($blog_title ) . '</strong></li>';
            }
              
            if ( is_archive() && !is_tax() ) {

                // If post is a custom post type
                $post_type = get_post_type();

                if($post_type && array_key_exists($post_type, $custom_post_types)){
                    echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><strong class="bread-current bread-archive">' . $custom_post_types[$post_type] . '</strong></li>';
                }else{
                     echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . get_the_archive_title() . '</strong></li>';
                }
                 
            } else if ( is_archive() && is_tax() ) {
                 
                // If post is a custom post type
                $post_type = get_post_type();
                 
                // If it is a custom post type display name and link
                if($post_type && $post_type != 'post') {
                     
                    $post_type_object = get_post_type_object($post_type);
                    $post_type_archive = get_post_type_archive_link($post_type);
                 
                    echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . esc_url($post_type_archive ) . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                 
                }
                 
                $custom_tax_name = get_queried_object()->name;
                echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
                 
            } else if ( is_single() ) {
                
                // If post is a custom post type
                $post_type = get_post_type();
                $last_category = '';
                // If it is a custom post type (not support custom taxonomy) display name and link
                if( !in_array( $post_type, array('post','portfolios') ) ) {
                     
                    $post_type_object = get_post_type_object($post_type);
                    $post_type_archive = get_post_type_archive_link($post_type);

                    if(array_key_exists($post_type, $custom_post_types)){
                        echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . esc_url($post_type_archive ) . '" title="' . $custom_post_types[$post_type] . '">' . $custom_post_types[$post_type] . '</a></li>';
                    }else{
                        echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . esc_url($post_type_archive ) . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                    }
                    
                    echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                }elseif($post_type == 'post'){
                    // Get post category info
                    $category = get_the_category();
                     
                    // Get last category post is in
                    
                    if($category){
                        $last_cateogries = array_values($category);
                        $last_category = end($last_cateogries);
                     
                        // Get parent any categories and create array
                        $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                        $cat_parents = explode(',',$get_cat_parents);
                         
                        // Loop through parent categories and store in variable $cat_display
                        $cat_display = '';
                        foreach($cat_parents as $parents) {
                            $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                            
                        }
                    }
                    
                    if(!empty($last_category)) {
                        echo wp_kses_post($cat_display );
                        echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                         
                    // Else if post is in a custom taxonomy
                    }
                }
                    
                     
                // If it's a custom post type within a custom taxonomy
                if(empty($last_category) && !empty($custom_taxonomy)) {
                    $custom_taxonomy_arr = explode(",", $custom_taxonomy) ;
                    foreach ($custom_taxonomy_arr as $key => $custom_taxonomy_val) {
                        $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy_val );
                        if($taxonomy_terms && !($taxonomy_terms instanceof WP_Error) ){
                            $cat_id         = $taxonomy_terms[0]->term_id;
                            $cat_nicename   = $taxonomy_terms[0]->slug;
                            $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy_val);
                            $cat_name       = $taxonomy_terms[0]->name;

                            if(!empty($cat_id)) {
                         
                                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . esc_url($cat_link ) . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                                
                                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                             
                            }
                        }

                     } 
                    
                  
                }
                 
                
                 
            } else if ( is_category() ) {
                  
                // Category page
                echo '<li class="item-current item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><strong class="bread-current bread-cat-' . $category[0]->term_id . ' bread-cat-' . $category[0]->category_nicename . '">' . $category[0]->cat_name . '</strong></li>';
                  
            } else if ( is_page() ) {
                  
                // Standard page
                if( $post->post_parent ){

                    $parents = '';
                      
                    // If child page, get parents 
                    $anc = get_post_ancestors( $post->ID );
                      
                    // Get parents in the right order
                    $anc = array_reverse($anc);
                      
                    // Parent page loop
                    foreach ( $anc as $ancestor ) {
                        $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . esc_url(get_permalink($ancestor) ) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                        
                    }
                      
                    // Display parent pages
                    echo wp_kses_post($parents );
                      
                    // Current page
                    echo '<li class="item-current item-page item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                      
                } else {
                      
                    // Just display current page if not parents
                    echo '<li class="item-current item-page item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                      
                }
                  
            } else if ( is_tag() ) {
                  
                // Tag page
                  
                // Get tag information
                $term_id = get_query_var('tag_id');
                $taxonomy = 'post_tag';
                $args ='include=' . $term_id;
                $terms = get_terms( $taxonomy, $args );
                  
                // Display the tag name
                echo '<li class="item-current item-tag-' . $terms[0]->term_id . ' item-tag-' . $terms[0]->slug . '"><strong class="bread-current bread-tag-' . $terms[0]->term_id . ' bread-tag-' . $terms[0]->slug . '">' . $terms[0]->name . '</strong></li>';
              
            } elseif ( is_day() ) {
                  
                // Day archive
                  
                // Year link
                echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . esc_html__(' Archives','monolit').'</a></li>';
                
                  
                // Month link
                echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . esc_html__(' Archives','monolit').'</a></li>';
                
                  
                // Day display
                echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') .  esc_html__(' Archives','monolit').'</strong></li>';
                  
            } else if ( is_month() ) {
                  
                // Month Archive
                  
                // Year link
                echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . esc_html__(' Archives','monolit').'</a></li>';
                
                  
                // Month display
                echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . esc_html__(' Archives','monolit').'</strong></li>';
                  
            } else if ( is_year() ) {
                  
                // Display year archive
                echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . esc_html__(' Archives','monolit').'</strong></li>';
                  
            } else if ( is_author() ) {
                  
                // Auhor archive
                  
                // Get the author information
                global $author;
                $userdata = get_userdata( $author );
                  
                // Display author name
                echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' .  esc_html__(' Author: ','monolit') . $userdata->display_name . '</strong></li>';
              
            } else if ( get_query_var('paged') ) {
                  
                // Paginated archives
                echo '<li class="item-current item-current-' . get_query_var('paged') . '"><a href="#" class="bread-current bread-current-' . get_query_var('paged') . '" title="'.esc_html__('Page','monolit') . get_query_var('paged') . '">'.esc_html__('Page','monolit') . ' ' . get_query_var('paged') . '</a></li>';
                  
            } else if ( is_search() ) {
              
                // Search results page
                echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="'.esc_html__('Search results for: ','monolit') . get_search_query() . '">'.esc_html__('Search results for: ','monolit') . get_search_query() . '</strong></li>';
              
            } elseif ( is_404() ) {
                  
                // 404 page
                echo '<li>' . esc_html__('Error 404','monolit') . '</li>';
            }
          
            echo '</ul>';
              
        }
          
    }
}


/**
 * Left page fixed title
 *
 * @since Monolit 1.0
 */
if (!function_exists('monolit_dynamic_title')) {
    function monolit_dynamic_title() {
        
        // Get the query & post information
        global $post, $wp_query;
        global $monolit_options;
        if (!is_home()) {
            if (is_archive() && !is_tax()) {
                if (is_post_type_archive('portfolio')) {
                    esc_html_e('Our Portfolio', 'monolit');
                } 
                else {
                    if( monolit_is_woocommerce_activated() ){
                        if(is_shop()) echo get_the_title( wc_get_page_id( 'shop' ) );
                    }else{
                        echo get_the_archive_title();
                    }
                    
                }
            } 
            else if (is_archive() && is_tax()) {
                
                // If post is a custom post type
                $post_type = get_post_type();
                
                // If it is a custom post type display name and link
                if ($post_type && $post_type == 'portfolio') {
                    $term = $wp_query->get_queried_object();
                    echo esc_attr($term->name);
                } 
                elseif ($post_type && $post_type != 'post') {
                    
                    $post_type_object = get_post_type_object($post_type);
                    
                    echo esc_attr($post_type_object->labels->name);
                }
            } 
            else if (is_single()) {
                echo get_the_title();
            } 
            else if (is_category()) {
            } 
            else if (is_page()) {
                echo get_the_title();
            } 
            else if (is_search()) {
                echo esc_html__('Search Blog', 'monolit');
            } 
            elseif (is_404()) {
                echo esc_html__('Page not found', 'monolit');
            }
        } 
        else {
            echo esc_attr($monolit_options['blog_home_text']);
        }
    }
}

/**
 * Theme pagination
 *
 * @since Monolit 1.0
 */
if (!function_exists('monolit_pagination')) {
    function monolit_pagination($prev = 'Prev', $next = 'Next', $pages = '', $sec_wrap = false) {
        global $wp_query, $wp_rewrite;
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if (!$pages) {
                $pages = 1;
            }
        }
        $pagination = array('base' => str_replace(999999999, '%#%', get_pagenum_link(999999999)), 'format' => '', 'current' => max(1, get_query_var('paged')), 'total' => $pages, 'prev_text' => $prev, 'next_text' => $next, 'type' => 'plain', 'end_size' => 3, 'mid_size' => 3);
        $return = paginate_links($pagination);
        $return = str_replace(array('page-numbers', 'next', 'prev', 'current'), array('blog-page transition', 'nextposts-link', 'prevposts-link', 'current-page'), $return);
        if (!empty($return)) {
            if ($sec_wrap) echo '<section class="custom_folio_pagi">';
            echo '<div class="clearfix"></div><div class="pagination-blog">' . $return . '</div>';
            if ($sec_wrap) echo '</section>';
        }
    }
}

/**
 * Theme portfolio pagination
 *
 * @since Monolit 1.0
 */
if (!function_exists('monolit_portfolio_pagination')) {
    function monolit_portfolio_pagination($prev = 'Prev', $next = 'Next', $pages = '', $sec_wrap = false) {
        global $wp_query, $wp_rewrite;
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if (!$pages) {
                $pages = 1;
            }
        }
        $pagination = array('base' => str_replace(999999999, '%#%', get_pagenum_link(999999999)), 'format' => '', 'current' => max(1, get_query_var('paged')), 'total' => $pages, 'prev_text' => $prev, 'next_text' => $next, 'type' => 'plain', 'end_size' => 3, 'mid_size' => 3);
        $return = paginate_links($pagination);
        $return = str_replace(array('page-numbers', 'next', 'prev', 'current'), array('blog-page transition', 'nextposts-link', 'prevposts-link', 'current-page'), $return);
        if (!empty($return)) {
            if ($sec_wrap) echo '<section class="custom_folio_pagi">';
            echo '<div class="content no-bg-con portfolio-pagination"><div class="container"><div class="pagination-blog">' . $return . '</div></div></div>';
            if ($sec_wrap) echo '</section>';
        }
    }
}

/**
 * Theme content-nav pagination
 *
 * @since Monolit 1.0
 */
if (!function_exists('monolit_content_nav')) {
    function monolit_content_nav($prev = 'Prev', $next = 'Next', $pages = '', $sec_wrap = false) {
        global $wp_query, $wp_rewrite;
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if (!$pages) {
                $pages = 1;
            }
        }
        $pagination = array('base' => str_replace(999999999, '%#%', get_pagenum_link(999999999)), 'format' => '', 'current' => max(1, get_query_var('paged')), 'total' => $pages, 'prev_next'=> true, 'prev_text' => $prev, 'next_text' => $next, 'type' => 'plain', 'end_size' => 3, 'mid_size' => 3);

        $return = paginate_links($pagination);
        $return = str_replace(array('page-numbers', 'next', 'prev', 'current'), array('blog-page transition', 'nextposts-link', 'prevposts-link', 'current-page'), $return);
        if (!empty($return)) {
            if ($sec_wrap) echo '<section class="custom_folio_pagi">';
            echo '<div class="content-nav pagination-blog portfolio-parallax-pagination">' . $return . '</div>';
            if ($sec_wrap) echo '</section>';
        }
        
    }
}

/**
 * Pagination for Portfolio page templates
 *
 * @since Monolit 1.0
 */
if (!function_exists('monolit_custom_pagination')) {
    function monolit_custom_pagination($pages = '', $range = 2, $current_query = '', $sec_wrap = false) {
        
        $showitems = ($range * 2) + 1;
        
        if ($current_query == '') {
            global $paged;
            if (empty($paged)) $paged = 1;
        } 
        else {
            $paged = $current_query->query_vars['paged'];
        }
        
        if ($pages == '') {
            if ($current_query == '') {
                global $wp_query;
                $pages = $wp_query->max_num_pages;
                if (!$pages) {
                    $pages = 1;
                }
            } 
            else {
                $pages = $current_query->max_num_pages;
            }
        }
        
        if (1 != $pages) {
            //echo '<div class="clearfix"></div>';
            if ($sec_wrap) echo '<section class="no-padding">';
            
            echo '<div class="content no-bg-con portfolio-pagination"><div class="container"><div class="pagination-blog">';
            
            if ($paged > 1) echo '<a href="' . get_pagenum_link($paged - 1) . '" class="prevposts-link transition"></a>';
            
            for ($i = 1; $i <= $pages; $i++) {
                if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                    echo ($paged == $i) ? "<span class='current-page'>" . $i . "</span>" : "<a href='" . get_pagenum_link($i) . "' class='blog-page transition' >" . $i . "</a>";
                }
            }
            
            if ($paged < $pages) echo '<a href="' . get_pagenum_link($paged + 1) . '" class="nextposts-link transition"></a>';
            
            echo "</div></div></div>\n";
            
            if ($sec_wrap) echo "</section>\n";
        }
    }
}

/**
 * Blog post nav
 *
 * @since Monolit 1.0
 */
if (!function_exists('monolit_post_nav')) {
    function monolit_post_nav() {
        global $post;
        global $monolit_options;

        if(!$monolit_options['blog_single_navigation'])
            return ;
        
        // Don't print empty markup if there's nowhere to navigate.
        $previous = (is_attachment()) ? get_post($post->post_parent) : get_adjacent_post($monolit_options['blog_single_nav_same_term'], '', true);
        $next = get_adjacent_post($monolit_options['blog_single_nav_same_term'], '', false);
        if (!$next && !$previous) return;
?>
        <div class="blog-post-nav">
            <ul class="creat-list">
                <?php
                $prev_post = get_adjacent_post( $monolit_options['blog_single_nav_same_term'], '', true);
                if ( is_a( $prev_post, 'WP_Post' ) ) :
                ?>
                    <li class="previous"><a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="lef-ar-nav" title="<?php echo get_the_title($prev_post->ID ); ?>"><?php echo esc_html_x('Previous post','Previous post link','monolit') ;?></a></li>
                <?php endif ?>
                <?php
                $next_post = get_adjacent_post( $monolit_options['blog_single_nav_same_term'], '', false);
                if ( is_a( $next_post, 'WP_Post' ) ) :
                ?>
                    <li class="next"><a href="<?php echo get_permalink( $next_post->ID ); ?>" class="rig-ar-nav" title="<?php echo get_the_title($next_post->ID ); ?>"><?php echo esc_html_x('Next post','Next post link','monolit');?></a></li>
                <?php endif ?>

                
            </ul>
        <?php
        if ($monolit_options['blog_list_link'] != ''): ?>
            <div class="p-all">
                <a href="<?php echo esc_url($monolit_options['blog_list_link']); ?>" ><i class="fa fa-th"></i></a>
            </div>
            <?php
        endif; ?>
        </div>
    <?php
    }
}

/**
 * Member post nav
 *
 * @since Monolit 1.0
 */
if (!function_exists('monolit_member_nav')) {
    function monolit_member_nav() {
        global $post;
        global $monolit_options;
        
        // Don't print empty markup if there's nowhere to navigate.
        $previous = (is_attachment()) ? get_post($post->post_parent) : get_adjacent_post(false, '', true);
        $next = get_adjacent_post(false, '', false);
        if (!$next && !$previous) return;
?>
    <div class="content-nav member-content-nav">

        <ul>
            <?php
            $prev_post = get_adjacent_post( false, '', true);
            if ( is_a( $prev_post, 'WP_Post' ) ) :
            ?>
                <li class="previous"><a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="lef-ar-nav" title="<?php echo get_the_title($prev_post->ID ); ?>"><?php echo esc_html_x('Previous member','Member previous link','monolit') ;?></a></li>
            <?php endif ?>
            <?php
            $next_post = get_adjacent_post( false, '', false);
            if ( is_a( $next_post, 'WP_Post' ) ) :
            ?>
                <li class="next"><a href="<?php echo get_permalink( $next_post->ID ); ?>" class="rig-ar-nav" title="<?php echo get_the_title($next_post->ID ); ?>"><?php echo esc_html_x('Next member','Member next link','monolit');?></a></li>
            <?php endif ?>

        </ul>
        <?php
        if ($monolit_options['member_list_link'] != ''): ?>
            <div class="p-all">
                <a href="<?php echo esc_url($monolit_options['member_list_link']); ?>" ><i class="fa fa-th"></i></a>
            </div>
            <?php
        endif; ?>
    </div>
    <?php
    }
}

/**
 * Change next post link class attribute
 *
 * @since Monolit 1.0
 */
// add_filter('next_post_link', 'monolit_add_css_class_to_next_post_link');
function monolit_add_css_class_to_next_post_link($link) {
    $link = str_replace("<a ", "<a class='ajax left-nav'  ", $link);
    return $link;
}

/**
 * Change next post link class attribute
 *
 * @since Monolit 1.0
 */
// add_filter('previous_post_link', 'monolit_add_css_class_to_previous_post_link');
function monolit_add_css_class_to_previous_post_link($link) {
    $link = str_replace("<a ", "<a class='ajax right-nav'  ", $link);
    return $link;
}

/**
 * Custom comments list
 *
 * @since Monolit 1.0
 */
if (!function_exists('monolit_comments')) {
    function monolit_comments($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        extract($args, EXTR_SKIP);
        
        if ('div' == $args['style']) {
            $tag = 'div';
            $add_below = 'comment';
        } 
        else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
?>
        <<?php
        echo esc_attr($tag); ?> <?php
        comment_class(empty($args['has_children']) ? 'media' : 'media parent') ?> id="comment-<?php
        comment_ID() ?>">
        <?php
        if ('div' != $args['style']): ?>
        <div id="div-comment-<?php
            comment_ID() ?>" class="comment-body">
        <?php
        endif; ?>

            <div class="comment-author">
                <?php
        if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size']); ?>
            </div>
            <cite class="fn"><a href="#"><?php
        echo get_comment_author_link($comment->comment_ID); ?></a></cite>
            <div class="comment-meta">
                <h6><a href="#"><?php
        echo get_comment_date(esc_html__('F j, Y g:i a', 'monolit')); ?></a> / <?php
        comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?></h6>
            </div>
            <?php
        comment_text(); ?>

            <?php
        if ($comment->comment_approved == '0'): ?>
                <em class="comment-awaiting-moderation aligncenter"><?php
            esc_html_e('Your comment is awaiting moderation.', 'monolit'); ?></em>
                <br />
            <?php
        endif; ?>
        
        
        
        <?php
        if ('div' != $args['style']): ?>
        </div> 
        <?php
        endif; ?>

    <?php
    }
}

/**
 * Reorder comment field output
 *
 * @since Monolit 1.0
 */
function monolit_remove_comment_field($string) {
    
    return '';
}
add_filter( 'comment_form_field_comment', 'monolit_remove_comment_field' );

/**
 * Then add comment field after
 *
 * @since Monolit 1.0
 */
function monolit_add_comment_field_after() {
    //$commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    echo '<div class="clearfix"></div><div class="comment-form-comment control-group"><div class="controls"><textarea  placeholder="'.esc_html__('Your comment here...','monolit').'"  id="comment" cols="50" rows="8" name="comment"  '.$aria_req.'></textarea></div></div><div class="clearfix"></div>';
    
}
add_filter( 'comment_form_after_fields', 'monolit_add_comment_field_after' );
add_filter( 'comment_form_logged_in_after', 'monolit_add_comment_field_after' );

/**
 * Modify tag cloud format
 *
 * @since Monolit 1.0
 */
function monolit_custom_tag_cloud_widget($args) {
    $args['format'] = 'list';
     //ul with a class of wp-tag-cloud
    return $args;
}
add_filter('widget_tag_cloud_args', 'monolit_custom_tag_cloud_widget');
// add_filter( 'woocommerce_product_tag_cloud_widget_args','monolit_custom_tag_cloud_widget');

/**
 * Modify password form
 *
 * @since Monolit 2.3
 */
function monolit_password_form() {
    global $post, $monolit_options;

    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '';
    if($post->post_type == 'portfolio'){
        $o .=    '<div class="content full-height protected_wrap">';
        $o .=       '<div class="hero-wrap">';
            $o .=       '<div class="bg"  data-bg="'.esc_url($monolit_options['bgpasspost']['url']).'"></div>';
            $o .=       '<div class="overlay"></div>';
            $o .=       '<div class="hero-wrap-item nFound-page-wrap">';

                if(isset($monolit_options['passpost_title']) && $monolit_options['passpost_title']){
                    $o .= '<h2>'.get_the_title($post->ID).'</h2>';
                }
                $o .= wp_kses_post($monolit_options['passpost_intro']);
    }
                $o .= '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post" class="postpass_form">';
                    $o .= '<p><strong>'.esc_html_x( "To view this post, enter the password below.",'postpass form', 'monolit' ) . '</strong></p>';
                    //$o .= '<label for="' . $label . '">' . esc_html__( "Password:" ) . ' </label>';
                    $o .= '<div class="passpost-input-wrapp"><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="passpost-input" placeholder="'.esc_html_x('Password','postpass form','monolit').'"></div>';
                    $o .= '<div class="clearfix"></div><div class="passpost-submit-wrapp"><button type="submit" class="btn trans-btn wt-btn transition passpost-submit" >' . esc_html__('Authenticate', 'monolit'). '</button></div>';
                $o .= '</form>';
    if($post->post_type == 'portfolio'){
            $o .=       '</div>';

            $o .= '</div>';//hero-wrap
        $o .= '</div>';
    }
        return $o;

}
add_filter( 'the_password_form', 'monolit_password_form' );

function monolit_protected_post_prepend(){
    return esc_html_x('%s', 'protected prepend','monolit');
}

add_filter('protected_title_format','monolit_protected_post_prepend' );

/**
 * Return attachment image link by using wp_get_attachment_image_src function
 *
 * @since Monolit 2.4
 */
function monolit_get_attachment_thumb_link( $id, $size = 'thumbnail', $icon = false ){
    $image_attributes = wp_get_attachment_image_src( $id, $size, $icon );
    if ( $image_attributes ) {
        return $image_attributes[0];
    }
    return '';
}

/**
 * Return strong title with -s-string-s- format
 *
 * @since Monolit 1.0
 */
if(!function_exists('monolit_content_filter')){
    function monolit_content_filter($content) {
        if(is_admin()){
            return $content;
        }
      
        return preg_replace('/-s-(.*)-s-/', '<strong>$1</strong>', $content);
    }
}
add_filter( 'the_content', 'monolit_content_filter' );

/**
 * Return strong title with -s-string-s- format
 *
 * @since Monolit 1.0
 */
if(!function_exists('monolit_title_filter')){
    function monolit_title_filter($title, $id = null) {
        if(is_admin()){
            return $title;
        }
        return preg_replace('/-s-(.*)-s-/', '<strong>$1</strong>', $title);
    }
}

add_filter( 'the_title', 'monolit_title_filter', 10, 2 );

/** 
 * Filter the parts of the document title. To replace -s-string-s- with string
 * 
 * @since 4.4.0 
 * 
 * @param array $title { 
 *     The document title parts. 
 * 
 *     @type string $title   Title of the viewed page. 
 *     @type string $page    Optional. Page number if paginated. 
 *     @type string $tagline Optional. Site description when on home page. 
 *     @type string $site    Optional. Site title when not on home page. 
 * } 
 */ 
if(!function_exists('monolit_document_title_parts')){
    function monolit_document_title_parts($title) {
        
        // $title['title'] = preg_replace('/-s-([^-]*)-s-/', '$1', $title['title']);
        $title['title'] = preg_replace('/-s-(.*)-s-/', '$1', $title['title']);

        return $title;
    }
}
add_filter( 'document_title_parts', 'monolit_document_title_parts' ); 

/** 
 * Filter the body_class for global configuration
 * 
 * @since 1.0
 */ 
// Apply filter
add_filter('body_class', 'monolit_body_classes');
if(!function_exists('monolit_body_classes')){
    function monolit_body_classes($classes) {
            global $monolit_options;
            if(!$monolit_options['show_left_bar']){
                $classes[] = 'hide-left-bar';
            }
            if(isset($monolit_options['shop_columns'])){
                $classes[] = 'shop-list-'.$monolit_options['shop_columns'].'-cols';
            }
            if(isset($monolit_options['shop_columns_tablet'])){
                $classes[] = 'shop-list-tablet-'.$monolit_options['shop_columns_tablet'].'-cols';
            }
            return $classes;
    }
}

/** 
 * Global variables fix
 * https://forums.envato.com/t/redux-framework-global-variable-issue/36739
 * @since Monolit 1.0
 */ 
if ( !function_exists('monolit_global_var') ) {
    function monolit_global_var($opt_1 = '', $opt_2 = '', $opt_check = false){
        global $monolit_options;
        if( $opt_check ) {
            if(isset($monolit_options[$opt_1][$opt_2])) {
                return $monolit_options[$opt_1][$opt_2];
            }
        } else {
            if(isset($monolit_options[$opt_1])) {
                return $monolit_options[$opt_1];
            }
        }

        return false;
        
    }
}
if(!function_exists('monolit_get_template_part')){
    /**
     * Load a template part into a template
     *
     * Makes it easy for a theme to reuse sections of code in a easy to overload way
     * for child themes.
     *
     * Includes the named template part for a theme or if a name is specified then a
     * specialised part will be included. If the theme contains no {slug}.php file
     * then no template will be included.
     *
     * The template is included using require, not require_once, so you may include the
     * same template part multiple times.
     *
     * For the $name parameter, if the file is called "{slug}-special.php" then specify
     * "special".
      * For the var parameter, simple create an array of variables you want to access in the template
     * and then access them e.g. 
     * 
     * array("var1=>"Something","var2"=>"Another One","var3"=>"heres a third";
     * 
     * becomes
     * 
     * $var1, $var2, $var3 within the template file.
     *
     * @since 3.0.0
     *
     * @param string $slug The slug name for the generic template.
     * @param string $name The name of the specialised template.
     * @param array $vars The list of variables to carry over to the template
     * @author CTHthemes 
     * @ref http://www.zmastaa.com/2015/02/06/php-2/wordpress-passing-variables-get_template_part
     * @ref http://keithdevon.com/passing-variables-to-get_template_part-in-wordpress/
     */
    function monolit_get_template_part( $slug, $name = null, $vars = null ) {

        $template = "{$slug}.php";
        $name = (string) $name;
        if ( '' !== $name && ( file_exists( get_stylesheet_directory() ."/{$slug}-{$name}.php") || file_exists( get_template_directory() ."/{$slug}-{$name}.php") ) ) {
            $template = "{$slug}-{$name}.php";
        }

        extract($vars);
        include(locate_template($template));
    }
}
/**
 * Custom meta box for page, post, portfolio...
 *
 * @since Monolit 1.0
 */
require_once get_template_directory() . '/cmb2/functions.php';

/**
 * Visual Composer plugin integration
 *
 * @since Monolit 1.0
 */
require_once get_template_directory() . '/inc/cth_for_vc.php';

/**
 * Theme custom style
 *
 * @since Monolit 1.0
 */
require_once get_template_directory() . '/inc/overridestyle.php';


/**
 * Taxonomy meta box
 *
 * @since Monolit 1.0
 */
require_once get_template_directory() . '/inc/cth_taxonomy_fields.php';
require_once get_template_directory() . '/inc/category_metabox_fields.php';
require_once get_template_directory() . '/inc/tag_metabox_fields.php';
require_once get_template_directory() . '/inc/portfolio_cat_metabox_fields.php';

require_once get_template_directory() . '/inc/product_tag_metabox_fields.php';

/**
 * Custom elements for VC
 *
 * @since Monolit 1.0
 */
require_once get_template_directory() . '/vc_extend/vc_shortcodes.php';

/**
 * Woocommerce support
 *
 * @since Monolit 2.0
 */

if ( ! function_exists( 'monolit_is_woocommerce_activated' ) ) {
    function monolit_is_woocommerce_activated() {
        if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
    }
}

require_once get_template_directory() . '/inc/init.php';
require_once get_template_directory() . '/inc/ajax.php';

/**
 * Implement the One Click to import demo data
 *
 * @since Monolit 1.6
 */
require_once get_template_directory() . '/includes/one-click-import-data.php';


/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'monolit_register_required_plugins');

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function monolit_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin from a private repo in your theme.
        array('name' => esc_html__('Redux Framework','monolit'),
             // The plugin name.
            'slug' => 'redux-framework',
             // The plugin source.
            'required' => true,
             // If false, the plugin is only 'recommended' instead of required.
            'external_url' => esc_url('https://wordpress.org/plugins/redux-framework/'),
             // If set, overrides default API URL and points to an external URL.
        ), 
        array('name' => esc_html__('WPBakery Page Builder','monolit'),
             // The plugin name.
            'slug' => 'js_composer',
             // The plugin slug (typically the folder name).
            'source' => 'http://assets.cththemes.com/plugins/js_composer_latest.zip',
             // The plugin source.
            'required' => true,
            'external_url' => esc_url('https://codecanyon.net/item/visual-composer-page-builder-for-wordpress/242431' ),
             // If set, overrides default API URL and points to an external URL.
        ), 
        array(
            'name' => esc_html__('Contact Form 7','monolit'),
             // The plugin name.
            'slug' => 'contact-form-7',
             // The plugin slug (typically the folder name).
            'required' => true,
             // If false, the plugin is only 'recommended' instead of required.
            'external_url' => esc_url('https://wordpress.org/plugins/contact-form-7/' ),
             // If set, overrides default API URL and points to an external URL.
        ), 

        array('name' => esc_html__('CMB2','monolit'),
             // The plugin name.
            'slug' => 'cmb2',
             // The plugin slug (typically the folder name).
            'required' => true,
             // If false, the plugin is only 'recommended' instead of required.
            'external_url' => esc_url('https://wordpress.org/plugins/cmb2/'),
             // If set, overrides default API URL and points to an external URL.
        ),
        array('name' => esc_html__('Monolit Add-ons','monolit' ),
             // The plugin name.
            'slug' => 'monolit_add_ons',
             // The plugin slug (typically the folder name).
            'source' => get_template_directory_uri() . '/framework/plugins/monolit_add_ons.1.1.zip',
             // The plugin source.
            'required' => true,
             // If false, the plugin is only 'recommended' instead of required.
        ), 

        // array('name' => esc_html__('WordPress Importer','monolit'),
        //      // The plugin name.
        //     'slug' => 'wordpress-importer',
        //      // The plugin slug (typically the folder name).
        //     'required' => true,
        //      // If false, the plugin is only 'recommended' instead of required.
        //     'external_url' => esc_url('https://wordpress.org/plugins/wordpress-importer/'),
        //      // If set, overrides default API URL and points to an external URL.
        // ),

        array('name' => esc_html__('One Click Demo Import','monolit'),
             // The plugin name.
            'slug' => 'one-click-demo-import',
             // The plugin slug (typically the folder name).
            'required' => true,
             // If false, the plugin is only 'recommended' instead of required.
            'external_url' => esc_url('https://wordpress.org/plugins/one-click-demo-import/'),
             // If set, overrides default API URL and points to an external URL.
        ),

        array('name' => esc_html__('Envato Market','monolit' ),
             // The plugin name.
            'slug' => 'envato-market',
             // The plugin slug (typically the folder name).
            'source' => esc_url('http://envato.github.io/wp-envato-market/dist/envato-market.zip' ),
             // The plugin source.
            'required' => true,
             // If false, the plugin is only 'recommended' instead of required.
            'external_url' => esc_url('http://envato.github.io/wp-envato-market/dist/envato-market.zip' ),
             // If set, overrides default API URL and points to an external URL.
        ),

        array('name' => esc_html__('Regenerate Thumbnails','monolit'),
            // The plugin name.
            'slug' => 'regenerate-thumbnails',
             // The plugin slug (typically the folder name).
            'required' => false,
             // If false, the plugin is only 'recommended' instead of required.
            'external_url' => esc_url('https://wordpress.org/plugins/regenerate-thumbnails/'),
             // If set, overrides default API URL and points to an external URL.
        ),

        // array('name' => esc_html__('Widget Importer & Exporter','monolit'),
        //      // The plugin name.
        //     'slug' => 'widget-importer-exporter',
        //      // The plugin slug (typically the folder name).
        //     'required' => false,
        //      // If false, the plugin is only 'recommended' instead of required.
        //     'external_url' => esc_url('https://wordpress.org/plugins/widget-importer-exporter/'),
        //      // If set, overrides default API URL and points to an external URL.
        // ),

    );

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
        'id'           => 'monolit',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

        
    );

    tgmpa( $plugins, $config );
}
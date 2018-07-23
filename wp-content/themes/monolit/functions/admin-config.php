<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "monolit_options";

    // This line is only for altering the demo. Can be easily removed.
    //$opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Monolit Options', 'monolit' ),
        'page_title'           => esc_html__( 'Monolit Options', 'monolit' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => 'AIzaSyBAycicE1b8x_pLv31OaST3vhIiCxW61kY',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    // $args['admin_bar_links'][] = array(
    //     'id'    => 'redux-docs',
    //     'href'  => 'http://docs.reduxframework.com/',
    //     'title' => esc_html__( 'Documentation', 'monolit' ),
    // );

    // $args['admin_bar_links'][] = array(
    //     //'id'    => 'redux-support',
    //     'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
    //     'title' => esc_html__( 'Support', 'monolit' ),
    // );

    // $args['admin_bar_links'][] = array(
    //     'id'    => 'redux-extensions',
    //     'href'  => 'reduxframework.com/extensions',
    //     'title' => esc_html__( 'Extensions', 'monolit' ),
    // );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    // $args['share_icons'][] = array(
    //     'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
    //     'title' => esc_html__('Visit us on GitHub', 'monolit' ),
    //     'icon'  => 'el el-github'
    //     //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    // );
    // $args['share_icons'][] = array(
    //     'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
    //     'title' => esc_html__('Like us on Facebook', 'monolit' ),
    //     'icon'  => 'el el-facebook'
    // );
    // $args['share_icons'][] = array(
    //     'url'   => 'http://twitter.com/reduxframework',
    //     'title' => esc_html__('Follow us on Twitter', 'monolit' ),
    //     'icon'  => 'el el-twitter'
    // );
    // $args['share_icons'][] = array(
    //     'url'   => 'http://www.linkedin.com/company/redux-framework',
    //     'title' => esc_html__('Find us on LinkedIn', 'monolit' ),
    //     'icon'  => 'el el-linkedin'
    // );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( wp_kses(__( '<p><strong>Monolit &#8211; Creative Responsive Architecture Wordpress Theme</strong> is perfect if you like a clean and modern design. This theme is ideal for architects, furniture designers, photographers, and those who need an easy, attractive and effective way to share their work with clients.</p>', 'monolit' ),array('p'=>array(),'strong'=>array()) ) , $v );
    } else {
        $args['intro_text'] =  wp_kses(__( '<p><strong>Monolit &#8211; Creative Responsive Architecture Wordpress Theme</strong> is perfect if you like a clean and modern design. This theme is ideal for architects, furniture designers, photographers, and those who need an easy, attractive and effective way to share their work with clients.</p>', 'monolit' ),array('p'=>array(),'strong'=>array()) );
    }

    // Add content after the form.
    $args['footer_text'] = wp_kses(__( '<p>Thanks all of you who stay with us, your co-operation is our inspiration. <a href="http://themeforest.net/user/cththemes/portfolio/" target="_blank">CTHthemes</a></p>', 'monolit' ),array('p'=>array(),'strong'=>array(),'a'=>array('href'=>array(),'title'=>array())));

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    // $tabs = array(
    //     array(
    //         'id'      => 'redux-help-tab-1',
    //         'title'   => esc_html__( 'Theme Information 1', 'monolit' ),
    //         'content' => wp_kses(__( '<p>This is the tab content, HTML is allowed.</p>', 'monolit' ),array('p'=>array('class'=>array())) )
    //     ),
    //     array(
    //         'id'      => 'redux-help-tab-2',
    //         'title'   => esc_html__( 'Theme Information 2', 'monolit' ),
    //         'content' => wp_kses(__( '<p>This is the tab content, HTML is allowed.</p>', 'monolit' ),array('p'=>array('class'=>array())) )
    //     )
    // );
    // Redux::setHelpTab( $opt_name, $tabs );

    // // Set the help sidebar
    // $content = wp_kses(__( '<p>This is the sidebar content, HTML is allowed.</p>', 'monolit' ),array('p'=>array('class'=>array())) );
    // Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */
        //////////////// CUSTOM ///////////////

    // Redux::setSection( $opt_name, array(
    //     'title' => esc_html__('Import Demo Data', 'monolit'),
    //     'id'         => 'import-demo-data',
    //     'subsection' => false,
    //     //'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'monolit' ) . '<a href="http://docs.reduxframework.com/core/fields/checkbox/" target="_blank">http://docs.reduxframework.com/core/fields/checkbox/</a>',
    //     'icon'       => 'el-icon-download',
    //     'fields' => array(
    //             array(
    //                 'id'       => 'im-demo-data',
    //                 'type'     => 'demo_data',
    //                 'title'    => esc_html__('Click button to import demo data', 'monolit'),
    //                 // 'subtitle' => esc_html__('', 'monolit'),
    //                 // 'desc'     => esc_html__('', 'monolit'),
    //             ),
    //         ),
    // ));
    // -> START General Settings

    Redux::setSection( $opt_name, array(
        'title' => esc_html__('General', 'monolit'),
        'id'         => 'general-settings',
        'subsection' => false,
        //'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'monolit' ) . '<a href="http://docs.reduxframework.com/core/fields/checkbox/" target="_blank">http://docs.reduxframework.com/core/fields/checkbox/</a>',
        'icon'       => 'el-icon-cogs',
        'fields' => array(
            array(
                'id' => 'favicon',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Custom Favicon', 'monolit'),
                //'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('Upload your Favicon.', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'default' => array('url' => get_template_directory_uri().'/images/favicon.ico'),
            ),
            array(
                'id' => 'logo_first',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Your Logo', 'monolit'),
                //'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('Upload your logo.', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'default' => array('url' => get_template_directory_uri().'/images/logo.png'),
            ),
            array(
                'id' => 'logo_size_width',
                'type' => 'text',
                'title' => esc_html__('Logo Size Width', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                // 'desc' => esc_html__('', 'monolit'),
                'default' => '123'
            ),
            array(
                'id' => 'logo_size_height',
                'type' => 'text',
                'title' => esc_html__('Logo Size Height', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                // 'desc' => esc_html__('', 'monolit'),
                'default' => '50'
            ),
            array(
                'id' => 'logo_text',
                'type' => 'text',
                'title' => esc_html__('Logo Text', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                // 'desc' => esc_html__('', 'monolit'),
                'default' => ''
            ),
            array(
                'id' => 'slogan',
                'type' => 'text',
                'title' => esc_html__('Slogan (Sub Logo Text)', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                // 'desc' => esc_html__('', 'monolit'),
                'default' => ''
            ),
            

            array(
                'id'=>'dynamic_menus',
                'type' => 'multi_text',
                'title' => esc_html__('Multi Menu Locations', 'monolit'),
                // 'validate' => 'color',
                'default'=> array(),
                'desc' => wp_kses(__('These values will display on <strong>Appearance</strong> &gt; <strong>Menus</strong> and <strong>Scroll Navigation Menu</strong> on page, post or portfolio setting.', 'monolit'),array('strong'=>array(),'p'=>array()) ),
                // 'desc' => esc_html__('This is the description field, again good for additional info.', 'monolit')
            ),

            array(
                'id' => 'show_loader',
                'type' => 'switch',
                'title' => esc_html__('Show animation loadder', 'monolit'),
                'desc' => esc_html__('Show animation loader', 'monolit'),
                // 'desc' => esc_html__('','monolit'),
                //'options' => array('no' => 'No', 'yes' => 'Yes'), //Must provide key => value pairs for select options
                'default' => true
            ),
            array(
                'id' => 'show_submenu_mobile',
                'type' => 'switch',
                'title' => esc_html__('Show Submenu on Mobile', 'monolit'),
                'desc' => esc_html__('Set this option to On to display submenu items on mobile devices instead of hovering its parent.', 'monolit'),
                // 'desc' => esc_html__('','monolit' ),
                //'options' => array('no' => 'No', 'yes' => 'Yes'), //Must provide key => value pairs for select options
                'default' => false
            ),
            array(
                'id' => 'disable_shuffle_script',
                'type' => 'switch',
                'title' => esc_html__('Disable Shuffle Text Script', 'monolit'),
                'desc' => esc_html__('When disabled shuffling text effect on the left title and scroll top text is off.', 'monolit'),
                // 'desc' => esc_html__('','monolit' ),
                //'options' => array('no' => 'No', 'yes' => 'Yes'), //Must provide key => value pairs for select options
                'default' => false
            ),
            array(
                'id' => 'disable_parallax_effect',
                'type' => 'switch',
                'title' => esc_html__('Disable Parallax Effect', 'monolit'),
                // 'subtitle' => esc_html__('When disabled', 'monolit'),
                // 'desc' => esc_html__('','monolit' ),
                //'options' => array('no' => 'No', 'yes' => 'Yes'), //Must provide key => value pairs for select options
                'default' => false
            ),
            array(
                'id' => 'gmap_api_key',
                'type' => 'text',
                // 'url' => true,
                'title' => esc_html__('Google Map API Key', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'desc' => '<a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank">Get a key</a>.',
                // 'default' => '',
            ),
            array(
                'id' => 'enable_image_click',
                'type' => 'switch',
                'on' => esc_html__('Yes', 'monolit'),
                'off' => esc_html__('No', 'monolit'),
                'title' => esc_html__('Enable Image Click', 'monolit'),
                //'options' => array('no' => 'No', 'yes' => 'Yes'), //Must provide key => value pairs for select options
                'default' => false
            ),
        ),
    ) );

    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Footer', 'monolit'),
        'id'         => 'footer-settings',
        'subsection' => false,
        //'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'monolit' ) . '<a href="http://docs.reduxframework.com/core/fields/checkbox/" target="_blank">http://docs.reduxframework.com/core/fields/checkbox/</a>',
        'icon'       => 'el-icon-pencil',
        'fields' => array(
            array(
                'id' => 'show_left_bar',
                'type' => 'switch',
                'title' => esc_html__('Show Left Bar', 'monolit'),
                'desc' => esc_html__('Show left Blank bar on your site', 'monolit'),
                // 'desc' => esc_html__('','monolit' ),
                //'options' => array('no' => 'No', 'yes' => 'Yes'), //Must provide key => value pairs for select options
                'default' => true
            ),
            array(
                'id' => 'show_fixed_title',
                'type' => 'switch',
                'title' => esc_html__('Show Left Title', 'monolit'),
                'desc' => esc_html__('Show title on the left of your page.', 'monolit'),
                // 'desc' => esc_html__('','monolit' ),
                //'options' => array('no' => 'No', 'yes' => 'Yes'), //Must provide key => value pairs for select options
                'default' => true
            ),
            array(
                'id' => 'left_bar_width',
                'type' => 'text',
                // 'url' => true,
                'title' => esc_html__('Left Bar Width', 'monolit'),
                'desc' => esc_html__('Default: 80px. If you add more info to the footer section you must increase the value here.', 'monolit'),
                // 'desc' => esc_html__('Upload your back to top image icon.', 'monolit'),
                'default' => '80px',
            ),
            array(
                'id' => 'left_socials',
                'type' => 'ace_editor',
                //'url' => true,
                'title' => esc_html__('Left Bar Icons', 'monolit'),
                //'compiler' => 'true',
                'mode'=>'html',
                'full_width'=>true,
                'desc' => esc_html__('You should replace href attribute value with your social links, and get social icons from:', 'monolit').' <a href="http://fontawesome.io/icons/#brand" target="_blank"> Awesome Brand Icons</a>',
                // 'subtitle' => esc_html__('', 'monolit'),
                'default' => '<ul>
    <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
    <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
    <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
</ul>',
            ),

            array(
                'id' => 'footer_content',
                'type' => 'ace_editor',
                //'url' => true,
                'title' => esc_html__('Footer Content', 'monolit'),
                //'compiler' => 'true',
                'mode'=>'html',
                'full_width'=>true,
                'default' => '<div class="row">
    <div class="col-md-6">
        <!-- Footer logo --> 
        <div class="footer-item footer-logo">
            <a href="'.esc_url( home_url('/' )).'" class="ajax"><img src="'.get_template_directory_uri().'/images/footer-logo.png" alt=""></a>
            <p>Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations.Client is the soul of the project.  </p>
        </div>
        <!-- Footer logo end --> 
    </div>
    <!-- Footer info --> 
    <div class="col-md-2">
        <div class="footer-item">
            <h4 class="text-link">Call</h4>
            <ul>
                <li><a href="#">+7(111)123456789</a></li>
                <li><a href="#">+1(000)987654321</a></li>
            </ul>
        </div>
    </div>
    <!-- Footer info end--> 
    <!-- Footer info --> 
    <div class="col-md-2">
        <div class="footer-item">
            <h4 class="text-link">Write</h4>
            <ul>
                <li><a href="#">yourmail@domain.com</a></li>
                <li><a href="#">email@website.com</a></li>
            </ul>
        </div>
    </div>
    <!-- Footer info-->
    <!-- Footer info end--> 
    <div class="col-md-2">
        <div class="footer-item">
            <h4 class="text-link">Visit</h4>
            <ul>
                <li><span>USA 27TH BROOKLYN NY</span></li>
                <li> <a href="#" target="_blank">View on map</a></li>
            </ul>
        </div>
    </div>
    <!-- Footer info end--> 
</div>
<!-- Footer copyright -->
<div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <div class="footer-wrap">
            <span class="copyright">  &#169; Monolit 2016. All rights reserved.  
            </span>
            <span class="to-top">To Top</span>
        </div>
    </div>
</div>
<!-- Footer copyright end -->',
            ), 

        array(
            'id' => 'show_constellation',
            'type' => 'switch',
            'title' => esc_html__('Show Constellation', 'monolit'),
            // 'subtitle' => esc_html__('Show Constellation', 'monolit'),
            'default' => true
        ), 

        array(
            'id'        => 'constellation_color',
            'type'      => 'color_rgba',
            'title'     => esc_html__('Constellation Line Color', 'monolit'),
         
            // See Notes below about these lines.
            //'output'    => array('background-color' => '.site-header'),
            //'compiler'  => array('color' => '.site-header, .site-footer', 'background-color' => '.nav-bar'),
            'default'   => array(
                'color'     => '#fff',
                'alpha'     => 0.5
            ),
                                
        ),


        ),
    ) );

    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Media', 'monolit'),
        'id'         => 'thumbnail_images',
        'subsection' => false,
        'desc'       => wp_kses(__( '<p>These settings affect the display and dimensions of images in your pages.</p>
            <p><em> Enter 9999 as Width value and uncheck Hard Crop to make your thumbnail dynamic width.</em></p>
            <p><em> Enter 9999 as Height value and uncheck Hard Crop to make your thumbnail dynamic height.</em></p>
            <p><em> Enter 9999 as Width and Height values to use full size image.</em></p>
<p>After changing these settings you may need to <a href="http://wordpress.org/extend/plugins/regenerate-thumbnails/" target="_blank">regenerate your thumbnails</a>.</p>', 'monolit' ), array('p'=>array(),'a'=>array('class'=>array(),'href'=>array(),'target'=>array(),),'strong'=>array(),'em'=>array(),) ),
        'icon'       => 'el-icon-picture',
        'fields' => array(
            array(
                'id' => 'enable_custom_sizes',
                'type' => 'switch',
                'on' => 'Yes',
                'off' => 'No',
                'title' => esc_html__('Enable Custom Image Sizes', 'monolit'),
                // 'subtitle' => esc_html__('Show Constellation', 'monolit'),
                'default' => false
            ), 
            array(
                'id'       => 'fullscreen_thumb',
                'type'     => 'thumbnail_size',
                // 'units'    => array('em','px','%'),
                'title' => esc_html__('Fullscreen Thumbnail Size', 'monolit'),
                'desc' => esc_html__('For Home Slider, Slideshow, Image pages and fullscreen slider elements.', 'monolit'),
                // 'desc'     => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.', 'monolit'),
                'default'  => array(
                    'width'   => '9999', //1356,581,1
                    'height'  => '9999',
                    'hard_crop'  => 1
                ),
            ),

            array(
                'id'       => 'horizontal_slider_thumb',
                'type'     => 'thumbnail_size',
                // 'units'    => array('em','px','%'),
                'title' => esc_html__('Portfolio Horizontal Thumbnail', 'monolit'),
                // 'subtitle' => esc_html__('You should enter 9999 as Width value and uncheck Hard Crop to make your thumbnail dynamic width.', 'monolit'),
                // 'desc'     => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.', 'monolit'),
                'default'  => array(
                    'width'   => '9999', //9999,658,0
                    'height'  => '9999',
                    'hard_crop'  => 1
                ),
            ),

            array(
                'id'       => 'horizontal_twover_thumb',
                'type'     => 'thumbnail_size',
                // 'units'    => array('em','px','%'),
                'title' => esc_html__('Portfolio Horizontal Two Vertical Columns Thumbnail', 'monolit'),
                // 'subtitle' => esc_html__('You should enter 9999 as Width value and uncheck Hard Crop to make your thumbnail dynamic width.', 'monolit'),
                // 'desc'     => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.', 'monolit'),
                'default'  => array(
                    'width'   => '9999', //9999,329,0
                    'height'  => '9999',
                    'hard_crop'  => 1
                ),
            ),

            array(
                'id'       => 'horizontal_threever_thumb',
                'type'     => 'thumbnail_size',
                // 'units'    => array('em','px','%'),
                'title' => esc_html__('Portfolio Horizontal Three Vertical Columns Thumbnail', 'monolit'),
                // 'subtitle' => esc_html__('You should enter 9999 as Width value and uncheck Hard Crop to make your thumbnail dynamic width.', 'monolit'),
                // 'desc'     => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.', 'monolit'),
                'default'  => array(
                    'width'   => '9999', //9999,219,0
                    'height'  => '9999',
                    'hard_crop'  => 1
                ),
            ),

            array(
                'id'       => 'galmasonry_thumbnail_size_one',
                'type'     => 'thumbnail_size',
                // 'units'    => array('em','px','%'),
                'title' => esc_html__('Portfolio Vertical Size One', 'monolit'),
                'desc' => esc_html__('You should enter 9999 as Height value and uncheck Hard Crop to make your thumbnail dynamic height.', 'monolit'),
                // 'desc'     => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.', 'monolit'),
                'default'  => array(
                    'width'   => '9999', //390,9999,0
                    'height'  => '9999',
                    'hard_crop'  => 1
                ),
            ),
            array(
                'id'       => 'galmasonry_thumbnail_size_two',
                'type'     => 'thumbnail_size',
                // 'units'    => array('em','px','%'),
                'title' => esc_html__('Portfolio Vertical Size Two', 'monolit'),
                'desc' => esc_html__('You should enter 9999 as Height value and uncheck Hard Crop to make your thumbnail dynamic height.', 'monolit'),
                // 'desc'     => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.', 'monolit'),
                'default'  => array(
                    'width'   => '9999', //784,9999,0
                    'height'  => '9999',
                    'hard_crop'  => 1
                ),
            ),

            array(
                'id'       => 'galmasonry_thumbnail_size_three',
                'type'     => 'thumbnail_size',
                // 'units'    => array('em','px','%'),
                'title' => esc_html__('Portfolio Vertical Size Three', 'monolit'),
                'desc' => esc_html__('You should enter 9999 as Height value and uncheck Hard Crop to make your thumbnail dynamic height.', 'monolit'),
                // 'desc'     => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.', 'monolit'),
                'default'  => array(
                    'width'   => '9999', //1178,9999,0
                    'height'  => '9999',
                    'hard_crop'  => 1
                ),
            ),

            array(
                'id'       => 'fopar_thumbnail_size_one',
                'type'     => 'thumbnail_size',
                // 'units'    => array('em','px','%'),
                'title' => esc_html__('Portfolio Parallax Size', 'monolit'),
                // 'subtitle' => esc_html__('Allow your to choose width, height, and crop thumbnail.', 'monolit'),
                // 'desc'     => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.', 'monolit'),
                'default'  => array(
                    'width'   => '9999', //678,437,1
                    'height'  => '9999',
                    'hard_crop'  => 1
                ),
            ),

            array(
                'id'       => 'team_member2_thumb',
                'type'     => 'thumbnail_size',
                // 'units'    => array('em','px','%'),
                'title' => esc_html__('Team Member Parallax Thumbnail', 'monolit'),
                // 'subtitle' => esc_html__('Allow your to choose width, height, and crop thumbnail.', 'monolit'),
                // 'desc'     => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.', 'monolit'),
                'default'  => array(
                    'width'   => '9999', //376,564,1
                    'height'  => '9999',
                    'hard_crop'  => 1
                ),
            ),


            array(
                'id'       => 'service_bg_thumb',
                'type'     => 'thumbnail_size',
                // 'units'    => array('em','px','%'),
                'title' => esc_html__('Service Background Thumbnail', 'monolit'),
                'desc' => esc_html__('You should enter 9999 as Height value and uncheck Hard Crop to make your thumbnail dynamic height.', 'monolit'),
                // 'desc'     => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.', 'monolit'),
                'default'  => array(
                    'width'   => '9999', //572,369,1
                    'height'  => '9999',
                    'hard_crop'  => 1
                ),
            ),
            

            array(
                'id'       => 'blog_image_thumb',
                'type'     => 'thumbnail_size',
                // 'units'    => array('em','px','%'),
                'title' => esc_html__('Blog Post Thumbnail', 'monolit'),
                'desc' => esc_html__('Allow your to choose width, height, and crop thumbnail.', 'monolit'),
                // 'desc'     => esc_html__('Enable or disable any piece of this field. Width, Height, or Units.', 'monolit'),
                'default'  => array(
                    'width'   => '9999', //862,575,1
                    'height'  => '9999',
                    'hard_crop'  => 1
                ),
            ),

        ),
    ) );

    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Social Share', 'monolit'),
        'id'         => 'social-share-settings',
        'subsection' => false,
        //'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'monolit' ) . '<a href="http://docs.reduxframework.com/core/fields/checkbox/" target="_blank">http://docs.reduxframework.com/core/fields/checkbox/</a>',
        'icon'       => 'el-icon-share',
        'fields' => array(
            array(
                'id' => 'share_names',
                'type' => 'text',
                'title' => esc_html__('Share Names', 'monolit'),
                'desc' => esc_html__( 'Enter your social share names separated by a comma. List bellow are available name: facebook,twitter,linkedin,in1,tumblr,digg,googleplus,reddit,pinterest,stumbleupon,email,vk', 'monolit' ),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => "facebook,pinterest,googleplus,twitter,linkedin",
            ),
        ),
    ) );
    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Colors', 'monolit'),
        'id'         => 'styling-settings',
        'subsection' => false,
        //'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'monolit' ) . '<a href="http://docs.reduxframework.com/core/fields/checkbox/" target="_blank">http://docs.reduxframework.com/core/fields/checkbox/</a>',
        'icon'       => 'el-icon-magic',
        'fields' => array(
            array(
                'id' => 'override-preset',
                'type' => 'switch',
                'title' => esc_html__('Use Custom Color', 'monolit'),
                'desc' => wp_kses(__('Set this to <b>On</b> if you want to use color variants bellow.', 'monolit'), array('b'=>array(),'strong'=>array(),'p'=>array()) ),
                'desc' => '',
                'default' => false
            ),
            array(
                'id' => 'main-bg-color',
                'type' => 'color_rgba',
                'title' => esc_html__('Main BG - Loading Background Color ', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Main Page Background Color (default: #1b1b1b - 1).', 'monolit'),
                'default'   => array(
                    'color'     => '#1b1b1b',
                    'alpha'     => 1
                ),
                // 'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'navigation-bg-color',
                'type' => 'color_rgba',
                'title' => esc_html__('Top Naivgation BG Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Top Navigation Background Color (default: #000 - 1).', 'monolit'),
                'default'   => array(
                    'color'     => '#000',
                    'alpha'     => 1
                ),
                // 'validate' => 'color',
                //'mode'=>'background-color',
                // 'transparent'=>true
            ),
            array(
                'id' => 'submenu-bg-color',
                'type' => 'color_rgba',
                'title' => esc_html__('Submenu Background Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Submenu Background Color (default: #000 - 0.91).', 'monolit'),
                'default'   => array(
                    'color'     => '#000',
                    'alpha'     => 0.91
                ),
                // 'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'mobile-submenu-bg-color',
                'type' => 'color_rgba',
                'title' => esc_html__('Submenu Background Color - Mobile View', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Submenu Background Color on mobile view (default: #000 - 1).', 'monolit'),
                'default'   => array(
                    'color'     => '#000',
                    'alpha'     => 1
                ),
                // 'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'social-share-bg-color',
                'type' => 'color_rgba',
                'title' => esc_html__('Socials Share Background Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Background Color for socials share button on the top navigation bar (default: #000 - 1).', 'monolit'),
                'default'   => array(
                    'color'     => '#000',
                    'alpha'     => 1
                ),
                // 'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'footer-bg-color',
                'type' => 'color_rgba',
                'title' => esc_html__('Content Footer Background Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Footer Background Color (default: #1b1b1b - 1).', 'monolit'),
                'default'   => array(
                    'color'     => '#1b1b1b',
                    'alpha'     => 1
                ),
                // 'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'left-footer-bg-color',
                'type' => 'color_rgba',
                'title' => esc_html__('Left Bar Background Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Left Bar Background Color (default: #000 - 1).', 'monolit'),
                'default'   => array(
                    'color'     => '#000',
                    'alpha'     => 1
                ),
                // 'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'white-sec-bg-color',
                'type' => 'color',
                'title' => esc_html__('White Section Background Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('White Section Background Color (default: #fff).', 'monolit'),
                'default'   => '#fff',
                'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'dark-sec-bg-color',
                'type' => 'color',
                'title' => esc_html__('Dark Section Background Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Dark Section Background Color (default: #1b1b1b).', 'monolit'),
                'default'   => '#1b1b1b',
                'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'overlay-bg-color',
                'type' => 'color_rgba',
                'title' => esc_html__('Overlay Background Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Overlay Background Color, which cover parallax background image (default: #000 - 1).', 'monolit'),
                'default'   => array(
                    'color'     => '#000',
                    'alpha'     => 1
                ),
                // 'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'folio-overlay-bg-color',
                'type' => 'color_gradient',
                'title' => esc_html__('Portfolio Overlay Background Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Portfolio Overlay Background Color, which cover parallax background image (default: #000 - 1).', 'monolit'),
                'default'   => array(
                    'from'     => 'transparent',
                    'to'     => '#000'
                ),
                // 'validate' => 'color',
                //'mode'=>'background-color',
            ),

            
            array(
                'id' => 'footer-text-color',
                'type' => 'color',
                'title' => esc_html__('Footer Text Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Footer Text Color (default: #fff).', 'monolit'),
                'default' => '#fff',
                'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'footer-link-text-color',
                'type' => 'color',
                'title' => esc_html__('Footer Link Text Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Footer Link Text Color (default: #fff).', 'monolit'),
                'default' => '#fff',
                'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'footer-title-text-color',
                'type' => 'color',
                'title' => esc_html__('Footer Text Title Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Footer Text Title Color (default: #fff).', 'monolit'),
                'default' => '#fff',
                'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'footer-copyright-color',
                'type' => 'color',
                'title' => esc_html__('Footer Copyright Text Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Footer Copyright Text Color (default: #fff).', 'monolit'),
                'default' => '#fff',
                'validate' => 'color',
                //'mode'=>'background-color',
            ),
            
            array(
                'id' => 'left-social-color',
                'type' => 'color',
                'title' => esc_html__('Left Socials Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Left Socials Color (default: #fff).', 'monolit'),
                'default' => '#fff',
                'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id'       => 'main-nav-menu-color',
                'type'     => 'link_color',
                'title'    => esc_html__('Main Menu Color', 'monolit'),
                'default'  => array(
                    'regular'  => '#ffffff', 
                    'hover'    => '#eaeaea', 
                    //'active'   => '#ffffff',   
                ),
                'active' => false,
                'visited' => false,
            ),
            array(
                'id' => 'main-active-menu-bg-color',
                'type' => 'color',
                'title' => esc_html__('Current Menu Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Current Menu Color (default: #fff).', 'monolit'),
                'default' => '#fff',
                'validate' => 'color',
                //'mode'=>'background-color',
            ),
            

            array(
                'id'       => 'main-nav-submenu-color',
                'type'     => 'link_color',
                'title'    => esc_html__('Sub Menu Color', 'monolit'),
                'default'  => array(
                    'regular'  => '#ffffff', 
                    'hover'    => '#eaeaea', 
                    //'active'   => '#ffffff',   
                ),
                'active' => false,
                'visited' => false,
            ),

            array(
                'id' => 'sub-active-menu-bg-color',
                'type' => 'color',
                'title' => esc_html__('Sub Menu Current Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Sub Menu Current Color (default: #fff).', 'monolit'),
                'default' => '#fff',
                'validate' => 'color',
                //'mode'=>'background-color',
            ),

            array(
                'id' => 'top-socials-color',
                'type' => 'color',
                'title' => esc_html__('Top Social Share Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Top Social Share Color (default: #fff).', 'monolit'),
                'default' => '#fff',
                'validate' => 'color',
                //'mode'=>'background-color',
            ),
            array(
                'id' => 'dark-bg-text-color',
                'type' => 'color',
                'title' => esc_html__('Dark Background Text Color', 'monolit'),
                //'compiler'      => true,
                //'compiler'=> array('.l-line span,.overlay,nav li a:before , nav li a:after,.nav-button span,.section-title h3:before,.services-info:before , .services-info:after,.section-separator,.team-box:before , .team-box:after,.team-box .overlay,.hide-column:before , .hide-column:after,.filter-button ul li,.gallery-filters  a:before,.grid-item-holder:before,.fullwidth-slider-holder .customNavigation a:before,.resume-head:before,.show-hidden-info:before , .show-hidden-info:after,.footer-decor:before , .footer-decor:after,.selectMe:before,.inline-facts-holder:before,.ajaxPageSwitchBacklink:before'),
                'desc' => esc_html__('Set text color for Dark background section, with "dark-bg" extraclass (default: #fff).', 'monolit'),
                'default' => '#fff',
                'validate' => 'color',
                //'mode'=>'background-color',
            ),

        ),
    ) );

    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Fonts', 'monolit'),
        'id'         => 'font-settings',
        'subsection' => false,
        //'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'monolit' ) . '<a href="http://docs.reduxframework.com/core/fields/checkbox/" target="_blank">http://docs.reduxframework.com/core/fields/checkbox/</a>',
        'icon'       => 'el-icon-font',
        'fields' => array(
            
            array(
                'id' => 'body-font',
                'type' => 'typography',
                'output' => array('body'),
                'title' => esc_html__('Body Font', 'monolit'),
                'desc' => wp_kses(__('<p>Specify the body font properties.</br> Default </br>font-family: Roboto </br>font-size: 12px </br>font-weight: 400 </br>color: #000000</p>', 'monolit'), array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
            ),
            array(
                'id' => 'hyperlink-font',
                'type' => 'typography',
                'output' => array('a'),
                'title' => esc_html__('Hyperlink Font', 'monolit'),
                'desc' => wp_kses(__('<p>Hyperlink font properties.</br> Default </br>font-family: Roboto </br>font-size: 12px </br>font-weight: 400 </br>color: #000000</p>', 'monolit'), array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
                // 'text-transform'=>true,
            ),
            array(
                'id' => 'hyperlink-hover-font',
                'type' => 'typography',
                'output' => array('a:hover'),
                'title' => esc_html__('Hyperlink Hover Font', 'monolit'),
                'desc' => wp_kses(__('<p>Hyperlink hover font properties.</br> Default </br>font-family: Roboto </br>font-size: 12px </br>font-weight: 400 </br>color: #000000</p>', 'monolit'),array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
                // 'text-transform'=>true,
            ),
            array(
                'id' => 'paragraph-font',
                'type' => 'typography',
                'output' => array('p'),
                'title' => esc_html__('Paragraph Font', 'monolit'),
                'desc' => wp_kses(__('<p>Specify paragraph font properties. Default </br>font-family: Roboto </br>font-size: 15px </br>line-height: 24px</br>font-weight: 400</br>color: #000000</p>', 'monolit'), array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
            ),

            array(
                'id' => 'header-font',
                'type' => 'typography',
                'output' => array('h1, h2, h3, h4, h5, h6'),
                'title' => esc_html__('Title-Header Font', 'monolit'),
                'desc' => wp_kses(__('<p>Specify the title and heading font properties.</br> Default </br>font-family: Roboto </br>color: #000000</p>', 'monolit'), array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
                'font-size'=> false,
                'line-height'=> true,
            ),
            array(
                'id' => 'monolit-second-font',
                'type' => 'typography',
                'output' => array('nav li a,.hero-wrap-item h2,.serv-details h3,.ser-list li,.inline-filter .gallery-filters a,.inline-filter .count-folio div,.filter-button,.round-counter div,.hid-sidebar h4 ,.pd-holder h5,.team-info h4,.footer-title h2,#submit , .form-submit button,.member-content-nav li a,.main-breadcrumb li > strong,.creat-list li a  , .text-link,.cat-item a,.lg-sub-html,.show-share span,.share-icon:before'),
                'title' => esc_html__('Monolit Theme Bolder Font', 'monolit'),
                'desc' => wp_kses(__('<p>This is bolder font used in the theme. Default </br>font-family: Muli</p>', 'monolit'), array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
                'font-weight'=> false,
                'font-size'=> false,
                'line-height'=> false,
                'color'=> false,
                'text-align'=> false,

            ),
            array(
                'id' => 'monolit-third-font',
                'type' => 'typography',
                'output' => array('blockquote p'),
                'title' => esc_html__('Monolit Theme Italic Font', 'monolit'),
                'desc' => wp_kses(__('<p>Theme italic font. Default </br>font-family: Georgia, "Times New Roman", Times, serif </br>font-style: italic</p>', 'monolit'), array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
            ),
            array(
                'id' => 'monolit-navigation-font',
                'type' => 'typography',
                'output' => array('nav li a'),
                'title' => esc_html__('Monolit Theme Navigation Font', 'monolit'),
                'desc' => wp_kses(__('<p>Theme navigation font. Default </br>font-family: Muli </br>font-size: 10px </br>line-height: 10px</br>font-weight: 600</br>color: #ffffff</p>', 'monolit'), array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
            ),
            array(
                'id' => 'monolit-navigation-hover-font',
                'type' => 'typography',
                'output' => array('nav li a:hover'),
                'title' => esc_html__('Monolit Theme Navigation Hover Font', 'monolit'),
                'desc' => wp_kses(__('<p>Theme navigation hover font. Default </br>font-family: Muli </br>font-size: 10px </br>line-height: 10px</br>font-weight: 600</br>color: #e5e5e5</p>', 'monolit'), array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
            ),
            array(
                'id' => 'monolit-left-title-font',
                'type' => 'typography',
                'output' => array('.footer-title h2,.footer-title h2 a,.footer-title h2 a:hover'),
                'title' => esc_html__('Monolit Left Title Font', 'monolit'),
                'desc' => wp_kses(__('<p>Theme left title font. Default </br>font-family: Muli </br>font-size: 10px </br>line-height: 16px</br>font-weight: 600</br>color: #ffffff</p>', 'monolit'), array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
            ),
            
            array(
                'id' => 'monolit-hero-title-font',
                'type' => 'typography',
                'output' => array('.hero-wrap-item h2'),
                'title' => esc_html__('Monolit Header Title Font', 'monolit'),
                'desc' => wp_kses(__('<p>Theme header title font. Default </br>font-family: Muli </br>font-size: 38px </br>font-weight: 600 </br>color: #ffffff</p>', 'monolit'), array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
                'font-weight'=> false,
                'font-size'=> false,
            ),
            array(
                'id' => 'monolit-hero-sub-title-font',
                'type' => 'typography',
                'output' => array('.hero-wrap-item h3, .hero-wrap-item h3 a'),
                'title' => esc_html__('Monolit Header SubTitle Font', 'monolit'),
                'desc' => wp_kses(__('<p>Theme header sub-title font. Default </br>font-family: Roboto </br>font-size: 18px </br>font-weight: 200 </br>color: #ffffff</p>', 'monolit'), array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
                'font-weight'=> false,
                'font-size'=> false,
            ),
            array(
                'id' => 'monolit-section-title-font',
                'type' => 'typography',
                'output' => array('.section-title'),
                'title' => esc_html__('Page Section Title Font', 'monolit'),
                'desc' => wp_kses(__('<p>Theme page section title font. Default </br>font-family: Roboto </br>font-size: 40px </br>line-height: 64px </br>font-weight: 100</p>', 'monolit'), array( 'br'=>array(),'p'=>array(), ) ),
                'google' => true,
                'subsets'=> true,
                'font-size'=> false,
            ),
            
            
            
        ),
    ) );
    
    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Portfolio', 'monolit'),
        'id'         => 'portfolio-settings',
        'subsection' => false,
        //'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'monolit' ) . '<a href="http://docs.reduxframework.com/core/fields/checkbox/" target="_blank">http://docs.reduxframework.com/core/fields/checkbox/</a>',
        'icon'       => 'el-icon-briefcase',
        'fields' => array(

            array(
                'id'       => 'folio_fullwidth_nav_menu',
                'type'     => 'switch',
                'title'    => esc_html__( 'Fullwidth Navigation Menu', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => false,
            ),

            array(
                'id'       => 'show_folio_header',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Portfolio Header', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                    'id' => 'folio_home_text',
                    'type' => 'text',
                    'title' => esc_html__('Portfolio Heading Text', 'monolit'),
                    // 'subtitle' => esc_html__('', 'monolit'),
                    // 'desc' => esc_html__('', 'monolit'),
                    'default' => 'Our <strong> portfolio </strong>'
                ),
            array(
                    'id' => 'folio_home_text_intro',
                    'type' => 'textarea',
                    'title' => esc_html__('Portfolio Intro Text', 'monolit'),
                    // 'subtitle' => esc_html__('', 'monolit'),
                    // 'desc' => esc_html__('', 'monolit'),
                    'default' => ''
                ),
            array(
                    'id' => 'folio_header_video',
                    'type' => 'text',
                    'title' => esc_html__('Portfolio Header Video', 'monolit'),
                    // 'subtitle' => esc_html__('', 'monolit'),
                    'desc' => esc_html__('Please enter your Youtube video ID (ex: oDpSPNIozt8 ) here to use header background video feature or leave empty to use header background image selected bellow.', 'monolit'),
                    'default' => ''
                ),
            array(
                'id' => 'folio_header_image',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Portfolio Header Image', 'monolit'),
                //'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                // 'desc' => esc_html__('Upload your blog header image', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'default' => array('url' => get_template_directory_uri().'/images/bg/17.jpg'),
            ),
            array(
                'id'       => 'show_folio_breadcrumbs',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Breadcrumbs', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),

            array(
                'id'       => 'show_folio_footer_content',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Content Footer', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),

            array(
                'id' => 'folio_style',
                'type' => 'select',
                'title' => esc_html__('Portfolio Layout', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'desc' => '',
                'options' => array(
                                'horizontal' => 'Horizontal',
                                'horizontal_boxed' => 'Horizontal Boxed',
                                'vertical' => 'Vertical', 
                                'vertical_fullscreen' => 'Vertical Fullscreen', 
                                'parallax' => 'Parallax', 
                                //'gallery_masonry' => 'Gallery Masonry', 
                                //'gallery_grid' => 'Gallery Grid',
                 ), //Must provide key => value pairs for select options
                'default' => 'parallax'
            ),
            array(
                'id' => 'folio_column',
                'type' => 'select',
                'title' => esc_html__('Portfolio Columns', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'desc' => esc_html__('Vertical columns for Horizontal layout', 'monolit'),
                'options' => array('five' => 'Five Columns','four' => 'Four Columns', 'three' => 'Three Columns','two' => 'Two Columns', 'one' => 'One Column'), //Must provide key => value pairs for select options
                'default' => 'two'
            ),
            array(
                'id'       => 'folio_show_filter',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Filter', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                'id'       => 'folio_show_counter',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Counter', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                'id'       => 'folio_posts_per_page',
                'type'     => 'text',
                'title'    => esc_html__( 'Posts per page', 'monolit' ),
                'subtitle' => esc_html__( 'Number of post to show per page, -1 to show all posts.', 'monolit' ),
                'default'  => 10,
            ),
            array(
                'id' => 'folio_filter_orderby',
                'type' => 'select',
                'title' => esc_html__('Order Filter By', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'desc' => '',
                'options' => array(
                                'id' => esc_html__( 'ID', 'monolit' ), 
                                'count' => esc_html__( 'Count', 'monolit' ),
                                'name' => esc_html__( 'Name', 'monolit' ), 
                                'slug' => esc_html__( 'Slug', 'monolit' ),
                                'none' => esc_html__( 'None', 'monolit' )
                            ), //Must provide key => value pairs for select options
                'default' => 'name'
            ),
            array(
                'id' => 'folio_filter_order',
                'type' => 'select',
                'title' => esc_html__('Order Filter', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'desc' => '',
                'options' => array(
                                'ASC' => esc_html__( 'Ascending', 'monolit' ), 
                                'DESC' => esc_html__( 'Descending', 'monolit' ),
                            ), //Must provide key => value pairs for select options
                'default' => 'ASC'
            ),
            array(
                'id' => 'folio_archive_orderby',
                'type' => 'select',
                'title' => esc_html__('Order Portfolio By', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'desc' => '',
                'options' => array(
                                'none' => esc_html__( 'None', 'monolit' ), 
                                'ID' => esc_html__( 'Post ID', 'monolit' ), 
                                'author' => esc_html__( 'Post Author', 'monolit' ),
                                'title' => esc_html__( 'Post title', 'monolit' ), 
                                'name' => esc_html__( 'Post name (post slug)', 'monolit' ),
                                'date' => esc_html__( 'Created Date', 'monolit' ),
                                'modified' => esc_html__( 'Last modified date', 'monolit' ),
                                'parent' => esc_html__( 'Post Parent id', 'monolit' ),
                                'rand' => esc_html__( 'Random', 'monolit' ),
                            ), //Must provide key => value pairs for select options
                'default' => 'date'
            ),
            array(
                'id' => 'folio_archive_order',
                'type' => 'select',
                'title' => esc_html__('Order Portfolio', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'desc' => '',
                'options' => array(
                                'DESC' => esc_html__( 'Descending', 'monolit' ),
                                'ASC' => esc_html__( 'Ascending', 'monolit' ), 
                                
                            ), //Must provide key => value pairs for select options
                'default' => 'DESC'
            ),
            array(
                'id' => 'folio_show_info_first',
                'type' => 'select',
                'title' => esc_html__('Show Info', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'desc' => '',
                'options' => array(
                                'show_on_hover' => esc_html__( 'Show On Hover', 'monolit' ),
                                'show' => esc_html__( 'Show', 'monolit' ), 
                                'hide' => esc_html__( 'Hide', 'monolit' ), 
                                
                            ), //Must provide key => value pairs for select options
                'default' => 'show_on_hover'
            ),
            
            array(
                'id' => 'folio_pad',
                'type' => 'select',
                'title' => esc_html__('Spacing', 'monolit'),
                'subtitle' => esc_html__('The space between portfolio grid items.', 'monolit'),
                'desc' => '',
                'options' => array(
                                'small' => esc_html__('Small','monolit'), 
                                'big' =>  esc_html__('Big','monolit'),
                                'none' =>  esc_html__('None','monolit'),
                            ), //Must provide key => value pairs for select options
                'default' => 'small'
            ),
            array(
                'id'       => 'folio_enable_gallery',
                'type'     => 'switch',
                'title'    => esc_html__( 'Enable Image Gallery on Portfolio Grid', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => false,
            ),
            array(
                'id'       => 'folio_disable_overlay',
                'type'     => 'switch',
                'title'    => esc_html__( 'Disbale Image Overlay Effect', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => false,
            ),
        ),
    ) );

    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Parallax Layout', 'monolit'),
        'id'         => 'portfolio-parallax-settings',
        'subsection' => true,
        //'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'monolit' ) . '<a href="http://docs.reduxframework.com/core/fields/checkbox/" target="_blank">http://docs.reduxframework.com/core/fields/checkbox/</a>',
        // 'icon'       => 'el-icon-briefcase',
        'fields' => array(

            array(
                'id' => 'folio_parallax_first_side',
                'type' => 'select',
                'title' => esc_html__('First Content Side for Parallax layout', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'desc' => '',
                'options' => array('left' => 'Left', 'right' => 'Right'), //Must provide key => value pairs for select options
                'default' => 'left'
            ),
            array(
                'id'       => 'folio_parallax_value',
                'type'     => 'text',
                'title'    => esc_html__( 'Parallax Dimension', 'monolit' ),
                'desc' => esc_html__( 'Pixel number. Which we are telling the browser is to move Portfolio Content down every time we scroll down 100% of the viewport height and move Portfolio Content up every time we scroll up 100% of the viewport height. Ex: 200  or -200 for reverse direction.', 'monolit' ),
                'default'  => '200',
            ),
            array(
                'id'       => 'folio_parallax_show_excerpt',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Post Excerpt on Parallax layout', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => false,
            ),
            array(
                'id'       => 'folio_parallax_show_meta',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Post Meta on Parallax layout', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
        ),
    ) );

    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Password Protected Page', 'monolit'),
        'id'         => 'password_protected',
        'subsection' => false,
        //'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'monolit' ) . '<a href="http://docs.reduxframework.com/core/fields/checkbox/" target="_blank">http://docs.reduxframework.com/core/fields/checkbox/</a>',
        'icon'       => 'el-icon-lock',
        'fields' => array(
            array(
                'id' => 'bgpasspost',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Page Background Image', 'monolit'),
                //'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('This image will be used for background image in password protected page.', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'default' => array('url' => get_template_directory_uri().'/images/bg/2.jpg'),
            ),
            array(
                'id'       => 'passpost_title',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show post title', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                'id' => 'passpost_intro',
                'type' => 'editor',
                'title' => esc_html__('Page Message', 'monolit'),
                'subtitle' => '',
                'desc' => '',
                
                'default' => '<h3>Nullam sed sapien dui. Nulla auctor sit amet sem non porta. <br>Integer iaculis tellus nulla, quis imperdiet magna venenatis vitae.</h3>'
            ),
      
            
        ),
    ) );

    

    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Members', 'monolit'),
        'id'         => 'member-settings',
        'subsection' => false,
        //'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'monolit' ) . '<a href="http://docs.reduxframework.com/core/fields/checkbox/" target="_blank">http://docs.reduxframework.com/core/fields/checkbox/</a>',
        'icon'       => 'el-icon-group',
        'fields' => array(
            array(
                'id'       => 'member_fullwidth_nav_menu',
                'type'     => 'switch',
                'title'    => esc_html__( 'Fullwidth Navigation Menu', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => false,
            ),
            array(
                'id'       => 'show_member_header',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Header', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                    'id' => 'member_home_text',
                    'type' => 'text',
                    'title' => esc_html__('Member Heading Text', 'monolit'),
                    // 'subtitle' => esc_html__('', 'monolit'),
                    // 'desc' => esc_html__('', 'monolit'),
                    'default' => 'Our <strong> Team</strong>'
                ),
            array(
                    'id' => 'member_home_text_intro',
                    'type' => 'textarea',
                    'title' => esc_html__('Member Intro Text', 'monolit'),
                    // 'subtitle' => esc_html__('', 'monolit'),
                    // 'desc' => esc_html__('', 'monolit'),
                    'default' => ''
                ),
            array(
                    'id' => 'member_header_video',
                    'type' => 'text',
                    'title' => esc_html__('Header Background Video', 'monolit'),
                    // 'subtitle' => esc_html__('', 'monolit'),
                    'desc' => esc_html__('Please enter your Youtube video ID (ex: oDpSPNIozt8 ) here to use header background video feature or leave empty to use header background image selected bellow.', 'monolit'),
                    'default' => ''
                ),
            array(
                'id' => 'member_header_image',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Header Background Image', 'monolit'),
                //'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                // 'desc' => esc_html__('Upload your team header image', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'default' => array('url' => get_template_directory_uri().'/images/bg/10.jpg'),
            ),
            array(
                'id'       => 'show_member_breadcrumbs',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Breadcrumbs', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),

            array(
                'id' => 'member_first_side',
                'type' => 'select',
                'title' => esc_html__('First Member Content Side', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'desc' => '',
                'options' => array('left' => 'Left', 'right' => 'Right'), //Must provide key => value pairs for select options
                'default' => 'left'
            ),
            array(
                'id'       => 'member_parallax_value',
                'type'     => 'text',
                'title'    => esc_html__( 'Parallax Dimension', 'monolit' ),
                'desc' => esc_html__( 'Pixel number. Which we are telling the browser is to move Member Photo down every time we scroll down 100% of the viewport height and move Member Photo up every time we scroll up 100% of the viewport height. Ex: 150  or -150 for reverse direction.', 'monolit' ),
                'default'  => '150',
            ),


            array(
                'id'       => 'member_read_more',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Read more', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),


            array(
                    'id'       => 'member_layout',
                    'type'     => 'image_select',
                    //'compiler' => true,
                    'title'    => esc_html__( 'Member Sidebar Layout', 'monolit' ),
                    'desc' => esc_html__( 'Select main content and sidebar layout. The option 4 is default layout with right parallax image for Monolit theme.', 'monolit' ),
                    'options'  => array(
                        'fullwidth' => array(
                            'alt' => 'Fullwidth',
                            'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                        ),
                        'left_sidebar' => array(
                            'alt' => 'Left Sidebar',
                            'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                        ),
                        'right_sidebar' => array(
                            'alt' => 'Right Sidebar',
                            'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                        ),
                        
                    ),
                    'default'  => 'fullwidth'
                ),

            array(
                'id'       => 'member_posts_per_page',
                'type'     => 'text',
                'title'    => esc_html__( 'Posts per page', 'monolit' ),
                'subtitle' => esc_html__( 'Number of post to show per page, -1 to show all posts.', 'monolit' ),
                'default'  => 3,
            ),
            array(
                'id' => 'member_archive_orderby',
                'type' => 'select',
                'title' => esc_html__('Order Members By', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                // 'desc' => '',
                'options' => array(
                                'none' => esc_html__( 'None', 'monolit' ), 
                                'ID' => esc_html__( 'Post ID', 'monolit' ), 
                                'author' => esc_html__( 'Post Author', 'monolit' ),
                                'title' => esc_html__( 'Post title', 'monolit' ), 
                                'name' => esc_html__( 'Post name (post slug)', 'monolit' ),
                                'date' => esc_html__( 'Created Date', 'monolit' ),
                                'modified' => esc_html__( 'Last modified date', 'monolit' ),
                                'parent' => esc_html__( 'Post Parent id', 'monolit' ),
                                'rand' => esc_html__( 'Random', 'monolit' ),
                            ), //Must provide key => value pairs for select options
                'default' => 'date'
            ),
            array(
                'id' => 'member_archive_order',
                'type' => 'select',
                'title' => esc_html__('Order Members', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                // 'desc' => '',
                'options' => array(
                                'DESC' => esc_html__( 'Descending', 'monolit' ),
                                'ASC' => esc_html__( 'Ascending', 'monolit' ), 
                                
                            ), //Must provide key => value pairs for select options
                'default' => 'DESC'
            ),

            array(
                'id' => 'member_list_link',
                'type' => 'text',
                'title' => esc_html__('Member List Link', 'monolit'),
                'desc' => esc_html__('Link for member list icon on single member page. Default: your_domain.com/?post_type=monolit_member or your_domain.com/monolit_member/', 'monolit'),
                'default' => ''
            ),

        ),
    ) );


    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Blog', 'monolit'),
        'id'         => 'blog-settings',
        'subsection' => false,
        //'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'monolit' ) . '<a href="http://docs.reduxframework.com/core/fields/checkbox/" target="_blank">http://docs.reduxframework.com/core/fields/checkbox/</a>',
        'icon'       => 'el-icon-website',
        'fields' => array(
            array(
                'id'       => 'blog_fullwidth_nav_menu',
                'type'     => 'switch',
                'title'    => esc_html__( 'Fullwidth Navigation Menu', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => false,
            ),
            array(
                'id' => 'blog_style',
                'type' => 'select',
                'title' => esc_html__('Blog Style', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                //'desc' => '',
                'options' => array('normal' => 'Normal', 'parallax' => 'Parallax'), //Must provide key => value pairs for select options
                'default' => 'normal'
            ),
            array(
                'id'       => 'show_blog_header',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Blog Header', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                    'id' => 'blog_home_text',
                    'type' => 'text',
                    'title' => esc_html__('Blog Heading Text', 'monolit'),
                    // 'subtitle' => esc_html__('', 'monolit'),
                    // 'desc' => esc_html__('', 'monolit'),
                    'default' => 'Our last <strong> News</strong>'
                ),
            array(
                    'id' => 'blog_home_text_intro',
                    'type' => 'textarea',
                    'title' => esc_html__('Blog Intro Text', 'monolit'),
                    // 'subtitle' => esc_html__('', 'monolit'),
                    // 'desc' => esc_html__('', 'monolit'),
                    'default' => ''
                ),
            array(
                    'id' => 'blog_header_video',
                    'type' => 'text',
                    'title' => esc_html__('Blog Header Video', 'monolit'),
                    // 'subtitle' => esc_html__('', 'monolit'),
                    'desc' => esc_html__('Please enter your Youtube video ID (ex: oDpSPNIozt8 ) here to use header background video feature or leave empty to use header background image selected bellow.', 'monolit'),
                    'default' => ''
                ),
            array(
                'id' => 'blog_header_image',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Blog Header Image', 'monolit'),
                //'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('Upload your blog header image', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'default' => array('url' => get_template_directory_uri().'/images/bg/10.jpg'),
            ),
            array(
                'id'       => 'show_blog_breadcrumbs',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Breadcrumbs', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                    'id'       => 'blog_layout',
                    'type'     => 'image_select',
                    //'compiler' => true,
                    'title'    => esc_html__( 'Blog Sidebar Layout', 'monolit' ),
                    'desc' => esc_html__( 'Select main content and sidebar layout. The option 4 is default layout with right parallax image for Monolit theme.', 'monolit' ),
                    'options'  => array(
                        'fullwidth' => array(
                            'alt' => 'Fullwidth',
                            'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                        ),
                        'left_sidebar' => array(
                            'alt' => 'Left Sidebar',
                            'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                        ),
                        'right_sidebar' => array(
                            'alt' => 'Right Sidebar',
                            'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                        ),
                        
                    ),
                    'default'  => 'right_sidebar'
                ),

            array(
                'id'       => 'blog_author',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Author meta', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            
            array(
                'id'       => 'blog_date',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Date meta', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                'id'       => 'blog_cats',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Categories meta', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                'id'       => 'blog_tags',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Tags meta', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => false,
            ),
            
            array(
                'id'       => 'blog_comments',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Comments meta', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
           
            

        ),
    ) );

    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Blog Single', 'monolit'),
        'id'         => 'blog-single-optons',
        'subsection' => true,
        'fields' => array(

            array(
                'id'       => 'show_blog_header_single',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Single Post Header', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                'id'       => 'blog_featured_single',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Featured Image on single post page', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                'id'       => 'blog_author_single',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Author Block on single post page', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                'id'       => 'blog_tags_single',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Tags meta on single post page', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => true,
            ),
            array(
                'id' => 'blog_share_names',
                'type' => 'text',
                'title' => esc_html__('Share Names', 'monolit'),
                'desc' => esc_html__( 'Enter your social share names separated by a comma. List bellow are available name: facebook,twitter,linkedin,in1,tumblr,digg,googleplus,reddit,pinterest,posterous,email,vk', 'monolit' ),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => "facebook,pinterest,googleplus,twitter,linkedin",
            ),

            array(
                'id'       => 'blog_single_navigation',
                'type'     => 'switch',
                'on'        => esc_html__('Yes','monolit'),
                'off'       => esc_html__('No','monolit'),
                'title'    => esc_html__( 'Show posts navigation', 'monolit' ),
                'default'  => true,
            ),
            array(
                'id'        => 'blog_single_nav_same_term',
                'type'      => 'switch',
                'on'        => esc_html__('Yes','monolit'),
                'off'       => esc_html__('No','monolit'),
                'title'     => esc_html__( 'Next/Prev posts should be in same category', 'monolit' ),
                'default'  => false,
            ),


            array(
                'id' => 'blog_list_link',
                'type' => 'text',
                'title' => esc_html__('Blog List Link', 'monolit'),
                'desc' => esc_html__('Link for blog list icon on single blog post page.', 'monolit'),
                'default' => esc_url( home_url('/blog/' ) )
            ),







            // array(
            //     'id' => 'blog-single-width',
            //     'type' => 'select',
            //     'title' => esc_html__('Blog Single Width', 'monolit'),
            //     'options' => array(
            //                     'blog-normal' => esc_html__('Boxed', 'monolit'),
            //                     'blog-wide' => esc_html__('Wide', 'monolit'),
            //                     'blog-fullwidth' => esc_html__('Fullwidth', 'monolit'),
            //      ), //Must provide key => value pairs for select options
            //     'default' => 'blog-normal'
            // ),
            
            // array(
            //     'id' => 'blog-single-sidebar-width',
            //     'type' => 'select',
            //     'title' => esc_html__('Single Sidebar Width', 'monolit'),
            //     'subtitle' => esc_html__( 'Based on Bootstrap 12 columns.', 'monolit' ),
            //     'options' => array(
            //                     '2' => esc_html__('2 Columns', 'monolit'),
            //                     '3' => esc_html__('3 Columns', 'monolit'),
            //                     '4' => esc_html__('4 Columns', 'monolit'),
            //                     '5' => esc_html__('5 Columns', 'monolit'),
            //                     '6' => esc_html__('6 Columns', 'monolit'),
            //      ), //Must provide key => value pairs for select options
            //     'default' => '4'
            // ),

            // array(
            //     'id'       => 'blog_single_title',
            //     'type'     => 'switch',
            //     'on'        => esc_html__('Yes','monolit'),
            //     'off'       => esc_html__('No','monolit'),
            //     'title'    => esc_html__( 'Show Title', 'monolit' ),
            //     'default'  => false,
            // ),
            // array(
            //     'id'       => 'blog_featured_single',
            //     'type'     => 'switch',
            //     'on'        => esc_html__('Yes','monolit'),
            //     'off'       => esc_html__('No','monolit'),
            //     'title'    => esc_html__( 'Show Featured image', 'monolit' ),
            //     'default'  => true,
            // ),
            
            // array(
            //     'id'       => 'blog_date_single',
            //     'type'     => 'switch',
            //     'on'        => esc_html__('Yes','monolit'),
            //     'off'       => esc_html__('No','monolit'),
            //     'title'    => esc_html__( 'Show Date', 'monolit' ),
            //     'default'  => true,
            // ),
            // array(
            //     'id'       => 'blog_author_meta',
            //     'type'     => 'switch',
            //     'on'        => esc_html__('Yes','monolit'),
            //     'off'       => esc_html__('No','monolit'),
            //     'title'    => esc_html__( 'Show Author', 'monolit' ),
            //     'default'  => true,
            // ),
            // array(
            //     'id'       => 'blog_cats_single',
            //     'type'     => 'switch',
            //     'on'        => esc_html__('Yes','monolit'),
            //     'off'       => esc_html__('No','monolit'),
            //     'title'    => esc_html__( 'Show Categories', 'monolit' ),
            //     'default'  => true,
            // ),
            // array(
            //     'id'       => 'blog_comments_single',
            //     'type'     => 'switch',
            //     'on'        => esc_html__('Yes','monolit'),
            //     'off'       => esc_html__('No','monolit'),
            //     'title'    => esc_html__( 'Show Comments', 'monolit' ),
            //     'default'  => true,
            // ),
            // array(
            //     'id'       => 'blog_tags_single',
            //     'type'     => 'switch',
            //     'on'        => esc_html__('Yes','monolit'),
            //     'off'       => esc_html__('No','monolit'),
            //     'title'    => esc_html__( 'Show Tags', 'monolit' ),
            //     'default'  => true,
            // ),

            // array(
            //     'id'       => 'blog_author_single',
            //     'type'     => 'switch',
            //     'on'        => esc_html__('Yes','monolit'),
            //     'off'       => esc_html__('No','monolit'),
            //     'title'    => esc_html__( 'Show Author Block', 'monolit' ),
            //     'default'  => true,
            // ),

            // array(
            //     'id'        => 'blog_show_share',
            //     'type'      => 'switch',
            //     'on'        => esc_html__('Yes','monolit'),
            //     'off'       => esc_html__('No','monolit'),
            //     'title'     => esc_html__( 'Show Share Post', 'monolit' ),
            //     'default'  => true,
            // ),



            
            



              
        ),
    ));

    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Shop', 'monolit'),
        'id'         => 'shop-settings',
        'subsection' => false,
        'icon'       => 'el-icon-shopping-cart',
        'fields' => array(
            array(
                'id'       => 'shop_fullwidth_nav_menu',
                'type'     => 'switch',
                'on'=> esc_html__('Yes', 'monolit'),
                'off'=> esc_html__('No', 'monolit'),
                'title'    => esc_html__( 'Fullwidth Navigation Menu', 'monolit' ),
                'default'  => false,
            ),


            array(
                'id'       => 'show_shop_header',
                'type'     => 'switch',
                'on'=> esc_html__('Yes', 'monolit'),
                'off'=> esc_html__('No', 'monolit'),
                'title'    => esc_html__( 'Show Shop Header', 'monolit' ),
                'default'  => true,
            ),
            array(
                'id' => 'shop_header_image',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Shop Header Image', 'monolit'),
                'default' => array('url' => get_template_directory_uri().'/images/bg/10.jpg'),
            ),

            array(
                'id'       => 'shop_breadcrumbs',
                'type'     => 'switch',
                'on'=> esc_html__('Yes', 'monolit'),
                'off'=> esc_html__('No', 'monolit'),
                'title'    => esc_html__( 'Show Breadcrumbs', 'monolit' ),
                'default'  => true,
            ),

            array(
                'id'       => 'shop_sidebar',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Shop Sidebar', 'monolit' ),

                'options'  => array(
                    'fullwidth' => array(
                        'alt' => 'No Sidebar',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    'left_sidebar' => array(
                        'alt' => 'Left Sidebar',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    'right_sidebar' => array(
                        'alt' => 'Right Sidebar',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                    
                ),
                'default'  => 'right_sidebar'
            ),

            

            array(
                'id' => 'shop-sidebar-width',
                'type' => 'select',
                'title' => esc_html__('Sidebar Width', 'monolit'),
                'subtitle' => esc_html__( 'Based on Bootstrap 12 columns.', 'monolit' ),
                'options' => array(
                                '2' => esc_html__('2 Columns', 'monolit'),
                                '3' => esc_html__('3 Columns', 'monolit'),
                                '4' => esc_html__('4 Columns', 'monolit'),
                                '5' => esc_html__('5 Columns', 'monolit'),
                                '6' => esc_html__('6 Columns', 'monolit'),
                 ), //Must provide key => value pairs for select options
                'default' => '4'
            ),


            array(
                'id'       => 'shop_posts_per_page',
                'type'     => 'text',
                'title'    => esc_html__( 'Posts per page', 'monolit' ),
                'subtitle' => esc_html__( 'Number of post to show per page, -1 to show all posts.', 'monolit' ),
                'default'  => 12,
            ),
            // array(
            //     'id'       => 'show_image_large_popup',
            //     'type'     => 'switch',
            //     'on'=> esc_html__('Yes', 'monolit'),
            //     'off'=> esc_html__('No', 'monolit'),
            //     'title'    => esc_html__( 'Show image popup button', 'monolit' ),
            //     'subtitle' => esc_html__( 'Set this to On to show image popup button on product list view.', 'monolit' ),
            //     'default'  => true,
            // ),
            

            array(
                'id' => 'shop_columns',
                'type' => 'select',
                'title' => esc_html__('Desktop Columns', 'monolit'),
                'desc' => esc_html__('Number of products per row on desktop view.','monolit'),
                'options' => array(
                                'one' => esc_html__('One column', 'monolit'),
                                'two' => esc_html__('Two columns', 'monolit'),
                                'three' => esc_html__('Three columns', 'monolit'),
                                'four' => esc_html__('Four columns', 'monolit'),
                                'five' => esc_html__('Five columns', 'monolit'),
                                'six' => esc_html__('Six columns', 'monolit'),
                                
                            ),
                'default' => 'three'
            ),


            array(
                'id' => 'shop_columns_tablet',
                'type' => 'select',
                'title' => esc_html__('Horizontal Tablet Columns', 'monolit'),
                'desc' => esc_html__('Number of products per row on tablet horizontal view.','monolit'),
                'options' => array(
                                'one' => esc_html__('One column', 'monolit'),
                                'two' => esc_html__('Two columns', 'monolit'),
                                'three' => esc_html__('Three columns', 'monolit'),
                                'four' => esc_html__('Four columns', 'monolit'),
                                'five' => esc_html__('Five columns', 'monolit'),
                                'six' => esc_html__('Six columns', 'monolit'),
                                
                            ),
                'default' => 'three'
            ),
            

            // array(
            //     'id'       => 'shop_show_header_mini_cart',
            //     'type'     => 'switch',
            //     'on'=> esc_html__('Yes', 'monolit'),
            //     'off'=> esc_html__('No', 'monolit'),
            //     'title'    => esc_html__( 'Show shopping cart on header?', 'monolit' ),
            //     'default'  => true,
            // ),

            
            // array(
            //     'id' => 'shop_layout',
            //     'type' => 'select',
            //     'title' => esc_html__('Shop Layout', 'monolit'),
            //     'options' => array(
            //                     'grid_layout' => esc_html__('Grid Layout', 'monolit'),
            //                     'list_layout' => esc_html__('List Layout', 'monolit'),
            //                 ),
            //     'default' => 'grid_layout'
            // ),

            // array(
            //     'id'       => 'shop_show_layout_switcher',
            //     'type'     => 'switch',
            //     'on'=> esc_html__('Yes', 'monolit'),
            //     'off'=> esc_html__('No', 'monolit'),
            //     'title'    => esc_html__( 'Show layout switch?', 'monolit' ),
            //     'default'  => true,
            // ),

            // array(
            //     'id'       => 'shop_show_product_list_excerpt',
            //     'type'     => 'switch',
            //     'on'=> esc_html__('Yes', 'monolit'),
            //     'off'=> esc_html__('No', 'monolit'),
            //     'title'    => esc_html__( 'Show product excerpt?', 'monolit' ),
            //     'default'  => true,
            // ),
            
        ),
    ) );
    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Product Page', 'monolit'),
        'id'         => 'product-page-settings',
        'subsection' => true,
        'fields' => array(
            // array(
            //     'id' => 'shop-single-image-width',
            //     'type' => 'select',
            //     'title' => esc_html__('Images column width', 'monolit'),
            //     'options' => array(
            //                     '1' => esc_html__('1 Column', 'monolit'),
            //                     '2' => esc_html__('2 Columns', 'monolit'),
            //                     '3' => esc_html__('3 Columns', 'monolit'),
            //                     '4' => esc_html__('4 Columns', 'monolit'),
            //                     '5' => esc_html__('5 Columns', 'monolit'),
            //                     '6' => esc_html__('6 Columns', 'monolit'),
            //                     ), 
            //     'default' => '4'
            // ),

            // array(
            //     'id' => 'single_thumbnails_columns',
            //     'type' => 'select',
            //     'title' => esc_html__('Thumbnails Columns', 'monolit'),
            //     'options' => array('1' => 'One Column', '2' => 'Two Columns','3' => 'Three Columns', '4' => 'Four Columns', '5' => 'Five Columns', '6' => 'Six Columns'), 
            //     'default' => '4'
            // ),

            array(
                'id'       => 'shop_single_navigation',
                'type'     => 'switch',
                'on'        => esc_html__('Yes','monolit'),
                'off'       => esc_html__('No','monolit'),
                'title'    => esc_html__( 'Show Next/Prev products navigation', 'monolit' ),
                'default'  => true,
            ),
            array(
                'id'        => 'shop_single_nav_same_term',
                'type'      => 'switch',
                'on'        => esc_html__('Yes','monolit'),
                'off'       => esc_html__('No','monolit'),
                'title'     => esc_html__( 'Next/Prev products should be in same category', 'monolit' ),
                'default'  => false,
            ),
            array(
                'id' => 'shop_list_link',
                'type' => 'text',
                'title' => esc_html__('Shop List Link', 'monolit'),
                'desc' => esc_html__('Link for shop list icon on single product page.', 'monolit'),
                'default' => esc_url( home_url('/shop/' ) )
            ),



            // array(
            //     'id'       => 'show_single_related',
            //     'type'     => 'switch',
            //     'on'=> esc_html__('Yes', 'monolit'),
            //     'off'=> esc_html__('No', 'monolit'),
            //     'title'    => esc_html__( 'Show Related Products', 'monolit' ),
            //     'subtitle' => esc_html__( 'Set this to Yes to show related products on single product page.', 'monolit' ),
            //     'default'  => true,
            // ),
            array(
                'id' => 'single_related_count',
                'type' => 'text',
                'title' => esc_html__('Related Products Count', 'monolit'),
                'desc' => esc_html__('Set number of related products to show ( -1 for all).','monolit'),
                
                'default' => '3'
            ),
            // array(
            //     'id' => 'single_related_columns',
            //     'type' => 'select',
            //     'title' => esc_html__('Related Columns Grid', 'monolit'),
            //     'options' => array(
            //                     '12' => esc_html__('1 Column', 'monolit'),
            //                     '6' => esc_html__('2 Columns', 'monolit'),
            //                     '4' => esc_html__('3 Columns', 'monolit'),
            //                     '3' => esc_html__('4 Columns', 'monolit'),
                                
            //                     '2' => esc_html__('6 Columns', 'monolit'),
            //                 ),
            //     'default' => '4'
            // ),

            // array(
            //     'id'       => 'show_single_up_sells',
            //     'type'     => 'switch',
            //     'on'=> esc_html__('Yes', 'monolit'),
            //     'off'=> esc_html__('No', 'monolit'),
            //     'title'    => esc_html__( 'Show Up Sells', 'monolit' ),
                
            //     'default'  => true,
            // ),
            array(
                'id' => 'single_up_sells_count',
                'type' => 'text',
                'title' => esc_html__('Up-Sells Count', 'monolit'),
                'desc' => esc_html__('Set number of up-sells products to show ( -1 for all).','monolit'),
                
                'default' => '-1'
            ),
            // array(
            //     'id' => 'single_up_sells_columns',
            //     'type' => 'select',
            //     'title' => esc_html__('Up-Sells Columns Grid', 'monolit'),
            //     'options' => array(
            //                     '12' => esc_html__('1 Column', 'monolit'),
            //                     '6' => esc_html__('2 Columns', 'monolit'),
            //                     '4' => esc_html__('3 Columns', 'monolit'),
            //                     '3' => esc_html__('4 Columns', 'monolit'),
                                
            //                     '2' => esc_html__('6 Columns', 'monolit'),
            //                 ),
            //     'default' => '4'
            // ),

        ),
    ) );

    // Redux::setSection( $opt_name, array(
    //     'title' => esc_html__('My Account Page', 'monolit'),
    //     'id'         => 'shop-myaccount-page-settings',
    //     'subsection' => true,
    //     'fields' => array(
    //         array(
    //             'id'       => 'show_shop_myaccount_header',
    //             'type'     => 'switch',
    //             'on'=> esc_html__('Yes', 'monolit'),
    //             'off'=> esc_html__('No', 'monolit'),
    //             'title'    => esc_html__( 'Show Header with avatar?', 'monolit' ),
    //             'default'  => true,
    //         ),
    //         array(
    //             'id' => 'shop_myaccount_header_image',
    //             'type' => 'media',
    //             'url' => true,
    //             'title' => esc_html__('Header Image', 'monolit'),
                
    //             'default' => array('url' => get_template_directory_uri().'/images/themeline-bg.jpg'),
    //         ),
            
    //     ),
    // ) );
    


    Redux::setSection( $opt_name, array(
        'title' => esc_html__('404 Page', 'monolit'),
        'id'         => '404-intro-text-settings',
        'subsection' => false,
        //'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'monolit' ) . '<a href="http://docs.reduxframework.com/core/fields/checkbox/" target="_blank">http://docs.reduxframework.com/core/fields/checkbox/</a>',
        'icon'       => 'el-icon-file-edit',
        'fields' => array(
            array(
                'id'       => 'fourorfour_fullwidth_nav_menu',
                'type'     => 'switch',
                'title'    => esc_html__( 'Fullwidth Navigation Menu', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => false,
            ),
            array(
                'id' => 'bg404',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('404 Page Background Image', 'monolit'),
                //'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('This image will be used for background image in 404 page.', 'monolit'),
                // 'subtitle' => esc_html__('', 'monolit'),
                'default' => array('url' => get_template_directory_uri().'/images/bg/2.jpg'),
            ),
            array(
                'id' => '404_intro',
                'type' => 'editor',
                'title' => esc_html__('404 Page Message', 'monolit'),
                'subtitle' => '',
                'desc' => '',
                
                'default' => '<h2>Page not found</h2>'
            ),
            array(
                'id' => 'back_home_link',
                'type' => 'text',
                'title' => esc_html__('Back Home Link', 'monolit'),
                // 'desc' => esc_html__('', 'monolit'),
                'default' => esc_url( home_url('/' ) )
            ),
            array(
                'id'       => 'fourorfour_footer_content',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Content Footer', 'monolit' ),
                // 'subtitle' => esc_html__( '', 'monolit' ),
                'default'  => false,
            ),
            
        ),
    ) );

    Redux::setSection( $opt_name, array(
        'title' => esc_html__('Custom Code', 'monolit'),
        'id'         => 'custom-code',
        'subsection' => false,
        'desc'       => wp_kses_post(__( '<p>You can use Firebug - Firefox add-on to adjust your wordpress site\'s style. For more detail please read this tutorial: <a href="https://www.tipsandtricks-hq.com/how-to-use-firebug-to-modify-your-wordpress-sites-css-video-tutorial-4037" target="_blank">How to Use Firebug to Modify Your WordPress Site\'s CSS (Video Tutorial)</a> by <strong>Tips and Tricks HQ</strong>.</p>', 'monolit' ) ),
        // 'icon'       => 'el-icon-file-new',
        'icon'       => 'el-icon-css',
        'fields' => array(
            array(
                'id' => 'custom-css',
                'type' => 'ace_editor',
                'title' => esc_html__('CSS Code - Large Desktop View', 'monolit'),
                'subtitle' => esc_html__('Paste your CSS code here.', 'monolit'),
                'mode' => 'css',
                //'compiler'=>array('body'),
                'full_width'=>false,
                'theme' => 'monokai',
                // 'desc' => 'Possible modes can be found at <a href="'.esc_url('http://ace.c9.io' ).'" target="_blank">http://ace.c9.io/</a>.',
                'default' => ""
            ),
            array(
                'id' => 'custom-css-medium',
                'type' => 'ace_editor',
                'title' => esc_html__('CSS Code - Medium Desktop View', 'monolit'),
                'subtitle' => esc_html__('Paste your CSS code here.', 'monolit'),
                'mode' => 'css',
                //'compiler'=>array('body'),
                'full_width'=>false,
                'theme' => 'monokai',
                // 'desc' => 'Possible modes can be found at <a href="'.esc_url('http://ace.c9.io' ).'" target="_blank">http://ace.c9.io/</a>.',
                'default' => ""
            ),
            array(
                'id' => 'custom-css-tablet',
                'type' => 'ace_editor',
                'title' => esc_html__('CSS Code - Tablet View', 'monolit'),
                'subtitle' => esc_html__('Paste your CSS code here.', 'monolit'),
                'mode' => 'css',
                //'compiler'=>array('body'),
                'full_width'=>false,
                'theme' => 'monokai',
                // 'desc' => 'Possible modes can be found at <a href="'.esc_url('http://ace.c9.io' ).'" target="_blank">http://ace.c9.io/</a>.',
                'default' => ""
            ),
            array(
                'id' => 'custom-css-mobile',
                'type' => 'ace_editor',
                'title' => esc_html__('CSS Code - Mobile View', 'monolit'),
                'subtitle' => esc_html__('Paste your CSS code here.', 'monolit'),
                'mode' => 'css',
                //'compiler'=>array('body'),
                'full_width'=>false,
                'theme' => 'monokai',
                // 'desc' => 'Possible modes can be found at <a href="'.esc_url('http://ace.c9.io' ).'" target="_blank">http://ace.c9.io/</a>.',
                'default' => ""
            ),
            
        ),
    ) );
    /*
    if ( file_exists( get_template_directory() . '/readme.txt' ) ) {
        $section = array(
            'icon'   => 'el el-list-alt',
            'title'  => esc_html__( 'Documentation', 'monolit' ),
            'fields' => array(
                array(
                    'id'       => '17',
                    'type'     => 'raw',
                    'markdown' => true,
                    'content_path' => get_template_directory() . '/readme.txt', // FULL PATH, not relative please
                    //'content' => 'Raw content here',
                ),
            ),
        );
        Redux::setSection( $opt_name, $section );
    }
    */
    /*
     * <--- END SECTIONS
     */

    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    //add_filter( "redux/" . $opt_name . "/field/class/demo_data", "overload_demo_data_field_path" ); // Adds the local field
    add_filter( "redux/" . $opt_name . "/field/class/thumbnail_size", "overload_thumbnail_size_field_path" ); // Adds the local field

    // function overload_demo_data_field_path($field) {

    //     return get_template_directory().'/includes/redux_add_fields/field_demo_data.php';
    // }
    function overload_thumbnail_size_field_path($field) {

        return get_template_directory().'/includes/redux_add_fields/field_thumbnail_size.php';
    }

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }

            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => esc_html__( 'Section via hook', 'monolit' ),
                'desc'   => wp_kses(__( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'monolit' ),array('p'=>array('class'=>array())) ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

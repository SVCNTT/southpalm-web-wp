<?php
/**
 * @package Monolit - Powerfull Multipurpose Personal Wordpress Template
 * @author Cththemes - http://themeforest.net/user/cththemes
 * @date: 25-03-2015
 *
 * @copyright  Copyright ( C ) 2015 cththemes.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

//Home Slider
if(function_exists('vc_map')){

    vc_map( array(
        "name" => esc_html__("Home Image Background", 'monolit'),
        "description" => esc_html__("Page content with image background",'monolit'),
        "base" => "monolit_home_image",
        "content_element" => true,
        "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
        "category"  => 'Monolit Theme',
        "show_settings_on_create" => true,
        "params" => array(
            array(
                "type"      => "attach_image",
                "holder"    => "div",
                "class"     => "ajax-vc-img",
                "heading"   => esc_html__("Background Image", 'monolit'),
                "param_name"=> "bgimg",
                "description" => esc_html__("Background image", 'monolit'),

            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__('Background Parallax Value', 'monolit'),
                "param_name" => "parallax_val",
                "value" => "300",
                "description" => esc_html__("Pixel number. Which we are telling the browser is to move Background Image down every time we scroll down 100% of the viewport height and move Background Image up every time we scroll up 100% of the viewport height. Ex: 300  or -300 for reverse direction.", 'monolit'),
                'dependency' => array(
                    'element' => 'bgimg',
                    //'value' => array( 'monolit_fullheight_sec','monolit_page_sec'),
                    'not_empty' => true,
                ),
            ) ,
            array(
                "type"      => "textarea_html",
                "holder"    => "div",
                "heading"   => esc_html__("Page Content", 'monolit'),
                "param_name"=> "content",
                "description" => esc_html__("Page Content", 'monolit')
            ),  
             
            
            
            array(
                "type"      => "textfield",
                "class"     => "",
                "heading"   => esc_html__("Overlay Opacity", 'monolit'),
                "param_name"=> "opacity",
                "value"     => "0.2",
                "description" => esc_html__("Overlay Opacity value 0.0 - 1", 'monolit')
            ),

            
            array(
                "type" => "textfield",
                "heading" => esc_html__('Scroll Link', 'monolit'),
                "param_name" => "scroll_link",
                "value" => "#sec1",
                "description" => esc_html__("Scroll Link", 'monolit'),

                
            ), 
            array(
                "type" => "textfield",
                "heading" => esc_html__("Extra class name", 'monolit'),
                "param_name" => "el_class",
                "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
            ),
            
            
            
        ),
        'admin_enqueue_js' => get_template_directory_uri() . "/vc_extend/vc_js_elements.js",
        'js_view'=> 'MonolitImagesView',
    ));

    if ( class_exists( 'WPBakeryShortCode' ) ) {
        class WPBakeryShortCode_Monolit_Home_Image extends WPBakeryShortCode {     
        }
    }

    vc_map( array(
       "name"      => esc_html__("Counter", 'monolit'),
       "description" => esc_html__("Animated Counter",'monolit'),
       "base"      => "cth_counter",
       "class"     => "",
       "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
       "category"  => 'Monolit Theme',
       "show_settings_on_create" => true,
       "params"    => array(
            
            array(
                "type"      => "textfield",
                "holder"    => "div",
                "class"     => "",
                "heading"   => esc_html__("Number", 'monolit'),
                "param_name"=> "number",
                "description" => esc_html__("Number", 'monolit'),
                "value" => "461"
            ),
            array(
                "type" => "textarea",
                "holder"    => "div",
                "heading" => esc_html__("Content", "monolit"),
                "param_name" => "content",
                "description" => esc_html__("Content", "monolit"),
                "value"=>"<h6>Finished projects</h6>",
            ),
            array(
                "type"      => "textfield",
                "holder"    => "div",
                "class"     => "",
                "heading"   => esc_html__("Icon Class", 'monolit'),
                "param_name"=> "icon_class",
                "description" => wp_kses(__("Search icon : <a href='http://fontawesome.io/icons/' target='_blank'>FONT AWESOME</a>", 'monolit'),array('a'=>array('href'=>array(),'target'=>array()))),
                "value" => ""
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Extraclass", "monolit"),
                "param_name" => "el_class",
                "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "monolit"),
                "value" => "col-md-4"
            ),
            array(
                "type"      => "textfield",
                // "holder"    => "div",
                "class"     => "",
                "heading"   => esc_html__("Parallax Value", 'monolit'),
                "param_name"=> "parallax_value",
                "description" => esc_html__("Pixel number. Which we are telling the browser is to move Number down every time we scroll down 100% of the viewport height and move Number up every time we scroll up 100% of the viewport height. Ex: 80 or -80 for reverse direction.", 'monolit'),
                "value" => ""
            ),
        )
    ));
    if ( class_exists( 'WPBakeryShortCode' ) ) {
        class WPBakeryShortCode_Cth_Counter extends WPBakeryShortCode {}
    }

    vc_map( array(
        "name" => esc_html__("Owl Carousel Slider", "monolit"),
        "description" => esc_html__("with multi images selected",'monolit'),
        "base" => "monolit_carousel_slider_multiimgs",
        "category"  => 'Monolit Theme',
        // "as_parent" => array('only' => 'monolit_carousel_slider_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
        "show_settings_on_create" => true,
        // "class"=>'cth_home_slider',
        "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png", // Simply pass url to your icon here
        "params" => array(
            array(
                "type"      => "attach_images",
                "holder"    => "div",
                "class"     => "ajax-vc-img",
                "heading"   => esc_html__("Slide Images", 'monolit'),
                "param_name"=> "slideimages",
                "description" => esc_html__("Slide Images", 'monolit')
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Items", "monolit"),
                "param_name" => "items",
                "description" => esc_html__("The number of items you want to see on the screen. Ex: 3", "monolit"),
                "value" => "1"
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__("Center", "monolit"),
                "param_name" => "center",
                "description" => esc_html__("Center item. Works well with even an odd number of items.", "monolit"),
                "value" => array(   
                    esc_html__('No', 'monolit') => 'no',  
                    esc_html__('Yes', 'monolit') => 'yes',   
                ),
                "std"=>'no', 
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("smartSpeed", 'monolit'),
                "param_name" => "smartspeed",
                "value"=>'1300',
                "description" => esc_html__("Speed Calculate, milisecond number. Ex: 250", 'monolit')
            ), 
            array(
                "type" => "dropdown",
                "heading" => esc_html__("Loop", "monolit"),
                "param_name" => "loop",
                // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                "value" => array(   
                    esc_html__('No', 'monolit') => 'no',  
                    esc_html__('Yes', 'monolit') => 'yes',   
                ),
                "std"=>'no', 
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__("Auto Height", "monolit"),
                "param_name" => "autoheight",
                // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                "value" => array(   
                    esc_html__('Yes', 'monolit') => 'yes', 
                    esc_html__('No', 'monolit') => 'no',  
                      
                ),
                "std"=>'yes', 
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__("Auto Width", "monolit"),
                "param_name" => "autowidth",
                "description" => esc_html__("Set non grid content. Try using width style on divs.", "monolit"),
                "value" => array(   
                    esc_html__('No', 'monolit') => 'no',  
                    esc_html__('Yes', 'monolit') => 'yes',   
                ),
                "std"=>'no', 
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__("Auto Play", "monolit"),
                "param_name" => "autoplay",
                // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                "value" => array(   
                    esc_html__('No', 'monolit') => 'no',  
                    esc_html__('Yes', 'monolit') => 'yes',   
                ),
                "std"=>'no', 
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("autoplayTimeout", 'monolit'),
                "param_name" => "autoplaytimeout",
                "value"=>'4000',
                "description" => esc_html__("Time after display next slide (in milisecond)", 'monolit')
            ),

            array(
                "type" => "textfield",
                "heading" => esc_html__("autoplaySpeed", 'monolit'),
                "param_name" => "autoplayspeed",
                "value"=>'3600',
                "description" => esc_html__("Duration of transition between slides (in ms) or boolen", 'monolit')
            ), 
            array(
                "type" => "textfield",
                "heading" => esc_html__("responsive", "monolit"),
                "param_name" => "responsive",
                "description" => esc_html__("The format is: screen-size:number-items-display,larger-screen-size:number-items-display. Ex: 320:1,768:1,992:3,1200:3", "monolit"),
                "value" => ""
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__("Show Pagination", "monolit"),
                "param_name" => "dots",
                // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                "value" => array( 
                    esc_html__('Yes', 'monolit') => 'yes',   
                    esc_html__('No', 'monolit') => 'no',  
                      
                ),
                "std"=>'yes', 
            ),
            array(
                "type"      => "textfield",
                // "holder"    => "div",
                "class"     => "",
                "heading"   => esc_html__("Parallax Value", 'monolit'),
                "param_name"=> "parallax_value",
                "description" => esc_html__("Pixel number. Which we are telling the browser is to move Slider down every time we scroll down 100% of the viewport height and move Slider up every time we scroll up 100% of the viewport height. Ex: 150 or -150 for reverse direction.", 'monolit'),
                "value" => "150"
            ),
            array(
                "type" => "dropdown", 
                "class" => "", 
                "heading" => esc_html__('Box Position', 'monolit'), 
                "param_name" => "box_pos", 
                "value" => array(
                    esc_html__('Move Left 20%', 'monolit') => 'left', 
                    esc_html__('Move Right 20%', 'monolit') => 'right', 
                    esc_html__('Center', 'monolit') => 'center', 
                ), 
                // "description" => esc_html__("Show Info", 'monolit'), 
                "std" => 'left',
            ), 
            array(
                "type" => "dropdown", 
                "class" => "", 
                "heading" => esc_html__('Image Size', 'monolit'), 
                "param_name" => "img_size", 
                "value" => array(
                    esc_html__('Small - Tall', 'monolit') => 'monolit-carousel', 
                    esc_html__('Portfolio Slider', 'monolit') => 'monolitfolio-carousel', 
                    esc_html__('Horizontal Slider', 'monolit') => 'monolithoz-thumb', 
                    esc_html__('Full Size', 'monolit') => 'full', 
                ), 
                // "description" => esc_html__("Show Info", 'monolit'), 
                "std" => 'monolit-carousel',
            ), 
            array(
                "type" => "dropdown",
                "heading" => esc_html__("Show Zoom", "monolit"),
                "param_name" => "show_zoom",
                // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                "value" => array( 
                    esc_html__('Yes', 'monolit') => 'yes',   
                    esc_html__('No', 'monolit') => 'no',  
                      
                ),
                "std"=>'no', 
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Extra class name", "monolit"),
                "param_name" => "el_class",
                "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "monolit")
            ),
            array(
                'type' => 'css_editor',
                'heading' => esc_html__( 'Css', 'monolit' ),
                'param_name' => 'css',
                'group' => esc_html__( 'Design options', 'monolit' ),
            ),
        ),
        'admin_enqueue_js' => get_template_directory_uri() . "/vc_extend/vc_js_elements.js",
        'js_view'=> 'MonolitImagesView',
    ) );

    if ( class_exists( 'WPBakeryShortCode' ) ) {
        class WPBakeryShortCode_Monolit_Carousel_Slider_Multiimgs extends WPBakeryShortCode {}
    }

    


    vc_map( array(
            "name"      => esc_html__("Portfolios Parallax", 'monolit'),
           "description" => esc_html__("Parallax layout of portfolio items",'monolit'),
           "base"      => "monolit_portfolios_parallax",
           "class"     => "",
           "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
           "category"  => 'Monolit Theme',
           "show_settings_on_create" => true,
           "params"    => array(
                array(
                    "type" => "textfield", 
                    "heading" => esc_html__("Portfolio Category IDs to include", 'monolit'), 
                    "param_name" => "cat_ids", 
                    "description" => esc_html__("Enter portfolio category ids to include, separated by a comma. Leave empty to get portfolios from all categories.", 'monolit')
                ), 
                
                array(
                    "type" => "textfield", 
                    "holder" => "div",
                    "heading" => esc_html__("Enter Portfolio IDs", 'monolit'), 
                    "param_name" => "ids", 
                    "description" => esc_html__("Enter portfolio ids to show, separated by a comma.", 'monolit')
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Order Portfolios by', 'monolit'), 
                    "param_name" => "order_by", 
                    "value" => array(
                        esc_html__('Date', 'monolit') => 'date', 
                        esc_html__('ID', 'monolit') => 'ID', 
                        esc_html__('Author', 'monolit') => 'author', 
                        esc_html__('Title', 'monolit') => 'title', 
                        esc_html__('Modified', 'monolit') => 'modified',
                    ), 
                    "description" => esc_html__("Order Portfolios by", 'monolit'), 
                    "default" => 'date',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Order Portfolios', 'monolit'), 
                    "param_name" => "order", 
                    "value" => array(
                        esc_html__('Ascending', 'monolit') => 'ASC',
                        esc_html__('Descending', 'monolit') => 'DESC', 
                        
                    ), 
                    "description" => esc_html__("Order Portfolios", 'monolit'),
                    "default" => 'DESC',
                ), 
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => esc_html__("Post to show", 'monolit'),
                    "param_name" => "posts_per_page",
                    "description" => esc_html__("Number of portfolio items to show (-1 for all).", 'monolit'),
                    "value"=> '-1',
                ),
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("First Side", "monolit"),
                    "param_name" => "first_side",
                    // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                    "value" => array( 
                        esc_html__('Left', 'monolit') => 'left',   
                        esc_html__('Right', 'monolit') => 'right',  
                        esc_html__('Center', 'monolit') => 'center',  
                          
                    ),
                    "default"=>'left', 
                ),
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Date', 'monolit'), 
                    "param_name" => "show_date", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes',
                        esc_html__('No', 'monolit') => 'no',
                         
                         
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "default" => 'yes',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Category', 'monolit'), 
                    "param_name" => "show_cat", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes',
                        esc_html__('No', 'monolit') => 'no',
                         
                         
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "default" => 'yes',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Excerpt', 'monolit'), 
                    "param_name" => "show_excerpt", 
                    "value" => array(
                        esc_html__('No', 'monolit') => 'no',
                        esc_html__('Yes', 'monolit') => 'yes', 
                         
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "default" => 'no',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show View Project', 'monolit'), 
                    "param_name" => "show_view_project", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes', 
                        esc_html__('No', 'monolit') => 'no', 
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "default" => 'yes',
                ), 
                
                
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => esc_html__("View All Projects Link", 'monolit'),
                    "param_name" => "view_all_link",
                    // "description" => esc_html__("Number of portfolio items to show (-1 for all).", 'monolit'),
                    "value"=> home_url('/?post_type=portfolio' ),
                ),

                array(
                    "type" => "dropdown", 
                    "heading" => esc_html__('Show Pagination', 'monolit'), 
                    "param_name" => "show_pagination", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes', 
                        esc_html__('No', 'monolit') => 'no', 
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "std" => 'no',
                ), 

                array(
                    "type"      => "textfield",
                    // "holder"    => "div",
                    // "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Portfolio Title down every time we scroll down 100% of the viewport height and move Portfolio Title up every time we scroll up 100% of the viewport height. Ex: 150 or -150 for reverse direction.", 'monolit'),
                    "value" => "200"
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),

                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),

            )));


        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Portfolios_Parallax extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Portfolios Masonry", 'monolit'),
           "description" => esc_html__("Masonry layout of portfolio items",'monolit'),
           "base"      => "portfolios_masonry",
           "class"     => "",
           "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
           "category"  => 'Monolit Theme',
           "show_settings_on_create" => true,
           "params"    => array(
                array(
                    "type"          => "textfield", 
                    "heading"       => esc_html__("Portfolio Category IDs to exclude", 'monolit'), 
                    "param_name"    => "cat_ids", 
                    "description"   => esc_html__("Enter portfolio category ids to exclude, separated by a comma. Leave empty to display all categories.", 'monolit'),
                    "value"         => '',
                ), 
                array(
                    "type"          => "dropdown", 
                    "class"         => "", 
                    "heading"       => esc_html__('Order Portfolio Categories by', 'monolit'), 
                    "param_name"    => "cat_order_by", 
                    "value"         => array(
                        esc_html__('Name', 'monolit')    => 'name', 
                        esc_html__('ID', 'monolit')      => 'id', 
                        esc_html__('Count', 'monolit')   => 'count', 
                        esc_html__('Slug', 'monolit')    => 'slug', 
                        esc_html__('None', 'monolit')    => 'none',
                    ), 
                    "std"           => 'name',
                ), 
                array(
                    "type"          => "dropdown", 
                    "class"         => "", 
                    "heading"       => esc_html__('Sort Order', 'monolit'), 
                    "param_name"    => "cat_order", 
                    "value"         => array(
                        esc_html__('Ascending', 'monolit')   => 'ASC',
                        esc_html__('Descending', 'monolit')  => 'DESC', 
                        
                    ), 
                    "std"           => 'ASC',
                ), 
                array(
                    "type"          => "dropdown", 
                    "class"         => "", 
                    "heading"       => esc_html__('Show Filter', 'monolit'), 
                    "param_name"    => "show_filter", 
                    "value"         => array(
                        esc_html__('Yes', 'monolit')     => 'yes', 
                        esc_html__('No', 'monolit')      => 'no', 
                    ),  
                    "std"           => 'yes',
                ),
                
               
                array(
                    "type" => "textfield", 
                    "holder" => "div",
                    "heading" => esc_html__("Enter Portfolio IDs", 'monolit'), 
                    "param_name" => "ids", 
                    "description" => esc_html__("Enter portfolio ids to show, separated by a comma. Leave empty to get all.", 'monolit')
                ), 
                array(
                    "type" => "textfield", 
                    // "holder" => "div",
                    "heading" => esc_html__("Portfolio IDs to Exclude", 'monolit'), 
                    "param_name" => "ids_not", 
                    "description" => esc_html__("Enter portfolio ids to exclude, separated by a comma. Use if the field above is empty. Leave empty to get all.", 'monolit')
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Order Portfolios by', 'monolit'), 
                    "param_name" => "order_by", 
                    "value" => array(
                        esc_html__('Date', 'monolit') => 'date', 
                        esc_html__('ID', 'monolit') => 'ID', 
                        esc_html__('Author', 'monolit') => 'author', 
                        esc_html__('Title', 'monolit') => 'title', 
                        esc_html__('Modified', 'monolit') => 'modified',
                    ), 
                    "description" => esc_html__("Order Portfolios by", 'monolit'), 
                    "std" => 'date',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Order Portfolios', 'monolit'), 
                    "param_name" => "order", 
                    "value" => array(
                        esc_html__('Ascending', 'monolit') => 'ASC',
                        esc_html__('Descending', 'monolit') => 'DESC', 
                        
                    ), 
                    "description" => esc_html__("Order Portfolios", 'monolit'),
                    "std" => 'DESC',
                ), 
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => esc_html__("Post to show", 'monolit'),
                    "param_name" => "posts_per_page",
                    "description" => esc_html__("Number of portfolio items to show (-1 for all).", 'monolit'),
                    "value"=> '12',
                ),




                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Columns Layout', 'monolit'), 
                    "param_name" => "columns_grid", 
                    "value" => array(
                        esc_html__('One Column', 'monolit') => 'one', 
                        esc_html__('Two Columns', 'monolit') => 'two', 
                        esc_html__('Three Columns', 'monolit') => 'three', 
                        esc_html__('Four Columns', 'monolit') => 'four', 
                        esc_html__('Five Columns', 'monolit') => 'five', 
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "std" => 'four',
                ), 

                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Info', 'monolit'), 
                    "param_name" => "show_info", 
                    "value" => array(
                        esc_html__('Show On Hover', 'monolit') => 'show_on_hover', 
                        esc_html__('Show', 'monolit') => 'show', 
                        esc_html__('Hide', 'monolit') => 'hide', 
                        
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "std" => 'show_on_hover',
                ), 

                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Spacing', 'monolit'), 
                    "param_name" => "spacing", 
                    "value" => array(
                        esc_html__('Small', 'monolit') => 'small', 
                        esc_html__('Big', 'monolit') => 'big', 
                        esc_html__('None', 'monolit') => 'none', 
                        
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "std" => 'small',
                ), 



                
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Date', 'monolit'), 
                    "param_name" => "show_date", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes',
                        esc_html__('No', 'monolit') => 'no',
                         
                         
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "std" => 'yes',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Category', 'monolit'), 
                    "param_name" => "show_cat", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes',
                        esc_html__('No', 'monolit') => 'no',
                         
                         
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "std" => 'yes',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Excerpt', 'monolit'), 
                    "param_name" => "show_excerpt", 
                    "value" => array(
                        esc_html__('No', 'monolit') => 'no',
                        esc_html__('Yes', 'monolit') => 'yes', 
                         
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "std" => 'no',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show View Project', 'monolit'), 
                    "param_name" => "show_view_project", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes', 
                        esc_html__('No', 'monolit') => 'no', 
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "std" => 'yes',
                ), 

                array(
                    "type" => "dropdown", 
                    "heading" => esc_html__('Show Pagination', 'monolit'), 
                    "param_name" => "show_pagination", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes', 
                        esc_html__('No', 'monolit') => 'no', 
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "std" => 'no',
                ), 

                
                
                
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),

            )));


        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Portfolios_Masonry extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Parallax Box", 'monolit'),
           "description" => esc_html__("Content box with parallax effect.",'monolit'),
           "base"      => "monolit_parallax_box",
           "class"     => "",
           "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
           "category"  => 'Monolit Theme',
           "show_settings_on_create" => true,
           "params"    => array(
                array(
                    "type"      => "textarea_html",
                    "holder"    => "div",
                    "heading"   => esc_html__("Box Content", 'monolit'),
                    "param_name"=> "content",
                    "description" => esc_html__("Box Content", 'monolit')
                ), 
                array(
                    "type"      => "textfield",
                    // "holder"    => "div",
                    // "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Box down every time we scroll down 100% of the viewport height and move Box up every time we scroll up 100% of the viewport height. Ex: 150 or -150 for reverse direction.", 'monolit'),
                    "value" => "150"
                ),
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Box Position', 'monolit'), 
                    "param_name" => "box_pos", 
                    "value" => array(
                        esc_html__('Move Left 20%', 'monolit') => 'left', 
                        esc_html__('Move Right 20%', 'monolit') => 'right', 
                        esc_html__('Center', 'monolit') => 'center', 
                    ), 
                    // "description" => esc_html__("Show Info", 'monolit'), 
                    "default" => 'left',
                ), 
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),

            )));


        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Parallax_Box extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Piechart", 'monolit'),
            "description" => esc_html__("Animated Piechart",'monolit'),
            "base"      => "monolit_piechart",
            "class"     => "",
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Theme',
            "show_settings_on_create" => true,
            "params"    => array(
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__( 'Piecharts', 'monolit' ),
                    'param_name' => 'values',
                    // 'description' => esc_html__( 'Enter values for graph - value, title and color.', 'monolit' ),
                    'value' => urlencode( json_encode( array(
                        array(
                            'description' => '<h4>Design</h4>',
                            'value' => '85',
                            'pie_unit'=>'%',
                            'parallax_value'=>'0',
                            'pie_width' => 'col-md-4'
                        ),
                        array(
                            'description' => '<h4>Architecture</h4>',
                            'value' => '95',
                            'pie_unit'=>'%',
                            'parallax_value'=>'80',
                            'pie_width' => 'col-md-4'
                        ),
                        array(
                            'description' => '<h4>Construction</h4>',
                            'value' => '80',
                            'pie_unit'=>'%',
                            'parallax_value'=>'100',
                            'pie_width' => 'col-md-4'
                        )
                    ) ) ),
                    'params' => array(
                        array(
                            'type' => 'textarea',
                            'heading' => esc_html__( 'Description', 'monolit' ),
                            'param_name' => 'description',
                            // 'description' => esc_html__( 'Enter text used as title of bar.', 'monolit' ),
                            'admin_label' => true,
                            'value'=> '<h4>Design</h4>',
                        ),
                        array(
                            'type' => 'textfield',
                            'heading' => esc_html__( 'Value', 'monolit' ),
                            'param_name' => 'value',
                            'description' => esc_html__( 'Enter value of piechart.', 'monolit' ),
                            'admin_label' => true,
                            'value'=> '85',
                        ),
                        array(
                            "type"      => "textfield",
                            // "holder"    => "div",
                            // "class"     => "",
                            "heading"   => esc_html__("Unit", 'monolit'),
                            "param_name"=> "pie_unit",
                            // "description" => esc_html__("Pixel number. Which we are telling the browser is to move Piechart down every time we scroll down 100% of the viewport height and move Piechart up every time we scroll up 100% of the viewport height. Ex: 80 or -80 for reverse direction.", 'monolit'),
                            "value" => "%"
                        ),
                        array(
                            "type"      => "textfield",
                            // "holder"    => "div",
                            // "class"     => "",
                            "heading"   => esc_html__("Parallax Value", 'monolit'),
                            "param_name"=> "parallax_value",
                            "description" => esc_html__("Pixel number. Which we are telling the browser is to move Piechart down every time we scroll down 100% of the viewport height and move Piechart up every time we scroll up 100% of the viewport height. Ex: 80 or -80 for reverse direction.", 'monolit'),
                            "value" => "0"
                        ),
                        array(
                            "type" => "dropdown", 
                            "class" => "", 
                            "heading" => esc_html__('Width', 'monolit'), 
                            "param_name" => "pie_width", 
                            "value" => array(
                                esc_html__('1/1', 'monolit') => 'col-md-12',
                                esc_html__('1/3', 'monolit') => 'col-md-4', 
                                esc_html__('1/2', 'monolit') => 'col-md-6', 
                                esc_html__('1/4', 'monolit') => 'col-md-3', 
                                esc_html__('1/6', 'monolit') => 'col-md-2', 
                                 
                            ), 
                            // "description" => esc_html__("Show Info", 'monolit'), 
                            "default" => 'col-md-4',
                        ), 
                    ),
                ),
                array(
                    "type" => "colorpicker",
                    // "class" => "",
                    "heading" => esc_html__( "Color", "monolit" ),
                    "param_name" => "pie_color",
                    "value" => '#595F62', //Default Red color
                    // "description" => esc_html__( "Choose text color", "monolit" )
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => esc_html__("Size", 'monolit'),
                    "param_name" => "pie_size",
                    "description" => esc_html__("Size of the pie chart in px. It will always be a square.", 'monolit'),
                    "value" => '150', //Default Red color
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Line Width", 'monolit'),
                    "holder" => "div",
                    "param_name" => "linewidth",
                    "description" => esc_html__("Width of the chart line in px.", 'monolit'),
                    "value" => '30', //Default Red color
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),
            )
        ));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Piechart extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Members Parallax", 'monolit'),
           "description" => esc_html__("Parallax layout of member items",'monolit'),
           "base"      => "members_parallax",
           "class"     => "",
           "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
           "category"  => 'Monolit Theme',
           "show_settings_on_create" => true,
           "params"    => array(
                
                array(
                    "type" => "textfield", 
                    "holder" => "div",
                    "heading" => esc_html__("Enter Member IDs", 'monolit'), 
                    "param_name" => "ids", 
                    "description" => esc_html__("Enter member ids to show, separated by a comma.", 'monolit')
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Order Members by', 'monolit'), 
                    "param_name" => "order_by", 
                    "value" => array(
                        esc_html__('Date', 'monolit') => 'date', 
                        esc_html__('ID', 'monolit') => 'ID', 
                        esc_html__('Author', 'monolit') => 'author', 
                        esc_html__('Title', 'monolit') => 'title', 
                        esc_html__('Modified', 'monolit') => 'modified',
                    ), 
                    
                    "default" => 'date',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Sort Order', 'monolit'), 
                    "param_name" => "order", 
                    "value" => array(
                        esc_html__('Ascending', 'monolit') => 'ASC',
                        esc_html__('Descending', 'monolit') => 'DESC', 
                        
                    ), 
                    "default" => 'DESC',
                ), 
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => esc_html__("Post to show", 'monolit'),
                    "param_name" => "posts_per_page",
                    "description" => esc_html__("Number of member items to show (-1 for all).", 'monolit'),
                    "value"=> '4',
                ),
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("First Side", "monolit"),
                    "param_name" => "first_side",
                    // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                    "value" => array( 
                        esc_html__('Left', 'monolit') => 'left',   
                        esc_html__('Right', 'monolit') => 'right',  
                        esc_html__('Center', 'monolit') => 'center',  
                          
                    ),
                    "default"=>'left', 
                ),
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Date', 'monolit'), 
                    "param_name" => "show_date", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes',
                        esc_html__('No', 'monolit') => 'no',
                         
                         
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "default" => 'yes',
                ), 
                 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Excerpt', 'monolit'), 
                    "param_name" => "show_excerpt", 
                    "value" => array(
                        esc_html__('No', 'monolit') => 'no',
                        esc_html__('Yes', 'monolit') => 'yes', 
                         
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "default" => 'no',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show View More', 'monolit'), 
                    "param_name" => "show_view_project", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes', 
                        esc_html__('No', 'monolit') => 'no', 
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "default" => 'yes',
                ), 
                
                array(
                    "type" => "dropdown", 
                    "heading" => esc_html__('Show Pagination', 'monolit'), 
                    "param_name" => "show_pagination", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes', 
                        esc_html__('No', 'monolit') => 'no', 
                    ), 
                    // "description" => esc_html__("Show Filter", 'monolit'), 
                    "std" => 'no',
                ), 
                
                array(
                    "type"      => "textfield",
                    // "holder"    => "div",
                    // "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Portfolio Title down every time we scroll down 100% of the viewport height and move Portfolio Title up every time we scroll up 100% of the viewport height. Ex: 150 or -150 for reverse direction.", 'monolit'),
                    "value" => "200"
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),

            )));


        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Members_Parallax extends WPBakeryShortCode {}
        }

        vc_map( array(
           "name"      => esc_html__("Team Member", 'monolit'),
           "description" => esc_html__("Team member",'monolit'),
           "base"      => "monolit_member",
           "class"     => "",
           "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
           "category"  => 'Monolit Theme',
           "show_settings_on_create" => true,
           "params"    => array(
               
                array(
                    "type"      => "attach_image",
                    "class"     => "ajax-vc-img",
                    'holder'=> 'div',
                    "heading"   => esc_html__("Photo", 'monolit'),
                    "param_name"=> "photo",
                    "value"     => "",
                    "description" => esc_html__("Upload avatar photo of the member", 'monolit')
                ),

                array(
                    'type' => 'param_group',
                    'heading' => esc_html__( 'Socials', 'monolit' ),
                    'param_name' => 'socials',
                    // 'description' => esc_html__( 'Enter values for graph - value, title and color.', 'monolit' ),
                    // 'value' => urlencode( json_encode( array(
                    //     array(
                    //         'description' => '<h4>Design</h4>'
                            
                    //     )
                        
                    // ) ) ),
                    'value' => '',
                    'params' => array(
                        array(
                            'type' => 'vc_link',
                            'heading' => esc_html__( 'Social Link', 'monolit' ),
                            'param_name' => 'link',
                            'description' => esc_html__( 'You have to use full Awesome icon class for social icon. Ex: fa fa-facebook. Or use normal title instead.', 'monolit' ),
                            // 'admin_label' => true,
                            // 'value'=> '',
                        ),
                        
                    ),
                ),
                
                
   
                array(
                    "type" => "textarea_html",
                    "heading" => esc_html__('Member Info', 'monolit'),
                    "holder" => "div",
                    "param_name" => "content",
                    "value" => '<h3><a href="#" class="ajax">Mila Slavko</a></h3>
<h4>CEO - Main Architect</h4>',
                ),
                array(
                    "type"      => "textfield",
                    "holder"    => "div",
                    // "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Member down every time we scroll down 100% of the viewport height and move Member up every time we scroll up 100% of the viewport height. Ex: 50 or -50 for reverse direction.", 'monolit'),
                    "value" => "50"
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Disable Overlay', 'monolit'),
                    "param_name" => "disable_overlay",
                    "value" => array(   
                                    esc_html__('No', 'monolit') => 'no', 
                                    esc_html__('Yes', 'monolit') => 'yes',  
                                                                                                                   
                                ),
                    // "description" => esc_html__("", 'monolit'), 
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Disable Bottom Right Decoration', 'monolit'),
                    "param_name" => "dis_right_deco",
                    "value" => array(   
                                    esc_html__('No', 'monolit') => 'no', 
                                    esc_html__('Yes', 'monolit') => 'yes',  
                                                                                                                   
                                ),
                    // "description" => esc_html__("", 'monolit'), 
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
            ),
            'admin_enqueue_js' => get_template_directory_uri() . "/vc_extend/vc_js_elements.js",
            'js_view'=> 'MonolitImagesView',
        ));
        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Member extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Testimonial Slider", 'monolit'),
            "description" => esc_html__("Testimonail Slider",'monolit'),
            "base"      => "monolit_testimonials",
            "class"     => "",
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Theme',
            "show_settings_on_create" => true,
            "params"    => array(
                array(
                    "type"      => "textfield",
                    "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Count", 'monolit'),
                    "param_name"=> "count",
                    "value"     => "3",
                    "description" => esc_html__("Number of testimonials to show", 'monolit')
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Order by', 'monolit'),
                    "param_name" => "order_by",
                    "value" => array(   
                        esc_html__('Date', 'monolit') => 'date',  
                        esc_html__('ID', 'monolit') => 'ID',  
                        esc_html__('Author', 'monolit') => 'author',       
                        esc_html__('Title', 'monolit') => 'title',  
                        esc_html__('Modified', 'monolit') => 'modified',  
                    ),
                    "description" => esc_html__("Order by", 'monolit'),  
                    // "default"=>'date',    
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Order', 'monolit'),
                    "param_name" => "order",
                    "value" => array(   
                                    esc_html__('Descending', 'monolit') => 'DESC',
                                    esc_html__('Ascending', 'monolit') => 'ASC',  
                                                                                                                      
                                    ),
                    "description" => esc_html__("Order", 'monolit'),      
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Or Enter Testimonial IDs", "monolit"),
                    "param_name" => "ids",
                    "description" => esc_html__("Enter testimonial ids to show, separated by a comma. (ex: 99,100)", "monolit")
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Show Avatar', 'monolit'),
                    "param_name" => "show_avatar",
                    "value" => array(   
                                    esc_html__('No', 'monolit') => 'no',  
                                    esc_html__('Yes', 'monolit') => 'yes',
                                    
                                                                                                                      
                                    ),
                    "description" => esc_html__("Show avatar", 'monolit'),      
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Items", "monolit"),
                    "param_name" => "items",
                    "description" => esc_html__("The number of items you want to see on the screen. Ex: 3", "monolit"),
                    "value" => "1"
                ),
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("Center", "monolit"),
                    "param_name" => "center",
                    "description" => esc_html__("Center item. Works well with even an odd number of items.", "monolit"),
                    "value" => array(   
                        esc_html__('No', 'monolit') => 'no',  
                        esc_html__('Yes', 'monolit') => 'yes',   
                    ),
                    "default"=>'no', 
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("smartSpeed", 'monolit'),
                    "param_name" => "smartspeed",
                    "value"=>'1300',
                    "description" => esc_html__("Speed Calculate, milisecond number. Ex: 250", 'monolit')
                ), 
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("Loop", "monolit"),
                    "param_name" => "loop",
                    // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                    "value" => array(  
                        esc_html__('Yes', 'monolit') => 'yes',  
                        esc_html__('No', 'monolit') => 'no',  
                          
                    ),
                    "default"=>'no', 
                ),
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("Auto Height", "monolit"),
                    "param_name" => "autoheight",
                    // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                    "value" => array(   
                        esc_html__('Yes', 'monolit') => 'yes', 
                        esc_html__('No', 'monolit') => 'no',  
                          
                    ),
                    "default"=>'yes', 
                ),
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("Auto Width", "monolit"),
                    "param_name" => "autowidth",
                    "description" => esc_html__("Set non grid content. Try using width style on divs.", "monolit"),
                    "value" => array(   
                        esc_html__('No', 'monolit') => 'no',  
                        esc_html__('Yes', 'monolit') => 'yes',   
                    ),
                    "default"=>'no', 
                ),
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("Auto Play", "monolit"),
                    "param_name" => "autoplay",
                    // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                    "value" => array(   
                        esc_html__('No', 'monolit') => 'no',  
                        esc_html__('Yes', 'monolit') => 'yes',   
                    ),
                    "default"=>'no', 
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("autoplayTimeout", 'monolit'),
                    "param_name" => "autoplaytimeout",
                    "value"=>'4000',
                    "description" => esc_html__("Time after display next slide (in milisecond)", 'monolit')
                ),

                array(
                    "type" => "textfield",
                    "heading" => esc_html__("autoplaySpeed", 'monolit'),
                    "param_name" => "autoplayspeed",
                    "value"=>'3600',
                    "description" => esc_html__("Duration of transition between slides (in ms) or boolen", 'monolit')
                ), 
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("responsive", "monolit"),
                    "param_name" => "responsive",
                    "description" => esc_html__("The format is: screen-size:number-items-display,larger-screen-size:number-items-display. Ex: 320:1,768:1,992:3,1200:3", "monolit"),
                    "value" => ""
                ),
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("Show Pagination", "monolit"),
                    "param_name" => "dots",
                    // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                    "value" => array( 
                        esc_html__('No', 'monolit') => 'no',  
                        esc_html__('Yes', 'monolit') => 'yes',   
                        
                          
                    ),
                    "default"=>'yes', 
                ),
                array(
                    "type"      => "textfield",
                    // "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Slider down every time we scroll down 100% of the viewport height and move Slider up every time we scroll up 100% of the viewport height. Ex: 150 or -150 for reverse direction.", 'monolit'),
                    "value" => "0"
                ),

                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", "monolit"),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "monolit")
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),
            )));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Testimonials extends WPBakeryShortCode {}
        }



        vc_map( array(
            "name"      => esc_html__("Timeline List", 'monolit'),
            "description" => esc_html__("Timeline list",'monolit'),
            "base"      => "monolit_timelines",
            "class"     => "",
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Theme',
            "show_settings_on_create" => true,
            "params"    => array(
                array(
                    "type"      => "textfield",
                    "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Count", 'monolit'),
                    "param_name"=> "count",
                    "value"     => "3",
                    "description" => esc_html__("Number of Timelines to show", 'monolit')
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Order by', 'monolit'),
                    "param_name" => "order_by",
                    "value" => array(   
                        esc_html__('Date', 'monolit') => 'date',  
                        esc_html__('ID', 'monolit') => 'ID',  
                        esc_html__('Author', 'monolit') => 'author',       
                        esc_html__('Title', 'monolit') => 'title',  
                        esc_html__('Modified', 'monolit') => 'modified',  
                    ),
                    "description" => esc_html__("Order by", 'monolit'),  
                    // "default"=>'date',    
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Order', 'monolit'),
                    "param_name" => "order",
                    "value" => array(   
                                    esc_html__('Descending', 'monolit') => 'DESC',
                                    esc_html__('Ascending', 'monolit') => 'ASC',  
                                                                                                                      
                                    ),
                    "description" => esc_html__("Order", 'monolit'),      
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Or Enter Timeline IDs", "monolit"),
                    "param_name" => "ids",
                    "description" => esc_html__("Enter Timeline ids to show, separated by a comma. (ex: 99,100)", "monolit")
                ),
                
                array(
                    "type"      => "textfield",
                    // "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Timelines down every time we scroll down 100% of the viewport height and move Timelines up every time we scroll up 100% of the viewport height. Ex: 150 or -150 for reverse direction.", 'monolit'),
                    "value" => ""
                ),
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Left Columns', 'monolit'), 
                    "param_name" => "left_columns", 
                    "value" => array(
                        esc_html__('1/2', 'monolit') => 'col-md-6', 
                        
                        esc_html__('1/3', 'monolit') => 'col-md-4', 
                        
                        esc_html__('1/4', 'monolit') => 'col-md-3', 
                        esc_html__('1/6', 'monolit') => 'col-md-2', 
                        esc_html__('1/1', 'monolit') => 'col-md-12',

                        esc_html__('2/3', 'monolit') => 'col-md-8',
                        esc_html__('3/4', 'monolit') => 'col-md-9',
                        esc_html__('5/6', 'monolit') => 'col-md-10',
                        esc_html__('Hide', 'monolit') => 'hide', 
                         
                    ), 
                    // "description" => esc_html__("Show Info", 'monolit'), 
                    "default" => 'col-md-6',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Right Columns', 'monolit'), 
                    "param_name" => "right_columns", 
                    "value" => array(
                        esc_html__('1/2', 'monolit') => 'col-md-6', 
                        
                        esc_html__('1/3', 'monolit') => 'col-md-4', 
                        
                        esc_html__('1/4', 'monolit') => 'col-md-3', 
                        esc_html__('1/6', 'monolit') => 'col-md-2', 
                        esc_html__('1/1', 'monolit') => 'col-md-12',

                        esc_html__('2/3', 'monolit') => 'col-md-8',
                        esc_html__('3/4', 'monolit') => 'col-md-9',
                        esc_html__('5/6', 'monolit') => 'col-md-10',
                        esc_html__('Hide', 'monolit') => 'hide', 
                         
                    ), 
                    // "description" => esc_html__("Show Info", 'monolit'), 
                    "default" => 'col-md-6',
                ), 

                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", "monolit"),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "monolit")
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),
            )));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Timelines extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Services Grid", 'monolit'),
            "description" => esc_html__("Services Grid",'monolit'),
            "base"      => "monolit_services",
            "class"     => "",
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Theme',
            "show_settings_on_create" => true,
            "params"    => array(
                array(
                    "type"      => "textfield",
                    "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Count", 'monolit'),
                    "param_name"=> "count",
                    "value"     => "4",
                    "description" => esc_html__("Number of Services to show", 'monolit')
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Order by', 'monolit'),
                    "param_name" => "order_by",
                    "value" => array(   
                        esc_html__('Date', 'monolit') => 'date',  
                        esc_html__('ID', 'monolit') => 'ID',  
                        esc_html__('Author', 'monolit') => 'author',       
                        esc_html__('Title', 'monolit') => 'title',  
                        esc_html__('Modified', 'monolit') => 'modified',  
                    ),
                    "description" => esc_html__("Order by", 'monolit'),  
                    // "default"=>'date',    
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Order', 'monolit'),
                    "param_name" => "order",
                    "value" => array(   
                                    esc_html__('Descending', 'monolit') => 'DESC',
                                    esc_html__('Ascending', 'monolit') => 'ASC',  
                                                                                                                      
                                    ),
                    "description" => esc_html__("Order", 'monolit'),      
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Or Enter Service IDs", "monolit"),
                    "param_name" => "ids",
                    "description" => esc_html__("Enter Service ids to show, separated by a comma. (ex: 99,100)", "monolit")
                ),
                
                array(
                    "type"      => "textfield",
                    // "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Services down every time we scroll down 100% of the viewport height and move Services up every time we scroll up 100% of the viewport height. Ex: 150 or -150 for reverse direction.", 'monolit'),
                    "value" => ""
                ),
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Thumbnail Columns', 'monolit'), 
                    "param_name" => "thumbnail_cols", 
                    "value" => array(
                        esc_html__('Two Columns', 'monolit') => 'two-cols', 
                        
                        esc_html__('Three Columns', 'monolit') => 'three-cols', 
                        
                        esc_html__('Four Columns', 'monolit') => 'four-cols', 
                        esc_html__('Six Columns', 'monolit') => 'siz-cols', 
                        esc_html__('One Column', 'monolit') => 'one-cols',
                        
                        // esc_html__('Hide', 'monolit') => 'hide', 
                         
                    ), 
                    // "description" => esc_html__("Show Info", 'monolit'), 
                    "default" => 'two-cols',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Service Content Width', 'monolit'), 
                    "param_name" => "content_width", 
                    "value" => array(
                        esc_html__('1/2', 'monolit') => 'col-md-6', 
                        
                        esc_html__('1/3', 'monolit') => 'col-md-4', 
                        
                        esc_html__('1/4', 'monolit') => 'col-md-3', 
                        esc_html__('1/6', 'monolit') => 'col-md-2',
                        esc_html__('2/3', 'monolit') => 'col-md-8',
                        esc_html__('3/4', 'monolit') => 'col-md-9',
                        esc_html__('5/6', 'monolit') => 'col-md-10', 
                        esc_html__('1/1', 'monolit') => 'col-md-12',

                        
                        // esc_html__('Hide', 'monolit') => 'hide', 
                         
                    ), 
                    // "description" => esc_html__("Show Info", 'monolit'), 
                    "default" => 'col-md-6',
                ), 

                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", "monolit"),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "monolit")
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),
            )));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Services extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Google Map", 'monolit'),
            "description" => esc_html__("Monolit google map style",'monolit'),
            "base"      => "monolit_gmap",
            "class"     => "",
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Theme',
            //'admin_enqueue_css'=> get_template_directory_uri() . "/vc_extend/admin_style.css",
            "show_settings_on_create" => true,
            "params"    => array(
                array(
                    "type" => "textfield",
                    "class"=>"",
                    "holder"=>'div',
                    "heading" => esc_html__('Address Latitude', 'monolit'),
                    "param_name" => "map_lat",
                    "value" => "40.7143528",
                    "description" => wp_kses(__("Enter your address latitude. You can get your value from: <a href='http://www.gps-coordinates.net/' target='_blank'>http://www.gps-coordinates.net/</a>", 'monolit'),array('a'=>array('href'=>array(),'target'=>array()))),
                ),
                array(
                    "type" => "textfield",
                    "class"=>"",
                    "holder"=>'div',
                    "heading" => esc_html__('Address Longtitude', 'monolit'),
                    "param_name" => "map_long",
                    "value" => "-74.0059731",
                    "description" => wp_kses(__("Enter your address longtitude. You can get your value from: <a href='http://www.gps-coordinates.net/' target='_blank'>http://www.gps-coordinates.net/</a>", 'monolit'),array('a'=>array('href'=>array(),'target'=>array()))), 
                    
                ),
                array(
                    "type" => "textfield",
                    "class"=>"",
                    "holder"=>'div',
                    "heading" => esc_html__('Address String', 'monolit'),
                    "param_name" => "map_address",
                    "value" => "Our office  - New York City",
                    "description" => esc_html__("Address String", 'monolit'), 
                ),
                array(
                    "type" => "textfield",
                    "class"=>"",
                    "holder"=>'div',
                    "heading" => esc_html__('Map Zoom', 'monolit'),
                    "param_name" => "map_zoom",
                    "value" => "14",
                    "description" => esc_html__("Map Zoom", 'monolit'), 
                    
                ),
                array(
                    "type"      => "attach_image",
                    "class"     => "ajax-vc-img",
                    'hoder'     => 'div',
                    "heading"   => esc_html__("Map Marker", 'monolit'),
                    "param_name"=> "map_marker",
                    "value"     => "",
                    "description" => esc_html__("Upload google map marker or leave it empty to use default.", 'monolit'),
                ),
                array(
                    "type" => "textfield",
                    "class"=>"",
                    // "holder"=>'div',
                    "heading" => esc_html__('Map Height', 'monolit'),
                    "param_name" => "map_height",
                    "value" => "400",
                    "description" => esc_html__("Enter your map height in pixel. Default: 400", 'monolit'), 
                    
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Use Default Style', 'monolit'),
                    "param_name" => "default_style",
                    "value" => array(   
                                    esc_html__('No', 'monolit') => 'false',  
                                    esc_html__('Yes', 'monolit') => 'true',                                                                                
                                ),
                    "description" => esc_html__("Set this to Yes to use default Google map style.", 'monolit'), 
                ),
                array(
                    "type"      => "textfield",
                    // "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Google Map down every time we scroll down 100% of the viewport height and move Google Map up every time we scroll up 100% of the viewport height. Ex: 150 or -150 for reverse direction.", 'monolit'),
                    "value" => ""
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "value"=>'',
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
            ),
            'admin_enqueue_js' => get_template_directory_uri() . "/vc_extend/vc_js_elements.js",
            'js_view'=> 'MonolitImagesView',
        ));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Gmap extends WPBakeryShortCode {}
        }

        vc_map( array(
           "name"      => esc_html__("Skills Bar", 'monolit'),
           "description" => esc_html__("Animated skills bar",'monolit'),
           "base"      => "monolit_skills_bar",
           "class"     => "",
           "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
           "category"  => 'Monolit Theme',
           "show_settings_on_create" => true,
           "params"    => array(
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__( 'Widget Title', 'monolit' ),
                    'holder' => 'div',
                    'param_name' => 'title',
                    // 'description' => esc_html__( 'Enter text used as title of bar.', 'monolit' ),
                    'value' => 'Skills',
                ),
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__( 'Values', 'monolit' ),
                    'param_name' => 'values',
                    // 'holder' => 'span',
                    'description' => esc_html__( 'Enter values for graph - value, title and color.', 'monolit' ),
                    'value' => urlencode( json_encode( array(
                        array(
                            'label' => esc_html__( 'Photoshop', 'monolit' ),
                            'value' => '95',
                        ),
                        array(
                            'label' => esc_html__( 'Illustrator', 'monolit' ),
                            'value' => '65',
                        ),
                        array(
                            'label' => esc_html__( '3D MAX', 'monolit' ),
                            'value' => '75',
                        ),
                        
                    ) ) ),
                    'params' => array(
                        array(
                            'type' => 'textfield',
                            'heading' => esc_html__( 'Label', 'monolit' ),
                            'param_name' => 'label',
                            'description' => esc_html__( 'Enter text used as title of bar.', 'monolit' ),
                            'admin_label' => true,
                        ),
                        array(
                            'type' => 'textfield',
                            'heading' => esc_html__( 'Value', 'monolit' ),
                            'param_name' => 'value',
                            'description' => esc_html__( 'Enter value of bar.', 'monolit' ),
                            'admin_label' => true,
                        ),
                    ),
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", "monolit"),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "monolit")
                ),
            )));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Skills_Bar extends WPBakeryShortCode {}
        }


        vc_map( array(
            "name" => esc_html__("Home Slider", "monolit"),
            "description" => esc_html__("Slider element for home page",'monolit'),
            "base" => "monolit_home_slider",
            "category"  => 'Monolit Theme',
            // "as_parent" => array('only' => 'monolit_carousel_slider_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
            "content_element" => true,
            "show_settings_on_create" => true,
            // "class"=>'cth_home_slider',
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png", // Simply pass url to your icon here
            "params" => array(
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__( 'Slides', 'monolit' ),
                    'param_name' => 'values',
                    // 'description' => esc_html__( 'Enter values for graph - value, title and color.', 'monolit' ),
                    'value' => urlencode( json_encode( array(
                        array(
                            'slideimg' => '13',
                            'slide_content' => '<h2> Monolit Studio</h2>
<h3>Architecture</h3>
<a href="#sec1" class="hero-link custom-scroll-link">Start exploer</a>',
                            // 'pie_unit'=>'%',
                            // 'parallax_value'=>'0',
                            // 'pie_width' => 'col-md-4'
                        ),
                        array(
                            'slideimg' => '10',
                            'slide_content' => '<h2>Quisque non augue</h2>
<h3>Design - Interior</h3>
<a href="http:demowp.cththemes.net/monolit/portfolio/portfolio-item-1/" class="hero-link ajax">View project</a>',
                            // 'pie_unit'=>'%',
                            // 'parallax_value'=>'80',
                            // 'pie_width' => 'col-md-4'
                        ),
                        array(
                            'slideimg' => '12',
                            'slide_content' => '<h2> Our Services </h2>
<h3>Architecture - Design</h3>
<a href="http:demowp.cththemes.net/monolit/services/" class="hero-link ajax">View Services</a>',
                            // 'pie_unit'=>'%',
                            // 'parallax_value'=>'100',
                            // 'pie_width' => 'col-md-4'
                        )
                    ) ) ),
                    'params' => array(
                        array(
                            "type"      => "attach_image",
                            "holder"    => "div",
                            "class"     => "",
                            "heading"   => esc_html__("Slide Image", 'monolit'),
                            "param_name"=> "slideimg",
                            // "description" => esc_html__("Slide Images", 'monolit')
                        ),
                        array(
                            'type' => 'textarea',
                            'heading' => esc_html__( 'Content', 'monolit' ),
                            'param_name' => 'slide_content',
                            // 'description' => esc_html__( 'Enter text used as title of bar.', 'monolit' ),
                            // 'admin_label' => true,
                            'value'=> '',
                        ),
                        
                    ),
                ),
                
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Items", "monolit"),
                    "param_name" => "items",
                    "description" => esc_html__("The number of items you want to see on the screen. Ex: 3", "monolit"),
                    "value" => "1"
                ),
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("Center", "monolit"),
                    "param_name" => "center",
                    "description" => esc_html__("Center item. Works well with even an odd number of items.", "monolit"),
                    "value" => array(   
                        esc_html__('No', 'monolit') => 'no',  
                        esc_html__('Yes', 'monolit') => 'yes',   
                    ),
                    "default"=>'no', 
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("smartSpeed", 'monolit'),
                    "param_name" => "smartspeed",
                    "value"=>'1200',
                    "description" => esc_html__("Speed Calculate, milisecond number. Ex: 250", 'monolit')
                ), 
                
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("Auto Play", "monolit"),
                    "param_name" => "autoplay",
                    // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                    "value" => array(   
                        esc_html__('No', 'monolit') => 'no',  
                        esc_html__('Yes', 'monolit') => 'yes',   
                    ),
                    "default"=>'no', 
                ),
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("Loop", "monolit"),
                    "param_name" => "loop",
                    "description" => esc_html__("Restart when reaches to the end.", "monolit"),
                    "value" => array(   
                        esc_html__('No', 'monolit') => 'no',  
                        esc_html__('Yes', 'monolit') => 'yes',   
                    ),
                    "default"=>'no', 
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("autoplayTimeout", 'monolit'),
                    "param_name" => "autoplaytimeout",
                    "value"=>'4000',
                    "description" => esc_html__("Time after display next slide (in milisecond)", 'monolit')
                ),

                array(
                    "type" => "textfield",
                    "heading" => esc_html__("autoplaySpeed", 'monolit'),
                    "param_name" => "autoplayspeed",
                    "value"=>'3600',
                    "description" => esc_html__("Duration of transition between slides (in ms) or boolen", 'monolit')
                ), 
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("responsive", "monolit"),
                    "param_name" => "responsive",
                    "description" => esc_html__("The format is: screen-size:number-items-display,larger-screen-size:number-items-display. Ex: 320:1,768:1,992:3,1200:3", "monolit"),
                    "value" => ""
                ),
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("Show Pagination", "monolit"),
                    "param_name" => "dots",
                    // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                    "value" => array( 
                        esc_html__('Yes', 'monolit') => 'yes',   
                        esc_html__('No', 'monolit') => 'no',  
                          
                    ),
                    "default"=>'yes', 
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Animated Duration", 'monolit'),
                    "param_name" => "ani_duration",
                    "value"=>'1300',
                    "description" => esc_html__("Time after display background image will change after text slide changed (in milisecond). Ex: 1300", 'monolit')
                ),
                array(
                    "type"      => "textfield",
                    "class"     => "",
                    "heading"   => esc_html__("Overlay Opacity", 'monolit'),
                    "param_name"=> "opacity",
                    "value"     => "0.2",
                    "description" => esc_html__("Overlay Opacity value 0.0 - 1", 'monolit')
                ), 
                array(
                    "type"      => "textfield",
                    // "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Background Image down every time we scroll down 100% of the viewport height and move Background Image up every time we scroll up 100% of the viewport height. Ex: 300 or -300 for reverse direction.", 'monolit'),
                    "value" => "300"
                ),
                
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", "monolit"),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "monolit")
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),
            ),
            // "js_view" => 'VcColumnView'
        ) );

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Home_Slider extends WPBakeryShortCode {}
        }

        vc_map( array(
           "name"      => esc_html__("Home Slideshow", 'monolit'),
           "description" => esc_html__("Monolit home with background slideshow images",'monolit'),
           "base"      => "monolit_home_slideshow",
           "class"     => "",
           "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
           "category"  => 'Monolit Theme',
           "show_settings_on_create" => true,
           "params"    => array(
                array(
                    "type"      => "attach_images",
                    "holder"    => "div",
                    "class"     => "ajax-vc-img",
                    "heading"   => esc_html__("Background Images", 'monolit'),
                    "param_name"=> "slideimgs",
                    "description" => esc_html__("Background slideshow images", 'monolit'),
                    "value" => "12,13,14"
                ),
                array(
                    "type"      => "textarea_html",
                    "holder"    => "div",
                    "heading"   => esc_html__("Page Content", 'monolit'),
                    "param_name"=> "content",
                    "description" => esc_html__("Page Content", 'monolit'),
                    "value"=>'<h2> Monolit Studio</h2><h3>Architecture</h3>'
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__('Scroll Link', 'monolit'),
                    "param_name" => "scroll_link",
                    "value" => "#sec1",
                    "description" => esc_html__("Scroll Link", 'monolit'),

                    
                ),  
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Items", "monolit"),
                    "param_name" => "items",
                    "description" => esc_html__("The maximum amount of items displayed: 1", "monolit"),
                    "value" => "1"
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("autoplayTimeout", 'monolit'),
                    "param_name" => "autoplaytimeout",
                    "value"=>'4000',
                    "description" => esc_html__("Time after display next slide (in milisecond)", 'monolit')
                ),

                array(
                    "type" => "textfield",
                    "heading" => esc_html__("autoplaySpeed", 'monolit'),
                    "param_name" => "autoplayspeed",
                    "value"=>'3600',
                    "description" => esc_html__("Duration of transition between slides (in ms) or boolen", 'monolit')
                ),
                array(
                    "type"      => "textfield",
                    // "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Background Image down every time we scroll down 100% of the viewport height and move Background Image up every time we scroll up 100% of the viewport height. Ex: 300 or -300 for reverse direction.", 'monolit'),
                    "value" => "300"
                ),
                array(
                    "type"      => "textfield",
                    "class"     => "",
                    "heading"   => esc_html__("Overlay Opacity", 'monolit'),
                    "param_name"=> "opacity",
                    "value"     => "0.2",
                    "description" => esc_html__("Overlay Opacity value 0.0 - 1", 'monolit')
                ), 
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extraclass", "monolit"),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "monolit")
                ),
            ),
           'admin_enqueue_js' => get_template_directory_uri() . "/vc_extend/vc_js_elements.js",
            'js_view'=> 'MonolitImagesView',
        ));
        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Home_Slideshow extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name" => esc_html__("Home Youtube Video", 'monolit'),
            "description" => esc_html__("Home background video from Youtube",'monolit'),
            "base" => "monolit_home_youtube_video",
            "content_element" => true,
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Theme',
            "show_settings_on_create" => true,
            "params" => array(
                array(
                    "type"      => "textarea_html",
                    "holder"    => "div",
                    "heading"   => esc_html__("Content", 'monolit'),
                    "param_name"=> "content",
                    // "description" => esc_html__("Page Content", 'monolit'),
                    "value" => '<h2> Monolit Studio</h2>
<h3>Architecture</h3>'
                ),  
                array(
                    "type" => "textfield",
                    "heading" => esc_html__('Scroll Link', 'monolit'),
                    "param_name" => "scroll_link",
                    "value" => "#sec1",
                    "description" => esc_html__("Scroll Link", 'monolit'),

                    
                ),  
                 
                array(
                    "type"      => "textfield",
                    "class"     => "",
                    "heading"   => esc_html__("Your Youtube Video ID", 'monolit'),
                    "param_name"=> "video",
                    "value"     => "oDpSPNIozt8",
                    "description" => esc_html__("Your Youtube Video ID: oDpSPNIozt8", 'monolit')
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Video Quality', 'monolit'),
                    "param_name" => "quality",
                    "value" => array(   
                                    'default' => 'default',  
                                    'small' => 'small',  
                                    'medium' => 'medium',  
                                    'large' => 'large',  
                                    'hd720' => 'hd720',  
                                    'hd1080' => 'hd1080',  
                                    'highres' => 'highres', 
                                                                                                                    
                                ),
                    "std" => 'highres', 
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Mute', 'monolit'),
                    "param_name" => "mute",
                    "value" => array(   
                                    esc_html__('Yes', 'monolit') => '1',  
                                    esc_html__('No', 'monolit') => '0',                                                                                
                                ),
                    // "description" => esc_html__("", 'monolit'), 
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Pause on scroll', 'monolit'),
                    "param_name" => "pauseonscroll",
                    "value" => array(   
                                    esc_html__('Yes', 'monolit') => '1',  
                                    esc_html__('No', 'monolit') => '0',                                                                                
                                ),
                    "std" => '1', 
                ),
                array(
                    "type"      => "attach_image",
                    "holder"    => "div",
                    "class"     => "ajax-vc-img",
                    "heading"   => esc_html__("Background Image", 'monolit'),
                    "param_name"=> "bgimg",
                    "description" => esc_html__("Background image for mobile device", 'monolit'),
                    "value"=>'10'
                ),
                
                array(
                    "type"      => "textfield",
                    "class"     => "",
                    "heading"   => esc_html__("Overlay Opacity", 'monolit'),
                    "param_name"=> "opacity",
                    "value"     => "0.2",
                    "description" => esc_html__("Overlay Opacity value 0.0 - 1", 'monolit')
                ),
                array(
                    "type"      => "textfield",
                    // "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Background Video down every time we scroll down 100% of the viewport height and move Background Video up every time we scroll up 100% of the viewport height. Ex: 300 or -300 for reverse direction.", 'monolit'),
                    "value" => "300"
                ),
                
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
                
                
                
            ),
            'admin_enqueue_js' => get_template_directory_uri() . "/vc_extend/vc_js_elements.js",
            'js_view'=> 'MonolitImagesView',
        ));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Home_Youtube_Video extends WPBakeryShortCode {     
            }
        }

        vc_map( array(
            "name" => esc_html__("Home Vimeo Video", 'monolit'),
            "description" => esc_html__("Home background video from Vimeo",'monolit'),
            "base" => "monolit_home_vimeo_video",
            "content_element" => true,
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Theme',
            "show_settings_on_create" => true,
            "params" => array(
                array(
                    "type"      => "textarea_html",
                    "holder"    => "div",
                    "heading"   => esc_html__("Content", 'monolit'),
                    "param_name"=> "content",
                    // "description" => esc_html__("Page Content", 'monolit'),
                    "value" => '<h2> Monolit Studio</h2>
<h3>Architecture</h3>'
                ),  
                array(
                    "type" => "textfield",
                    "heading" => esc_html__('Scroll Link', 'monolit'),
                    "param_name" => "scroll_link",
                    "value" => "#sec1",
                    "description" => esc_html__("Scroll Link", 'monolit'),

                    
                ),  
                 
                array(
                    "type"      => "textfield",
                    "class"     => "",
                    "heading"   => esc_html__("Your Vimeo Video ID", 'monolit'),
                    "param_name"=> "video",
                    "value"     => "143243001",
                    "description" => esc_html__("Your Vimeo Video ID: 143243001", 'monolit')
                ),

                array(
                    "type"          => "dropdown",
                    "heading"       => esc_html__('Video Quality', 'monolit'),
                    "param_name"    => "quality",
                    "value"         => array(   
                                        esc_html__( '4K' , 'monolit' )       => '4K',  
                                        esc_html__( '2K' , 'monolit' )       => '2K',  
                                        esc_html__( '1080P' , 'monolit' )    => '1080p',  
                                        esc_html__( '720P' , 'monolit' )     => '720p',  
                                        esc_html__( '540P' , 'monolit' )     => '540p',  
                                        esc_html__( '360P' , 'monolit' )     => '360p',                                                                            
                    ),
                    "std"           => '1080p', 
                ),
                array(
                    "type"          => "dropdown",
                    "heading"       => esc_html__('Mute', 'monolit'),
                    "param_name"    => "mute",
                    "value"         => array(   
                                        esc_html__('Yes', 'monolit') => '1',  
                                        esc_html__('No', 'monolit') => '0',                                                                                
                    ),
                    "std"           =>"1"
                ),

                array(
                    "type"          => "dropdown",
                    "heading"       => esc_html__('Loop', 'monolit'),
                    "param_name"    => "loop",
                    "value"         => array(   
                                        esc_html__('Yes', 'monolit') => '1',  
                                        esc_html__('No', 'monolit') => '0',                                                                                
                    ),
                    "std"           =>"1"
                ),
                    
                array(
                    "type"      => "attach_image",
                    "holder"    => "div",
                    "class"     => "ajax-vc-img",
                    "heading"   => esc_html__("Background Image", 'monolit'),
                    "param_name"=> "bgimg",
                    "description" => esc_html__("Background image for mobile device", 'monolit'),
                    "value"=>'10'
                ),
                
                array(
                    "type"      => "textfield",
                    "class"     => "",
                    "heading"   => esc_html__("Overlay Opacity", 'monolit'),
                    "param_name"=> "opacity",
                    "value"     => "0.2",
                    "description" => esc_html__("Overlay Opacity value 0.0 - 1", 'monolit')
                ),
                array(
                    "type"      => "textfield",
                    // "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Background Video down every time we scroll down 100% of the viewport height and move Background Video up every time we scroll up 100% of the viewport height. Ex: 300 or -300 for reverse direction.", 'monolit'),
                    "value" => "300"
                ),
                
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
                
                
                
            ),
            'admin_enqueue_js' => get_template_directory_uri() . "/vc_extend/vc_js_elements.js",
            'js_view'=> 'MonolitImagesView',
        ));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Home_Vimeo_Video extends WPBakeryShortCode {     
            }
        }

        vc_map( array(
            "name"      => esc_html__("Our Partners", 'monolit'),
            "description" => esc_html__("List of our partners or clients",'monolit'),
            "base"      => "monolit_our_partners",
            "class"     => "",
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Theme',
            //'admin_enqueue_css'=> get_template_directory_uri() . "/vc_extend/admin_style.css",
            "show_settings_on_create" => true,
            "params"    => array(

                array(
                    "type"      => "attach_images",
                    "holder"    => "div",
                    "class"     => "ajax-vc-img",
                    "heading"   => esc_html__("Partner Images", 'monolit'),
                    "param_name"=> "partnerimgs",
                    // "description" => esc_html__("Sponsors Images", 'monolit')
                    "value"     => '436,437,438,439,440',
                ),

                array(
                    "type"      => "textarea",
                    "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Partner Links", 'monolit'),
                    "param_name"=> "content",
                    "value"     => 'http://market.envato.com
http://lesscss.org
https://jquery.com
http://mailchimp.com
http://sass-lang.com',
                    "description" => esc_html__("Enter links for each partner (Note: divide links with linebreaks (Enter)).", 'monolit')
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Target', 'monolit'),
                    "param_name" => "target",
                    "value" => array(   
                                    esc_html__('Opens Partner link in new window', 'monolit') => '_blank',  
                                    esc_html__('Opens Partner link in the same window', 'monolit') => '_self',                                                                               
                                ),
                    "std" => '_blank', 
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Columns Grid', 'monolit'),
                    "param_name" => "columns",
                    "value" => array(   
                        esc_html__('One Column', 'monolit') => 'one',  
                        esc_html__('Two Columns', 'monolit') => 'two',  
                        esc_html__('Three Columns', 'monolit') => 'three',        
                        esc_html__('Four Columns', 'monolit') => 'four',        
                        esc_html__('Five Columns', 'monolit') => 'five',        
                        esc_html__('Six Columns', 'monolit') => 'six',        
                    ),
                    // "description" => esc_html__("Columns Grid", 'monolit'),  
                    "std"=>'five',    
                ),
                array(
                    "type"      => "textfield",
                    // "holder"    => "div",
                    "class"     => "",
                    "heading"   => esc_html__("Parallax Value", 'monolit'),
                    "param_name"=> "parallax_value",
                    "description" => esc_html__("Pixel number. Which we are telling the browser is to move Partner Logos down every time we scroll down 100% of the viewport height and move Partner Logos up every time we scroll up 100% of the viewport height. Ex: 150 or -150 for reverse direction.", 'monolit'),
                    "value" => ""
                ),
                
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),
            ),
            'admin_enqueue_js' => get_template_directory_uri() . "/vc_extend/vc_js_elements.js",
            'js_view'=> 'MonolitImagesView',
        ));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Our_Partners extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Post Title", 'monolit'),
            "description" => esc_html__("Portfolio title",'monolit'),
            "base"      => "monolit_post_title",
            "class"     => "",
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Portfolio',
            //'admin_enqueue_css'=> get_template_directory_uri() . "/vc_extend/admin_style.css",
            "show_settings_on_create" => false,
            "params"    => array(
                
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("Use 'section-title' for other style.", 'monolit')
                ),
                
            )
        ));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Post_Title extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Breadcrumb", 'monolit'),
            "description" => esc_html__("Portfolio Breadcrumb",'monolit'),
            "base"      => "monolit_breadcrumb",
            "class"     => "",
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Portfolio',
            //'admin_enqueue_css'=> get_template_directory_uri() . "/vc_extend/admin_style.css",
            "show_settings_on_create" => false,
            "params"    => array(
                
                // array(
                //     "type" => "textfield",
                //     "heading" => esc_html__("Extra class name", 'monolit'),
                //     "param_name" => "el_class",
                //     "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                // ),
                // array(
                //     'type' => 'css_editor',
                //     'heading' => esc_html__( 'Css', 'monolit' ),
                //     'param_name' => 'css',
                //     'group' => esc_html__( 'Design options', 'monolit' ),
                // ),
            )
        ));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Breadcrumb extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Popup Gallery Masonry", 'monolit'),
            "description" => esc_html__("Photos gallery masonry layout for monolit project with popup effect",'monolit'),
            "base"      => "monolit_images_gallery_masonry",
            "class"     => "",
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Portfolio',
            //'admin_enqueue_css'=> get_template_directory_uri() . "/vc_extend/admin_style.css",
            "params"    => array(

                array(
                    "type"      => "attach_images",
                    "holder"    => "div",
                    "class"     => "ajax-vc-img",
                    "heading"   => esc_html__("Gallery Photos", 'monolit'),
                    "param_name"=> "galleryimgs",
                    // "description" => esc_html__("Gallery photos", 'monolit')
                ),

                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Columns Grid', 'monolit'),
                    "param_name" => "columns",
                    "value" => array(   
                        esc_html__('One Column', 'monolit') => 'one',  
                        esc_html__('Two Columns', 'monolit') => 'two',  
                        esc_html__('Three Columns', 'monolit') => 'three',        
                        esc_html__('Four Columns', 'monolit') => 'four',        
                        esc_html__('Five Columns', 'monolit') => 'five',        
                        // esc_html__('Free Size', 'monolit') => 'free',        
                    ),
                    // "description" => esc_html__("Columns Grid", 'monolit'),  
                    "std"=>'three',    
                ),
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Spacing', 'monolit'), 
                    "param_name" => "spacing", 
                    "value" => array(
                        esc_html__('Small', 'monolit') => 'small',
                        esc_html__('Big', 'monolit') => 'big', 
                        esc_html__('None', 'monolit') => 'none',  
                        
                    ), 
                    // "description" => esc_html__("Spacing", 'monolit'),
                    "std" => 'small',
                ),
                
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "value"=>'',
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),
            ),
            'admin_enqueue_js' => get_template_directory_uri() . "/vc_extend/vc_js_elements.js",
            'js_view'=> 'MonolitImagesView',
        ));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Images_Gallery_Masonry extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Portfolio Nav", 'monolit'),
            "description" => esc_html__("Portfolio post nav",'monolit'),
            "base"      => "portfolio_nav",
            "class"     => "",
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Portfolio',
            //'admin_enqueue_css'=> get_template_directory_uri() . "/vc_extend/admin_style.css",
            "show_settings_on_create" => true,
            "params"    => array(
                array(
                    "type" => "dropdown",
                    // "class"=>"",
                    "heading" => esc_html__('In Same Terms', 'monolit'),
                    "description" => esc_html__("Whether previous/next posts must be within the same taxonomy term as the current post.", 'monolit'),
                    "param_name" => "same_term",

                    "value" => array(   
                                    esc_html__('No', 'monolit') => 'no', 
                                    esc_html__('Yes', 'monolit') => 'yes',  
                                                                                                                   
                                ),
                    "std" => 'no', 

                    
                ),
                array(
                    "type" => "dropdown",
                    "class"=>"",
                    "heading" => esc_html__('Show All Project', 'monolit'),
                    "param_name" => "show_all",
                    "value" => array(   
                                    esc_html__('No', 'monolit') => 'no', 
                                    esc_html__('Yes', 'monolit') => 'yes',  
                                                                                                                   
                                ),
                    "std" => 'no', 
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("All Projects Link", 'monolit'),
                    "param_name" => "all_link",
                    "value"=>'',
                    "description" => esc_html__("Leave empty to use default portfolio archive link.", 'monolit')
                    
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "value"=>'',
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),
            )
        ));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Portfolio_Nav extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Portfolio Comment", 'monolit'),
            "description" => esc_html__("Portfolio comment list",'monolit'),
            "base"      => "portfolio_comment",
            "class"     => "",
            "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
            "category"  => 'Monolit Portfolio',
            //'admin_enqueue_css'=> get_template_directory_uri() . "/vc_extend/admin_style.css",
            "show_settings_on_create" => false,
            "params"    => array(
                
                
            )
        ));

        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Portfolio_Comment extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Blog Parallax", 'monolit'),
           "description" => esc_html__("Parallax layout of blog posts",'monolit'),
           "base"      => "monolit_blog_parallax",
           "class"     => "",
           "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
           "category"  => 'Monolit Theme',
           "show_settings_on_create" => true,
           "params"    => array( 
                array(
                    "type" => "textfield", 
                    "heading" => esc_html__("Post Category IDs to include", 'monolit'), 
                    "param_name" => "cat_ids", 
                    "description" => esc_html__("Enter post category ids to include, separated by a comma. Leave empty to get posts from all categories.", 'monolit')
                ), 
                array(
                    "type" => "textfield", 
                    "holder" => "div",
                    "heading" => esc_html__("Enter Post IDs", 'monolit'), 
                    "param_name" => "ids", 
                    "description" => esc_html__("Enter Post ids to show, separated by a comma. Leave empty to show all.", 'monolit')
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Order Posts by', 'monolit'), 
                    "param_name" => "order_by", 
                    "value" => array(
                        esc_html__('Date', 'monolit') => 'date', 
                        esc_html__('ID', 'monolit') => 'ID', 
                        esc_html__('Author', 'monolit') => 'author', 
                        esc_html__('Title', 'monolit') => 'title', 
                        esc_html__('Modified', 'monolit') => 'modified',
                    ), 
                    // "description" => esc_html__("Order Post by", 'monolit'), 
                    "std" => 'date',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Ordering', 'monolit'), 
                    "param_name" => "order", 
                    "value" => array(
                        esc_html__('Ascending', 'monolit') => 'ASC',
                        esc_html__('Descending', 'monolit') => 'DESC', 
                        
                    ), 
                    // "description" => esc_html__("Order Portfolios", 'monolit'),
                    "std" => 'DESC',
                ), 
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => esc_html__("Posts to show", 'monolit'),
                    "param_name" => "posts_per_page",
                    "description" => esc_html__("Number of Blog posts to show (-1 for all).", 'monolit'),
                    "value"=> '4',
                ),
                
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Pagination', 'monolit'), 
                    "param_name" => "show_pagination", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes', 
                        esc_html__('No', 'monolit') => 'no', 
                    ), 
                    // "description" => esc_html__("Show Info", 'monolit'), 
                    "std" => 'yes',
                ), 
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),

            )));


        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Blog_Parallax extends WPBakeryShortCode {}
        }

        vc_map( array(
            "name"      => esc_html__("Blog Grid", 'monolit'),
           "description" => esc_html__("Grid layout of blog posts",'monolit'),
           "base"      => "monolit_blog_grid",
           "class"     => "",
           "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
           "category"  => 'Monolit Theme',
           "show_settings_on_create" => true,
           "params"    => array( 
                array(
                    "type" => "textfield", 
                    "heading" => esc_html__("Post Category IDs to include", 'monolit'), 
                    "param_name" => "cat_ids", 
                    "description" => esc_html__("Enter post category ids to include, separated by a comma. Leave empty to get posts from all categories.", 'monolit')
                ), 
                array(
                    "type" => "textfield", 
                    "holder" => "div",
                    "heading" => esc_html__("Enter Post IDs", 'monolit'), 
                    "param_name" => "ids", 
                    "description" => esc_html__("Enter Post ids to show, separated by a comma. Leave empty to show all.", 'monolit')
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Order Posts by', 'monolit'), 
                    "param_name" => "order_by", 
                    "value" => array(
                        esc_html__('Date', 'monolit') => 'date', 
                        esc_html__('ID', 'monolit') => 'ID', 
                        esc_html__('Author', 'monolit') => 'author', 
                        esc_html__('Title', 'monolit') => 'title', 
                        esc_html__('Modified', 'monolit') => 'modified',
                    ), 
                    // "description" => esc_html__("Order Post by", 'monolit'), 
                    "std" => 'date',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Ordering', 'monolit'), 
                    "param_name" => "order", 
                    "value" => array(
                        esc_html__('Ascending', 'monolit') => 'ASC',
                        esc_html__('Descending', 'monolit') => 'DESC', 
                        
                    ), 
                    // "description" => esc_html__("Order Portfolios", 'monolit'),
                    "std" => 'DESC',
                ), 
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => esc_html__("Posts to show", 'monolit'),
                    "param_name" => "posts_per_page",
                    "description" => esc_html__("Number of Blog posts to show (-1 for all).", 'monolit'),
                    "value"=> '4',
                ),
               
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Pagination', 'monolit'), 
                    "param_name" => "show_pagination", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes', 
                        esc_html__('No', 'monolit') => 'no', 
                    ), 
                    // "description" => esc_html__("Show Info", 'monolit'), 
                    "std" => 'yes',
                ), 
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),

            )));


        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Blog_Grid extends WPBakeryShortCode {}
        }


        vc_map( array(
            "name"      => esc_html__("Landing Page Section", 'monolit'),
           "description" => esc_html__("For Home Landing template only",'monolit'),
           "base"      => "monolit_home_landing",
           "class"     => "",
           "icon" => get_template_directory_uri() . "/vc_extend/cththemes-logo.png",
           "category"  => 'Monolit Theme',
           "show_settings_on_create" => true,
           "params"    => array( 
                array(
                    "type"      => "attach_image",
                    "holder"    => "div",
                    "class"     => "ajax-vc-img",
                    "heading"   => esc_html__("Logo", 'monolit'),
                    "param_name"=> "ld_logo",
                    // "value"=> get_template_directory_uri().'/images/logo.png'
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => esc_html__("Title", 'monolit'),
                    "param_name" => "ld_title",
                    // "description" => esc_html__("Number of Blog posts to show (-1 for all).", 'monolit'),
                    "value"=> 'Responsive  Architecture',
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => esc_html__("Subtitle", 'monolit'),
                    "param_name" => "ld_subtitle",
                    // "description" => esc_html__("Number of Blog posts to show (-1 for all).", 'monolit'),
                    "value"=> 'Theme',
                ),
                array(
                    "type" => "textarea_html", 
                    "holder" => "div",
                    "heading" => esc_html__("Landing Content", 'monolit'), 
                    "param_name" => "content", 
                    // "description" => esc_html__("You show ", 'monolit')
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Right Iframe', 'monolit'), 
                    "param_name" => "show_iframe", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes', 
                        esc_html__('No', 'monolit') => 'no', 
                    ), 
                    // "description" => esc_html__("Show Info", 'monolit'), 
                    "std" => 'yes',
                ), 
                array(
                    "type" => "dropdown", 
                    "class" => "", 
                    "heading" => esc_html__('Show Constellation', 'monolit'), 
                    "param_name" => "show_constel", 
                    "value" => array(
                        esc_html__('Yes', 'monolit') => 'yes', 
                        esc_html__('No', 'monolit') => 'no', 
                    ), 
                    // "description" => esc_html__("Show Info", 'monolit'), 
                    "std" => 'yes',
                ), 
                array(
                    "type" => "textfield",
                    "heading" => esc_html__("Extra class name", 'monolit'),
                    "param_name" => "el_class",
                    "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'monolit')
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__( 'Css', 'monolit' ),
                    'param_name' => 'css',
                    'group' => esc_html__( 'Design options', 'monolit' ),
                ),

            ),
           'admin_enqueue_js' => get_template_directory_uri() . "/vc_extend/vc_js_elements.js",
            'js_view'=> 'MonolitImagesView',
       ));


        if ( class_exists( 'WPBakeryShortCode' ) ) {
            class WPBakeryShortCode_Monolit_Home_Landing extends WPBakeryShortCode {}
        }

        



}

?>
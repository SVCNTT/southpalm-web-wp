<?php
/**
 * Disable front-end builder
 */
function monolit_vc_remove_frontend_links() {
    vc_disable_frontend(); // this will disable frontend editor
}
// add_action( 'vc_after_init', 'monolit_vc_remove_frontend_links' );

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
add_action( 'vc_before_init', 'monolit_vcSetAsTheme' );
if(!function_exists('monolit_vcSetAsTheme')){
    function monolit_vcSetAsTheme() {
        vc_set_as_theme($disable_updater = true);
    }
}
if(!function_exists('monolit_echo_vc_custom_styles')){
    function monolit_echo_vc_custom_styles(){
        global $post;
        $cus_style_metas = get_post_meta( $post->ID, '_wpb_shortcodes_custom_css', true );
        if(!empty($cus_style_metas)){
            echo '<style>'.esc_attr($cus_style_metas).'</style>';
        }
    }
}

if(!function_exists('monolit_custom_css_classes_for_vc_row_and_vc_column')){
    //if(class_exists('WPBakeryVisualComposerSetup')){
    function monolit_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
        if ($tag == 'vc_row' || $tag == 'vc_row_inner') {
            $class_string = str_replace('vc_row', 'row', $class_string);
        }
        if ($tag == 'vc_column' || $tag == 'vc_column_inner') {
            $class_string = preg_replace('/vc_col-(xs|sm|md|lg)-(\d{1,2})/', 'col-$1-$2', $class_string);
            $class_string = preg_replace('/vc_col-(xs|sm|md|lg)-offset-(\d{1,2})/', 'col-$1-offset-$2', $class_string);
        }
        return $class_string;
    }
}
// Filter to Replace default css class for vc_row shortcode and vc_column
// add_filter('vc_shortcodes_css_class', 'monolit_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 

// Add new Param in Row

if(function_exists('vc_add_param')){
    vc_add_param('vc_row',array(
                                "type" => "dropdown",
                                "heading" => esc_html__('Monolit Predefined Section Layout', 'monolit'),
                                "param_name" => "cth_layout",
                                "value" => array(   
                                                esc_html__('Visual Composer - Default', 'monolit') => 'default',  
                                                esc_html__('Monolit Fullheight Section', 'monolit') => 'monolit_fullheight_sec',
                                                esc_html__('Monolit Page Section', 'monolit') => 'monolit_page_sec',
                                                esc_html__('Monolit Page Section Dark', 'monolit') => 'monolit_page_dark_sec',
                                                


                                                esc_html__('Monolit Parallax Section - Portfolio Header', 'monolit') => 'home_sec',
                                                esc_html__('Monolit Portfolio Horizontal', 'monolit') => 'portfolio_style2_wrap',
                                                esc_html__('Monolit Portfolio Horizontal 3D', 'monolit') => 'portfolio_style3_wrap',
                                                esc_html__('Monolit Portfolio Horizontal Style2', 'monolit') => 'portfolio_style4_wrap',
                                                esc_html__('Monolit Portfolio Fullscreen Slider', 'monolit') => 'portfolio_style7_wrap',
                                                esc_html__('Monolit Portfolio Fullscreen Video', 'monolit') => 'portfolio_style8_wrap',
                                                esc_html__('Monolit Portfolio Fullscreen Vimeo Video', 'monolit') => 'portfolio_style9_wrap',




                                                
                                              ),
                                "description" => esc_html__("Select one of the pre made page sections or using default", 'monolit'), 
                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            ) 
    );

    // vc_add_param('vc_row',array(
                            
    //                         "type" => "dropdown",
    //                         "heading" => esc_html__('Fullwidth', 'monolit'),
    //                         "param_name" => "is_fullwidth",
    //                         "value" => array(   
    //                                         'Yes' => 'yes',  
    //                                         'No' => 'no',  
    //                                         'Wide' => 'wide',  
                                                                                                                            
    //                                     ),
    //                         "std" => 'no',
                            

    //                         'dependency' => array(
    //                             'element' => 'cth_layout',
    //                             'value' => array( 'monolit_homefullheight_sec','monolit_page_sec'),
    //                             'not_empty' => false,
    //                         ),


    //                         "group" => "Monolit Theme",
    //                     ) 

    // );



    vc_add_param('vc_row',array(
                            
                            "type" => "dropdown",
                            "heading" => esc_html__('No Padding', 'monolit'),
                            "param_name" => "no_sec_padding",
                            "value" => array(   
                                            'Yes' => 'yes',  
                                            'No' => 'no',  
                                                                                                                            
                                        ),
                            "std" => 'no',
                            

                            'dependency' => array(
                                'element' => 'cth_layout',
                                'value' => array( 'monolit_page_sec','monolit_page_dark_sec','home_sec'),
                                'not_empty' => false,
                            ),


                            "group" => "Monolit Theme",
                        ) 

    );


    vc_add_param('vc_row',array(
                            
                            "type"      => "textfield",
                            "heading"   => esc_html__("Your Video ID", 'monolit'),
                            "param_name"=> "video_id",
                            "value"     => "oDpSPNIozt8",
                            "description" => esc_html__("Your Youtube video: oDpSPNIozt8 or Vimeo video: 143243001", 'monolit'),
                            

                            'dependency' => array(
                                'element' => 'cth_layout',
                                'value' => array( 'portfolio_style8_wrap','portfolio_style9_wrap'),
                                'not_empty' => false,
                            ),


                            "group" => esc_html__("Monolit Theme",'monolit'),   
                        ) 

    );
    vc_add_param('vc_row',array(
                                "type" => "attach_image",
                                // "class"=>"",
                                "heading" => esc_html__('Video Background Image', 'monolit'),
                                "param_name" => "video_bg_id",
                                
                                // "description" => esc_html__("Select your parallax background image for left image page section layout.", 'monolit'), 
                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style8_wrap','portfolio_style9_wrap' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );

    vc_add_param('vc_row',array(
                            
                            "type" => "dropdown",
                            "heading" => esc_html__('Video Quality', 'monolit'),
                            "param_name" => "video_quality",
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
                            

                            'dependency' => array(
                                'element' => 'cth_layout',
                                'value' => array( 'portfolio_style8_wrap'),
                                'not_empty' => false,
                            ),


                            "group" => esc_html__("Monolit Theme",'monolit'),   
                        ) 

    );

    vc_add_param('vc_row',array(
                            
                            "type"          => "dropdown",
                            "heading"       => esc_html__('Video Quality', 'monolit'),
                            "param_name"    => "vimeo_vid_quality",
                            "value"         => array(   
                                                esc_html__( '4K' , 'monolit' )       => '4K',  
                                                esc_html__( '2K' , 'monolit' )       => '2K',  
                                                esc_html__( '1080P' , 'monolit' )    => '1080p',  
                                                esc_html__( '720P' , 'monolit' )     => '720p',  
                                                esc_html__( '540P' , 'monolit' )     => '540p',  
                                                esc_html__( '360P' , 'monolit' )     => '360p',                                                                            
                            ),
                            "std"           => '1080p', 
                            

                            'dependency' => array(
                                'element' => 'cth_layout',
                                'value' => array( 'portfolio_style9_wrap'),
                                'not_empty' => false,
                            ),


                            "group" => esc_html__("Monolit Theme",'monolit'),   
                        ) 

    );


    vc_add_param('vc_row',array(
                            
                            "type" => "dropdown",
                            "heading" => esc_html__('Mute', 'monolit'),
                            "param_name" => "video_mute",
                            "value" => array(   
                                            esc_html__('Yes', 'monolit') => '1',  
                                            esc_html__('No', 'monolit') => '0',                                                     
                                        ),
                            

                            'dependency' => array(
                                'element' => 'cth_layout',
                                'value' => array( 'portfolio_style8_wrap', 'portfolio_style9_wrap'),
                                'not_empty' => false,
                            ),


                            "group" => esc_html__("Monolit Theme",'monolit'),   
                        ) 

    );

    vc_add_param('vc_row',array(
                            
                            "type" => "dropdown",
                            "heading" => esc_html__('Loop', 'monolit'),
                            "param_name" => "video_loop",
                            "value" => array(   
                                            esc_html__('Yes', 'monolit') => '1',  
                                            esc_html__('No', 'monolit') => '0',                                                     
                                        ),
                            

                            'dependency' => array(
                                'element' => 'cth_layout',
                                'value' => array('portfolio_style9_wrap'),
                                'not_empty' => false,
                            ),


                            "group" => esc_html__("Monolit Theme",'monolit'),   
                        ) 

    );



    vc_add_param('vc_row',array(
                            "type" => "dropdown",
                            "heading" => esc_html__('Is Header Section', 'monolit'),
                            "param_name" => "is_header_sec",
                            "value" => array(
                                        esc_html__('Yes', 'monolit') => 'yes',  
                                        esc_html__('No', 'monolit') => 'no',
                                                ),
                            // "description" => esc_html__("Left or right position", 'monolit'),

                            'dependency' => array(
                                'element' => 'cth_layout',
                                'value' => array( 'home_sec'),
                                'not_empty' => false,
                            ),


                            "group" => esc_html__("Monolit Theme",'monolit'),   
                        ) 

    );

    vc_add_param('vc_row',array(
                                "type" => "attach_images",
                                // "class"=>"",
                                "heading" => esc_html__('Portfolio Images', 'monolit'),
                                "param_name" => "gallery_images",
                                // "value"=>'149,56,141,142,150,153,154,159,58,143,147,59',
                                
                                // "description" => esc_html__("Select your parallax background image for left image page section layout.", 'monolit'), 
                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style2_wrap','portfolio_style3_wrap','portfolio_style4_wrap','portfolio_style7_wrap' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );
    vc_add_param('vc_row',array(
                                "type" => "textfield",
                                "heading" => esc_html__("Items", "monolit"),
                                "param_name" => "items",
                                "description" => esc_html__("The number of items you want to see on the screen. Ex: 3", "monolit"),
                                "value" => "1",

                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style2_wrap','portfolio_style3_wrap','portfolio_style4_wrap','portfolio_style7_wrap' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );

    vc_add_param('vc_row',array(
                                "type" => "textfield",
                                "heading" => esc_html__("Responsive", "monolit"),
                                "param_name" => "responsive",
                                "description" => esc_html__("The format is: screen-size:number-items-display,larger-screen-size:number-items-display. Ex: 0:1,768:1,992:3,1200:3", "monolit"),
                                "value" => "",

                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style7_wrap' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );
    vc_add_param('vc_row',array(
                                "type" => "dropdown",
                                "heading" => esc_html__("Center", "monolit"),
                                "param_name" => "center",
                                "description" => esc_html__("Center item. Works well with even an odd number of items.", "monolit"),
                                "value" => array(   
                                    esc_html__('No', 'monolit') => 'no',  
                                    esc_html__('Yes', 'monolit') => 'yes',   
                                ),
                                "std"=>'yes', 

                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style2_wrap','portfolio_style3_wrap','portfolio_style4_wrap','portfolio_style7_wrap' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );
    vc_add_param('vc_row',array(
                                "type" => "textfield",
                                "heading" => esc_html__("smartSpeed", 'monolit'),
                                "param_name" => "smartspeed",
                                "value"=>'1300',
                                "description" => esc_html__("Speed Calculate, milisecond number. Ex: 250", 'monolit'),

                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style2_wrap','portfolio_style3_wrap','portfolio_style4_wrap','portfolio_style7_wrap' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );
    vc_add_param('vc_row',array(
                                "type" => "dropdown",
                                "heading" => esc_html__("Loop", "monolit"),
                                "param_name" => "loop",
                                // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                                "value" => array(   
                                    esc_html__('No', 'monolit') => 'no',  
                                    esc_html__('Yes', 'monolit') => 'yes',   
                                ),
                                "std"=>'yes', 
                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style2_wrap','portfolio_style3_wrap','portfolio_style4_wrap','portfolio_style7_wrap' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );

    vc_add_param('vc_row',array(
                                "type" => "dropdown",
                                "heading" => esc_html__("Auto Width", "monolit"),
                                "param_name" => "autowidth",
                                "description" => esc_html__("Set non grid content. Try using width style on divs.", "monolit"),
                                "value" => array(   
                                    esc_html__('No', 'monolit') => 'no',  
                                    esc_html__('Yes', 'monolit') => 'yes',   
                                ),
                                "std"=>'yes', 
                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style2_wrap','portfolio_style3_wrap','portfolio_style4_wrap','portfolio_style7_wrap' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );
    vc_add_param('vc_row',array(
                                "type" => "dropdown",
                                "heading" => esc_html__("Auto Play", "monolit"),
                                "param_name" => "autoplay",
                                // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                                "value" => array(   
                                    esc_html__('No', 'monolit') => 'no',  
                                    esc_html__('Yes', 'monolit') => 'yes',   
                                ),
                                "std"=>'no', 
                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style2_wrap','portfolio_style3_wrap','portfolio_style4_wrap','portfolio_style7_wrap' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );
    
    vc_add_param('vc_row',array(
                                "type" => "dropdown",
                                "heading" => esc_html__("Show Zoom Image", "monolit"),
                                "param_name" => "show_zoom",
                                // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                                "value" => array( 
                                    esc_html__('Yes', 'monolit') => 'yes',   
                                    esc_html__('No', 'monolit') => 'no',  
                                      
                                ),
                                "std"=>'yes', 
                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style2_wrap','portfolio_style3_wrap','portfolio_style4_wrap','portfolio_style7_wrap' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );
    vc_add_param('vc_row',array(
                                "type" => "dropdown",
                                "heading" => esc_html__("Show Thumbnails", "monolit"),
                                "param_name" => "show_thumbs",
                                // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                                "value" => array( 
                                    esc_html__('Yes', 'monolit') => 'yes',   
                                    esc_html__('No', 'monolit') => 'no',  
                                      
                                ),
                                "std"=>'yes', 
                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style2_wrap','portfolio_style3_wrap','portfolio_style4_wrap'),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );
    vc_add_param('vc_row',array(
                                "type" => "dropdown",
                                "heading" => esc_html__("Show Caption", "monolit"),
                                "param_name" => "show_cap",
                                // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                                "value" => array( 
                                    esc_html__('Yes', 'monolit') => 'yes',   
                                    esc_html__('No', 'monolit') => 'no',  
                                      
                                ),
                                "std"=>'yes', 
                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style2_wrap','portfolio_style3_wrap'),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );
    vc_add_param('vc_row',array(
                                "type" => "dropdown",
                                "heading" => esc_html__("Show More Info", "monolit"),
                                "param_name" => "show_more_info",
                                // "description" => esc_html__("Boolen or number in mili-second (5000)", "monolit")
                                "value" => array( 
                                    esc_html__('Yes', 'monolit') => 'yes',   
                                    esc_html__('No', 'monolit') => 'no',  
                                      
                                ),
                                "std"=>'yes', 
                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'portfolio_style2_wrap','portfolio_style3_wrap','portfolio_style4_wrap','portfolio_style7_wrap','portfolio_style8_wrap','portfolio_style9_wrap' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );

    vc_add_param('vc_row',array(
                                "type" => "dropdown",
                                "heading" => esc_html__("Auto Height", "monolit"),
                                "param_name" => "use_as_img",
                                "description" => '',
                                "value" => array(   
                                    esc_html__('No', 'monolit') => 'no',  
                                    esc_html__('Yes', 'monolit') => 'yes',   
                                ),
                                "std"=>'no', 
                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array('portfolio_style7_wrap' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );

    vc_add_param('vc_row',array(
                                "type" => "attach_image",
                                // "class"=>"",
                                "heading" => esc_html__('Parallax Background Image', 'monolit'),
                                "param_name" => "parallax_inner",
                                
                                // "description" => esc_html__("Select your parallax background image for left image page section layout.", 'monolit'), 
                                'dependency' => array(
                                    'element' => 'cth_layout',
                                    'value' => array( 'monolit_fullheight_sec','monolit_page_sec','monolit_page_dark_sec','home_sec' ),
                                    'not_empty' => false,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),   
                            )

    );

    vc_add_param('vc_row',array(
                            
                            "type"      => "textfield",
                            "heading"   => esc_html__("Youtube Video ID", 'monolit'),
                            "param_name"=> "head_video_id",
                            "value"     => "",
                            "description" => esc_html__("Your Youtube video: oDpSPNIozt8", 'monolit'),
                            

                            'dependency' => array(
                                'element' => 'cth_layout',
                                'value' => array( 'home_sec' ),
                                'not_empty' => false,
                            ),


                            "group" => esc_html__("Monolit Theme",'monolit'),   
                        ) 

    );

    vc_add_param('vc_row', array(
                                "type"      => "textfield",
                                // "class"     => "",
                                "heading"   => esc_html__("Overlay Opacity", 'monolit'),
                                "param_name"=> "parallax_inner_op",
                                "value"     => "0.2",
                                "description" => esc_html__("Overlay Opacity value 0.0 - 1. Ex: 0.2 or 0.8 for dark background", 'monolit'),

                                'dependency' => array(
                                    'element' => 'parallax_inner',
                                    //'value' => array( 'monolit_fullheight_sec','monolit_page_sec'),
                                    'not_empty' => true,
                                ),

                                "group" => esc_html__("Monolit Theme",'monolit'),
                            )

    );

    vc_add_param('vc_row',array(
                            "type" => "textfield",
                            "heading" => esc_html__('Background Parallax Value', 'monolit'),
                            "param_name" => "parallax_inner_val",
                            "value" => "300",
                            "description" => esc_html__("Pixel number. Which we are telling the browser is to move Background Image down every time we scroll down 100% of the viewport height and move Background Image up every time we scroll up 100% of the viewport height. Ex: 300 or -300 for reverse direction.", 'monolit'),

                            'dependency' => array(
                                'element' => 'parallax_inner',
                                //'value' => array( 'monolit_fullheight_sec','monolit_page_sec'),
                                'not_empty' => true,
                            ),


                            "group" => esc_html__("Monolit Theme",'monolit'),   
                        ) 

    );

    vc_add_param('vc_row',array(
                            "type" => "textfield",
                            "heading" => esc_html__('Section Number', 'monolit'),
                            "param_name" => "sec_number",
                            "value" => "",
                            "description" => esc_html__("Section Number", 'monolit'),

                            'dependency' => array(
                                'element' => 'cth_layout',
                                'value' => array( 'monolit_fullheight_sec','monolit_page_sec','monolit_page_dark_sec'),
                                'not_empty' => false,
                            ),
                            "group" => esc_html__("Monolit Theme",'monolit'),   
                        ) 

    );
    vc_add_param('vc_row',array(
                            "type" => "dropdown",
                            "heading" => esc_html__('Section Number Position', 'monolit'),
                            "param_name" => "sec_number_pos",
                            "value" => array(
                                        esc_html__('Right Position', 'monolit') => 'right',  
                                        esc_html__('Left Position', 'monolit') => 'left',
                                                ),
                            "description" => esc_html__("Left or right position", 'monolit'),

                            'dependency' => array(
                                'element' => 'sec_number',
                                //'value' => array( 'monolit_fullheight_sec','monolit_page_sec'),
                                'not_empty' => true,
                            ),


                            "group" => esc_html__("Monolit Theme",'monolit'),   
                        ) 

    );
    vc_add_param('vc_row',array(
                            "type" => "textfield",
                            "heading" => esc_html__('Section Number Parallax Value', 'monolit'),
                            "param_name" => "sec_number_par",
                            "value" => "200",
                            "description" => esc_html__("Pixel number. Which we are telling the browser is to move Section Number down every time we scroll down 100% of the viewport height and move Section Number up every time we scroll up 100% of the viewport height. Ex: 200 or -200 for reverse direction.", 'monolit'),

                            'dependency' => array(
                                'element' => 'sec_number',
                                //'value' => array( 'monolit_fullheight_sec','monolit_page_sec'),
                                'not_empty' => true,
                            ),


                            "group" => esc_html__("Monolit Theme",'monolit'),   
                        ) 

    );

    vc_add_param('vc_row',array(
                            "type" => "dropdown",
                            "heading" => esc_html__('Use Constellation Animation?', 'monolit'),
                            "param_name" => "use_constellation",
                            "value" => array(
                                        esc_html__('Yes', 'monolit') => 'yes',  
                                        esc_html__('No', 'monolit') => 'no',
                            ),
                            "description" => '',
                            'std'=>'no',

                            'dependency' => array(
                                'element' => 'cth_layout',
                                'value' => array( 'monolit_fullheight_sec'),
                                'not_empty' => false,
                            ),


                            "group" => esc_html__("Monolit Theme",'monolit'),   
                        ) 

    );

    

}
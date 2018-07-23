<?php

add_action('wp_ajax_nopriv_monolit_get_vc_attach_images', 'monolit_get_vc_attach_images_callback');
add_action('wp_ajax_monolit_get_vc_attach_images', 'monolit_get_vc_attach_images_callback');


function monolit_get_vc_attach_images_callback() {
    $images = $_POST['images'];
    $html = $images;
    if($images != '') {
        $images = explode(",", $images);
        if(count($images)){
            $html = '';
            foreach ($images as $key => $img) {
                $html .= wp_get_attachment_image( $img, 'thumbnail', '', array('class'=>'monolit-ele-attach-thumb') );
            }
        }
    }
    wp_send_json($html );
}
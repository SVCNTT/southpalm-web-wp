<?php

/**
 * @package Monolit - Responsive Architecture Wordpress Theme
 * @author Cththemes - http://themeforest.net/user/cththemes
 * @date: 17-2-2016
 *
 * @copyright  Copyright ( C ) 2015 cththemes.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */


if( monolit_global_var('folio_fullwidth_nav_menu') )
    get_header('navfullwidth');
else
    get_header(); ?>

<?php
switch ( monolit_global_var('folio_style') ) {
    case 'horizontal':
        get_template_part('archive-portfolio','horizontal' );
        break;
    case 'horizontal_boxed':
        get_template_part('archive-portfolio','horizontal_boxed' );
        break;
    case 'vertical':
        get_template_part('archive-portfolio','vertical' );
        break;
    case 'vertical_fullscreen':
        get_template_part('archive-portfolio','vertical_fullscreen' );
        break;
    case 'parallax':
        get_template_part('archive-portfolio','parallax' );
        break;
    default:
        get_template_part('archive-portfolio','horizontal' );
        break;
}
?>

<?php 
if( monolit_global_var('show_folio_footer_content') )
    get_footer(); 
else
    get_footer('nocontent'); 
?>
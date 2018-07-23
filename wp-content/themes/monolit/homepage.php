 <?php

/**
 * Template Name: Home Page
 *
 * @package Monolit - Responsive Architecture Wordpress Theme
 * @author Cththemes - http://themeforest.net/user/cththemes
 * @date: 17-2-2016
 *
 * @copyright  Copyright ( C ) 2015 cththemes.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

get_header(); ?>

<?php //monolit_echo_vc_custom_styles();?>
<?php while(have_posts()) : the_post(); ?>

	<?php the_content(); ?>
	<?php wp_link_pages(); ?>

<?php endwhile; ?>   
<!-- end site wrapper -->
<?php 
if(get_post_meta(get_the_ID(),'_monolit_folio_content_footer',true ) == 'yes')
    get_footer( );
else 
    get_footer('nocontent'); 
?>
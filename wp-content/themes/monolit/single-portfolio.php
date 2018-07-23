<?php
/**
 * @package Monolit - Responsive Architecture Wordpress Theme
 * @author Cththemes - http://themeforest.net/user/cththemes
 * @date: 17-2-2016
 *
 * @copyright  Copyright ( C ) 2015 cththemes.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */
$folio_single_footer = get_post_meta(get_queried_object_id(), '_monolit_folio_single_footer', true);
?>
<?php 
	get_header();

?>



<?php while(have_posts()) : the_post(); ?>

    <?php the_content(); ?>
    <?php wp_link_pages(); ?>


<?php endwhile; ?> 

<?php 
	if($folio_single_footer == 'yes'){
		get_footer();
	}else{
		get_footer( 'nocontent' );
	}

?>
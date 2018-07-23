<?php
/**
 * @package Monolit - Responsive Architecture Wordpress Theme
 * @author Cththemes - http://themeforest.net/user/cththemes
 * @date: 17-2-2016
 *
 * @copyright  Copyright ( C ) 2015 cththemes.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */
?>
<?php if(has_post_thumbnail( )){ ?>
<div class="blog-media">
    <div class="box-item">
        <a href="javascript:void(0)">
        <span class="overlay"></span>
        <?php the_post_thumbnail('monolitblog-thumb',array('class'=>'respimg') ); ?>
        </a>
    </div>
</div>
<?php } ?>
<?php edit_post_link( esc_html__( 'Edit', 'monolit' ), '<span class="edit-link">', '</span>' ); ?>	
<?php the_content( ); ?>
<?php
	wp_link_pages( array(
	'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'monolit' ) . '</span>',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>',
	) );
?>
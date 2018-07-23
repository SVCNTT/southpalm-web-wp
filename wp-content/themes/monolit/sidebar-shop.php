<?php
/**
 * @package Monolit - Responsive Architecture Wordpress Theme
 * @author Cththemes - http://themeforest.net/user/cththemes
 * @date: 17-2-2016
 *
 * @copyright  Copyright ( C ) 2015 cththemes.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

if(is_active_sidebar('sidebar-shop') && monolit_global_var('shop_sidebar') == 'right_sidebar'){
	$sb_w = monolit_global_var('shop-sidebar-width') ? monolit_global_var('shop-sidebar-width') : 3;
?>
</div>
<div class="col-md-<?php echo esc_attr($sb_w );?> shop-sidebar-column sidebar-right">
	<div class="sidebar">
		<?php dynamic_sidebar('sidebar-shop'); ?>
	</div>
<?php
}

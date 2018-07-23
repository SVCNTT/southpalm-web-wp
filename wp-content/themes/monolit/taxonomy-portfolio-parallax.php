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


<?php if(have_posts()) : ?>

<!-- content  -->
<div class="content portfolio-parallax">
    <section>
        <div class="container">
            <?php $pin = 1; while(have_posts()) : the_post(); ?>
            
                <?php //get_template_part( 'portfolio', 'parallax-list' ); 
                		monolit_get_template_part( 'portfolio', 'parallax-list' , array('pin'=>$pin) );
                ?>

            <?php $pin++; endwhile;?>                                                                  
            <?php monolit_content_nav('',''); ?>
        </div>
    </section>
</div>
<!-- content end -->
<?php else :
    get_template_part('content','none' );
?>
<?php endif; // end have_post() ?>

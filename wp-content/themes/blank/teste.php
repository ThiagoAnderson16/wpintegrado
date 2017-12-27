<?php /* Template Name: CustomPageT1 */ ?>
 <h1>teste</h1>

 <section>

            <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

            <?php get_template_part('loop'); ?>

            <?php get_template_part('pagination'); ?>

        </section>
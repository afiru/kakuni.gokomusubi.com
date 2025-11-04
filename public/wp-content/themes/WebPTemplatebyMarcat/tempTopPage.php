<?php

/**
 * Template Name: トップページ
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="bg_fff mainIndex">
    <?php if (have_posts()) while (have_posts()) : the_post();  ?>
        <?php get_template_part('include/layouts/top/01_fv'); ?>
        <?php get_template_part('include/layouts/top/02_news'); ?>
        <?php get_template_part('include/layouts/top/03_about'); ?>
        <?php get_template_part('include/layouts/top/04_floor'); ?>
        <?php get_template_part('include/layouts/top/05_calendar'); ?>
        <?php get_template_part('include/layouts/top/06_price'); ?>
        <?php get_template_part('include/layouts/top/07_instagram'); ?>
        <?php get_template_part('include/layouts/top/99_booking'); ?>
    <?php endwhile;  ?>


    <?php get_template_part('include/layouts/top/08_access'); ?>
</main>
<?php get_template_part('include/layouts/top/09_copy'); ?>
<?php get_template_part('include/layouts/top/10_sns'); ?>
<?php get_template_part('include/common/footer/footer'); ?>
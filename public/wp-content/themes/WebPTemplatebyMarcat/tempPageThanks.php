<?php

/**
 * Template Name: お問い合わせ（完了画面）
 * Template Post Type: page
 */
?>
<?php get_template_part('include/common/header/header'); ?>
<main class="bg_fff mainIndex">
    <?php if (have_posts()) while (have_posts()) : the_post();  ?>
        <div id="bookingconfirm" class="bookingConfirm">
            <section class="secBooking">
                <h2 class="t_center cl_000 fw_700 h2Booking">ご予約【完了】</h2>
                <p class="cl_000 txtBooking">
                    ご予約ありがとうございます。<br>確認のうえ、ご連絡致します。<br>今しばらくお待ちください。
                </p>
                <div class="formBooking">
                    <?php the_content(); ?>
                </div>
            </section>
        </div>
    <?php endwhile;  ?>
    <?php get_template_part('include/layouts/top/08_access'); ?>
</main>
<?php get_template_part('include/layouts/top/09_copy'); ?>
<?php get_template_part('include/layouts/top/10_sns'); ?>
<?php get_template_part('include/common/footer/footer'); ?>
<?php if (have_posts()) while (have_posts()) : the_post();  ?>
    <div id="booking" class="booking">
        <section class="secBooking">
            <h2 class="t_center cl_000 fw_700 h2Booking">ご予約</h2>
            <div class="formBooking">
                <?php the_content(); ?>
            </div>
        </section>
    </div>
<?php endwhile;  ?>
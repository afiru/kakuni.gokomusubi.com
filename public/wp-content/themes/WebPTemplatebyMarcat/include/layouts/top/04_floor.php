<div id="floor" class="floor">
    <!--
    bg:../img/floor.jpg
    -->
    <div class="floorLxn">
        <h2 class="order_3 h2Floor">
            <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/h2Floor.svg" alt="空間" width="38" height="100.64">
        </h2>

        <h3 class="cl_fff fw_700 kaisei h3Floor">
            誰もが気軽にこれて、<br>誰でも仲良くなれる空間。
        </h3>

        <ul class="d_flex j_between row ulFloor">
            <?php foreach (scf::get('imgFloor') as $fields): ?>
            <li class="pore liFloor">
                <?php $img = get_scf_img_loop_url_id($fields['imgsFloor']); ?>
                <a class="btnliFloor" href="<?php echo $img[0]; ?>" data-lightbox="image-1" data-title="<?php echo $fields['capFloor']; ?>">
                    <figure class="photoFloor">
                        <img loading="lazy" src="<?php echo $img[0]; ?>" alt="空間画像" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                    </figure>
                    <figure class="iconFloor">
                        <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/iconFloor.svg" alt="空間" width="38" height="100.64">
                    </figure>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>

        <h3 class="cl_fff fw_700 kaisei h3Floor h3Floor02">
            常連さんのご紹介
        </h3>
        <ul class="d_flex j_between row ulFloor">
            <?php foreach (scf::get('joren') as $fields): ?>
            <li class="liFloor">
                <?php $img = get_scf_img_loop_url_id($fields['imgJoren']); ?>
                <figure class="photoFloor">
                    <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo $fields['nameJoren']; ?>さん画像" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>">
                </figure>
                <h3 class="cl_fff fw_500 kaisei h3LiFloor"><?php echo $fields['nameJoren']; ?></h3>
                <p class="cl_fff fw_500 maru txtLiFloor">
                    <?php echo $fields['txtJoren']; ?>
                </p>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
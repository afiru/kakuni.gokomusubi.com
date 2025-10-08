<?php if (SCF::get('fvMovie')): ?>
    <div class="fvMovie">
        <div class="fvMovieLxn">
            <video autoplay muted loop playsinline preload="auto" style="width:100%;height:auto;object-fit:cover;">
                <source src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/indexFv.mp4'); ?>" type="video/mp4">
            </video>
        </div>

    </div>
<?php endif; ?>
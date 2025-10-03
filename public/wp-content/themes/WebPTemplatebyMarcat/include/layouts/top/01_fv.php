<?php $video_url = SCF::get('fvMovie'); ?>
<?php if ($video_url): ?>
<div class="fvMovie">
    <video controls width="375" height="469">
        <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
    </video>
</div>
<?php endif; ?>
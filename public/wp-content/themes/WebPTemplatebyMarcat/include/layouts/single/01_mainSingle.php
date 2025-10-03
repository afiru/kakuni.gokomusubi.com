<?php if (have_posts()) while (have_posts()) : the_post();  ?>
<?php $nowcats = get_the_category($post->ID); ?>
<div class="singleNews">
    <div class="d_flex j_start ali_center dateCatNewsLoop">
        <time class="cl_241A08 fw_500 mincho timeCatNewsLoop"><?php echo get_the_date('Y.m.d', $post->ID); ?></time>
        <p class="cl_241A08 fw_500 mincho catCatNewsLoop"><?php echo $nowcats[0]->name; ?></p>
        <?php get_new_flug(get_the_date('Y-m-d', $post->ID)); ?>
    </div>
    <h3 class="cl_241A08 fw_500 h3CatNewsLoop"><?php echo get_the_title($post->ID); ?></h3>
    <div class="brdSingleCat"></div>
    <div class="mincho cl_241A08 cntSingleCat">
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile;  ?>
<?php
$prev = get_adjacent_post(true, '', true, 'category');
$next = get_adjacent_post(true, '', false, 'category');
?>
<div class="mincho infoSinglePager">
    <div class="d_flex j_center ali_center pagerTopicsMainSingle">

        <div class="prevSinglePagerWap">
            <?php if (!empty($prev)): ?>
            <a class="maru d_flex j_between ali_center cl_241A08 fw_400 undernone txtset prevSinglePager" href="<?php echo get_permalink($prev->ID); ?>">
                ＜ 前の記事
            </a>
            <?php endif; ?>
        </div>

        <div class="t_center moreTopicsArchive">
            <a class="cl_241A08 fw_400 txtset undernone btnMoreTopicsArchive" href="<?php echo get_category_link(1); ?>">
                <span class="maru iconMoreTopicsArchive">一覧に戻る</span>
            </a>
        </div>

        <div class="nextSinglePagerWap">
            <?php if (!empty($next)): ?>
            <a class="maru d_flex j_between ali_center cl_241A08 fw_400 undernone txtset nextSinglePager" href="<?php echo get_permalink($next->ID); ?>">
                次の記事 ＞
            </a>
            <?php endif; ?>
        </div>
    </div>
</div>
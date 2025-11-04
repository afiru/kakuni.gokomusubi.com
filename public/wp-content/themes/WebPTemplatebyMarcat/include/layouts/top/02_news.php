<section class="bg_000 nowNewsCnt jsnowNewsCnt">
    <h2 class="t_center cl_fff fw_700 h2NowNewsCnt">今日のおすすめメニュー</h2>
    <p class="t_center cl_fff fw_400 txtNowNewsCntTop">ビール</p>

    <h2 class="t_center cl_fff fw_700 h2NowNewsCnt h2NowNewsCnt02">現在のお店の状況</h2>
    <time class="d_block t_center cl_fff fw_400 txtNowNewsCnt">2025-11-04 10:12:15</time>
    <ul class="d_flex j_center ali_center ulNowNewsCnt">
        <li class="d_flex j_start ali_center liNowNewsCnt">
            <h3 class="cl_fff fw_600 h3liNowNewsCnt">カウンター：</h3>
            <p class="cl_fff fw_400 txtliNowNewsCnt">残り<span class="fw_700">2</span>席</p>
        </li>
        <li class="d_flex j_start ali_center liNowNewsCnt">
            <h3 class="cl_fff fw_600 h3liNowNewsCnt">2人テーブル：</h3>
            <p class="cl_fff fw_400 txtliNowNewsCnt">残り<span class="fw_700">2</span>卓</p>
        </li>
        <li class="d_flex j_start ali_center liNowNewsCnt">
            <h3 class="cl_fff fw_600 h3liNowNewsCnt">4人テーブル：</h3>
            <p class="cl_fff fw_400 txtliNowNewsCnt">残り<span class="fw_700">3</span>卓</p>
        </li>
    </ul>
</section>

<?php
$args = [
    'post_type' => 'post',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'cat' => 1,
    'posts_per_page' => 5,
    'no_found_rows' => true,
];
?>
<?php $query1 = new WP_Query($args); ?>
<?php if ($query1->have_posts()): ?>
    <div class="topNews">
        <div class="d_flex j_between topNewsFx">
            <h2 class="h2TopNews">
                <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/h2TopNews.svg" alt="" width="36.31" height="148.64">
            </h2>
            <nav class="topNewsLoop">
                <ul class="ulTopNewsLoop">
                    <?php while ($query1->have_posts()): ?>
                        <?php $query1->the_post(); ?>
                        <li class="liTopNewsLoop">
                            <?php $nowcats = get_the_category($post->ID); ?>
                            <a class="undernone btnTopNewsLoop" href="<?php echo get_the_permalink($post->ID); ?>">
                                <div class="d_flex j_start ali_center dateTopNewsLoop">
                                    <time class="cl_241A08 fw_500 mincho timeTopNewsLoop"><?php echo get_the_date('Y.m.d', $post->ID); ?></time>
                                    <p class="cl_241A08 fw_500 mincho catTopNewsLoop"><?php echo $nowcats[0]->name; ?></p>
                                    <?php get_new_flug(get_the_date('Y-m-d', $post->ID)); ?>
                                </div>
                                <h3 class="cl_241A08 fw_500 h3TopNewsLoop"><?php echo get_the_title($post->ID); ?></h3>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>

                <div class="readmoneTopNewsLoop">
                    <a class="d_flex j_center ali_center fw_500 cl_fff bg_000 kaisei btnReadmoneTopNewsLoop" href="<?php echo get_category_link(1); ?>">もっと見る</a>
                </div>
            </nav>
        </div>
    </div>
<?php endif; ?>
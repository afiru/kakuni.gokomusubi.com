<?php
$paged = (get_query_var('page')) ? get_query_var('page') : 1;
$args = array(
    'post_type' => 'post',
    'cat' => $cat,
    'posts_per_page' => 10,
    'order' => 'ASC',
    'orderby' => 'menu_order',
    'paged' => get_query_var('paged')
);
$query1 = new WP_Query($args);
?>
<ul class="d_flex j_between newsTab">
    <li class="liNewsTab01">
        <a class="undernone cl_241A08 bg_D9D9D9 btnliNewsTab <?php if ($cat === 2) {
                                                                    echo 'active';
                                                                } ?>" href="<?php echo get_category_link(2); ?>">イベント情報</a>
    </li>
    <li class="liNewsTab01">
        <a class="undernone cl_241A08 bg_D9D9D9 btnliNewsTab <?php if ($cat === 3) {
                                                                    echo 'active';
                                                                } ?>" href="<?php echo get_category_link(3); ?>">お休みについて</a>
    </li>
    <li class="liNewsTab02">
        <a class="undernone cl_241A08 bg_D9D9D9 btnliNewsTab <?php if ($cat === 1) {
                                                                    echo 'active';
                                                                } ?>" href="<?php echo get_category_link(1); ?>">すべて</a>
    </li>
</ul>
<ul class="catLoop">
    <?php while ($query1->have_posts()): ?>
    <?php $query1->the_post(); ?>
    <li class="liCatNewsLoop">
        <?php $nowcats = get_the_category($post->ID); ?>
        <a class="undernone btnCatNewsLoop" href="<?php echo get_the_permalink($post->ID); ?>">
            <div class="d_flex j_start ali_center dateCatNewsLoop">
                <time class="cl_241A08 fw_500 mincho timeCatNewsLoop"><?php echo get_the_date('Y.m.d', $post->ID); ?></time>
                <p class="cl_241A08 fw_500 mincho catCatNewsLoop"><?php echo $nowcats[0]->name; ?></p>
                <?php get_new_flug(get_the_date('Y-m-d', $post->ID)); ?>
            </div>
            <h3 class="cl_241A08 fw_500 h3CatNewsLoop"><?php echo get_the_title($post->ID); ?></h3>
        </a>
    </li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</ul>

<div class="d_flex j_center pagerNewsLoop">
    <?php wp_pagenavi(array('query' => $query1)); ?>
</div>
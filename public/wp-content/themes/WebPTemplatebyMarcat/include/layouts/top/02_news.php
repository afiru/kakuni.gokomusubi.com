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
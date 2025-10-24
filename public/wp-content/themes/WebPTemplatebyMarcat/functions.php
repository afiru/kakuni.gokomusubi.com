<?php

add_filter('big_image_size_threshold', '__return_false');
//jetpackで読まれているCSSを削除
add_filter('jetpack_implode_frontend_css', '__return_false');

/* インラインスタイル削除 */

function remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}

add_action('widgets_init', 'remove_recent_comments_style');
add_theme_support('post-thumbnails'); //サムネイルをサポートさせる。

//勝手に読み込まれるJSを削除


function dequeue_css_header()
{
    wp_dequeue_style('wp-pagenavi');
    wp_dequeue_style('bodhi-svgs-attachment');
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('dashicons');
    wp_dequeue_style('addtoany');
}

add_action('wp_enqueue_scripts', 'dequeue_css_header');

//CSSファイルをフッターに出力
function enqueue_css_footer() {}

add_action('wp_footer', 'enqueue_css_footer');

if (is_admin()) {
} else {

    function my_delete_local_jquery()
    {
        wp_deregister_script('jquery');
    }

    add_action('wp_enqueue_scripts', 'my_delete_local_jquery');
}

//レンダリングをブロックするのを止めましょう。
if (!(is_admin())) {

    function add_defer_to_enqueue_script($url)
    {
        if (FALSE === strpos($url, '.js'))
            return $url;
        if (strpos($url, 'jquery.min.js'))
            return $url;
        return "$url' defer charset='UTF-8";
    }

    add_filter('clean_url', 'add_defer_to_enqueue_script', 11, 1);
}

remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

//子カテゴリーも親カテゴリーと同様の設定を行う
add_filter('category_template', 'my_category_template');

function my_category_template($template)
{
    $category = get_queried_object();
    if (
        $category->parent != 0 &&
        ($template == "" || strpos($template, "category.php") !== false)
    ) {
        $templates = array();
        while ($category->parent) {
            $category = get_category($category->parent);
            if (!isset($category->slug))
                break;
            $templates[] = "category-{$category->slug}.php";
            $templates[] = "category-{$category->term_id}.php";
        }
        $templates[] = "category.php";
        $template = locate_template($templates);
    }
    return $template;
}

//子カテゴリーで抽出を行う方法
function post_is_in_descendant_category($cats, $_post = null)
{
    foreach ((array) $cats as $cat) {
        $descendants = get_term_children((int) $cat, 'category');
        if ($descendants && in_category($descendants, $_post))
            return true;
    }
    return false;
}

//アクセス数の取得
function get_post_views($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');

        return "0 views";
    }

    return $count . '';
}

//アクセス数の保存
function set_post_views($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

add_filter('wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2);

function my_wp_kses_allowed_html($tags, $context)
{
    $tags['img']['srcset'] = true;
    $tags['source']['srcset'] = true;
    $tags['source']['data-srcset'] = true;
    return $tags;
}

function get_post_thumbsdata($postID)
{
    $thumbnail_id = get_post_thumbnail_id($postID); //アタッチメントIDの取得
    $image = wp_get_attachment_image_src($thumbnail_id, 'full');
    return $image;
}

function get_post_custom_thumbsdata($thumbnail_id)
{
    $image = wp_get_attachment_image_src($thumbnail_id, 'full');
    return $image;
}

function get_scf_img_url($name)
{
    $cf_sample = SCF::get($name);
    $cf_sample = wp_get_attachment_image_src($cf_sample, 'full');
    return $cf_sample;
}

function get_scf_img_loop_url($name)
{
    $cf_sample = wp_get_attachment_image_src($name, 'full');
    return $cf_sample;
}

function get_scf_img_url_id($name, $post_id)
{
    $cf_sample = SCF::get($name, $post_id);
    $cf_sample = wp_get_attachment_image_src($cf_sample, 'full');
    return $cf_sample;
}

function get_scf_img_loop_url_id($name)
{
    $cf_sample = wp_get_attachment_image_src($name, 'full');
    return $cf_sample;
}

function get_thumb_url($size = 'full', $post_id = null)
{
    $post_id = ($post_id) ? $post_id : get_the_ID();  //第2引数が指定されていればそれを、指定がなければ現在の投稿IDをセット
    if (!has_post_thumbnail($post_id))
        return false;  //指定した投稿がアイキャッチ画像を持たない場合、falseを返す
    $thumb_id = get_post_thumbnail_id($post_id);      // 指定した投稿のアイキャッチ画像の画像IDを取得
    $thumb_img = wp_get_attachment_image_src($thumb_id, $size);  // 画像の情報を配列で取得
    return $thumb_img;           //URLを返す
}

function stringOverFlow($strings, $length)
{
    $output = strip_tags($strings);
    $output = stripslashes($output);
    $output = preg_replace('/(\s\s|　)/', '', $output);
    $output = preg_replace("/^\xC2\xA0/", "", $output);
    $output = str_replace("&nbsp;", '', $output);
    $output = mb_strimwidth($output, 0, $length, "...", "UTF-8");
    return $output;
}

function category_id_class($classes)
{
    global $post;
    foreach (get_the_category($post->ID) as $category) {
        $classes[] = $category->category_nicename;
    }
    return $classes;
}

add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

function allow_mov_uploads($mimes)
{
    $mimes['mov'] = 'video/quicktime';
    return $mimes;
}
add_filter('upload_mimes', 'allow_mov_uploads');



$TODAY = strtotime(date('Y-m-d'));
function check_new_post($date)
{
    global $TODAY;
    $date = strtotime($date);
    $dayDiff = abs($TODAY - $date) / 86400; //(60 * 60 * 24)
    return ($dayDiff < 7);
}
function get_new_flug($date)
{
    if (check_new_post($date)) {
        echo '<span class="cl_FF0000 fw_500 newTopAppivalTop">NEW!</span>';
    }
}
function getNewIndexStrong($date)
{
    if (check_new_post($date)) {
        echo '<span class="bg_D23737 cl_fff fw_400 d_flex j_center ali_center txtset iconTopNews">NEW</span>';
    }
}

function getNewsSingle($date)
{
    if (check_new_post($date)) {
        echo '<span class="bg_CB644A cl_fff fw_400 txtset iconNewsSingle">NEW</span>';
    }
}

function getNewSingleColumn($date)
{
    if (check_new_post($date)) {
        echo '<span class="bg_CB644A cl_fff fw_400 d_felx j_center ali_center en txtset iconSingleColumn">NEW!</span>';
    }
}


function get_aioseo_global_og_image()
{
    $json = get_option('aioseo_options');

    // JSONをデコード（配列に変換）
    $aioseo = json_decode($json, true);
    if (!is_array($aioseo)) {
        return false;
    }

    // Facebookデフォルト画像をチェック
    if (
        isset($aioseo['social']['facebook']['general']['defaultImagePosts'])
        && !empty($aioseo['social']['facebook']['general']['defaultImagePosts'])
    ) {
        return esc_url($aioseo['social']['facebook']['general']['defaultImagePosts']);
    }

    // Twitter側も確認（同じ画像設定があるため）
    if (
        isset($aioseo['social']['twitter']['general']['defaultImagePosts'])
        && !empty($aioseo['social']['twitter']['general']['defaultImagePosts'])
    ) {
        return esc_url($aioseo['social']['twitter']['general']['defaultImagePosts']);
    }

    return false;
}

add_action('wp_head', function () {
    if (is_category('news')) { // ニュースカテゴリページだけ
        global $wp_query;

        $paged = max(1, get_query_var('paged')); // 現在ページ番号
        $posts_per_page = get_query_var('posts_per_page'); // 1ページの記事数
        $start_position = ($paged - 1) * $posts_per_page + 1;

        $itemList = [];
        $position = $start_position;

        if (have_posts()) :
            while (have_posts()) : the_post();
                // アイキャッチ画像
                if (has_post_thumbnail()) {
                    $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                } else {
                    if (function_exists('get_aioseo_global_og_image')) {
                        $image = get_aioseo_global_og_image();
                    } else {
                        $image = '';
                    }
                }

                $itemList[] = [
                    "@type" => "ListItem",
                    "position" => $position,
                    "url" => get_permalink(),
                    "name" => get_the_title(),
                    "image" => $image,
                    "datePublished" => get_the_date('c') // ISO 8601形式
                ];
                $position++;
            endwhile;
            wp_reset_postdata();
        endif;

        $jsonld = [
            "@context" => "https://schema.org",
            "@type" => "ItemList",
            "itemListElement" => $itemList
        ];

        echo '<script type="application/ld+json">' . wp_json_encode($jsonld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
    }
});
<!DOCTYPE html>
<html>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta content="text/css" http-equiv="Content-Style-Type" />
  <meta content="text/javascript" http-equiv="Content-Script-Type" />
  <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta http-equiv="expires" content="86400">
  <meta http-equiv="Content-Language" content="<?php bloginfo('language'); ?>">
  <?php $user = get_user_by('id', 1); ?>
  <?php if (!empty($user->first_name)): ?>
    <meta name="Author" content="<?php echo $user->first_name . $user->last_name; ?>">
  <?php endif; ?>
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="copyright" content="<?php bloginfo('name'); ?>" />
  <meta name="viewport" content="viewport-fit=cover,width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <meta name="thumbnail" content="<?php echo get_bloginfo('template_url'); ?>/img/thumbs.png" />
  <!--
  <PageMap>
    <DataObject type="thumbnail">
      <Attribute name="src" value="<?php echo get_bloginfo('template_url'); ?>/img/thumbs.png"/>
      <Attribute name="width" value="100"/>
      <Attribute name="height" value="100"/>
    </DataObject>
  </PageMap>
-->
  <?php //タイトルの設定。【トップページ】カスタマイザーのSEOタイトル　【下層】ページタイトル｜カスタマイザーのSEOタイトル　
  ?>
  <title><?php echo get_the_site_title(get_php_customzer('seo_title')); ?></title>

  <?php if (is_single()): ?>
    <?php
    $the_content = get_post(get_the_ID())->post_content;
    $the_content = strip_tags($the_content);
    $the_content = stripslashes($the_content);
    $the_content = preg_replace('/(\s\s|　)/', '', $the_content);
    $the_content = preg_replace("/^\xC2\xA0/", "", $the_content);
    $the_content = str_replace("&nbsp;", '', $the_content);
    $img = get_post_thumbsdata(get_the_ID());
    $ogthumbs = get_aioseo_global_og_image();
    if (!empty($img)) {
      $ogthumbs = $img[0];
    } else {
      $ogthumbs = $ogthumbs;
    }
    ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": "<?php echo get_the_title(get_the_ID()); ?>",
        "description": "<?php echo $the_content; ?>",
        "author": {
          "@type": "Person",
          "name": "<?php echo bloginfo('name'); ?>"
        },
        "publisher": {
          "@type": "Organization",
          "name": "<?php echo bloginfo('name'); ?>",
          "logo": {
            "@type": "ImageObject",
            "url": "<?php echo $ogthumbs; ?>"
          }
        },
        "mainEntityOfPage": {
          "@type": "WebPage",
          "@id": "<?php echo home_url('/'); ?>"
        },
        "datePublished": "<?php echo get_the_date('y-m-d'); ?>",
        "dateModified": "<?php echo get_the_date('y-m-d'); ?>"
      }
    </script>
  <?php endif; ?>

  <?php if (is_page() and !empty(scf::get('jsonld'))): ?>

    <script type="application/ld+json">
      <?php echo scf::get('jsonld'); ?>
    </script>
  <?php endif; ?>


  <?php wp_head(); ?>
  <script>
    var home_url = "<?php echo home_url('/'); ?>";
    var theme_url = "<?php echo get_bloginfo('template_url'); ?>";
    var rest_url = "<?php echo home_url('/wp-json/wp/v2/'); ?>";
    var calendar_y = "<?php echo date('Y'); ?>";
    var calendar_m = "<?php echo date('m'); ?>";
    /*
        <?php foreach (scf::get('eventdates', 226) as $fields): ?>
            <?php $result[] = '"' . date("md", strtotime($fields['eventdate'])) . '"'; ?>
        <?php endforeach; ?>
        */
    <?php if (!empty($result[0])): ?>
      var holiday = [<?php echo implode(',', $result); ?>];
    <?php else: ?>
      var holiday = [""];
    <?php endif; ?>
  </script>
  <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
  <script src="//unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <script src="//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script type='text/javascript' src="<?php echo get_bloginfo('template_url'); ?>/js/animsition.min.js?ver=<?php echo date('Y-m-d'); ?>"></script>
  <script type="text/javascript" src='<?php echo get_bloginfo('template_url'); ?>/js/config.js?ver=<?php echo date('Y-m-d'); ?>'> </script>
  <script type="text/javascript" src='<?php echo get_bloginfo('template_url'); ?>/js/bxslider_setting.js?ver=<?php echo date('Y-m-d'); ?>'> </script>
  <link rel="stylesheet" href="unpkg.com/lenis@1.2.3/dist/lenis.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=kaisei+Decol:wght@400;500;700&family=Yusei+Magic&family=Zen+Maru+Gothic:wght@300;400;500;700;900&family=Zen+Old+Mincho:wght@400;500;600;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" id='def_set_css' type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/css/common.css?ver=<?php echo date('Y-m-d'); ?>" media="all">
</head>

<body id="body">
  <div id="scrolltop" class="bgbase wap">
    <div class="wapper pageWap">
      <div class="cntPageLxn">
        <header id="scrolltop" class="base_header" data-lenis-prevent>
          <?php get_template_part('include/common/header/00_header'); ?>
        </header>
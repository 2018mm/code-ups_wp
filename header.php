<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="CodeUps" />
  <meta name="robots" content="noindex, nofollow">
  <!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://peace-design.info/code-ups/">
<meta property="og:title" content="code ups – code ups">
<meta property="og:description" content="CodeUps">
<meta property="og:image" content="https://peace-design.info/code-ups/wp-content/themes/code-ups/images/common/sp_mv01.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://peace-design.info/code-ups/">
<meta property="twitter:title" content="code ups – code ups">
<meta property="twitter:description" content="CodeUps">
<meta property="twitter:image" content="https://peace-design.info/code-ups/wp-content/themes/code-ups/images/common/sp_mv01.jpg">
  <!-- ファビコン -->
  <link rel="shortcut icon" href="https://peace-design.info/code-ups/wp-content/themes/code-ups/icons/favicon.ico">
  <link rel="apple-touch-icon" href="https://peace-design.info/code-ups/wp-content/themes/code-ups/icons/apple-touch-icon.png">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP&display=swap" rel="stylesheet">
  <!-- swiper -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.6/swiper-bundle.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.6/swiper-bundle.min.js"></script>
  <?php wp_head(); ?>
</head>

<div class="SiteWrapper">

<body>
 <header class="header">
   <div class="header__inner headerIn">
     <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="headerIn__logoFrame">
       <img src="<?php echo get_template_directory_uri() ?>/images/common/CodeUps.svg" alt="codeUpsロゴ">
     </a></h1>
     <!-- ハンバーガー -->
     <div class="headerIn__hamburger hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav class="headerIn__nav header-nav">
        <?php
            wp_nav_menu(
            array(
            'depth'=>1,
            'theme_location'=>'global',
            'container'=>'nav',
            'container_class'=>'header-nav',
            'menu_class'=>'header-nav__lists',
            )
            );
            ?>
    </nav>

  </div>
    <!-- グローバルナビゲーションー -->
  <nav class="headerIn__gnav gnav">
         <?php
            wp_nav_menu(
                array(
                    'depth'=>1,
                    'theme_location'=>'drawer',
                    'container'=>'ul',
                    'container_class'=>'gnav',
                    'menu_class'=>'gnav__lists',
                    )
            );
            ?>　　　　　　　　　　　
  </nav>

 </header>

<?php get_header(); ?>

<main class="main main-wrapper">
    <div class="sub-404 l-inner">
      <div class="sub-404__textarea">
        <p class="sub-404__title">404 Not Found</p>
        <p class="sub-404__text">お探しのページは<br class="u-mobile">見つかりませんでした。</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-404__btn c-btn-gray u-desktop">TOPへ</a>
      </div>
    </div> 
  </main>

  <?php get_footer(); ?>
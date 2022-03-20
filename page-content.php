<?php
/**
* Template Name: 事業内容
*/
get_header(); ?>

<!-- sub-firstview-->
<div class="sub-firstview sub-firstview--content js-firstview">
     <h1 class="sub-content-title sub-firstview__title">事業内容</h1>
 </div>

 <main class="main">
     <!-- breadcrumb -->
    <div class="breadcrumb">
        <?php
    if ( function_exists( 'bcn_display' ) ) {
        bcn_display();
    }
    ?>
   </div>

   <!-- sub-content -->
  <section class="sub-content">
    <div class="sub-content__inner subContentIn l-inner">
      <h2 class="subContentIn__top-title sub-title">企業理念</h2>
      <p class="subContentIn__text">説明が入ります。説明が入ります。説明が入ります。説明が入ります。
        説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>

      <div class="subContentIn__items subContentItems">

        <div class="subContentItems__item subContentBox" id="point01">
          <div class="subContentBox__img"><img src="<?php echo get_template_directory_uri() ?>/images/common/sub_description01.jpg" alt="企業理念"></div>
          <div class="subContentBox__textarea">
            <h3 class="subContentBox__textarea--title sub-title">企業理念１</h3>
            <p class="subContentBox__textarea--text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </div>

        <div class="subContentItems__item subContentBox" id="point02">
          <div class="subContentBox__img"><img src="<?php echo get_template_directory_uri() ?>/images/common/sub_description02.jpg" alt="企業理念"></div>
          <div class="subContentBox__textarea">
            <h3 class="subContentBox__textarea--title sub-title">企業理念２</h3>
            <p class="subContentBox__textarea--text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </div>

        <div class="subContentItems__item subContentBox" id="point03">
          <div class="subContentBox__img"><img src="<?php echo get_template_directory_uri() ?>/images/common/sub_description03.jpg" alt="企業理念"></div>
          <div class="subContentBox__textarea">
            <h3 class="subContentBox__textarea--title sub-title">企業理念３</h3>
            <p class="subContentBox__textarea--text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/contact-sec'); ?>

</main>

<?php get_footer(); ?>

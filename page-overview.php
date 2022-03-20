<?php 
/**
* Template Name: 企業概要
*/
get_header(); ?>

<!-- sub-firstview-->
<div class="sub-firstview sub-firstview--overview js-firstview">
     <h1 class="sub-overview-title sub-firstview__title">企業概要</h1>
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

<div class="sub-overview-items l-inner subOverview">
     <dl class="subOverview__list subOverviewList">
       <dt class="subOverviewList__title">会社名</dt>
       <dd class="subOverviewList__text">株式会社CodeUps</dd>
     </dl>

     <dl class="subOverview__list subOverviewList">
      <dt class="subOverviewList__title">設立</dt>
      <dd class="subOverviewList__text">テキストが入ります。</dd>
    </dl>
    <dl class="subOverview__list subOverviewList">
      <dt class="subOverviewList__title">資本金</dt>
      <dd class="subOverviewList__text">テキストが入ります。</dd>
    </dl>

    <dl class="subOverview__list subOverviewList">
      <dt class="subOverviewList__title">売上高</dt>
      <dd class="subOverviewList__text">テキストが入ります。</dd>
    </dl>

    <dl class="subOverview__list subOverviewList">
      <dt class="subOverviewList__title">代表者</dt>
      <dd class="subOverviewList__text">テキストが入ります。</dd>
    </dl>

    <dl class="subOverview__list subOverviewList">
      <dt class="subOverviewList__title">従業員数</dt>
      <dd class="subOverviewList__text">テキストが入ります。</dd>
    </dl>

    <dl class="subOverview__list subOverviewList">
      <dt class="subOverviewList__title">事業内容</dt>
      <dd class="subOverviewList__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
    </dl>

    <dl class="subOverview__list subOverviewList">
      <dt class="subOverviewList__title">所在地</dt>
      <dd class="subOverviewList__text">東京駅</dd>
    </dl>

   </div>

   <div class="sub-overview-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477985332544!2d139.74324421484974!3d35.65858483882189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1646369849277!5m2!1sja!2sjp" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   </div>

   <?php get_template_part('template-parts/contact-sec'); ?>

</main>

<?php get_footer(); ?>







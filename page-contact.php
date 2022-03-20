<?php 
/**
* Template Name: お問い合わせ
*/
get_header(); ?>

<!-- sub-firstview-->
<div class="sub-firstview sub-firstview--contact js-firstview">
  <h1 class="sub-firstview__title sub-contact-title">お問い合わせ</h1>
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

   <!-- sub-contact -->
<div class="sub-contact-form contactForm l-inner">

<?php the_content(); ?>

</div>
   
</main>

<?php get_footer(); ?>
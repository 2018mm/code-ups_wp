<?php get_header(); ?>

<main class="main main--single">

  <!-- bread -->
  <div class="breadcrumb l-inner">
    <?php 
    if ( function_exists( 'bcn_display' ) ) { 
      bcn_display();
    }
  ?>
  </div>

  <section class="single-work">
    <div class="single-work__inner singleWorkIn l-inner">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>

      <h1 class="singleWorkIn__title"><?php the_title(); ?></h1>
      <div class="singleWorkIn__info singleWorkInfo">
        <time class="singleWorkInfo__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
        <span class="singleWorkInfo__category"><?php
            $terms = get_the_terms($post->ID, 'worktx');
            if(!empty($terms)) {
              foreach($terms as $term):
              echo $term->name;
              endforeach;
            } else {
              echo '未分類';
            }
          ?></span>
      </div>

      <div class="singleWorkIn__slide">
          <!-- Slider-singleWork -->
          <div class="swiper-container singleWork-slider">
              <!-- メイン -->
              <div class="swiper-wrapper">
              <?php 
                    $imggroup = SCF::get('workSlide');	
                    foreach ($imggroup as $fields ) {
                        $imgurl = wp_get_attachment_image_src($fields['work-img'] , 'large');
                    ?>  
                  <div class="swiper-slide singleWork-slide">
                    <img src="<?php echo $imgurl[0]; ?>" alt=""></div>
                    <?php } ?>
              </div>

              <div class="swiper-button-prev swiper-singleWork-button-prev"></div>
              <div class="swiper-button-next swiper-singleWork-button-next"></div>
          </div>
          <!-- サムネイル -->
          <div class="swiper-container singleWork-thumbs">
              <div class="swiper-wrapper">
              <?php 
                    $imggroup = SCF::get('workSlide');	
                    foreach ($imggroup as $fields ) {
                        $imgurl = wp_get_attachment_image_src($fields['work-img'] , 'thumbnail');
                    ?>  
                <div class="swiper-slide singleWork-thumb"> 
                <img src="<?php echo $imgurl[0]; ?>" alt=""></div>
                <?php } ?>
              </div>
          </div>
      </div>

      <ul class="singleWorkIn__items singleWorkItems">

      <?php
        $workItem = SCF::get('workItem');
        foreach ($workItem as $workItems ) {
        ?>

        <li class="singleWorkItems__item singleWorkBox">
          <h2 class="singleWorkBox__title"><?php echo $workItems['work-title']; ?></h2>
          <p class="singleWorkBox__text"><?php echo nl2br($workItems['work-text']); ?></p>
        </li>
        <?php } ?>
      
      </ul>

      <?php endwhile; endif; ?>
      
      <!-- single pagination -->

      <div class="singleWorkIn__pagination c-singlePagination">

      <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
        <div class="c-singlePagination__item">
          <a href="<?php echo get_permalink($nextpost->ID); ?>">prev</a>
        </div>
        <?php endif; ?>

        <div class="c-singlePagination__item">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>/works">一覧</a>
        </div>

        <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
        <div class="c-singlePagination__item">
          <a href="<?php echo get_permalink($prevpost->ID); ?>">next</a>
        </div>
        <?php endif; ?>

      </div>  
       
    </div>
  </section>

  <aside class="picup sigleWorkPicup">
    <div class="picup__inner picupIn l-inner">
      <h2 class="picupIn__title">関連記事</h2>

      <ul class="picupIn__lists picupLists">

      <?php

            $categories = get_the_category($post->ID);
            $category_id = array();

            foreach($categories as $category):
                array_push($category_id, $category->cat_ID);
            endforeach ;

            $args = array(
                'post_type' => 'work',
                'post__not_in' => array($post->ID),  
                'posts_per_page'=> 4,                
                'category__in' => $category_id,      
                'orderby' => 'rand',                 
            );
            $query = new WP_Query($args);

            if( $query->have_posts() ):
                while ($query->have_posts()) : $query->the_post();
                    ?>

        <li class="picupLists__card picupCard"><a href="<?php echo get_permalink(); ?>">
          <div class="picupCard__img"><?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri() ?>/./images/common/noimage.jpg" alt="" >
              <?php endif; ?></div>
          <div class="picupCard__body picupCardBody">
            <h4 class="picupCardBody__title"><?php echo  get_the_title(); ?></h4>
            <p class="picupCardBody__text u-mobile"><?php the_excerpt() ?></p>
            <div class="picupCardBody__info">
              <span class="picupCardBody__info--category"><?php $terms = get_the_terms($post->ID, 'worktx');
                            foreach($terms as $term):
                            echo $term->name;
                            endforeach;
                        ?></span>
              <time class="picupCardBody__info--date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            </div>
          </div>
        </a></li>

        <?php
                endwhile;
                else:
                echo '記事はありませんでした';
                endif;
                wp_reset_postdata();

            ?>
       
      </ul>
    </div>
  </aside>

  <?php get_template_part('template-parts/contact-sec'); ?>

</main>

<?php get_footer(); ?>
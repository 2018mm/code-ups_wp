<?php get_header(); ?>

  <!-- firstview -->
  <div class="firstview js-firstview">

    <div class="swiper-container fv__swiper swiper-fv">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="slide-img">
            <img class="u-mobile" src="<?php echo get_template_directory_uri() ?>/images/common/sp_mv01.jpg" alt="">
            <img class="u-desktop" src="<?php echo get_template_directory_uri() ?>/images/common/pc_mv01.jpg" alt="">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slide-img">
            <img class="u-mobile" src="<?php echo get_template_directory_uri() ?>/images/common/sp_mv02.jpg" alt="">
            <img class="u-desktop" src="<?php echo get_template_directory_uri() ?>/images/common/pc_mv02.jpg" alt="">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slide-img">
            <img class="u-mobile" src="<?php echo get_template_directory_uri() ?>/images/common/sp_mv03.jpg" alt="">
            <img class="u-desktop" src="<?php echo get_template_directory_uri() ?>/images/common/pc_mv03.jpg" alt="">
          </div>
        </div>

      </div>
    </div>

    <div class="firstview__inner firstviewIn">
      <p class="firstviewIn__lead">メインタイトルが入ります</p>
      <p class="firstviewIn__text">サブタイトルが入ります</p>
    </div>
  </div>

  <main class="main">

    <!-- top-article -->
    <article class="top-article">
      <div class="top-article__inner topArticlel l-inner">

      <?php
            $args = array(
                'posts_per_page' => 1
            );
            $posts = get_posts( $args );
            foreach ( $posts as $post ):
            setup_postdata( $post );
            ?>

        <div class="topArticlel__info topArticlelInfo">
          <time class="topArticlelInfo__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <span class="topArticlelInfo__category"><?php
                $postcat = get_the_category();
                echo $postcat[0]->name;
            ?></span>
        </div>
        <a href="<?php the_permalink(); ?>"><h2 class="topArticlel__text"><?php echo  get_the_title(); ?></h2></a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/news" class="topArticlel__btn">すべて見る</a>

        <?php
            endforeach;
            wp_reset_postdata();
            ?>
      </div>
    </article>

    <!--  top-content-->
    <section class="top-content">
      <div class="bg-line1"></div>
      <h2 class="top-content__title section-title" data-en="Content">事業内容</h2>

      <div class="top-content__items topContents">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/content" class="topContents__item topContentItem">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/description01.jpg" alt="経営理念ページへ">
          <span class="topContentItem__link">経営理念ページへ</span>
        </a>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/content#point01" class="topContents__item topContentItem">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/description02.jpg" alt="理念1へ">
          <span class="topContentItem__link">理念1へ</span>
        </a>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/content#point02" class="topContents__item topContentItem">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/description03.jpg" alt="理念2へ">
          <span class="topContentItem__link">理念2へ</span>
        </a>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/content#point03" class="topContents__item topContentItem">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/description01.jpg" alt="理念3へ">
          <span class="topContentItem__link">理念3へ</span>
        </a>

      </div>

    </section>

     <!--  top-works-->
     <section class="top-works">
      <div class="bg-line2-sp"></div>
      <h2 class="top-works__title section-title" data-en="Works">制作実績</h2>

      <div class="top-works__items topWorksItems p-topWorksItems">
        <div class="topWorksItems__slidebox">
          <!-- Slider2 -->
          <div class="swiper-container topWorksItems__slide swiper-works">
            <div class="swiper-wrapper">

            <?php
            $args = array(
                'post_type' => 'work',
                'post_status' => 'publish',
                'orderby'     => 'date',
                'order' => 'DESC',
                'posts_per_page' => 3
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
            ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

                <div class="swiper-slide"><div class="swiper-works__img"> <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
              <?php else: ?>
                  <img src="<?php echo get_template_directory_uri() ?>/./images/common/noimage.jpg" alt="">
                  <?php endif; ?></div></div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
            <div class="swiper-pagination swiper-works__pagination"></div>
          </div>
        </div>

        <div class="topWorksItems__item topWorksItem">
          <h4 class="topWorksItem__title">メインタイトルが入ります。</h4>
          <p class="topWorksItem__text text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

          <a href="<?php echo esc_url( home_url( '/' ) ); ?>/works" class="topWorksItem__btn c-btn-gray">詳しく見る</a>
        </div>
      </div>

     </section>

      <!-- overview -->
      <section class="top-overview">
        <div class="bg-line2-pc"></div>
        <h2 class="top-overview__title section-title" data-en="Overview">企業概要</h2>

        <div class="top-overview__items topOverviewItems p-topOverviewItems">
          <div class="topOverviewItems__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/company.jpg" alt="企業概要">
          </div>

          <div class="topOverviewItems__item topOverviewItem topWorksItem">
            <h4 class="topOverviewItem__title">メインタイトルが入ります。</h4>
            <p class="topOverviewItem__text text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>/overview" class="topOverviewItem__btn c-btn-gray">詳しく見る</a>
          </div>
        </div>

       </section>

      <!--  blog -->
      <section class="top-blog">
        <div class="top-blog__inner l-inner topBlog">
          <h2 class="top-blog__title section-title" data-en="Blog">ブログ</h2>

          <ul class="topBlog__items topblogItems">

          <?php
            $args = array(
                'post_type' => 'blog-post',
                'post_status' => 'publish',
                'orderby'     => 'date',
                'order' => 'DESC',
                'posts_per_page' => 3
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
            ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

            <li class="topblogItems__item topBlogBox"><a href="<?php the_permalink(); ?>">
              <div class="topBlogBox__img"><?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri() ?>/./images/common/noimage.jpg" alt="" >
              <?php endif; ?></div>
              <div class="topBlogBox__body topBlogBody">
                <h4 class="topBlogBody__title"><?php echo  get_the_title(); ?></h4>
                <p class="topBlogBody__text"><?php the_excerpt() ?></p>
                <div class="topBlogBody__info">
                  <span class="topBlogBody__info--category"><?php $terms = get_the_terms($post->ID, 'blogtx');
                            foreach($terms as $term):
                            echo $term->name;
                            endforeach;
                        ?></span>
                  <time class="topBlogBody__info--date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
              </div>
            </a></li>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

          </ul>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog" class="topBlog__btn c-btn-gray">詳しく見る</a>
        </div>
      </section>

      <?php get_template_part('template-parts/contact-sec'); ?>

  </main>

  <?php get_footer(); ?>

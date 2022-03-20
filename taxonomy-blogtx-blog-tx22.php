<?php get_header(); ?>

<!-- sub-firstview-->
<div class="sub-firstview sub-firstview--blog js-firstview">
  <h1 class="sub-blog-title sub-firstview__title">ブログ</h1>
</div>

<main class="main">


 <!-- bread -->
 <div class="breadcrumb">
    <!-- <?php
   if ( function_exists( 'bcn_display' ) ) {
     bcn_display();
   }
 ?>-->
   </div>

   <section class="sub-blog">
    <div class="sub-blog__inner subBlogIn l-inner">
     <div class="subBlogIn__item subBlogItem">

      <!--タブ-->
        <ul class="subBlogItem__tabs c-Tab">
          <li class="c-Tab__item tab-all"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog">ALL</li>
          <li class="c-Tab__item tab-1"><a href="<?php echo get_term_link( 'blog-tx21','blogtx'); ?>">カテゴリー21</a></li>
          <li class="c-Tab__item is-active tab-2"><a href="<?php echo get_term_link( 'blog-tx22','blogtx'); ?>">カテゴリー22</a></li>
          <li class="c-Tab__item tab-3"><a href="<?php echo get_term_link( 'blog-tx23','blogtx'); ?>">カテゴリー23</a></li>
        </ul>
     
         <div class="subBlogItem__cards subBlogCards"><!-- 
        --><?php if ( have_posts() ) : ?><!-- 
 　　　　--><?php while ( have_posts() ) : the_post();?><!--  
         --><li class="subBlogCards__item subBlogCard"><a href="<?php the_permalink(); ?>">
                    <div class="subBlogCard__img">
                    <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() ?>/./images/common/noimage.jpg" alt="" >
                <?php endif; ?>
                    </div>
                    <div class="subBlogCard__body subBlogCardBody">
                    <h4 class="subBlogCardBody__title"><?php echo  get_the_title(); ?></h4>
                    <p class="subBlogCardBody__text"><?php the_excerpt() ?></p>
                    <div class="subBlogCardBody__info">
                        <span class="subBlogCardBody__info--term"><?php
                            $terms = get_the_terms($post->ID,'blogtx');
                            foreach( $terms as $term ) {
                            echo $term->name;
                            }
                            ?></span>
                        <time class="subBlogCardBody__info--date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </div>
                    </div>
                </a></li>

                <?php
                    endwhile;
                    else:
                    echo '<div><p>ありません。</p></div>';
                    endif;
                ?>

                  </div>

              <!-- pagination-->
             <div class="sub-article-pagination pagination">

             <?php
                $args = array(
                    'mid_size' => 1,
                    'prev_text' => 'PREV',
                    'next_text' => 'NEXT',
                    'screen_reader_text' => ' ',
                );
                the_posts_pagination($args);
                ?>

            </div>

     </div><!-- /subBlogItem -->
    </div><!-- /subBlogIn -->
  </section>

  <?php get_template_part('template-parts/contact-sec'); ?>

</main>

<?php get_footer(); ?>


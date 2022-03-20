<?php get_header(); ?>
<!-- sub-firstview-->
<div class="sub-firstview sub-firstview--works">
     <h1 class="sub-works-title sub-firstview__title">制作実績</h1>
 </div>

 <main class="main">
     <!-- bread -->
 <div class="breadcrumb">
    <?php
   if ( function_exists( 'bcn_display' ) ) {
     bcn_display();
   }
 ?>
   </div>

   <section class="sub-works">
    <div class="sub-works__inner subWorksIn l-inner">
     <div class="subWorksIn__item subWorksItem">

      <!--タブ-->
        <ul class="subWorksItem__tabs c-Tab">
        <li class="c-Tab__item tab-all"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/works">ALL</li>
          <li class="c-Tab__item tab-1"><a href="<?php echo get_term_link( 'work-tx31','worktx'); ?>">カテゴリー31</a></li>
          <li class="c-Tab__item tab-2"><a href="<?php echo get_term_link( 'work-tx32','worktx'); ?>">カテゴリー32</a></li>
          <li class="c-Tab__item is-active tab-3"><a href="<?php echo get_term_link( 'work-tx33','worktx'); ?>">カテゴリー33</a></li>
        
        </ul>
      
        <div class="subWorksItem__cards subWorksCards">

        <?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post();?>

            <div class="subWorksCards__card worksCard"><a href="<?php the_permalink(); ?>">
                <div class="worksCard__img">
                    <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
              <?php else: ?>
                  <img src="<?php echo get_template_directory_uri() ?>/./images/common/noimage.jpg" alt="">
                  <?php endif; ?>
                  <span class="worksCard__category">
                  <?php $terms = get_the_terms($post->ID, 'worktx');
                            foreach($terms as $term):
                            echo $term->name;
                            endforeach;
                        ?>
                  </span>
                </div>
                <p class="worksCard__title"><?php echo  get_the_title(); ?></p>
              </a></div>
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

     </div><!-- /subWOrksItem -->
    </div><!-- /subWorkIn -->
  </section>

  <?php get_template_part('template-parts/contact-sec'); ?>

</main>

<?php get_footer(); ?>


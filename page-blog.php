<?php
/**
* Template Name: ブログ
*/
get_header(); ?>

<!-- sub-firstview-->
<div class="sub-firstview sub-firstview--blog js-firstview">
  <h1 class="sub-blog-title sub-firstview__title">ブログ</h1>
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

   <section class="sub-blog">
    <div class="sub-blog__inner subBlogIn l-inner">
     <div class="subBlogIn__item subBlogItem">

      <!--タブ-->
      <ul class="subBlogItem__tabs c-Tab">
          <li class="c-Tab__item is-active tab-all"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog">ALL</li>
          <li class="c-Tab__item tab-1"><a href="<?php echo get_term_link( 'blog-tx21','blogtx'); ?>">カテゴリー21</a></li>
          <li class="c-Tab__item tab-2"><a href="<?php echo get_term_link( 'blog-tx22','blogtx'); ?>">カテゴリー22</a></li>
          <li class="c-Tab__item tab-3"><a href="<?php echo get_term_link( 'blog-tx23','blogtx'); ?>">カテゴリー23</a></li>
        </ul>

        <ul class="subBlogItem__cards subBlogCards">

            <?php
       $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
       $the_query = new WP_Query( array(
           'post_status' => 'publish',
           'post_type' => 'blog-post', 
           'paged' => $paged,
           'posts_per_page' => 9, 
           'orderby'     => 'date',
           'order' => 'DESC'
       ) );

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <li class="subBlogCards__item subBlogCard <?php $days = 7;
                $today = date_i18n('U');
                $entry_day = get_the_time('U');
                $keika = date('U',($today - $entry_day)) / 86400;
                if ( $days > $keika ):
                    echo 'subBlogCard--new';
                endif; ?>"><a href="<?php the_permalink(); ?>">
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
                    <span class="subBlogCardBody__info--category"><?php $terms = get_the_terms($post->ID, 'blogtx');
                            foreach($terms as $term):
                            echo $term->name;
                            endforeach;
                        ?></span>
                    <time class="subBlogCardBody__info--date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                  </div>
                </div>
              </a></li>

              <?php endwhile; ?>
            <?php endif; ?>

            </ul>
              <!-- pagination-->
            <div class="sub-article-pagination pagination">
            <?php //ページリスト表示処理
       global $wp_rewrite;
       $paginate_base = get_pagenum_link(1);
       if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
           $paginate_format = '';
           $paginate_base = add_query_arg('paged','%#%');
       }else{
           $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
           user_trailingslashit('page/%#%/','paged');
           $paginate_base .= '%_%';
       }
       echo paginate_links(array(
           'base' => $paginate_base,
           'format' => $paginate_format,
           'total' => $the_query->max_num_pages,
           'mid_size' => 1,
           'current' => ($paged ? $paged : 1),
           'prev_text' => 'PREV',
           'next_text' => 'NEXT',
       ));

       
       wp_reset_postdata(); ?>
       
     </div><!-- /subBlogItem -->

     </div><!-- /subBlogIn -->
  </section>

  <?php get_template_part('template-parts/contact-sec'); ?>

</main>

<?php get_footer(); ?>









          


         
                    
            
     

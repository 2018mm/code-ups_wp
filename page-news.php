<?php 
/**
* Template Name: お知らせ
*/
get_header(); ?>

<!-- sub-firstview-->
<div class="sub-firstview sub-firstview--news js-firstview">
     <h1 class="sub-firstview__title sub-news-title">お知らせ</h1>
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

    <!-- sub-article -->
   <article class="sub-article">
    <div class="sub-article__inner subArticle l-inner">

    <?php
       $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
       $the_query = new WP_Query( array(
           'post_status' => 'publish',
           'post_type' => 'post', 
           'paged' => $paged,
           'posts_per_page' => 10, 
           'orderby'     => 'date',
           'order' => 'DESC'
       ) );

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>

       <div class="subArticle__box subArticleBox">
            <div class="subArticleBox__info subArticleInfo">
              <time class="subArticleInfo__time text" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <span class="subArticleInfo__category"><?php
                $postcat = get_the_category();
                echo $postcat[0]->name;
            ?></span>
            </div>
            <h3 class="subArticlelBox__text text"><a href="<?php the_permalink(); ?>"><?php echo  get_the_title(); ?></a></h3>
       </div>

       <?php endwhile; ?>
       <?php endif; ?>

      </div> <!-- /subArticle-->

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

   </article> 

   <?php get_template_part('template-parts/contact-sec'); ?>

</main>

<?php get_footer(); ?>
   
   
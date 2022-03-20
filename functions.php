<?php

/**
 *テーマのセットアップ
 **/


 function my_setup()
 {
     add_theme_support('post-thumbnails');
     add_theme_support('automatic-feed-links');
     add_theme_support('title-tag');
     add_theme_support(
         'html5',
         array(
            'search-form',
            'commemt-form',
            'commemt-list',
            'gallery',
            'caption',
         )
         );
 }
 add_action('after_setup_theme', 'my_setup');


  /**
  *CSSとJavaScriptの読み込み
  */

  function my_script_init()
  {
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
    wp_enqueue_style('my', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '', true);
  }
  add_action('wp_enqueue_scripts', 'my_script_init');

  /**
 * メニューの登録
 */

 function my_menu_init()
 {
     register_nav_menus(
         array(
          'global'=>'ヘッダーメニュー',
          'drawer'=>'ドロワーメニュー',
          'footer-menu'=>'フッターメニュー',
         )
         );
 }
 add_action('init', 'my_menu_init');


/**
 * 抜粋文の文字数設定
 */

function custom_excerpt_length( $length ) {
    return 27;	//表示したい文字数
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/*** カスタム投稿一覧　表示数設定 ***/
function change_posts_per_page($query)
{
	if ( !is_admin() && $query->is_main_query()) {	// 管理画面,メインクエリに干渉しないために必須
	    if ( is_tax('blogtx') ) {
	        $query->set( 'posts_per_page', '9' );
	    }
	    else if ( is_tax('worktx') ) {
	        $query->set( 'posts_per_page', '6' );
	    }
	}
    return $query;
}

add_action( 'pre_get_posts', 'change_posts_per_page' );


/**
 * except 文末表示なしに変更
 */
function tuzuki_excerpt_more($post) {
	return '';
}
add_filter('excerpt_more', 'tuzuki_excerpt_more');


/***  Contact Form7の送信ボタンをクリックした後の遷移先設定  ***/
add_action( 'wp_footer', 'add_origin_thanks_page' );
  function add_origin_thanks_page() {
    echo <<< EOC
      <script>
       document.addEventListener( 'wpcf7mailsent', function( event ) {
         location = 'https://peace-design.info/code-ups/contact/thanks/';
       }, false );
      </script>
    EOC;
  }



 ?>

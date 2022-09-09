<?php

function burger_theme_setup() {
    add_action( 'after_setup_theme', 'burger_theme_setup' );
}


function HamburgerSite_title( $title ) {
    if ( is_front_page() && is_home() ) { //もし表示されたページがフロントページ＆メインブログページなら
        $title = get_bloginfo( 'name', 'display' ); //タイトルはサイトのタイトル名を取得
    } elseif ( is_singular() ) { //投稿・カスタム投稿・固定ページ・添付ファイルのシングルページなら
        $title = single_post_title( '', false ); //タイトルは投稿ページのタイトルを表示
    }
        return $title;
    }
add_filter( 'pre_get_document_title', 'HamburgerSite_title' ); //フィルターフックで処理して出力


    //テーマサポート
    add_theme_support( 'title-tag' );
    //add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form' ) );
    add_theme_support( 'automatic-feed-links' );
    
    //メニューの登録
    /*register_sidebar(
        array(
            'name'     => 'グローバルメニュー',
            'id'       => 'globalmenu',
            'description'  => 'サイトのグローバルメニューです', 
        ));
    register_sidebar(
        array(
            'name'     => 'フッターメニュー',
            'id'       => 'footer-menu',
            'description'  => 'サイトのフッターメニューです',

        ));*/    
        
function register_HamburgerSite_menus() { //メニューの設定
    register_nav_menus(
        array(
            'globalmenu' => 'Global Menu',
            'footermenu' => 'Footer Menu',
        )
        );

}
add_action( 'after_setup_theme', 'register_HamburgerSite_menus' );   

function HamburgerSite_enqueue_scripts() {
    wp_enqueue_script( 
        'jquery',
        get_template_directory_uri().'/js/jquery-3.6.0.min.js',
        array(),
        '3.6.0',
        true
     );
    wp_enqueue_script(
        'script',
        get_template_directory_uri().'/js/script.js',
        array('jquery'),
        '1.0.0',
        true
    );
    wp_enqueue_style(
        'googlefonts',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap',
        array(),
        '1.0.0',
    );  
    wp_enqueue_style(
        'fontawesome',
        'https://use.fontawesome.com/releases/v5.6.1/css/all.css',
        array(),
        '1.0.0',
    ); 
    wp_enqueue_style(
        'mplus-fonts',
        'http://mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css',
        array(),
        '1.0.0',
    );   
    wp_enqueue_style(
        'burger-theme-style',
        get_template_directory_uri() . '/css/style.css',
        array(),
        '1.0.0',
    ); 
    
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/style.css',
        array(),
        '1.0.0',
    );       

}
add_action( 'wp_enqueue_scripts', 'HamburgerSite_enqueue_scripts' );







function SearchFilter($query) {
    if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
    $query->set( 'post_type', 'post' );
    }
    }
    add_action( 'pre_get_posts','SearchFilter' );
  
  //サイト内検索のカスタマイズ
  function custom_search($search, $wp_query)
  {
    global $wpdb;
  
    //検索ページ以外だったら終了
    if (!$wp_query->is_search)
      return $search;
    if (!isset($wp_query->query_vars))
      return $search;
  
    // タグ名・カテゴリ名・カスタムフィールド も検索対象にする
    $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
    if (count($search_words) > 0) {
      $search = '';
      foreach ($search_words as $word) {
        if (!empty($word)) {
          $search_word = $wpdb->_escape("%{$word}%");
          $search .= " AND (
                          {$wpdb->posts}.post_title LIKE '{$search_word}'
             
                          -- OR {$wpdb->posts}.post_content LIKE '{$search_word}'
              -- // 検索結果に投稿内容を含めたい場合はコメントアウトを解除
  
                          OR {$wpdb->posts}.ID IN (
                              SELECT distinct r.object_id
                              FROM {$wpdb->term_relationships} AS r
                              INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
                              INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
                              WHERE t.name LIKE '{$search_word}'
                          OR t.slug LIKE '{$search_word}'
                          OR tt.description LIKE '{$search_word}'
                          )
                          OR {$wpdb->posts}.ID IN (
                              SELECT distinct p.post_id
                              FROM {$wpdb->postmeta} AS p
                              WHERE p.meta_value LIKE '{$search_word}'
                          )
                  ) ";
        }
      }
    }
  
    return $search;
  }
  add_filter('posts_search', 'custom_search', 10, 2);



  // 未入力検索の結果を、全部の記事表示から非表示に変更する関数
function mycus_empty_and_blank_search_invalid_func( $search, \WP_Query $q ) {
    if ( $q->is_search() && $q->is_main_query() && ! $q->is_admin() ) {
        $s = $q->get( 's' );
        $s = trim( $s );
        if ( empty( $s ) ) {
            $search .=" AND 0=1 ";
        }
    }
    return $search;
}
add_filter( 'posts_search', 'mycus_empty_and_blank_search_invalid_func', 10, 2 );


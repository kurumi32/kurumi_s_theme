<?php
function load_script() {
    if ( !is_admin() ) {
      // ここでファイルの読み込みを行う
     
      wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/style.css',
      );
      
      wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery')
      );
    }
  }
  add_action('init', 'load_script');
//タイトルタグの自動出力
  add_theme_support('title-tag');
  //サムネイル機能の有効化
  add_theme_support('post-thumbnails');

  // カスタム投稿タイプ(呼び出し)
add_action('init', 'create_post_type');
?>
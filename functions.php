<?php
// ウィジェットエリア
// サイドバーのウィジェット
register_sidebar( array(
     'name' => __( 'Side Widget' ),
     'id' => 'side-widget',
     'before_widget' => '<li class="widget-container">',
     'after_widget' => '</li>',
     'before_title' => '<h5>',
     'after_title' => '</h5>',
) );

// フッターエリアのウィジェット
register_sidebar( array(
     'name' => __( 'Footer Widget' ),
     'id' => 'footer-widget',
     'before_widget' => '<div class="widget-area"><ul><li class="widget-container">',
     'after_widget' => '</li></ul></div>',
     'before_title' => '<h5>',
     'after_title' => '</h5>',
) );

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(220, 146, true ); // 幅 220px、高さ 165px、切り抜きモード

// 文字数
function twpp_change_excerpt_length( $length ) {
  return 50;
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

//アイキャッチ画像がない時に代替画像を表示
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

if(empty($first_img)){ //Defines a default image
        $first_img = "https://hoc-template01.com/wp/wp-content/uploads/index_news_img02.jpg";
    }
    return $first_img;
}

// カスタムナビゲーションメニュー
add_theme_support('menus');

// オリジナル function comment_form in /wp-includes/comment-template.php
// 「コメントを残す」の文言を変更
add_filter( 'comment_form_defaults', 'my_title_reply');
function my_title_reply( $defaults){
    $defaults['title_reply'] = 'コメントはこちらから';
    return $defaults;
}

function template_uri() {
	return get_template_directory_uri();
}
add_shortcode("template_uri", "template_uri");

?>

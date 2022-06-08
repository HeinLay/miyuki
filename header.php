<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
	<meta charset="utf-8">
	<!-- ▼レスポンシブ▼ -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- ▼キャッシュの無効化▼ -->
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Expires" content="0">
	<!-- ▼インデックス、クロールの許可▼ -->
	<meta name="robots" content="index, follow">
	<!-- ▼各ページのtitleを反映▼ -->
	<title><?php bloginfo('name'); ?><?php wp_title('｜', false, 'right'); ?></title>
	<!-- ▼description▼ -->
	<!-- <meta name="description" content="新着情報のディスクリプションがここに入ります。90～120文字で入力し、全ページ同じディスクリプションにならないように注意しましょう。"> -->
	<!-- All in One SEO Packで設定するためコメントアウトしています -->
	<!-- ▼ファビコン▼ -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon32.ico">
	<!-- ▼スマホ用アイコン▼ -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/common/icon_apple.png">
	<!-- ▼URL正規化▼ -->
	<!-- <link rel="canonical" href="【　５：ページURL（上の４と別URLになる場合あり）　】"> -->
	<!-- All in One SEO Packで設定するためコメントアウトしています -->
	<!-- ▼css▼ -->
	<link href="<?php echo get_template_directory_uri(); ?>/reset.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/responsive.css" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- ▼Font Awesome▼ -->
  <script src="https://kit.fontawesome.com/58480316b1.js" crossorigin="anonymous" async></script>
<?php wp_head(); ?>
</head>

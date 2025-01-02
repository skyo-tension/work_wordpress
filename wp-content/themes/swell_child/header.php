<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php SWELL_Theme::root_attrs(); ?>>
<head>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, viewport-fit=cover">
<?php
	wp_head();
	$SETTING = SWELL_Theme::get_setting(); // SETTING取得
?>
</head>
<body>
<?php if ( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
<div class="customize_container">
<div class="left">
<div id="vert_nav">
	<div class="vert_nav_logo">
		<a href="<?php echo home_url(); ?>/">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/vert_logo.png" alt="">
		</a>
	</div>
	<div>
		<ul>
			<li><a href="<?php echo home_url(); ?>/campaign/">キャンペーン</a></li>
			<li><a href="<?php echo home_url(); ?>/price/">料金プラン</a></li>
			<li><a href="<?php echo home_url(); ?>/smartphone/">端末一覧</a></li>
			<li><a href="<?php echo home_url(); ?>/servicearea">サービスエリア</a></li>
			<li><a href="<?php echo home_url(); ?>/option/">オプション</a></li>
			<li><a href="<?php echo home_url(); ?>/">ご利用までの流れ</a></li>
			<li><a href="<?php echo home_url(); ?>/faq/">よくある質問</a></li>
			<li><a href="<?php echo home_url(); ?>/tellme/">おしえてマグナスくん！</a></li>
		</ul>
		<a href="#" class="apply_btn">
			<span>申し込む</span>
		</a>
	</div>
</div>
</div>
<div class="right">
<div id="body_wrap" <?php body_class(); ?> <?php SWELL_Theme::body_attrs(); ?>>
<?php
	// SPメニュー
	$cache_key = $SETTING['cache_spmenu'] ? 'spmenu' : '';
	SWELL_Theme::get_parts( 'parts/header/sp_menu', null, $cache_key );

	// ヘッダー
	$cache_key = '';
	if ( $SETTING['cache_header'] ) {
		$cache_key = ( SWELL_Theme::is_top() && ! is_paged() ) ? 'header_top' : 'header_notop';
	}
	SWELL_Theme::get_parts( 'parts/header/header_contents', null, $cache_key );

	// Barba用 wrapper
	if ( SWELL_Theme::is_use( 'pjax' ) ) {
		echo '<div data-barba="container" data-barba-namespace="home">';
	}

	// メインビジュアル
	if ( SWELL_Theme::is_use( 'mv' ) ) {
		$cache_key = $SETTING['cache_top'] ? 'mv' : '';
		SWELL_Theme::get_parts( 'parts/top/main_visual', null, $cache_key );
	}

	// MV下通知バー
	// if ( 1 ) {
	//	$cache_key = $SETTING['cache_top'] ? 'mv_info' : '';
	// 	SWELL_Theme::get_parts( 'parts/top/mv_info', null, $cache_key );
	// }

	// 記事スライダー
	if ( SWELL_Theme::is_use( 'post_slider' ) ) {
		$cache_key = $SETTING['cache_top'] ? 'post_slider' : '';
		SWELL_Theme::get_parts( 'parts/top/post_slider', null, $cache_key );
	}

	// タイトル(コンテンツ上)
	if ( SWELL_Theme::is_show_ttltop() ) SWELL_Theme::get_parts( 'parts/top_title_area' );

	// ぱんくず
	if ( 'top' === $SETTING['pos_breadcrumb'] ) SWELL_Theme::get_parts( 'parts/breadcrumb' );

?>
<div id="content" class="l-content l-container" <?php SWELL_Theme::content_attrs(); ?>>
<?php
	// ピックアップバナー
	if ( SWELL_Theme::is_show_pickup_banner() ) {
		$cache_key = $SETTING['cache_top'] ? 'pickup_banner' : '';
		SWELL_Theme::get_parts( 'parts/top/pickup_banner', null, $cache_key );
	}

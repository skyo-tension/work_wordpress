<?php
if ( ! defined( 'ABSPATH' ) ) exit;

$SETTING      = SWELL_Theme::get_setting();
$header_class = SWELL_Theme::get_header_class(); // ヘッダーとfixバーへのクラクラス

// お知らせバー（上部表示）
if ( $SETTING['info_bar_pos'] === 'head_top' ) SWELL_Theme::get_parts( 'parts/header/info_bar' );
?>
<header id="header" class="l-header <?=esc_attr( $header_class )?>" data-spfix="<?=$SETTING['fix_header_sp'] ? '1' : '0'?>">
	<?php if ( SWELL_Theme::is_use( 'head_bar' ) ) SWELL_Theme::get_parts( 'parts/header/head_bar' ); // ヘッダーバー ?>
	<div class="l-header__inner l-container">
		<?php
			// ヘッダー内ウィジェット
			\SWELL_Theme::outuput_widgets( 'head_box', [
				'before' => '<div class="w-header pc_"><div class="w-header__inner">',
				'after'  => '</div></div>',
			] );

			// メニューボタン & カスタムボタン
			SWELL_Theme::get_parts( 'parts/header/sp_btns' );
		?>
	</div>
	<?php
	if ( SWELL_Theme::is_use( 'sp_head_nav' ) ) :
		SWELL_Theme::get_parts( 'parts/header/sp_head_nav' );
	endif;
	?>
</header>
<?php

// お知らせバー（下部表示）
if ( $SETTING['info_bar_pos'] === 'head_bottom' ) SWELL_Theme::get_parts( 'parts/header/info_bar' );

?>

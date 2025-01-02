<?php
if ( ! defined( 'ABSPATH' ) ) exit;

if ( SWELL_Theme::is_show_sidebar() ) {
	get_sidebar();
}
?>
</div>
<?php
	$SETTING = SWELL_Theme::get_setting();

	if ( SWELL_Theme::is_use( 'pjax' ) ) echo '</div>'; // End : Barba[data-barba="container"]

	// フッター前ウィジェット
	if ( is_active_sidebar( 'before_footer' ) ) :
		echo '<div id="before_footer_widget" class="w-beforeFooter">';
		if ( ! SWELL_Theme::is_use( 'ajax_footer' ) ) :
			SWELL_Theme::get_parts( 'parts/footer/before_footer' );
		endif;
		echo '</div>';
	endif;

	// ぱんくず
	if ( 'top' !== $SETTING['pos_breadcrumb'] ) :
		SWELL_Theme::get_parts( 'parts/breadcrumb' );
	endif;
?>

<?php
	// 固定フッターメニュー
	if ( has_nav_menu( 'fix_bottom_menu' ) ) :
		$cache_key = $SETTING['cache_bottom_menu'] ? 'fix_bottom_menu' : '';
		SWELL_Theme::get_parts( 'parts/footer/fix_menu', null, $cache_key );
	endif;

	// 固定ボタン
	SWELL_Theme::get_parts( 'parts/footer/fix_btns' );

	// モーダル
	SWELL_Theme::get_parts( 'parts/footer/modals' );
?>
</div><!--/ #all_wrapp-->
<div id="customize_footer">
	<div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/footer_logo.png" alt="">
		<ul class="menu01">
			<li><a href="<?php echo home_url(); ?>/campaign/">キャンペーン</a></li>
			<li><a href="<?php echo home_url(); ?>/price/">料金プラン</a></li>
			<li><a href="<?php echo home_url(); ?>/smartphone/">端末一覧</a></li>
			<li><a href="<?php echo home_url(); ?>/servicearea/">サービスエリア</a></li>
			<li><a href="<?php echo home_url(); ?>/option/">オプション</a></li>
			<!-- <li><a href="<?php echo home_url(); ?>/">ご利用までの流れ</a></li> -->
			<li><a href="<?php echo home_url(); ?>/faq/">よくある質問</a></li>
			<li><a href="<?php echo home_url(); ?>/tellme/">おしえてマグナスくん！</a></li>
			<li><a href="<?php echo home_url(); ?>/category/notice/">お知らせ</a></li>
		</ul>
		<ul class="menu02">
			<li><a href="<?php echo home_url(); ?>/sitepolicy/">サイトポリシー</a></li>
			<!-- <li><a href="#">約款・重要事項説明</a></li> -->
			<li><a href="<?php echo home_url(); ?>/company/">企業情報</a></li>
			<!-- <li><a href="#">プレスリリース</a></li> -->
			<!-- <li><a href="#">公開情報</a></li> -->
			<!-- <li><a href="#">商標について</a></li> -->
			<li><a href="<?php echo home_url(); ?>/privacy/">個人情報について</a></li>
			<!-- <li><a href="#">情報セキュリティポリシー</a></li> -->
			<li><a href="<?php echo home_url(); ?>/law/">特定商法取引に基づく表示</a></li>
		</ul>
	</div>
</div>

<?php
wp_footer();
echo $SETTING['foot_code']; // phpcs:ignore
?>
</div>
</div>
</body></html>

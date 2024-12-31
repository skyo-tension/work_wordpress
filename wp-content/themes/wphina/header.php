<!DOCTYPE html>
<html lang="ja">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="format-detection" content="telephone=no">

<?php if ( is_front_page() || is_home() ) : ?>
<title>【公式】dinomo / ディノモ｜トリプルキャリアプラン誕生</title>
<meta name="Description" content="dinomoのホームページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。" />
<meta name="Keywords" content="dinomo" />
<?php elseif (is_post_type_archive('tellme')): ?>
<title>おしえてマグナスくん！｜<?php bloginfo('name'); ?></title>
<meta name="Description" content="dinomoのおしえてマグナスくん！ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。" />
<meta name="Keywords" content="おしえてマグナスくん！,dinomo" />
<?php elseif (is_singular('tellme')): ?>
<title>おしえてマグナスくん！｜<?php bloginfo('name'); ?></title>
<meta name="Description" content="dinomoのおしえてマグナスくん！ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。" />
<meta name="Keywords" content="おしえてマグナスくん！,dinomo" />
<?php elseif (is_tax('tellme_cat')): ?>
<title>おしえてマグナスくん！｜<?php bloginfo('name'); ?></title>
<meta name="Description" content="dinomoのおしえてマグナスくん！ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。" />
<meta name="Keywords" content="おしえてマグナスくん！,dinomo" />
<?php elseif (is_post_type_archive('campaign')): ?>
<title>キャンペーン情報｜<?php bloginfo('name'); ?></title>
<meta name="Description" content="dinomoのキャンペーン情報ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。" />
<meta name="Keywords" content="キャンペーン情報,dinomo" />
<?php elseif (is_singular('campaign')): ?>
<title>キャンペーン情報｜<?php bloginfo('name'); ?></title>
<meta name="Description" content="dinomoのキャンペーン情報ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。" />
<meta name="Keywords" content="キャンペーン情報,dinomo" />
<?php elseif (is_post_type_archive('smartphone')): ?>
<title>端末一覧｜<?php bloginfo('name'); ?></title>
<meta name="Description" content="dinomoの端末一覧ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。" />
<meta name="Keywords" content="端末一覧,dinomo" />
<?php elseif (is_singular('smartphone')): ?>
<title>端末一覧｜<?php bloginfo('name'); ?></title>
<meta name="Description" content="dinomoの端末一覧ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。" />
<meta name="Keywords" content="端末一覧,dinomo" />
<?php elseif (is_tax('smartphone_cat')): ?>
<title><?php single_term_title(); ?>の端末一覧｜<?php bloginfo('name'); ?></title>
<meta name="Description" content="dinomoの<?php single_term_title(); ?>の端末一覧ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。" />
<meta name="Keywords" content="<?php single_term_title(); ?>の端末一覧,dinomo" />
<?php elseif ( is_archive() ) : ?>
<title>お知らせ｜<?php bloginfo('name'); ?></title>
<meta name="Description" content="dinomoのお知らせページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。" />
<meta name="Keywords" content="お知らせ,dinomo" />
<?php elseif ( is_single() ) : ?>
<title>お知らせ｜<?php bloginfo('name'); ?></title>
<meta name="Description" content="dinomoのお知らせページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。" />
<meta name="Keywords" content="お知らせ,dinomo" />
<?php else : ?>
<title><?php echo get_the_title(); ?>｜dinomo</title>
<meta name="Description" content="dinomoの<?php echo get_the_title(); ?>ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。" />
<meta name="Keywords" content="<?php echo get_the_title(); ?>,dinomo" />
<?php endif; ?>
<link rel="canonical" href="<?php echo("https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">

<?php if ( is_front_page() || is_home() ) : ?>
<meta property="og:title" content="【公式】dinomo / ディノモ｜トリプルキャリアプラン誕生">
<meta property="og:type" content="website">
<meta property="og:description" content="dinomoのホームページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。">
<?php elseif (is_post_type_archive('tellme')): ?>
<meta property="og:title" content="おしえてマグナスくん！｜<?php bloginfo('name'); ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="dinomoのおしえてマグナスくん！ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。">
<?php elseif (is_singular('tellme')): ?>
<meta property="og:title" content="おしえてマグナスくん！｜<?php bloginfo('name'); ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="dinomoのおしえてマグナスくん！ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。">
<?php elseif (is_tax('tellme_cat')): ?>
<meta property="og:title" content="おしえてマグナスくん！｜<?php bloginfo('name'); ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="dinomoのおしえてマグナスくん！ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。">
<?php elseif (is_post_type_archive('campaign')): ?>
<meta property="og:title" content="キャンペーン情報｜<?php bloginfo('name'); ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="dinomoのキャンペーン情報ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。">
<?php elseif (is_singular('campaign')): ?>
<meta property="og:title" content="キャンペーン情報｜<?php bloginfo('name'); ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="dinomoのキャンペーン情報ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。">
<?php elseif (is_post_type_archive('smartphone')): ?>
<meta property="og:title" content="端末一覧！｜<?php bloginfo('name'); ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="dinomoの端末一覧ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。">
<?php elseif (is_singular('smartphone')): ?>
<meta property="og:title" content="端末一覧！｜<?php bloginfo('name'); ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="dinomoの端末一覧ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。">
<?php elseif (is_tax('smartphone_cat')): ?>
<meta property="og:title" content="<?php single_term_title(); ?>の端末一覧！｜<?php bloginfo('name'); ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="dinomoの<?php single_term_title(); ?>の端末一覧ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。">
<?php elseif ( is_archive() ) : ?>
<meta property="og:title" content="お知らせ｜<?php bloginfo('name'); ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="dinomoのお知らせページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。">
<?php elseif ( is_single() ) : ?>
<meta property="og:title" content="お知らせ｜<?php bloginfo('name'); ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="dinomoのお知らせページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。">
<?php else : ?>
<meta property="og:title" content="<?php echo get_the_title(); ?>｜dinomo">
<meta property="og:type" content="article">
<meta property="og:description" content="dinomoの<?php echo get_the_title(); ?>ページです。dinomoは1つの契約で3つの回線が使える業界初のサービスです。">
<?php endif; ?>
<meta property="og:url" content="<?php echo("https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">
<meta property="og:image" content="<?php bloginfo('template_directory');?>/images/ogp.jpg">
<meta property="og:site_name" content="dinomo">

<script type="text/javascript">
if ((navigator.userAgent.indexOf('iPhone') > 0) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.write('<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">');
    }else{
        document.write('<meta name="viewport" content="width=1540">');
    }
</script>

<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico" />
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory');?>/images/apple-touch-icon.png" sizes="180x180">

<script src="https://code.jquery.com/jquery-3.7.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory');?>/js/basic.js"></script>

<!-- matchHeight -->
<script src="<?php bloginfo('template_directory');?>/js/matchHeight.js"></script>
<script>
$(function(){
	$('.matchHeight').matchHeight();
});
</script>
<!-- /matchHeight -->

<!-- object-fit -->
<script src="<?php bloginfo('template_directory');?>/js/fitie.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/ofi.min.js"></script>
<script>
  objectFitImages('img.object-fit-img');
</script>
<!-- /object-fit -->

<!-- display -->
<script type="text/javascript">
function isDisplayA() {
	document.getElementById("inputA").style.display = "block";
	document.getElementById("inputB").style.display = "none";
	document.getElementById("inputC").style.display = "none";
	document.getElementById("inputD").style.display = "none";
	document.getElementById("inputE").style.display = "none";
	document.getElementById("inputF").style.display = "none";
}
function isDisplayB() {
	document.getElementById("inputA").style.display = "none";
	document.getElementById("inputB").style.display = "block";
	document.getElementById("inputC").style.display = "none";
	document.getElementById("inputD").style.display = "none";
	document.getElementById("inputE").style.display = "none";
	document.getElementById("inputF").style.display = "none";
}
function isDisplayC() {
	document.getElementById("inputA").style.display = "none";
	document.getElementById("inputB").style.display = "none";
	document.getElementById("inputC").style.display = "block";
	document.getElementById("inputD").style.display = "none";
	document.getElementById("inputE").style.display = "none";
	document.getElementById("inputF").style.display = "none";
}
function isDisplayD() {
	document.getElementById("inputA").style.display = "none";
	document.getElementById("inputB").style.display = "none";
	document.getElementById("inputC").style.display = "none";
	document.getElementById("inputD").style.display = "block";
	document.getElementById("inputE").style.display = "none";
	document.getElementById("inputF").style.display = "none";
}
function isDisplayE() {
	document.getElementById("inputA").style.display = "none";
	document.getElementById("inputB").style.display = "none";
	document.getElementById("inputC").style.display = "none";
	document.getElementById("inputD").style.display = "none";
	document.getElementById("inputE").style.display = "block";
	document.getElementById("inputF").style.display = "none";
}
function isDisplayF() {
	document.getElementById("inputA").style.display = "none";
	document.getElementById("inputB").style.display = "none";
	document.getElementById("inputC").style.display = "none";
	document.getElementById("inputD").style.display = "none";
	document.getElementById("inputE").style.display = "none";
	document.getElementById("inputF").style.display = "block";
}
</script>
<!-- /display -->

<?php wp_head()?>
</head>

<body id="top" class="cf">

	<!-- header -->
	<header>
		<div class="header_logo"><a href="<?php echo home_url(); ?>/"><img src="<?php bloginfo('template_directory');?>/images/common/logo.png" alt="dinomo" class="hover_img"></a></div>
		<div class="d-menu"><a class="panel-btn"><span class="panel-btn-icon"></span></a></div>
		<div class="panel">
			<ul class="menu cf">
				<li><a href="<?php echo home_url(); ?>/campaign/">キャンペーン</a></li>
				<li><a href="<?php echo home_url(); ?>/price/">料金プラン</a></li>
				<li><a href="<?php echo home_url(); ?>/smartphone/">端末一覧</a></li>
				<li><a href="<?php echo home_url(); ?>/servicearea">サービスエリア</a></li>
				<li><a href="<?php echo home_url(); ?>/option/">オプション</a></li>
				<!-- <li><a href="<?php echo home_url(); ?>/">ご利用までの流れ</a></li> -->
				<li><a href="<?php echo home_url(); ?>/faq/">よくある質問</a></li>
				<!-- <li><a href="<?php echo home_url(); ?>/tellme/">おしえてマグナスくん！</a></li> -->
			</ul>
			<a href="https://mobileapply.dinomo.jp/h/n01/" class="header_btn"><span>申し込む</span></a>
		</div>		
	</header>
	<!-- /header -->
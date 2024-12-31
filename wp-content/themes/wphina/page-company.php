<?php get_header(); ?>

	<!-- main -->
	<main>
		
		<!-- main -->
		<div class="main">
			<div class="contents2">
				<h1 class="fadein"><span>COMPANY</span>企業情報</h1>
			</div>
		</div>
		<!-- /main -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>企業情報</li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
		
		<!-- tellme_details -->
		<nav class="tellme_details">
			<div class="contents fadein">
				<table class="tbl">
					<tr>
						<th>会社名</th>
						<td>GlobalGateway株式会社</td>
					</tr>
					<tr>
						<th>代表取締役</th>
						<td>比嘉 良放</td>
					</tr>
					<tr>
						<th>設立日</th>
						<td>2020年（令和2年）4月7日</td>
					</tr>
					<tr>
						<th>本社住所</th>
						<td>東京都千代田区丸の内2-5-1 丸の内二丁目ビル 4階</td>
					</tr>
					<tr>
						<th>TEL</th>
						<td>050-3390-7889<br>※この番号からのお申込みは受け付けておりませんので予めご了承ください。</td>
					</tr>
					<tr>
						<th>E-MAIL</th>
						<td>cs@dinomo.jp</td>
					</tr>
					<tr>
						<th>事業内容</th>
						<td>インターネット接続サービス<br>インターネット会員サービス<br>その他インターネット関連事業</td>
					</tr>
					<tr>
						<th>事業者区分</th>
						<td>A-02-17824</td>
					</tr>
					<tr>
						<th>古物商許可番号</th>
						<td>東京都公安委員会　第3010120099339号</td>
					</tr>
				</table>
			</div>
		</nav>
		<!-- /tellme_details -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc2">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>企業情報</li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
		
		<!-- index_campaign -->
		<div class="index_campaign fadein cf">
			<h2 class="ttl_h2"><img src="<?php bloginfo('template_directory');?>/images/common/campaig_h2.png" alt="dinomoのおすすめコンテンツ・キャンペーン"></h2>
			<div class="campaign-slide">
				<div class="swiper-wrapper">
					<?php $args = array(
						'numberposts' => 10, //表示（取得）する記事の数
						'post_type' => 'campaign' //投稿タイプの指定
					);
					$posts = get_posts( $args );
					if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
					<div class="swiper-slide"><a href="<?php the_permalink() ?>"><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full', ['class' => 'object-fit-img hover_img']); ?><?php else : ?><img src="<?php bloginfo('template_url'); ?>/images/index/news00.jpg" alt="デフォルト画像" class="object-fit-img hover_img"><?php endif ; ?></a></div>
					<?php endforeach; ?>
					<?php else : //記事が無い場合 ?>
					<?php endif; wp_reset_postdata(); //クエリのリセット ?>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<!-- /index_campaign -->

<?php get_footer(); ?>
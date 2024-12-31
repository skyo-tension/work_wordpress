<?php get_header(); ?>

	<!-- main -->
	<main>
		
		<!-- main -->
		<div class="main">
			<div class="contents2">
				<h1 class="fadein"><span>LAW</span>特定商法取引に基づく表示</h1>
			</div>
		</div>
		<!-- /main -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>特定商法取引に基づく表示</li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
		
		<!-- tellme_details -->
		<nav class="tellme_details">
			<div class="contents fadein">
				<table class="tbl">
					<tr>
						<th>サービス提供元</th>
						<td>GlobalGateway株式会社</td>
					</tr>
					<tr>
						<th>料金等</th>
						<td><a href="<?php echo home_url(); ?>/price/" class="link">詳細ページ</a>をご参照ください。</td>
					</tr>
					<tr>
						<th>契約期間</th>
						<td>契約期間の縛りはございません</td>
					</tr>
					<tr>
						<th>お支払い方法</th>
						<td>クレジットカード<br>VISA／Master／JCB／Diners／AmericanExpress<br>※実際のお引き落とし日はご利用カード会社様により異なります。</td>
					</tr>
					<tr>
						<th>お支払い時期</th>
						<td>サービス利用規約に記載しております。<br>下記「サービス利用規約」のサービス利用規約より詳細をご確認ください。</td>
					</tr>
					<tr>
						<th>送料</th>
						<td>ご契約時の送料は当店で負担いたします。<br>端末返却時の送料につきましてはお客様のご負担となります。</td>
					</tr>
					<tr>
						<th>商品代金以外に必要な料金</th>
						<td>dinomoの月額料金手数料等が必要となります。またご利用状況に応じて、通信料、通話料、SMS料、オプションサービス月額料金をお支払いいただきます。</td>
					</tr>
					<tr>
						<th>返品・キャンセル</th>
						<td>契約後の返金・返品はできません。初期不良につきましては無償で交換いたしますので、到着から1週間以内に当社カスタマーセンターまでご連絡ください。<br>ご返送にかかる費用はお客様ご負担となります。</td>
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
					<li>特定商法取引に基づく表示</li>
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
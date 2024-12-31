<?php get_header(); ?>

	<!-- main -->
	<main>
		
		<!-- main -->
		<div class="main">
			<div class="contents2">
				<h1 class="fadein"><span>OPTION</span>オプション</h1>
			</div>
		</div>
		<!-- /main -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>オプション</li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
		
		<!-- option_list -->
		<div class="option_list">
			<div class="contents fadein">
				<h2><?php the_field('h2'); ?></h2>
				<p class="option_txt">※表示金額は税込み価格です</p>
				<ul>
					<?php while(have_rows('option')): the_row(); ?>
					<li class="cf">
						<div class="inner matchHeight">
							<h3><?php the_sub_field('h3'); ?>
								<?php while(have_rows('label')): the_row(); ?><span><?php the_sub_field('p'); ?></span><?php endwhile; ?>
								<span class="col <?php the_sub_field('col1'); ?>">主回線</span>
								<span class="col <?php the_sub_field('col2'); ?>">副回線</span>
								<span class="col <?php the_sub_field('col3'); ?>">共通</span>
							</h3>
							<p><?php the_sub_field('txt'); ?></p>
						</div>
						<div class="price matchHeight">
							<p><span><?php the_sub_field('price1'); ?></span><?php the_sub_field('price2'); ?></p>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
				<div class="option_att">
					<h2>注意事項</h2>
					<h3>国際ローミングについて</h3>
					<p>※海外への渡航の前に、日本で楽天モバイルネットワークへの接続をしてください。</p>
					<p>※海外ローミングで使用するデータは海外ローミングエリアの高速データ容量から消費されます。</p>
					<p>※現地事業者の事情により、接続ができない場合があります。</p>
					<p>※データ消費が「データ利用量」としてカウントされます。</p>
					<p>※海外の対象国と地域にて、 海外ローミングエリアの高速データ容量を使い切った場合、海外ローミングエリアでの通信速度が最大128kbpsに制限されます。</p>
					<p>※通信速度はベストエフォートであり、実効速度は通信環境・状況により変動します。</p>
					<p>※海外の対象国と地域以外は、Wi-Fi接続時のみ利用可能です。</p>
					<p>※データ通信（海外ローミング）のサービスエリア・提供条件は予告なく変更になる場合があります。対象エリアをご確認ください。</p>
					<h3>国際通話について</h3>
					<p>※エリアに応じて従量課金の金額が異なります。</p>
					<p>※海外にいる時は着信料が発生いたしますのでご注意ください。</p>
					<p>※国際通話のサービスエリア・提供条件は予告なく変更になる場合があります。</p>
					<p>※通話先の相手国・地域によっては、現地事業者の設備などの都合により接続できない場合があります。</p>
					<h3>国際SMSについて</h3>
					<p>※エリアに応じて従量課金の金額が異なります。</p>
					<p>※国際SMSのサービスエリア・提供条件は予告なく変更になる場合があります。</p>
					<p>※ご利用の機種や、海外ローミング先のネットワーク、または通信先の相手国のネットワークの通信事情により、一覧にある事業者でサービスをご利用いただけない場合があっても当社は一切の責任を負いません。</p>
				</div>
			</div>
		</div>
		<!-- /option_list -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc2">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>オプション</li>
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
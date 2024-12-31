<?php get_header(); ?>

	<!-- main -->
	<main>
		
		<!-- main-slide -->
		<div class="main-slide fadein cf">
			<ul class="swiper-wrapper">
				<?php while(have_rows('slide')): the_row(); ?>
				<li class="swiper-slide">
					<img src="<?php the_sub_field('img_pc'); ?>" alt="" class="pc">
					<img src="<?php the_sub_field('img_sp'); ?>" alt="" class="sp">
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<!-- /main-slide -->
		
		<!-- index_service -->
		<div class="index_service cf">
			<div class="contents fadein">
				<h2><img src="<?php bloginfo('template_directory');?>/images/index/service_h2.png" alt="dinomoは1つの契約で3つの回線が使える業界初のサービスです。"></h2>
				<a href="https://mobileapply.dinomo.jp/h/n01/"><img src="<?php bloginfo('template_directory');?>/images/index/service_btn.png" alt="申込み完了まで最短5分！お申し込みはこちら" class="hover_img"></a>
			</div>
		</div>
		<!-- /index_service -->
		
		<!-- index_btn -->
		<div class="index_btn cf">
			<div class="contents fadein">
				<ul class="cf">
					<li><a href="<?php echo home_url(); ?>/price/"><img src="<?php bloginfo('template_directory');?>/images/index/btn01.png" alt="料金プラン" class="hover_img"></a></li>
					<li><a href="<?php echo home_url(); ?>/campaign/"><img src="<?php bloginfo('template_directory');?>/images/index/btn02.png" alt="キャンペーン" class="hover_img"></a></li>
					<!-- <li><a href="<?php echo home_url(); ?>/#"><img src="<?php bloginfo('template_directory');?>/images/index/btn03.png" alt="利用までの流れ" class="hover_img"></a></li> -->
					<li><a href="<?php echo home_url(); ?>/faq/"><img src="<?php bloginfo('template_directory');?>/images/index/btn04.png" alt="よくある質問" class="hover_img"></a></li>
				</ul>
			</div>
		</div>
		<!-- /index_btn -->
		
		<!-- index_campaign -->
		<div class="index_campaign fadein cf">
			<h2><img src="<?php bloginfo('template_directory');?>/images/index/campaign_h2.png" alt="dinomoのおすすめコンテンツ・キャンペーン"></h2>
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
		
		<!-- index_feedback -->
		<div class="index_feedback cf">
			<h2 class="fadein">安心の顧客満足度</h2>
			<div class="inner cf">
				<div class="contents fadein cf">
					<ul>
						<li>
							<img src="<?php bloginfo('template_directory');?>/images/index/feedback01.png" alt="ファイナンシャルプランナーの89％が推奨すると回答">
							<p>調査方法：インターネット調査<br>調査期間：2024年2月26日～2月27日<br>アンケートモニター提供元：ゼネラルリサーチ<br>調査対象：ファイナンシャルプランナー1006名<br>対象選定方法：アンケート内にて医師であると回答した方を抽出</p>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory');?>/images/index/feedback02.png" alt="経営者の80％が紹介したいと回答">
							<p>調査方法：インターネット調査<br>調査期間：2024年2月27日～2月28日<br>アンケートモニター提供元：ゼネラルリサーチ<br>調査対象：経営者1019名<br>対象選定方法：アンケートを基に所定の条件に合致する対象者を抽出</p>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory');?>/images/index/feedback03.png" alt="一人暮らしの方の81％がおすすめすると回答">
							<p>調査方法：インターネット調査<br>調査期間：2024年2月27日～2月28日<br>アンケートモニター提供元：ゼネラルリサーチ<br>調査対象：一人暮らしの方1003名<br>対象選定方法：アンケートを基に所定の条件に合致する対象者を抽出</p>
						</li>
					</ul>
				</div>
			</div>
			<h3><img src="<?php bloginfo('template_directory');?>/images/index/features_h2.png" alt="dinomoの特徴"></h3>
		</div>
		<!-- /index_feedback -->
		
		<!-- index_features -->
		<div class="index_features cf">
			<div class="box">
				<div class="contents fadein">
					<h2>もう<span>「遅い!繋がらない!」</span><br>とは言わせない!</h2>
					<img src="<?php bloginfo('template_directory');?>/images/index/features_img.png" alt="業界初！どこでも繋がるトリプルキャリア" class="features_img">
					<ul>
						<li><img src="<?php bloginfo('template_directory');?>/images/index/features01.png" alt="これまでの常識"></li>
						<li><img src="<?php bloginfo('template_directory');?>/images/index/features02.png" alt="dinomo"></li>
					</ul>
					<ul class="line4">
						<li><img src="<?php bloginfo('template_directory');?>/images/index/features03.png" alt="eSIM対応"></li>
						<li><img src="<?php bloginfo('template_directory');?>/images/index/features04.png" alt="海外でも無料"></li>
						<li><img src="<?php bloginfo('template_directory');?>/images/index/features05.png" alt="5G対応"></li>
						<li><img src="<?php bloginfo('template_directory');?>/images/index/features06.png" alt="人口カバー率99.9%"></li>
					</ul>
					<img src="<?php bloginfo('template_directory');?>/images/index/features07.png" alt="カスタマイズ方法は全48通り！" class="features_img">
					<ul>
						<li><img src="<?php bloginfo('template_directory');?>/images/index/features08.png" alt="ライトプラン"></li>
						<li><img src="<?php bloginfo('template_directory');?>/images/index/features09.png" alt="トリプルキャリアプラン"></li>
					</ul>
					<a href="<?php echo home_url(); ?>/price/" class="features_btn"><img src="<?php bloginfo('template_directory');?>/images/index/btn01.png" alt="料金プラン" class="hover_img"></a>
				</div>
			</div>
		</div>
		<!-- /index_features -->
		
		<!-- index_smartphone -->
		<div class="index_smartphone cf">
			<div class="contents fadein">
				<h2>最新のスマホも選べる!</h2>
				<img src="<?php bloginfo('template_directory');?>/images/index/smartphone.png" alt="">
				<a href="<?php echo home_url(); ?>/smartphone/" class="smartphone_btn"><img src="<?php bloginfo('template_directory');?>/images/index/btn05.png" alt="取り扱い端末一覧" class="hover_img"></a>
			</div>
		</div>
		<!-- /index_smartphone -->
		
		<!-- index_info -->
		<div class="index_info cf">
			<div class="contents fadein  cf">
				<div class="box">
					<h3>メディア</h3>
					<?php query_posts('cat=7&posts_per_page=4&post_type=post&paged='.$paged); ?>
					<?php if (have_posts()) : ?>
					<ul>
						<?php while (have_posts()) : the_post(); ?>
						<li>
							<a href="<?php the_permalink() ?>">
								<p class="date"><?php the_time("Y.m.d") ?></p>
								<p><?php the_title(); ?></p>
							</a>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php else : ?>
					<div class="post">
						<p>記事が見つかりません</p>
					</div>
					<?php endif; ?>
					<a href="<?php echo home_url(); ?>/category/media/" class="more">メディアをもっとみる</a>
				</div>
				<div class="box">
					<h3>お知らせ</h3>
					<?php query_posts('cat=1&posts_per_page=4&post_type=post&paged='.$paged); ?>
					<?php if (have_posts()) : ?>
					<ul>
						<?php while (have_posts()) : the_post(); ?>
						<li>
							<a href="<?php the_permalink() ?>">
								<p class="date"><?php the_time("Y.m.d") ?></p>
								<p><?php the_title(); ?></p>
							</a>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php else : ?>
					<div class="post">
						<p>記事が見つかりません</p>
					</div>
					<?php endif; ?>
					<a href="<?php echo home_url(); ?>/category/notice/" class="more">お知らせをもっとみる</a>
				</div>
			</div>
		</div>
		<!-- /index_info -->
		
		<!-- index_mag -->
		<!-- <div class="index_mag cf">
			<h2 class="fadein"><img src="<?php bloginfo('template_directory');?>/images/index/mag_h2.png" alt="おしえてマグナスくん！"></h2>
			<div class="mag-slide fadein">
				<div class="swiper-wrapper">
					<?php $args = array(
						'numberposts' => 10, //表示（取得）する記事の数
						'post_type' => 'tellme' //投稿タイプの指定
					);
					$posts = get_posts( $args );
					if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
					<div class="swiper-slide matchHeight">
						<a href="<?php the_permalink() ?>">
							<figure><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full', ['class' => 'object-fit-img hover_img']); ?><?php else : ?><img src="<?php bloginfo('template_url'); ?>/images/index/news00.jpg" alt="デフォルト画像" class="object-fit-img hover_img"><?php endif ; ?></figure>
							<p><?php the_title(); ?></p>
						</a>
					</div>
					<?php endforeach; ?>
					<?php else : //記事が無い場合 ?>
					<?php endif; wp_reset_postdata(); //クエリのリセット ?>
				</div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div> -->
		<!-- /index_mag -->
	
<?php get_footer(); ?>
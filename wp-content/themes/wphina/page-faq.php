<?php get_header(); ?>

	<!-- main -->
	<main>
		
		<!-- main -->
		<div class="main">
			<div class="contents2">
				<h1 class="fadein"><span>FAQ</span>よくある質問</h1>
			</div>
		</div>
		<!-- /main -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>よくある質問</li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
		
		<!-- faq -->
		<div class="faq fixed" id="js-fixed">
			<div class="contents">
				<div class="searchandfilter menu-box">
					<p class="menu-btn">カテゴリ</p>
					<ul class="cate">
						<?php while(have_rows('faq')): the_row(); ?>
						<li><a href="#<?php the_sub_field('anc'); ?>"><?php the_sub_field('h2'); ?></a></li>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- /faq -->
		
		<!-- faq -->
		<div class="faq">
			<div class="contents fadein">
				<div class="searchandfilter">
					<ul class="cate">
						<?php while(have_rows('faq')): the_row(); ?>
						<li><a href="#<?php the_sub_field('anc'); ?>"><?php the_sub_field('h2'); ?></a></li>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- /faq -->
		
		<!-- faq -->
		<?php while(have_rows('faq')): the_row(); ?>
		<div class="faq">
			<a id="<?php the_sub_field('anc'); ?>" class="faq_anc"></a>
			<div class="contents fadein">
				<h2 class="ttl_h2"><?php the_sub_field('h2'); ?></h2>
				<ul>
					<?php while(have_rows('li')): the_row(); ?>
					<li>
						<div class="q"><?php the_sub_field('q'); ?></div>
						<div class="a"><?php the_sub_field('a'); ?></div>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
		<?php endwhile; ?>
		<!-- /faq -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc2">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>よくある質問</li>
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
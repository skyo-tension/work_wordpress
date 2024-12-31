<?php get_header(); ?>

	<!-- main -->
	<main>
		
		<!-- main -->
		<div class="main">
			<div class="contents2">
				<h1 class="fadein"><span>SMARTPHONE</span>端末一覧</h1>
			</div>
		</div>
		<!-- /main -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li><a href="<?php echo home_url(); ?>/smartphone/">端末一覧</a></li>
					<li><?php single_term_title(); ?></li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
		
		<!-- smartphone_list -->
		<div class="smartphone_list">
			<div class="contents2 fadein">
				<h2 class="ttl_h2"><?php single_term_title(); ?>の端末一覧</h2>
				<div class="searchandfilter">
					<ul class="cate <?php echo $term; ?>">
						<li><a href="<?php echo home_url(); ?>/smartphone/">すべて</a></li>
						<?php
							$terms = get_terms('smartphone_cat');
								foreach ( $terms as $term ) {
								echo '<li>';
								echo '<a href="'.get_term_link($term).'">'.$term->name.'すべて</a>';
								echo '</li>';
							}
						?>
					</ul>
				</div>
				<?php if (have_posts()) : ?>
				<ul class="list cf">
					<?php while (have_posts()) : the_post(); ?>
					<li class="matchHeight">
						<form action="https://mobileapply.dinomo.jp/stg/nctr/" method="post">
							<input type="hidden" name="terminal_type" value="<?php if ($terms = get_the_terms($post->ID, 'smartphone_cat')) { foreach ( $terms as $term ) { echo '' .$term->name. '';}}?>">
							<input type="hidden" name="terminal" value="<?php the_title(); ?>">
							<p class="label <?php the_field('label'); ?>">5G対応</p>
							<?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full', ['class' => 'object-fit-img']); ?><?php else : ?><img src="<?php bloginfo('template_url'); ?>/images/index/news00.jpg" alt="デフォルト画像" class="object-fit-img"><?php endif ; ?>
							<h3><?php the_title(); ?></h3>
							<p class="price"><?php the_field('price'); ?><span>円～</span></p>
							<a href="<?php the_permalink() ?>">製品情報</a>
							<input type="submit" value="購入する">
						</form>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php else : ?>
				<?php endif; ?>
			</div>
		</div>
		<!-- /smartphone_list -->
		
		<!-- smartphone_ranking -->
		<div class="smartphone_ranking">
			<div class="contents2 fadein">
				<h2 class="ttl_h2">人気ランキング</h2>
				<ul class="cf">
					<?php
						$loopcounter = 0;
						$args = array(
							'post_type' => 'smartphone',
							'meta_key'=> 'post_views_count',
							'orderby' => 'meta_value_num',
							'order' => 'DESC',
							'posts_per_page' => 5
						);
						$the_query = new WP_Query($args);
						if($the_query->have_posts()):
						while($the_query->have_posts()): $the_query->the_post();

						$loopcounter++;
					?>
					<li class="matchHeight">
						<a href="<?php the_permalink() ?>">
							<p class="label"></p>
							<?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full', ['class' => 'object-fit-img hover_img']); ?><?php else : ?><img src="<?php bloginfo('template_url'); ?>/images/index/phone00.jpg" alt="デフォルト画像" class="object-fit-img hover_img"><?php endif ; ?>
							<h3><?php the_title(); ?></h3>
							<p class="price"><?php the_field('price'); ?><span>円～</span></p>
						</a>
					</li>
					<?php endwhile; endif; wp_reset_postdata();?>
				</ul>
			</div>
		</div>
		<!-- /smartphone_ranking -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc2">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li><a href="<?php echo home_url(); ?>/smartphone/">端末一覧</a></li>
					<li><?php single_term_title(); ?></li>
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
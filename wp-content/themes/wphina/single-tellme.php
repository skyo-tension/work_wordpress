<?php get_header(); ?>

<?php if( !is_bot() ) { set_post_views( get_the_ID() ); } ?>

	<!-- main -->
	<main>
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1 breadcrumb_top">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li><a href="<?php echo home_url(); ?>/tellme/">おしえてマグナスくん！</a></li>
					<li><?php echo get_the_title(); ?></li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
		
		<!-- tellme_details -->
		<nav class="tellme_details">
			<div class="contents fadein">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<p class="date"><?php the_time("Y.m.d") ?><span><?php if ($terms = get_the_terms($post->ID, 'tellme_cat')) { foreach ( $terms as $term ) { echo '' .$term->name. '';}}?></span></p>
				<div class="txt"><?php the_content(); ?></div>
				<?php endwhile; ?>
				<?php while(have_rows('writer')): the_row(); ?>
				<div class="writer cf">
					<h2>この記事を書いた人</h2>
					<div class="box cf ">
						<div class="img">
							<figure><img src="<?php the_sub_field('img'); ?>" alt=""></figure>
							<ul class="sns cf">
								<li><a href="<?php the_sub_field('fb'); ?>"><img src="<?php bloginfo('template_directory');?>/images/tellme/sns01.png" alt=""></a></li>
								<li><a href="<?php the_sub_field('x'); ?>"><img src="<?php bloginfo('template_directory');?>/images/tellme/sns02.png" alt=""></a></li>
								<li><a href="<?php the_sub_field('ig'); ?>"><img src="<?php bloginfo('template_directory');?>/images/tellme/sns03.png" alt=""></a></li>
								<li><a href="<?php the_sub_field('line'); ?>"><img src="<?php bloginfo('template_directory');?>/images/tellme/sns04.png" alt=""></a></li>
								<li><a href="<?php the_sub_field('yt'); ?>"><img src="<?php bloginfo('template_directory');?>/images/tellme/sns05.png" alt=""></a></li>
							</ul>
						</div>
						<div class="inner">
							<p class="name"><?php the_sub_field('name'); ?><span><?php the_sub_field('name2'); ?></span></p>
							<p><?php the_sub_field('txt'); ?></p>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<a href="<?php echo home_url(); ?>/tellme/" class="back_btn">一覧に戻る</a>
				<?php else: ?>
				<?php endif; ?>
			</div>
		</nav>
		<!-- /tellme_details -->
		
		<!-- tellme_cate -->
		<nav class="tellme_cate">
			<div class="contents2 fadein">
				<h2 class="ttl_h2">カテゴリ一覧</h2>
				<ul class="cf">
					<?php
						$terms = get_terms('tellme_cat');
							foreach ( $terms as $term ) {
							echo '<li>';
							echo '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
							echo '</li>';
						}
					?>
				</ul>
			</div>
		</nav>
		<!-- /tellme_cate -->
	
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
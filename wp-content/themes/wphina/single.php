<?php get_header(); ?>

	<!-- main -->
	<main>
		
		<?php $cat = get_the_category(); $cat = $cat[0];?>
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1 breadcrumb_top">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->cat_name; ?></a></li>
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
				<p class="date"><?php the_time("Y.m.d") ?><span><?php echo $cat->cat_name; ?></span></p>
				<div class="txt"><?php the_content(); ?></div>
				<a href="<?php echo get_category_link($cat->term_id); ?>" class="back_btn">一覧に戻る</a>
				<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
			</div>
		</nav>
		<!-- /tellme_details -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc2">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->cat_name; ?></a></li>
					<li><?php echo get_the_title(); ?></li>
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
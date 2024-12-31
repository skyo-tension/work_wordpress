<?php get_header(); ?>

	<!-- main -->
	<main>
		
		<!-- main -->
		<div class="main">
			<div class="contents2 mag_main">
				<h1 class="fadein"><img src="<?php bloginfo('template_directory');?>/images/index/mag_h2.png" alt="おしえてマグナスくん！"></h1>
			</div>
		</div>
		<!-- /main -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>おしえてマグナスくん！</li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
		
		<!-- index_mag -->
		<div class="index_mag cf">
			<h2 class="ttl_h2">人気の記事</h2>
			<div class="mag-slide fadein">
				<div class="swiper-wrapper">
					<?php
						$loopcounter = 0;
						$args = array(
							'post_type' => 'tellme',
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
					<div class="swiper-slide matchHeight">
						<a href="<?php the_permalink() ?>">
							<figure><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full', ['class' => 'object-fit-img hover_img']); ?><?php else : ?><img src="<?php bloginfo('template_url'); ?>/images/index/news00.jpg" alt="デフォルト画像" class="object-fit-img hover_img"><?php endif ; ?></figure>
							<p><?php the_title(); ?></p>
						</a>
					</div>
					<?php endwhile; endif; wp_reset_postdata();?>
				</div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
		<!-- /index_mag -->
		
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
		
		<!-- tellme_list -->
		<nav class="tellme_list">
			<div class="contents2 fadein">
				<h2 class="ttl_h2">新着記事</h2>
				<?php if (have_posts()) : ?>
				<ul class="works fadein cf">
					<?php while (have_posts()) : the_post(); ?>
					<li class="matchHeight cf">
						<a href="<?php the_permalink() ?>" class="cf">
							<figure><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full', ['class' => 'object-fit-img']); ?><?php else : ?><img src="<?php bloginfo('template_url'); ?>/images/index/news00.jpg" alt="デフォルト画像" class="object-fit-img"><?php endif ; ?></figure>
							<div class="inner">
								<p class="ttl"><?php the_title(); ?></p>
								<div class="txt"><?php $content = get_the_content(); $content = wp_strip_all_tags( $content ); echo $content;?></div>
								<p class="date"><?php the_time("Y.m.d") ?><span><?php if ($terms = get_the_terms($post->ID, 'tellme_cat')) { foreach ( $terms as $term ) { echo '' .$term->name. '';}}?></span></p>
							</div>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php else : ?>
				<?php endif; ?>
				<div class="pagination">
					<?php global $wp_rewrite; $paginate_base = get_pagenum_link(1); if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
						$paginate_format = '';
						$paginate_base = add_query_arg('paged','%#%');
					}
					else{
						$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
						user_trailingslashit('page/%#%/','paged');;
						$paginate_base .= '%_%';
					}
					$queried_object = get_queried_object();
					$categoryname = $queried_object->labels->name ;
					if($wp_query->max_num_pages > 1){
						echo paginate_links(array(
							'base' => $paginate_base,
							'format' => $paginate_format,
							'total' => $wp_query->max_num_pages,
							'mid_size' => 1,
							'current' => ($paged ? $paged : 1),
							'prev_text' => '<span>&lt;</span>',
							'next_text' => '<span>&gt;</span>',
						));
					}else{?>
					<?php } ?>
				</div>
			</div>
		</nav>
		<!-- /tellme_list -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc2">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>おしえてマグナスくん！</li>
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
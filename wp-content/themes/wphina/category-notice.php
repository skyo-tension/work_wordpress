<?php get_header(); ?>

	<!-- main -->
	<main>
		
		<!-- main -->
		<div class="main">
			<div class="contents2">
				<h1 class="fadein"><span>NEWS</span>お知らせ</h1>
			</div>
		</div>
		<!-- /main -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>お知らせ</li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
	
		<!-- news_contents -->
		<div class="news_contents">
			<div class="contents fadein cf">
				<?php if (have_posts()) : ?>
				<ul class="cf">
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
		</div>
		<!-- /news_contents -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc2">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>お知らせ</li>
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
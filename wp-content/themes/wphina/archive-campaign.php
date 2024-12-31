<?php get_header(); ?>

	<!-- main -->
	<main>
		
		<!-- main -->
		<div class="main">
			<div class="contents2">
				<h1 class="fadein"><span>CAMPAIGN</span>キャンペーン情報</h1>
			</div>
		</div>
		<!-- /main -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>キャンペーン情報</li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
		
		<!-- campaign_list -->
		<div class="campaign_list">
			<div class="contents fadein">
				<h2>期間限定のおトクな情報が満載。</h2>
				<?php if (have_posts()) : ?>
				<ul class="list cf">
					<?php while (have_posts()) : the_post(); ?>
					<li class="matchHeight <?php the_field('label'); ?> cf">
						<figure><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full', ['class' => 'object-fit-img']); ?><?php else : ?><img src="<?php bloginfo('template_url'); ?>/images/index/news00.jpg" alt="デフォルト画像" class="object-fit-img"><?php endif ; ?></figure>
						<div class="label">
							<span class="<?php the_field('label1'); ?>">新規</span>
							<span class="<?php the_field('label2'); ?>">ＭＮＰ</span>
						</div>
						<p>開始日：<?php the_field('start'); ?><br>終了日：<?php the_field('end'); ?></p>
						<p class="txt"><?php $content = get_the_content(); $content = wp_strip_all_tags( $content ); echo $content;?></p>
						<a href="<?php the_permalink() ?>" class="btn">詳しくはこちら</a>
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
		</div>
		<!-- /campaign_list -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc2">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>キャンペーン情報</li>
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
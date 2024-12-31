<?php get_header(); ?>

	<!-- main -->
	<div class="main cf">
		<div class="contents fadein cf">
			<h1>お知らせ<span>NEWS</span></h1>
		</div>
	</div>
	<!-- /main -->
	
	<!-- blc -->
	<div class="blc">
		<div class="contents cf">
			<div class="news_contents">
				<?php if (have_posts()) : ?>
				<ul class="cf">
					<?php while (have_posts()) : the_post(); ?>
					<li class="cf">
						<a href="<?php the_permalink() ?>">
							<p class="date"><?php the_time("Y.m.d") ?></p>
							<p class="txt"><?php the_title(); ?></p>
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
			<div class="news_menu">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
	<!-- /blc -->
	
<?php get_footer(); ?>
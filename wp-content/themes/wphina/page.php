<?php get_header(); ?>

<!-- contacts -->
	<div class="contents mt20 cf">
		
		<?php get_sidebar(); ?>	

		<!-- main_contents -->
		<div class="main_contents">	
	
			<section>
				<h2><?php the_title(); ?></h2>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; else: ?>		
				<?php endif; ?>
			</section>

		</div>
		<!-- /main_contents -->
		
	</div>
	<!-- /contacts -->

<?php get_footer(); ?>
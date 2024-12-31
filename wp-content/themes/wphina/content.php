<div class="blogBox">
	<h3>
		<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
		<span><?php the_time("Y/m/d"); ?></span>
	</h3>
	<div class="blogTxt">
		<?php the_content(); ?>
	</div>
</div>
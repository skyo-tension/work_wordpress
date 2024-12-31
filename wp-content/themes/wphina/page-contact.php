<?php get_header(); ?>

  <!-- mv -->
	<div class="mv">
		<a href="<?php echo home_url(); ?>/"><img src="<?php bloginfo('template_directory');?>/images/common/logo.png" alt="" class="logo hover_img"></a>
		<div class="contents">
			<h1 class="fadein">CONTACT<span><?php echo get_the_title(); ?></span></h1>
		</div>
	</div>
	<!-- /mv -->

  <!-- blc -->
	<div class="blc">
    <div class="contents fadein">
			<p><?php the_field('lead'); ?></p>
    </div>
  </div>
	<!-- /blc -->
	
	<!-- blc -->
	<div class="blc">
    <div class="contents fadein">
      <h2 class="ttl_h2">お問い合わせフォーム</h2>
			<?php the_content(); ?>
		</div>
	</div>
	<!-- /blc -->

	<!-- blc -->
	<div class="blc">
		<div class="contents fadein">
			<h2 class="ttl_h2">プライバシーポリシー</h2>
			<p><?php the_field('p1'); ?></p>
			<?php while(have_rows('blc')): the_row(); ?>
			<div class="privacy">
				<h3><?php the_sub_field('h3'); ?></h3>
				<p><?php the_sub_field('p'); ?></p>
				<ul class="list">
					<?php while(have_rows('ul')): the_row(); ?>
					<li><?php the_sub_field('li'); ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<!-- /blc -->

<?php get_footer(); ?>
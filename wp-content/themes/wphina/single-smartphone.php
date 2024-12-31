<?php get_header(); ?>

<?php if( !is_bot() ) { set_post_views( get_the_ID() ); } ?>

	<!-- main -->
	<main>
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1 breadcrumb_top">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li><a href="<?php echo home_url(); ?>/smartphone/">端末一覧</a></li>
					<li><?php echo get_the_title(); ?></li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
		
		<!-- smartphone_info -->
		<div class="smartphone_info">
			<div class="contents2 fadein cf">				
					
				<!-- smartphone_slide -->
				<div class="smartphone_slide">
					<?php while(have_rows('color1')): the_row(); ?>
					<div class="rollover cf" id="inputA">
						<div class="img"><img src="<?php the_sub_field('main'); ?>" class="object-fit-img" alt="" name="mainImgA"></div>
						<ul class="thumb cf">
							<?php while(have_rows('thumb')): the_row(); ?>
							<li><img src="<?php the_sub_field('img'); ?>" alt="" class="object-fit-img" onMouseOver="document.mainImgA.src='<?php the_sub_field('img'); ?>'"></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<?php endwhile; ?>
					<?php while(have_rows('color2')): the_row(); ?>
					<div class="rollover cf" id="inputB" style="display: none;">
						<div class="img"><img src="<?php the_sub_field('main'); ?>" class="object-fit-img" alt="" name="mainImgB"></div>
						<ul class="thumb cf">
							<?php while(have_rows('thumb')): the_row(); ?>
							<li><img src="<?php the_sub_field('img'); ?>" alt="" class="object-fit-img" onMouseOver="document.mainImgB.src='<?php the_sub_field('img'); ?>'"></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<?php endwhile; ?>
					<?php while(have_rows('color3')): the_row(); ?>
					<div class="rollover cf" id="inputC" style="display: none;">
						<div class="img"><img src="<?php the_sub_field('main'); ?>" class="object-fit-img" alt="" name="mainImgC"></div>
						<ul class="thumb cf">
							<?php while(have_rows('thumb')): the_row(); ?>
							<li><img src="<?php the_sub_field('img'); ?>" alt="" class="object-fit-img" onMouseOver="document.mainImgC.src='<?php the_sub_field('img'); ?>'"></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<?php endwhile; ?>
					<?php while(have_rows('color4')): the_row(); ?>
					<div class="rollover cf" id="inputD" style="display: none;">
						<div class="img"><img src="<?php the_sub_field('main'); ?>" class="object-fit-img" alt="" name="mainImgD"></div>
						<ul class="thumb cf">
							<?php while(have_rows('thumb')): the_row(); ?>
							<li><img src="<?php the_sub_field('img'); ?>" alt="" class="object-fit-img" onMouseOver="document.mainImgD.src='<?php the_sub_field('img'); ?>'"></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<?php endwhile; ?>
					<?php while(have_rows('color5')): the_row(); ?>
					<div class="rollover cf" id="inputE" style="display: none;">
						<div class="img"><img src="<?php the_sub_field('main'); ?>" class="object-fit-img" alt="" name="mainImgE"></div>
						<ul class="thumb cf">
							<?php while(have_rows('thumb')): the_row(); ?>
							<li><img src="<?php the_sub_field('img'); ?>" alt="" class="object-fit-img" onMouseOver="document.mainImgE.src='<?php the_sub_field('img'); ?>'"></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<?php endwhile; ?>
					<?php while(have_rows('color6')): the_row(); ?>
					<div class="rollover cf" id="inputF" style="display: none;">
						<div class="img"><img src="<?php the_sub_field('main'); ?>" class="object-fit-img" alt="" name="mainImgF"></div>
						<ul class="thumb cf">
							<?php while(have_rows('thumb')): the_row(); ?>
							<li><img src="<?php the_sub_field('img'); ?>" alt="" class="object-fit-img" onMouseOver="document.mainImgF.src='<?php the_sub_field('img'); ?>'"></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<?php endwhile; ?>
				</div>
				<!-- /smartphone_slide -->
				
				<!-- smartphone_desc -->
				<div class="smartphone_desc">
					<h1><?php echo get_the_title(); ?></h1>
					<div class="color_box">
						<?php while(have_rows('color1')): the_row(); ?>
						<label><input type="radio" name="カラー" checked="checked" onclick="isDisplayA()"><span class="parts1"></span><span class="parts2" style="background-color: <?php the_sub_field('code'); ?>"></span></label>
						<?php endwhile; ?>
						<?php while(have_rows('color2')): the_row(); ?>
						<label><input type="radio" name="カラー" onclick="isDisplayB()"><span class="parts1"></span><span class="parts2" style="background-color: <?php the_sub_field('code'); ?>"></span></label>
						<?php endwhile; ?>
						<?php while(have_rows('color3')): the_row(); ?>
						<label><input type="radio" name="カラー" onclick="isDisplayC()"><span class="parts1"></span><span class="parts2" style="background-color: <?php the_sub_field('code'); ?>"></span></label>
						<?php endwhile; ?>
						<?php while(have_rows('color4')): the_row(); ?>
						<label><input type="radio" name="カラー" onclick="isDisplayD()"><span class="parts1"></span><span class="parts2" style="background-color: <?php the_sub_field('code'); ?>"></span></label>
						<?php endwhile; ?>
						<?php while(have_rows('color5')): the_row(); ?>
						<label><input type="radio" name="カラー" onclick="isDisplayE()"><span class="parts1"></span><span class="parts2" style="background-color: <?php the_sub_field('code'); ?>"></span></label>
						<?php endwhile; ?>
						<?php while(have_rows('color6')): the_row(); ?>
						<label><input type="radio" name="カラー" onclick="isDisplayF()"><span class="parts1"></span><span class="parts2" style="background-color: <?php the_sub_field('code'); ?>"></span></label>
						<?php endwhile; ?>
					</div>
					<div class="function">
						<h2>主な機能</h2>
						<ul class="cf">
							<?php while(have_rows('function')): the_row(); ?>
							<li class="matchHeight">
								<img src="<?php the_sub_field('img'); ?>" alt="">
								<p><?php the_sub_field('p'); ?></p>
							</li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
				<!-- /smartphone_desc -->
					
			</div>
		</div>
		<!-- /smartphone_info -->
		
		<!-- smartphone_info -->
		<div class="smartphone_info">
			<div class="contents2 fadein cf">	
				<div class="tabs">
					<input id="price" type="radio" name="tab_item" checked>
					<label class="tab_item" for="price">価格試算</label>
					<input id="spec" type="radio" name="tab_item">
					<label class="tab_item tab_item2" for="spec">端末スペック</label>
					<div class="tab_content" id="price_content">
						<form action="https://mobileapply.dinomo.jp/h/n01/" method="post">
							<input type="hidden" name="terminal_type" value="<?php if ($terms = get_the_terms($post->ID, 'smartphone_cat')) { foreach ( $terms as $term ) { echo '' .$term->name. '';}}?>">
							<input type="hidden" name="terminal" value="<?php the_title(); ?>">
							<div class="color_blc cf">
								<h3>カラー</h3>
								<?php while(have_rows('color1')): the_row(); ?>
								<label><input type="radio" name="color" checked="checked" value="<?php the_sub_field('name'); ?>"><span class="wrp"><span class="color" style="background-color: <?php the_sub_field('code'); ?>"></span><?php the_sub_field('name'); ?></span></label>
								<?php endwhile; ?>
								<?php while(have_rows('color2')): the_row(); ?>
								<label><input type="radio" name="color" value="<?php the_sub_field('name'); ?>"><span class="wrp"><span class="color" style="background-color: <?php the_sub_field('code'); ?>"></span><?php the_sub_field('name'); ?></span></label>
								<?php endwhile; ?>
								<?php while(have_rows('color3')): the_row(); ?>
								<label><input type="radio" name="color" value="<?php the_sub_field('name'); ?>"><span class="wrp"><span class="color" style="background-color: <?php the_sub_field('code'); ?>"></span><?php the_sub_field('name'); ?></span></label>
								<?php endwhile; ?>
								<?php while(have_rows('color4')): the_row(); ?>
								<label><input type="radio" name="color" value="<?php the_sub_field('name'); ?>"><span class="wrp"><span class="color" style="background-color: <?php the_sub_field('code'); ?>"></span><?php the_sub_field('name'); ?></span></label>
								<?php endwhile; ?>
								<?php while(have_rows('color5')): the_row(); ?>
								<label><input type="radio" name="color" value="<?php the_sub_field('name'); ?>"><span class="wrp"><span class="color" style="background-color: <?php the_sub_field('code'); ?>"></span><?php the_sub_field('name'); ?></span></label>
								<?php endwhile; ?>
								<?php while(have_rows('color6')): the_row(); ?>
								<label><input type="radio" name="color" value="<?php the_sub_field('name'); ?>"><span class="wrp"><span class="color" style="background-color: <?php the_sub_field('code'); ?>"></span><?php the_sub_field('name'); ?></span></label>
								<?php endwhile; ?>
							</div>
							<div class="spec_blc cf">
								<h3>容量</h3>
								<?php while(have_rows('spec')): the_row(); ?>
								<label><input type="radio" name="capacity" checked="checked" value="<?php the_sub_field('p'); ?>"><span class="wrp"><?php the_sub_field('p'); ?></span></label>
								<?php endwhile; ?>
								<?php while(have_rows('spec_re')): the_row(); ?>
								<label><input type="radio" name="capacity" value="<?php the_sub_field('p'); ?>"><span class="wrp"><?php the_sub_field('p'); ?></span></label>
								<?php endwhile; ?>
							</div>
							<input type="submit" value="<?php the_title(); ?> を購入する">
						</form>
					</div>
					<div class="tab_content" id="spec_content">
						<?php while(have_rows('spec_blc')): the_row(); ?>
						<div class="spec_blc cf">
							<h3><?php the_sub_field('h3'); ?></h3>
							<table>
								<?php while(have_rows('table')): the_row(); ?>
								<tr>
									<th><?php the_sub_field('th'); ?></th>
									<td><?php the_sub_field('td'); ?></td>
								</tr>
								<?php endwhile; ?>
							</table>
						</div>
						<?php endwhile; ?>
					</div>
			</div>
		</div>
		<!-- /smartphone_info -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc2">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li><a href="<?php echo home_url(); ?>/smartphone/">端末一覧</a></li>
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
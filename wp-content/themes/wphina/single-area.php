<?php get_header(); ?>

<?php if( !is_bot() ) { set_post_views( get_the_ID() ); } ?>

	<!-- main -->
	<main>
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1 breadcrumb_top">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li><a href="<?php echo home_url(); ?>/area/">サービスエリア</a></li>
					<li><?php echo get_the_title(); ?>の通信エリアでも高速回線でつながる！</li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
		
		<!-- area_mv -->
		<div class="area_mv">
			<div class="contents2 cf fadein">
				<div class="inner">
					<h1><?php echo get_the_title(); ?><img src="<?php bloginfo('template_directory');?>/images/area/h1.png" alt=""><?php the_field('par'); ?></h1>
					<p class="txt1">コストパフォーマンスの頂点へ！</p>
					<p class="txt2">もっと速く！<br class="sp">もっとつながりやすく！</p>
					<p class="txt3">ネットワーク改善プロジェクト進行中</p>
				</div>
				<figure><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full', ['class' => 'object-fit-img hover_img']); ?><?php else : ?><img src="<?php bloginfo('template_url'); ?>/images/index/news00.jpg" alt="デフォルト画像" class="object-fit-img hover_img"><?php endif ; ?></figure>
			</div>
		</div>
		<!-- /area_mv -->
		
		<!-- area2_blc -->
		<div class="area2_blc">
			<div class="contents2 cf fadein">
				<h2 class="ttl_h2">エリア・通信品質</h2>
				<p class="catch">つながるエリアぞくぞく。<br>あなたの住む街でも快適に！</p>
				<ul>
					<li>
						<h3><span><?php echo get_the_title(); ?></span>の</h3>
						<p class="par"><span><?php the_field('par'); ?></span>※1,2</p>
						<div class="map"><img src="<?php the_field('map'); ?>" alt=""></div>
						<p class="data_area"><span>◼︎</span>データ高速無制限エリア</p>
						<p class="note2">※1 データ高速無制限エリアであっても、地下、屋内、大きな商業ビルの屋内等の場所、電波の状況等によって通信速度が変化する場合あり</p>
						<p class="note2">※2 2023年9月時点。人口カバー率は、国勢調査に用いられる約500m区画において、50%以上の場所で通信可能なエリアを基に算出</p>
						<div class="project">快適な通信環境ご提供のため、<br class="sp">プロジェクトが進行中！</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- /area2_blc -->
		
		<!-- price_blc -->
		<div class="price_blc">
			<div class="contents2 fadein">
				<h2><img src="<?php bloginfo('template_directory');?>/images/price/h2.png" alt="dinomoはワンプラン。みんなの欲しいをギュッと凝縮。"></h2>
				<p class="catch">dinomoは大容量の55GB。<br>「もっとスマホを使って<br class="sp">ネットを楽しみたい！」<br>そんなアナタは「dinomo大盛り」で<br>100GBに増やしちゃおう。<br>国内通話10分無料もついてます。</p>
			</div>
			<div class="price_box fadein">
				<div class="contents2">
					<h3><img src="<?php bloginfo('template_directory');?>/images/price/triple.png" alt="dinomoトリプルキャリアプラン"></h3>
					<ul class="price_plan">
						<li>
							<div class="inner">
								<h4>3回線を1パッケージ化！<br>どこでも“ほぼ”繋がる！</h4>
								<p>docomo・楽天・auの回線が一つのスマホで使えるからとっても安心！</p>
							</div>
							<figure><img src="<?php bloginfo('template_directory');?>/images/price/plan1.png" alt=""></figure>
						</li>
						<li>
							<div class="inner">
								<h4>データ容量は<br>安心の55GB</h4>
								<p>楽天/au回線50GB＋docomo回線5GB＝55GB大容量だから気にせず楽しめる！</p>
							</div>
							<figure><img src="<?php bloginfo('template_directory');?>/images/price/plan2.png" alt=""></figure>
						</li>
						<li>
							<div class="inner">
								<h4>海外でも毎月2GB<br>無料で使える!</h4>
								<p>海外76の国と地域で毎月2GBまで使えるレンタル代や手続き不要だから嬉しい</p>
							</div>
							<figure><img src="<?php bloginfo('template_directory');?>/images/price/plan3.png" alt=""></figure>
						</li>
						<li>
							<div class="inner">
								<h4>10分かけ放題!</h4>
								<p>dinomoは10分かけ放題が標準だから安心して通話もできる◎</p>
							</div>
							<figure><img src="<?php bloginfo('template_directory');?>/images/price/plan4.png" alt=""></figure>
						</li>
						<li>
							<div class="inner">
								<h4>2つめの電話番号が<br>使える!</h4>
								<p>副回線としても利用できるから緊急連絡先ととしても使える</p>
							</div>
							<figure><img src="<?php bloginfo('template_directory');?>/images/price/plan5.png" alt=""></figure>
						</li>
					</ul>
					<div class="price_btn">
						<a href="#s02">国内通話について</a>
						<a href="#s01">海外データ通信について</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /price_blc -->
		
		<!-- price_blc -->
		<div class="price_blc">
			<div class="contents2 fadein">
				<h2 class="ttl_h2">データ通信量</h2>
				<img src="<?php bloginfo('template_directory');?>/images/price/img01.png" alt="" class="img01">
				<p class="catch">在宅ワークやオンライン授業も。<br class="sp">動画・ゲーム・音楽などのエンタメも。<br>とことん、ネットを楽しみたい人も<br class="sp">じゃんじゃん使えるデータ量。</p>
				<img src="<?php bloginfo('template_directory');?>/images/price/img02.png" alt="" class="img02">
			</div>
			<div class="price_box fadein">
				<a id="s01" class="anc"></a>
				<div class="contents2">
					<h2 class="ttl_h2">海外データ通信</h2>
					<img src="<?php bloginfo('template_directory');?>/images/price/img06.png" class="img01" alt="">
					<p class="catch">追加手続きや追加料金不要で使える！</p>
					<p class="txt">日本人が渡航する国を網羅！<br>74の国と地域でそのまま利用可能です。</p>
					<div class="price_btn">
						<a href="<?php echo home_url(); ?>/servicearea/#overseas">海外データ通信</a>
					</div>
				</div>
			</div>
			<div class="price_box fadein">
				<a id="s02" class="anc"></a>
				<div class="contents2">
					<h2 class="ttl_h2">国内通話</h2>
					<img src="<?php bloginfo('template_directory');?>/images/price/img07.png" class="img01" alt="">
					<p class="catch">5分かけほじゃちょっと足りないんだよな…</p>
					<p class="txt">dinomoは5分かけほじゃなくて<br>10分かけほだから安心して通話ができる</p>
					<div class="kakeho">
						<h4>仕事の都合上やなんだかんだ長電話してしまうという方はオススメ。</h4>
						<img src="<?php bloginfo('template_directory');?>/images/price/option.png" class="img02" alt="">
						<p>※１【かけ放題オプション/5分以内国内通話無料について】<br>海外での発着信、「WORLD CALL」、「SMS」、（0570）（0180）などの他社接続サービス、（188）特番、（104）の番号案内料、衛星電話／衛星船舶電話、当社が指定する電話番号（機械的な発信などにより、長時間または多数の通信を一定期間継続して接続する電話番号）などへの発信は定額の対象外となり、別途料金がかかります。</p>
						<p>※２【5分以内国内通話料無料について】<br>1回あたり5分以内の通話が、回数無制限で定額対象となります。ただし、1回あたりの通話時間が5分を超過した場合、超過分について30秒ごとに22円の通話料がかかります。</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /price_blc -->
		
		<!-- area_blc -->
		<div class="area_blc">
			<div class="contents fadein">
				<h2 class="ttl_h2">エリア別</h2>
				<div class="map">
					<div class="area area1 cf">
						<a href="<?php echo home_url(); ?>/area/area01/">北海道</a>
					</div>
					<div class="area area2 cf">
						<a href="<?php echo home_url(); ?>/area/area02/">青森</a>
						<a href="<?php echo home_url(); ?>/area/area03/">岩手</a>
						<a href="<?php echo home_url(); ?>/area/area04/">秋田</a>
						<a href="<?php echo home_url(); ?>/area/area05/">宮城</a>
						<a href="<?php echo home_url(); ?>/area/area06/">山形</a>
						<a href="<?php echo home_url(); ?>/area/area07/">福島</a>
					</div>
					<div class="area area3 cf">
						<a href="<?php echo home_url(); ?>/area/area08/">新潟</a>
						<a href="<?php echo home_url(); ?>/area/area09/">富山</a>
						<a href="<?php echo home_url(); ?>/area/area10/">石川</a>
						<a href="<?php echo home_url(); ?>/area/area11/">福井</a>
						<a href="<?php echo home_url(); ?>/area/area12/">山梨</a>
						<a href="<?php echo home_url(); ?>/area/area13/">長野</a>
						<a href="<?php echo home_url(); ?>/area/area14/">岐阜</a>
						<a href="<?php echo home_url(); ?>/area/area15/">静岡</a>
						<a href="<?php echo home_url(); ?>/area/area16/">愛知</a>
					</div>
					<div class="area area4 cf">
						<a href="<?php echo home_url(); ?>/area/area17/">茨城</a>
						<a href="<?php echo home_url(); ?>/area/area18/">栃木</a>
						<a href="<?php echo home_url(); ?>/area/area19/">群馬</a>
						<a href="<?php echo home_url(); ?>/area/area20/">埼玉</a>
						<a href="<?php echo home_url(); ?>/area/area21/">千葉</a>
						<a href="<?php echo home_url(); ?>/area/area22/">東京</a>
						<a href="<?php echo home_url(); ?>/area/area23/">神奈川</a>
					</div>
					<div class="area area5 cf">
						<a href="<?php echo home_url(); ?>/area/area24/">三重</a>
						<a href="<?php echo home_url(); ?>/area/area25/">滋賀</a>
						<a href="<?php echo home_url(); ?>/area/area26/">京都</a>
						<a href="<?php echo home_url(); ?>/area/area27/">大阪</a>
						<a href="<?php echo home_url(); ?>/area/area28/">兵庫</a>
						<a href="<?php echo home_url(); ?>/area/area29/">奈良</a>
						<a href="<?php echo home_url(); ?>/area/area30/">和歌山</a>
					</div>
					<div class="area area6 cf">
						<a href="<?php echo home_url(); ?>/area/area31/">鳥取</a>
						<a href="<?php echo home_url(); ?>/area/area32/">島根</a>
						<a href="<?php echo home_url(); ?>/area/area33/">岡山</a>
						<a href="<?php echo home_url(); ?>/area/area34/">広島</a>
						<a href="<?php echo home_url(); ?>/area/area35/">山口</a>
					</div>
					<div class="area area7 cf">
						<a href="<?php echo home_url(); ?>/area/area36/">徳島</a>
						<a href="<?php echo home_url(); ?>/area/area37/">香川</a>
						<a href="<?php echo home_url(); ?>/area/area38/">愛媛</a>
						<a href="<?php echo home_url(); ?>/area/area39/">高知</a>
					</div>
					<div class="area area8 cf">
						<a href="<?php echo home_url(); ?>/area/area40/">福岡</a>
						<a href="<?php echo home_url(); ?>/area/area41/">佐賀</a>
						<a href="<?php echo home_url(); ?>/area/area42/">長崎</a>
						<a href="<?php echo home_url(); ?>/area/area43/">熊本</a>
						<a href="<?php echo home_url(); ?>/area/area44/">大分</a>
						<a href="<?php echo home_url(); ?>/area/area45/">宮崎</a>
						<a href="<?php echo home_url(); ?>/area/area46/">鹿児島</a>
						<a href="<?php echo home_url(); ?>/area/area47/">沖縄</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /area_blc -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc2">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li><a href="<?php echo home_url(); ?>/area/">サービスエリア</a></li>
					<li><?php echo get_the_title(); ?>の通信エリアでも高速回線でつながる！</li>
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
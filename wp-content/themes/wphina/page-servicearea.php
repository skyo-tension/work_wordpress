<?php get_header(); ?>

	<!-- main -->
	<main>
		
		<!-- main -->
		<div class="main">
			<div class="contents2">
				<h1 class="fadein"><span>AREA</span>サービスエリア</h1>
			</div>
		</div>
		<!-- /main -->
		
		<!-- breadcrumb -->
		<nav class="breadcrumb_blc1">
			<div class="contents2 fadein">
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>/">ホーム</a></li>
					<li>サービスエリア</li>
				</ol>
			</div>
		</nav>
		<!-- /breadcrumb -->
		
		<!-- area_blc -->
		<div class="area_blc">
			<div class="contents fadein">
				<h2 class="ttl_h2">dinomo通信エリア拡大中！</h2>
			</div>
			<div class="info_box fadein">
				<div class="contents">
					<ul class="news cf">
						<?php while(have_rows('info')): the_row(); ?>
						<li>
							<a href="" class="cf">
								<p class="date"><?php the_sub_field('date'); ?></p>
								<p class="ttl"><?php the_sub_field('txt'); ?></p>					
							</a>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- /area_blc -->
		
		<!-- area_blc -->
		<div class="area_blc">
			<div class="contents fadein">
				<h2 class="ttl_h2">サービスエリア</h2>
				<p class="catch">dinomoトリプルキャリアプランなら…<br>脅威の人口カバー率！</p>
				<ul class="area_img">
					<li class="img01"><img src="<?php bloginfo('template_directory');?>/images/area/img01.png" alt=""></li>
					<li><img src="<?php bloginfo('template_directory');?>/images/area/img02.png" alt=""></li>
					<li><img src="<?php bloginfo('template_directory');?>/images/area/img03.png" alt=""></li>
				</ul>
				<p class="note2">※1 主回線ネットワークのデータ通信はdocomo回線網が利用できます。</p>
				<p class="note2">※2 副回線ネットワークのデータ通信は楽天回線網が優先的に接続され電波が入らない場所などはau回線網（プラチナバンド含む）に接続されます。</p>
				<p class="note2">※3 公平なサービス提供または環境により速度低下する場合があります。</p>
				<p class="note2">※4 2023年9月時点。人口カバー率は、国勢調査に用いられる約500m区画において、50%以上の場所で通信可能なエリアを基に算出</p>
				<p class="note2">※5 ドコモ網（主回線）の人口カバー率と楽天網（副回線）の人口カバー率です。</p>
				<p class="note2">※6 通信速度はベストエフォートであり、実効速度は通信環境・状況により変動します。</p>
				<p class="note2">※7 提供エリアは、接続事業者（株式会社NTTドコモおよび楽天モバイル株式会社）が定める提供エリアとし、提供エリアは接続事業者によって変更される場合があります。</p>
			</div>
		</div>
		<!-- /area_blc -->
		
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
		
		<!-- area_blc -->
		<div class="area_blc">
			<a id="overseas" class="anc"></a>
			<div class="contents fadein">
				<h2 class="ttl_h2">海外</h2>
				<p class="catch">毎月2GBまで無料で使えちゃう</p>
				<div class="overseas">
					<h3>海外の主要都市72の国と<br class="sp">地域が0円でつかえる！※1</h3>
					<ul class="plan5 cf">
						<li><img src="<?php bloginfo('template_directory');?>/images/area/img06.png" alt="毎月2GBまで0円"></li>
						<li><img src="<?php bloginfo('template_directory');?>/images/area/img07.png" alt="差し替え不要"></li>
						<li><img src="<?php bloginfo('template_directory');?>/images/area/img08.png" alt="ローミング設定ONにするだけ"></li>
						<li><img src="<?php bloginfo('template_directory');?>/images/area/img09.png" alt="手続き不要"></li>
					</ul>
					<p class="note2">※1 eSIM、SIMカードタイプのみご利用頂けます。</p>
					<p class="note2">※2 プランのデータ量に加算されます。毎月2GB以降は128kbpsで使い放題。</p>
				</div>
				<div class="box">
					<h4>データ通信（海外ローミング）</h4>
					<div class="box_inner">
						<ul class="area_img">
							<li><img src="<?php bloginfo('template_directory');?>/images/area/img04.png" alt=""></li>
							<li><img src="<?php bloginfo('template_directory');?>/images/area/img05.png" alt=""></li>
						</ul>
						<p class="note1">※プランのデータ利用量に加算。</p>
						<p class="note2">※1 データ通信（海外ローミング）の<a href="#note" class="link">注意事項の詳細はこちら</a></p>
						<div class="spe">
							<h5>海外指定72の国と地域</h5>
							<p>アイスランド、アイルランド、アメリカ（ハワイ）、アメリカ本土、アラブ首長国連邦、アンドラ、イギリス、イタリア、インド、インドネシア、ウクライナ、エジプト、エストニア、オーストラリア、オーストリア、オランダ、カタール、カナダ、カンボジア、韓国、キプロス、ギリシャ、グアドループ、グアム、クウェート、クロアチア、サイパン、ジブラルタル、シンガポール、スイス、スウェーデン、スペイン、スロバキア、スロベニア、タイ、台湾、チェコ共和国、中国、デンマーク、ドイツ、トルコ、ニュージーランド、ノルウェー、ハンガリー、フィリピン、フィンランド、ブラジル、フランス、フランス領ギアナ、ブルガリア、ベトナム、ペルー、ベルギー、ポーランド、ポルトガル、香港、マカオ、マルタ、マルティニーク、マレーシア、南アフリカ、ミャンマー、メキシコ、モロッコ、ヨルダン、ラトビア、リトアニア、リヒテンシュタイン、ルーマニア、ルクセンブルク、レユニオン、ロシア（2023年12月4日時点）</p>
						</div>
						<p class="note1">※データ通信（海外ローミング）や提供条件は予告なく変更になる場合があります。</p>
						<div class="spe">
							<h5>データ通信量の目安</h5>
							<div class="sbox">
								<h6>Google（Web検索）</h6>
								<p>約1.8MB／1ページ</p>
								<table>
									<tr>
										<th>データ利用量</th>
										<th>利用可能目安</th>
									</tr>
									<tr>
										<td>1GB</td>
										<td>約625ページ</td>
									</tr>
								</table>
								<p class="note1">※1ページ閲覧で1.8MB消費した場合</p>
							</div>
							<div class="sbox">
								<h6>Google マップ</h6>
								<p>約1MB／1経路検索</p>
								<table>
									<tr>
										<th>データ利用量</th>
										<th>利用可能目安</th>
									</tr>
									<tr>
										<td>1GB</td>
										<td>約1,000回</td>
									</tr>
								</table>
								<p class="note1">※1経路の検索あたり約1MB消費した場合</p>
							</div>
							<div class="sbox">
								<h6>Google 翻訳</h6>
								<p>約2MB／10文</p>
								<table>
									<tr>
										<th>データ利用量</th>
										<th>利用可能目安</th>
									</tr>
									<tr>
										<td>1GB</td>
										<td>約5,000文</td>
									</tr>
								</table>
								<p class="note1">※10文の翻訳で約2MB消費した場合</p>
							</div>
							<div class="sbox">
								<h6>メール送信</h6>
								<p>テキスト送信：約5KB／1通</p>
								<table>
									<tr>
										<th>データ利用量</th>
										<th>利用可能目安</th>
									</tr>
									<tr>
										<td>1GB</td>
										<td>約20万通</td>
									</tr>
								</table>
								<p class="note1">※1通のテキスト送信で約5KB消費した場合</p>
							</div>
							<div class="sbox">
								<p>写真添付送信：約500KB／1通</p>
								<table>
									<tr>
										<th>データ利用量</th>
										<th>利用可能目安</th>
									</tr>
									<tr>
										<td>1GB</td>
										<td>約2,000通</td>
									</tr>
								</table>
								<p class="note1">※1通の写真添付送信で約500KB消費した場合</p>
							</div>
							<div class="sbox">
								<h6>LINE</h6>
								<p>テキスト送信：約3KB／1トーク</p>
								<table>
									<tr>
										<th>データ利用量</th>
										<th>利用可能目安</th>
									</tr>
									<tr>
										<td>1GB</td>
										<td>約33万回</td>
									</tr>
								</table>
								<p class="note1">※1トーク送信するのに約3KB消費した場合</p>
							</div>
							<div class="sbox">
								<p>無料通話：約0.3MB／1分</p>
								<table>
									<tr>
										<th>データ利用量</th>
										<th>利用可能目安</th>
									</tr>
									<tr>
										<td>1GB</td>
										<td>約55時間</td>
									</tr>
								</table>
								<p class="note1">※1分無料通話するのに約0.3MB消費した場合</p>
							</div>
							<div class="sbox">
								<p>ビデオ通話：約5.1MB／1分</p>
								<table>
									<tr>
										<th>データ利用量</th>
										<th>利用可能目安</th>
									</tr>
									<tr>
										<td>1GB</td>
										<td>約3時間</td>
									</tr>
								</table>
								<p class="note1">※1分ビデオ通話するのに約5.1MB消費した場合</p>
							</div>
							<div class="sbox">
								<h6>YouTube</h6>
								<p>標準画質：約450MB／1時間</p>
								<table>
									<tr>
										<th>データ利用量</th>
										<th>利用可能目安</th>
									</tr>
									<tr>
										<td>1GB</td>
										<td>約2.2時間</td>
									</tr>
								</table>
								<p class="note1">※標準画質で1時間視聴するのに約450MB消費した場合</p>
							</div>
							<div class="sbox">
								<h6>動画配信サービス（Netflix）</h6>
								<p>Netflix（HD画質）：約1,300MB／1時間</p>
								<table>
									<tr>
										<th>データ利用量</th>
										<th>利用可能目安</th>
									</tr>
									<tr>
										<td>1GB</td>
										<td>約0.8時間</td>
									</tr>
								</table>
								<p class="note1">※Netflix（HD画質）で1時間視聴するのに約1,300MB消費した場合</p>
							</div>
							<div class="sbox">
								<p class="note1">※1コンテンツを単独で利用した目安のデータ量です。写真や動画については画質やサイズなどによって使用するデータ通信量が変動いたします。</p>
								<p class="note1">※ご利用状況や操作内容の組み合わせにより、ご利用できる内容は変動します。</p>
								<p class="note1">※掲載の商品名称やサービス名称などは、一般に各社の商標または登録商標です。</p>
								<p class="note1">※各社の商標記載においては™や®などの商標表示を省略する場合があります。</p>
							</div>
						</div>
						<div class="spe">
							<a id="note" class="anc"></a>
							<h5>注意事項</h5>
							<p class="note1">※海外ローミングで使用するデータは海外ローミングエリアの高速データ容量から消費されます。</p>
							<p class="note1">※現地事業者の事情により、接続ができない場合があります。</p>
							<p class="note1">※通信速度はベストエフォートであり、実効速度は通信環境・状況により変動します。</p>
							<p class="note1">※海外の対象国と地域以外は、Wi-Fi接続時のみ利用可能です。</p>
							<p class="note1">※データ通信（海外ローミング）のサービスエリア・提供条件は予告なく変更になる場合があります。</p>
							<p class="note1">※国際通話や国際SMSのご利用分は従量課金でのご請求となりますので詳しくは契約約款をご確認ください。</p>
							<p class="note1">※ご利用の機種や、海外ローミング先のネットワーク、または通信先の相手国のネットワークの通信事情により、一覧にある事業者でサービスをご利用いただけない場合があっても当社は一切の責任を負いません。</p>
							<p class="note1">※eSIM、SIMカードタイプのみご利用頂けます。</p>
						</div>
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
					<li>料金プラン</li>
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
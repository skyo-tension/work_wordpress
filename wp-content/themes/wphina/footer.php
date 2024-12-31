		<!-- footer -->
		<footer>
			<div class="contents">
				<img src="<?php bloginfo('template_directory');?>/images/common/footer_logo.png" alt="dinomo">
				<ul class="menu01 cf">
					<li><a href="<?php echo home_url(); ?>/campaign/">キャンペーン</a></li>
					<li><a href="<?php echo home_url(); ?>/price/">料金プラン</a></li>
					<li><a href="<?php echo home_url(); ?>/smartphone/">端末一覧</a></li>
					<li><a href="<?php echo home_url(); ?>/servicearea/">サービスエリア</a></li>
					<li><a href="<?php echo home_url(); ?>/option/">オプション</a></li>
					<!-- <li><a href="<?php echo home_url(); ?>/">ご利用までの流れ</a></li> -->
					<li><a href="<?php echo home_url(); ?>/faq/">よくある質問</a></li>
					<li><a href="<?php echo home_url(); ?>/tellme/">おしえてマグナスくん！</a></li>
					<li><a href="<?php echo home_url(); ?>/category/notice/">お知らせ</a></li>
				</ul>
				<ul class="menu02 cf">
					<li><a href="<?php echo home_url(); ?>/sitepolicy/">サイトポリシー</a></li>
					<!-- <li><a href="#">約款・重要事項説明</a></li> -->
					<li><a href="<?php echo home_url(); ?>/company/">企業情報</a></li>
					<!-- <li><a href="#">プレスリリース</a></li> -->
					<!-- <li><a href="#">公開情報</a></li> -->
					<!-- <li><a href="#">商標について</a></li> -->
					<li><a href="<?php echo home_url(); ?>/privacy/">個人情報について</a></li>
					<!-- <li><a href="#">情報セキュリティポリシー</a></li> -->
					<li><a href="<?php echo home_url(); ?>/law/">特定商法取引に基づく表示</a></li>
				</ul>
			</div>
		</footer><!-- #EndLibraryItem --><!-- /footer -->
		
	</main>
	<!-- /main -->

	<!-- page_top -->
	<div id="page_top_wrap">
		<p id="page_top"><a href="#top"><img src="<?php bloginfo('template_directory');?>/images/common/pagetop.png" alt="PAGETOP" class="hover_img"></a></p>
	</div>
	<!-- /page_top -->

<!-- swiper -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/js/swiper/swiper.css">
<script src="<?php bloginfo('template_directory');?>/js/swiper/swiper.min.js"></script>
<script>
window.addEventListener('load', function() {
	var swiper = new Swiper('.main-slide', {
		loop: true,
    slidesPerView: 1,
		speed: 1500,
		autoplay: 4000,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		paginationClickable: true,
		autoplayDisableOnInteraction: false
	});
}, false);
</script>
<script>
window.addEventListener('load', function() {
	var swiper = new Swiper('.campaign-slide', {
		loop: true,
		centeredSlides: true,
    slidesPerView: "auto",
		speed: 1500,
		autoplay: 4000,
		spaceBetween: 50,
		pagination: '.swiper-pagination',
		paginationClickable: true,
		autoplayDisableOnInteraction: false,
		breakpoints: {
			740: {
				spaceBetween: 20,
			},
    }
	});
}, false);
</script>
<script>
window.addEventListener('load', function() {
	var swiper = new Swiper('.mag-slide', {
		loop: true,
		centeredSlides: true,
    slidesPerView: "auto",
		speed: 1500,
		autoplay: 4000,
		spaceBetween: 30,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		paginationClickable: true,
		autoplayDisableOnInteraction: false,
		lazy: {
			loadPrevNext: true,
		},
		breakpoints: {
			740: {
				spaceBetween: 20,
			},
    }
	});
}, false);
</script>
<!-- /swiper -->

<!-- toggle -->
<script>
$(document).ready(function() {
	if ($(window).width() <= 740) {
		$(".menu-box .menu-btn").on("click", function() {
			$(this).next().slideToggle();
			$(this).toggleClass("active");
		});
		$(".menu-box ul li a").on("click", function() {
			$(".menu-box ul").slideToggle();
			$(".menu-box .menu-btn").removeClass("active");
		});
	}
});
</script>
<!-- /toggle -->

<?php wp_footer();?>
</body>
</html>
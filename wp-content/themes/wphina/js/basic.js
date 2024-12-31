/* scrollTop
---------------------------------------------------- */
$(function(){
    $('a[href^=#]').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});


/* page_top
---------------------------------------------------- */
$(function() {
    var showFlag = false;
    var topBtn = $('#page_top');    
    topBtn.css('bottom', '-100px');
    var showFlag = false;
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            if (showFlag == false) {
                showFlag = true;
                topBtn.stop().animate({'bottom' : '15px'}, 200); 
            }
        } else {
            if (showFlag) {
                showFlag = false;
                topBtn.stop().animate({'bottom' : '-100px'}, 200); 
            }
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});


/* hamburger
---------------------------------------------------- */
$(function() {
  $(".panel-btn").click(function() {
    $(".panel").slideToggle(200);
    $(".panel-btn-icon").toggleClass("close");
	return false;
  });
});


/* fadein
---------------------------------------------------- */
jQuery(function(){
  jQuery(window).scroll(function (){
    jQuery('.fadein').each(function(){
      var elemPos = jQuery(this).offset().top;
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();
      if (scroll > elemPos - windowHeight + 100){
        jQuery(this).addClass('scrollin');
      }
    });
  });
  jQuery(window).scroll();
});


/* fixed
---------------------------------------------------- */
$(function () {
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll > 500) {
			$('#js-fixed').addClass('is-show');
		}
		else {
			$('#js-fixed').removeClass('is-show');
		}
	});
});
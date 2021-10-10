// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	/* ドロワー */
	jQuery(".js-drawer").on("click", function(e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked");
		return false;
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}
});
});

$(function(){

	var slider = "#slider"; // スライダー
	var thumbnailItem = "#thumbnail-list .thumbnail-item"; // サムネイル画像アイテム
	
	// サムネイル画像アイテムに data-index でindex番号を付与
	$(thumbnailItem).each(function(){
	var index = $(thumbnailItem).index(this);
	$(this).attr("data-index",index);
	});
	
	// スライダー初期化後、カレントのサムネイル画像にクラス「thumbnail-current」を付ける
	$(slider).on('init',function(slick){
	var index = $(".slide-item.slick-slide.slick-current").attr("data-slick-index");
	$(thumbnailItem+'[data-index="'+index+'"]').addClass("thumbnail-current");
	});

	//slickスライダー実行
	$(slider).slick();
	//サムネイル画像アイテムをクリックしたときにスライダー切り替え
	$(thumbnailItem).on('click',function(){
			var index = $(this).attr("data-index");
			$(slider).slick("slickGoTo",index,false);
	});
	
	//サムネイル画像のカレントを切り替え
	$(slider).on('beforeChange',function(event,slick, currentSlide,nextSlide){
			$(thumbnailItem).each(function(){
			$(this).removeClass("thumbnail-current");
			});
			$(thumbnailItem+'[data-index="'+nextSlide+'"]').addClass("thumbnail-current");
	});
});
$(function(){
/*var box    = $("#HeaderFixArea");
var boxTop = box.offset().top;
$(window).scroll(function () {
if($(window).scrollTop() >= boxTop) {
box.addClass("fixed");
$("body").css("margin-top","180px");
} else {
box.removeClass("fixed");
$("body").css("margin-top","0px");
}

});*/


var headerHight = 100; //ヘッダの高さ
$('a[href^=#]').click(function(){
	var href= $(this).attr("href");
	var target = $(href == "#" || href == "" ? 'html' : href);
	var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
	$("html, body").animate({scrollTop:position}, 550, "swing");
	return false;
});

// scroll
$('a[href^=#]').click(function() {
	var targetY = $($(this).attr('href')).offset().top;
	$('html,body').animate({scrollTop: targetY}, 800, 'swing');
	return false;
});


$(function() {
	$(".pagetop").click(function () {
		$('html,body').animate({ scrollTop: 0 }, 'nomal');
		return false;
	});
});

});

$(document).ready(function() {
	$('a.openwin').openwin();
});

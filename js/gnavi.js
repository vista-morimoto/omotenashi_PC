// JavaScript Document

$(function() {
	
	var nav = $('#HeaderFixArea');	
	var navTop = nav.offset().top;
	$(window).scroll(function () {
		var winTop = $(this).scrollTop();
		if (winTop >= navTop) {
			nav.addClass('fixed')
		} else if (winTop <= navTop) {
			nav.removeClass('fixed')
		}
	});
	//サブナビゲーション
	/*$('li', nav).hover(function(){
		$('ul',this).slideDown('fast');
	},
	function(){
		$('ul',this).slideUp('fast');
	});*/
	var Tnav = $('#Tnav');	
	var TnavTop = Tnav.offset().top;
	$(window).scroll(function () {
		var winTop = $(this).scrollTop();
		if (winTop >= TnavTop) {
			Tnav.addClass('Tfixed')
		} else if (winTop <= TnavTop) {
			Tnav.removeClass('Tfixed')
		}
	});
});

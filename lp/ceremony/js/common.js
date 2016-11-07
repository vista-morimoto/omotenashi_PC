//==================================================================
//class for ie ( for base font)
//==================================================================

$(function(){
	if($.browser.msie){
		$("body").addClass("msie");
	}
	if (navigator.platform.indexOf("Win") != -1) {
		$("body").addClass("win");
	}
});



//==================================================================
//Equal Height Columns with jQuery [jQuery]
//==================================================================

function equalHeight(group) {
 tallest = 0;
 group.each(function() {
 thisHeight = $(this).height();
 if(thisHeight > tallest)
 {
 tallest = thisHeight;
 }
 });
 group.height(tallest);
}


//==================================================================


    
//==================================================================
//page top link
//==================================================================
$(function() {
var topBtn = $('.backbtntop'); 
//最初はボタンを隠す
topBtn.hide();
//スクロールが300に達したらボタンを表示させる
$(window).scroll(function () {
if ($(this).scrollTop() > 100) {
topBtn.fadeIn();
} else {
topBtn.fadeOut();
}
});
//スクロールしてトップに戻る
//500の数字を大きくするとスクロール速度が遅くなる
topBtn.click(function () {
$('body,html').animate({
scrollTop: 0
}, 500);
return false;
});
});


//==================================================================
//rollover.js
//==================================================================

function initRollOvers() {
	if (!document.getElementById){
		return;
	}
	
	var preLoads = new Array();
	var allImages = document.getElementsByTagName('img');

	for (var i = 0; i < allImages.length; i++) {		
		if (allImages[i].className == 'imgover') {
			var src = allImages[i].getAttribute('src');
			var ftype = src.substring(src.lastIndexOf('.'), src.length);
			var oSrc = src.replace(ftype, '_over'+ftype);

			//-- 
			allImages[i].setAttribute('pSrc', src);
			allImages[i].setAttribute('oSrc', oSrc);

			//-- 
			preLoads[i] = new Image();
			preLoads[i].src = oSrc;

			//-- 
			allImages[i].onmouseover = function() {
				this.setAttribute('src', this.getAttribute('oSrc'));
			}
			allImages[i].onmouseout = function() {
				this.setAttribute('src', this.getAttribute('pSrc'));
			}
		}
	}
}

function addOnload(func){
	if ( typeof window.addEventListener != "undefined" ){
		window.addEventListener( "load", func, false );
	}else if ( typeof window.attachEvent != "undefined" ) {
		window.attachEvent( "onload", func );
	}else{
		if ( window.onload != null ){
			var oldOnload = window.onload;
			window.onload = function ( e ) {
			oldOnload( e );
			window[func]();
		};
	}else
		window.onload = func;
	}
}
addOnload(initRollOvers);

//==================================================================
//:first-child, :last-child
//==================================================================
$(function(){
    $('#sideMenu li:first-child').addClass('firstChild');
    $('#sideMenu li:last-child').addClass('lastChild');
});

//==================================================================
// スムースリンク
//==================================================================
$(document).ready(function() {
$('a[href*=#]').click(function() {
 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
 && location.hostname == this.hostname) {
   var $target = $(this.hash);
   $target = $target.length && $target
   || $('[name=' + this.hash.slice(1) +']');
   if ($target.length) {
  var targetOffset = $target.offset().top;
  $('html,body')
  .animate({scrollTop: targetOffset}, 900);
    return false;
   }
  }
  });
});


$(document).ready(function() {
$('area[href*=#]').click(function() {
 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
 && location.hostname == this.hostname) {
   var $target = $(this.hash);
   $target = $target.length && $target
   || $('[name=' + this.hash.slice(1) +']');
   if ($target.length) {
  var targetOffset = $target.offset().top;
  $('html,body')
  .animate({scrollTop: targetOffset}, 900);
    return false;
   }
  }
  });
});

//==================================================================
//boxlink
//==================================================================
$(function () {
$('.boxLink').click(function () {
	var boxLink = $(this).find('a');
	if (boxLink.attr('target') == '_blank') {
	window.open(boxLink.attr('href'));
	}
else window.location = boxLink.attr('href');
return false;
});
 $('.boxLink').hover(function () {
$(this).addClass('hover');
}, function () {
$(this).removeClass('hover');
});
});

/*--------------------------------------------------------------------------*
 *  
 *  heightLine JavaScript Library beta4
 *  
 *  MIT-style license. 
 *  
 *  2007 Kazuma Nishihata 
 *  http://www.webcreativepark.net
 *  
 *--------------------------------------------------------------------------*/
new function(){
	
	function heightLine(){
	
		this.className="heightLine";
		this.parentClassName="heightLineParent"
		reg = new RegExp(this.className+"-([a-zA-Z0-9-_]+)", "i");
		objCN =new Array();
		var objAll = document.getElementsByTagName ? document.getElementsByTagName("*") : document.all;
		for(var i = 0; i < objAll.length; i++) {
			var eltClass = objAll[i].className.split(/\s+/);
			for(var j = 0; j < eltClass.length; j++) {
				if(eltClass[j] == this.className) {
					if(!objCN["main CN"]) objCN["main CN"] = new Array();
					objCN["main CN"].push(objAll[i]);
					break;
				}else if(eltClass[j] == this.parentClassName){
					if(!objCN["parent CN"]) objCN["parent CN"] = new Array();
					objCN["parent CN"].push(objAll[i]);
					break;
				}else if(eltClass[j].match(reg)){
					var OCN = eltClass[j].match(reg)
					if(!objCN[OCN]) objCN[OCN]=new Array();
					objCN[OCN].push(objAll[i]);
					break;
				}
			}
		}
		
		//check font size
		var e = document.createElement("div");
		var s = document.createTextNode("S");
		e.appendChild(s);
		e.style.visibility="hidden"
		e.style.position="absolute"
		e.style.top="0"
		document.body.appendChild(e);
		var defHeight = e.offsetHeight;
		
		changeBoxSize = function(){
			for(var key in objCN){
				if (objCN.hasOwnProperty(key)) {
					//parent type
					if(key == "parent CN"){
						for(var i=0 ; i<objCN[key].length ; i++){
							var max_height=0;
							var CCN = objCN[key][i].childNodes;
							for(var j=0 ; j<CCN.length ; j++){
								if(CCN[j] && CCN[j].nodeType == 1){
									CCN[j].style.height="auto";
									max_height = max_height>CCN[j].offsetHeight?max_height:CCN[j].offsetHeight;
								}
							}
							for(var j=0 ; j<CCN.length ; j++){
								if(CCN[j].style){
									var stylea = CCN[j].currentStyle || document.defaultView.getComputedStyle(CCN[j], '');
									var newheight = max_height;
									if(stylea.paddingTop)newheight -= stylea.paddingTop.replace("px","");
									if(stylea.paddingBottom)newheight -= stylea.paddingBottom.replace("px","");
									if(stylea.borderTopWidth && stylea.borderTopWidth != "medium")newheight-= stylea.borderTopWidth.replace("px","");
									if(stylea.borderBottomWidth && stylea.borderBottomWidth != "medium")newheight-= stylea.borderBottomWidth.replace("px","");
									CCN[j].style.height =newheight+"px";
								}
							}
						}
					}else{
						var max_height=0;
						for(var i=0 ; i<objCN[key].length ; i++){
							objCN[key][i].style.height="auto";
							max_height = max_height>objCN[key][i].offsetHeight?max_height:objCN[key][i].offsetHeight;
						}
						for(var i=0 ; i<objCN[key].length ; i++){
							if(objCN[key][i].style){
								var stylea = objCN[key][i].currentStyle || document.defaultView.getComputedStyle(objCN[key][i], '');
									var newheight = max_height;
									if(stylea.paddingTop)newheight-= stylea.paddingTop.replace("px","");
									if(stylea.paddingBottom)newheight-= stylea.paddingBottom.replace("px","");
									if(stylea.borderTopWidth && stylea.borderTopWidth != "medium")newheight-= stylea.borderTopWidth.replace("px","")
									if(stylea.borderBottomWidth && stylea.borderBottomWidth != "medium")newheight-= stylea.borderBottomWidth.replace("px","");
									objCN[key][i].style.height =newheight+"px";
							}
						}
					}
				}
			}
		}
		
		checkBoxSize = function(){
			if(defHeight != e.offsetHeight){
				changeBoxSize();
				defHeight= e.offsetHeight;
			}
		}
		changeBoxSize();
		setInterval(checkBoxSize,1000)
		window.onresize=changeBoxSize;
	}
	
	function addEvent(elm,listener,fn){
		try{
			elm.addEventListener(listener,fn,false);
		}catch(e){
			elm.attachEvent("on"+listener,fn);
		}
	}
	addEvent(window,"load",heightLine);
}
//==================================================================


//huwahuwa
 var huwahuwa_i = 0;
    (function move(){
        // プラスマイナスを交互に渡す
        huwahuwa_i = huwahuwa_i > 0 ? -1 : 1;      
        var prrr = $("#main_visual_st").position().top;       
        $("#main_visual_st").animate({ top: prrr + huwahuwa_i * 20 }, { 
            duration: 900,
            complete: move // アニメーション完了後に関数を再帰呼び出しする。
        });
        
    })();
    
//==================================================================
$(function() {
	var nav = $('#fix_navi');
	//表示位置
	var navTop = nav.offset().top+80;
	//ナビゲーションの高さ（シャドウの分だけ足してます）
	var navHeight = nav.height()+10;
	var showFlag = false;
	nav.css('top', -navHeight+'px');
	//ナビゲーションの位置まできたら表示
	$(window).scroll(function () {
		var winTop = $(this).scrollTop();
		if (winTop >= navTop) {
			if (showFlag == false) {
				showFlag = true;
				nav
					.addClass('fixed')
					.stop().animate({'top' : '0px'}, 200);
			}
		} else if (winTop <= navTop) {
			if (showFlag) {
				showFlag = false;
				nav.stop().animate({'top' : -navHeight+'px'}, 200, function(){
					nav.removeClass('fixed');
				});
			}
		}
	});
});
//==================================================================
//fade   
$('#logo,#sitetitle,#schoolname,#main_visual_btn').css({display:'none'});

$(window).load(function(){

	setTimeout(function(){ scn01_init(); },0);
    setTimeout(function(){ scn03_init(); },500);
	setTimeout(function(){ scn02_init(); },1400);
	
    setTimeout(function(){ scn04_init(); },1500);
//        setTimeout(function(){ scn05_init(); },1200);
})

function scn01_init(){
	setTimeout(function(){ $('#logo').fadeIn(1000);  },   0);

}

function scn02_init(){

	setTimeout(function(){ $('#sitetitle').fadeIn(1000);  },   0);

}
function scn03_init(){

	setTimeout(function(){ $('#schoolname').fadeIn(1000);  },   0);
}



function scn04_init(){
	$('#main_visual_btn').css({right:'-30px'});
	setTimeout(function(){ $('#main_visual_btn').fadeIn(1800);  },   0);
		setTimeout(function(){
		$('#main_visual_btn').animate(
			{
				right:'0px'
			},{
				duration: 300,
				queue: false,
				easing: 'linear'
			}
		);
	}, 400);

}

//function scn05_init(){
//	$('#fix_navi').css({top:'-30px'});
//	setTimeout(function(){ $('#fix_navi').fadeIn(1800);  },   0);
//		setTimeout(function(){
//		$('#fix_navi').animate(
//			{
//				top:'0px'
//			},{
//				duration: 400,
//				queue: false,
//				easing: 'linear'
//			}
//		);
//	}, 400);
//
//}

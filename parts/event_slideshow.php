<?php
$domain = $_SERVER["SERVER_NAME"];
if($domain == "www.jikei-hospitality.ac.jp"){
	// 本番時は/がルート
		$link_path = "/";
}else{
	// テストアップ時は/o-hospitality2016/がルート
		$link_path = "/o-hospitality2016/";
}
?>
<!--スライダー-->
<div id="slider-wrapper-event" style="z-index:1;">
<!--↓top page JQuery slideshow start↓-->
<div id="slider" class="nivoSlider">
<a href="http://www.jikei-hospitality.ac.jp/event/e-wedding.html"><img src="<?php print $link_path; ?>images/event/slideshow/slide_real.jpg" title="" /></a>
<a href="http://www.jikei-hospitality.ac.jp/event/e-hyattregency.html"><img src="<?php print $link_path; ?>images/event/slideshow/slide_hyatt.jpg" title="" /></a>
<a href="http://www.jikei-hospitality.ac.jp/event/e-funeralhall.html"><img src="<?php print $link_path; ?>images/event/slideshow/slide_sougi.jpg" title="" /></a>
<!--<a href="<?php print $link_path; ?>event/e-aosetumei.html"><img src="<?php print $link_path; ?>images/event/slideshow/slide_ao.jpg" title="" /></a>-->
</div>
<!--<script type="text/javascript" src="<?php print $link_path; ?>js/jquery.nivo.slider.pack.js"></script>-->
<script type="text/javascript" src="<?php print $link_path; ?>js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect:'slideInRight', // 画像切り替え時のアニメーション
        animSpeed:500, // アニメーション速度(ms)
        pauseTime:5000, // 画像切り替えまでの時間(ms)
        keyboardNav:true, // スライドをキーボードで操作
        pauseOnHover:true, // マウスホバー時に切り替えを一時停止

        directionNav:true, // 前/次ボタンを表示
        directionNavHide:false, // マウスホバー時のみdirectionNavを表示

        captionOpacity:0 // キャプションの透過度
        });
    });
</script>
<!--↑top page JQuery slideshow start↑-->
</div>
<!--スライダー-->

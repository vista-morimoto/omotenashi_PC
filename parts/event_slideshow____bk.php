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
<a href="<?php print $link_path; ?>event/special/index.php#sp_20150711"><img src="<?php print $link_path; ?>images/event/slideshow/slide_wtaiken.jpg" title="" /></a>
<a href="<?php print $link_path; ?>event/special/index.php#sp_20150620"><img src="<?php print $link_path; ?>images/event/slideshow/slide_kanku.jpg" title="" /></a>
<a href="<?php print $link_path; ?>event/explanation/index.php#ko2ao"><img src="<?php print $link_path; ?>images/event/slideshow/slide_2ndhighschool.jpg" title="" /></a>
</div>
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

<?php
$domain = $_SERVER["SERVER_NAME"];
if($domain == "www.jikei-hospitality.ac.jp"){
	// 本番時は/がルート
		$link_path = "/";
}else{
	// テストアップ時は/o-hospitality2014/がルート
		$link_path = "/o-hospitality2016/";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php print $link_path; ?>js/fixed.js"></script>
<script type="text/javascript" src="<?php print $link_path; ?>js/fixHeight.js"></script>
<!--↓TOPのみ使用 ここじゃないと動かないのでやむなくここに設置-->
<script type="text/javascript" src="<?php print $link_path; ?>js/carousel.js"></script>
<!--↑TOPのみ使用 ここじゃないと動かないのでやむなくここに設置-->
<!--グローバルナビJS-->
<script type="text/javascript" src="<?php print $link_path; ?>js/gnavi.js"></script>
<!-- / グローバルナビJS-->
<script type="text/javascript" src="<?php print $link_path; ?>js/smartphonebtn.js"></script>

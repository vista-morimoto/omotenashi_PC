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
<div id="SideNav">
<p class="textC mb15"><img src="<?php print $link_path; ?>images/event/schedule.png" alt="1日の流れ" /></p>
</div>
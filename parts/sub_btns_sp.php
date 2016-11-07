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
<ul id="Btns">
  <li class="mb15"><a href="<?php print $link_path; ?>event/special"><img src="<?php print $link_path; ?>images/common/btnSub_special.png" alt="スペシャルイベント" /></a></li>
</ul>


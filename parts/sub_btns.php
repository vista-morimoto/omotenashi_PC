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
  <li class="mb10"><a href="<?php print $link_path; ?>event/"><img src="<?php print $link_path; ?>images/common/btnSub_taiken.png" alt="お仕事体験（オープンキャンパス）" /></a></li>
  <li><a href="https://www.jikei-hospitality.ac.jp/event/f-shiryo.html " target="_blank"><img src="<?php print $link_path; ?>images/common/btnSub_siryo.png" alt="無料資料請求" style="margin-right:-3px;" /></a></li>
</ul>


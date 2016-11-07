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
<h3><a href="<?php print $link_path; ?>invitation/"><img src="<?php print $link_path; ?>images/invitation/subtit.png" alt="入学について" /></a></h3>
<ul id="SideNav">
  <li><a href="<?php print $link_path; ?>invitation/entry.php">出願について</a></li>
  <li><a href="<?php print $link_path; ?>invitation/ao.php">AO入学について</a></li>
  <li><a href="<?php print $link_path; ?>invitation/flow.php">出願から合格までの流れ</a></li>
  <!--<li><a href="<?php print $link_path; ?>invitation/flow2.php">出願から入学までの手順</a></li>-->
  <li><a href="<?php print $link_path; ?>invitation/papers.php">出願書類記入方法</a></li>
  <li><a href="<?php print $link_path; ?>invitation/scholarship.php">学費サポート</a></li>
</ul>

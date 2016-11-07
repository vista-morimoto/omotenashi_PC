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
<h3><a href="<?php print $link_path; ?>schoollife/"><img src="<?php print $link_path; ?>images/schoollife/subtit.png" alt="学校生活サポート" /></a></h3>
<ul id="SideNav">
  <li><a href="<?php print $link_path; ?>schoollife/dormitory.php">学生寮</a></li>
  <li><a href="<?php print $link_path; ?>schoollife/club.php">サークル活動</a></li>
  <li><a href="<?php print $link_path; ?>schoollife/health.php">慶生会クリニック</a></li>
  <li><a href="<?php print $link_path; ?>schoollife/ssc.php">スチューデントサービスセンター（SSC）</a></li>
  <li><a href="<?php print $link_path; ?>schoollife/turning.php">進路変更プログラム</a></li>
  <li><a href="<?php print $link_path; ?>schoollife/career.php">キャリアセンター</a></li>
  <li><a href="<?php print $link_path; ?>schoollife/kokusaicom.php">滋慶国際交流COM</a></li>
  <li><a href="<?php print $link_path; ?>schoollife/eventcalender.php">イベントカレンダー</a></li>
</ul>

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
<h3><a href="<?php print $link_path; ?>school/"><img src="<?php print $link_path; ?>images/school/subtit.png" alt="学校紹介トップ" /></a></h3>
<ul id="SideNav">
  <li><a href="<?php print $link_path; ?>school/access.php">アクセス</a></li>
  <li><a href="<?php print $link_path; ?>school/special.php">スペシャル対談</a></li>
  <li><a href="<?php print $link_path; ?>school/message.php">ホスピタリティ業界からのメッセージ</a></li>
  <li><a href="<?php print $link_path; ?>school/interview.php">在校生インタビュー</a></li>
  <li><a href="<?php print $link_path; ?>school/equipment.php">施設・設備</a></li>
  <li><a href="<?php print $link_path; ?>school/faq.php">よくある質問</a></li>
  <li><a href="<?php print $link_path; ?>school/link.php">滋慶学園グループ校</a></li>
  <li><a href="<?php print $link_path; ?>school/social.php">SNS公式アカウント一覧</a></li>
</ul>

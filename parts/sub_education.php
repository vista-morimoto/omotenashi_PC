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
<h3><a href="<?php print $link_path; ?>education/"><img src="<?php print $link_path; ?>images/education/subtit.png" alt="教育システムトップ" /></a></h3>
<ul id="SideNav">
  <li><a href="<?php print $link_path; ?>education/s-curriculum.php">日本の伝統と文化を学ぶ</a></li>
  <li><a href="<?php print $link_path; ?>education/system.php">産学協同教育システム</a></li>
  <li><a href="<?php print $link_path; ?>education/w-curriculum.php">Wメジャーカリキュラム</a></li>
  <li><a href="<?php print $link_path; ?>education/overseas-training.php">国際教育システム</a></li>
  <li><a href="<?php print $link_path; ?>education/qualification.php">関連資格・検定一覧</a></li>
</ul>

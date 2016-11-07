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
<h3><a href="<?php print $link_path; ?>job/"><img src="<?php print $link_path; ?>images/job/subtit.png" alt="就職サポートトップ" /></a></h3>
<ul id="SideNav">
    <li><a href="<?php print $link_path; ?>job/career.php">キャリアセンター</a></li>
    <li><a href="<?php print $link_path; ?>job/internship.php">インターンシップ</a></li>
    <li><a href="<?php print $link_path; ?>job/successnavi.php">サクセスナビ</a></li>
    <li><a href="<?php print $link_path; ?>job/explanation.php">合同企業説明会</a></li>
    <li><a href="<?php print $link_path; ?>job/support.php">卒業後支援サポート</a></li>
    <li><a href="<?php print $link_path; ?>job/workstudy.php">ワーク＆スタディ制度</a></li>
    <li><a href="<?php print $link_path; ?>job/actualresults.php">就職実績</a></li>
</ul>

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
<ul id="SideNav">
    <li><a href="<?php print $link_path; ?>target/entry.php">入学をお考えの方へ</a></li>
    <li><a href="<?php print $link_path; ?>target/parent.php">保護者の方へ</a></li>
    <li><a href="<?php print $link_path; ?>target/teacher.php">高等学校の先生方へ</a></li>
    <li><a href="<?php print $link_path; ?>target/company.php">企業の方へ</a></li>
    <li><a href="<?php print $link_path; ?>target/abroad.php">留学生の方へ</a></li>
    <li><a href="<?php print $link_path; ?>target/student.php">在校生の方へ</a></li>
    <!--<li><a href="<?php print $link_path; ?>target/society.php">大学生・社会人・フリーターの方へ</a></li>-->
</ul>


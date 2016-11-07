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
<nav id="targetNav">
    <ul class="clearfix">
      <li><a href="<?php print $link_path; ?>target/entry.php"><img src="<?php print $link_path; ?>images/common/targetNav01_top.png" alt="入学をお考えの方へ" /></a></li>
      <li><a href="<?php print $link_path; ?>target/parent.php"><img src="<?php print $link_path; ?>images/common/targetNav02_top.png" alt="保護者の方へ" /></a></li>
      <li><a href="<?php print $link_path; ?>target/teacher.php"><img src="<?php print $link_path; ?>images/common/targetNav03_top.png" alt="高等学校の先生方へ" /></a></li>
      <li><a href="<?php print $link_path; ?>target/company.php"><img src="<?php print $link_path; ?>images/common/targetNav04_top.png" alt="企業の方へ" /></a></li>
      <li><a href="<?php print $link_path; ?>target/abroad.php"><img src="<?php print $link_path; ?>images/common/targetNav05_top.png" alt="留学生の方へ" /></a></li>
      <li><a href="<?php print $link_path; ?>target/student.php"><img src="<?php print $link_path; ?>images/common/targetNav06_top.png" alt="在校生の方へ" /></a></li>
    </ul>
</nav>





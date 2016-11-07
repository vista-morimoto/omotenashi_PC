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
      <li style="position:relative;"><a href="<?php print $link_path; ?>target/entry.php"><img src="<?php print $link_path; ?>images/common/targetNav01.png" alt="入学をお考えの方へ" /></a><img src="<?php print $link_path; ?>images/top/ico_new.png" alt="NEW" id="tNew" /></li>
      <li><a href="<?php print $link_path; ?>target/student.php"><img src="<?php print $link_path; ?>images/common/targetNav06.png" alt="在校生の方へ" /></a></li>
      <li><a href="<?php print $link_path; ?>target/parent.php"><img src="<?php print $link_path; ?>images/common/targetNav02.png" alt="保護者の方へ" /></a></li>
      <li><a href="<?php print $link_path; ?>target/teacher.php"><img src="<?php print $link_path; ?>images/common/targetNav03.png" alt="高等学校の先生方へ" /></a></li>
      <li><a href="<?php print $link_path; ?>target/company.php"><img src="<?php print $link_path; ?>images/common/targetNav04.png" alt="企業の方へ" /></a></li>
      <li><a href="<?php print $link_path; ?>target/abroad.php"><img src="<?php print $link_path; ?>images/common/targetNav05.png" alt="留学生の方へ" /></a></li>
    </ul>
</nav>





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
<div id="eventGnavi">
    <ul>
        <li><a href="<?php print $link_path; ?>event/">お仕事体験TOP</a></li>
        <li><a href="<?php print $link_path; ?>event/special/">スペシャルイベント</a></li>
        <li><a href="<?php print $link_path; ?>event/bus/">無料送迎バス</a></li>
        <li><a href="<?php print $link_path; ?>event/explanation/">学校説明会</a></li>
        <li><a href="<?php print $link_path; ?>event/parent/">保護者会</a></li>
        <li><a href="<?php print $link_path; ?>event/myschool/">Myスクール</a></li>
    </ul>
</div>
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
<ul id="catIndex">
    <li><a href="<?php print $link_path; ?>event/results.html?category[]=1059&type[]=3&type[]=2"><img src="<?php print $link_path; ?>images/event/index_bridal.png" alt="ブライダルのお仕事体験" /></a></li>
    <li><a href="<?php print $link_path; ?>event/results.html?category[]=1062&type[]=3&type[]=2"><img src="<?php print $link_path; ?>images/event/index_hotel.png" alt="ホテルのお仕事体験" /></a></li>
    <li><a href="<?php print $link_path; ?>event/results.html?category[]=1063&type[]=3&type[]=2"><img src="<?php print $link_path; ?>images/event/index_travel.png" alt="旅行・観光のお仕事体験" /></a></li>
    <!--<li><a href="<?php print $link_path; ?>event/results.html?category[]=1065&type[]=3&type[]=2"><img src="<?php print $link_path; ?>images/event/index_railroad.png" alt="鉄道のお仕事体験" /></a></li>-->
    <li><a href="<?php print $link_path; ?>event/results.html?category[]=1060&type[]=3&type[]=2"><img src="<?php print $link_path; ?>images/event/index_airline.png" alt="エアラインのお仕事体験" /></a></li>        
    <li><a href="<?php print $link_path; ?>event/results.html?category[]=1064&type[]=3&type[]=2"><img src="<?php print $link_path; ?>images/event/index_ceremony.png" alt="葬祭のお仕事体験" /></a></li>
</ul>
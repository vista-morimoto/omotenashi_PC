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
<h3 class="mb10"><a href="<?php print $link_path; ?>course/"><img src="<?php print $link_path; ?>images/course/subtit.png" alt="学科・コース紹介" /></a></h3>
<div id="SideNavB">
    <h4><img src="<?php print $link_path; ?>images/course2015/titBridal.png" alt="ブライダル" /></h4>
    <ul>
        <li><a href="<?php print $link_path; ?>course/bridal.php">ブライダル総合コース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_planner.php">ブライダルプランナーコース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_beauty.php">ブライダルファッション&amp;ビューティーコース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_flower.php">ブライダルフラワーコース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_ceremony.php">ブライダル&amp;葬祭コース</a></li>
    </ul>
</div>
<div id="SideNavH">
    <h4><img src="<?php print $link_path; ?>images/course2015/titHotel.png" alt="ホテル" /></h4>
    <ul>
      <li><a href="<?php print $link_path; ?>course/hotel_management.php">ホテルコース</a></li>
      <li><a href="<?php print $link_path; ?>course/hotel_innsmanagement.php">ホテル&amp;旅館リゾートコース</a></li>
      <li><a href="<?php print $link_path; ?>course/restaurant_management.php">レストラン&amp;カフェコース</a></li>
      <li><a href="<?php print $link_path; ?>course/sommelier.php">ソムリエ&amp;バーテンダーコース</a></li>
    </ul>
</div>
<div id="SideNavT">
    <h4><img src="<?php print $link_path; ?>images/course2015/titTravel.png" alt="旅行・観光" /></h4>
    <ul>
      <li><a href="<?php print $link_path; ?>course/travel_management.php">トラベルカウンターコース</a></li>
      <li><a href="<?php print $link_path; ?>course/tour_conductor.php">ツアーコンダクターコース</a></li>
      <li><a href="<?php print $link_path; ?>course/tour_planner.php">ツアープランナーコース</a></li>
    </ul>
</div>
<div id="SideNavA">
    <h4><img src="<?php print $link_path; ?>images/course2015/titAirline.png" alt="エアライン" /></h4>
    <ul>
      <li><a href="<?php print $link_path; ?>course/cabin_attendant.php">キャビンアテンダントコース</a></li>
      <li><a href="<?php print $link_path; ?>course/ground_staff.php">グランドスタッフコース</a></li>
    </ul>
</div>
<div id="SideNavC">
    <h4><img src="<?php print $link_path; ?>images/course2015/titCeremony.png" alt="葬祭" /></h4>
	  <ul>
        <li><a href="<?php print $link_path; ?>course/ceremony_director.php">葬祭ディレクターコース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_ceremony_management.php">冠婚葬祭コース</a></li>
    </ul>
</div>

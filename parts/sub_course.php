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
    <h4><img src="<?php print $link_path; ?>images/course/titBridal.png" alt="ブライダル" /></h4>
    <ul>
        <li><a href="<?php print $link_path; ?>course/bridal.php">ブライダル総合コース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_planner.php">ブライダルプランナーコース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_beauty.php">ブライダルスタイリスト＆ビューティーコース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_flower.php">ブライダルフラワー＆コーディネートコース</a></li>
    </ul>
</div>
<div id="SideNavH">
    <h4><img src="<?php print $link_path; ?>images/course/titHotel.png" alt="ホテル" /></h4>
    <ul>
      <li><a href="<?php print $link_path; ?>course/hotel_management.php">ホテルコース</a></li>
      <li><a href="<?php print $link_path; ?>course/hotel_bridal.php">ホテル＆ブライダルコース</a></li>
      <li><a href="<?php print $link_path; ?>course/hotel_innsmanagement.php">ホテル＆旅館リゾートコース</a></li>
      <li><a href="<?php print $link_path; ?>course/sommelier.php">レストラン＆バーテンダーコース</a></li>
      <li><a href="<?php print $link_path; ?>course/hotel_abroad.php">ホテル留学コース</a></li>
    </ul>
</div>
<div id="SideNavT">
    <h4><img src="<?php print $link_path; ?>images/course/titTravel.png" alt="トラベル" /></h4>
    <ul>
      <li><a href="<?php print $link_path; ?>course/travel.php">トラベル総合コース</a></li>
      <li><a href="<?php print $link_path; ?>course/travel_management.php">トラベルカウンター＆プランナーコース</a></li>
      <li><a href="<?php print $link_path; ?>course/tour_conductor.php">ツアーコンダクターコース</a></li>
      <li><a href="<?php print $link_path; ?>course/railroad.php">鉄道サービスコース</a></li>
    </ul>
</div>
<div id="SideNavA">
    <h4><img src="<?php print $link_path; ?>images/course/titAirline.png" alt="エアライン" /></h4>
    <ul>
      <li><a href="<?php print $link_path; ?>course/airline.php">エアライン総合コース</a></li>
      <li><a href="<?php print $link_path; ?>course/cabin_attendant.php">キャビンアテンダントコース</a></li>
      <li><a href="<?php print $link_path; ?>course/ground_staff.php">グランドスタッフコース</a></li>
    </ul>
</div>
<div id="SideNavC">
    <h4><img src="<?php print $link_path; ?>images/course/titCeremony.png" alt="葬祭" /></h4>
	  <ul>
        <li><a href="<?php print $link_path; ?>course/ceremony_director.php">葬祭ディレクターコース</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_ceremony_management.php">セレモニー＆ブライダルコース</a></li>
    </ul>
</div>

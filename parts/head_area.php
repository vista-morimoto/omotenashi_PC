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
<!--header-->
<header>
  <div id="HeaderWrapperIn">
    <div id="Header" class="clearfix">
      <div class="clearfix">
        <p id="lead" class="pt5">ブライダル・ホテル・旅行・エアライン・葬祭業界のプロになる！</p>
        <div id="supportNav">
           <ul>
              <li><a href="http://twitter.com/jikeiomotenashi" target="_blank"><img src="<?php print $link_path; ?>images/common/ico_twitter_min.png" alt="Twitter" class="mt15" /></a></li><!--
              --><li><a href="https://www.facebook.com/jikeiomotenashi" target="_blank"><img src="<?php print $link_path; ?>images/common/ico_facebook_min.png" alt="Facebook" class="mt15" /></a></li><!--
              --><li><a href="http://accountpage.line.me/jikei-omotenashi" target="_blank"><img src="<?php print $link_path; ?>images/common/ico_line_min.png" alt="Line" class="mt15" /></a></li><!--
              --><li><a href="https://www.youtube.com/user/jikeihospitality" target="_blank"><img src="<?php print $link_path; ?>images/common/ico_youtube_min.png" alt="youtube" class="mt15" /></a></li><!--
              --><li><a href="http://instagram.com/jikei_omotenashi/" target="_blank"><img src="<?php print $link_path; ?>images/common/ico_instagram.png" alt="instagram" class="mt15" /></a></li><!--
              -->
           </ul>
          <p class="mt10">
          <form id="cse-search-box" name= "csesearchbox" action="<?php print $link_path; ?>search/index.php" >
          <input type="hidden" name="cx" value="004617936611482068935:ucfvla3apj0" /><input type="hidden" name="ie" value="UTF-8" /><input type="text" name="q" id="q" size="31" style="width:150px;height:25px; line-height:26px;margin-right:5px;" /><input class="ibutton" type="submit" name="sa" value="" onmouseover="this.className='ibutton_on'" onmouseout="this.className='ibutton'" />
          </form>
          </p>           
          </div>
      </div>   

    </div>
  </div>
<!-- / HeaderWrapper-->
<div id="HeaderFixArea"> 
  <!--HeaderBottom-->
  <div id="HeaderBottom">
    <h1><a href="<?php print $link_path; ?>" class="OverStyle"><img src="<?php print $link_path; ?>images/common/logo.png" alt="滋慶おもてなし＆ブライダル・観光専門学校大阪 堀江" /></a></h1>
    <ul id="searchTels">
      <li class="mb10 textC"><img src="<?php print $link_path; ?>images/common/header_tel.png" alt="0120-947-718" /></li>
      <li id="headAccess"><a href="<?php print $link_path; ?>school/access.php"><img src="<?php print $link_path; ?>images/common/head_access.png" alt="アクセス" /></a></li>
      <li id="headMail"><a href="https://www.jikei-hospitality.ac.jp/event/f-info.html" target="_blank"><img src="<?php print $link_path; ?>images/common/head_mail.png" alt="メール" /></a></li>      
    </ul>
    <ul id="HeaderBtns">
      <li id="fixSiryo"><a href="https://www.jikei-hospitality.ac.jp/event/f-shiryo.html" target="_blank"><img src="<?php print $link_path; ?>images/common/btn_siryo.png" alt="資料請求" /></a></li>
      <!--
      -->
      <li id="fixEvent"><a href="<?php print $link_path; ?>event/"><img src="<?php print $link_path; ?>images/common/btn_event.png" alt="お仕事体験（オープンキャンパス）" /></a></li>
    </ul>
  </div>
  <!-- / HeaderBottom--> 
  <!--Gnavi-->
  <nav id="Gnavi">
    <ul>
      <li><a href="<?php print $link_path; ?>concept/"><img src="<?php print $link_path; ?>images/common/gnav_concept.gif" alt="私たちの目指す人材育成" /></a></li>
      <li><a href="<?php print $link_path; ?>school/">
      <img src="<?php print $link_path; ?>images/common/gnav_school.gif" alt="学校紹介" />
      </a>
        <div class="dropdown wSchool">
            <div class="dropdownBox">
            <div class="naviTit">
            <a href="<?php print $link_path; ?>school/" class="BgImageNone pl0">学校紹介<br>
            <img src="<?php print $link_path; ?>images/common/mnavSchool.png" alt="学校紹介" style="float:left;" /></a>
            </div>
            <ul>
              <li><a href="<?php print $link_path; ?>school/access.php">所在地・地図</a></li>
              <li><a href="<?php print $link_path; ?>school/special.php">スペシャル対談</a></li>
              <li><a href="<?php print $link_path; ?>school/message.php">ホスピタリティ業界からのメッセージ</a></li>
              <li><a href="<?php print $link_path; ?>school/interview.php">在校生インタビュー</a></li>
              <li><a href="<?php print $link_path; ?>school/equipment.php">設備・施設</a></li>
              <li><a href="<?php print $link_path; ?>school/faq.php">よくある質問</a></li>
              <li><a href="<?php print $link_path; ?>school/link.php">リンク集</a></li>
              <li><a href="<?php print $link_path; ?>school/social.php">SNS公式アカウント一覧</a></li>
            </ul>
            </div>
        </div>
      </li>
      <li><a href="<?php print $link_path; ?>course/"><img src="<?php print $link_path; ?>images/common/gnav_course.gif" alt="学科コース紹介" /></a>
        <div class="dropdown wCourse">
            <div class="dropdownBox">
            <div class="naviTit">
            <a class="MegaMenuLink" href="<?php print $link_path; ?>course/">学科コース紹介<br>
            <img src="<?php print $link_path; ?>images/common/mnavCourse.png" alt="学科コース紹介" /></a>
            </div>
            <ul>
                <li class="dBridal"><a href="<?php print $link_path; ?>course/bridal.php">ブライダル総合コース</a></li>
                <li class="dBridal"><a href="<?php print $link_path; ?>course/bridal_planner.php">ブライダルプランナーコース</a></li>
                <li class="dBridal"><a href="<?php print $link_path; ?>course/bridal_beauty.php">ブライダルスタイリスト＆ビューティーコース</a></li>
                <li class="dBridal"><a href="<?php print $link_path; ?>course/bridal_flower.php">ブライダルフラワー＆コーディネートコース</a></li>
                <li class="dHotel"><a href="<?php print $link_path; ?>course/hotel_management.php">ホテルコース</a></li>
                <li class="dHotel"><a href="<?php print $link_path; ?>course/hotel_bridal.php">ホテル＆ブライダルコース</a></li>
                <li class="dHotel"><a href="<?php print $link_path; ?>course/hotel_innsmanagement.php">ホテル＆旅館リゾートコース</a></li>
                <li class="dHotel"><a href="<?php print $link_path; ?>course/sommelier.php">レストラン＆バーテンダーコース</a></li>
                <li class="dHotel"><a href="<?php print $link_path; ?>course/hotel_abroad.php">ホテル留学コース</a></li>
            </ul>
            <ul>
                <li class="dTravel"><a href="<?php print $link_path; ?>course/travel.php">トラベル総合コース</a></li>
                <li class="dTravel"><a href="<?php print $link_path; ?>course/travel_management.php">トラベルカウンター＆プランナーコース</a></li>
                <li class="dTravel"><a href="<?php print $link_path; ?>course/tour_conductor.php">ツアーコンダクターコース</a></li>
                <li class="dTravel"><a href="<?php print $link_path; ?>course/railroad.php">鉄道サービスコース</a></li>
                <li class="dAirLine"><a href="<?php print $link_path; ?>course/airline.php">エアライン総合コース</a></li>
                <li class="dAirLine"><a href="<?php print $link_path; ?>course/cabin_attendant.php">キャビンアテンダントコース</a></li>
                <li class="dAirLine"><a href="<?php print $link_path; ?>course/ground_staff.php">グランドスタッフコース</a></li>
                <li class="dCeremony"><a href="<?php print $link_path; ?>course/ceremony_director.php">葬祭ディレクターコース</a></li>
                <li class="dCeremony"><a href="<?php print $link_path; ?>course/bridal_ceremony_management.php">セレモニー＆ブライダルコース</a></li>
            </ul>
            </div>
        </div>
      </li>
      <li><a href="<?php print $link_path; ?>education/"><img src="<?php print $link_path; ?>images/common/gnav_education.gif" alt="教育システム" /></a>
        <div class="dropdown wEducation">
            <div class="dropdownBox">
            <div class="naviTit">
            <a href="<?php print $link_path; ?>education/" class="BgImageNone pl0">教育システム<br>
            <img src="<?php print $link_path; ?>images/common/mnavEducation.png" alt="教育システム" style="float:left;" /></a>
            </div>
            <ul>
                <li><a href="<?php print $link_path; ?>education/s-curriculum.php">日本の伝統と文化</a></li>
                <li><a href="<?php print $link_path; ?>education/system.php">産学協同教育システム</a></li>
                <li><a href="<?php print $link_path; ?>education/w-curriculum.php">Wメジャーカリキュラム</a></li>
                <li><a href="<?php print $link_path; ?>education/overseas-training.php">国際教育システム</a></li>
                <li><a href="<?php print $link_path; ?>education/qualification.php">関連資格・検定一覧</a></li>
            </ul>
            </div>
        </div>
      </li>
      <li><a href="<?php print $link_path; ?>job/"><img src="<?php print $link_path; ?>images/common/gnavi_job.gif" alt="就職サポート" /></a>
        <div class="dropdown wJob">
            <div class="dropdownBox">
            <div class="naviTit">
            <a href="<?php print $link_path; ?>job/" class="BgImageNone pl0">就職サポート<br>
            <img src="<?php print $link_path; ?>images/common/mnavJob.png" alt="就職サポート" style="float:left;" /></a>
            </div>
            <ul>
            	<li><a href="<?php print $link_path; ?>job/internship.php">インターンシップ</a></li>
                <li><a href="<?php print $link_path; ?>job/career.php">サポート支援プログラム</a></li>
                <li><a href="<?php print $link_path; ?>job/explanation.php">合同企業説明会</a></li>
                <li><a href="<?php print $link_path; ?>job/support.php">卒業後サポート</a></li>
                <li><a href="<?php print $link_path; ?>job/workstudy.php">ワーク＆スタディ制度</a></li>
                <li><a href="<?php print $link_path; ?>job/actualresults.php">就職実績</a></li>
            </ul>
            </div>
        </div>
      </li>
      <li><a href="<?php print $link_path; ?>schoollife/"><img src="<?php print $link_path; ?>images/common/gnav_schollife.gif" alt="学園生活サポート" /></a>
        <div class="dropdown wSchoollife">
            <div class="dropdownBox">
            <div class="naviTit">
            <a href="<?php print $link_path; ?>schoollife/" class="BgImageNone pl0">学園生活サポート<br>
            <img src="<?php print $link_path; ?>images/common/mnavSchoollife.png" alt="学園生活サポート" style="float:left;" /></a>
            </div>
            <ul>
                <li><a href="<?php print $link_path; ?>schoollife/dormitory.php">学生寮</a></li>
                <li><a href="<?php print $link_path; ?>schoollife/club.php">サークル活動</a></li>
                <li><a href="<?php print $link_path; ?>schoollife/health.php">慶生会クリニック</a></li>
                <li><a href="<?php print $link_path; ?>schoollife/ssc.php">スチューデントサービスセンター（SSC）</a></li>
                <li><a href="<?php print $link_path; ?>schoollife/turning.php">進路変更プログラム</a></li>
                <li><a href="<?php print $link_path; ?>schoollife/career.php">キャリアセンター</a></li>
                <li><a href="<?php print $link_path; ?>invitation/scholarship.php">学費サポート</a></li>
                <li><a href="<?php print $link_path; ?>schoollife/eventcalender.php">イベントカレンダー</a></li>
            </ul>
            </div>
        </div>
      </li>
      <li><a href="<?php print $link_path; ?>invitation/"><img src="<?php print $link_path; ?>images/common/gnavi_invitation.gif" alt="入学について" /></a>
        <div class="dropdown wInvitation">
            <div class="dropdownBox">
            <div class="naviTit">
            <a href="<?php print $link_path; ?>invitation/" class="BgImageNone pl0">入学について<br>
            <img src="<?php print $link_path; ?>images/common/mnavInvitation.png" alt="入学について" style="float:left;" /></a>
            </div>
            <ul>
              <li><a href="<?php print $link_path; ?>invitation/entry.php">出願について</a></li>
              <li><a href="<?php print $link_path; ?>invitation/ao.php">AO入学について</a></li>
              <li><a href="<?php print $link_path; ?>invitation/flow.php">出願から合格までの流れ</a></li>
              <!--<li><a href="<?php print $link_path; ?>invitation/flow2.php">出願から入学までの手順</a></li>-->
              <li><a href="<?php print $link_path; ?>invitation/papers.php">出願書類記入方法</a></li>
              <li><a href="<?php print $link_path; ?>invitation/scholarship.php">学費サポート</a></li>
            </ul>
            </div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- / Gnavi-->
</div>
</header>
<!-- / header-->

<!-- fixedナビ -->
<nav id="fixedNav">
<ul>
	<li><a href="https://www.jikei-hospitality.ac.jp/event/f-shiryo.html" target="_blank" class="overBtn"><img src="<?php print $link_path; ?>images/common/btn_side_siryo.png" alt="資料請求"></a></li>
    <li><a href="<?php print $link_path; ?>event/" class="overBtn"><img src="<?php print $link_path; ?>images/common/btn_side_event.png" alt="お仕事体験（オープンキャンパス）" style="margin-left:18px;"></a></li>
</ul>
</nav>
<!-- /fixedナビ -->

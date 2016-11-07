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

<!-- シェアボタン [ここからコピー] -->
<div class="social-area-syncer">
	<ul class="social-button-syncer">
		<!-- Twitter -->
        <li class="sc-tw">    
		<a class="twitter-share-button" href="https://twitter.com/share" data-dnt="true">Tweet</a>
		</li>

		<!-- Facebook -->
		<li class="sc-fb">
        <script type="text/javascript" language="javascript">document.write('<div class="fb-like" data-href="' + location.href + '" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false"></div>');</script>
        </li>


        <!--■LINE■-->
        <li class="ml40">
            <!--LINEで送る用-->
            <script type="text/javascript" src="//media.line.me/js/line-button.js?v=20140411" ></script>
            <!-- // LINEで送る用-->
            <span> 
              <script type="text/javascript">
        new media_line_me.LineButton({"pc":false,"lang":"ja","type":"a"});
        </script> 
              </span>
          </li>
        <!--//■LINE■-->
    
    </ul>

<!-- Facebook用 -->
<div id="fb-root"></div>

<script type="text/javascript" src="<?php print $link_path; ?>js/sns_share.js"></script>
<!-- [head]内や、[body]の終了直前などに配置 -->
<script>
window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>

</div>
<!-- シェアボタン [ここまでコピー] -->

<p class="performanceAnnot textR small">※学園グループの実績をベースに掲載しています。実施予定も含みます。</p>

<footer> 
  <!--FooterTop-->
  <div id="FooterTop">
    <div class="Inner clearfix">
      <dl>
        <dt><a href="<?php print $link_path; ?>"><img alt="学校法人コミュニケーションアート 滋慶おもてなし＆ブライダル・観光専門学校 大阪堀江" src="<?php print $link_path; ?>images/common/footer_logo.png"></a></dt>
        <dd>〒550-0014　大阪市西区北堀江2-4-6<br />
          <strong>e-mail：</strong> <a href="mailto:info@jikei-hospitality.ac.jp">info@jikei-hospitality.ac.jp</a> <span class="icoFreeD">0120-947-718</span>　<!--FAX：XXX-XXX-XXXX--> 
        </dd>
      </dl>
      <ul id="FootBtns" class="clearfix">
        <li><a href="https://www.jikei-hospitality.ac.jp/event/f-shiryo.html" target="_blank"><img src="<?php print $link_path; ?>images/common/btnFooter_siryo.png" alt="資料請求"></a></li>
        <li><a href="<?php print $link_path; ?>event/"><img src="<?php print $link_path; ?>images/common/btnFooter_event.png" alt="体験入学"></a></li>
      </ul>
    </div>
  </div>
  <!-- / FooterTop--> 
  <!--FooterBottom-->
  <div id="FooterBottom">
    <ul>
      <li>
        <dl>
          <dt><a href="<?php print $link_path; ?>school/index.php">学校紹介</a></dt>
          <dd><a href="<?php print $link_path; ?>school/access.php">アクセスマップ</a></dd>
          <dd><a href="<?php print $link_path; ?>school/equipment.php">施設・設備</a></dd>
          <dd><a href="<?php print $link_path; ?>school/faq.php">よくある質問</a></dd>
          <dd><a href="<?php print $link_path; ?>school/link.php">リンク集</a></dd>
        </dl>
      </li>
      <li>
      <dl>
        <dt><a href="<?php print $link_path; ?>course/index.php">コース紹介</a></dt>
        <dd><a href="<?php print $link_path; ?>course/bridal.php">ブライダル総合コース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/bridal_planner.php">ブライダルプランナーコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/bridal_beauty.php">ブライダルスタイリスト＆<br />ビューティーコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/bridal_flower.php">ブライダルフラワー＆<br />コーディネートコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/hotel_management.php">ホテルコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/hotel_bridal.php">ホテル＆ブライダルコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/hotel_innsmanagement.php">ホテル＆旅館リゾートコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/sommelier.php">レストラン＆バーテンダーコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/hotel_abroad.php">ホテル留学コース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/travel.php">トラベル総合コース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/travel_management.php">トラベルカウンター＆<br />プランナーコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/tour_conductor.php">ツアーコンダクターコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/railroad.php">鉄道サービスコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/airline.php">エアライン総合コース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/cabin_attendant.php">キャビンアテンダントコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/ground_staff.php">グランドスタッフコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/ceremony_director.php">葬祭ディレクターコース</a></dd>
        <dd><a href="<?php print $link_path; ?>course/bridal_ceremony_management.php">セレモニー＆ブライダルコース</a></dd>
        </dl>
      </li>
      <li>
        <dl>
          <dt><a href="<?php print $link_path; ?>education/index.php">教育システム</a></dt>
          <!--<dd><a href="<?php print $link_path; ?>education/s-curriculum.php">ホスピタリティ基礎科目</a></dd>-->
          <dd><a href="<?php print $link_path; ?>education/s-curriculum.php">日本の伝統と文化</a></dd>
          <dd><a href="<?php print $link_path; ?>education/system.php">産学協同教育システム</a></dd>
          <dd><a href="<?php print $link_path; ?>education/w-curriculum.php">Wメジャーカリキュラム</a></dd>
          <dd><a href="<?php print $link_path; ?>education/overseas-training.php">海外教育システム</a></dd>
          <dd><a href="<?php print $link_path; ?>education/qualification.php">関連資格・検定一覧</a></dd>
        </dl>
        <dl>
          <dt><a href="<?php print $link_path; ?>job/index.php">就職サポート</a></dt>
          <dd><a href="<?php print $link_path; ?>job/internship.php">インターンシップ</a></dd>
          <dd><a href="<?php print $link_path; ?>job/explanation.php">合同企業説明会</a></dd>
          <dd><a href="<?php print $link_path; ?>job/support.php">卒業後サポート</a></dd>
          <dd><a href="<?php print $link_path; ?>job/career.php">サポート支援プログラム</a></dd>
        </dl>
      </li>
      <li>
        <dl>
          <dt><a href="<?php print $link_path; ?>schoollife/index.php">学園生活サポート</a></dt>
          <dd><a href="<?php print $link_path; ?>schoollife/dormitory.php">学生寮</a></dd>
          <dd><a href="<?php print $link_path; ?>schoollife/club.php">サークル活動</a></dd>
          <dd><a href="<?php print $link_path; ?>schoollife/health.php">慶生会クリニック</a></dd>
          <dd class="arrowTop"><a href="<?php print $link_path; ?>schoollife/ssc.php">スチューデントサービスセンター<br>
            （SSC）</a></dd>
          <dd><a href="<?php print $link_path; ?>schoollife/turning.php">進路変更プログラム</a></dd>
          <dd><a href="<?php print $link_path; ?>schoollife/career.php">キャリアセンター</a></dd>
        </dl>
        <dl>
          <dt><a href="<?php print $link_path; ?>invitation/index.php">入学について</a></dt>
          <dd><a href="<?php print $link_path; ?>invitation/entry.php">出願について</a></dd>
          <dd><a href="<?php print $link_path; ?>invitation/ao.php">AO入学について</a></dd>
          <dd><a href="<?php print $link_path; ?>invitation/flow.php">出願から合格までの流れ</a></dd>
          <!--<dd><a href="<?php print $link_path; ?>invitation/flow2.php">出願から入学までの手順</a></dd>-->
          <dd><a href="<?php print $link_path; ?>invitation/papers.php">出願書類記入方法</a></dd>
          <dd><a href="<?php print $link_path; ?>invitation/scholarship.php">学費サポート</a></dd>        </dl>
      </li>
      <li>
        <dl>
          <dt><a href="<?php print $link_path; ?>event/">オープンキャンパス</a></dt>
          <dd><a href="<?php print $link_path; ?>event/">お仕事体験</a></dd>
          <dd><a href="<?php print $link_path; ?>event/explanation/index.php">学校説明会</a></dd>
        </dl>
        <dl>
          <dt><a href="<?php print $link_path; ?>target/entry.php">入学希望者の方へ</a></dt>
          <dt><a href="<?php print $link_path; ?>target/society.php">大学生、社会人、フリーターの方へ</a></dt>
          <dt><a href="<?php print $link_path; ?>target/parent.php">保護者の方へ</a></dt>
          <!--<dt><a href="<?php print $link_path; ?>target/abroad.php">留学生の方へ</a></dt>-->
          <dt><a href="<?php print $link_path; ?>target/teacher.php">高等学校の先生方へ</a></dt>
          <dt><a href="<?php print $link_path; ?>target/company.php">企業の方へ</a></dt>
        </dl>
        <dl>
          <dt><a href="https://www.jikei-hospitality.ac.jp/event/f-shiryo.html" target="_blank">資料請求</a></dt>
        </dl>
      </li>
    </ul>
  </div>
  <!-- / FooterBottom--> 
  <!--FooterPolicy-->
  <div id="FooterPolicy">
    <ul>
      <li><a href="<?php print $link_path; ?>socialpolicy/">ソーシャルメディアポリシー</a></li>
      <li><a href="<?php print $link_path; ?>privacy">プライバシーポリシー</a></li>
      <!--<li><a href="<?php print $link_path; ?>"><img src="images/common/bnr_f_trust-e.gif" alt="TRUSTe 認証プライバシー" /></a></li>-->
    </ul>
  </div>
  <!-- / FooterPolicy--> 
  <!--FooterCopy-->
  <div id="FooterCopy">
    <small>&copy;JIKEI School of HOSPITALITY. All Rights Reserved.</small>
  </div>
  <!-- / FooterCopy--> 
</footer>

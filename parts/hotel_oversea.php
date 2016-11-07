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
<div id="OverSeaArea" class="mt50">
  <h3><img src="<?php print $link_path; ?>images/course/oversea/tit.gif" alt="ホテル＆リゾートワールド 海外留学制度 夢への3ステップ" /></h3>
  
  <!--1セット-->
  <div class="oneOverSea odd BDNone">
    <h4><img src="<?php print $link_path; ?>images/course/oversea/yer_01.png" alt="1年次" /></h4>
    <dl>
      <dt><img src="<?php print $link_path; ?>images/course/oversea/yer1_01.jpg" alt="セルフスタイリング講座" /></dt>
      <dd>セルフスタイリング<br />
        講座</dd>
    </dl>
    <dl>
      <dt><img src="<?php print $link_path; ?>images/course/oversea/yer1_02.jpg" alt="英語教育" /></dt>
      <dd>英語教育</dd>
    </dl>
    <dl>
      <dt><img src="<?php print $link_path; ?>images/course/oversea/yer1_03.jpg" alt="日本伝統文化 特別講義" /></dt>
      <dd>日本伝統文化<br />
        特別講義</dd>
    </dl>
    <dl>
      <dt><img src="<?php print $link_path; ?>images/course/oversea/yer1_04.jpg" alt="Wメジャーカリキュラム" /></dt>
      <dd>Wメジャー<br />
        カリキュラム</dd>
    </dl>
    <dl class="mr0">
      <dt><img src="<?php print $link_path; ?>images/course/oversea/yer1_05.jpg" alt="ホスピタイティコミュニケーション" /></dt>
      <dd>ホスピタイティ<br />
        コミュニケーション</dd>
    </dl>
  </div>
  <!-- / 1セット--> 
  
  <!--1セット-->
  <div class="oneOverSea">
    <div class="clearfix">
      <h4><img src="<?php print $link_path; ?>images/course/oversea/yer_02.png" alt="2年次" /></h4>
      <h5 id="titYer02">海外教育提携校にて業界で必要な英語力を学びインターンシップを通して、約６カ月間海外での経験を積みます。</h5>
    </div>
    <div class="areaQueensland">
      <h5><img src="<?php print $link_path; ?>images/course/oversea/queensland.png" alt="クイーンズランド大学" /></h5>
      <p class="mb20">オーストラリア第3の都市、<br />
        ブリスベンにあるクイーンズランド大学は<br />
        オーストラリアで最も評価の高い大学の一つ。</p>
      <ul class="contentCicle">
            <li>英語授業（レベル別、多国籍学生と同クラスでの授業）</li>
            <li>レベルに応じてホスピタリティ業界の専門英語を学びます。</li>
            <li>海外での業界インターンシップ</li>
      </ul>
    </div>
    <p class="mt20"><img src="<?php print $link_path; ?>images/course/oversea/photo_os.jpg" alt="海外留学写真" /></p>
    <p class="textR mt5">※クイーンズランド大学は、滋慶学園グループの教育提携校です。留学受入先は変更になる場合もあります。</p>
  </div>
  <!-- / 1セット--> 
  
  <!--1セット-->
  <div class="oneOverSea odd">
    <h4><img src="<?php print $link_path; ?>images/course/oversea/yer_03.png" alt="3年次" /></h4>
    <dl>
      <dt><img src="<?php print $link_path; ?>images/course/oversea/yer2_01.jpg" alt="インターンシップ" /></dt>
      <dd>インターンシップ</dd>
    </dl>
    <dl>
      <dt><img src="<?php print $link_path; ?>images/course/oversea/yer2_02.jpg" alt="企業プロジェクト" /></dt>
      <dd>企業プロジェクト</dd>
    </dl>
    <ul class="contentCicle">
      <li>キャリアセンターによる就職対策講座</li>
      <li>業界特別講義</li>
      <li>卒業進級制作</li>
    </ul>
  </div>
  <!-- / 1セット-->
  
  <p class="textC mt20"><img src="<?php print $link_path; ?>images/course/oversea/txt_graduate.gif" alt="卒業" /></p>
  <p class="textC mt20"><img src="<?php print $link_path; ?>images/course/oversea/txt_signon.gif" alt="ホスピタリティ業界への就職" /></p>
</div>

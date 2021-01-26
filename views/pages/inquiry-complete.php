<?php
  $step = 3;

  $breadcrumb = [
    [
      "link" => "/inquiry",
      "text" => "業務用（法人の方）ご注文・お問い合わせ",
    ],
    [
      "link" => false,
      "text" => "送信完了",
    ],
  ];
?>
<?php include './_inquiry-head.php'; ?>
  <div class="layout">
    <div class="complete-message">
      <p>お問い合わせいただき誠にありがとうございます。</p>
      <p>追って担当者よりご連絡させていただきます。</p>
      <br/>
      <p>3営業日経って、ご連絡がない場合は、お手数ですが下記宛にご連絡ください。</p>
      <br/>
      <br/>
      <p>岩谷マテリアル株式会社　大阪支店</p>
      <p>金属・コーティング本部</p>
      <p>担当：佐藤</p>
      <p></p>TEL：06-6261-1946</p>
    </div>
    <div class="button-wrapper">
      <a class="button button--black-ghost" href="home.php">＆Cトップへ</a>
    </div>
  </div>
<?php include './_inquiry-foot.php'; ?>
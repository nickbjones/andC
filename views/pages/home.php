<?php
  // required page data
  $pageName = "home";
  $metaData = [
    "title" => "＆C｜ブランドサイト―優れた樹脂コーティングをエクステリアに。機能的で美しく。",
    "description" => "樹脂コーティングのパイオニアとして、金属と樹脂の技術を融合・応用した商品をお客様にお届けいたします。商品の素材感・美しさをぜひ体感してください。",
    "keywords" => "",
  ];

  include('../../content/home.php');
?>

<?php include('../shared/head.php'); ?>
<div class="ns-home">
  <?php include('../shared/navigation.php'); ?>
  <div class="slider-container">
    <div id="slideshow">
      <?php foreach ($slides as $x => $slide) : ?>
        <div class="slide" style="background-image: url(<?= $IMAGESPATH . $slide ?>)">
          <div class="slide-content layout">
            <p class="slide-title">優れたコーティング技術を<br>エクステリアに。</p>
            <p class="slide-description">「ユニーク（独創性）×バリュー（価値）」をコンセプトに、<br>機能的で、より美しい商品をお届けいたします。</p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <div class="scroll">
      <p class="scroll__text">SCROLL</p>
      <div class="scroll__arrow"></div>
    </div>
  </div>
  <div class="section andc-background" style="background-image: url(<?= $IMAGESPATH ?>/home/logo-background.png)">
    <div class="layout">
      <h2 class="main-title txt-center">商品の素材感、美しさを体感してください</h2>
      <p>＆C（アンド ・ シー）は、視界を程よく遮るスチールメッシュの『ブラインドメタル』と、屋外でも長期間キレイな外観を保つ『耐候性密着コーティング技術』を生かしたエクステリア製品ブランドとして、2019年秋に誕生しました。私たちが得意とする樹脂コーティング（Coating）技術を用いて、お客様 (Customer)の心に寄り添い、心地よい(Comfortable) 空間を演出する商品をご提案してまいります。</p>
    </div>
  </div>
  <div class="section brown-background">
    <div class="layout">
      <h2>
        <p class="english-title txt-center font-roboto">PICK UP ITEM</p>
        <p class="main-title txt-center">ピックアップアイテム</p>
      </h2>
      <div class="pickup-item">
        <div class="flex-child txt-center hide-sp">
          <img class="image" src="<?= $IMAGESPATH ?>/home/pickup_item_1.png" alt="pickup_item_1">
          <img class="image" src="<?= $IMAGESPATH ?>/home/pickup_item_2.png" alt="pickup_item_2">
        </div>
        <div class="flex-child">
          <h3 class="description-head">室外機をオシャレに隠す、<br>お庭のコーディネイトの新提案。</h3>
          <p class="green-text">エアコン室外機カバー（ホワイト・ブラウン）</p>
          <div class="txt-center hide-pc">
            <img class="image" src="<?= $IMAGESPATH ?>/home/pickup_item_1.png" alt="pickup_item_1">
            <img class="image" src="<?= $IMAGESPATH ?>/home/pickup_item_2.png" alt="pickup_item_2">
          </div>
          <p class="text">一般的な室外機カバーは数年で劣化し、また買いなおすことになりがちですが、この室外機カバーは、材質は強度に優れたスチール製。</p>
          <p class="text">サビ・腐食に強い耐候性密着コーティングを採用しているため、長期間安心してご利用いただけます。</p>
          <p class="text">趣味でガーデニングをされる方や、オーナメントやイルミネーションで飾り付けをされる方におススメのシンプルで飽きのこないデザインです。</p>
          <div class="button-container">
            <a class="arrow-button" href="/products/exterior-unit">エアコン室外機カバー<br>商品詳細はこちら</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lineup-anchor" id="lineup">
    <div class="section lineup-wrapper grey-background">
      <div class="layout">
        <h2>
          <p class="english-title txt-center font-roboto">LINEUP</p>
          <p class="main-title txt-center">ラインナップ</p>
        </h2>
        <div class="lineup">
          <?php foreach ($lineup_articles as $article) : ?>
            <div class="article-wrapper">
              <div class="article">
                <div class="above-button">
                  <img class="image" src=<?= $IMAGESPATH . $article["Image"] ?>>
                  <div class="title"><?= $article["Title"] ?></div>
                  <div class="description"><?= $article["Description"] ?></div>
                </div>
                <div class="lineup__button button-container">
                  <a class="arrow-button" href="/products/exterior-unit">エアコン室外機カバー<br>商品詳細はこちら</a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <h2 class="layout">
      <p class="english-title txt-center font-roboto">TECHNOLOGY</p>
      <p class="main-title txt-center">技術へのこだわり</p>
    </h2>
    <div class="technology">
      <div class="layout">
        <p class="description">＆C（アンド・シー）を手掛ける岩谷マテリアル株式会社のコーティング事業は、樹脂コーティングのパイオニアとして、建築資材・家電製品・電設資材などの多くの分野で、金属と樹脂を融合・応用したモノづくりを行っています。コーティング後の素材感や美しさを保ち、耐候性や絶縁性など製品に応じた機能を付加して新たな魅力を引き出すことをテーマに、商品を開発してまいります。</p>
      </div>
      <div class="points">
        <div class="point point1">
          <div class="point__blue-bg">
            <img class="point__logo" src=<?= $IMAGESPATH . "/home/point1.png" ?>>
            <h3 class="point__title">厚い塗装膜が特徴の『耐候性密着コーティング』を得意としています。</h3>
            <p>私たちは流動浸漬塗装技法を用いて、耐候性密着コーティングを行っています。<br>この塗装方法は、昭和29年から半世紀以上の実績があり、環境負荷が少ない、サビに強く、滑らかで美しい塗膜が形成されます。</p>
          </div>
          <img class="point__image image" src=<?= $IMAGESPATH . "/home/technology1.png" ?>>
          <div class="point__square"></div>
        </div>
        <div class="point point2">
          <div class="point__blue-bg">
            <img class="point__logo" src=<?= $IMAGESPATH . "/home/point2.png" ?>>
            <h3 class="point__title">国内にある自社工場で製造しています。</h3>
            <p>岩谷マテリアル株式会社のコーティング事業は、国内３拠点、海外２拠点の製造部門を有し、＆C（アンド・シー）の商品群は国内工場にて製造しております。</p>
          </div>
          <img class="point__image image" src=<?= $IMAGESPATH . "/home/technology2.png" ?>>
          <div class="point__square"></div>
        </div>
        <div class="point point3">
          <div class="point__blue-bg">
            <img class="point__logo" src=<?= $IMAGESPATH . "/home/point3.png" ?>>
            <h3 class="point__title">皆さんの身近にあるものにも使われている技術です。</h3>
            <p>私たちの製品は、高速道路のフェンスをはじめ、エアコンの室外機部品や、コンビニの冷蔵ショーケースなどに使われています。</p>
          </div>
          <img class="point__image image" src=<?= $IMAGESPATH . "/home/technology3.png" ?>>
          <div class="point__square point__square-1"></div>
          <div class="point__square point__square-2"></div>
          <div class="point__square point__square-3"></div>
        </div>
        </div>
      </div>
      <div class="square-alone square-alone--variant hide-sp"></div>
      <div class="button-container layout">
        <a class="arrow-button" href="https://www.imcjpn.co.jp/about/profile.html" target="_blank">私たちについて<img class="external-link" src=<?= $IMAGESPATH . "/shared/new-window.png" ?>></a>
      </div>
    </div>
    <div class="layout">
      <h2>
        <p class="english-title txt-center font-roboto">NEWS</p>
        <p class="main-title txt-center">お知らせ</p>
      </h2>
      <div class="news">
        <?php foreach ($news_list as $news_item) : ?>
          <div class="news-item">
            <p class="news-item__date"><?= $news_item["Date"] ?></p>
            <p class="news-item__content"><?= $news_item["Content"] ?></p>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
  <?php include('../shared/shop-section.php'); ?>
</div>

<script type="text/javascript">
  $(document).ready(function() {

    $("#slideshow > div:gt(0)").hide();

    setInterval(function() {
      $('#slideshow > div:first')
        .fadeOut(2000)
        .next()
        .fadeIn(2000)
        .end()
        .appendTo('#slideshow');
    }, 15000);

  });
</script>

<?php include('../shared/foot.php'); ?>

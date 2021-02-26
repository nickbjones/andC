<?php
  // required page data
  $pageName = "product";

  $metaData = [
    "title" => "シンプルで長く使える室外機カバー（白・茶）｜業務用・一般用｜＆C－ブランドサイト",
    "description" => "サビ・劣化に強く、丈夫なエアコン室外機カバーです。積雪地域や日除け、省エネ効果に最適です。素材は、スチール製で、色は白（ホワイト）とブラウンの2種類ご用意。サイズは、標準サイズと大型室外機用をご用意しています。",
    "keywords" => "",
  ];

  $breadcrumb = [
    // [
    //   "link" => "/products",
    //   "text" => "PRODUCTS",
    // ],
    [
      "link" => false,
      "text" => "エアコン室外機カバー",
    ],
  ];

  include('../../content/product.php');
?>

<?php include('../shared/head.php'); ?>
<div class="ns-product page">
  <?php include('../shared/navigation.php'); ?>
  <div class="side-nav hide-sp">
    <div class="side-nav__inner">
      <div class="side-nav__inner-top">
        <p class="side-nav__title font-roboto">PRODUCTS</p>
        <?php foreach ($products as $product) : ?>
          <p class="side-nav__item"><a href="<?= $product["link"] ?>"><?= $product["text"] ?></a></p>
        <?php endforeach ?>
      </div>
      <div class="side-nav__inner-bottom">
        <a class="button button--blue" href="/contact">商品注文•お問い合わせ</a>
      </div>
    </div>
  </div>
  <div class="layout product-main">
    <?php include '../shared/breadcrumb.php'; ?>
    <h1 class="product-title">樹脂コーティング会社が本気で作った、サビ・劣化に強い、シンプルデザインのエアコン室外機カバー【ホワイト・ブラウン】【スチール製】</h1>
    <p class="product-description">場になじむ、シンプルモダンなデザイン。細部までこだわり長く使えるエアコン室外機カバーです。</p>
    <div class="product-slider">
      <div class="product-slider__button product-slider__button--left" onClick="previousSlide()"></div>
      <div class="product-slider__image-wrapper">
        <img class="product-slider__image" id="slide-image" onClick="showModal()">
      </div>
      <div class="product-slider__button product-slider__button--right" onClick="nextSlide()"></div>
    </div>
    <div class="sub-slides">
      <?php foreach ($slideImages as $x => $image) : ?>
        <div class="sub-slide">
          <div class="sub-slide__image" onClick="changeSlide(<?= $x ?>)" style="background-image:url(<?= $IMAGESPATH . $image ?>)"></div>
        </div>
      <?php endforeach ?>
    </div>
    <div class="product-buttons">
      <a class="arrow-button" href="/contact">一般のお客様<br>お問い合わせ</a>
      <a class="arrow-button" href="/inquiry">法人のお客様<br>お問い合わせ</a>
    </div>
    <div class="fashion">
      <h2 class="middle__title txt-center">おしゃれに隠し、長く使う</h2>
      <div class="fashion-block">
        <div class="fashion-block__img-container"><img class="fashion-block__img image" src=<?= $IMAGESPATH . "/product/oshare1.png" ?>></div>
        <div class="fashion-block__img-container"><img class="fashion-block__img image" src=<?= $IMAGESPATH . "/product/oshare2.png" ?>></div>
      </div>
    </div>
    <div class="features-section">
      <h2 class="middle__title txt-center">頑丈でサビや腐食に強い、室外機カバー</h2>
      <?php foreach ($features as $feature) : ?>
        <div class="feature">
          <div class="feature__images">
            <?php foreach ($feature["image"] as $image) : ?>
              <div class="feature__image-block">
                <img class="feature__image image" src=<?= $IMAGESPATH . $image["src"] ?>>
                <?php if ($image["caption"]) : ?>
                  <p class="feature__caption"><?= $image["caption"] ?></p>
                <?php endif ?>
              </div>
            <?php endforeach ?>
          </div>
          <div class="feature__text">
            <h3 class="feature__title font-noto-serif"><?= $feature["title"] ?></h3>
            <p class="feature__description"><?= $feature["description"] ?></p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <div class="table-section">
      <h2 class="middle__title txt-center">商品詳細</h2>
      <table class="table">
        <tbody>
          <tr>
            <th class="table__cell table__cell--header">商品名</th>
            <td class="table__cell">エアコン室外機カバー</td>
          </tr>
          <tr>
            <th rowspan="6">商品詳細</th>
            <td class="table__cell">
              <p class="txt-bold">サイズ</p>
              <p>　(通常サイズ)</p>
              <p>外寸:約 W93×D38.5×H75cm</p>
              <p>内寸:約 W86.5xD35.5×H66cm</p>
              <p>　(大型サイズ)</p>
              <p>外寸:約W106.5xD45.5×H94cm</p>
              <p>内寸:約W99.8×D42.5×H85cm</p>
            </td>
          </tr>
          <tr>
            <td class="table__cell">
              <p class="txt-bold">重量</p>
              <p>(通常サイズ)　約10kg</p>
              <p>(大型サイズ)　約15kg</p>
            </td>
          </tr>
          <tr>
            <td class="table__cell">
              <p class="txt-bold">天面パネル耐荷重</p>
              <p>約10kg(全サイズ共通)</p>
            </td>
          </tr>
          <tr>
            <td class="table__cell">
              <p class="txt-bold">材質</p>
              <p>本体:スチール(PEコーティング)</p>
              <p>ネジ・ガイドプレート:ステンレス</p>
              <p>アジャスター:ポリアミド・スチール有色クロメート</p>
              <p>結束バンド:ナイロン</p>
            </td>
          </tr>
          <tr>
            <td class="table__cell">
              <p class="txt-bold">付属品</p>
              <p>結束バンド×2本</p>
            </td>
          </tr>
          <tr>
            <td class="table__cell">
              <p class="txt-bold">生産国</p>
              <p>日本</p>
            </td>
          </tr>
          <tr>
            <th class="table__cell table__cell--header">備考</th>
            <td class="table__cell">
              <p>■組み立て式:プラスドライバーをご用意ください。</p>
              <p>【取扱説明書】はこちら <a class="link" href="../../assets/pdf/instruction.pdf" target="_blank">(通常サイズ)</a> <a class="link" href="../../assets/pdf/instruction-Lg.pdf" download="取り扱い説明書_
                大型.pdf">(大型サイズ)</a></p>
              <p>■天面には滑り止めやフチなどは付いておりません。 天面を棚としてご使用にな る場合は、上に載せる物の落下には十分ご注意ください。</p>
              </p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="product-buttons">
      <a class="arrow-button" href="/contact">一般のお客様<br>ご注文 ・ お問い合わせ</a>
      <a class="arrow-button" href="/inquiry">業務用(法人のお客様)<br>ご注文 ・ お問い合わせ</a>
    </div>
  </div>
  <?php include('../shared/shop-section.php'); ?>
  <div id="modal" class="modal">
    <div class="modal__content">
      <img id="modal-image" class="modal__image">
    </div>
  </div>
</div>

<script>
  const slideImages = <?= json_encode($slideImages) ?>;
  const imgPath = <?= json_encode($IMAGESPATH) ?>;
  const slider = document.getElementById("slide-image");
  const modal = document.getElementById("modal");
  const modalImage = document.getElementById("modal-image");

  let currentIndex = 0;

  changeSlide(currentIndex);

  function changeSlide(x) {
    currentIndex = x;
    slider.src = imgPath + slideImages[currentIndex];
  }

  function nextSlide() {
    currentIndex += 1;
    if (currentIndex === slideImages.length) {
      currentIndex = 0;
    }
    changeSlide(currentIndex);
  }

  function previousSlide() {
    currentIndex -= 1;
    if (currentIndex === -1) {
      currentIndex = slideImages.length - 1;
    }
    changeSlide(currentIndex);
  }

  function showModal() {
    if (<?= $showProductModal ?>) {
      modal.style.display = "block";
      modalImage.src = imgPath + slideImages[currentIndex];
    } else {
      console.log('product page modal disabled');
    }
  }

  if (<?= $showProductModal ?>) {
    modal.onclick = function(event) {
      modal.style.display = "none";
    }
  } else {
    console.log('product page modal disabled');
  }
</script>
<?php include('../shared/foot.php'); ?>

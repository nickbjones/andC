<div class="ns-shop-section">
  <div class="layout">
    <p class="english-title txt-center font-roboto">SHOP</p>
    <h2 class="main-title">
      <img class="main-title__logo" src=<?= $IMAGESPATH . "/shared/logo.png" ?>>
      <p class="main-title__text">が買えるショップ</p>
    </h2>
    <p class="description txt-center">下記テキストをクリックすると、外部リンクに遷移いたします。<br>ご購入に関するお問い合わせは、各店舗様にお願いいたします。</p>
    <div class="lists">
      <div class="list">
        <p class="list__title">エアコン室外機カバー</p>
        <p class="list__bullet">雑貨ショップドットコム様</p>
        <a class="list__link list__link--indent" href="https://item.rakuten.co.jp/zakkashop/31300/" target="_blank">エアコン室外機カバー</a>
        <a class="list__link list__link--indent" href="https://item.rakuten.co.jp/zakkashop/32419/" target="_blank">エアコン室外機カバー(大型)</a>
      </div>
    </div>
    <?php if ($pageName != 'home' && $pageName != 'contact') : ?>
      <div class="button-container">
        <a class="arrow-button" href="/">&C トップへ　</a>
      </div>
    <?php endif ?>
  </div>
</div>

<div class="ns-nav">
  <div class="layout">
    <div class="nav-wrapper">
      <?php if ($pageName == 'home') { ?>
        <h1 class="nav-h1">
          <a href="/"><img class="nav-h1__logo" src="<?= $IMAGESPATH ?>/shared/logo_lg.png" alt="andC logo"></a>
          <span class="nav-h1__text">庭と家との調和</span>
        </h1>
      <?php } else { ?>
        <div class="nav-h1">
          <a href="/"><img class="nav-h1__logo" src="<?= $IMAGESPATH ?>/shared/logo_lg.png" alt="andC logo"></a>
          <span class="nav-h1__text">庭と家との調和</span>
        </div>
      <?php } ?>
      <div class="nav-menu" id="nav-menu">
        <div class="nav-item">
          <a class="nav-item__item nav-item__link" href="/">TOP</a>
        </div>
        <div class="nav-item">
          <a class="nav-item__item nav-item__more-items hide-sp" href="/#lineup">PRODUCTS</a>
          <a class="nav-item__item nav-item__more-items hide-pc" href="/#lineup" id="nav-menu-products">PRODUCTS</a>
          <div class="nav-item__submenu" id="nav-menu-products-list">
            <?php foreach ($PRODUCTS as $product): ?>
              <a class="nav-item__submenu-link" href="<?= $product['url'] ?>"><?= $product['text'] ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="nav-item">
          <a class="nav-item__item nav-item__link" href="https://www.imcjpn.co.jp/about/profile.html" target="_blank">私たちについて<img class="external-link" src="<?= $IMAGESPATH ?>/shared/new-window.png"></a>
        </div>
        <div class="nav-item">
          <a class="nav-item__item nav-item__link" href="/inquiry">商品注文・お問い合わせ</a>
        </div>
      </div>
      <div class="overlay" id="overlay"></div>
      <div class="nav-ham" id="nav-ham">
        <span class="nav-ham__line"></span>
        <span class="nav-ham__line"></span>
        <span class="nav-ham__line"></span>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      // open/close mobile navigation
      const $navHam = $('#nav-ham');
      const $overlay = $('#overlay');
      const $navMenu = $('#nav-menu');
      const $navLinks = $('.nav-item__link');
      const $productsMenu = $('#nav-menu-products');
      const $productsMenuList = $('#nav-menu-products-list');

      function toggleMenu() {
        if ($navMenu.hasClass('is-open')) {
          $overlay.removeClass('is-open');
          $navMenu.removeClass('is-open').slideUp(100, 'linear');
        } else {
          $overlay.addClass('is-open');
          $navMenu.addClass('is-open').slideDown(100, 'linear');
        }
      }

      $navHam.on('click', toggleMenu);
      $overlay.on('click', toggleMenu);
      $navLinks.on('click', toggleMenu); // close the nav menu
    });
  </script>
</div>

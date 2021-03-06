<div class="ns-footer" id="footer">
  <div class="layout">
    <div class="footer-wrapper">
      <div class="footer-left">
        <p class="footer-left__text">庭と家との調和</p>
        <a href="/"><img class="footer-left__logo" src="<?= $IMAGESPATH ?>/shared/logo_lg.png" alt="andC logo"></a>
      </div>
      <div class="footer-right">
        <div class="footer-menu">
          <a class="footer-menu__link" href="/">TOP</a>
          <a class="footer-menu__link" href="/#lineup">PRODUCTS</a>
          <a class="footer-menu__link" href="https://www.imcjpn.co.jp/about/profile.html" target="_blank">私たちについて<img class="external-link" src="<?= $IMAGESPATH ?>/shared/new-window.png"></a>
          <a class="footer-menu__link" href="https://www.imcjpn.co.jp/policy/" target="_blank">プライバシーポリシー<img class="external-link" src="<?= $IMAGESPATH ?>/shared/new-window.png"></a>
          <a class="footer-menu__link" href="/inquiry">商品注文・お問い合わせ</a>
        </div>
      </div>
    </div>
    <p class="copyright font-roboto">Copyright © Iwatani Materials Corp</p>
  </div>
  <div class="scroll-to-top-button" id="scroll-to-top-button"></div>

  <script type="text/javascript">
    $(document).ready(function() {
      function scrollToTop() {
        $('html, body').animate({
          scrollTop: $('#scroll-to-top-anchor').offset().top
        }, 500);
      }

      function checkOffset() {
        const $scrollToTopBtn = $('#scroll-to-top-button');

        const footerHeight = $('#footer').offset().top;
        const scrollToTopBtnHeight = $scrollToTopBtn.height();
        const scrollPosition = $(document).scrollTop();

        if ((scrollPosition + window.innerHeight) < footerHeight) {
          $scrollToTopBtn.css({
            position: 'fixed',
            top: 'auto',
          });
        } else {
          $scrollToTopBtn.css({
            position: 'absolute',
            top: `${0 - scrollToTopBtnHeight}px`,
          });
        }
      }

      function showImages() {
        $('.image').each(function() {
          if ($(window).scrollTop() + $(window).height() - 50 > $(this).offset().top) {
            $(this).addClass('fadeIn');
          }
        })
      }

      showImages();

      $(document).on('scroll', function() {
        checkOffset();
        showImages();
      });

      $('#scroll-to-top-button').on('click', scrollToTop);
    });
  </script>
</div>
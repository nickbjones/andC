<div class="ns-footer" id="footer">
  <div class="layout">
    <div class="footer-wrapper">
      <div class="footer-left">
        <p class="footer-left__text">庭と家との調和</p>
        <a href="/"><img class="footer-left__logo" src="<?= $imgPath ?>/shared/logo_lg.png" alt="andC logo"></a>
      </div>
      <div class="footer-right">
        <div class="footer-menu">
          <a class="footer-menu__link" href="/">TOP</a>
          <a class="footer-menu__link" href="products">PRODUCTS</a>
          <a class="footer-menu__link" href="https://www.imcjpn.co.jp/about/profile.html" target="_blank">私たちについて<img class="external-link" src="<?= $imgPath ?>/shared/new-window.png"></a>
          <a class="footer-menu__link" href="https://www.imcjpn.co.jp/policy/" target="_blank">プライバシーポリシー<img class="external-link" src="<?= $imgPath ?>/shared/new-window.png"></a>
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
        if ($('#scroll-to-top-button').offset().top + $('#scroll-to-top-button').height() >= $('#footer').offset().top) {
          $('#scroll-to-top-button').css('position', 'absolute');
          $('#scroll-to-top-button').css('top', `${0 - $('#scroll-to-top-button').height()}px`);
        }
        if ($(document).scrollTop() + window.innerHeight < $('#footer').offset().top) {
          $('#scroll-to-top-button').css('position', 'fixed');
          $('#scroll-to-top-button').css('top', 'auto');
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

      $(document).scroll(function() {
        checkOffset();
        showImages();
      });

      $('#scroll-to-top-button').on('click', scrollToTop);
    });
  </script>
</div>
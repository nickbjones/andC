<?php include('../../settings.php'); ?>
<?php
  $ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
  if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
    $showGetBetterBrowserMessage = true;
  } else {
    $showGetBetterBrowserMessage = false;
  }
?>
<!doctype html>
<html lang="jp">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!-- meta -->
  <title><?= $metaData['title'] ?></title>
  <meta name="description" content="<?= $metaData['description'] ?>">
  <meta name="keywords" content="<?= $metaData['keywords'] ?>">
  <!-- assets -->
  <link rel="stylesheet" type="text/css" href="../../assets/styles/css/all_styles.css">
  <link rel="shortcut icon" sizes="196x196" href="../../assets/images/shared/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../../assets/images/shared/favicon.png">
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TS2LD28');</script>
  <!-- End Google Tag Manager -->
  <script type="text/javascript" src="../../assets/js/jquery-3.5.1.min.js"></script>
</head>
<body id="scroll-to-top-anchor">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS2LD28" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?= $showGetBetterBrowserMessage ? '<div class="get-a-better-browser">For the best experience, please load this page in a modern browser.</div>' : ''; ?>
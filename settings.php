<?php
  /* environments */
  $ENV = [
    "test" => "/test/2021-02-28",
    "prod" => "",
  ];

  /* set root directory */
  $ROOTDIR = $ENV["prod"];


  /* set common paths */
  $ASSETSPATH = $ROOTDIR."/assets";
  $IMAGESPATH = $ASSETSPATH."/images";


  /* other settings */

  /* enable/disable the product page modal */
  $showProductModal = 'true';

?>

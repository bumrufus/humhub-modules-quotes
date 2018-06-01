<?php

use humhub\widgets\PanelMenu;
use yii\helpers\Html;

\humhub\modules\quotes\assets\Assets::register($this);
?>

<div class="panel panel-default" id="quotes">
    <?= PanelMenu::widget(['id' => 'quotes']); ?>

    <div class="panel-heading">
        <i class="fa fa-comment"></i>&nbsp;<?= $title; ?>
    </div>
    <div class="panel-body">
        <div id="owlRandom" class="owl-carousel" style="height:<?= $height; ?>px !important">
            <span class="item"><span class="message"><?= $titlequote1; ?></span><br><br><span class="writer"><?= $titlewriterquote1; ?></span></span>
            <span class="item"><span class="message"><?= $titlequote2; ?></span><br><br><span class="writer"><?= $titlewriterquote2; ?></span></span>
            <span class="item"><span class="message"><?= $titlequote3; ?></span><br><br><span class="writer"><?= $titlewriterquote3; ?></span></span>
            <span class="item"><span class="message"><?= $titlequote4; ?></span><br><br><span class="writer"><?= $titlewriterquote4; ?></span></span>
            <span class="item"><span class="message"><?= $titlequote5; ?></span><br><br><span class="writer"><?= $titlewriterquote5; ?></span></span>
            <span class="item"><span class="message"><?= $titlequote6; ?></span><br><br><span class="writer"><?= $titlewriterquote6; ?></span></span>
            <span class="item"><span class="message"><?= $titlequote7; ?></span><br><br><span class="writer"><?= $titlewriterquote7; ?></span></span>
            <span class="item"><span class="message"><?= $titlequote8; ?></span><br><br><span class="writer"><?= $titlewriterquote8; ?></span></span>
            <span class="item"><span class="message"><?= $titlequote9; ?></span><br><br><span class="writer"><?= $titlewriterquote9; ?></span></span>
            <span class="item"><span class="message"><?= $titlequote10; ?></span><br><br><span class="writer"><?= $titlewriterquote10; ?></span></span>
            <span class="item"><span class="message"><?= $titlequote11; ?></span><br><br><span class="writer"><?= $titlewriterquote11; ?></span></span>
            <span class="item"><span class="message"><?= $titlequote12; ?></span><br><br><span class="writer"><?= $titlewriterquote12; ?></span></span>
        </div>
    </div>
</div>

<script>
$(document).on('ready pjax:success', function() {
  var owl = $('#owlRandom');

  if (!owl.length) {
    return;
  }

  owl.owlCarousel({
    loop: true,
    callbacks:true,
    autoplay: true,
    autoplayTimeout: 50000,
    items: 1,
    nav: false,
    autoplayHoverPause: false,
    animateOut: 'fadeOutDown',
    animateIn: 'fadeInDown',
    onInitialize: function(element) {
      owl.children().sort(function() {
        return Math.round(Math.random()) - 0.5;
      }).each(function() {
        $(this).appendTo(owl);
      });
    },
  });
});    
</script>

<?php

use yii\helpers\Html;

\humhub\modules\quotes\assets\Assets::register($this);
?>

<script>
$(document).on('humhub:ready', function() {
 var owl = $('#owlRandom');

 if(!owl.length) {
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
  onInitialize : function(element){
   owl.children().sort(function(){
    return Math.round(Math.random()) - 0.5;
   }).each(function(){
    $(this).appendTo(owl);
   });
  },
 });
});
	
</script>

<div class="panel panel-default" id="quotes">
    <?php echo \humhub\widgets\PanelMenu::widget(array('id' => 'quotes')); ?>

    <div class="panel-heading">
        <i class="fa fa-comment"></i>&nbsp;<?php echo $title; ?>
    </div>
    <div class="panel-body">
        <div id="owlRandom" class="owl-carousel" style="height:<?php echo $height; ?>px!important">
	  <span class="item"><span class="message"><?php echo $titlequote1; ?></span><br><br><span class="writer"><?php echo $titlewriterquote1; ?></span></span>
	  <span class="item"><span class="message"><?php echo $titlequote2; ?></span><br><br><span class="writer"><?php echo $titlewriterquote2; ?></span></span>
	  <span class="item"><span class="message"><?php echo $titlequote3; ?></span><br><br><span class="writer"><?php echo $titlewriterquote3; ?></span></span>
	  <span class="item"><span class="message"><?php echo $titlequote4; ?></span><br><br><span class="writer"><?php echo $titlewriterquote4; ?></span></span>
	  <span class="item"><span class="message"><?php echo $titlequote5; ?></span><br><br><span class="writer"><?php echo $titlewriterquote5; ?></span></span>
	  <span class="item"><span class="message"><?php echo $titlequote6; ?></span><br><br><span class="writer"><?php echo $titlewriterquote6; ?></span></span>
	  <span class="item"><span class="message"><?php echo $titlequote7; ?></span><br><br><span class="writer"><?php echo $titlewriterquote7; ?></span></span>
	  <span class="item"><span class="message"><?php echo $titlequote8; ?></span><br><br><span class="writer"><?php echo $titlewriterquote8; ?></span></span>
	  <span class="item"><span class="message"><?php echo $titlequote9; ?></span><br><br><span class="writer"><?php echo $titlewriterquote9; ?></span></span>
	  <span class="item"><span class="message"><?php echo $titlequote10; ?></span><br><br><span class="writer"><?php echo $titlewriterquote10; ?></span></span>
	  <span class="item"><span class="message"><?php echo $titlequote11; ?></span><br><br><span class="writer"><?php echo $titlewriterquote11; ?></span></span>
	  <span class="item"><span class="message"><?php echo $titlequote12; ?></span><br><br><span class="writer"><?php echo $titlewriterquote12; ?></span></span>
</div>
    </div>
</div>



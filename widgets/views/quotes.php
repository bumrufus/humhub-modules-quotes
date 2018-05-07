<?php

use yii\helpers\Html;

\humhub\modules\quotes\assets\Assets::register($this);
?>


<link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.css">
<link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.css">
<link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">

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

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.js"></script>

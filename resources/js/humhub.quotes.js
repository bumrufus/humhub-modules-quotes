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


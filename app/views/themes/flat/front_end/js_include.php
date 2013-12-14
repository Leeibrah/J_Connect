<!-- js placed at the end of the document so the pages load faster -->
<?php $bases_assets="assets/themes/flat/frontend/template_content/"; ?>

    <script src='<?=asset("{$bases_assets}js/jquery.js")?>'></script>
    <script src='<?=asset("{$bases_assets}js/jquery-1.8.3.min.js")?>'></script>
    <script src='<?=asset("{$bases_assets}js/bootstrap.min.js")?>'></script>
    <script type="text/javascript" src='<?=asset("{$bases_assets}js/hover-dropdown.js")?>'></script>
    <script defer src='<?=asset("{$bases_assets}js/jquery.flexslider.js")?>'></script>
    <script type="text/javascript" src='<?=asset("{$bases_assets}assets/bxslider/jquery.bxslider.js")?>'></script>
    <script type="text/javascript" src='<?= asset("{$bases_assets}js/jquery.parallax-1.1.3.js")?>'></script>
    <script src='<?=asset("{$bases_assets}js/jquery.easing.min.js")?>'></script>
    <script src='<?=asset("{$bases_assets}js/link-hover.js")?>'></script>
    <script src='<?=asset("{$bases_assets}assets/fancybox/source/jquery.fancybox.pack.js")?>'></script>
    <script type="text/javascript" src='<?=asset("{$bases_assets}assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js")?>'></script>
    <script type="text/javascript" src='<?=asset("{$bases_assets}assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js")?>'></script>
    <!--common script for all pages-->
    <script src='<?=asset("{$bases_assets}js/common-scripts.js")?>'></script>
    <script src='<?=asset("{$bases_assets}js/revulation-slide.js")?>'></script>
  <script>
      RevSlide.initRevolutionSlider();
      $(window).load(function() {
          $('[data-zlname = reverse-effect]').mateHover({
              position: 'y-reverse',
              overlayStyle: 'rolling',
              overlayBg: '#fff',
              overlayOpacity: 0.7,
              overlayEasing: 'easeOutCirc',
              rollingPosition: 'top',
              popupEasing: 'easeOutBack',
              popup2Easing: 'easeOutBack'
          });
      });
      $(window).load(function() {
          $('.flexslider').flexslider({
              animation: "slide",
              start: function(slider) {
                  $('body').removeClass('loading');
              }
          });
      });
      //    fancybox
      jQuery(".fancybox").fancybox();
  </script>

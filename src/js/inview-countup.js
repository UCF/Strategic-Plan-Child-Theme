(function ($) {

  $('.count-up')
    .each(function () {
      const $elem = $(this);

      // If this .count-up elem has the .inview-watch class,
      // destroy existing countUp plugin data so we can
      // reinstantiate it manually:
      if ($elem.hasClass('inview-watch')) {
        $.removeData($elem.get(0));
        $elem.on('inview', () => {
          $elem.countUp();
        });
      }
    });

}(jQuery));

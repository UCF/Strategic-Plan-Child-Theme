(function ($) {

  const $watchableElems = $('.inview-watch');
  const observerOptions = {};
  let observer = null;


  function toggleVisibleClass(elem) {
    elem.className += ' inview-visible';
  }

  function inviewObserve(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        $(entry.target).trigger('inview');
        toggleVisibleClass(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }

  function inviewInit() {
    if (!$watchableElems.length) {
      return;
    }

    // Graceful degredation for browsers that
    // don't support IntersectionObserver:
    if (!('IntersectionObserver' in window) ||
      !('IntersectionObserverEntry' in window) ||
      !('intersectionRatio' in window.IntersectionObserverEntry.prototype)
    ) {
      $watchableElems.each(function () {
        const elem = $(this).get(0);
        toggleVisibleClass(elem);
      });
    } else {
      observer = new IntersectionObserver(inviewObserve, observerOptions);

      $watchableElems.each(function () {
        const elem = $(this).get(0);
        observer.observe(elem);
      });
    }
  }

  inviewInit();

}(jQuery));


/*!
 * jQuery Peekaboo 0.1.1
 *
 * @dependency jQuery 1.7+
 * @author Uniba Inc.
 * @link https://github.com/uniba/jquery-peekaboo
 * @license MIT License
 */

(function(window, document, $) {

  var $window = $(window)
    , els = [];

  $.fn.peekaboo = function(options) {
    var args = [].slice.call(arguments);
    
    options = options || {};

    if (args.length && 'function' === typeof args[0]) {
      options = {
          onAppear: args[0]
        , onDisappear: args[1]
      };
    }

    return this.each(function() {
      els.push($(this)
        .on('appear', options.onAppear || $.noop)
        .on('disappear', options.onDisappear || $.noop)
        .data('pkb-offset', options.offset || 0)
      );
    });
  };
  
  $window.on('scroll.peekaboo resize.peekaboo', function(e) {
    $.each(els, function() {
      var $elem = this
        , offset = $elem.data('pkb-offset');
      if ($window.scrollTop() < $elem.offset().top + $elem.height() - offset
        && $elem.offset().top < $window.scrollTop() + $window.height() - offset) {
        if ('appeared' !== $elem.data('pkb-state')) {
          $elem.data('pkb-state', 'appeared').trigger('appear', e);
        }
      }
      else {
        if ('disappeared' !== $elem.data('pkb-state')) {
          $elem.data('pkb-state', 'disappeared').trigger('disappear', e);
        }
      }
    });
  });

}).call(this, window, document, jQuery);

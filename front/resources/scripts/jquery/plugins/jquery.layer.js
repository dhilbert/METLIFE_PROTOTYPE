;
(function($) {

'use strict';

var $window = $(window),
	$document = $(document),
	$html = null,
	$body = null,
	layer = 'layer',
	focusFilter = 'a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, *[tabindex], *[contenteditable]',
	defaults = {
		activeHtmlClass: 'show-layer',
		activeLayerClass: 'active',
		status: 'open',
		scrollElements: 'body',
		dim: true,
		timer: 0,
		timerFn: null,
		template: null
	},
	hasTouch = 'ontouchstart' in window;

var Layer = function(element, options) {
	$html = $('html');
	$body = $('body');

	this.$element = $(element);
	this.options = $.extend(true, {}, defaults, options || {});
	this._defaults = defaults;
	this.scrollTop = 0;

	this.init();
};

Layer.prototype = {
	init: function() {
		var that = this;

		that.$scrollElements = $(that.options.scrollElements);
		that.$element.on('click.layer', function(e) {
			e.preventDefault();

			if(that.$layer.hasClass(that.options.activeLayerClass)) {
				that.close();
			} else {
				that.open();
			}
		});

		that.options = $.extend(true, {}, that.options, that.$element.data().options || {});

		if(that.options.template !== null) {
			that.$layer = $(that.options.template).appendTo('body');

			that.options.after && that.options.after();
		} else if(that.$element.data('target') !== undefined) {
			that.$layer = $(that.$element.data('target'));
		} else {
			that.$layer = that.$element;
			that.open();
			that.$element.off('click.layer');
		}

		that.$element.trigger('init', [that]);
	},
	open: function() {
		var that = this,
			scrollbarWidth = $.utils.scrollbarWidth();

		that.scrollTop =  $html.scrollTop() || window.pageYOffset;
		that.$scrollElements.css({ paddingRight: scrollbarWidth });

		if(that.$layer.hasClass(that.options.activeLayerClass)) {
			that.close();
		} else {
			that.$layer.addClass(that.options.activeLayerClass).trigger('layer.open', that);
		}
		that.$layer.data('layer', that);

		that.$element.addClass('btn-current-layer');

		//TODO: 임시
		that.$layer.find('.dim').css({
			width: 'auto',
			right: scrollbarWidth
		});

		that.$close = that.$layer.find('[data-trigger="layer-close"]');
		that.$close.on('click.layer', function(e) {
			e.preventDefault();

			that.close();
		});

		if(that.options.timer > 0) {
			clearTimeout(that.options.timerFn);
			that.options.timerFn = setTimeout(function() {
				that.close();
				clearTimeout(that.options.timerFn);
			}, that.options.timer);
		}

		if(that.options.dim === true && that.options.timer <= 0) {
			$html.addClass(that.options.activeHtmlClass).attr('data-layer-target', that.$element.data('target'));
			that.$dim = $('<i class="layer-dim" />').appendTo('.container');
			setTimeout(function() {
				that.$dim.addClass('fade');

				$document.on('click.layer', function(e) {
					var $target = $(e.target);

					if($target.hasClass('layer-wrap') && $target.closest('.layer-toast').length > 0) { //TODO: 임시
						that.close();
					}

					if($target.closest(that.$layer).length > 0 || $target[0] === that.$element[0] || $target.closest(that.$element).length > 0 || $target.closest('.layer-toast').length > 0) {
						//return false;
					} else {
						that.close();
					}
				});
			});
		}

		if(hasTouch) {
			$body.css({
				position: 'fixed',
				top: that.scrollTop * -1,
				boxSizing: 'border-box',
				width: '100%'
			});
		}

		that.keyEvents();
	},
	close: function() {
		var that = this;

		function layerClose() {
			if(that.$dim) that.$dim.remove();
		}

		that.$element.removeClass('btn-current-layer');

		//that.$close.off('click.layer');
		that.$layer.removeData('layer');
		that.$element.trigger('focus');
		that.$layer.removeClass(that.options.activeLayerClass).trigger('layer.close', that);
		if(that.options.template !== null) {
			that.$layer.remove();
		}

		if(that.options.timer <= 0) {
			$html.removeClass(that.options.activeHtmlClass);
			that.$scrollElements.css({ paddingRight: '' });
			$document.off('click.layer');
		}

		if(that.options.dim === true && (that.$dim && parseFloat(that.$dim.css('transition-duration') || 0) > 0)) {
			that.$dim.removeClass('fade').one('transitionend', layerClose);
		} else {
			layerClose();
		}
		$html.removeAttr('data-layer-target');

		clearTimeout(that.options.timerFn);

		if(hasTouch) {
			$body.css({
				position: '',
				top: '',
				boxSizing: '',
				width: ''
			});
			$('html, body').scrollTop(that.scrollTop);
			// .scrollTop(that.scrollTop);
		}
	},
	keyEvents: function() {
		var that = this,
			$first = null,
			$last = null;

		that.$focusElements = that.$layer.find('*').filter(focusFilter).filter(':not([tabindex="-1"])').filter(':visible');
		that.$focusElements.last().off('keydown.layer-focus').on('keydown.layer-focus', function(e) {
			if(e.keyCode === 9 && !e.shiftKey) {
				e.preventDefault();
				$first.focus();
			}
		});
		that.$focusElements.first().off('keydown.layer-focus').on('keydown.layer-focus', function(e) {
			if(e.keyCode === 9 && e.shiftKey) {
				e.preventDefault();
				$last.focus();
			}
		});

		$first = that.$focusElements.first();
		//$first.trigger('focus');
		$last = that.$focusElements.last();

		$window.on('keyup.layer-close', function(e) {
			if(e.keyCode === 27) {
				that.close();
			}
		});
	}
};

$.fn[layer] = function(options) {
	return this.each(function () {
		if(!$.data(this, layer)) {
			$.data(this, layer, new Layer(this, options));
		}
	});
};

$(function() {
	$('[data-trigger="layer"]').layer();
});

})(jQuery);
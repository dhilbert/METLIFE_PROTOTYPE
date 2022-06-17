(function() {
	var $window = $(window),
		$document = $(document),
		_maxWidth = 960,
		_currentWidth = document.documentElement.offsetWidth,
		isMobile = _maxWidth > _currentWidth;

	function init() {
		$('html').removeClass('no-js');
		
		setGlobalNav();
		setGlobalMegaMenu();
		setTabMenu();

		pageLoad();
	}
	
	$window.on('load.response resize.response', pageLoad);
	
	function pageLoad() {
		_currentWidth = document.documentElement.offsetWidth;
		isMobile = _maxWidth > _currentWidth;

		$window.trigger('response');
	}


	function documetEvents($target, callback) {
		$document.off('click.document').on('click.document', function(e) {
			if($(e.target).closest($target).length > 0) {

			} else {
				$document.off('click.document');
				if(callback) {
					callback();
				}
			}
		});
	}


	//gnb
	function setGlobalNav() {
		var $gnb = $('.gnb-wrap .gnb'),
			$depth1 = $gnb.find('.depth-1 a');

		function closeGnb() {
			$gnb.removeClass('show');
		}

		function gnbEvents(e) {
			$(this).closest('.gnb').toggleClass('show');
			documetEvents($(this).closest('.gnb'), closeGnb);

			e.preventDefault();
		}

		$window.on('response.gnb', function() {
			
			if(isMobile) {
				$depth1.off('click.mobile-gnb').on('click.mobile-gnb', gnbEvents);
			} else {
				$depth1.off('click.mobile-gnb');
			}
		});
	}


	function setGlobalMegaMenu() {
		var $depth1 = $('.megamenu-menubox-list1 > div > a');

		$depth1.on('click', function(e) {
			var $dropdownWrap = $(this).closest('div'),
				$dropdown = $dropdownWrap.find('.megamenu-dropdown');

			if($dropdownWrap.hasClass('active')) {
				$dropdownWrap.removeClass('active')
				$dropdown.removeAttr('style');
			} else {
				$dropdownWrap.addClass('active');
				$dropdown.css({
					height: $dropdown.find('ul').outerHeight()
				});
			}

			if($dropdown.length > 0) {
				e.preventDefault();
			}
		});


		$window.on('response.megamenu', function() {
			if(isMobile) {

			} else {

			}
		});
	}


	//tab
	function setTabMenu() {
		var $tab = $('.tab-menu');

		function tabEvents(e) {
			$tab.toggleClass('show');
			documetEvents($tab, closeTab);
			if($(e.target).closest('li').hasClass('active')) {
				e.preventDefault();
			}
		}

		function closeTab() {
			$tab.removeClass('show');
		}

		$window.on('response.tab', function() {
			if(isMobile) {
				$tab.off('click.mobile-tab').on('click.mobile-tab', 'a', tabEvents);
			} else {
				$tab.off('click.mobile-tab');
			}
		});
	}

	$(init);
})();
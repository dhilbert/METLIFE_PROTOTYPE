(function() {
	var $window = $(window);

	$window.on('scroll', function() {
		var _scrollTop = document.documentElement.scrollTop || window.pageYOffset;

		if(_scrollTop > 0) {
			$('.header').addClass('fixed');
			$('html').addClass('scroll-top');
		} else {
			$('.header').removeClass('fixed');
			$('html').removeClass('scroll-top');
		}
	});

	$window.on('load', function(){
		$('img').each(function() {
			if(!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
				$(this).addClass('hidden');
			}
		});
	});

	$(function() {
		$('.link-list .label').on('click', function(e) {
			var $window = $(window),
				$document = $(document),
				$list = $(this).closest('.link-list');

			$('.link-list').removeClass('active');

			if ($list.hasClass('active')) {
				$list.removeClass('active');
			} else {
				$list.addClass('active');
			}

			$window.off('resize.document').on('resize.document', function() {
				$list.removeClass('active');
				$window.off('resize.document');
				$document.off('click.document');
			});

			$document.off('click.document').on('click.document', function (evt) {
				if ($(evt.target).closest('.link-list')[0] == $list[0]) {
				} else {
					$list.removeClass('active');
					$document.off('click.document');
				}
			});

			e.preventDefault();
		});

		$('.btn-gotop').on('click', function(e) {
			$('html, body').animate({
				scrollTop: 0
			});
			e.preventDefault();
		});

		$('video').on('ended', function() {
			$(this)[0].load();
		});

		$(".business-wrap .box-wrap-information .box-cont-tit").on("click",function(e){
			$(this).parent().siblings().find(".box-cont-tit").removeClass("on");
			$(this).parent().siblings().find(".box-cont-list").slideUp();
			if($(this).next().is(":visible")){
				$(this).removeClass("on");
				$(this).next().slideUp();
			}
			else{
				$(this).addClass("on");
				$(this).next().slideDown();
			}
		});


	});

})();
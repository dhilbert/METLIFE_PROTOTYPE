$(function() {
	var $visual = $('.section-visual'),
		$visualList = $visual.find('.slide-list'),
		$visualControls = $visual.find('.slide-controls'),
		$visualPlay = $visualControls.find('.btn-play'),
		$visualPause = $visualControls.find('.btn-pause');

	$visualList.on('init', function(e, slide) {

		setTimeout(function() {
			var _video = slide.$slides.eq(slide.currentSlide).find('video');
			if(_video.length > 0) {
				_video[0].play();
			}
		}, 1);

		$visualPlay.on('click', function() {
			slide.play();
			$visualPause.show();
			$(this).hide();
		});
		$visualPause.on('click', function() {
			slide.pause();
			$(this).hide();
			$visualPlay.show();
		});

	}).on('beforeChange', function(e, slide, currentIndex, nextIndex) {
		var _video = slide.$slides.eq(currentIndex).find('video');

		if(_video.length > 0) {
			_video[0].pause();
		}
	}).on('afterChange', function(e, slide, currentIndex) {
		var _video = slide.$slides.eq(currentIndex).find('video');

		if(_video.length > 0) {
			_video[0].currentTime = 0;
			_video[0].play();
		}
	}).slick({
		dots: true,
		infinite: true,
		speed: 500,
		slidesToShow: 1,
		adaptiveHeight: false,
		autoplay: true,
		pauseOnHover: false,
		pauseOnFocus: false,
		fade: true,
		cssEase: 'linear',
		appendDots: $visualControls
	});

	//-------------------

	var $activity = $('.section-activity'),
		$activityList = $activity.find('.slide-list'),
		$activityControls = $activity.find('.slide-controls'),
		$activityPaging = $activityControls.find('.slide-paging'),
		$activityPlay = $activityControls.find('.btn-play'),
		$activityPause = $activityControls.find('.btn-pause');

	$activityList.on('init', function(e, slide) {
		$activityPaging.html('<strong>01</strong> / <span>0'+ slide.slideCount +'</span>');

		$activityPlay.on('click', function() {
			slide.play();
			$activityPause.show();
			$(this).hide();
		});
		$activityPause.on('click', function() {
			slide.pause();
			$(this).hide();
			$activityPlay.show();
		});

		/*20200403추가s*/
		$('.slick-active .counter').counterUp({
			delay: 10,
			time: 1000
		});
		/*20200403추가end*/

	}).on('afterChange', function(e, slide, currentIndex) {
		$activityPaging.html('<strong>0' + (currentIndex + 1) + '</strong> / <span>0'+ slide.slideCount +'</span>');

		$('.slick-active .counter').counterUp({
			delay: 10,
			time: 1000
		});
	}).slick({
		dots: false,
		infinite: true,
		speed: 500,
		slidesToShow: 1,
		adaptiveHeight: true,
		autoplay: true,
		pauseOnHover: false,
		pauseOnFocus: false,
		fade: true,
		cssEase: 'linear'
	});

	// var sticky = new Waypoint.Sticky({
	// 	element: $('.header-top')[0]
	// });

	$('.section').waypoint({
		handler: function(direction) {
			this.element.dataset.direction = direction;
		}
	}, {
		offset: '80%'
	});
});
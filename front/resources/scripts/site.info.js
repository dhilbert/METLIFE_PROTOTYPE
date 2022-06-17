(function(window, document) {
	var docEl = document.documentElement,
		baseFontPercent = 100;


	var setFontSize = function() {
		var fontSizeVal = parseFloat((docEl.offsetWidth / 480) * baseFontPercent); //docEl.clientWidth

		fontSizeVal = (fontSizeVal >= 100) ? 100 : fontSizeVal;
		docEl.style.fontSize = fontSizeVal + '%';
	};

	setFontSize();
	window.addEventListener('resize', setFontSize);
})(window, document);
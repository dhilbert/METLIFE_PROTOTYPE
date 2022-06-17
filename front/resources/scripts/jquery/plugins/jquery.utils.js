;
(function($) {

'use strict';

var $html = $('html');

$.utils = {
	getParams: function() {
		/*
			* @return $.utils.getParams()['params'] || $.utils.getParams()
			* */
		function urldecode(str) {
			return decodeURIComponent((str + '').replace(/\+/g, '%20'));
		}

		function transformToAssocArray(prmstr) {
			var params = {},
				prmarr = prmstr.split("&");

			for (var i = 0; i < prmarr.length; i++) {
				var tmparr = prmarr[i].split("=");
				params[tmparr[0]] = urldecode(tmparr[1]);
			}
			return params;
		}

		var prmstr = window.location.search.substr(1);

		return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
	},
	scrollbarWidth: function() {
		var a = $('<div/>', {
				style: 'position:absolute; top:-9999px; width:50px; height:50px; overflow:scroll;'
			}).appendTo('body'),
			b = a[0].offsetWidth - a[0].clientWidth;

		return a.remove(), b;
	},
	layerTemplate: function() {
		return '<div class="layer-wrap">'
			+ '<div class="layer">'
				+ '<div class="layer-content">'
					+ '<div class="layer-header">'
						+ '<p class="layer-title"><i class="icon icon-global-logo"></i></p>'
					+ '</div>'
					+ '<div class="layer-body"></div>'
				+ '</div>'
				+ '<button type="button" class="btn btn-layer-close" data-trigger="layer-close" ><i class="icon icon-layer-close"></i><span class="hidden">닫기</span></button>'
			+ '</div>'
			+ '<i class="dim" data-trigger="layer-close"></i>'
		+ '</div>';
	}
};

})(jQuery);
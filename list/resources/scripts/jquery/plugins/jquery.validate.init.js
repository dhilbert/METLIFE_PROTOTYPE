if ($.type($.fn.validate) === 'function') {

	var COMPLEX_TYPE = ['userId', 'userPw', 'equalTo', 'eng', 'kor', 'kornum', 'kornumblank', 'datePeriod', 'dateMaxPeriod', 'dateRecentPeriod', 'numberdash', 'ignorebusinessno'],
		userIdValidToMinLength = 6,
		userAgent = navigator.userAgent,
		isiOS = /iPhone|iPad|iPod/i.test(userAgent);

	$.extend($.validator.messages, {
		required: '을(를) 입력하세요.',
		remote: '이 항목을 수정해주세요.',
		regex: '은(는) 올바른형식으로 입력해주세요.',
		email: '올바른 이메일형식으로 입력해주세요.',
		emailDomain: '올바른 형식으로 입력해주세요.',
		url: 'http://을 포함한 올바른 URL 을 입력해주세요.',
		date: ' 을(를) 날짜형식으로 입력해주세요.(ex : 2016-01-25)',
		dateISO: 'ISO 표준에 맞는 날짜형식으로 입력해주세요.', // TODO : 날짜 형식 예시 추가
		number: '올바른 값을 입력해주세요.',
		digits: '숫자만 입력이 가능합니다.',
		creditcard: '올바른 카드번호를 입력해주세요.',
		equalTo: '입력하신 내용이 일치하지 않습니다.',
		length: $.validator.format('은(는) {0} 자리로 입력해주세요.'),
		maxlength: $.validator.format('은(는) {0}글자 이하로 입력해주세요.'),
		minlength: $.validator.format('은(는) {0}글자 이상 입력해주세요.'),
		rangelength: $.validator.format('은(는) {0}글자 이상 {1}글자 이하로 입력해주세요.'),
		range: $.validator.format('은(는) {0} ~ {1} 사이의 값만 입력해주세요.'),
		max: $.validator.format('은(는) {0} 이하의 값을 입력해주세요.'),
		min: $.validator.format('은(는) {0} 이상의 값을 입력해주세요.'),
		num: '은(는) 숫자만 입력가능합니다.',
		numberdash: '숫자와 "-"만 입력 가능합니다.',
		engnum: '영문 또는 숫자만 입력해주세요.',
		kornum: '한글 또는 숫자만 입력해주세요.',
		kornumblank: '한글 또는 숫자만 입력해주세요.',
		eng: '영어만 입력 가능합니다.',
		kor: '한글만 입력 가능합니다.',
		count: $.validator.format('{0} 개 이상 등록되어야 합니다.'),
		userId: '아이디는 S, 숫자만 작성 가능합니다.',
		userPw: '비밀번호 입력조건이 올바르지 않습니다. 참고사항 확인 후 다시 입력해주세요.',
		idNumber: '주민등록번호는...',
		datePeriod: '시작일자를 종료일자보다 이전으로 선택해 주세요.',
		dateMaxPeriod: $.validator.format('검색기간은 {0}을 초과할 수 없습니다.'),
		dateRecentPeriod: $.validator.format('최근 {0}개월까지만 검색이 가능합니다.'),
		ignorebusinessno: '사용할 수 없는 사업자번호입니다.',
		addressdetail: '는 한글, 영어, 숫자, -, (), &, ~, @, 공백만 입력 가능합니다.'
	});

	//
	//$.validator.addMethod('date', function (value, element, params) {
	//    utils.log('aaaaa' + value);
	//    utils.log(this.optional(element));

	//    return this.optional(element);
	//});

	$.validator.addMethod('num', function (value, element, params) {
		return this.optional(element) || /^[0-9+]*$/.test(value);
	});

	$.validator.addMethod('numberdash', function (value, element, params) {
		return this.optional(element) || /^[0-9+\-]*$/.test(value);
	});

	$.validator.addMethod('engnum', function (value, element, params) {
		return this.optional(element) || /^[A-Za-z0-9+]*$/.test(value);
	});

	$.validator.addMethod('kornum', function (value, element, params) {
		return this.optional(element) || /^[가-힣0-9+]*$/.test(value);
	});

	$.validator.addMethod('kornumblank', function (value, element, params) {
		return this.optional(element) || /^[가-힣\s0-9+]*$/.test(value);
	});

	$.validator.addMethod('eng', function (value, element, params) {
		return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
	});

	$.validator.addMethod('kor', function (value, element, params) {
		return this.optional(element) || /^[가-힣\s]+$/.test(value);
	});

	$.validator.addMethod('length', function (value, element, params) {
		return this.optional(element) || value.length == element.getAttribute('length');
	});

	$.validator.addMethod('regex', function (value, element, params) {
		var re = new RegExp(params);
		return this.optional(element) || re.test(value);
	});

	// addMethod : count
	$.validator.addMethod('count', function (value, element, params) {
		return this.optional(element) || value >= params[0];
	});

	$.validator.addMethod("userId", function (value, element, params) {
		return ($.validator.methods.required.call(this, value, element)) &&
			utils.valid.userIdFormat(value);
	});

	/**
	 * @desc : datePeriod
	 */
	$.validator.addMethod("datePeriod", function (value, element, params) {
		return this.optional(element) || value <= $(params).val();
	});

	/**
	 * @desc : dateMaxPeriod
	 */
	$.validator.addMethod("dateMaxPeriod", function (value, element, params) {
		var range = '',
			startDate = '',
			valid = false,
			dateInfo = {};

		if (params.length == 3) {
			range = params[1].split('/');
			startDate = $(params[2]).val();
			if (value) {
				dateInfo = utils.getDateTerm(new Date(value), range[0], range[1]);
			}
		}

		if (range == '' || startDate == '') {
			valid = this.optional(element);
		} else {
			valid = this.optional(element) || startDate.replaceAll('.', '/').replaceAll('-', '/') >= dateInfo.startDate.format('yyyy/MM/dd');
		}

		return valid;
	});

	/**
	 * @desc : dateRecentPeriod
	 *
	 */
	$.validator.addMethod("dateRecentPeriod", function (value, element, params) {
		var range = '',
			endDate = new Date(value),
			recentStartDate = new Date().addMonth(-params),
			valid = false;

		utils.log(endDate.format('yyyyMMdd'));
		utils.log(recentStartDate.format('yyyyMMdd'));

		valid = this.optional(element) || parseInt(endDate.format('yyyyMMdd')) >= parseInt(recentStartDate.format('yyyyMMdd'));

		return valid;
	});

	$.validator.addMethod("userPw", function (value, element, params) {

		// OK, 영문자, 숫자, 특수문자 3가지 조합(대소문자 구문 안함)
		// OK, 최소 8자 최대 14자
		// OK, 특수문자 : !#$%^&*()-_;:<>,.[]{}  /[\{\}\[\]\/?.,;:|\)*~`!^\-_+<>@\#$%&\\\=\(\'\"]/gi;
		// OK, 동일문자 3자이상 연속 금지 ex)aaa, 111 //  /(\w)\1\1\1/
		// OK, 연속적 증감 숫자 문자 금지 ex) abc, 123  /([가-힣ㄱ-ㅎㅏ-ㅣ\x20])\1\1\1/; // 같은 한글 연속 4번 정규식
		///(0123)|(1234)|(2345)|(3456)|(4567)|(5678)|(6789)|(7890)/;
		// CehckPassWord(사용자필드아이디, 패드워드필드)

		var reg = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*()\-_;:<>,.[\]{\}])[A-Za-z\d!@#$%^&*()\-_;:<>,.[\]{\}]+$/g;

		//utils.log('(!utils.isStringContinue(value)) : ' + (!utils.isStringContinue(value)));
		//utils.log('(reg.test(value)) : ' + (reg.test(value)));

		return ($.validator.methods.required.call(this, value, element)) &&
			($.validator.methods.minlength.call(this, value, element, userIdValidToMinLength)) &&
			(!utils.isStringContinue(value)) &&
			(reg.test(value));
	});

	$.validator.addMethod("idNumber", function (value, element, params) {

		return ($.validator.methods.required.call(this, value, element)) &&
			($.validator.methods.minlength.call(this, value, element, userIdValidToMinLength)) &&
			($.validator.methods.engnum.call(this, value, element));
	});

	$.validator.addMethod("ignorebusinessno", function (value, element, params) {

		var filterBusinessNo = [1088188139];

		return !filterBusinessNo.contains(parseInt(value, 10));
	});

	$.validator.addMethod('emailDomain', function (value, element, params) {
		return this.optional(element) || /\S+\.\S+/.test(value);
	});

	$.validator.addMethod('addressdetail', function (value, element, params) {
		return this.optional(element) || /^[ㄱ-힣A-Za-z0-9\s\-,\(,\),&,~,@]+$/.test(value);
	});

	/**
	 * @desc : set Defaults
	 */
	$.validator.setDefaults({
		ignore: ':hidden',
		onkeyup: false,
		onfocusout: false,
		focusInvalid: true,
		onclick: false,
		rules: {
			emailId: {
				email: false
			},
			emailDomain: {
				email: false
			},
			email1: {
				email: false
			},
			email2: {
				email: false
			},
			ordererEmail1: {
				email: false
			},
			ordererEmail2: {
				email: false
			},
			ordererEmail3: {
				email: false
			},
			ordererEmail4: {
				email: false
			}

		},
		invalidHandler: function (e, validate) {
			$(validate.currentForm).find('.error-message').remove();

			$.each(validate.successList, function (key, item) {
				$(item).removeClass('form-error');
			});
		},
		showErrors: function (errorMap, errorList) {

			if (errorList.length === 0) return false;

			// var errorItem = errorList[0],
			//     $ele = $(errorItem.element),
			//     isComplexType = COMPLEX_TYPE.some(function (element, index, array) { return element == errorItem.method }),
			// 	message = isComplexType ? errorItem.message : getMessage($ele) + '' + errorItem.message;
			var $firstEl = $(errorList[0].element);

			$.each(errorList, function (key, item) {
				var $ele = $(item.element),
					isComplexType = COMPLEX_TYPE.some(function (element, index, array) {
						return element == item.method
					}),
					message = isComplexType ? item.message : getMessage($ele) + '' + item.message;


				$ele.addClass('form-error').after('<span class="error-message">' + message + '</span>');
			});

			//alert(message);

			$firstEl.focus(); //<-- android focus

			// if (isiOS) {
			//     $firstEl.one('blur', function () { //<-- ios focus 시 blur 이벤트 발생 대응
			//         $(this).focus();
			//     });
			// }

			function getMessage(_$element) {
				return _$element.data('message') ||
					_$element.data('title') ||
					_$element.parent('label').text() ||
					$('label[for="' + _$element.attr('id') + '"]').text() ||
					_$element.attr('placeholder') ||
					_$element.attr('name');
			};

			return;
		},
		submitHandler: function (form) {
			form.submit();
		}
	});

	/**
	 * @desc : Overwrite checkForm.
	 * @desc : Element 의 Name 이 N개인 경우, 예외처리 추가.
	 */
	$.validator.prototype.checkForm = function () {
		//overriden in a specific page
		this.prepareForm();

		var i = 0,
			elements = (this.currentElements = getElements(this));

		function getElements(_this) {
			var $elements = _this.elements();
			$prevObject = $elements.prevObject

			if ($elements.context != document) {
				$elements = $prevObject;
			}

			return $elements;
		}

		for (i = 0; elements[i]; i++) {
			this.check(elements[i]);
		}
		return this.valid();
	}

}
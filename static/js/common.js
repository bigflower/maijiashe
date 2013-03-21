/*
 * --------------------------------------------------
 * mai 1.0.0
 * Date: 2013-02-07 18:40
 * (c) 2009-2012 卖家社, http://www.maijiashe.com
 * --------------------------------------------------
 */
;(function($){
	var 
		version = '1.0.0',
		name = "mai",
		spaceName = window[name] = window[name] || {};
	
	// 验证集合
	mai.checkBox = {
		// 邮箱验证
		_email : function(value) {
			reg = /^\w{3,}@\w+(\.\w+)+$/;
			if (!reg.test(value)) {
				return false;
			} else {
				return true;
			}
		},
		// 数字验证
		_number : function(value) {
			reg = /^[a-z,A-Z]+$/;
			if (!reg.test(value)) {
				return false;
			} else {
				return true;
			}
		},
		// 电话号验证
		_tel : function(value) {
			reg = /^(\d{3,4}\-)?[1-9]\d{6,7}$/;
			if (!reg.test(value)) {
				return false;
			} else {
				return true;
			}
		},
		// 手机号验证
		_phone : function(value) {
			reg = /^(\+\d{2,3}\-)?\d{11}$/;
			if (!reg.test(value)) {
				return false;
			} else {
				return true;
			}
		},
		// 网址验证
		_http : function(value) {
			reg = /^http:\/\/[a-zA-Z0-9]+\.[a-zA-Z0-9]+[\/=\?%\-&_~`@[\]\':+!]*([^<>\"\"])*$/;
			if (!reg.test(value)) {
				return false;
			} else {
				return true;
			}
		},
		// 空验证
		_empty : function(value) {
			if ($.trim(value) == '') {
				return false;
			} else {
				return true;
			}
		},
		// 货币验证
		_price : function(value) {
			reg = /^\d+(.\d+)?$/;
			if (!reg.test(value)) {
				return false;
			} else {
				return true;
			}
		}
	};
	
	/**
	 * 验证内容
	 * @param	{name, String}	验证方式
	 * @param	{value, String} 验证内容
	 * @return	{Boole}
	 */
	mai.Check = function(name, value) {
		switch (name)
		{
			case 'email':
				return mai.checkBox._email(value);
			case 'number':
				return mai.checkBox._number(value);
			case 'tel':
				return mai.checkBox._tel(value);
			case 'phone':
				return mai.checkBox._phone(value);
			case 'http':
				return mai.checkBox._http(value);
			case 'empty':
				return mai.checkBox._empty(value);
			case 'price':
				return mai.checkBox._price(value);
			default : return false;
		}
	};
	window.mai = $.mai = mai;
}(this.mai || this.jQuery && (this.mai = jQuery), this));
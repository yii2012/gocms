//设置标题颜色colorpicker.js的回调函数
function set_title_color(color) {
	$('#J_title').css('color', color);
	$('#J_styleColor').val(color);
} 

//设置标题加粗,colorpicker.js的回调函数
function input_font_bold() {
	if($('#J_title').css('font-weight') == '700' || $('#J_title').css('font-weight')=='bold') {
		$('#J_title').css('font-weight','normal');
		$('#J_styleFontWeight').val('');
	} else {
		$('#J_title').css('font-weight','bold');
		$('#J_styleFontWeight').val('bold');
	}
}

/**
 * 统计字符数
 */
/*function strLen(str) {
	return ($.browser.msie && str.indexOf('\n') != -1) ? str.replace(/\r?\n/g, '_').length : str.length;
}*/

/**
 * js截取字符串
 */
/*function mbCutstr(str, maxLen, dot) {
	var len = 0;
	var ret = '';
	var dot = !dot ? '...' : '';
	maxLen = maxLen - dot.length;
	for(var i = 0; i < str.length; i++) {
		len += str.charCodeAt(i) < 0 || str.charCodeAt(i) > 255 ? 3 : 1;
		if(len > maxLen) {
			ret += dot;
			break;
		}
		ret += str.substr(i, 1);
	}
	return ret;
}*/

/**
 * 检验时否超过了规定的字符数(适用于utf-8编码，1个汉字作为3个字符来对待,（注意：gbk编码的为2个字符））
 * 依赖于strLen函数
 * @param obj 检验的对像
 * @param checkLen 对应填入数字的id名
 * @param maxLen 可以输入的字符数
 * @return 返回还可以输入字符的个数
 */
/*function strlenVerify(obj, checkLen, maxLen = 200) {
	var value = obj.value,
		maxLen = maxLen,
		canIptLen = maxLen, //还可以可以输入字符的长度
	    curLen = strLen(value);  //当前字符串的长度
	
	for (var i = 0; i < curLen; i++) {
		if (value.charCodeAt(i) < 0 || value.charCodeAt(i) > 255) {
			canIptLen -= 3;	//对于汉字减去三个字符
		} else {
			canIptLen -= 1;	
		}
	}
	if (maxLen > curLen) {
		$("#" + checkLen).text(canIptLen);	
	} else {
		obj.value = mbCutstr(value, maxLen, true);
	}
		
}*/

function strlen_verify(obj, checklen, maxlen) {
	var v = obj.value, charlen = 0, maxlen = !maxlen ? 200 : maxlen, curlen = maxlen, len = strlen(v);
	for(var i = 0; i < v.length; i++) {
		if(v.charCodeAt(i) < 0 || v.charCodeAt(i) > 255) {
			curlen -= 2;
		}
	}
	if(curlen >= len) {
		$('#'+checklen).html(curlen - len);
	} else {
		obj.value = mb_cutstr(v, maxlen, true);
	}
}
function mb_cutstr(str, maxlen, dot) {
	var len = 0;
	var ret = '';
	var dot = !dot ? '...' : '';
	maxlen = maxlen - dot.length;
	for(var i = 0; i < str.length; i++) {
		len += str.charCodeAt(i) < 0 || str.charCodeAt(i) > 255 ? 3 : 1;
		if(len > maxlen) {
			ret += dot;
			break;
		}
		ret += str.substr(i, 1);
	}
	return ret;
}
function strlen(str) {
	return ($.browser.msie && str.indexOf('\n') != -1) ? str.replace(/\r?\n/g, '_').length : str.length;
}
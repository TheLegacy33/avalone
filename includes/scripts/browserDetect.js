/**
 * Permet la détection du navigateur
 */

var browser = new Object();

browser["isOpera"] = function(){
	return (!!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0);
};
	
browser["isFirefox"] = function(){
	return (typeof InstallTrigger !== 'undefined');
};
	
browser["isSafari"] = function(){
	return (Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0);
};

browser["isChrome"] = function() {
	return (!!window.chrome && !isOpera);
};
	
browser["isIE"] = function() {
	return (/*@cc_on!@*/false || !!document.documentMode);
};

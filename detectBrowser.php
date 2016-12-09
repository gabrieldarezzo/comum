<?php

//Detect special conditions devices
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

//do something with this information
if( $iPod || $iPhone || $Android || $webOS || $iPad){
    echo 'link cel';
} else {
	echo 'iframe';
	
}


//inJavascript
/*
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	alert('cel');
} else {
	alert('pc');
}
*/

//Função abaixo é JS!


// Opera 8.0+
var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
	// Firefox 1.0+
var isFirefox = typeof InstallTrigger !== 'undefined';
	// Safari 3.0+ "[object HTMLElementConstructor]" 
var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0 || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || safari.pushNotification);
	// Internet Explorer 6-11
var isIE = /*@cc_on!@*/false || !!document.documentMode;
	// Edge 20+
var isEdge = !isIE && !!window.StyleMedia;
	// Chrome 1+
var isChrome = !!window.chrome && !!window.chrome.webstore;
	// Blink engine detection
var isBlink = (isChrome || isOpera) && !!window.CSS;




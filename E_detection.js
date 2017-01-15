//User Info detection software (C) Ethan Elliott 2014
/*	BEGIN CODE	*/
//Variable Deceleration
var visitn;
var visitCout;
var loadTime;
var browserName;
var browserVendor;
var windowSize;
var browserLanguage;
var platformName;
var OS;
var getUserInfo = new Object();
getUserInfo.loadtime;
getUserInfo.browser;
getUserInfo.browservendor;
getUserInfo.windowsize;
getUserInfo.browserlang;
getUserInfo.platform;
getUserInfo.operatingsys;
getUserInfo.mobile;
getUserInfo.visit;
var yes = true;
function getCookieVal (offset) {var endstr = document.cookie.indexOf (";", offset);if (endstr == -1)endstr = document.cookie.length;return unescape(document.cookie.substring(offset, endstr));}
function GetCookie (name) {var arg = name + "=";var alen = arg.length;var clen = document.cookie.length;var i = 0;while (i < clen) {var j = i + alen;if (document.cookie.substring(i, j) == arg)return getCookieVal (j);i = document.cookie.indexOf(" ", i) + 1;if (i == 0) break; }return null;}
function SetCookie (name, value) {var argv = SetCookie.arguments;var argc = SetCookie.arguments.length;var expires = (2 < argc) ? argv[2] : null;var path = (3 < argc) ? argv[3] : null;var domain = (4 < argc) ? argv[4] : null;var secure = (5 < argc) ? argv[5] : false;document.cookie = name + "=" + escape (value) +((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +((path == null) ? "" : ("; path=" + path)) +((domain == null) ? "" : ("; domain=" + domain)) +((secure == true) ? "; secure" : "");}
function DisplayInfo() {var expdate = new Date();var visit;expdate.setTime(expdate.getTime() +  (24 * 60 * 60 * 1000 * 365)); if(!(visit = GetCookie("visit"))) visit = 0;visit++;SetCookie("visit", visit, expdate, "/", null, false);var visitn = visit;}
function isMobile() {if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)){return true;}else{return false;}}
//The Initialization Function
function loadUserInfo()
{
	DisplayInfo();
	function getCount() {var visitn = GetCookie("visit");if(visitn > 1){var visitCount = "You have been here: " + visitn + " times before";}else{var visitCount = "First Visit!"}return visitCount;}
	var BrowserDetect = {init: function () {this.browser = this.searchString(this.dataBrowser) || "An unknown browser";this.version = this.searchVersion(navigator.userAgent)|| this.searchVersion(navigator.appVersion)|| "An unknown version";},searchString: function (data) {for (var i=0;i<data.length;i++)	{var dataString = data[i].string;var dataProp = data[i].prop;this.versionSearchString = data[i].versionSearch || data[i].identity;if (dataString) {if (dataString.indexOf(data[i].subString) != -1)return data[i].identity;}else if (dataProp)return data[i].identity;}},searchVersion: function (dataString) {var index = dataString.indexOf(this.versionSearchString);if (index == -1) return;return parseFloat(dataString.substring(index+this.versionSearchString.length+1));},dataBrowser: [{string: navigator.userAgent,subString: "Chrome",identity: "Chrome"},{string: navigator.vendor,subString: "Apple",identity: "Safari",versionSearch: "Version"},{prop: window.opera,identity: "Opera",versionSearch: "Version"},{string: navigator.userAgent,subString: "Firefox",identity: "Firefox"},{string: navigator.userAgent,subString: "Netscape",identity: "Netscape"},{string: navigator.userAgent,subString: "MSIE",identity: "Explorer",versionSearch: "MSIE"},{string: navigator.userAgent,subString: "Gecko",identity: "Mozilla",versionSearch: "rv"},{string: navigator.userAgent,subString: "Mozilla",identity: "Netscape",versionSearch: "Mozilla"}],};BrowserDetect.init();
	var today=new Date();
	var h=today.getHours();
	var m=today.getMinutes();
	var s=today.getSeconds();
	if (s < 10){s= "0" + s;}else{s=s;}
	if (m < 10){m= "0" + m;}else{m=m;}
	if (h < 10){h= "0" + h;}else{h=h;}
	//Adding Value to those variables
	loadTime = h+ ":" +m+ ":" +s+ "";
	browserName = BrowserDetect.browser +" "+ BrowserDetect.version;
	browserVendor = navigator.vendor;
	windowSize = "Width:" + innerWidth + "px " +" |x|  "+ "Height:" + innerHeight + "px";
	browserLanguage = navigator.language;
	platformName = navigator.platform;
	/*OS variable*/
	/*mobileDevice variable*/
	//Platform Search
	if (platformName.search("Win") > -1){if (platformName){OS = "Windows 32 bit";}else if (platformName.search("64") > -1){OS = "Windows 64 bit";}else{OS = "Windows";}}else if (platform.search("Mac") > -1){OS = "Mac";}else if (platform.search("iPhone") > -1){OS = "iOS";}else if(platform.search("Linux") > -1){OS = "Linux";}else{OS = "Unknown";}
	//Object set
	getUserInfo = new Object();
	getUserInfo.loadtime= loadTime; 			//loadtime is the time (in hours, minutes, and seconds) that the page was fully loaded [getUserInfo.loadTime]
	getUserInfo.browser= browserName;			//browser is the name and version of the current web browser [getUserInfo.browser]
	getUserInfo.browservendor= browserVendor;	//vendor is the name of the company / organization that created the browser [getUserInfo.browservendor]
	getUserInfo.windowsize= windowSize;			//windowsize is the width and height (in pixels(px)) of the viewing area [getUserInfo.windowsize]
	getUserInfo.browserlang= browserLanguage;	//language is the currently used language to view the web-page [getUserInfo.browserlang]
	getUserInfo.platform= platformName;			//platform is the full name of the operating system [getUserInfo.platform]
	getUserInfo.operatingsys= OS;				//operatingsys is the current operating system that the browser is installed on [getUserInfo.operatingsys]
	getUserInfo.mobile= isMobile();				//True or false [getUserInfo.mobile]
	getUserInfo.visit = getCount();
	//Console Log Data
	console.log(getUserInfo);
	//Error Checking
	window.onerror = function error(msg, url, line)
	{
		console.log("Error Type : " + msg + "\n\vUrl : " + url + " \n\vLine number : " + line );
	}
}
/*	END CODE	*/
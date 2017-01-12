function judge(a){
	var result=navigator.userAgent.indexOf(a);
	return result;
}

function info(){
	var result=navigator.userAgent;
	return result;
}

//Device Serious

function isPC(){
	if(judge("Mobile")!=-1 || judge("Android")!=-1 || judge("Symbian")!=-1){
		return false;
	}
	else{
		return true;
	}
}

function isWindows(){
	if(judge("Windows")!=-1){
		return true;
	}
	else{
		return false;
	}
}

function isMac(){
	if(judge("Macintosh")!=-1){
		return true;
	}
	else{
		return false;
	}
}

function isLinux(){
	if(judge("Linux")!=-1 && judge("Mobile")==-1){
		return true;
	}
	else{
		return false;
	}
}

function isMobile(){
	if(judge("Mobile")==-1 && judge("Android")==-1 && judge("Symbian")==-1){
		return false;
	}
	else{
		return true;
	}
}

function isAndroid(){
	if(judge("Android")==-1){
		return false;
	}
	else{
		return true;
	}
}

function isAndroidPad(){
	if(judge("Android")!=-1 && judge("Mobile")==-1){
		return true;
	}
	else{
		return false;
	}
}

function isiOS(){
	if(judge("iPad")!=-1 || judge("iPhone")!=-1 || judge("iPod")!=-1){
		return true;
	}
	else{
		return false;
	}
}

function isiPad(){
	if(judge("iPad")!=-1){
		return true;
	}
	else{
		return false;
	}
}

function isSymbian(){
	if(judge("Symbian")!=-1){
		return true;
	}
	else{
		return false;
	}
}

function isWP(){
	if(judge("Windows Phone")!=-1){
		return true;
	}
	else{
		return false;
	}
}

//Browser Serious

function isWebKit(){
	if(judge("WebKit")!=-1){
		return true;
	}
	else{
		return false;
	}
}

function isFirefox(){
	if(judge("rv")!=-1 && judge("Trident")==-1){
		return true;
	}
	else{
		return false;
	}
}

function isIE(){
	if(judge("MSIE")!=-1 || judge("Trident")!=-1){
		return true;
	}
	else{
		return false;
	}
}

function IEversion(a){
	if(judge("IE "+a+".0")!=-1){
		return true;
	}
	else{
		return false;
	}
}

function isOpera(){
	if(judge("Opera")!=-1){
		return true;
	}
	else{
		return false;
	}
}

function isWeChat(){
	if(judge("MicroMessenger")!=-1){
		return true;
	}
	else{
		return false;
	}
}

function isEdge(){
	if(judge("Edge")==-1){
		return false;
	}
	else{
		return true;
	}
}
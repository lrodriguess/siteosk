// Arquivo de config DTracking
var _dTrackingVersion = "1.0";
var _dTrackingSite = "105";

function _getDtrackingQueryParams(_getDtrackingQS) {
    _getDtrackingQS = _getDtrackingQS.split("+").join(" ");
    var _dTrackingParams = {}, _dTrackingTokens,
        _dTrackingRe = /[?&]?([^=]+)=([^&]*)/g;
    while (_dTrackingTokens = _dTrackingRe.exec(_getDtrackingQS)) {
        _dTrackingParams[decodeURIComponent(_dTrackingTokens[1])]
            = decodeURIComponent(_dTrackingTokens[2]);
    }
    return _dTrackingParams;
}

function _setDtrackingCookie(_dTrackingCname,_dTrackingValue)
{
	var _dTrackingExdate=new Date();
	var _dTrackingTime = _dTrackingExdate.getTime();
	_dTrackingTime += 1800 * 1000;
	_dTrackingExdate.setTime(_dTrackingTime);
	document.cookie = _dTrackingCname + '=' + _dTrackingValue + '; expires=' + _dTrackingExdate.toGMTString() + '; path=/';
}

function _getDtrackingCookie(_dTrackingCname)
{
	var _dTrackingI,_dTrackingX,_dTrackingY,__ARRcookies=document.cookie.split(";");
	for (_dTrackingI=0;_dTrackingI<__ARRcookies.length;_dTrackingI++)
  	{
  		_dTrackingX=__ARRcookies[_dTrackingI].substr(0,__ARRcookies[_dTrackingI].indexOf("="));
  		_dTrackingY=__ARRcookies[_dTrackingI].substr(__ARRcookies[_dTrackingI].indexOf("=")+1);
  		_dTrackingX=_dTrackingX.replace(/^\s+|\s+$/g,"");
  	if (_dTrackingX==_dTrackingCname)
    {
    	return unescape(_dTrackingY);
    }
  }
}

var _dTrackingQuery = _getDtrackingQueryParams(document.location.search);
if (_dTrackingQuery.__dtracking != undefined)
{
	_setDtrackingCookie('_dtrackingCookie', _dTrackingQuery.__dtracking);
}

var _dtrackingCookieValue = _getDtrackingCookie("_dtrackingCookie");
if (_dtrackingCookieValue!=null && _dtrackingCookieValue!="")
{
	var _dtrackingGA = document.createElement('script'); _dtrackingGA.type = 'text/javascript'; _dtrackingGA.async = true;
	_dtrackingGA.src = document.location.protocol + '//receiver.tracking.dinamize.com:80/tracking/js/'+_dTrackingVersion+'?dtrackingCookie='+_dtrackingCookieValue+'&dtrackingSite='+_dTrackingSite;
	var _dtrackingS = document.getElementsByTagName('script')[0]; _dtrackingS.parentNode.insertBefore(_dtrackingGA, _dtrackingS);
}

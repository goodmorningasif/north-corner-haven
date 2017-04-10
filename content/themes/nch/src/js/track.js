/**
*
* animateTrack
*
* Animates Track Lines between elements
*
* @param {current}      :   specify current element
* @param {currentBot}   :   specify bottom position of current element
* @param {nextTop}      :   specify top position of next element
* @params{adjustment}   :   If additional adjustment to bottom is needed
*/


var animateTrack = function(current, currentBot, nextTop, adjustment){
	var thisTop;
	var thisHeight;
	var browserWidth = $j(window).width();
	var mediaBreakSmall = 900;

	if (adjustment && browserWidth > mediaBreakSmall ){
    thisTop = currentBot - adjustment;
    thisHeight = (nextTop - currentBot) + 80 + adjustment;
	} else {
		thisTop = currentBot - 15;
		thisHeight = (nextTop - currentBot) + 80;
	}

  $j('#' + current).css({'top': thisTop, 'height': thisHeight});
}


/**
*
* fadeInCopy
*
* Fades in children elements
*
* @param{current}   :   specify which element you'd like to execute function on
*
*/

var fadeInCopy = function(current){
  $j('#' + current).children().css('opacity', 1);

}

/**
*
* fadeOutCopy
*
* Fades out children elements
*
* @param{currnet}   :   specify which element you'd like to execute function on
*
*/

var fadeOutCopy = function(current){
  $j('#' + current).children().css('opacity', 0);

}

/**
*
* batchFade
*
* Runs through a list of elements and executes action
*
* @param{action}   :   specify action to be performed. 
* @param{el}       :   specify elements to loop through, array
*
*/

var batchFade = function(action, el){
	for(var i=0;i<el.length; i++) {
		action(el[i]);
	}
}

